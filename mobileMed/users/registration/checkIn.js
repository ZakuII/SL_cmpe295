
$("#ckInPatient").live('pageinit', function(){	

});

$(document).delegate('#ePCancel', 'click', function() {
	$.mobile.changePage("../nurse.html");
});

$(document).delegate('#ePSearch', 'click', function() {
	
	var printStr = $('#ckInPatientForm').serialize();
	console.log(printStr)
	
	if(epFieldCheck() == 0){		
		
		$('body').addClass('ui-loading');
		var url = "/kohana/profile/profile/searchPatient";
		$.getJSON(url, {un:$('#username').val(), fn: $('#firstname').val(), ln: $('#lastname').val() }, function(data){
		console.log(data.patient.length)
		if(data.patient.length > 0){
			var pqlist = '<ul data-role="listview" data-inset="true">';
			pqlist += '<li data-role="list-divider">Patients</li>';
			$.each(data.patient, function(i,user){			
				pqlist += '<li><a href="checkIn2.html?proId='+user.proId+'&patId='+user.patID+'">'
				pqlist += '<img src="/mobileMed/assets/defaultUser.jpg" />'
				pqlist += '<h3>'+user.fname+' '+user.lname+'</h3>';
				pqlist += '<p><em>username</em> : '+user.uname;
				pqlist += '</p></a></li>';			
			});
				pqlist += '</ul>';
		}
		else{
			var pqlist = '<em><strong>No Patients Found</strong></em>';
		}
			$("#editPDisplay").html(pqlist);
			$("#editPDisplay").trigger("create");
			$('body').removeClass('ui-loading');
		});	
		
	}
	else if(epFieldCheck() == 1){
		$("#editPDisplay").html("<em><strong>ERROR: Did not Provide any field</strong></em>");
		$("#editPDisplay").trigger("create");	
	}
	
});

function epFieldCheck(){
	var returnVal = 0;
	if($('#username').val() == "" && $('#firstname').val() == "" && $('#lastname').val() == ""){
		returnVal = 1;
	}
	return returnVal;
}