
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        include ('PHP/crudFunction.php');
        include ('link/style.php');
        include ('link/icon.php');
        include ('PHP/addProduct.php');
    ?>
    <link rel="stylesheet" type="text/css" href="style/show.css">
    <title>Admin Dashboard</title>
</head>
<body>
    <div>
        <div class="container pt-4 pb-4 d-flex justify-content-between align-items-center bg-white ">
            <h2 class="text-primary "><i class="fa-brands fa-product-hunt"></i> Product Information</h2>
            <div class="w-50 d-flex align-items-center gap-2 justify-content-end ">
                <form action="" method="GET" class="w-50 d-flex a;ign-items-center gap-1">
                    <input type="text" name="_search" id="" autocomplete="off " class=" form-control" placeholder = "Search...">
                    <button type="submit" autocomplete="off" class="btn btn-primary d-flex align-items-center gap-1" <?php if(isset($_GET['_search'])){echo $_GET['_search'];} ?>><i class="fa-solid fa-magnifying-glass"></i> Search</button>
                </form>
                <button class="btn btn-primary" id="open-add" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-solid fa-circle-plus"></i> Add Product</button>
                <button class="btn btn-danger" <?php include 'PHP/disableBtn.php'; ?> name="_restore-btn">
                    <a class="text-decoration-none text-white position-relative " href="./restore/restorePage.php">
                        <i class="fa-solid fa-trash-arrow-up"></i> Restore
                        <span class="position-absolute translate-middle badge rounded-pill bg-primary" style="top: -8px; right: -33px;">
                            <?php include 'PHP/countTable.php' ?>
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </a>
                </button>
            </div>
        </div>
        <div class="container table-container">
            <table class="table align-middle table-hover table-striped " style="table-layout: fixed;">
                <tr class="table-dark sticky-top shadow ">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                <?php 
                    include ('PHP/tableProduct.php');
                ?>
            </table>
        </div>
    </div>
</body>
</html>
<script>
    $(document).ready(function(){
        $('#open-add').click(function(){
            $('#update').hide();
            $('#add-btn').show();
            $('#reset').show();

        });
        $('body').on('click', '#open-update', function(){
            $('#add-btn').hide();
            $('#update').show();
            $('#reset').hide();

            var id       = $(this).parents('tr').find('td').eq(0).text();
            var name     = $(this).parents('tr').find('td').eq(1).text();
            var category = $(this).parents('tr').find('td').eq(2).text();
            var brand    = $(this).parents('tr').find('td').eq(3).text();
            var price    = $(this).parents('tr').find('td').eq(4).text();
        

            $('#id').val(id);
            $('#name').val(name);
            $('#category').val(category);
            $('#brand').val(brand);
            $('#price').val(price);
        });
    });
</script>