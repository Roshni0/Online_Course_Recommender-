<?php

<form method="post" action="chosentopics.php">      
<fieldset>      
     

$module=array();
if(isset($_POST['p1061sci'])){
    echo "Psychology as a science"."<br>";
}if(isset($_POST['p1061comms'])){
    echo"Communicating scientific knowledge in Psychology"."<br>";
}if(isset($_POST['p1062res'])){
    echo"Conduscting, analysis and presenting research"."<br>";
}if(isset($_POST['p1062des'])){
    echo"Design of psychologcak studies"."<br>";
}if(isset($_POST['p1062rep'])){
    echo"Production of structured critical research report"."<br>";
}if(isset($_POST['p1062issue'])){
    echo"Conceptual and historical issues"."<br>";
}if(isset($_POST['p1071brain'])){
    echo"How the brain works"."<br>";
}if(isset($_POST['p1071vision'])){
    echo"How vision works"."<br>";
}if(isset($_POST['p1071atm'])){
    echo"How attention and memory works"."<br>";
}if(isset($_POST['p1071learn'])){
    echo"How learning works"."<br>";
}if(isset($_POST['p1081dif'])){
    echo"Individual Differences"."<br>";
}if(isset($_POST['p1081dev'])){
    echo"Developmental Psychology"."<br>";
}if(isset($_POST['p1081soc'])){
    echo"Social Psychology"."<br>";
}if(isset($_POST['p1101'])){
    echo"Careers in Psychology"."<br>";
}if(isset($_POST['p1111'])){
    echo"Cannot find"."<br>";
}if(isset($_POST['p1121'])){
    echo"Cannot find"."<br>";
}if(isset($_POST['c1021s'])){
    echo"Sets, functions and relations"."<br>";
}if(isset($_POST['c1021p'])){
    echo"Notion and methods of mathemtical proof"."<br>";
}if(isset($_POST['c1021m'])){
    echo"Matrices"."<br>";
}if(isset($_POST['c1021c'])){
    echo"Calculus"."<br>";
}if(isset($_POST['c1051s'])){
    echo"PC Architecture"."<br>";
}if(isset($_POST['c1051p'])){
    echo"Logic"."<br>";
}if(isset($_POST['c1051m'])){
    echo"Complexity and Efficiency"."<br>";
}if(isset($_POST['c1051c'])){
    echo"Ethics"."<br>";
}if(isset($_POST['c1071de'])){
    echo"Digital Electronics"."<br>";
}if(isset($_POST['c1071c'])){
    echo"Computer Architecture"."<br>";
}if(isset($_POST['c1071o'])){
    echo"Operating Systems"."<br>";
}if(isset($_POST['c1071d'])){
    echo"Databases"."<br>";
}if(isset($_POST['c1081p'])){
    echo"Pseudocode and Control Flow Structures"."<br>";
}if(isset($_POST['c1081a'])){
    echo"Algorithms"."<br>";
}if(isset($_POST['c1081ds'])){
    echo"Data Structures"."<br>";
}if(isset($_POST['c1081g'])){
    echo"Graph theory"."<br>";
}if(isset($_POST['c1101j'])){
    echo"JavaScript"."<br>";
}if(isset($_POST['c1101s'])){
    echo"Client side and server-side web scripting"."<br>";
}if(isset($_POST['c1101i'])){
    echo"Intellectual Property Issues"."<br>";
}if(isset($_POST['c1111j'])){
    echo"JavaScript"."<br>";
}if(isset($_POST['c1111s'])){
    echo"Client side and server-side web scripting"."<br>";
}if(isset($_POST['c1111i'])){
    echo"Intellectual Property Issues"."<br>";
}
?>