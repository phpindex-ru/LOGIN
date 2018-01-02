  <div class="row">
    <div class="col">

    </div>
    <div class="col">
		<h2>Create a New Account</h2>
		<?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
		<div class="regisFrm">
			<form action="" method="post">
				<input class="form-control" type="text" name="first_name" placeholder="FIRST NAME" required=""><br>
				<input class="form-control" type="text" name="last_name" placeholder="LAST NAME" required=""><br>
				<input class="form-control" type="email" name="email" placeholder="EMAIL" required=""><br>
				<input class="form-control" type="text" name="phone" placeholder="PHONE NUMBER" required=""><br>
				<input class="form-control" type="password" name="password" placeholder="PASSWORD" required=""><br>
				<input class="form-control" type="password" name="confirm_password" placeholder="CONFIRM PASSWORD" required=""><br>
				<div class="send-button">
					<input type="submit" name="signupSubmit" value="CREATE ACCOUNT">
				</div>
			</form>
		</div>
		    </div>
    <div class="col">

    </div>
  </div>
</div>