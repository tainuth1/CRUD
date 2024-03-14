<?php

    $connection = new mysqli('localhost', 'root', '', 'mydatabase');

    $sql = "SELECT COUNT(*)as count FROM `products` WHERE `status` = 1";

    $countResult = $connection->query($sql);

    if($countResult){
        $row = $countResult->fetch_assoc();
        $count = $row['count'];
        echo $count;
    }else{
        echo '0';
    }