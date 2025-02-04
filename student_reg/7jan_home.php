<?php

include 'connection.php';
session_start();
$username=$_SESSION['username'];
// var_dump($username);
// exit();

?>
<h1>welcome</h1>
<a href="trial.php">Registration</a><br>
<a href="28dec_view.php">view</a><br>
<a href="28dec_edit.php">Edit</a><br>
<a href="2jan_delete.php">Delete</a><br>