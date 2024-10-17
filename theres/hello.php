<?php echo '<p>i love webprogramming</p>
<h1>welcome to php</h1>';
$a='32';
settype($a,"integer");
echo (floor(0.60)."<br>");
echo(ceil(-5.9)."<br>");
echo(round(0.70878)."<br>");
echo (rand()."<br>");
echo (rand(100,150)."<br>");
// define("MINSIZE",50);
// echo MINSIZE;
print date("Y/m/d");

print "today is ".date("Y/m/d");

session_start();
$_SESSION["uname"]= "administratorrr";
print ("</br> welcome ".$_SESSION["uname"]);
?>
