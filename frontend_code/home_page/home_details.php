<?php include 'header.php' ?>


      <div aria-label="breadcrumb" style="background-color: rgb(212, 221, 220);">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html" style="text-decoration: none; margin-left: 30px;">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Details</li>
        </ol>
      </div>

      <?php 

        require_once("../../vendor/autoload.php");  
        $obj = new Src\Product();
        $id =$_GET["id"];
        $product = $obj->get_one($id);

        if (!is_null($product)) {
            //foreach ($products as $product) { 
              
              ?>

      <main>
        <div class="row m-5 px-5 bg-light">
          <div class="col-lg-4 col-md-4 col-sm-4 text-center mt-3">
              <img style="height: 400px;" src="image/product_07_large.png">
          </div>

          <div class="col-lg-8 col-md-8 col-sm-4 p-3">
              <h2 class="text-black"><?= $product['name']; ?></h2>
              <p><?= $product['description']; ?></p>
          
              <h3><strong></strong></h3>
              
              <p><a style="padding: 10px 100px;" href="home_cart.php" class="btn btn-sm btn-info btn-outline-light border-info mt-3"><strong>ADD TO CART</strong></a>

          </div>
        </div>
      </main>
      
<?php }  ?> 
      
        <section>
          <div class="row bg-info mx-5 px-5">
              
                <div class="col-lg-6 col-md-4 col-sm-4 ">
                  <div class="image py-5 pl-5 my-5">
                    <h3 style="padding-left: 30px;">PHARMA <br> PRODUCTS</h3>
                    <p style="padding-left: 30px;">Lorem, ipsum dolor sit amet <br> consectetur adipisicing elit. <br> Molestiae ex ad minus rem <br> odio voluptatem.</p>
                  </div>
              </div>
  
                <div class="col-lg-6 col-md-4 col-sm-4">
                  <div class="image1 py-5 my-5 pl-5 text-center">
                    <h3 class="pl-5">PHARMA <br> PRODUCTS</h3>
                    <p class="pl-5">Lorem, ipsum dolor sit amet <br> consectetur adipisicing elit. <br> Molestiae ex ad minus rem <br> odio voluptatem.</p>
                  </div>
              </div>
          </div>
        </section>

<?php include 'footer.php' ?>
       