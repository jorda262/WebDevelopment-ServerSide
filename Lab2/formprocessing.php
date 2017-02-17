<html lang="en">
<head>
<meta charset="utf-8">
<?php
//Header
echo '<h1>Product Details</h1>';
//Create a Table for information
echo '<table>';
  //First table row with two columns
  echo '<tr>';
    echo "<td> <strong> Product's Name </strong></td>";
    echo '<td>' . $_POST["name"] . '</td>';
  echo '</tr>';
  //Second table row with two columns
  echo '<tr>';
    echo '<td> <strong> Price </strong> </td>';
    echo '<td>' . $_POST["price"] . '</td>';
  echo '</tr>';
  //Third table row with two colums
  echo '<tr>';
    echo '<td> <strong> Quantity </strong> </td>';
    echo '<td>' . $_POST["quantity"] . '</td>';
  echo '</tr>';
  //Third table row with two colums
  echo '<tr>';
    echo '<td> <strong> Total </strong> </td>';
    echo '<td>' . $_POST["quantity"] * $_POST["price"] . '</td>';
  echo '</tr>';
echo '</table>';
 ?>
</head>
</html>
