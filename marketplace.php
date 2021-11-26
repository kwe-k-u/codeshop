<?php
require ('backend/code_controller.php');
session_start();

$code = select_all_products_controller();
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/marketplace.css">
  <title>CodeShop - MarketPlace</title>
  <?php require_once "header.php"; ?>

  <div class="row">





      <!-- main section  -->
      <section class="container col-9" id="main">

        <!-- top row with search and display options  -->
        <section id="top-section">
          <div class="row align-content-center">


            <div class="col">
            </div>






        </div>

        <!-- Language tags  -->
        <div class="row ">
          Language:

          <div class="btn-group " role="group" id="language-chips">
            <a href="marketplace.php?language=python"><span class="badge bg-secondary">Python</span></a>
            <a href="marketplace.php?language=javascript"><span class="badge bg-secondary">Java Script</span></a>
            <a href="marketplace.php?language=dart"><span class="badge bg-secondary">Dart</span></a>
            <a href="marketplace.php?language=typescript"><span class="badge bg-secondary">Typescript</span></a>

          </div>
        </div>
      </section>
      <?php require_once "backend/marketplace.php" ?>
      <?php
      if ($products){
        require_once "marketplace_list.php";
      } else {
        echo "<h1>No Listings to display</h1>";
      }

      ?>
      <script type="text/javascript" src="./functions/marketplace.js"></script>
    </section>


  </div>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</div>
<?php require_once "footer.php"; ?>
</body>

</html>
