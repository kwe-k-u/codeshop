<?php
require ('backend/registration.php');
?>
<div>
	<form action="backend/registration.php" method="post" id="buyer_account_form">
		<div class="col">
			<h5 class="text-uppercase">create a buyer account</h5>
			<div>
				<input type="text"  id= "username" name="username" placeholder="Username" required>
			</div>

			<div>
				<input type="email" name="email" id="email" placeholder="someone@website.com" required>
				<small ></small>
			</div>

			<div>
				<input type="password" id= "psw" name="psw"  placeholder="Password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
			</div>

			<div>
				<input type="password" id= psw2 name="psw2" placeholder="Confirm Password">

			</div>
			<button type="submit" name="buyer">Submit</button>
		</div>
	</form>
</div>

<div id="note">
  <h3>Password must contain the following:</h3>
  <p id="letters" class="invalid">A <b>lowercase</b> letter</p>
  <p id="caps" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="num" class="invalid">A <b>number</b></p>
  <p id="leng" class="invalid">Minimum <b>8 characters</b></p>
</div>

<script>
	var myInputs = document.getElementById("psw");
	var letters = document.getElementById("letters");
	var caps = document.getElementById("caps");
	var num = document.getElementById("num");
	var leng = document.getElementById("leng");

	// When the user clicks on the password field, show the message box
	myInputs.onfocus = function() {
	document.getElementById("note").style.display = "block";
	}

	// When the user clicks outside of the password field, hide the message box
	myInputs.onblur = function() {
	document.getElementById("note").style.display = "none";
	}

	// When the user starts to type something inside the password field
myInputs.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInputs.value.match(lowerCaseLetters)) {
    letters.classList.remove("invalid");
    letters.classList.add("valid");
  } else {
    letters.classList.remove("valid");
    letters.classList.add("invalid");
  }

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInputs.value.match(upperCaseLetters)) {
    caps.classList.remove("invalid");
    caps.classList.add("valid");
  } else {
    caps.classList.remove("valid");
    caps.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInputs.value.match(numbers)) {
    num.classList.remove("invalid");
    num.classList.add("valid");
  } else {
    num.classList.remove("valid");
    num.classList.add("invalid");
  }

  // Validate length
  if(myInputs.value.length >= 8) {
    leng.classList.remove("invalid");
    leng.classList.add("valid");
  } else {
    leng.classList.remove("valid");
    leng.classList.add("invalid");
  }
}
</script>
