<?php
session_start();
?>
<html><body>
    <?php 
    $_SESSION["uname"]= "admin";
    $_SESSION["pwd"]="admin123";
    echo "session variables are set."
    ?>
    <a href ="hello.php">click here</a>
    <a href ="logout.php">logout</a>
</body></html>