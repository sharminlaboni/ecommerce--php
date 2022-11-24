<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital@0;1&display=swap" rel="stylesheet" />

    <!-- Css -->
    <link rel="stylesheet" href="./css/dashboard.css" />
    <title>Dashboard</title>
</head>
<body>
    <?php require("./navbar.php") ?>
    <?php require("./sidebar.php") ?>
    <main>
            <?php
            require_once("../vendor/autoload.php");
            $user_obj = new Src\User();
            $result = $user_obj->user_get_all();

            ?>

    <div class="container mt-3">
        <div class="row">
                     
            <div class="col-md-12">
            <div class="col-md-12 fw-bold fs-3">Customer List</div>
               <h3 align='center'style="color:darkblue">User List </h3>

                <table class="table table-striped table-info">
                <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $key => $row) {?>

                        <tr>
                            <td><?=$row['id']?></td>
                            <td><?=$row['name']?></td>
                            <td><?=$row['email']?></td>
                            <td><?=$row['address']?></td>
                            <td><?=$row['phone']?></td>
                            <td>
                            <a class="btn btn-primary btn-sm" 
                                    href="./user_show.php?id=<?=$row['id']?>">show</a>                               
                           <a class="btn btn-success btn-sm" 
                                    href="./user_update.php?id=<?=$row['id']?>">Update</a>
                            <a class="btn btn-danger btn-sm" 
                            href="./user_delete.php?id=<?=$row['id']?>" > delete </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </main>

    <?php require("./footer.php") ?>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
</body>
</html>