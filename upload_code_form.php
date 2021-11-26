<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<link rel="stylesheet" href="styles/upload_code_form.css">
	<?php require "header.php"; ?>

	<!-- main screen  -->
	<div id="main_div">
		<h3>Upload your code</h3>

		<form class="row g-3" method="post" action="backend/upload_code.php" enctype="multipart/form-data">

			<!-- project title  -->
			<div class="col-md-6">
				<label for="title" class="form-label">Project Title</label>
				<input type="text" class="form-control" name="title" id="title">
			</div>

			<br>
			<!-- descriptions short  -->
			<div class="col-md-6">
				<label for="sDescription" class="form-label">Short Description</label>
				<input type="text" class="form-control" name="sDescription" id="sDescription" placeholder="Your cool project in 50 characters">
			</div>

			<br>
			<!-- descriptions long  -->
			<div class="col-12">
				<label for="lDescription" class="form-label">Full Description</label>
				<textarea name="lDescription" id="lDescription" cols="30" rows="10"></textarea>
			</div>

			<br>
			<!-- screen shots  -->
			<div class="col-md-6">
				<label for="screenshots" class="form-label">Screenshots</label>
				<input class="form-control form-control-md" name="screenshots" id="screenshots" type="file" multiple>
			</div>

			<!-- programming language  -->
			<div class="col-md-4">
				<label for="language" class="form-label">Programming Language</label>
				<select id="language" name="language" class="form-select">
					<option selected>Choose...</option>
					<option>Flutter</option>
					<option>Java</option>
					<option>JavaScript</option>
					<option>Python</option>
				</select>
			</div>


			<!-- Code upload -->
			<div class="col-md-2">
				<label for="formFileLg" class="form-label">Source Code</label>
				<input class="form-control form-control-sm" id="formFileLg" type="file">
			</div>




			<!-- listing price  -->
			<div class="col-md-2">
				<label for="price" class="form-label">Price</label>
				<input class="form-control form-control-sm" id="price" name="price" type="number">
			</div>
			<!-- hidden user id pass  -->
			<input type="hidden" id="custId" name="user_id" value= "<?php  echo $_SESSION["user_id"];?>" >
			<div class="col-12">
				<button type="submit" class="btn btn-primary" name="upload_btn">Upload Code</button>
			</div>
		</form>
	</div>
	</body>
	<!-- footer -->
	<?php require_once "footer.php" ?>