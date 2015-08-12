
<h2><?php echo WORDING_EDIT_USER_DATA; ?></h2>
<hr/>
<h3><?php echo $_SESSION['user_name']; ?> <?php echo WORDING_EDIT_YOUR_CREDENTIALS; ?></h3>

<!-- edit form for username / this form uses HTML5 attributes, like "required" and type="email" -->
<form method="post" action="?edit">
	<div class="form-group">
		<label for="user_name" class="control-label"><?php echo WORDING_NEW_USERNAME; ?></label>
		<input id="user_name" type="text" name="user_name" class="form-control" pattern="[a-zA-Z0-9]{2,64}" value="<?php htmlspecialchars($_SESSION['user_name']); ?>" required <?php if ($_SESSION['oauth']): ?> readonly<?php endif; ?> />
	</div>
	<div class="form-group">
		<label for="user_realname" class="control-label"><?php echo WORDING_NEW_REALUSERNAME; ?></label>
		<input id="user_realname" type="text" name="user_realname" class="form-control" value="<?php htmlspecialchars($_SESSION['user_realname']); ?>"<?php if ($_SESSION['oauth']): ?> readonly<?php endif; ?> />
	</div>
	<div class="form-group">
		<button type="submit" name="user_edit_submit_name" class="btn btn-default"><?php echo WORDING_CHANGE_USERNAME; ?></button>
	</div>
</form><hr/>

<!-- edit form for user email / this form uses HTML5 attributes, like "required" and type="email" -->
<form method="post" action="?edit">
	<div class="form-group">
		<label for="user_email" class="control-label"><?php echo WORDING_NEW_EMAIL; ?></label>
		<input id="user_email" type="email" name="user_email" class="form-control" value="<?php htmlspecialchars($_SESSION['user_email']); ?>" required />
	</div>
	<div class="form-group">
		<button type="submit" name="user_edit_submit_email" class="btn btn-default"><?php echo WORDING_CHANGE_EMAIL; ?></button>
	</div>
</form><hr/>

<!-- edit form for user's password / this form uses the HTML5 attribute "required" -->
<form method="post" action="?edit">
	<div class="form-group">
		<label for="user_password_old" class="control-label"><?php echo WORDING_OLD_PASSWORD; ?></label>
		<input id="user_password_old" type="password" class="form-control"  name="user_password_old" pattern=".{6,}" required autocomplete="off" />
	</div>
	<div class="form-group">
		<label for="user_password_new" class="control-label"><?php echo WORDING_NEW_PASSWORD; ?></label>
		<input id="user_password_new" type="password" class="form-control" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
	</div>
	<div class="form-group">
		<label for="user_password_repeat" class="control-label"><?php echo WORDING_NEW_PASSWORD_REPEAT; ?></label>
		<input id="user_password_repeat" type="password" class="form-control" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
	</div>
	<div class="form-group">
		<button type="submit" name="user_edit_submit_password" class="btn btn-default"><?php echo WORDING_CHANGE_PASSWORD; ?></button>
	</div>
</form>
<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>"><?php echo WORDING_BACK_TO_LOGIN; ?></a>