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

    <?php
    require_once("../vendor/autoload.php");
    $id = $_GET['id'];
    $user_obj = new Src\User();
    $row = $user_obj->user_get_one($id);
    ?>


    <style>
        .button {
            position: fixed;
            left: 5%;
            bottom: 90%;
            background-color: white;
        }

        .contrainer {
            margin-top: 50px;
            height: 85.8vh;
            box-sizing: border-box;
        }

        p {
            text-align: center;
            font-size: 1.5rem;
        }
    </style>
    <?php include("./navbar.php") ?>
    <?php include("./sidebar.php") ?>
    <main>
        <div class="button">
            <a class="btn btn-primary" href="user.php">List</a>
        </div>

        <div>

            <div class="contrainer">
                <h1 align='center'>User information</h1>
                <hr>
                <p>Name: <b><?= $row['name'] ?></b></p>
                <p>Email: <b><?= $row['email'] ?></b></p>

                <p>Address: <b><?= $row['address'] ?></b></p>
                <p>Phone: <b><?= $row['phone'] ?></b></p>
            </div>
        </div>
    </main>
    <?php include("./footer.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>