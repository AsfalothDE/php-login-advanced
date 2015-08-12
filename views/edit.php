
<h2><?php echo WORDING_EDIT_USER_DATA; ?></h2>
<h3><?php echo $_SESSION['user_name']; ?> <?php echo WORDING_EDIT_YOUR_CREDENTIALS; ?></h3>

<!-- edit form for username / this form uses HTML5 attributes, like "required" and type="email" -->
<form method="post" action="?edit">
	<label for="user_name"><?php echo WORDING_NEW_USERNAME; ?></label>
	<input id="user_name" type="text" name="user_name" pattern="[a-zA-Z0-9]{2,64}" value="<?php echo htmlspecialchars($_SESSION['user_name']); ?>" required <?php if ($_SESSION['oauth']): ?> readonly<?php endif; ?> />

	<label for="user_firstname"><?php echo WORDING_NEW_FIRSTNAME; ?></label>
	<input id="user_firstname" type="text" name="user_firstname" value="<?php echo htmlspecialchars($_SESSION['user_fullname'][0]); ?>" required />

	<label for="user_lastname"><?php echo WORDING_NEW_LASTNAME; ?></label>
	<input id="user_lastname" type="text" name="user_lastname" value="<?php echo htmlspecialchars($_SESSION['user_fullname'][1]); ?>" required />

	<input type="submit" name="user_edit_submit_name" value="<?php echo WORDING_CHANGE_USERNAME; ?>" />
</form><hr/>

<!-- edit form for user email / this form uses HTML5 attributes, like "required" and type="email" -->
<form method="post" action="?edit">
	<label for="user_email"><?php echo WORDING_NEW_EMAIL; ?></label>
	<input id="user_email" type="email" name="user_email" value="<?php echo htmlspecialchars($_SESSION['user_email']); ?>" required />
	<input type="submit" name="user_edit_submit_email" value="<?php echo WORDING_CHANGE_EMAIL; ?>" />
</form><hr/>

<?php if (!$_SESSION['oauth']): ?>
<!-- edit form for user's password / this form uses the HTML5 attribute "required" -->
<form method="post" action="?edit">
	<label for="user_password_old"><?php echo WORDING_OLD_PASSWORD; ?></label>
	<input id="user_password_old" type="password" name="user_password_old" pattern=".{6,}" required autocomplete="off" />

	<label for="user_password_new"><?php echo WORDING_NEW_PASSWORD; ?></label>
	<input id="user_password_new" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />

	<label for="user_password_repeat"><?php echo WORDING_NEW_PASSWORD_REPEAT; ?></label>
	<input id="user_password_repeat" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />

	<input type="submit" name="user_edit_submit_password" value="<?php echo WORDING_CHANGE_PASSWORD; ?>" />
</form>
<?php endif; ?>
<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>"><?php echo WORDING_BACK_TO_LOGIN; ?></a>
