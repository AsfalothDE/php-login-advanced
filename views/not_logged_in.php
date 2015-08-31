<h2><?php echo WORDING_LOGIN; ?></h2>
<form method="post" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>?login">
    <div class="form-group">
        <label for="user_name" class="sr-only"><?php echo WORDING_NEW_EMAIL; ?></label>
        <input type="text" name="user_name" id="user_name" class="form-control" placeholder="<?php echo WORDING_NEW_EMAIL; ?>" required autofocus>
    </div>
    <div class="form-group">
        <label for="user_password" class="sr-only"><?php echo WORDING_PASSWORD; ?></label>
        <input type="password" name="user_password" id="user_password" class="form-control" placeholder="<?php echo WORDING_PASSWORD; ?>" required autocomplete="off">
    </div>
    <div class="checkbox">
        <label for="user_rememberme">
            <input type="checkbox" name="user_rememberme" id="user_rememberme" value="1"> <?php echo WORDING_REMEMBER_ME; ?>
        </label>
    </div>
    <button type="submit" name="login" class="btn btn-lg btn-primary btn-block"><?php echo WORDING_LOGIN; ?></button>
</form>
<?php echo ($login->config->ALLOW_USER_REGISTRATION ? '<a href="?register">'. WORDING_REGISTER_NEW_ACCOUNT .'</a>&nbsp;&nbsp;|&nbsp;&nbsp;' : ''); ?>
<a href="?password_reset"><?php echo WORDING_FORGOT_MY_PASSWORD; ?></a>
