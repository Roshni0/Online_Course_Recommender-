<?php
include_once 'config.php';
session_start();
$id = ($_SESSION['userId']);
$topics = (substr($_SESSION['topics'], 1));
$age = ($_SESSION['age']);
$gender = ($_SESSION['gender']);
$modules = $_SESSION['subject'];
$val = 'rec';
$score = $_POST['rating1'];
$sql = "UPDATE `topics` SET `rating`= $score WHERE `userId`=$id";
echo "thank you for taking part";
?>
