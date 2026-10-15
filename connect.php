<?php

$host = "localhost"; //server name
$users = "root";
$password = "";
$database = "student_reg_system"; //database name
$connection = "";
try{
$connection = mysqli_connect(
  $host,
  $users,
  $password,
  $database
);
}
catch(mysqli_sql_exception){
  echo "could not connect";
}