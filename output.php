<?php

include_once 'config.php';
if(isset($_POST['submit'])){

    if(!empty($_POST['fav_mod'])) {

        foreach($_POST['fav_mod'] as $value){
            echo "value : ".$value.'<br/>';
        }

    }

}
?>
