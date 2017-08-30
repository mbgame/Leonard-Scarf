pic1 = new Image(16, 16); 
pic1.src="loader.gif";

$(document).ready(function(){
 
$("#captcha_code").change(function() { 
 
var cap = $("#captcha_code").val();
 
if(cap.length > 3 )
{
$("#captchaInfo").html('<img src="loader.gif" align="absmiddle">&nbsp;Checking Matching...');
 
    $.ajax({  
    type: "POST",  
    url: "checkcapcha.php",  
    data: "captcha_code="+ cap,  
    success: function(result){  
    
   $("#captchaInfo").ajaxComplete(function(event, request, settings){ 
 
    if(result == 'OK')
    { 
        $("#captcha_code").addClass('object_error'); // if necessary
        $("#captcha_code").removeClass("object_ok");

        $(this).html(gettext('captcha_error'));
    $("#capstatus").html('');
    }  
    else 
    {  

       // $("#captcha_code").removeClass('object_error'); // if necessary
        $("#captcha_code").addClass("object_ok");
        $(this).html('');
        $("#capstatus").html('&nbsp;<img src="tick.gif" align="absmiddle">');

    }  
    
   });
 
 } 
    
  }); 
 
}
else if(cap.length==0 || cap == null || cap == "")
{
    $("#captchaInfo").html(gettext('captcha_required'));
    $("#captcha_code").removeClass('object_ok'); // if necessary
    $("#captcha_code").addClass("object_error");
    $("#capstatus").html('');

}

else
    {
    $("#captchaInfo").html(gettext('captcha_required'));
    $("#captcha_code").removeClass('object_ok'); // if necessary
    $("#captcha_code").addClass("object_error");
    $("#capstatus").html('');
    }


 
});
 
}); 
