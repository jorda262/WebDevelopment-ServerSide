<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
  <form name="form1" method="post" action="question4.php">
    Convert<input type="text" name="srcamt">
    <select name="basecurr">
      <option>New Zealand Dollars</option>
      <option>Canadien Dollars</option>
      <option>US Dollars</option>
    </select>
    to<select name="destcurr">
      <option>New Zealand Dollars</option>
      <option>Canadien Dollars</option>
      <option>US Dollars</option>
    </select>
    <input type="submit" name="Do it!" value="go">
  </form>

  <?php
  $currencies = array("Canadien Dollars" => "CAD",
                      "New Zealand Dollars" => "NZD",
                      "US Dollars" => "USD");

  function printResult($initial, $start, $finish, $base, $dest)
  {
    $rates = array("CAD" => 0.97645,"NZD" => 1.20642,"USD" => 1.0);
    $total = ($initial * (($rates["$finish"])/($rates["$start"])));
    $totalTrunc = number_format($total, 2, '.', '');
    $initialTrunc = number_format($initial, 2, '.', '');
    echo "<h3>Conversion Results</h3>";
    echo '<p>'.$initialTrunc." ".$base." converts to ".$totalTrunc." ".$dest.'</p>';
  }

  $initialAmount = $_POST["srcamt"];
  $current = $_POST["basecurr"];
  $final = $_POST["destcurr"];
  $base = $currencies["$current"];
  $dest = $currencies["$final"];

  if($base == "NZD")
  {
    if($dest == "CAD")
    {
      printResult($initialAmount, $base, $dest, $current, $final);
    }
    elseif ($dest == "USD")
    {
      printResult($initialAmount, $base, $dest, $current, $final);
    }
  }
  if($base == "CAD")
  {
    if($dest == "NZD")
    {
      printResult($initialAmount, $base, $dest, $current, $final);
    }
    elseif ($dest == "USD")
    {
      printResult($initialAmount, $base, $dest, $current, $final);
    }
  }
  if($base == "USD")
  {
    if($dest == "CAD")
    {
      printResult($initialAmount, $base, $dest, $current, $final);
    }
    elseif ($dest == "NZD")
    {
      printResult($initialAmount, $base, $dest, $current, $final);
    }
  }
  ?>
</body>
</html>
