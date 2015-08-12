<form method="post" action="?password_reset">
	<fieldset>
		<h2><?php echo WORDING_FORGOT_MY_PASSWORD; ?></h2>
		<hr/>
		<div class="form-group">
			<label for="user_name" class="control-label"><?php echo WORDING_REQUEST_PASSWORD_RESET; ?></label>
			<input id="user_name" type="text" name="user_name" class="form-control" required autofocus/>
		</div>
		<div class="form-group">
			<button type="submit" name="request_password_reset" class="btn btn-default"><?php echo WORDING_RESET_PASSWORD; ?></button>
		</div>
	</fieldset>
</form>
<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>"><?php echo WORDING_BACK_TO_LOGIN; ?></a>