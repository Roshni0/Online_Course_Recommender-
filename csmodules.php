<?php
session_start();
$_SESSION['subject']="c";
?>

<head>
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
</head>
<form method="post" action="output.php">      
    <fieldset>      
        <legend>Which of these modules did you like best? (please select up to 2)</legend>      
        <div><input type="checkbox" name="csfav_mod1" value="COMP1021">Mathematics for Computer Science<br></div>      
        <div><input type="checkbox" name="csfav_mod2" value="COMP1051">Computational Thinking<br></div>      
        <div><input type="checkbox" name="csfav_mod3" value="COMP1071">Computer Systems<br></div>      
        <div><input type="checkbox" name="csfav_mod4" value="COMP1081">Algorithms and Data Structures<br></div>     
        <div><input type="checkbox" name="csfav_mod5" value="COMP1101">Programming (Black)<br></div>     
        <div><input type="checkbox" name="csfav_mod6" value="COMP1111">Programming (Gold)<br></div>          
        <br>      
        <input type="submit" value="Submit now" />      
    </fieldset>      
</form>
