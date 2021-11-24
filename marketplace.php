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


    <!-- side bar  -->
    <section class="container col-3 cs-secondary align-content-center" id="sidebar">

      <h3>Categories</h3>
      <div><a href="marketplace.php"><h5>All Categories</h5></a></div>
      <div><a href="marketplace.php?category=desktop">Desktop applications</a></div>
      <div><a href="marketplace.php?category=mobile">Mobile applications</a></div>
      <div><a href="marketplace.php?category=server">Server systems applications</a></div>
      <div><a href="marketplace.php?category=web">Web development</a></div>


      <h3>Filters</h3>
      <form action="marketplace.php" method="get" id="filter_form">
        <div>Upload date
      <input type="date" name="uploadDate" ></div>
        <div>Price Range<input type="range" name="priceRange" ></div>
        <div>Rating<input type="number" name="rating" id=""></div>
        <button type="submit" id="filter-apply">Apply</button>
      </form>


    </section>

    <!-- main section  -->
    <section class="container col-9" id="main">

      <!-- top row with search and display options  -->
      <section id="top-section">
        <div class="row align-content-center">
          <!-- Search bar  -->
          <div class="col">
            <input type="search" name="search" id="search bar" placeholder="Search">
          </div>

          <!-- Sort by  -->
          <div class="col">
            <div class="dropdown me-1">
              Sort By:
              <button type="button" class="btn btn-secondary dropdown-toggle" id="dropdownMenuOffset" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
                Best Match
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                <li><a class="dropdown-item" href="#">Upload Date</a></li>
                <li><a class="dropdown-item" href="#">Most purchased</a></li>
                <li><a class="dropdown-item" href="#">Cheapest</a></li>
              </ul>
            </div>
          </div>

          <!-- type of upload (generic, exclusive)  -->
          <div class="col">
            <div class="btn-group" role="group" id="type-select">
              <div><a href="#" class="btn btn-primary mt-auto">Show All</a></div>
              <div><a href="#" class="btn btn-primary mt-auto">Exclusive</a></div>
              <div><a href="#" class="btn btn-primary mt-auto">Generic</a></div>

            </div>

          </div>

          <!-- list arrangement  -->
          <div class="col">
            <div class="btn-group" role="group" id="content-display">
              <div><a href="#" class="btn btn-primary mt-auto"><i class="bi bi-list-stars"></i></a></div>
              <div><a href="#" class="btn btn-primary mt-auto"><i class="bi bi-grid-3x3-gap-fill"></i></a></div>

            </div>
          </div>



        </div>

        <!-- Language tags  -->
        <div class="row ">
          Language:

          <div class="btn-group " role="group" id="language-chips">
            <a href=""><span class="badge bg-secondary">Python</span></a>
            <a href=""><span class="badge bg-secondary">Java Script</span></a>
            <a href=""><span class="badge bg-secondary">Dart</span></a>
            <a href=""><span class="badge bg-secondary">Typescript</span></a>

          </div>
        </div>
      </section>

      <?php require_once "marketplace_list.php" ?>
    </section>


  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </div>
  <?php require_once "footer.php"; ?>
  </body>

</html>