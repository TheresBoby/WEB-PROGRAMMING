<?php
$str="redefine";
$pattern ="/fin/";
if (preg_match($pattern,$str)){
    echo "pattern found";
}
else{
    echo"not found";
}
?>