
$("#newDoctor").live('pageinit', function(){
	console.log("newDoctor");
	showPermissionDoctor("newDoctorShow");
});


function showPermissionDoctor(location){

	var pqlist = '<label for="doctorType" class="select">Select Doctor Type:</label>';
	pqlist += '<select name="doctorType" id="doctorType">';
	$('body').addClass('ui-loading');
	var url = "/kohana/config/permission/getPermissionShow";
	$.getJSON(url,function(data){			
		$.each(data.permission, function(i,user){			
			//pqlist += '<h4>'+user.id +' : '+user.type +'</h4>';
			pqlist += '<option value="'+user.type+'|'+user.id+'">'+user.type+'</option>';
			//pqlist += '<option value="'+user.type+'|'+user.id+'">'+user.type+'</option>'
		});
		pqlist += '</select>'
		$("#"+location).html(pqlist);
		$("#"+location).trigger("create");	
		$('body').removeClass('ui-loading');
	});	
}


$(document).delegate('#newDoctorBtn', 'click', function() {
	//console.log("button pressed");	
	var printStr = $('#newDoctorForm').serialize();
	console.log(printStr)
	
	printStr += '&id='+ getUrlVars()['id'];
		$('body').addClass('ui-loading');
		$.ajax({
			type: "POST",
			url: "/kohana/profile/doctor/newDoctor",
			data: printStr
			}).done(function( msg ) {
			$('body').removeClass('ui-loading');
			if(msg == "-1"){
				alert("Error, Profile Exists");
			}
			else{
				alert("saved to: "+msg);
				$.mobile.changePage("../nurse.html");
			}
		});
	
});

function getUrlVars() {
	var vars = {};
	var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
		vars[key] = value;
	});
	return vars;
}