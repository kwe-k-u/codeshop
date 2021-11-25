<div>
	<form action="create_account.php" onsubmit="return buyer_signup()" method="post" id="buyer_account_form">
		<div class="col">
			<h5 class="text-uppercase">create a buyer account</h5>
			<div>
				<input type="text" name="user_name" id="user_name" placeholder="Username" >
				<small class="error_msg"></small>
			</div>

			<div>
				<input type="email" name="email" id="email" placeholder="someone@website.com">
				<small ></small>
			</div>

			<div>
				<input type="password" name="password" id="password"  placeholder="Password">
				<small></small>
			</div>

			<div>
				<input type="password" name="cPassword" id="cPassword" placeholder="Confirm Password">
				<small></small>

			</div>
			<button type="submit" name="developer">Submit</button>
		</div>
	</form>
</div>