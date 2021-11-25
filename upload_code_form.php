<?php
require('Upload code.php');
?>
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

		<form class="row g-3" enctype="multipart/form-data">

		<!-- project title  -->
			<div class="col-md-6">
				<label for="title" class="form-label">Project Title</label>
				<input type="text" class="form-control" id="title">
			</div>

			<br>
			<!-- descriptions short  -->
			<div class="col-md-6">
				<label for="sDescription" class="form-label">Short Description</label>
				<input type="text" class="form-control" id="sDescription" placeholder="Your cool project in 50 characters">
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
  <input class="form-control form-control-md" id="screenshots" type="file" multiple>
			</div>

			<!-- programming language  -->
			<div class="col-md-4">
				<label for="inputState" class="form-label">Programming Language</label>
				<select id="inputState" class="form-select">
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


			<!-- Compiled upload
			<div class="col-md-2">
  <label for="formFileLg" class="form-label">Compiled file</label>
  <input class="form-control form-control-sm" id="formFileLg" type="file">
			</div> -->


			<!-- listing class  -->
			<div class="form-check">
				<label ><strong>Indicate the type of upload</strong></label><br>

				<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
				<label class="form-check-label" for="flexRadioDefault1">
					Generic upload
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
				<label class="form-check-label" for="flexRadioDefault2">
					Exclusive upload
				</label>
			</div>



			<div class="col-12">
				<button type="submit" class="btn btn-primary" name="upload_btn">Upload Code</button>
			</div>
		</form>
	</div>
	</body>
	<!-- footer -->
	<?php require_once "footer.php" ?>
