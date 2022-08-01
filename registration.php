<?php
include_once 'config.php';
$age = ($_POST['userAge']);
$gender = $_POST['gender'];
$name = $_POST['usernameSignUp'];
$sql = "SELECT * FROM `user_details` WHERE `username`='$name'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  echo "sorry already taken";
  echo "<br>";
  echo '<a href="http://localhost/xai/register.php">Click here to register again </a>';
} else {
    $sql = "INSERT INTO `user_details` (`userId`, `username`, `gender`, `age`) VALUES (NULL, '$name', '$gender', $age)";
    if (mysqli_query($conn, $sql)) {
      $sql = "SELECT * FROM `user_details` WHERE `username`='$name'";
      $result = mysqli_query($conn, $sql);
      
      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          echo "id: " . $row["userId"]. " - Age: " . $row["age"]. " Gender " . $row["gender"]. "<br>";
          session_start();
          $_SESSION['userId'] = $row["userId"];
          $_SESSION['age'] = $row["age"];
          $_SESSION['gender'] = $row["gender"];
    echo "New record has been added successfully !";
    header("Location: http://localhost/xai/welcome.php");
    exit();
    }} else {
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
}
}
mysqli_close($conn);



?>