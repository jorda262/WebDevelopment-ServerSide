<html lang="en">
<head>
  <meta charset="utf-8">
  <?php

    //Function for calculating the total charge
    function calculateCharge($base, $extraHours, $charge)
    {
      return ($base + ($extraHours * $charge));
    }

    $plan = $_POST["package"];
    $hours = $_POST["hours"];
    $base;
    $extraHours;
    $charge;

    //Switch statement for plans
    switch($plan)
    {
       //Switch case statement for A or a
       case 'A':
       case 'a':
        $base = 9.99;
        if($hours > 10)
        {
          $extraHours = ($hours - 10);
          $charge = 3.00;
          echo "Base Monthly bill: $$base <br>";
          echo "Extra Hours: $extraHours @ $$charge per hour.<br>";
          echo "Total Monthly bill: $" . calculateCharge($base, $extraHours, $charge);
        }
        else
        {
          echo "Base Monthly bill: $$base <br>";
        }
        break;

       //Switch case statement for B or b
       case 'B':
       case 'b':
        $base = 14.99;
        if($hours > 20)
        {
          $extraHours = ($hours - 20);
          $charge = 2.00;
          echo "Base Monthly bill: $$base <br>";
          echo "Extra Hours: $extraHours @ $$charge per hour.<br>";
          echo "Total Monthly bill: $" . calculateCharge($base, $extraHours, $charge);
        }
        else
        {
          echo "Base Monthly bill: $$base <br>";
        }
        break;

       //Switch case statement for C or c
       case 'C':
       case 'c':
        $base = 24.99;
        if($hours > 30)
        {
          $extraHours = ($hours - 30);
          $charge = 1.00;
          echo "Base Monthly bill: $$base <br>";
          echo "Extra Hours: $extraHours @ $$charge per hour.<br>";
          echo "Total Monthly bill: $" . calculateCharge($base, $extraHours, $charge);
        }
        else
        {
          echo "Base Monthly bill: $$base <br>";
        }
        break;

       //Switch case statement for D or d
       case 'D':
       case 'd':
       $base = 30;
        if($hours > 0)
        {
          echo "Base Monthly bill: $$base <br>";
        }
        break;

       //Switch case statement for default values
       default:
        echo "You didnt enter a valid plan A-D!";
        break;
     }
  ?>
</head>
</html>
