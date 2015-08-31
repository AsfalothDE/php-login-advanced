<form method="post" action="?password_reset">
	<fieldset>
		<legend><?php echo WORDING_FORGOT_MY_PASSWORD; ?></legend>
		<div class="form-group">
			<input type='hidden' name='user_name' value='<?php echo htmlspecialchars($_REQUEST['user_name']); ?>' />
			<input type='hidden' name='verification_code' value='<?php echo htmlspecialchars($_REQUEST['verification_code']); ?>' />
		</div>
		<div class="form-group">
			<label for="user_password_new" class="control-label"><?php echo WORDING_NEW_PASSWORD; ?></label>
			<input id="user_password_new" type="password" class="form-control" name="user_password_new" pattern=".{6,}" required autocomplete="off" autofocus/>
		</div>
		<div class="form-group">
			<label for="user_password_repeat" class="control-label"><?php echo WORDING_NEW_PASSWORD_REPEAT; ?></label>
			<input id="user_password_repeat" type="password" class="form-control" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
		</div>
		<div class="form-group">
			<button type="submit" name="submit_new_password" class="btn btn-default"><?php echo WORDING_SUBMIT_NEW_PASSWORD; ?></button>
		</div>
</form>
<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?login"><?php echo WORDING_BACK_TO_LOGIN; ?></a>