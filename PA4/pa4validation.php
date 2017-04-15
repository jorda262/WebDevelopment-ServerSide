<?php
include 'pa4dbUtilities.php';
if(!isset($_SESSION['user']))
{
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $username = $_POST["email"];
    $pass = $_POST["password"];
    if(validateUserName($username) && validatepassword($pass))
    {
      $_SESSION['user'] = $username;
      header("location: login.php");
    }
    else
    {
      header("location: home.php");
    }
  }
}
else if(!isset($ON_WELCOME) || !$ON_WELCOME)
{
  header("location: home.php");
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
#FUNCTION FOR VALIDATING PASSWORD
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
