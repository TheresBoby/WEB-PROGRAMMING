<?php
$conn =mysqli_connect("localhost","root", "","theres_db");
if($conn){
    $sql= " CREATE TABLE test1 (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, name VARCHAR(75), mark  INT)";
    $res= mysqli_query($conn,$sql);
    if($res){
        echo "table test1 created successfully";

    }else{
        printf ("couldnt create table\n", mysqli_error($conn));

    }
}else{
    printf("conectionn failedd\n",mysqli_connect_error());
    exit();
}
mysqli_close($conn);
?>