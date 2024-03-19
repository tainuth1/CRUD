<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php
    $connection = new mysqli('localhost', 'root', '', 'mydatabase');

    function deleted_row(){
        global $connection;
        
        $sql = "SELECT * FROM `products` WHERE `status` = 1";

        $result = $connection->query($sql);

        while($row = mysqli_fetch_assoc($result)){
            ?>
                <tr>
                    <td><input class="form-check-input " type="checkbox" name="checkbox[]" value="<?php echo $row['id'] ?>"></td>
                    <td><?=$row['id'] ?></td>
                    <td><?=$row['name'] ?></td>
                    <td><?=$row['category'] ?></td>
                    <td><?=$row['brand'] ?></td>
                    <td><?=$row['price'] ?></td>
                    <td class="d-flex gap-2">
                        <form action="" method="post" onsubmit = "return confirm("Are you sure to delete this record..");">
                            <button class="btn btn-outline-danger " name="_remove" value="<?=$row['id'] ?>" type="submit"><i class="fa-regular fa-trash-can"></i></button>
                        </form>
                        <form action="" method="post" onsubmit=" return confirm(\'Are you sure to restore this record\')">
                            <button class="btn btn-primary " name="_restore" type="submit" value="<?=$row['id'] ?>"><i class="fa-solid fa-rotate-left"></i> Restore</button>
                        </form>
                    </td>
                </tr>
            <?php
        }
    }
    deleted_row();

    function restore(){
        global $connection;

        if(isset($_POST['_restore'])){
            $id_restore = $_POST['_restore'];

            $sql = "UPDATE `products` SET `status` = 0 WHERE `id` = '$id_restore'";

            $result = $connection->query($sql);

            if($result){
                echo '
                    <script>
                        $(document).ready(function(){
                            swal({
                                title: "Product Restore Successfuly",
                                text: "You clicked the button!",
                                icon: "success",
                                button: "Continous",
                                });
                        });
                    </script>';
            }
        }
    }
    restore();
    function restore_all(){
        global $connection;

        if(isset($_POST['_restore_all'])){
            $id_restore = $_POST['_restore_all'];

            $sql = "UPDATE `products` SET `status` = 0 WHERE `status` = 1";

            $result = $connection->query($sql);

            if($result){
                echo '
                    <script>
                        $(document).ready(function(){
                            swal({
                                title: "All Product Restored",
                                text: "You clicked the button!",
                                icon: "success",
                                button: "Continous",
                                });
                        });
                    </script>';
            }
        }
    }
    restore_all();

    function remove(){
        global $connection;

        if(isset($_POST['_remove'])){
            $id_delete = $_POST['_remove'];
            $sql = "DELETE FROM `products` WHERE `id` = '$id_delete'";

            $result = $connection->query($sql);

            if($result){
                echo '
                    <script>
                        $(document).ready(function(){
                            swal({
                                title: "Product Removed!",
                                text: "You clicked the button!",
                                icon: "success",
                                button: "Continous",
                                });
                        });
                    </script>';
            }
        }
    }
    remove();
?>