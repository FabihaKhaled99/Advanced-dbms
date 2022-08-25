<?php
	setcookie('flag', true, time()-3600, '/');
	setcookie('adminflag', true, time()-3600, '/');
	header('location: ../view/login_mod2.php');
?>
