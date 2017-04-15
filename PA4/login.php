<?php

session_start();
include 'pa4dbUtilities.php';


$email = "";
$password = "";
$emailMessage = '';
$emailClass = '';
$passwordMessage = '';
$passwordClass = '';
$emailMessage = '';
$emailClass = '';
$passwordMessage = '';
$passwordClass = '';


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  if(isset($_POST['email']) && isset($_POST['password']) )
  {
    $username = $_POST["email"];
    $pass = $_POST["password"];
    if(validateUserName($username) && validatepassword($pass))
    {
      $_SESSION['user1'] = $username;
      header("location: home.php");
    }
    else
    {
      header("location: login.php");
    }

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
<?php include 'includes/book-header.inc.home.php'; ?>
<div class="container">
   <div class="row">
      <div class="col-md-2">
      </div>
      <div class="col-md-8">
         <div class="panel panel-danger spaceabove">
           <div class="panel-heading"><h4>Login</h4></div>
           <form role="search" method="POST" action="login.php">
             <h5>Email address</h5>
             <span><input name="email" style="width:100%" type="email" value="<?php echo $email; ?>"></span>
             <p class="help-block"><?php echo $emailMessage; ?></p>
             <br>
             <h5>Password</h5>
             <span><input name="password" style="width:100%;" type="password" value="<?php echo $password; ?>"></span>
             <p class="help-block"><?php echo $passwordMessage; ?></p>
             <br>
             <button type="submit" class="btn btn-primary" style="margin:10px,0,10px,0;">Submit</button>
          </form>
         </div>
      </div>
    </div>
</div>

 <script src="bootstrap3_bookTheme/assets/js/jquery.js"></script>
 <script src="bootstrap3_bookTheme/dist/js/bootstrap.min.js"></script>
 <script src="bootstrap3_bookTheme/assets/js/holder.js"></script>
</body>
</html>
