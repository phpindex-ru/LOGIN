	<div class="container">

  <div class="row">
    <div class="col">

    </div>
    <div class="col">
		<h2>Login</h2>
		<?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>

			<form action="" method="post">
					  <div class="form-group">
					  <input class="form-control" type="email" name="email" placeholder="EMAIL" required=""><br>
				      <input class="form-control" type="password" name="password" placeholder="PASSWORD" required=""><br>
				<div class="send-button">
					<input type="submit" name="loginSubmit" value="LOGIN">
				</div><br>
				<a href="?controller=fogotpassword&action=index">Forgot password?</a>
			</form>
			<p>Don't have an account? <a href="?controller=register&action=register">Register</a></p>
		</div>
    </div>
	    <div class="col">

    </div>
  </div>
</div>