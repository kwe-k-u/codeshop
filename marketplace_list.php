
      <!-- List view  -->
      <section>
        <?php for ($i = 0; $i <20; $i++){ ?>

          <a href="product_page.php">
            <div class="row">

            <!-- image and user name  -->
              <div class="col">
                <img src="https://picsum.photos/200/300.jpg" alt="">
                <p>By Collins Dauda</p>
              </div>

              <!-- product name and description -->
              <div class="col">
                <p><strong>Ecommerce management application built with php and java script</strong></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod consectetur, beatae voluptatibus ad amet perferendis repudiandae omnis sunt deserunt recusandae aut autem necessitatibus hic architecto ea illo magnam eos et voluptatum suscipit culpa pariatur eius. Vel maxime in doloribus officia.</p>
              </div>

              <!-- price and add to cart  -->
              <div class="col ">
                <p>GHC</p>
                <p><strong>259</strong></p>
                <button class="text-uppercase">Add to cart</button>

              </div>
              <div class="col">
                <button class="text-uppercase">Buy now</button>
              </div>

            </div>

          </a>


        <?php } ?>


        <!-- list page indicator  -->
        <div class="row justify-items-center">
        <?php for ($i = 0; $i <5; $i++){ ?>
          <div class="card cs-page-counter align-items-center" ><?php echo $i; ?></div>
        <?php } ?>
        </div>


      </section>