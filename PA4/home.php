<?php
#start session
session_start();
$user;

#Code for determining if the user is logged-in
if (isset($_SESSION['user1']))
{
  $user = $_SESSION['user1'];
}
else
{
  header("location: login.php");
}
?>

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
<!-- Code for generating buttons and loading header and left nav bar -->
<?php include 'includes/book-header.inc.php'; ?>
<div class="container">
   <div class="row">
      <div class="col-md-2">
         <?php include 'includes/book-left-nav.inc.php'; ?>
      </div>
      <div class="col-md-8">
         <div class="panel panel-danger spaceabove">
           <div class="panel-heading">
             <a href="display-customers.php"><button class="btn btn-primary" style="width:25%; margin-right:50px;">List Customers</button></a>
             <a href="addCustomer.php"><button class="btn btn-primary" style="width:25%;">Add Customer</button></a>
           </div>
         </div>
      </div>
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
