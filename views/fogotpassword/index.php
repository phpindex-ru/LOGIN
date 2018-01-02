	  <div class="row">
    <div class="col">
    </div>
    <div class="col">
<h2>Enter the Email of Your Account to Reset New Password</h2>
        <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
		<div class="regisFrm">
			<form action="" method="post">
				<input class="form-control" type="email" name="email" placeholder="EMAIL" required=""><br>
				<div class="send-button">
					<input type="submit" name="forgotSubmit" value="CONTINUE">
				</div>
			</form>
		</div>
</div>
<div class="col">
    </div>
  </div>
