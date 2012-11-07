

$(document).delegate('#logSubmit', 'click', function() {
	var printStr = $('#login').serialize();
	console.log(printStr) 
		
	$('body').addClass('ui-loading');
	$.ajax({
		type: "POST",
		url: "/kohana/profile/login",
		data: printStr
		}).done(function( msg ) {
		$('body').removeClass('ui-loading');
		if(msg == "-1"){
			alert("Missing Field");
		}
		else if(msg == "-2"){		
			alert("Invalid Username/Password");
		}
		else{
			var parsed = msg.split(",");
			sessionStorage["uid"] = parsed[0];
			sessionStorage["logged"] = "1";
			window.location = parsed[1];
		}
	});
	
});