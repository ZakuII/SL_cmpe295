$("#dpatient").live('pagebeforeshow', function(e){	
	
	hideDpatientAll();
	getPatientInfo();
	
});

function getPatientInfo(){

	$('body').addClass('ui-loading');
	var url = "/kohana/profile/patient/getPatientInfo";
	sessionStorage.ppatId = getUrlVars()['ppatID'];
	$.getJSON(url, {ppatID:getUrlVars()['ppatID']}, function(data){	
		var pqlist = '';
		$.each(data.patient, function(i,user){
			pqlist += '<h3>'+user.fname+' ';
			pqlist += user.lname+'</h3>';
			pqlist += '<p><strong>Checked In at</strong> : '+user.time+ '</p>';
			pqlist += '<p><strong>Reason</strong> : '+user.reason+ '</p>';
			
			sessionStorage.pfName = user.fname;
			sessionStorage.plName = user.lname;	
			sessionStorage.pReason = user.reason;	
			
			//stored records information
			sessionStorage.pfInsurePlace = user.insureP;
			sessionStorage.pfInsureID = user.insureID;
			sessionStorage.pfAllergy = user.Allergy;
		});			
		$("#PatientInfoLine").html(pqlist);
		$("#PatientInfoLine").trigger("create");		
		getPatientLog();
		getPatMXLog();		
		getUpCounter();
		$('body').removeClass('ui-loading');
		showDpatientMain();
	});		
}

$(document).delegate('#dpatientVisitLog', 'click', function() {
	showPatientLog();	 
});

$(document).delegate('#dpatientMedLog', 'click', function() {
	showMXLog();	 
});

$(document).delegate('#dpatientLogBack', 'click', function() {
	showDpatientMain2();
});

$(document).delegate('#dMXLogBack', 'click', function() {
	$("#dMXLog").slideUp("slow");
	$("#dpatientMain").slideDown("slow");
});

function getPatientLog(){
	var num = getUrlVars()['ppatID'];
	//var url = '/kohana/userdata/visit/'+num+'/visitLog-v2.txt';
	var url = '/kohana/userdata/visit/'+num+'/Visitjson.txt';
	//$("#dpatientLogShow").load(url); 	
	
	/*$("#dpatientLogShow").load(url, function(response, status, xhr) {
		if (status == "error") {
			$("#dpatientLogShow").html("No Visitation Log Avaliable");
		}
	});*/
	
	
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
		$("#dpatientLogShow").html(visitData);
		$('body').removeClass('ui-loading');			
	})
	.fail(function(jqXHR, textStatus) {
		$("#dpatientLogShow").html("<h3><i>No Visitation Log Avaliable</i></h3>");
		$('body').removeClass('ui-loading');		
	});
	
	
	
}

function getPatMXLog(){
	var num = getUrlVars()['ppatID'];
	//var url = '/kohana/userdata/prescription/'+num+'/prescriptionLog-v2.txt'
	var url = '/kohana/userdata/prescription/'+num+'/prescriptionjson.txt'
	
	/*$("#dMXLogShow").load(url, function(response, status, xhr) {
		if (status == "error") {
			$("#dMXLogShow").html("No Prescription Log Avaliable");
		}
	});*/
	
	
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

function getUpCounter(){
	
	var url = "/kohana/profile/message/getMsgUpdateDoc";	
	
	$.ajax({
		type: "POST",
		url: url,
		data: {DocProId:sessionStorage["DocProId"], ppatId:sessionStorage["ppatId"] }
		}).done(function( msg ) {		
		//alert("Data Loaded: " + msg);
		if(msg != "0"){
			$("#upCount").html(msg);
		}
		else{
			$("#upCount").html('-');			
		}		
	});
	
	
}

function showPatientLog(){
	
	$("#dpatientMain").slideUp("slow");
	$("#dpatientLog").slideDown("slow");
}

function showMXLog(){
	
	$("#dpatientMain").slideUp("slow");
	$("#dMXLog").slideDown("slow");
}

function showDpatientMain2(){
	$("#dpatientLog").slideUp("slow");
	$("#dpatientMain").slideDown("slow");
}

function hideDpatientAll(){
	$('#dpatientMain').hide();
	$('#dpatientLog').hide();
	$('#dMXLog').hide();
}

function showDpatientMain(){
	$('#dpatientMain').show();
	$('#dpatientLog').hide();
	$('#dMXLog').hide();
}


$(document).delegate('#dpatientInfo', 'click', function() {
	sessionStorage.pQnum = getUrlVars()['pID'];
	$.mobile.changePage("../form/views/show2.html");
});

$(document).delegate('#Dcontact', 'click', function() {
	//sessionStorage.ppatId
	//sessionStorage["DocProId"]
	$.mobile.changePage("contact.html");
});

//getUrlVars()['id']
function getUrlVars() {
	var vars = {};
	var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
		vars[key] = value;
	});
	return vars;
}