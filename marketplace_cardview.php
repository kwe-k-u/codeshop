<!-- Card view  -->
<div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3" id="cardview">
  <?php
  for ($i = 0; $i < 10; $i++) { ?>

    <div class="col">

      <div class="p-3 border bg-light item-tile">
        <img class="item-tile-img" src="https://picsum.photos/200/300.jpg" alt="product image">
        <div class="row">
          <strong>Inventory Management application built with flutter</strong>

        </div>
        <div class="row">
          <p>by Collins Duada</p>


        </div>
        <div class="row">
          <div class="col">

      <a href="product_page.php">
            Lorem ipsum dolor sit amet consectetur adipisicing elit
  </a>
          </div>
          <div class="col">
            GHC <br>
            <h1> <strong> 250</strong></h1>
          </div>
          <div class="col">
            <div class="d-grid gap-1 d-md-flex justify-content-md-end">
              <button class="btn btn-primary me-md-2" type="button">Add to cart</button>
              <button class="btn btn-primary" type="button">Buy now </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php }
  ?>
</div>