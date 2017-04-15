<?php
#start session
session_start();
include 'pa4dbUtilities.php';

#Code for determining if the user is logged-in
if (isset($_SESSION['user1']))
{
  $user = $_SESSION['user1'];
}
else
{
  header("location: login.php");
}

#check if post is requested and if isset stores the info into the database
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  if(isset($_POST['name']) && isset($_POST['email'])
    && isset($_POST['university']) && isset($_POST['city']))
    {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $university = $_POST['university'];
      $city = $_POST['city'];
      insertUser($name, $email, $university, $city);
      header('Location: display-customers.php');
    }
    else
    {
      header('Location: addCustomer.php');
    }
}
?>

<!-- HTML with embedded PHP to display a table and lists via database information-->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>Book Template</title>
   <link rel="shortcut icon" href="../../assets/ico/favicon.png">
   <link href="bootstrap3_bookTheme/dist/css/bootstrap.min.css" rel="stylesheet">
   <link href="bootstrap3_bookTheme/theme.css" rel="stylesheet">

</head>
<body>
<!-- Code for displaying the add customers form -->
<?php include 'includes/book-header.inc.php'; ?>
<div class="container">
   <div class="row">
      <div class="col-md-2">
         <?php include 'includes/book-left-nav.inc.php'; ?>
      </div>
      <div class="col-md-8">
         <div class="panel panel-danger spaceabove">
           <div class="panel-heading"><h4>Add Customer</h4></div>
           <form role="search" method="POST" action="addCustomer.php">
             <h5 style="margin-left:100px;">Name</h5>
             <span><input name="name" style="width:50%; margin-left:100px;" type="text"></span>
             <br>
             <h5 style="margin-left:100px;">University</h5>
             <span><input name="university" style="width:50%; margin-left:100px;" type="text"></span>
             <br>
             <h5 style="margin-left:100px;">City</h5>
             <span><input name="city" style="width:50%; margin-left:100px;" type="text"></span>
             <br>
             <h5 style="margin-left:100px;">Email</h5>
             <span><input name="email" style="width:50%; margin-left:100px;" type="email"></span>
             <br></br>
             <button style="margin-left:130px;" type="submit" class="btn btn-primary" style="margin:10px,0,10px,0;">Add Customer</button>
          </form>
         </div>
      </div>

      <!-- Code for displaying unordered list from the categories table in the pa3 database -->
      <div class="col-md-2">
        <br>
        <button class="btn btn-primary" style="width:98%; background-color:#990099;"><h5>Categories</h5></button>
        <br></br>
        <button class="btn btn-primary" style="width:98%; background-color:#990099;"><h5>Imprints</h5></button>
        <br>
      </div>
      </div>
   </div>
</div>

<!-- Bootstrap scripts -->
 <script src="bootstrap3_bookTheme/assets/js/jquery.js"></script>
 <script src="bootstrap3_bookTheme/dist/js/bootstrap.min.js"></script>
 <script src="bootstrap3_bookTheme/assets/js/holder.js"></script>
</body>
</html>
