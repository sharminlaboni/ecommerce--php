<?php include 'header.php';?>

<main>
<div class="row m-5 p-5 bg-light">
<?php 

require_once("../../vendor/autoload.php");  
$obj = new Src\Product();

$products = $obj->get_all();

if (!is_null($products)) {
    foreach ($products as $product) { ?>


<div class="col-lg-3 col-md-3 col-sm-3 mb-3">
    <div class="card text-center" style="width: 16rem;">
    <img src="../../src/<?= $product['image']; ?>" class="card-img-top" style="height: 300px;">
      <div class="card-body">
        <p class="card-text" style="font-size: 20px;"><?= $product['name']; ?></p>
        <h4 class="card-title"><?= $product['price']; ?> TK</h4>
        <a href="home_details.php?id=<?=$product['id']; ?>" class="btn btn-light btn-outline-success" style="padding: 10px 40px;">ADD TO CART</a>
      </div>
    </div>
</div> 

<?php } } ?>
</div>
</main>

<?php include 'footer.php';?>
