<?php
#Function for retrieving PDO Object
function getPDO()
{
  $pdo = null;
  try{
    $connString = "mysql:host=localhost;dbname=csci2006";
    $user = "root";
    $pass = "root";

    $pdo = new PDO($connString,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e){
    die($e->getMessage());
  }
  return $pdo;
}

#Function for selecting everything from a table
function selectAll($table)
{
  $pdo = getPDO();
  $sql = "select * from $table";
  $result = $pdo->query($sql);
  $array = $result->fetchall();
  return $array;
}
function selectUser($user)
{
  $pdo = getPDO();
  $stmt = $pdo->prepare("SELECT email FROM Credentials WHERE email = $user");
  $stmt->execute();
  $valid = $stmt->fetchall();
  return $valid;
}

function selectColumn($column)
{
  $pdo = getPDO();
  $stmt = $pdo->prepare("SELECT $column FROM Credentials");
  $stmt->execute();
  $array = $stmt->fetchAll(PDO::FETCH_COLUMN);

  return $array;
}

#Function for inserting user into user-table
function insertUser($name, $email, $university, $city)
{
  $pdo = getPDO();
  $sql = "insert into customers (name, email, university, city)
          values (:name, :email, :university, :city)";
  $statement = $pdo->prepare($sql);
  $statement->bindValue(":name" , $name);
  $statement->bindValue(":email" , $email);
  $statement->bindValue(":university" , $university);
  $statement->bindValue(":city" , $city);
  $statement->execute();

}

function validateUserName($username)
{
  $flag = false;
  $column = "email";
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
