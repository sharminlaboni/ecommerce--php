<?php include 'header.php' ?>

    <div id="categories" class="nav-item dropdown" style="background-color: rgb(212, 221, 220);">
      <a href="#" class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown" style="margin-left: 35px;">CATEGORIES</a>
      
      <div class="dropdown-menu">
          <a href="#PopularProduct" class="dropdown-item">Popular Production</a>
          <a href="#NewProduction" class="dropdown-item">New Production</a>
          <a href="#" class="dropdown-item"></a>
      </div>
    </div>

      <main>
        <div class="bg-image d-flex justify-content-center align-items-center mb-5">
           <div class="text-light text-center font-weight-bold">
            <h5>EFFECTIVE MEDICINE, NEW MEDICINE EVERYDAY</h5>
            <h1 style="font-size: 70px;">WELCOME TO <br> PHARMA</h1><br>
            <a href="../Saiful/product_list.html" class="btn btn-info btn-outline-light px-5 py-3">SHOP NOW</a>
            </div>
        </div>
        
      
        <section>
          <div class="PopularProduction text-center m-5">
            <h2 id="PopularProduct">POPULAR PRODUCTION</h2>
          </div>
          <div class="row m-5 p-5 bg-light">
          <?php 

            require_once("../../vendor/autoload.php");  
            $obj = new Src\Product();
            
            $products = $obj->get_popular();
            
            if (!is_null($products)) {
                foreach ($products as $product) { ?>
              <div class="col-lg-3 col-md-3 col-sm-3 mb-3">
                <div class="card text-center">
                  <img src="../../src/<?= $product['image']; ?>" class="card-img-top" style="height: 300px;">
                  <div class="card-body">
                    <p class="card-text" style="font-size: 20px;"><?= $product['name']; ?></p>
                    <h4 class="card-title"><?= $product['price']; ?> TK</h4>
                    <a href="home_details.php?id=<?= $product['id']; ?>" class="btn btn-light btn-outline-success" style="padding: 10px 40px;">ADD TO CART</a>
                  </div>
                </div>
              </div> 
              
              <?php } } ?>
            </div>

          <div class="ViewProducts text-center pb-5">
            <a href="product_font.php" class="btn btn-info btn-outline-dark px-5 py-3 text-light">VIEW ALL PRODUCTS</a>
          </div>

          <div class="NewProducT text-center m-5">
            <h2 id="NewProduction">NEW PRODUCTION</h2>
          </div>

          <div class="row m-5 p-5 bg-light">
          <?php 

            require_once("../../vendor/autoload.php");  
            $obj = new Src\Product();
            
            $products = $obj->get_new();
            
            if (!is_null($products)) {
              foreach ($products as $key => $product) { ?>

            <div class="col-lg-3 col-md-3 col-sm-3 mb-3">
              <div class="card text-center" style="width: 16rem;">
                <img src="../../src/<?= $product['image']; ?>" class="card-img-top" style="height: 300px;">
                <div class="card-body">
                  <p class="card-text" style="font-size: 20px;"><?= $product['name']; ?></p>
                  <h4 class="card-title"><?= $product['price']; ?> TK</h4>
                  <a href="home_details.php?id=<?= $product['id']; ?>" class="btn btn-light btn-outline-success" style="padding: 10px 40px;">ADD TO CART</a>
                </div>
              </div>
            </div>
            <?php } } ?>
          </div>
        </section>

        <div class="DevelopedByPixel text-center mt-5">
          <h1>DEVELOPED BY PIXEL</h1>
        </div>
          <div class="row m-5 p-5">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <img src="image/Sanny.jpg" style="height: 80px; width: 100px; border-radius: 50%;">
              <p>Lorem ipsum dolor sit amet,
                consectetur adipisicing elit.
                Eius quae reiciendis distinctio
                voluptates sed dolorum excepturi
                iure eaque, aut unde.</p>
                <p style="color: rgb(156, 183, 178); font-weight: bold;">&mdash;Md Saiduzzaman</p>
            </div>
            

            <div class="col-lg-3 col-md-3 col-sm-3">
              <img src="image/mehedi.jpg" style="height: 80px; width: 100px; border-radius: 50%;">
              <p>Lorem ipsum dolor sit amet,
                consectetur adipisicing elit.
                Eius quae reiciendis distinctio
                voluptates sed dolorum excepturi
                iure eaque, aut unde.</p>
                <p style="color: rgb(156, 183, 178); font-weight: bold;">&mdash;Mohd Mehedi Hasan Joy</p>
            </div>
            

            <div class="col-lg-3 col-md-3 col-sm-3">
              <img src="image/saiful.jpg" style="height: 80px; width: 100px; border-radius: 50%;">
              <p>Lorem ipsum dolor sit amet,
                consectetur adipisicing elit.
                Eius quae reiciendis distinctio
                voluptates sed dolorum excepturi
                iure eaque, aut unde.</p>
                <p style="color: rgb(156, 183, 178); font-weight: bold;">&mdash;Saiful Jhony</p>
            </div>
            

            <div class="col-lg-3 col-md-3 col-sm-3">
              <img src="image/sarmin.jpg" style="height: 80px; width: 100px; border-radius: 50%;">
              <p>Lorem ipsum dolor sit amet,
                consectetur adipisicing elit.
                Eius quae reiciendis distinctio
                voluptates sed dolorum excepturi
                iure eaque, aut unde.</p>
                <p style="color: rgb(156, 183, 178); font-weight: bold;">&mdash;Sharmin Akter Laboni</p>
            </div>   
        </div>
      </main>
<?php include 'footer.php';?>
      






