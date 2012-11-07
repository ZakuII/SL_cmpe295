$("#contactDoctor").live('pagebeforeshow', function(e){	
	showCKold();
});

function showCKold(){
	
	/*$('body').addClass('ui-loading');
	var url = "/kohana/profile/doctor/showPatientDoctor";
	$.getJSON(url, {patId:sessionStorage["pQnum"]}, function(data){

	if(data.patient.length > 0){
		var pqlist = '<ul data-role="listview" data-filter="true" data-inset="true">';
		pqlist += '<li data-role="list-divider">Previous Doctors</li>';
		$.each(data.patient, function(i,user){			
			pqlist += '<li><a href="contact.html?PPatID='+sessionStorage["PatProId"]+'&patId='+sessionStorage["pQnum"]+'&PDocID='+user.value+'">';
			pqlist += '<span class="ui-li-count" id="upCount">0</span>';
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
	});	*/		
	
	
	$('body').addClass('ui-loading');
	var url = "/kohana/profile/doctor/showPatientDoctor2";
	$.getJSON(url, {patId:sessionStorage["pQnum"]}, function(data){

	if(data.patient.length > 0){
		var pqlist = '<ul data-role="listview" data-filter="true" data-inset="true">';
		pqlist += '<li data-role="list-divider">Previous Doctors</li>';
		$.each(data.patient, function(i,user){			
			pqlist += '<li><a href="contact.html?PPatID='+sessionStorage["PatProId"]+'&patId='+sessionStorage["pQnum"]+'&PDocID='+user.value+'">';
			pqlist += '<span class="ui-li-count" id="upCount">'+user.up+'</span>';
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
	
	
}