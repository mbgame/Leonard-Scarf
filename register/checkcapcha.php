<?php
session_start();




if(isSet($_SESSION['6_letters_code'])) {
 

if(strcasecmp($_SESSION['6_letters_code'], $_POST['captcha_code']) != 0) {
    echo 'OK';
 
} else {
   echo '<font color="red">it is wrong!</font>';
}
}
?>
