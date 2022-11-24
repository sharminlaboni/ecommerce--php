<?php
    include('navbar.php');
    include('sidebar.php');

    require_once("../../vendor/autoload.php");  
    $obj = new Src\Product();
    $id =$_GET["id"];
    $product = $obj->get_one($id);

    if (!is_null($product)) {
?>

<main>
      <div class="m-5 p-5">
        
        <table class="table table-bordered mb-3">
        <h3>Medicine Details</h3>
          <tbody>
                <tr>
                    <td>Name : </td>
                    <td > <?= $product['name']; ?> </td>
                </tr>

                <tr>
                    <td>Description : </td>
                    <td> <?= $product['description']; ?> </td>
                </tr>

                <tr>
                    <td>Stock : </td>
                    <td> <?= $product['stock']; ?> </td>
                </tr>

                <tr>
                    <td>Sold : </td>
                    <td> <?= $product['sold']; ?> </td>
                </tr>

                <tr>
                    <td>Price : </td>
                    <td> <?= $product['price']; ?> </td>
                </tr>

               <tr>
                    <td>Image</td>
                    <td> <img style="width: 120px; height: 120px;" src="../../src/<?= $product['image']; ?>"> </td>
               </tr>
          </tbody>
        </table>
        <a href="update_form.php?id=<?= $product['id']; ?>" class="btn btn-primary btn-outline-light border-primary px-5">Update</a>

    </div>
    </main>

    <?php } ?>

<?php include('footer.php') ?>
