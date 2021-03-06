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

    <?php


    if (isset($_GET["id"])) {
      $product = search_by_id(6);
    } else {
      Header("Location:marketplace.php");
    }




    ?>


    <!-- main section  -->
    <section class="container col-8" id="main">



      <!-- product information  -->
      <section id="product_info_section">
        <div class="row gx-3">

          <!-- left product column  -->
          <div class="col-3">

            <div>
              <img src="https://picsum.photos/200" alt="">

              <p>GHC <strong><?php echo $product["price"] ?></strong></p>

            </div>


          </div>


          <!-- main product column  -->
          <div class="col-6 ">

            <p><strong><?php echo $product["title"] ?></strong></p>
            <p>By <?php echo get_product_owner($product["listing_id"]); ?></p>
            <p><?php echo $product["description"] ?></p>



          </div>


          <!-- right product column  -->
          <div class="col-3 " id="r_col">

            <!-- purchase action buttons -->
            <div class="col">

              <div class="d-grid gap-1 d-md-flex justify-content-md-end">
                <button class="btn btn-primary me-md-2" type="button">Add to cart</button>
                <button class="btn btn-primary" type="button">Buy now </button>
              </div>

                <?php

                if (get_product_owner($product["listing_id"]) === find_user_by_id($_SESSION["user_id"])["username"]){ ?>
                <div class="d-grid py-5 gap-1 d-md-flex justify-content-md-end">
                  <button class="btn btn-warning me-md-2" type="button">Update</button>
                  <form action="marketplace.php" method="post">
                    <input type="hidden" name="listing" value=<?php echo $product["listing_id"]?>>
                    <button class="btn btn-danger" name="del_btn" type="submit">Delete </button>
                  </form>
                </div>
              <?php } ?>
            </div>


            <!-- review section  -->
            <section id="review_section">
              <!-- <h3><strong>Reviews</strong></h3> -->
              <?php include("backend/reviews_controller.php");

              $reviews = get_all_reviews($_GET["id"]);


              //<!-- review  -->
              foreach ($reviews as $rev) { ?>
                <div class="review">

                  <!-- rating and user name  -->
                  <div class="row" id="rating">
                    <strong><?php echo find_user_by_id($rev["reviewer_id"]); ?></strong>

                    <!-- star rating  -->
                    <?php for ($i = 0; $i < intval($rev["rating"]); $i++) { ?>
                      <i class="bi bi-star-fill"></i>
                    <?php } ?>
                  </div>


                  <!-- review description -->
                  <p><?php echo $product["content"] ?></p>
                  <div class="btn-group py-2" role="group" aria-label="Basic outlined example">
                    <button type="button" class="btn btn-warning">Update</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                  </div>
                </div>
              <?php }

              ?>


              <!-- create a review form
              <form action="backend/reviews.php" method="post">
                <div class="col">

                <div class="py-1">Rating<input type="number"  min=0 max=5 name="rating" id=""></div>
                  <textarea name="review" id="rev_des" rows="7"></textarea><br>
                  <button type="submit" name="sub_review" class="btn btn-success">Post Review</button>
                </div>
              </form> -->

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