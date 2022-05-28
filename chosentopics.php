<?php
session_start();
$_SESSION['topics']="";
?>
<form method="post" action="choicerec.php">
    <fieldset>
        <?php $module=array();?>
        
        <?php // psy topics ?>
        <?php if(isset($_POST['p1061sci']) == "1") { ?>
            <?php $_SESSION['topics']=$_SESSION['topics'] . ",p1061sci";?>
             <?php   echo "Psychology as a science"."<br>";?>
        <?php } ?>

        <?php if(isset($_POST['p1061comms']) == "1") { ?>
            <?php $_SESSION['topics']=$_SESSION['topics'] . ",p1061comms";?>
             <?php 
            echo"Communicating scientific knowledge in Psychology"."<br>";?>
        <?php } ?>

        <?php if(isset($_POST['p1062res']) == "1") { ?>
            <?php $_SESSION['topics']=$_SESSION['topics'] . ",p1062res";?>
             <?php 
            echo"Conduscting, analysis and presenting research"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['p1062des']) == "1") { ?>
            <?php $_SESSION['topics']=$_SESSION['topics'] . ",p1062des";?>
             <?php 
                echo"Design of psychologcak studies"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['p1062rep']) == "1") { ?>
            <?php $_SESSION['topics']=$_SESSION['topics'] . ",p1062rep";?>
             <?php 
            echo"Production of structured critical research report"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['p1062issue']) == "1") { ?>
            <?php $_SESSION['topics']=$_SESSION['topics'] . ",p1062issue";?>
             <?php 
            echo"Conceptual and historical issues"."<br>";?>
        <?php } ?>
        //stopped here////////////////////////////////////////////////////////////////////////////////
        <?php if(isset($_POST['p1071brain']) == "1") { ?>
            <?php $_SESSION['topics']=$_SESSION['topics'] . ",p1071brain";?>
             <?php 
                echo"How the brain works"."<br>";?>
        <?php } ?>

        <?php if(isset($_POST['p1071vision']) == "1") { ?>
            <?php $_SESSION['topics']=$_SESSION['topics'] . ",p1071vision";?>
             <?php 
                echo"How vision works"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['p1071atm']) == "1") { ?>
            <?php $_SESSION['topics']=$_SESSION['topics'] . ",p1071atm";?>
             <?php 
                echo"How attention and memory works"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['p1071learn']) == "1") { ?>
            <?php $_SESSION['topics']=$_SESSION['topics'] . ",p1071learn";?>
             <?php 
                echo"How learning works"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['p1081dif']) == "1") { ?>
            <?php $_SESSION['topics']=$_SESSION['topics'] . ",p1081dif";?>
             <?php 
                echo"Individual Differences"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['p1081dev']) == "1") { ?>
            <?php $_SESSION['topics']=$_SESSION['topics'] . ",p1081dev";?>
             <?php 
                echo"Developmental Psychology"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['p1081soc']) == "1") { ?>
            <?php $_SESSION['topics']=$_SESSION['topics'] . ",p1081soc";?>
             <?php 
                echo"Social Psychology"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['p1101']) == "1") { ?>
            <?php $_SESSION['topics']=$_SESSION['topics'] . ",p1101";?>
             <?php 
                echo"Careers in Psychology"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['p1111']) == "1") { ?>
            <?php $_SESSION['topics']=$_SESSION['topics'] . ",p1111";?>
             <?php 
                echo"Cannot find"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['p1121']) == "1") { ?>
            <?php $_SESSION['topics']=$_SESSION['topics'] . ",p1121";?>
             <?php 
                echo"Cannot find"."<br>";?>
        <?php } ?>
        
        <?php // cs topics ?>
        <?php if(isset($_POST['c1021s']) == "1") { ?>
            <?php $_SESSION['topics']=$_SESSION['topics'] . ",c1021s";?>
             <?php 
                echo"Sets, functions and relations"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1021p']) == "1") { ?>
            <?php $_SESSION['topics']=$_SESSION['topics'] . ",c1021p";?>
             <?php 
                echo"Notion and methods of mathemtical proof"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1021m']) == "1") { ?>
            <?php $_SESSION['topics']=$_SESSION['topics'] . ",c1021m";?>
             <?php 
                echo"Matrices"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1021c']) == "1") { ?>
            <?php $_SESSION['topics']=$_SESSION['topics'] . ",c1021c";?>
             <?php 
                echo"Calculus"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1051s']) == "1") { ?> 
            <?php $_SESSION['topics']=$_SESSION['topics'] . ",c1051s";?>
             <?php 
                echo"PC Architecture"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1051p']) == "1") { ?>
            <?php $_SESSION['topics']=$_SESSION['topics'] . ",c1051p";?>
             <?php 
                echo"Logic"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1051m']) == "1") { ?>
            <?php $_SESSION['topics']=$_SESSION['topics'] . ",c1051m";?>
             <?php 
                echo"Complexity and Efficiency"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1051c']) == "1") { ?>
            <?php $_SESSION['topics']=$_SESSION['topics'] . ",c1051c";?>
             <?php 
                echo"Ethics"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1071de']) == "1") { ?>
            <?php $_SESSION['topics']=$_SESSION['topics'] . ",c1071de";?>
             <?php 
                echo"Digital Electronics"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1071c']) == "1") { ?>
            <?php $_SESSION['topics']=$_SESSION['topics'] . ",c1071c";?>
             <?php 
                echo"Computer Architecture"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1071o']) == "1") { ?>
            <?php $_SESSION['topics']=$_SESSION['topics'] . ",c1071o";?>
             <?php 
                echo"Operating Systems"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1071d']) == "1") { ?>
            <?php $_SESSION['topics']=$_SESSION['topics'] . ",c1071d";?>
             <?php 
                echo"Databases"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1081p']) == "1") { ?>
            <?php $_SESSION['topics']=$_SESSION['topics'] . ",c1081p";?>
             <?php 
                echo"Pseudocode and Control Flow Structures"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1081a']) == "1") { ?>
            <?php $_SESSION['topics']=$_SESSION['topics'] . ",c1081a";?>
             <?php 
            echo"Algorithms"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1081ds']) == "1") { ?>
            <?php $_SESSION['topics']=$_SESSION['topics'] . ",c1081ds";?>
             <?php 
                echo"Data Structures"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1081g']) == "1") { ?>
            <?php $_SESSION['topics']=$_SESSION['topics'] . ",c1081g";?>
             <?php 
                echo"Graph theory"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1101j']) == "1") { ?>
            <?php $_SESSION['topics']=$_SESSION['topics'] . ",c1101j";?>
             <?php 
                echo"JavaScript"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1101s']) == "1") { ?>
            <?php $_SESSION['topics']=$_SESSION['topics'] . ",c1101s";?>
             <?php 
                echo"Client side and server-side web scripting"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1101i']) == "1") { ?>
            <?php $_SESSION['topics']=$_SESSION['topics'] . ",c1101i";?>
             <?php 
                echo"Intellectual Property Issues"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1111j']) == "1") { ?>
            <?php $_SESSION['topics']=$_SESSION['topics'] . ",c1111j";?>
             <?php 
                echo"JavaScript"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1111s']) == "1") { ?>
            <?php $_SESSION['topics']=$_SESSION['topics'] . ",c1111s";?>
             <?php 
                echo"Client side and server-side web scripting"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1111i']) == "1") { ?>
            <?php $_SESSION['topics']=$_SESSION['topics'] . ",c1111i";?>
             <?php 
                echo"Intellectual Property Issues"."<br>";?>
        <?php } ?>
    </fieldset>
    <input type="submit" value="Submit" name="Next">
</form>
