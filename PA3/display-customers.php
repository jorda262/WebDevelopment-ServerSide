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
   <?php
   $s = "search";
   #Try-Catch exception handling directly from the  textbook
   #Sets up the connection with the database
   try
   {
     $connString = "mysql:host=localhost; dbname=csci2006";
     $user = "root";
     $pass = "root";

     $pdo = new PDO($connString,$user,$pass);
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   }
   catch (PDOException $e)
   {
     die($e->getMessage());
   }
   ?>
</head>
<body>
<?php include 'includes/book-header.inc.php'; ?>
<div class="container">
   <div class="row">
      <div class="col-md-2">
         <?php include 'includes/book-left-nav.inc.php'; ?>
      </div>
      <div class="col-md-8">
         <div class="panel panel-danger spaceabove">
           <div class="panel-heading"><h4>My Customers</h4></div>
           <table class="table">
             <tr>
               <th>Name</th>
               <th>Email</th>
               <th>University</th>
               <th>City</th>
             </tr>
             <?php
             #Loop for displaying the specific name requested from the search form parameter
             #Search will only yield results if the entire name is entered
             #If nothing is entered and you search it will yeild the entire table
               if (isset($_POST[$s]) && !empty($_POST[$s]))
               {
                 $string = $_POST[$s];
                 $mysql = "select * from customers where name='%$string%'";
                 $result = $pdo->query($mysql);
                 $line = $result->fetch();
                 foreach($line as $element)
                 {
                   echo "<tr><td>{$element[0]}</td><td>{$element[1]}</td><td>{$element[2]}</td><td>{$element[3]}</td></tr>";
                 }
               }

               #Loop for displaying the entire table regardless of the search parameter
               elseif (!isset($POST[$s]))
               {
                 $mysql = "select * from customers";
                 $result = $pdo->query($mysql);
                 while($line = $result->fetch())
                 {
                   echo "<tr><td>{$line[0]}</td><td>{$line[1]}</td><td>{$line[2]}</td><td>{$line[3]}</td></tr>";
                 }
               }
              ?>
           </table>
         </div>
      </div>

      <!-- Code for displaying unordered list from the categories table in the pa3 database -->
      <div class="col-md-2">
         <div class="panel panel-info spaceabove">
            <div class="panel-heading"><h4>Categories</h4></div>
               <ul class="nav nav-pills nav-stacked">
                 <?php
                 #PHP code for looping through the entire categories table
                 $mysql = "select * from categories";
                 $result = $pdo->query($mysql);
                 while($line = $result->fetch())
                 {
                   echo "<li><a href ='#'>{$line[0]}</a></li>";
                 }
                 ?>
               </ul>
         </div>

         <!-- Code for displaying unordered list from the imprints table in the pa3 database -->
         <div class="panel panel-info">
            <div class="panel-heading"><h4>Imprints</h4></div>
            <ul class="nav nav-pills nav-stacked">
            <?php
              #PHP code for looping through the entire imprints table
              $mysql = "select * from imprints";
              $result = $pdo->query($mysql);
              while($line = $result->fetch())
              {
                echo "<li><a href ='#'>{$line[0]}</a></li>";
              }
           ?>
            </ul>
         </div>
      </div>
      </div>
   </div>
</div>

 <script src="bootstrap3_bookTheme/assets/js/jquery.js"></script>
 <script src="bootstrap3_bookTheme/dist/js/bootstrap.min.js"></script>
 <script src="bootstrap3_bookTheme/assets/js/holder.js"></script>
</body>
</html>
