<?php

  $hostname = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "chatapp";
  $env_port = "8889";

  $conn = mysqli_connect($hostname, $username, $password, $dbname,$env_port);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
