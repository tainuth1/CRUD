<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        include ('../link/style.php');
        include ('../link/icon.php');
        include ('select.php'); 
    ?>
    <title>Restore Data</title>
</head>
<body>
    <div class="">
        <div class="container d-flex justify-content-between align-items-center pt-4 pb-4" >
            <a href="../main.php"><button class="btn btn-success "><i class="fa-solid fa-angle-left"></i> Back To Dashboard</button></a>
            <h1 class="text-primary">Deleted Record</h1>
            <form action="" method="post" onsubmit=" return confirm('Are you sure to restore all record?')">
                <button type="submit" class="btn btn-primary " name="_restore_all"><i class="fa-solid fa-reply-all"></i> Restore All</button>
            </form>
        </div>
        <div class="container"><!--style="width: 1350px; margin: 0 auto;"-->
            <form action="" method="post">
                <table class="table align-middle table-hover table-striped " style="table-layout: fixed;">
                    <tr class="table-dark">
                        <th>
                            <input type="submit" class="btn btn-warning " value="Multi-Restore" name="select_restore">
                        </th>
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
            </form>
        </div>
    </div>
</body>
</html>