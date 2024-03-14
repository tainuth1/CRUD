<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php
    
    $connection = new mysqli('localhost', 'root', '', 'mydatabase');

    //Insert Function
    function insert(){
        global $connection;
        if(isset($_POST['_addProduct'])){
            $name = $_POST['_name'];
            $category = $_POST['_category'];
            $brand = $_POST['_brand'];
            $price = $_POST['_price'];
    
            if(!empty($name) || !empty($category) || !empty($brand) || !empty($price)){
                $sql = "INSERT INTO `products` 
                        SET `name` = '$name', 
                        `category` = '$category',
                        `brand`    = '$brand',
                        `price`    = '$price' ";
    
                $insertResult = $connection->query($sql);
    
                if($insertResult){
                    echo '
                    <script>
                        $(document).ready(function(){
                            swal({
                                title: "Product Inserted",
                                text: "You clicked the button!",
                                icon: "success",
                                button: "Continous",
                              });
                        });
                    </script>';
                }else{
                    echo "<script>alert('Product Add Failse.');</script>";
                }
            }else{
                echo '
                    <script>
                        $(document).ready(function(){
                            swal({
                                title: "Can Not Insert",
                                text: "All Field must be field",
                                icon: "error",
                                button: "Continous",
                              });
                        });
                    </script>
                ';
            }
    
        }
    }
    insert();

    //Update Function
    function update(){
        global $connection;
        if(isset($_POST['_updated'])){

            $newID = $_POST['_id'];
            $newName = $_POST['_name'];
            $newCategory = $_POST['_category'];
            $newBrand = $_POST['_brand'];
            $newPrice = $_POST['_price'];
    
            $sqlUpdate = "UPDATE `products` 
                    SET `name`     = '$newName', 
                        `category` = '$newCategory', 
                        `brand`    = '$newBrand', 
                        `price`    = '$newPrice'
                    WHERE `id`     = $newID";
    
            $resultUpdate = $connection->query($sqlUpdate);
    
            if($resultUpdate){
                echo '
                <script>
                    $(document).ready(function(){
                        swal({
                            title: "Product Updated",
                            text: "You Updated product with ID = '.$newID.'!",
                            icon: "success",
                            button: "Continous",
                          });
                    });
                </script>';
            } else {
                echo 'Error updating record: ' . $connection->error;
            }
        }
    }
    update();

    // Delete Function
    function delete(){
        global $connection;
        if(isset($_POST['_delete'])){

            $row_to_delete = $_POST['_delete'];
            
            //I change this to update because I want to update there status to 0, So I can restore it
            $sql = "UPDATE `products` SET `status` = 1 WHERE `id` = $row_to_delete";
    
            $result = $connection->query($sql);
    
            if($result){
                echo '
                <script>
                    $(document).ready(function(){
                        swal({
                            title: "Product Deleted",
                            text: "Product ID : '.$row_to_delete.' Deleted.",
                            icon: "success",
                            button: "Continous",
                          });
                    });
                </script>';
            }
        }
    }
    delete();