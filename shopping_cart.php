<?php
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/shopping_cart.css">
  <title>CodeShop - Your Cart</title>
  <?php require_once "header.php"; ?>


  <div class="d-flex justify-content-center">


    <div class="card col-8">
      <div class="row ">
        <div class="col-10 " id="cart-heading-div">

          <h4 class="text-uppercase inline" id="cart-heading">your shopping cart</h4>
        </div>

        <!-- price section -->
        <div class="price col-1">
          GHC <br>
          <strong>250</strong>
        </div>



      </div>

      <!-- cart content  -->
      <table class="table ">
        <colgroup>
          <col class="col-md-1">
          <col class="col-md-7 ">
          <col class="col-md-2 cs-tertiary">
          <col class="col-md-2 cs-tertiary">
        </colgroup>
        <thead>

          <tr>
            <th scope="col"></th>
            <th scope="col" class="text-uppercase">Item</th>
            <th class="text-uppercase" scope="col">unit price</th>
            <th class="text-uppercase" scope="col">sub total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <!-- remove action -->
            <th scope="row">

              <button class="btn">
                <h2 class="icon-heading"><i class="bi bi-x-square"></i></h2>
              </button>

            </th>

            <!-- Product information  -->
            <td>

              <div class="row">
                <div class="col-2 product-image m-2 justify-content-center">
                  <img src="https://picsum.photos/200/300" class="product-image" alt="">
                </div>
                <div class="col">

                  <strong>Inventory application built with flutter</strong>
                  <br>
                  By Collins Dauda
                  <br>
                  <h2 class="icon-heading"><i class="bi bi-bookmark-heart"></i></h2>

                </div>
              </div>


            </td>

            <!-- unit price  -->
            <td>
              <!-- price section -->
              <div class="price  cs-background">
                GHC <br>
                <strong>250</strong>
              </div>
            </td>


            <!-- sub total  -->
            <td>
              <!-- price section -->
              <div class="price cs-tertiary">
                GHC
                <br>
                <strong>250</strong>
              </div>
            </td>

          </tr>
        </tbody>
      </table>
      <div class="d-grid gap-1 d-md-flex justify-content-md-end">
        <a href="marketplace.php"><button class="btn btn-primary me-md-2" type="button">Continue shopping</button></a>

        <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Proceed to payment</a>
      </div>

      <?php include_once "payment_modals.php"; ?>

    </div>






    <script type="text/javascript">
      var myModal = document.getElementById('myModal')
      var myInput = document.getElementById('myInput')

      myModal.addEventListener('shown.bs.modal', function() {
        myInput.focus()
      })
    </script>































  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <?php require_once "footer.php"; ?>
  </body>

</html>
