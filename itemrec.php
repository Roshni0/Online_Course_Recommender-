<?php
session_start();
?>
<?php
function itemrec($chosen){

    if (($handle = fopen("coursea_data.csv", "r")) !== FALSE) {
      while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        list($num, $course_title, $course_organization, $course_Certificate_type, $course_rating, $course_difficulty, $course_students_enrolled) = $data;
        
        if (preg_match("/$chosen/", $course_title)) {
            echo "$course_title $course_organization $course_Certificate_type $course_rating $course_difficulty $course_students_enrolled"."<br>";
        }
      }
      fclose($handle);
    }

    }

$dup=0;
$dup_1=0;
$dup_2=0;
$dup_3=0;   
foreach($_SESSION['topics'] as $key => $value) {
    if (strpos($value, 'p1101') !== 0 and $dup === 0 and strpos($value, 'c') !== 0) {
        $dup = 1;
        itemrec("Introduction to Psychology");
    } elseif (strpos($value, 'p1101') === 0) {
        itemrec("Social Psychology");
    } elseif (strpos($value, 'c1021') === 0 and $dup_1 === 0) {
        $dup_1 = 1;
        itemrec("Mathematics for Computer Science");
    } elseif (strpos($value, 'c1021c') === 0 ) {
        itemrec("Introduction to Calculus");
    } elseif (strpos($value, 'c1051') === 0 and $dup_2 === 0 ) {
        $dup_2 = 1;
        itemrec("Computational Thinking");
    } elseif (strpos($value, 'c1071o') === 0 ) {
        itemrec("Operating System");
    } elseif (strpos($value, 'c1071d') === 0 ) {
        itemrec("Databases");
    } elseif (strpos($value, 'c1081') === 0 and $dup_3 === 0) {
        $dup_3 === 1;
        itemrec("Python Data Structures");
        itemrec("Crash Course on Python");
        itemrec("Scripting in Python");
        itemrec("Python Parte 1");
        itemrec("Python Basics");
        itemrec("Python Data Structures");
        itemrec("Python Functions, Files, and Dictionaries");
        itemrec("Python for Everybody");
    } elseif (strpos($value, 'c1081a') === 0) {
        itemrec("Algorithms");
    } elseif (strpos($value, 'c1111j') === 0 or strpos($value, 'c1101j') === 0) {
        itemrec("JavaScript");
    } elseif (strpos($value, 'c11') === 0 and $dup_4 === 0) {
        $dup_4 === 1;
        itemrec("Introduction to HTML5");
        itemrec("Introduction to Web Development");
        itemrec("Website Development");
        itemrec("Web Data");
        itemrec("Web Applications ");
        itemrec("Web Design");
        itemrec("bootstrap");
    }
} 

?>