<?php 

    $connection = new mysqli('localhost', 'root', '', 'mydatabase');

    $sql = "SELECT * FROM `products` WHERE `status` = 1";

    $result = $connection->query($sql);

    if(mysqli_num_rows($result) == 0){
        echo "disabled";
    }else{
        echo "";
    }