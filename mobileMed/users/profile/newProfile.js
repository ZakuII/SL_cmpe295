
$("#newProfile").live('pageinit', function(){
	console.log("pageinit");	
	//$('#password').val("");
});

$(document).delegate('#nPCancel', 'click', function() {
	$.mobile.changePage("../nurse.html");
});

$(document).delegate('#nPSumbit', 'click', function() {
	var printStr = $('#newProfileForm').serialize();
	console.log("Serialize: "+printStr);
	
	var radioResult = $('input[name=ProfileType]:checked').val()
	console.log("Radio: "+radioResult);
	
	var verify = newProfileValidate();
	console.log(verify)
	if(verify == 0){
		if($('#password').val() == $('#password2').val()){
			console.log("no error");
			$("#nperror").html("");
			
			$('body').addClass('ui-loading');
			$.ajax({
				type: "POST",
				url: "/kohana/profile/profile/newProfile",
				data: printStr
			}).done(function( msg ) {
				$('body').removeClass('ui-loading');
				//alert( msg );
				if(msg == "-1"){
					$("#nperror").html("*Username Already Exist*");
					$("#nperror").css("color","red");
				}
				else{
					alert("saved to: "+msg);
					if(radioResult=="nurse"){
						$.mobile.changePage("../nurse.html");
					}
					else if(radioResult=="doctor"){
						var url = "newDoctor.html?id="+msg;
						$.mobile.changePage(url);
					}
					else if(radioResult=="patient"){
						var url = "newUser.html?id="+msg;
						$.mobile.changePage(url);
					}
					else{
						$.mobile.changePage("../nurse.html");
					}
				}
			});
		}
		else{
			console.log("password different");
			$("#passwordlabel").css("color","red"); 
			$("#password2label").css("color","red");
			$("#nperror").html("*Password Does not match*");
			$("#nperror").css("color","red");
		}
	}
	
});

function newProfileValidate(){
	
	var returnFlag = 0;
	var returnStr = "";
	$("#usernamelabel").css("color","black");
	$("#passwordlabel").css("color","black");
	$("#password2label").css("color","black");
	$("#questionlabel").css("color","black");
	$("#answerlabel").css("color","black");
	$("#firstnamelabel").css("color","black");
	$("#lastnamelabel").css("color","black");
	$("#emaillabel").css("color","black");
	
	if($('#username').val() == ""){
		
		returnStr += "username ";
		returnFlag++;
		$("#usernamelabel").css("color","red"); 
	}
	
	if($('#password').val() == ""){
	
		returnStr += "password ";
		returnFlag++;
		$("#passwordlabel").css("color","red"); 
	}
	
	if($('#password2').val() == ""){
	
		returnStr += "password2 ";
		returnFlag++;
		$("#password2label").css("color","red");
	}
	
	if($('#question').val() == ""){
	
		returnStr += "question ";
		returnFlag++;
		$("#questionlabel").css("color","red"); 
	}
	
	if($('#answer').val() == ""){
	
		returnStr += "answer ";
		returnFlag++;
		$("#answerlabel").css("color","red");
	}
	
	if($('#firstname').val() == ""){
		
		returnStr += "firstname ";
		returnFlag++;
		$("#firstnamelabel").css("color","red");
	}
	
	if($('#lastname').val() == ""){
	
		returnStr += "lastname ";
		returnFlag++;
		$("#lastnamelabel").css("color","red");
	}
	
	if($('#email').val() == ""){
	
		returnStr += "email ";
		returnFlag++;
		$("#emaillabel").css("color","red");
	}
	
	return returnFlag;
}