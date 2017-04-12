<?php
include 'lab10validation.php';
session_start();

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

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Chapter 13</title>

   <!-- Bootstrap core CSS -->
   <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet">

   <!-- Custom styles for this template -->
   <link href="chapter13-project01.css" rel="stylesheet">

   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]>
   <script src="bootstrap3_defaultTheme/assets/js/html5shiv.js"></script>
   <script src="bootstrap3_defaultTheme/assets/js/respond.min.js"></script>
   <![endif]-->
</head>

<body>

<div class="container">
   <div class="row">
      <div class="col-md-3">
      </div>
      <div class="col-md-6">
         <div id="login">

            <div class="page-header">
               <h2>Welcome valid user</h2>
            </div>
              <button id="logout">Logout</button>
         </div>
      </div>
      <div class="col-md-3">
      </div>
   </div>
</div>  <!-- end container -->

 <!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
<script src="bootstrap3_defaultTheme/assets/js/jquery.js"></script>
<script src="bootstrap3_defaultTheme/dist/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
$('#logout').click(function()
{
  session_start();
  session_destroy();
  header("location: chapter13-project01.php");
  exit();
}
);
</script>
<script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
<script type="text/javascript"></script>
</body>
</html>
