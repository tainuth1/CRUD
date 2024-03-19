<?php

    $connection = new mysqli('localhost', 'root', '', 'mydatabase');

    if(isset($_POST['select_restore'])) {
        $restore_id = $_POST['checkbox'];
        $extract_id = implode(',', $restore_id);

        $sql = "UPDATE `products` SET `status` = 0 WHERE `id` IN($extract_id)";
        $result = $connection->query($sql);
    }
?>
