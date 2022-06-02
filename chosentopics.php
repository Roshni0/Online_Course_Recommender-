<?php
session_start();
$_SESSION['topics']="";
?>
<form method="post" action="choicerec.php">
    <fieldset>
        <?php $module=array();?>
        
        <?php // psy topics ?>
        <?php if(isset($_POST['p1061sci']) == "1") { ?>
            <?php array_push($module,"p1061sci");
                $_SESSION['topics']=$module;?>
             <?php   echo "Psychology as a science"."<br>";?>
        <?php } ?>

        <?php if(isset($_POST['p1061comms']) == "1") { ?>
            <?php array_push($module,"p1061comms");
                $_SESSION['topics']=$module;?>
             <?php 
            echo"Communicating scientific knowledge in Psychology"."<br>";?>
        <?php } ?>

        <?php if(isset($_POST['p1062res']) == "1") { ?>
            <?php array_push($module,"p1062res");
                $_SESSION['topics']=$module;?>
             <?php 
            echo"Conduscting, analysis and presenting research"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['p1062des']) == "1") { ?>
            <?php array_push($module,'p1062des');
                $_SESSION['topics']=$module;?>
             <?php 
                echo"Design of psychologcak studies"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['p1062rep']) == "1") { ?>
            <?php array_push($module,'p1062rep');
                $_SESSION['topics']=$module;?>
             <?php 
            echo"Production of structured critical research report"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['p1062issue']) == "1") { ?>
            <?php array_push($module,'p1062issue');
                $_SESSION['topics']=$module;?>
             <?php 
            echo"Conceptual and historical issues"."<br>";?>
        <?php } ?>
        //stopped here////////////////////////////////////////////////////////////////////////////////
        <?php if(isset($_POST['p1071brain']) == "1") { ?>
            <?php array_push($module,'p1071brain');
                $_SESSION['topics']=$module;?>
             <?php 
                echo"How the brain works"."<br>";?>
        <?php } ?>

        <?php if(isset($_POST['p1071vision']) == "1") { ?>
            <?php array_push($module,'p1071vision');
                $_SESSION['topics']=$module;?>
             <?php 
                echo"How vision works"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['p1071atm']) == "1") { ?>
            <?php array_push($module,'p1071atm');
                $_SESSION['topics']=$module;?>
             <?php 
                echo"How attention and memory works"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['p1071learn']) == "1") { ?>
            <?php array_push($module,'p1071learn');
                $_SESSION['topics']=$module;?>
             <?php 
                echo"How learning works"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['p1081dif']) == "1") { ?>
            <?php array_push($module,'p1081dif');
                $_SESSION['topics']=$module;?>
             <?php 
                echo"Individual Differences"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['p1081dev']) == "1") { ?>
            <?php array_push($module,'p1081dev');
                $_SESSION['topics']=$module;?>
             <?php 
                echo"Developmental Psychology"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['p1081soc']) == "1") { ?>
            <?php array_push($module,'p1081soc');
                $_SESSION['topics']=$module;?>
             <?php 
                echo"Social Psychology"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['p1101']) == "1") { ?>
            <?php array_push($module,'p1101');
                $_SESSION['topics']=$module;?>
             <?php 
                echo"Careers in Psychology"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['p1111']) == "1") { ?>
            <?php array_push($module,'p1111');
                $_SESSION['topics']=$module;?>
             <?php 
                echo"Cannot find"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['p1121']) == "1") { ?>
            <?php array_push($module,'p1121');
                $_SESSION['topics']=$module;?>
             <?php 
                echo"Cannot find"."<br>";?>
        <?php } ?>
        
        <?php // cs topics ?>
        <?php if(isset($_POST['c1021s']) == "1") { ?>
            <?php array_push($module,'c1021s');
                $_SESSION['topics']=$module;?>
             <?php 
                echo"Sets, functions and relations"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1021p']) == "1") { ?>
            <?php array_push($module,'c1021p');
                $_SESSION['topics']=$module;?>
             <?php 
                echo"Notion and methods of mathemtical proof"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1021m']) == "1") { ?>
            <?php array_push($module,'c1021m');
                $_SESSION['topics']=$module;?>
             <?php 
                echo"Matrices"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1021c']) == "1") { ?>
            <?php array_push($module,'c1021c');
                $_SESSION['topics']=$module;?>
             <?php 
                echo"Calculus"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1051s']) == "1") { ?> 
            <?php array_push($module,'c1051s');
                $_SESSION['topics']=$module;?>
             <?php 
                echo"PC Architecture"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1051p']) == "1") { ?>
            <?php array_push($module,'c1051p');
                $_SESSION['topics']=$module;?>
             <?php 
                echo"Logic"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1051m']) == "1") { ?>
            <?php array_push($module,'c1051m');
                $_SESSION['topics']=$module;?>
             <?php 
                echo"Complexity and Efficiency"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1051c']) == "1") { ?>
            <?php array_push($module,'c1051c');
                $_SESSION['topics']=$module;?>
             <?php 
                echo"Ethics"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1071de']) == "1") { ?>
            <?php array_push($module,'c1071de');
                $_SESSION['topics']=$module;?>
             <?php 
                echo"Digital Electronics"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1071c']) == "1") { ?>
            <?php array_push($module,'c1071c');
                $_SESSION['topics']=$module;?>
             <?php 
                echo"Computer Architecture"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1071o']) == "1") { ?>
            <?php array_push($module,'c1071o');
                $_SESSION['topics']=$module;?>
             <?php 
                echo"Operating Systems"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1071d']) == "1") { ?>
            <?php array_push($module,'c1071d');
                $_SESSION['topics']=$module;?>
             <?php 
                echo"Databases"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1081p']) == "1") { ?>
            <?php array_push($module,'c1081p');
                $_SESSION['topics']=$module;?>
             <?php 
                echo"Pseudocode and Control Flow Structures"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1081a']) == "1") { ?>
            <?php array_push($module,'c1081a');
                $_SESSION['topics']=$module;?>
             <?php 
            echo"Algorithms"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1081ds']) == "1") { ?>
            <?php array_push($module,'c1081ds');
                $_SESSION['topics']=$module;?>
             <?php 
                echo"Data Structures"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1081g']) == "1") { ?>
            <?php array_push($module,'c1081g');
                $_SESSION['topics']=$module;?>
             <?php 
                echo"Graph theory"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1101j']) == "1") { ?>
            <?php array_push($module,"c1101j");
                $_SESSION['topics']=$module;?>
             <?php 
                echo"JavaScript"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1101s']) == "1") { ?>
            <?php array_push($module,"c1101s");
                $_SESSION['topics']=$module;?>
             <?php 
                echo"Client side and server-side web scripting"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1101i']) == "1") { ?>
            <?php array_push($module,"c1101i");
                $_SESSION['topics']=$module;?>
             <?php 
                echo"Intellectual Property Issues"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1111j']) == "1") { ?>
            <?php array_push($module,"c1111j");
                $_SESSION['topics']=$module;?>
             <?php 
                echo"JavaScript"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1111s']) == "1") { ?>
            <?php array_push($module,"c1111s");
                $_SESSION['topics']=$module;?>
             <?php 
                echo"Client side and server-side web scripting"."<br>";?>
        <?php } ?>
        
        <?php if(isset($_POST['c1111i']) == "1") { ?>
            <?php array_push($module,"c1111i");
                $_SESSION['topics']=$module;?>
             <?php 
                echo"Intellectual Property Issues"."<br>";?>
        <?php } ?>

    </fieldset>
    <input type="submit" value="Submit" name="Next">
</form>
