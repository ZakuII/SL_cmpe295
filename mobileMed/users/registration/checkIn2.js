
/*$("#ckInPatient2").live('pagebeforeshow', function(e){	
	//console.log("ckin2")
	sessionStorage.ckin2a = 0;
	sessionStorage.ckin2b = 0;	
	showCKnew();		
});*/

$("#ckInPatient2").live('pageinit', function(e){	

	sessionStorage.ckin2a = 0;
	sessionStorage.ckin2b = 0;	
	showCKnew();		
	autocompleteData = $.parseJSON(sessionStorage.newDoctor);
		$("#searchFieldNew").autocomplete({
			target: $('#suggestionsNew'),
			source: autocompleteData,
			link: 'checkIn4.html?PPatID='+getUrlVars()['proId']+'&patId='+getUrlVars()['patId']+'&PDocID=',
			minLength: 1
		});
});

$("#ckInPatient4").live('pagebeforeshow', function(e){	
	//console.log("ckin4")	
});

$(document).delegate('#ckIn4Back', 'click', function() {
	url = 'checkIn2.html?proId='+getUrlVars()['PPatID']+'&patId='+getUrlVars()['patId'];
	//$.mobile.changePage("#ckInPatient2");
	$.mobile.changePage(url);
});

$(document).delegate('#ckIn4Confirm', 'click', function() {
	//console.log("confirm")
	//console.log($("#reason").val())
	
	var printStr = 'PPatID='+getUrlVars()['PPatID']+'&PDocID='+getUrlVars()['PDocID'];
	printStr += '&reason='+$("#reason").val();
	//printStr += '&reason=a'+;
	
	$('body').addClass('ui-loading');
		$.ajax({
			type: "POST",
			url: "/kohana/profile/profile/assignAssociation",
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



$(document).delegate('#ckInSearch', 'click', function() {
	showCKnew();
});

$(document).delegate('#ckInList', 'click', function() {
	showCKnew2();
});



$(document).delegate('#ckInNew', 'click', function() {
	showCKnew();
	$('#ckInTab').show();
		
});

$(document).delegate('#ckInOld', 'click', function() {
	showCKold();
	$('#ckInTab').hide();
});

function showCKnew(){

	if(sessionStorage.ckin2a==0){
		
		$('body').addClass('ui-loading');
		$.ajax({
			url: "/kohana/profile/doctor/showdoctor"
		}).done(function( msg ) {			
			sessionStorage.newDoctor = msg;	
			data = $.parseJSON(msg);
			//showStr=""
			showStr = '<ul data-role="listview" data-inset="true" data-filter="true" data-autodividers="true">';
			$.each(data, function(i,user){
				showStr += '<li><a href="checkIn4.html?PPatID='+getUrlVars()['proId']+'&patId='+getUrlVars()['patId']+'&PDocID='+user.value+'">';
				showStr += '<img src="/mobileMed/assets/defaultUser.jpg" />';
				showStr += '<h3>'+user.label+'</h3>';
				showStr += '<p><strong>'+user.type+', Doctor ID : ['+user.docID+']</strong></p>';
				showStr += '</a></li>';
			});
			showStr += '</ul>'
			$("#ckInNewPage2Show").append(showStr);
			$("#ckInNewPage2Show").trigger("create");
			sessionStorage.ckin2a=1;
			$('body').removeClass('ui-loading');
		});
		
	}
	$('#ckInNewPage').show();
	$('#ckInNewPage2').hide();
	$('#ckInOldPage').hide();
}

function showCKold(){
	
	if(sessionStorage.ckin2b==0){	
	
		$('body').addClass('ui-loading');
		var url = "/kohana/profile/doctor/showPatientDoctor";
		$.getJSON(url, {patId:getUrlVars()['patId']}, function(data){
		//console.log(data.patient.length)
		if(data.patient.length > 0){
			var pqlist = '<ul data-role="listview" data-filter="true" data-inset="true">';
			pqlist += '<li data-role="list-divider">Previous Doctors</li>';
			$.each(data.patient, function(i,user){			
				pqlist += '<li><a href="checkIn4.html?PPatID='+getUrlVars()['proId']+'&patId='+getUrlVars()['patId']+'&PDocID='+user.value+'">';
				pqlist += '<img src="/mobileMed/assets/defaultUser.jpg" />';
				pqlist += '<h3>'+user.label+'</h3>';
				pqlist += '<p><strong>'+user.type+', Doctor ID : ['+user.docID+']</strong></p>';
				pqlist += '</a></li>';
		
			});
				pqlist += '</ul>';
		}
		else{
			var pqlist = '<em><strong>No Doctors Found</strong></em>';
		}
			$("#ckInOldShow").html(pqlist);
			$("#ckInOldShow").trigger("create");
			$('body').removeClass('ui-loading');
		});			
	
		sessionStorage.ckin2b=1;
	}
	$('#ckInNewPage').hide();
	$('#ckInNewPage2').hide();
	$('#ckInOldPage').show();
}

function showCKnew2(){
	
	$('#ckInNewPage').hide();
	$('#ckInNewPage2').show();
	$('#ckInOldPage').hide();
}



//getUrlVars()['id']
function getUrlVars() {
	var vars = {};
	var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
		vars[key] = value;
	});
	return vars;
}