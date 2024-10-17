<?php
session_start();
if(isset($_SESSION['visitcount'])){
    $_SESSION['visitcount']+=1;
}
else{
    $_SESSION['visitcount']=1;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Website visit counter</h1>
    <?php
    echo "<p> you have visited this website ".$_SESSION['visitcount']." times.</p>";
    ?>
</body>
</html>