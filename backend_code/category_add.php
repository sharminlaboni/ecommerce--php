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
    <?php
        require("./../vendor/autoload.php");
        $id = null;
        $new = true;
        $name = "";
        if(isset($_GET["id"])) {
            $id = $_GET["id"];
            $new = false;
            $obj = new Src\Category();
            $result = $obj->category_get_one($id);
            $name = $result[0]["name"];
        }
    
    ?>

    <main style="margin: 70px auto;width: 30vw;">
    <style>
    main{
        background-color:whitesmoke;
    }
    
</style>
    <div class="conrainer">
        <form action="./crud/category_crud.php" method="POST">
            <input type="hidden" name="id" value="<?=$id?>">
            <label class="form-label" for="category_name">Name:</label>
            <input class="form-control" type="text" name="name" id="category_name" value="<?= $name ?>">
            
            <br><?php if($new):?>
                <input class="btn btn-outline-primary" type="submit" name="button" value="Add">
            <?php else: ?>
                <input class="btn btn-primary" type="submit" name="button" value="Save">
            <?php endif;?>
        </form>
            </div>
    </main>

    <?php require("./footer.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>