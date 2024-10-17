<?php
$cokie_name="user";
$cokie_value="admin123";
setcookie($cokie_name,$cokie_value, time()+(86400*30),"/");
?>
<html>
    <body>
        <?php
        if(!isset($_COOKIE[$cokie_name])){
            echo "cookie name ".$cokie_name."is set";

        }
        else{
            echo "$cokie_name is not set";
        }
        ?>