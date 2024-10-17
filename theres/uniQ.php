<?php
function addfive(&$value){
    $value+=98;
}
$num=2;
addfive($num);
echo "num=$num";

$ages=array("harry"=>21,"alice"=>20,"megha"=>22,"Bob"=>19);
$ages["megha"]=28;
asort($ages);
foreach($ages as $agename => $agevalue)
    print("<p>$agename is  $agevalue years old </p>");
print($ages["alice"]);
?>