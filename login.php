<?php
include_once 'config.php';
$name = $_POST['usernameLogin'];

$sql = "SELECT * FROM `user_details` WHERE `username`='$name'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["userId"]. " - Age: " . $row["age"]. " Gender " . $row["gender"]. "<br>";
    header("Location: http://localhost/xai/welcome.php");
    exit();
  }
} else {
    echo "sorry username does not exist";
    echo "<br>";
    echo '<a href="http://localhost/xai/register.php">Click here to login again </a>';
}

mysqli_close($conn);
?>

