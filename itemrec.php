<?php
session_start();
?>

<?php
// $chosen_test space must be replaced as "_"
// example: $chosen_test = "Introduction_to_Psychology"

function sentence_transformer($chosen_test){
    unset($out);
    exec("/usr/local/bin/python3 /Applications/XAMPP/xamppfiles/htdocs/Online_Course_Recommender--main/transformer.py {$chosen_test} 2>&1", $out, $ret);
    foreach ($out as $value) {
        echo "$value <br>";
    }
}
?>

<?php 
echo "Suggestion: <br>";
foreach($_SESSION['topics'] as $key => $value) {
    if (strpos($value, 'p1101') !== 0 and strpos($value, 'c') !==0) {
        sentence_transformer("Introduction_to_Psychology");
    } elseif (strpos($value, 'p1101') === 0) {
        sentence_transformer("Social_Psychology");
    } elseif (strpos($value, 'c1021') === 0 ) {
        sentence_transformer("Mathematics_for_Computer_Science");
    } elseif (strpos($value, 'c1021s') === 0 ) {
        sentence_transformer("Sets,_functions_and_relations");
    } elseif (strpos($value, 'c1021p') === 0 ) {
        sentence_transformer("Notion_and_methods_of_mathemtical_proof");
    } elseif (strpos($value, 'c1021m') === 0 ) {
        sentence_transformer("Matrices");
    } elseif (strpos($value, 'c1021c') === 0 ) {
        sentence_transformer("Calculus");
    } elseif (strpos($value, 'c1051') === 0) {
        sentence_transformer("Computational_Thinking");
        sentence_transformer("Python");
    } elseif (strpos($value, 'c1051s') === 0) {
        sentence_transformer("PC_Architecture");
    } elseif (strpos($value, 'c1051p') === 0) {
        sentence_transformer("Logic");
    } elseif (strpos($value, 'c1051m') === 0) {
        sentence_transformer("Complexity and Efficiency");
    } elseif (strpos($value, 'c1051c') === 0) {
        sentence_transformer("Ethics");
    } elseif (strpos($value, 'c1071') === 0 ) {
        sentence_transformer("Computer_Systems");
    } elseif (strpos($value, 'c1071de') === 0 ) {
        sentence_transformer("Digital Electronics");
    } elseif (strpos($value, 'c1071c') === 0 ) {
        sentence_transformer("Computer_Architecture");
    } elseif (strpos($value, 'c1071o') === 0 ) {
        sentence_transformer("Operating_System");
    } elseif (strpos($value, 'c1071d') === 0 ) {
        sentence_transformer("Databases");
    } elseif (strpos($value, 'c1081') === 0 ) {
        sentence_transformer("Algorithms_and_Data_Structures");
    } elseif (strpos($value, 'c1081p') === 0 ) {
        sentence_transformer("Pseudocode_and_Control_Flow_Structures");
    } elseif (strpos($value, 'c1081a') === 0 ) {
        sentence_transformer("Algorithms");
    } elseif (strpos($value, 'c1081ds') === 0 ) {
        sentence_transformer("Data_Structures");
    } elseif (strpos($value, 'c1081g') === 0) {
        sentence_transformer("Graph_theory");
    } elseif (strpos($value, 'c1111j') === 0 or strpos($value, 'c1101j') === 0) {
        sentence_transformer("JavaScript");
    } elseif (strpos($value, 'c11') === 0 ) {
        sentence_transformer("Client_ide_and_server-side_web_scripting");
        sentence_transformer("Intellectual_Property_Issues");
    }
} 

?>
