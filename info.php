<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="styles/info.css">
  <link rel="stylesheet" href="styles/faq.css">

  <title>CodeShop - MarketPlace</title>
  <?php require_once "header.php"; ?>

  <div class="row">


    <!-- side bar  -->
    <section class="container col-3 cs-secondary align-content-center" id="sidebar">

      <div class="selected"><a id="who_a">Who are We ? </a></div>
      <div><a href="#questions" id="faq_a">Frequently Asked Questions</a></div>
      <div><a href="/docs/business.pdf" download>Buyer Terms and Conditions </a></div>
      <div><a href="/docs/developer.pdf" download="developer">Developer Terms and Conditions </a></div>
      <div><a href="#">Privacy Statement</a></div>





    </section>

    <!-- main section  -->
    <section class="container col-9" id="main">



      <?php require_once "about_us.php" ?>
      <?php require_once "faq.php" ?>

<script type='text/javascript'>
				document.getElementById('faq_div').style.display = 'none';

        document.getElementById('who_a').onclick = function(){
				document.getElementById('faq_div').style.display = 'none';
				document.getElementById('about_us_div').style.display = 'block';
			}

			document.getElementById('faq_div').onclick = function(){
        document.getElementById('about_us_div').style.display = 'none';
				document.getElementById('faq_div').style.display = 'block';
			}
			</script>
    </section>


  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </div>
  <?php require_once "footer.php"; ?>
  </body>

</html>