<div class="row">
    <div class="col">
    </div>
    <div class="col">
		<h2>Reset Your Account Password</h2>
        <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>

		<div class="regisFrm">
			<form action="" method="post">
				<input class="form-control" type="password" name="password" placeholder="PASSWORD" required=""><br>
				<input class="form-control" type="password" name="confirm_password" placeholder="CONFIRM PASSWORD" required=""><br>
				<div class="send-button">
					<input type="hidden" name="fp_code" value="<?php echo $_REQUEST['fp_code']; ?>"/>
					<input type="submit" name="resetSubmit" value="RESET PASSWORD">
				</div>
			</form>
		</div>
</div>
<div class="col">
    </div>
  </div>		
			 