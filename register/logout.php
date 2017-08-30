<?php
session_start();
?>
<!doctype html>
<head>
	<title>شال و روسری</title>

	<link rel='icon' 
	type='image/x-icon'
	href='http://www.leonardscarf.com/favicon.ico'>

        <link rel='alternate' href='http://www.leonardscarf.com' hreflang='fa' />
        <meta name='description' content='لئونارد برترین برند انواع شال و روسری با ارائه بهترین کیفیت و طراحی و رنگ بندی فوق العاده همتراز با برندهای بزرگ جهان دارای نمایندگی رسمی در سراسر کشور می باشد'>
	<meta content='width=device-width, initial-scale=1.0' name='viewport'>
        <meta name='keywords' content='shawl,scarf,leonard,شال,روسری,لئونارد'>
        <meta name='author' content='mohsen bashirzadeh'>
	<meta charset='utf-8'>
</head>
<body>
﻿<?php
require_once("db_con.php");

if (isset($_SESSION['adminlogin']))
{
//$_SESSION['adminlogin']=NULL;
session_unset(); 

// destroy the session 
session_destroy(); 
redirect('http://www.leonardscarf.com/');
}

else if (isset($_SESSION['usernamelogin']))
{
    if($_SESSION['buytypelogin']=='omde')
    {$sql = "SELECT username from omde WHERE username = '".$_SESSION['usernamelogin']."' AND login= '1' ";}
    if($_SESSION['buytypelogin']=='khorde')
    {$sql = "SELECT username from khorde WHERE username = '".$_SESSION['usernamelogin']."' AND login= '1' ";}

        $result = $mysqli->query($sql);
	if (!$result->num_rows == 1) {
       // echo ' خروج انجام نشد';
        exit();
                                     }
        else
        {
        $row = mysqli_fetch_assoc($result);

        if($_SESSION['buytypelogin']=='omde')
        {$sql = "UPDATE omde SET login='0' WHERE username='".$_SESSION['usernamelogin']."'  AND login='1'";}
        if($_SESSION['buytypelogin']=='khorde')
        {$sql = "UPDATE khorde SET login='0' WHERE username='".$_SESSION['usernamelogin']."'  AND login='1'";}

         $result = $mysqli->query($sql);

//$_SESSION['adminlogin']=NULL;
session_unset(); 

// destroy the session 
session_destroy(); 
redirect('http://www.leonardscarf.com/');
        }
}

else{redirect('http://www.leonardscarf.com/index.php');}


?>
</body>
</html>
