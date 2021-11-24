<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="styles/product_page.css">
  <link rel="stylesheet" href="styles/marketplace.css">

  <title>CodeShop - MarketPlace</title>
  <?php require_once "header.php"; ?>

  <div class="row">


    <!-- side bar  -->
    <section class="container col-3 cs-secondary align-content-center" id="sidebar">

      <h3>Categories</h3>
      <div><a href="marketplace.php">
          <h5>All Categories</h5>
        </a></div>
      <div><a href="marketplace.php?category=desktop">Desktop applications</a></div>
      <div><a href="marketplace.php?category=mobile">Mobile applications</a></div>
      <div><a href="marketplace.php?category=server">Server systems applications</a></div>
      <div><a href="marketplace.php?category=web">Web development</a></div>



      <h3>Filters</h3>
      <form action="marketplace.php" method="get" id="filter_form">
        <div>Upload date
          <input type="date" name="uploadDate">
        </div>
        <div>Price Range<input type="range" name="priceRange" min=300 max=5000></div>
        <div>Rating<input type="number" name="rating" id=""></div>
        <button type="submit" id="filter-apply">Apply</button>
      </form>


    </section>

    <!-- main section  -->
    <section class="container col-8" id="main">



      <!-- product information  -->
      <section id="product_info_section">
        <div class="row gx-3">

          <!-- left product column  -->
          <div class="col-3">

            <div>
              <img src="https://picsum.photos/200" alt="">

              <div class="row">
                <div class="col">

                  <img src="https://picsum.photos/200" alt="" class="sub_img">
                </div>
                <div class="col">

                  <img src="https://picsum.photos/200" alt="" class="sub_img">
                </div>
              </div>
              <div class="row">
                <div class="col">

                  <img src="https://picsum.photos/200" alt="" class="sub_img">
                </div>
                <div class="col">

                  <img src="https://picsum.photos/200" alt="" class="sub_img">
                </div>
              </div>
            </div>


          </div>


          <!-- main product column  -->
          <div class="col-6 ">

            <p><strong>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum, corporis?</strong></p>
            <p>By Duada</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime sit libero officiis alias corporis ut nobis earum architecto voluptatibus illum eligendi, est placeat temporibus, fugit iusto facilis natus. Excepturi incidunt ut accusamus pariatur corrupti, earum ea nesciunt tenetur! Incidunt eos repellat, iusto ex ea expedita dolores! Minus, maiores. Nihil a dolor, iusto voluptate natus inventore, dolore veniam accusamus, quos dolorem et illum temporibus beatae aliquam obcaecati alias! Minima est quam itaque. Nemo ad nisi at fugiat aliquam harum sint doloremque magnam nobis culpa repudiandae quas assumenda rerum quasi ipsa, cum distinctio consectetur quae laborum ex reiciendis! Dolor facilis dignissimos quaerat?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime sit libero officiis alias corporis ut nobis earum architecto voluptatibus illum eligendi, est placeat temporibus, fugit iusto facilis natus. Excepturi incidunt ut accusamus pariatur corrupti, earum ea nesciunt tenetur! Incidunt eos repellat, iusto ex ea expedita dolores! Minus, maiores. Nihil a dolor, iusto voluptate natus inventore, dolore veniam accusamus, quos dolorem et illum temporibus beatae aliquam obcaecati alias! Minima est quam itaque. Nemo ad nisi at fugiat aliquam harum sint doloremque magnam nobis culpa repudiandae quas assumenda rerum quasi ipsa, cum distinctio consectetur quae laborum ex reiciendis! Dolor facilis dignissimos quaerat?</p>



          </div>


          <!-- right product column  -->
          <div class="col-3 " id="r_col">

            <!-- purchase action buttons -->
            <div class="d-grid gap-1 d-md-flex justify-content-md-end">
              <button class="btn btn-primary me-md-2" type="button">Add to cart</button>
              <button class="btn btn-primary" type="button">Buy now </button>
            </div>


            <!-- review section  -->
            <section id="review_section">
              <h3><strong>Reviews</strong></h3>

              <!-- review  -->
              <div class="review">

                <!-- rating and user name  -->
                <div class="row" id="rating">
                  <strong>Kelvin someone</strong>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </div>


                <!-- review description -->
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente officia ullam nam perferendis assumenda hic dignissimos obcaecati nesciunt repellendus dolore. Saepe, error nemo quia fugiat praesentium consequatur harum tempora quidem excepturi assumenda rerum nulla, laboriosam animi est, itaque hic id minima! Nobis vel nisi sint rem inventore animi fugit saepe.</p>

              </div>

              <form action="" method="post">
                <div class="col">

                  <div class="py-1">Rating<input type="number"  min=0 max=5 name="rating" id=""></div>
                  <textarea name="rev_des" id="rev_des" rows="7"></textarea><br>
                  <button type="submit" class="btn btn-success">Post Review</button>
                </div>
              </form>

            </section>


          </div>
        </div>
      </section>

    </section>


  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </div>
  <?php require_once "footer.php"; ?>
  </body>

</html>