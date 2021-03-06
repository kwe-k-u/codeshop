<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles/header.css">
<link rel="stylesheet" href="styles/main.css">
<link rel="stylesheet" href="styles/footer.css">
<!-- boot strap icons  -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="./functions/auth.js"></script>

<title>CodeShop </title>
</head>
<?php session_start(); ?>

<?php require_once "backend/marketplace.php"; ?>
<body>

	<nav id="nav">
		<a href="index.php">
			<div id="brand">
				<div id="logo"> <strong>C</strong>
				</div>
				<h5><strong>CodeShop</strong></h5>
			</div>
		</a>



		<div id="hamburger">
			<i class="bi bi-list"></i>
		</div>


		<form action="marketplace.php" id="links" method="get">
				<div class="input-group">
					<input type="search" name="search_field" placeholder="search">
					<button type="submit"  name="search_btn" class="btn btn-light">Search</button>
				</div>
			</form>

				<a href="marketplace.php"><i class="bi bi-shop-window"></i>MarketPlace</a>
				<a href="info.php"><i class="bi bi-question"></i>Help</a>

					<a href="shopping_cart.php" id="shopping_cart"><i class="bi bi-cart"></i>Cart</a>
				</div>
			</div>
		</nav>


		<!-- login section  -->
		<?php
			if (!(isset($_SESSION) && isset($_SESSION['username']))){ //display only when user is logged out
		?>
		<div id="login_section">

			<form action="backend/registration.php" method="post" >
				<div class="row">
					<div class="col"></div>
					<div class="col-3">
						<input type="email" name="login_email" id="login_email" placeholder="Email" required>
						<small></small>
					</div>
					<div class="col-3">
						<input type="password" name="login_password" id="login_password" placeholder="Password" required>
						<small></small>
					</div>
					<div class="col-2">
						<button type="submit" class="btn btn-primary" name="login">Login</button>
					</div>
				</div>
			</form>
		</div>
		<?php } ?>

