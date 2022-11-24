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

    $id = $_GET['id'];

    $user_ob = new Src\User();
    $user = $user_ob->user_get_one($id);
    ?>
    <style>
        .contanier{
            background-color: whitesmoke;
            size:80%;
          
        }
        
    </style>

    <main style="margin: 70px auto;width: 30vw;">
     <div class="contanier">
        <form action="user_update_process.php" method="POST">
            <input type="hidden" name="id" value="<?=$id?>">
            <div class="mb-3">
                <h4 align='center'>User information</h4>
            </div>
            <div class="mb-3">
                <label for="customer_name" class="form-label">Customer Name</label>
                <input type="text" class="form-control" id="customer_name" name="name" value="<?= $user['name'] ?>" />
            </div>
            <div class="mb-3">
                <label for="customer_address" class="form-label">Customer Address</label>
                <input type="text" class="form-control" id="customer_address" name="address" value="<?= $user['address'] ?>" />
            </div>
            <div class="mb-3">
                <label for="customer_contact" class="form-label">Customer email</label>
                <input type="text" class="form-control" id="customer_contact" name="email" value="<?= $user['email'] ?>"/>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Customer phone</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="phone" value="<?= $user['phone'] ?>"/>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"> Password</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="password" value="<?= $user['password'] ?>"/>
            </div>
            <button type="submit" class="btn btn-primary">update</button>
            <a href="./user.php" class="btn btn-secondary">Cancel</a>
        </form>
</div>
    </main>

    <?php require("./footer.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>