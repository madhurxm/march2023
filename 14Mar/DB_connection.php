<?php
$conn = mysqli_connect("localhost", "root", "", "test1");

if ($conn) {
    echo("Connection established");
  }
  else
  echo("Connection failed");
?>