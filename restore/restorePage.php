<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        include ('../link/style.php');
        include ('../link/icon.php');
    ?>
    <title>Restore Data</title>
</head>
<body>
    <div class="">
        <div class=" d-flex justify-content-between align-items-center pt-4 pb-4" style="width: 1350px; margin: 0 auto;">
            <a href="../main.php"><button class="btn btn-success "><i class="fa-solid fa-angle-left"></i> Back To Dashboard</button></a>
            <h1 class="text-primary">Deleted Record</h1>
            <form action="" method="post" onsubmit=" return confirm('Are you sure to restore all record?')">
                <button type="submit" class="btn btn-primary " name="_restore_all"><i class="fa-solid fa-reply-all"></i> Restore All</button>
            </form>
        </div>
        <div style="width: 1350px; margin: 0 auto;">
            <table class="table align-middle table-hover table-striped " style="table-layout: fixed;">
                <tr class="table-dark">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                <?php
                    include 'restoreFunction.php';
                ?>
                
            </table>
        </div>
    </div>
</body>
</html>