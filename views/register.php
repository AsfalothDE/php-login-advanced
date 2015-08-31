<h2><?php echo WORDING_REGISTER; ?></h2>
<form method="post" action="?register">
		<div class="form-group">
			<label for="user_firstname" class="control-label"><?php echo WORDING_NEW_FIRSTNAME; ?></label>
			<input id="user_firstname" type="text" name="user_firstname" class="form-control" value="<?php echo (isset($_POST['user_firstname']) ? htmlspecialchars($_POST['user_firstname']) : ''); ?>" required/>
		</div>
		<div class="form-group">
			<label for="user_lastname" class="control-label"><?php echo WORDING_NEW_LASTNAME; ?></label>
			<input id="user_lastname" type="text" name="user_lastname" class="form-control" value="<?php echo (isset($_POST['user_lastname']) ? htmlspecialchars($_POST['user_lastname']) : ''); ?>" required/>
		</div>
    <div class="form-group">
        <label for="user_email" class="control-label"><?php echo WORDING_REGISTRATION_EMAIL; ?></label>
        <input id="user_email" class="form-control" type="email" name="user_email" value="<?php echo (isset($_POST['user_email']) ? htmlspecialchars($_POST['user_email']) : ''); ?>" required />
    </div>
    <div class="form-group">
        <label for="user_password_new" class="control-label"><?php echo WORDING_REGISTRATION_PASSWORD; ?></label>
        <input id="user_password_new" class="form-control" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
    </div>
    <div class="form-group">
        <label for="user_password_repeat" class="control-label"><?php echo WORDING_REGISTRATION_PASSWORD_REPEAT; ?></label>
        <input id="user_password_repeat" class="form-control" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
    </div>
    <div class="form-group">
        <div class="g-recaptcha" data-sitekey="<?php echo $login->config->RECAPTCHA_SITEKEY;?>"></div>
    </div>
    <div class="form-group">
        <button type="submit" name="register" class="btn btn-default"><?php echo WORDING_REGISTER; ?></button>
    </div>
</form>
<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>"><?php echo WORDING_BACK_TO_LOGIN; ?></a>