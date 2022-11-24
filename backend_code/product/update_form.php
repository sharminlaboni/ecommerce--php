<?php
    include('navbar.php');
    include('sidebar.php');

    require_once("../../vendor/autoload.php");  
    $obj = new Src\Product();
    $id =$_GET["id"];
    $update = $obj->get_one($id);
?>
 <main>
    <div class="m-3 p-5">
        <div class="card bg-light" style="margin: 5% 25%;">
            <div class="text-center my-4">
                <h5 style="font-size: 30px;">Update Medicine</h5>
            </div>
            <form action="update_action.php" method="POST" enctype="multipart/form-data" class="mx-4 mb-3">
                    <input type="hidden" name="id" value="<?= $update['id']; ?>">       
                <div class="mb-3">
                    <label for="name" class="form-label">Medicine Name</label>
                    <input type="text" name="name" class="form-control" value="<?= $update['name']; ?>" required>
                </div>
            

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" name="description" class="form-control" value="<?= $update['description']; ?>" required>
                </div>

                <div class="row">                       
                    <div class="col-md-6">                        
                        <div class="mb-3">
                            <label for="sold" class="form-label">Sold</label>
                            <input type="number" name="sold" class="form-control" value="<?= $update['sold']; ?>" required>
                        </div>
                    </div>

                    <div class="col-md-6">                        
                        <div class="mb-3">
                            <label for="stock" class="form-label">Stock</label>
                            <input type="number" name="stock" class="form-control" value="<?= $update['stock']; ?>" required>
                        </div>
                    </div>
                </div>

                <div class="row">                       
                    <div class="col-md-6">                        
                        <div class="mb-3">
                            <label for="category_id" class="form-label">Category</label>
                            <select name="category_id" value="<?= $update['category_id']; ?>" class="form-control">
                                <option value="1">Tablet</option>
                                <option value="2">Capsule</option>
                                <option value="3">Syrup</option>
                                <option value="4">Injection</option>
                            </select>
                        </div>
                    </div>

                 <input type="hidden" name="brand_id"  value="<?= $update['brand_id']; ?>" class="form-control">


                    <div class="col-md-6">                        
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" name="price" class="form-control" value="<?= $update['price']; ?>" required>
                        </div>
                    </div>
                </div>

                <!-- <div class="mb-3">
                    <input type="file" id="myFile" name="filename">
                </div> -->
                <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-primary btn-outline-light border-primary my-2" style="padding: 1% 43%;">Update</button>
                </div>
            </form>

        </div>
    </div>
</main>

<?php include('footer.php') ?>
