<?php
  include "countryTable.php";
  $image = $_GET['index'];
  $pic = $images[$image];

  echo "<img src='$pic'>"

 ?>
