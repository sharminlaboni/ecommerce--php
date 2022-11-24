<?php
    include('navbar.php');
    include('sidebar.php');
?>
<main>
      <div class="m-5 p-5">
        <h3 class="text-center mb-3">Medicine List</h3>
        <a class="m-3 btn btn-primary btn-outline-light border-primary float-end" href="medicine_add.php">Add Medicine</a>
        <table class="table text-center">
          <thead>
            <tr>
              <th>Name</th>
              <th>Stock</th>
              <th>Sold</th>
              <th>Price</th>
              <th>Image</th>
              <th>Action</th>
            </tr> 
          </thead>
          <tbody>
          <?php 

            require_once("../../vendor/autoload.php");  
            $obj = new Src\Product();
            
            $products = $obj->get_all();
            
            if (!is_null($products)) {
                foreach ($products as $product) { 
                ?> 
                <tr>
                  <td style="padding-top: 30px;"> <?= $product['name']; ?> </td>
                  <td style="padding-top: 30px;"> <?= $product['stock']; ?> </td>
                  <td style="padding-top: 30px;"> <?= $product['sold']; ?> </td>
                  <td style="padding-top: 30px;"> <?= $product['price']; ?> </td>
                  <td> <img style="width: 100px; height: 100px;" src="../../src/<?= $product['image']; ?>"> </td>
                  <td style="padding-top: 30px;">
                    <a href="medicine_view.php?id=<?= $product['id']; ?>" class="btn btn-primary btn-outline-light border-primary">View</a>
                    <a href="update_form.php?id=<?= $product['id']; ?>" class="btn btn-info btn-outline-light border-info">Edit</a>
                    <a href="delete.php?id=<?= $product['id']; ?>" class="btn btn-danger btn-outline-light border-danger">Delete</a>
                  </td>
                </tr>
            <?php  }
            }else{ ?>
              <tr>
                <td style="font-size: 20px;" colspan="4">No record found</td>
              </tr>
              <?php
              
            }
              
              ?>
          </tbody>
        </table>
      </div>
    </main>

<?php include('footer.php') ?>