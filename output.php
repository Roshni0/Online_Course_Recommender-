
<html>
<head>

</head>
<body>
<script src="thing.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js">// import jquery</script>
<script type="text/javascript">
    // limit up to 2 chosen modules
    $(document).ready(function() {
        $("input:checkbox").click(function(){
            var bol = $("input:checkbox:checked").length >= 2;
            $("input:checkbox").not(":checked").attr("disabled",bol);
            });
            });
</script>
<script>
    // randomise the order
    $(document).ready(function() {
        function shuffle(o) {
            for(var j, x, i = o.length; i; j = parseInt(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
            return o;
            };
        
        var forms = $("div");
        var numbers = [];
        for (var j = 0; j<forms.length; j++){
            numbers.push(j);
        };
        var random = shuffle(numbers);
        console.log(random);
        for(var i = 0; i<random.length-1; i++){
            var target = random[i];
            var target2 = random[i+1];
            forms.eq(target).before(forms.eq(target2));
            };
        });
</script>    
</script>
<form method="post" action="chosentopics.php">      
<fieldset>      
        
<?php // psy submodules ?>
<?php if(isset($_POST['pfav_mod1']) == "1") { ?>
    <input class="check"type="checkbox" name="p1061sci" value="p1061sci"onclick=chkcontrol(0);>Psychology as a science<br>
    <input class="check"type="checkbox" name="p1061comms" value="p1061comms"onclick=chkcontrol(1);>Communicating scientific knowledge in Psychology<br>
<?php } ?>

<?php if(isset($_POST['pfav_mod2']) == "1") { ?>
    <input class="check"type="checkbox" name="p1062res" value="p1062res"onclick=chkcontrol(2);>Conduscting, analysis and presenting research<br>
    <input class="check"type="checkbox" name="p1062des" value="p1062des"onclick=chkcontrol(3);>Design of psychologcak studies<br>
    <input class="check"type="checkbox" name="p1062rep" value="p1062rep"onclick=chkcontrol(4);>Production of structured critical research report<br>
    <input class="check"type="checkbox" name="p1062issue" value="p1062issue"onclick=chkcontrol(5);>Conceptual and historical issues<br>
<?php } ?>

<?php if(isset($_POST['pfav_mod3']) == "1") { ?>
    <input class="single-checkbox"type="checkbox" name="p1071brain" value="p1071brain">How the brain works<br>
    <input class="single-checkbox"type="checkbox" name="p1071vision" value="p1071vision">How vision works<br>
    <input class="single-checkbox"type="checkbox" name="p1071atm" value="p1071atm">How attention and memory works<br>
    <input class="single-checkbox"type="checkbox" name="p1071learn" value="p1071learn">How learning works<br>
<?php } ?>

<?php if(isset($_POST['pfav_mod4']) == "1") { ?>
    <input class="single-checkbox"type="checkbox" name="p1081dif" value="p1081dif">Individual Differences<br>
    <input class="single-checkbox"type="checkbox" name="p1081dev" value="p1081dev">Developmental Psychology<br>
    <input class="single-checkbox"type="checkbox" name="p1081soc" value="p1081soc">Social Psychology<br>
<?php } ?>

<?php if(isset($_POST['pfav_mod5']) == "1") { ?>
    <input class="single-checkbox"type="checkbox" name="p1101" value="p1101">Careers in Psychology<br>
<?php } ?>

<?php if(isset($_POST['pfav_mod6']) == "1") { ?>
    <input class="single-checkbox"type="checkbox" name="p1111" value="p1111">Cannot find<br>
<?php } ?>

<?php if(isset($_POST['pfav_mod7']) == "1") { ?>
    <input class="single-checkbox"type="checkbox" name="p1121" value="p1121">Cannot find<br>
<?php } ?>

<?php // cs submodules ?>
<?php if(isset($_POST['csfav_mod1']) == "1") { ?>
    <input class="single-checkbox"type="checkbox" name="c1021s" value="c1021s">Sets, functions and relations<br>
    <input class="single-checkbox"type="checkbox" name="c1021p" value="c1021p">Notion and methods of mathemtical proof<br>
    <input class="single-checkbox"type="checkbox" name="c1021m" value="c1021m">Matrices<br>
    <input class="single-checkbox"type="checkbox" name="c1021c" value="c1021c">Calculus<br>
<?php } ?>

<?php if(isset($_POST['csfav_mod2']) == "1") { ?>
    <input class="single-checkbox"type="checkbox" name="c1051s" value="c1051s">PC Architecture<br>
    <input class="single-checkbox"type="checkbox" name="c1051p" value="c1051p">Logic<br>
    <input class="single-checkbox"type="checkbox" name="c1051m" value="c1051m">Complexity and Efficiency<br>
    <input class="single-checkbox"type="checkbox" name="c1051c" value="c1051c">Ethics<br>
<?php } ?>

<?php if(isset($_POST['csfav_mod3']) == "1") { ?>
    <input class="single-checkbox"type="checkbox" name="c1071de" value="c1071de">Digital Electronics<br>
    <input class="single-checkbox"type="checkbox" name="c1071c" value="c1071c">Computer Architecture<br>
    <input class="single-checkbox"type="checkbox" name="c1071o" value="c1071o">Operating Systems<br>
    <input class="single-checkbox"type="checkbox" name="c1071d" value="c1071d">Databases<br>
<?php } ?>

<?php if(isset($_POST['csfav_mod4']) == "1") { ?>
    <input class="single-checkbox"type="checkbox" name="c1081p" value="c1081p">Pseudocode and Control Flow Structures<br>
    <input class="single-checkbox"type="checkbox" name="c1081a" value="c1081a">Algorithms<br>
    <input class="single-checkbox"type="checkbox" name="c1081ds" value="c1081ds">Data Structures<br>
    <input class="single-checkbox"type="checkbox" name="c1081g" value="c1081g">Graph theory<br>
<?php } ?>

<?php if(isset($_POST['csfav_mod5']) == "1") { ?>
    <input class="single-checkbox"type="checkbox" name="c1101j" value="c1101j">JavaScript<br>
    <input class="single-checkbox"type="checkbox" name="c1101s" value="c1101s">Client side and server-side web scripting<br>
    <input class="single-checkbox"type="checkbox" name="c1101i" value="c1101i">Intellectual Property Issues<br>
<?php } ?>

<?php if(isset($_POST['csfav_mod6']) == "1") { ?>
    <input class="single-checkbox"type="checkbox" name="c1111j" value="c1111j">JavaScript<br>
    <input class="single-checkbox"type="checkbox" name="c1111s" value="c1111s">Client side and server-side web scripting<br>
    <input class="single-checkbox"type="checkbox" name="c1111i" value="c1111i">Intellectual Property Issues<br>
<?php } ?>
<br>    
    <input type="submit" value="Submit now" />  
    </fieldset>      
</form>

<script>
    function test(){
        document.getElementById("txtHint").innerHTML = "";
    }
</script>
</body>
</html>
