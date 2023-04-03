<?php
session_start();
$_SESSION["username"] = $_POST["fna"];
echo("HELLO ".$_SESSION["username"]);

?>