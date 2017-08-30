<?php
	session_start();
	$_SESSION['loadmore']=null;
	$_SESSION['loadmoreshawl']=null;
	$_SESSION['loadmorescarf']=true;
	header("Location: https://www.leonardscarf.com/scarf/"); /* Redirect browser */
exit();
 ?>

