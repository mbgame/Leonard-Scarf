<?php

try
{	
	require("Kavenegar/KavenegarApi.php");
	$api = new KavenegarApi("");
        $msg = "با تشکر از شما جهت ثبت نام در سایت لئونارداسکارف, کد   ";
        $msg .= $rndval;
        $msg .= "  را در کادر مربوطه وارد نمایید";

	$result = $api->send("","10008000808808",$msg);
	echo print_r($result);
}
catch(ApiException $ex)
{
	echo $e->errorMessage();
}
catch(HttpException $ex)
{
	echo $e->errorMessage();
}



?>