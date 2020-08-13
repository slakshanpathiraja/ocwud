<?php 
$server = 'sql12.freesqldatabase.com';
$database = 'sql12360166';
$username = 'sql12360166';
$password = 'G5XwvCzmYJ';
$connection = mysqli_connect($server,$username,$password,$database);
if (mysqli_connect_errno()){
    echo "Database Connection Failed";
  }else{
    //echo "Database Connected";
  }
?>