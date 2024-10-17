<?php
$str1="apple";
$str2="banana";
$result=strcmp($str1,$str2);
if ($result< 0 ){
    echo "$str1 preceeds $str2 alphabetically";

}
elseif($result==0){
    echo "equal";
    
}
else{
    echo"$str1 follows $str2";
}
?>