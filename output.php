
    <form method="post" action="chosentopics.php">      
    <fieldset>      
         
   
    <?phpif(isset($_POST['pfav_mod1'])){?>
    <?php    echo "PSYC1061"."<br>";?>
        <input type="checkbox" name="p1061sci" value="p1061sci">Psychology as a science<br>
        <input type="checkbox" name="p1061comms" value="p1061comms">Communicating scientific knowledge in Psychology<br>
    <?php } ?>
        <?php if(isset($_POST['pfav_mod2'])){?>
            <?php  echo "PSYC1062"."<br>";?>
        <input type="checkbox" name="p1062res" value="p1062res">Conduscting, analysis and presenting research<br>
        <input type="checkbox" name="p1062des" value="p1062des">Design of psychologcak studies<br>
        <input type="checkbox" name="p1062rep" value="p1062rep">Production of structured critical research report<br>
        <input type="checkbox" name="p1062issue" value="p1062issue">Conceptual and historical issues<br>
        <?php }  ?>
        <?php if(isset($_POST['pfav_mod3'])){?>
            <?php echo "PSYC1071"."<br>";?>
        <input type="checkbox" name="p1071brain" value="p1071brain">How the brain works<br>
        <input type="checkbox" name="p1071vision" value="p1071vision">How vision works<br>
        <input type="checkbox" name="p1071atm" value="p1071atm">How attention and memory works<br>
        <input type="checkbox" name="p1071learn" value="p1071learn">How learning works<br>
        <?php }  ?>
        <?phpif(isset($_POST['pfav_mod4'])){?>
            <?phpecho "PSYC1081"."<br>";?>
        <input type="checkbox" name="p1081dif" value="p1081dif">Individual Differences<br>
        <input type="checkbox" name="p1081dev" value="p1081dev">Developmental Psychology<br>
        <input type="checkbox" name="p1081soc" value="p1081soc">Social Psychology<br>
        <?php }  ?>
        <?phpif(isset($_POST['pfav_mod5'])){?>
            <?phpecho "PSYC1101"."<br>";?>
        <input type="checkbox" name="p1101" value="p1101">Careers in Psychology<br>
        <?php }  ?>
        <?phpif(isset($_POST['pfav_mod6'])){?>
         <?phpecho "PSYC1111"."<br>";?>
        <input type="checkbox" name="p1111" value="p1111">Cannot find<br>
        <?php }  ?>
        <?php if(isset($_POST['pfav_mod7'])){?>
        <?php echo "PSYC1121"."<br>";?>
        <input type="checkbox" name="p1121" value="p1121">Cannot find<br>
        <?php }  ?>
        <?phpif(isset($_POST['csfav_mod1'])){?>
       <?php  echo "COMP1021"."<br>";?>
        <input type="checkbox" name="c1021s" value="c1021s">Sets, functions and relations<br>
        <input type="checkbox" name="c1021p" value="c1021p">Notion and methods of mathemtical proof<br>
        <input type="checkbox" name="c1021m" value="c1021m">Matrices<br>
        <input type="checkbox" name="c1021c" value="c1021c">Calculus<br>
        <?php }  ?>
        <?phpif(isset($_POST['csfav_mod2'])){?>
        <?php echo "COMP1051"."<br>";?>
        <input type="checkbox" name="c1051s" value="c1051s">PC Architecture<br>
        <input type="checkbox" name="c1051p" value="c1051p">Logic<br>
        <input type="checkbox" name="c1051m" value="c1051m">Complexity and Efficiency<br>
        <input type="checkbox" name="c1051c" value="c1051c">Ethics<br>
        <?php }  ?>
        <?phpif(isset($_POST['csfav_mod3'])){?>
         <?phpecho "COMP1071"."<br>";?>
        <input type="checkbox" name="c1071de" value="c1071de">Digital Electronics<br>
        <input type="checkbox" name="c1071c" value="c1071c">Computer Architecture<br>
        <input type="checkbox" name="c1071o" value="c1071o">Operating Systems<br>
        <input type="checkbox" name="c1071d" value="c1071d">Databases<br>
        <?php }  ?>
        <?phpif(isset($_POST['csfav_mod4'])){?>
         <?phpecho "COMP1081"."<br>";?>
        <input type="checkbox" name="c1081p" value="c1081p">Pseudocode and Control Flow Structures<br>
        <input type="checkbox" name="c1081a" value="c1081a">Algorithms<br>
        <input type="checkbox" name="c1081ds" value="c1081ds">Data Structures<br>
        <input type="checkbox" name="c1081g" value="c1081g">Graph theory<br>
        <?php }  ?>
        <?phpif(isset($_POST['csfav_mod5'])){?>
            <?phpecho "COMP1101"."<br>";?>
        <input type="checkbox" name="c1101j" value="c1101j">JavaScript<br>
        <input type="checkbox" name="c1101s" value="c1101s">Client side and server-side web scripting<br>
        <input type="checkbox" name="c1101i" value="c1101i">Intellectual Property Issues<br>
        <?php }  ?>
        <?phpif(isset($_POST['csfav_mod6'])){?>
         <?phpecho "COMP1111"."<br>";?>
        <input type="checkbox" name="c1111j" value="c1111j">JavaScript<br>
        <input type="checkbox" name="c1111s" value="c1111s">Client side and server-side web scripting<br>
        <input type="checkbox" name="c1111i" value="c1111i">Intellectual Property Issues<br>
        <?php }  ?>
    <br>    
        <input type="submit" value="Submit now" />  
        </fieldset>      
</form>