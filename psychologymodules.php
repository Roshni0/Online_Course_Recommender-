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
        <div><input type="checkbox" name="pfav_mod1" value="PSYC1061">Classic Papers: A Tutorial Introduction to Psychological Science<br></div>      
        <div><input type="checkbox" name="pfav_mod2" value="PSYC1062">Introduction to Psychological Research<br></div>      
        <div><input type="checkbox" name="pfav_mod3" value="PSYC1071">Introduction to Psychology I: Cognitive and Biological Psychology<br></div>      
        <div><input type="checkbox" name="pfav_mod4" value="PSYC1081">Introduction to Psychology 2: Developmental and Social Psychology<br></div>     
        <div><input type="checkbox" name="pfav_mod5" value="PSYC1101">Careers in Psychology<br></div>     
        <div><input type="checkbox" name="pfav_mod6" value="PSYC1111">Introduction to Psychology I Online: Cognitive and Biological Psychology<br></div>     
        <div><input type="checkbox" name="pfav_mod7" value="PSYC1121">Introduction to Psychology 2 Online: Developmental and Social Psychology<br></div>     
        <br>    
        <input type="submit" value="Submit now" />    
    </fieldset>  
</form>
<script>
    function test(){
        document.getElementById("txtHint").innerHTML = "";
    }
</script>
 
