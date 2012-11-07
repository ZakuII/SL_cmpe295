
//$("#ckOutPatient").live('pagebeforeshow', function(){
$("#ckOutPatient").live('pageinit', function(){
	showCKSearch();
	sessionStorage.ckOutlist=0;
});

$(document).delegate('#ckOutBack', 'click', function() {
	$.mobile.changePage("checkOut.html");
});

$(document).delegate('#ckOutConfirm', 'click', function() {
	
	var printStr = 'PPatID='+getUrlVars()['proId']+'&pid='+getUrlVars()['patId'];
	
	$('body').addClass('ui-loading');
		$.ajax({
			type: "POST",
			url: "/kohana/profile/profile/removeAssociation",
			data: printStr
		}).done(function( msg ) {
			$('body').removeClass('ui-loading');
			if(msg == "-1"){
				//console.log("error")
				alert("error");
			}
			else{
				//console.log(msg)
				$.mobile.changePage("../nurse.html");
			}
		});
	
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
		//var url = "/kohana/profile/profile/searchPatientCheckedIn";
		$.getJSON(url, {un:$('#username').val(), fn: $('#firstname').val(), ln: $('#lastname').val() }, function(data){
		console.log(data.patient.length)
		if(data.patient.length > 0){
			var pqlist = '<ul data-role="listview" data-inset="true">';
			pqlist += '<li data-role="list-divider">Currently Checked In Patients</li>';
			$.each(data.patient, function(i,user){			
				//pqlist += '<li><a href="checkOutDialog.html?proId='+user.proId+'&patId='+user.patID+'" data-rel="dialog">'
				pqlist += '<li><a href="checkOutDialog.html?proId='+user.proId+'&patId='+user.patID+'">'
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

$(document).delegate('#ckOutSearch', 'click', function() {
	showCKSearch();
});

$(document).delegate('#ckOutList', 'click', function() {
	showCKList();
});

function showCKSearch(){
	
	$('#ckOSearch').show();
	$('#ckOlist').hide();
}

function showCKList(){

	if(sessionStorage.ckOutlist==0){
	
		$('body').addClass('ui-loading');
		var url = "/kohana/profile/profile/searchPatientCheckedIn";
		//var url = "/kohana/profile/profile/searchPatientCheckedIn";
		$.getJSON(url, function(data){
		console.log(data.patient.length)
		if(data.patient.length > 0){
			var pqlist = '<ul data-role="listview" data-filter="true" data-inset="true">';
			pqlist += '<li data-role="list-divider">Currently Checked In Patients</li>';
			$.each(data.patient, function(i,user){			
				pqlist += '<li><a href="checkOutDialog.html?proId='+user.proId+'&patId='+user.patID+'">'
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
			$("#ckOutlistPage").html(pqlist);
			$("#ckOutlistPage").trigger("create");
			$('body').removeClass('ui-loading');
		});	
		
		sessionStorage.ckOutlist=1;
	}

	$('#ckOSearch').hide();
	$('#ckOlist').show();
}



function epFieldCheck(){
	var returnVal = 0;
	if($('#username').val() == "" && $('#firstname').val() == "" && $('#lastname').val() == ""){
		returnVal = 1;
	}
	return returnVal;
}

//getUrlVars()['id']
function getUrlVars() {
	var vars = {};
	var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
		vars[key] = value;
	});
	return vars;
}