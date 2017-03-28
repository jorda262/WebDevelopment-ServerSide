<!-- HTML SECTION-->
<!DOCTYPE html>
<html>
<head>
  <?php
  #Variables for code reusability
  $host = 'localhost';
  $port = '3306';
  $name = 'lab8';
  $user = 'root';
  $password = 'root';
  $table = 'countries';
  $connString = "mysql:host=$host; port=$port; dbname=$name; charset=utf8mb4";
  $n = "name";
  $object = new PDO($connString, $user, $password);
  $object->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  ?>
  <title>Country Selecter</title>
</head>
<body>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
     Select a country <select name="name">
      <?php
      #PHP to fill the HTML options dropdown from the database
      #Lab8 from table countries
      $mysql = "select * from $table";
      $result = $object->query($mysql);
      $array = $result->fetchall();
      #Loop to cycle through all members of the database
      foreach ($array as $index)
      {
        if (isset($_POST[$n]) && $_POST[$n] == $index[0])
        {
          echo "<option value='{$index[0]}' selected>{$index[1]}</option>";
        }
        else
        {
          echo "<option value='{$index[0]}'>{$index[1]}</option>";
        }
      }
      ?>
     </select>
     <input type="submit" value="Submit">
  </form>
<?php
#PHP for fetching the chosen details of the desired row of the database
if (isset($_POST[$n]))
{
  $key = $_POST[$n];
  $mysql = "select * from $table where id=$key";
  $result = $object->query($mysql);
  $array = $result->fetch(PDO::FETCH_NUM);
  echo "Capital: {$array[2]}</br>";
  echo "Population: {$array[3]} Million";
}
?>
</body>
</html>
