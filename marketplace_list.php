<!-- List view  -->
<section id="listview">
  <?php foreach ($products as $product) { #iterating through products?>

    <div class="row">

      <!-- image and user name  -->
      <div class="col">

        <img src="https://picsum.photos/200/300.jpg" alt="">
        <p>By <?php echo get_product_owner($product["listing_id"]); ?></p>
      </div>

      <!-- product name and description -->
      <div class="col">
        <p><strong><?php  echo $product["title"] ?></strong></p>
        <p><?php  echo $product["description"] ?></p>
      </div>

      <!-- price and add to cart  -->
      <div class="col ">
        <p>GHC</p>
        <p><strong><?php  echo $product["price"] ?></strong></p>
        <a href="product_page.php?<?php echo "id=".$product["listing_id"]?>" class="btn btn-secondary">View</a>
      </div>
      <div class="col">

        <a href="" class="text-uppercase btn btn-primary">Add to cart</a>
        <a class="btn btn-primary text-uppercase" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Buy now</a>

      </div>

    </div>




  <?php } ?>

  <?php include_once "payment_modals.php"; ?>



</section>