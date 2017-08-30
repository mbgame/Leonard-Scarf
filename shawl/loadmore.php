<?php
	session_start();
	$_SESSION['loadmore']=null;
	$_SESSION['loadmoreshawl']=true;
	$_SESSION['loadmorescarf']=null;
	header("Location: https://www.leonardscarf.com/shawl/"); /* Redirect browser */
exit();
 ?>

