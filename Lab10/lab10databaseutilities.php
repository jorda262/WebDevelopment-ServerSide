<?php

#Function for retrieving PDO Object
function getPDO()
{
  $pdo = null;
  try{
    $connString = "mysql:host=localhost;dbname=lab10";
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

function selectColumn($column)
{
  $pdo = getPDO();
  $stmt = $pdo->prepare("SELECT $column FROM users");
  $stmt->execute();
  $array = $stmt->fetchAll(PDO::FETCH_COLUMN);

  return $array;
}




#Function for inserting user into user-table
function insertUser($username, $password)
{
  $pdo = getPDO();
  $sql = "insert into users (username, password)
          values (:username, :password)";
  $statement = $pdo->prepare($sql);
  $statement->bindValue(":username" , $username);
  $statement->bindValue(":firstname" , $password);
  $statement->execute();

}


#Function for removing user from user-table

#Function for adding picks to section-tables

 ?>
