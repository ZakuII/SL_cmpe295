$("#Patient").live('pageinit', function(e){	
	
	sessionStorage["PatProId"] = sessionStorage["uid"];	
	patientHideAll();
	getPatInfo();
});

$(document).delegate('#logout', 'click', function() {
	sessionStorage.clear();
	//$.mobile.changePage("../index.html");	 
	window.location = "/mobileMed/index.html";
});



$(document).delegate('#patientInvo', 'click', function() {
	console.log("pressed") 
	$.mobile.changePage("form/views/showInfo.html");	
});

$(document).delegate('#patientVisitLog', 'click', function() {
	showPatientLog2();	 
});

$(document).delegate('#patientLogBack', 'click', function() {
	patShowMainFromLog();	 
});

$(document).delegate('#dpatientMedLog', 'click', function() {
	showMXLog();	 
});

$(document).delegate('#dMXLogBack', 'click', function() {
	$("#dMXLog").slideUp("slow");
	$("#PatientMain").slideDown("slow");
});

function showPatientLog2(){
	
	$("#PatientMain").slideUp("slow");
	$("#patientLog").slideDown("slow");
}

function patShowMainFromLog(){
	
	$("#patientLog").slideUp("slow");
	$("#PatientMain").slideDown("slow");
}

function patientHideAll(){
	
	$("#PatientMain").hide();
	$("#patientLog").hide();
	$('#dMXLog').hide();
}

function patientshowMain(){
	
	$("#PatientMain").show();
	$("#patientLog").hide();
	$('#dMXLog').hide();
}

function showMXLog(){
	
	$("#PatientMain").slideUp("slow");
	$("#dMXLog").slideDown("slow");
}

function getPatientLog(){
	var num = sessionStorage["PatProId"];
	/*var url = '/kohana/userdata/visit/'+num+'/visitLog-v2.txt'	
	
	$("#patientLogShow").load(url, function(response, status, xhr) {
		if (status == "error") {
			$("#patientLogShow").html("No Visitation Log Avaliable");
		}
	});*/
	
	var url = '/kohana/userdata/visit/'+num+'/Visitjson.txt';
	
	var visitData = "";	
	$('body').addClass('ui-loading');
	$.ajax({
		/*url: url,
		cache: false*/
		url: url
	}).done(function(msg) {
		var obj = jQuery.parseJSON(msg);
		obj.sort(function(a,b){return a['Checked Out']<b['Checked Out']});
		$.each(obj, function(i,user){
			visitData += '<div class="viewVisit">';
				for(var key in user) {
					visitData += '<strong>'+key+'</strong> : '+user[key]+'</br>';
				}
			visitData += '</div>';
		});
		$("#patientLogShow").html(visitData);
		$('body').removeClass('ui-loading');			
	})
	.fail(function(jqXHR, textStatus) {
		$("#patientLogShow").html("<h3><i>No Visitation Log Avaliable</i></h3>");
		$('body').removeClass('ui-loading');		
	});
	
}

function getPatMXLog(){
	var num = sessionStorage["PatProId"];
	//var url = '/kohana/userdata/prescription/'+num+'/prescriptionLog-v2.txt'
	
	/*$("#dMXLogShow").load(url, function(response, status, xhr) {
		if (status == "error") {
			$("#dMXLogShow").html("No Prescription Log Avaliable");
		}
	});*/
	
	var url = '/kohana/userdata/prescription/'+num+'/prescriptionjson.txt'
	
	var prescriptData = "";	
	$('body').addClass('ui-loading');
	$.ajax({
		/*url: url,
		cache: false*/
		url: url
	}).done(function(msg) {
		var obj = jQuery.parseJSON(msg);
		obj.sort(function(a,b){return a['Created']<b['Created']});
		$.each(obj, function(i,user){
			prescriptData += '<div class="viewPrescription">';
				for(var key in user) {
					prescriptData += '<strong>'+key+'</strong> : '+user[key]+'</br>';
				}
			prescriptData += '</div>';
		});
		$("#dMXLogShow").html(prescriptData);
		$('body').removeClass('ui-loading');			
	})
	.fail(function(jqXHR, textStatus) {
		$("#dMXLogShow").html("<h3><i>No Prescription Log Avaliable</i></h3>");
		$('body').removeClass('ui-loading');		
	});
}


function getPatInfo(){

	$('body').addClass('ui-loading');
	sessionStorage["PatProId"] = sessionStorage["uid"];	
	var url = "/kohana/profile/patient/getPatientInfo2";
	$.getJSON(url, {ppatID:sessionStorage["PatProId"]}, function(data){	
		var pqlist = '';
		$.each(data.patient, function(i,user){
			pqlist += '<h3>'+user.fname+' ';
			pqlist += user.lname+'</h3>';
			pqlist += '<p><strong>Checked In at</strong> : '+user.time+ '</p>';
			pqlist += '<p><strong>Reason</strong> : '+user.reason+ '</p>';
			sessionStorage["pQnum"] = user.patid;
		});			
		$("#PatientPageInfoLine").html(pqlist);
		$("#PatientPageInfoLine").trigger("create");				
		
		patientshowMain();
		getPatientLog();
		getPatMXLog();
		
		$('body').removeClass('ui-loading');
	});		

}