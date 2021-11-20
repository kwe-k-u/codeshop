<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<link rel="stylesheet" href="styles/report_page.css">
	<?php require "header.php"; ?>

	<div class="row" id="main">
		<div class="col gy-3 col-md">
			<form action="" method="post">
				<h5>Report a problem</h5>
				<div class="mb-3 col">
					<label for="report_email" class="form-label">Email address</label>
					<input type="email" class="form-control" id="report_email" placeholder="name@example.com">
				</div>
				<div class="mb-3">
					<label for="report_description" class="form-label">Problem Description</label>
					<textarea class="form-control" id="report_description" rows="3"></textarea>
				</div>

				<button type="submit" class="btn btn-secondary">Submit Report</button>
			</form>
		</div>



		<div class="col ">
			<form action="" method="post">
				<h5>Make a claim</h5>
				<div class="mb-3">
					<label for="claim_email" class="form-label">Email address</label>
					<input type="email" class="form-control" id="claim_email" placeholder="name@example.com">
				</div>
				<div class="mb-3">
					<label for="claim_url" class="form-label">url to related documents</label>
					<input type="url" class="form-control" id="claim_url" placeholder="">
				</div>
				<div class="mb-3">
					<label for="claim_description" class="form-label">Description</label>
					<textarea class="form-control" id="claim_description" rows="3"></textarea>
				</div>

				<button type="submit" class="btn btn-secondary">Submit Report</button>
			</form></div>
	</div>

	<!-- footer -->
	<?php require_once "footer.php" ?>