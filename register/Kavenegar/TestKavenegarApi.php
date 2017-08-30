<?php 
require("KavenegarApi.php");
class  TestKavenegarApi
{
	private $apiKey;
	public function __construct()
	{
		$this->apiKey="";
		$this->api = new KavenegarApi($this->apiKey);
		
	
		//$this->Send();
		//....
		//..
		//.
		//$this->Account_Info();
	
	}

	public function Send($mobile,$msg)
	{
try
{	
//	require("Kavenegar/KavenegarApi.php");
//	$api = new KavenegarApi("764F693366485552556F4A73504C524156486D654C673D3D");
	$result = $this->api->send($mobile,"10008000808808",$msg);
//	echo print_r($result);
}
catch(ApiException $ex)
{
	echo $e->errorMessage();
}
catch(HttpException $ex)
{
	echo $e->errorMessage();
}

	}	

}	

$TestKavenegarApi=new TestKavenegarApi();
?>