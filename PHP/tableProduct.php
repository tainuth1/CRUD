<?php

    $sql = "SELECT * FROM `products` WHERE `status` = 0
            ORDER BY `id` DESC";

    $result = $connection->query($sql);

    if($result){
        
        if(isset($_GET['_search'])){
            $filterRecord = $_GET['_search'];
            $sql_search = "SELECT * FROM `products` WHERE CONCAT(`name`, `category`, `brand`) LIKE '%$filterRecord%'";

            $search_result = $connection->query($sql_search);

            if($search_result){
                foreach($search_result as $s_row){
                    ?>
                        <tr class="">
                            <td><?= $s_row['id'] ?></td>
                            <td><?= $s_row['name'] ?></td>
                            <td><?= $s_row['category'] ?></td>
                            <td><?= $s_row['brand'] ?></td>
                            <td><?= $s_row['price'] ?></td>
                            <td class="d-flex gap-2">
                                <button class="btn btn-outline-primary" id="open-update" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-regular fa-pen-to-square"></i> Edit</button>
                                <form method="post"  onsubmit="return confirm(\'Are you sure to delete this product [ '.$row['name'].' ]\')""> 
                                    <button class="btn btn-danger" type="submit" name="_delete" value="'.$row['id'].'"><i class="fa-solid fa-trash-can"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php
                }
            }
        }else{
            while($row = mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['category'] ?></td>
                        <td><?= $row['brand'] ?></td>
                        <td><?= $row['price'] ?></td>
                        <td class="d-flex gap-2">
                            <button class="btn btn-outline-primary" id="open-update" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-regular fa-pen-to-square"></i> Edit</button>
                            <form method="post"  onsubmit="return confirm(\'Are you sure to delete this product [ '.$row['name'].' ]\')""> 
                                <button class="btn btn-danger" type="submit" name="_delete" value="'.$row['id'].'"><i class="fa-solid fa-trash-can"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php
            }
        }

    }