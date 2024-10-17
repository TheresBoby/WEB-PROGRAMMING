<?php 
$cars =array("saab","volvo","BMW","Toyota");
$i=0;
for ($i=0;$i<count($cars);$i++)
print($cars[$i]."<br>");

$mon=array(
    "January"=>"first","February"=>"Second","March"=>"third","April"=>"fourth"
,"may"=>"fifth","june"=>"sixth");
foreach($mon as $monname => $monvalue)
    print("<p>$monname is the $monvalue month </p>");
ksort($mon);
foreach($mon as $monname => $monvalue){
    echo"key=".$monname." Value=".$monvalue;
    echo "<br>";

}

$str="may god bless u all";
$words=explode(" ",$str);
echo($words[1]);
$fruits= array("orange","grapes","apple","banananana");
rsort($fruits);
foreach($fruits as $x){
    echo "<br>";
    echo $x;
}
$arr1=array('a','1','2','3','4');
$arr2=array('a','3');
if (array_intersect($arr2,$arr1)=== $arr2)  
    echo"<br/> is a subset <br/>";
else{
    echo "<br/> not subset";
}
  $text= strtoupper("hello worldd");
  echo $text;
function writeMsg(){
    echo "hello world";
}
writeMsg();

function addNum(int $a,int $b){
    return $a+$b;
}
echo"5+15=".add(1.2,5.2);
?>
