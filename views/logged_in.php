
<h2><?php echo WORDING_EDIT_USER_DATA; ?></h2>
<p><?php echo WORDING_YOU_ARE_LOGGED_IN_AS . '<b>' . $_SESSION['user_name']; ?></b></p><hr/>

<p>$_SESSION['user_id'] = <?php echo $_SESSION['user_id']; ?></p>
<p>$_SESSION['user_name'] = <?php echo $_SESSION['user_name']; ?></p>
<p>$_SESSION['user_fullname'] = <?php print_r($_SESSION['user_fullname']); ?></p>
<p>$_SESSION['user_email'] = <?php echo $_SESSION['user_email']; ?></p>
<p>$_SESSION['user_access_level'] = <?php echo $_SESSION['user_access_level']; ?></p>
<p>$_SESSION['user_logged_in'] = <?php echo $_SESSION['user_logged_in']; ?></p>
<p>$_SESSION['oauth_provider'] = <?php echo $_SESSION['oauth_provider']; ?></p><hr/>

<p><?php echo WORDING_PROFILE_PICTURE . '<br/><img src="' . $login->getGravatarImageUrl() ; ?>" /></p>
<a href="?logout"><?php echo WORDING_LOGOUT; ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="?edit"><?php echo WORDING_EDIT_USER_DATA; ?></a>
<?php echo ($login->config->ALLOW_ADMIN_TO_REGISTER_NEW_USER && $_SESSION['user_access_level'] == 255 ? '<br/><a href="?register">'. WORDING_REGISTER_NEW_ACCOUNT .'</a>' : ''); ?>

