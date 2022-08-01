<?php
include_once 'config.php';
session_start();
$id = ($_SESSION['userId']);
$topics = (substr($_SESSION['topics'], 1));

$sql = "SELECT * FROM `topics` WHERE `modules`='$topics'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $val = $row["suggestion"];
      }
    }
    include_once 'config.php';
    $id = ($_SESSION['userId']);
    $topics = (substr($_SESSION['topics'], 1));

    $sql = "INSERT INTO `topics` (`user_topic`, `userId`, `modules`, `suggestion`) VALUES (NULL, '$id', '$topics', '$val')";
    if (mysqli_query($conn, $sql)) {
        echo "We suggest ".$val;
    }