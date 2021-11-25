
      <!-- List view  -->
      <section id="listview">
        <?php for ($i = 0; $i <20; $i++){ ?>

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

              </div>
              <div class="col">

                <a href="" class="text-uppercase btn btn-primary">Add to cart</a>
                <a class="btn btn-primary text-uppercase" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Buy now</a>

              </div>

            </div>




            <?php } ?>

            <?php include_once "payment_modals.php"; ?>

        <!-- list page indicator  -->
        <div class="row justify-items-center">
        <?php for ($i = 0; $i <5; $i++){ ?>
          <div class="card cs-page-counter align-items-center" ><?php echo $i; ?></div>
        <?php } ?>
        </div>


      </section>