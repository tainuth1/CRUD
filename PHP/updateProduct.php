<?php

if(isset($_POST['_edit'])){

    $updateID = $_POST['_update-id'];
    $updateName = $_POST['_update-name'];
    $updateCategory = $_POST['_update-category'];
    $updateBrand = $_POST['_update-brand'];
    $updatePrice = $_POST['_update-price'];

    ?>
        <div class="blur-background"></div>
        <div class="update-form p-4 rounded shadow " id="update-form" data-aos="fade-down" data-aos-duration="700">
            <form action="" method="post">
                <center>
                    <h2 class="text-primary ">Update Product</h2>
                </center>
                <input type="hidden" name="_new-ID" value="<?php echo $updateID; ?>">
                <label class=" mt-3" for="">Name</label>
                <input type="text" name="_new-Name" value="<?php echo $updateName; ?>" class="form-control" autocomplete="off">
                <label class=" mt-3" for="">Category</label>
                <input type="text" name="_new-Category" value="<?php echo $updateCategory; ?>" class="form-control" autocomplete="off">
                <label class=" mt-3" for="">Brand</label>
                <input type="text" name="_new-Brand" value="<?php echo $updateBrand; ?>" class="form-control" autocomplete="off">
                <label class=" mt-3" for="">Price</label>
                <input type="number" name="_new-Price" value="<?php echo $updatePrice; ?>" class="form-control" autocomplete="off">
                <div class="d-flex justify-content-between mt-2">
                    <input type="submit" name="_updated" value="UPDATE" class="btn btn-danger">
                    <button id="update-cancel" class="btn btn-secondary ">Cancel</button>
                </div>
            </form>
        </div>

    <?php
}

?>
