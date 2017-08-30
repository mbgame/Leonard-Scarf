pic1 = new Image(16, 16); 
pic1.src="loader.gif";

$(document).ready(function(){
 
$("#username").change(function() { 
 
var usr = $("#username").val();
 
if(usr.length > 5 )
{
$("#unameInfo").html('<img src="loader.gif" align="absmiddle">&nbsp;Checking availability...');
 
    $.ajax({  
    type: "POST",  
    url: "check.php",  
    data: "username="+ usr,  
    success: function(msg){  
    
   $("#unameInfo").ajaxComplete(function(event, request, settings){ 
 
    if(msg == 'OK')
    { 
    //$username.setInputError(msg == 'OK', $('#unameInfo'), new SafeString(gettext('username_exists')));
        $("#username").addClass('object_error'); // if necessary
        $("#username").removeClass("object_ok");
      //  $("#username").addClass("-elm-text.error");
      //  $("#username").removeClass("-elm-text.success");

       // $("#username").addClass("uname-css");
      //  $("#username").removeClass("-elm-text");

        $(this).html(gettext('username_exists'));
    $("#status").html('');
    }  
    else 
    {  

        $("#username").removeClass('object_error'); // if necessary
        $("#username").addClass("object_ok");
     //   $("#username").removeClass("-elm-text.error");
     //   $("#username").removeClass("-elm-text.error");
     //   $("#username").addClass("-elm-text.success");
        $(this).html('');
        $("#status").html('&nbsp;<img src="tick.gif" align="absmiddle">');

    }  
    
   });
 
 } 
    
  }); 
 
}
else if(usr.length==0 || usr == null || usr == "")
{
    $("#unameInfo").html(gettext('username_required'));
    $("#username").removeClass('object_ok'); // if necessary
    $("#username").addClass("object_error");
    $("#status").html('');

}

else
    {
    $("#unameInfo").html(gettext('username_length'));
    $("#username").removeClass('object_ok'); // if necessary
    $("#username").addClass("object_error");
    $("#status").html('');
    }


 
});
 
}); 
