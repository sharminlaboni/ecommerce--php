<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital@0;1&display=swap" rel="stylesheet" />

    <!-- Css -->
    <link rel="stylesheet" href="./css/dashboard.css" />
    <link rel="stylesheet" href="./css/main.css">
    <title>Dashboard</title>
</head>

<body>
    <?php require("./navbar.php") ?>
    <?php require("./sidebar.php") ?>

    <main>
        <div class="container category-width">
            <div class="col-md-12 fw-bold fs-3">Category</div>
            <?php
            require_once("../vendor/autoload.php");
            $category_obj = new Src\Category();
            $result = $category_obj->category_get_all();

            ?>
            <div class="row">

                <?php
                foreach ($result as $key => $row) {
                    echo <<<SHOW
                        <div class="col-md-3">
                            <div class="card card_category">
                                <div class="card-title">
                                    <i class="fa-solid fa-tablets"></i><br>
                                    {$row["name"]}
                                </div>
                                <div class="card-body">
                                    <a href="../admin_product/product_list.html" class="btn btn-outline-primary btn-sm">View</a>
                                    <a class="btn btn-outline-info btn-sm" href="./category_add.php?id={$row["id"]}">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>
                                    <a class="btn btn btn-outline-danger btn-sm" href="./crud/category_crud.php?id={$row["id"]}&mode=delete">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        SHOW;
                }
                ?>
            </div>
            <div class="container">
                <a href="./category_add.php" class="btn btn-outline-primary">Add New Category</a>
            </div>
        </div>
    </main>

    <?php require("./footer.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>