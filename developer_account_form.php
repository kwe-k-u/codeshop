<div>
	<form action="create_account.php" method="post" onsubmit='return developer_signup()' id="developer_account_form">
		<div class="col">
			<h5 class="text-uppercase">create a developer account</h5>
			<div class >

				<input type="text" name="user_name" id="duser_name" placeholder="Username">
			</div>

			<div>

				<input type="email" name="email" id="demail" placeholder="someone@website.com">
			</div>
			<div>

				<input type="password" name="password" id="dpassword" placeholder="Password">
			</div>
			<div>
				<input type="password" name="cPassword" id="dcPassword" placeholder="Confirm Password">

			</div>
			<button type="submit" name="developer">Submit</button>
		</div>
	</form>
</div>