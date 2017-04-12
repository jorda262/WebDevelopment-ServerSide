<?php
session_start();
include 'lab10databaseutilities.php';

if(isset($_SESSION['user']))
{
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $username = $_POST["email"];
    $pass = $_POST["password"];
    if(validateUserName($username) && validatepassword($pass))
    {
      $_SESSION['user'] = $username;
      header("location: chapter13-project01welcome.php");
    }
    else
    {
      header("location: chapter13-project01.php");
    }
   }
}
else{
  header("location: chapter13-project01welcome.php");
}
  #FUNCTION FOR VALIDATING USER NAME
  function validateUserName($username)
  {
    $flag = false;
    $column = "username";
    $arr = selectColumn($column);
    foreach ($arr as $key=> $value)
    {
      if($username == $value)
        {$flag =true;}
    }
    return $flag;
  }

  function validatepassword($pass)
  {
    $flag = false;
    $column = "password";
    $arr = selectColumn($column);
    foreach ($arr as $key=> $value)
    {
      if($pass == $value)
        {$flag =true;}
    }
    return $flag;
  }
?>
