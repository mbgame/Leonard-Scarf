<?php
	session_start();
	$_SESSION['loadmore']=true;
	$_SESSION['loadmoreshawl']=null;
	$_SESSION['loadmorescarf']=null;
	header("Location: https://www.leonardscarf.com/search/"); /* Redirect browser */
exit();
 ?>

