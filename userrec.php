<?php
include_once 'config.php';
session_start();
$id = ($_SESSION['userId']);
$topics = (substr($_SESSION['topics'], 1));
$age = ($_SESSION['age']);
$gender = ($_SESSION['gender']);
$modules = $_SESSION['subject'];
$sql = "SELECT * FROM user_details u INNER JOIN topics t ON u.userId = t.userId WHERE u.gender = '$gender' AND SUBSTRING(t.modules, 1, 1) = '$modules 'AND t.rating = '5'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            if (strlen($row["suggestion"]) != 0){
                $val = $row["suggestion"];
               // echo $val;
            }
        }
    }else{
      $sql = "SELECT * FROM user_details u INNER JOIN topics t ON u.userId = t.userId WHERE u.gender = '$gender' AND SUBSTRING(t.modules, 1, 1) = '$modules 'AND t.rating = '4'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            if (strlen($row["suggestion"]) != 0){
                $val = $row["suggestion"];
                //echo $val;
            }
        }
    
    }else{
        $sql = "SELECT * FROM user_details u INNER JOIN topics t ON u.userId = t.userId WHERE u.gender = '$gender' AND SUBSTRING(t.modules, 1, 1) = '$modules 'AND t.rating = '3'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              if (strlen($row["suggestion"]) != 0){
                  $val = $row["suggestion"];
                  //echo $val;
              }
          }
      
      }else{
        $sql = "SELECT * FROM user_details u INNER JOIN topics t ON u.userId = t.userId WHERE u.gender = '$gender' AND SUBSTRING(t.modules, 1, 1) = '$modules 'AND t.rating = '2'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              if (strlen($row["suggestion"]) != 0){
                  $val = $row["suggestion"];
                  //echo $val;
              }
          }
      
      }else{
        $sql = "SELECT * FROM user_details u INNER JOIN topics t ON u.userId = t.userId WHERE u.gender = '$gender' AND SUBSTRING(t.modules, 1, 1) = '$modules 'AND t.rating = '1'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              if (strlen($row["suggestion"]) != 0){
                  $val = $row["suggestion"];
                 // echo $val;
              }
          }
      }
      else{
        $sql = "SELECT * FROM user_details u INNER JOIN topics t ON u.userId = t.userId WHERE u.gender = '$gender' AND SUBSTRING(t.modules, 1, 1) = '$modules 'AND t.rating = '0'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              if (strlen($row["suggestion"]) != 0){
                  $val = $row["suggestion"];
                  //echo $val;
              }
          }
      }
      }}}}}


      $sql = "INSERT INTO `topics` (`user_topic`, `userId`, `modules`, `suggestion`) VALUES (NULL, '$id', '$topics', '$val')";
  
      if (mysqli_query($conn, $sql)) {
          echo "We suggest based on users with similar profile ".$val;
      }

      ?>
<p>How do you like the recommendation</p>
    <div class="row">
    <div class="col">
        <form id="loginForm" action="feedback.php" class="form" method="POST">
        <span class="star-rating">
  <input type="radio" name="rating1" value="1"><i></i>
  <input type="radio" name="rating1" value="2"><i></i>
  <input type="radio" name="rating1" value="3"><i></i>
  <input type="radio" name="rating1" value="4"><i></i>
  <input type="radio" name="rating1" value="5"><i></i>
</span>
        <button id="loginButton" class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>