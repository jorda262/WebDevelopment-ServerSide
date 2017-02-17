<!DOCTYPE html>
<html lang="en">
<head>
  <?php
     $countries = array(array("AR","Argentina","Buenos Aires"),array("AT","Austria","Vienna"),array("BE","Belgium","Brussels"),array("CA","Canada","Ottawa"));

     $images = array("AR" => "ar.jpg", "AT" => "at.jpg", "BE" => "be.jpg", "CA" => "ca.jpg");
   ?>
</head>
  <body>
    <h1>Lab 5</h1>
    <table>
      <tr><td><strong>Country</strong></td><td><strong>Capital</strong></td></tr>
      <?php
        for($i=0; $i<count($countries); $i++)
        {
          echo "<tr><td><a href='country.php?index={$countries[$i][0]}'>{$countries[$i][1]}</a></td><td>{$countries[$i][2]}</td></tr>";
        }
      ?>
    </table>
  </body>
</html>
