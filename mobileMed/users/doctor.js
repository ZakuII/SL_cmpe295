$("#doctor").live('pageinit', function(e){	
	
	//console.log('doctor')
	sessionStorage["DocProId"] = sessionStorage["uid"];
	//sessionStorage["DocProId"] = 14;
	sessionStorage["PMainId"] = 0;
	sessionStorage["PMainId2"] = 0;
	getDocInfo();
	getDocPatList();
	hideDoctorAll();	
});

$(document).delegate('#logout', 'click', function() {
	sessionStorage.clear();
	//$.mobile.changePage("../index.html");	 
	window.location = "/mobileMed/index.html";
});


$(document).delegate('#patientList', 'click', function() {
	showDoctorPatientList();	 
});

$(document).delegate('#doctorPatientBack', 'click', function() {
	showDoctorMain2();
});

$(document).delegate('#doctorPatientToggle', 'click', function() {
	$("#doctorPatientOld").slideToggle("slow");
	$("#doctorPatient").slideToggle("slow");
});

$(document).delegate('#sortFname', 'click', function() {
	patSavelist.sort(function(a,b){return a.fname>b.fname});
	
	
	if(patSavelist.length > 0){
		var pqlist = '<ul data-role="listview" data-filter="true" data-inset="true">';
		pqlist += '<li data-role="list-divider">Active Patients</li>';
			
		var pqlist2 = '<ul data-role="listview" data-filter="true" data-inset="true">';
		pqlist2 += '<li data-role="list-divider">Inactive Patients</li>';
			
		var activeFlag = 0, inactiveFlag = 0;
			
		$.each(patSavelist, function(i,user){						
			if(user.val==1){
				pqlist += '<li><a href="doctors/dpatient.html?ppatID='+user.propid+'&pID='+user.patid+'">';
				pqlist += '<img src="/mobileMed/assets/defaultUser.jpg" />';
				pqlist += '<h3>'+user.fname+' '+user.lname+'</h3>';
				pqlist += '<p><strong>Checked In at</strong> : '+user.time+ '</p>';
				pqlist += '<p><strong>Reason</strong> : '+user.reason+ '</p>';
				pqlist += '</a></li>';	
				activeFlag++;
			}
				
			if(user.val==0){
				//pqlist2 += '<li><a>';
				pqlist2 += '<li><a href="doctors/dpatient.html?ppatID='+user.propid+'&pID='+user.patid+'">';
				pqlist2 += '<img src="/mobileMed/assets/defaultUser.jpg" />';
				pqlist2 += '<h3>'+user.fname+' '+user.lname+'</h3>';
				pqlist2 += '<p><strong>Checked In at</strong> : '+user.time+ '</p>';
				pqlist2 += '<p><strong>Reason</strong> : '+user.reason+ '</p>';
				pqlist2 += '</a></li>';	
				inactiveFlag++;
			}
				
		});
			
		if(inactiveFlag == 0){
			pqlist2 += '<li><a>No Inactive Patient</a></li>'
		}
			
		if(activeFlag == 0){
			pqlist += '<li><a>No Active Patient</a></li>'
		}
			
		pqlist += '</ul>';
		pqlist2 += '</ul>';
			
	}
	else{
		var pqlist = '<em><strong>No Patients Found</strong></em>';
	}
		
	$("#docPatListShow").html(pqlist);
	$("#docPatListShowOld").html(pqlist2);
	$("#docPatListShowOld").trigger("create");
	$("#docPatListShow").trigger("create");
	$('body').removeClass('ui-loading');	
});

$(document).delegate('#sortLname', 'click', function() {	
	patSavelist.sort(function(a,b){return a.lname>b.lname});	
	if(patSavelist.length > 0){
		var pqlist = '<ul data-role="listview" data-filter="true" data-inset="true">';
		pqlist += '<li data-role="list-divider">Active Patients</li>';
			
		var pqlist2 = '<ul data-role="listview" data-filter="true" data-inset="true">';
		pqlist2 += '<li data-role="list-divider">Inactive Patients</li>';
			
		var activeFlag = 0, inactiveFlag = 0;
			
		$.each(patSavelist, function(i,user){						
			if(user.val==1){
				pqlist += '<li><a href="doctors/dpatient.html?ppatID='+user.propid+'&pID='+user.patid+'">';
				pqlist += '<img src="/mobileMed/assets/defaultUser.jpg" />';
				pqlist += '<h3>'+user.lname+', '+user.fname+'</h3>';
				pqlist += '<p><strong>Checked In at</strong> : '+user.time+ '</p>';
				pqlist += '<p><strong>Reason</strong> : '+user.reason+ '</p>';
				pqlist += '</a></li>';	
				activeFlag++;
			}
				
			if(user.val==0){
				//pqlist2 += '<li><a>';
				pqlist2 += '<li><a href="doctors/dpatient.html?ppatID='+user.propid+'&pID='+user.patid+'">';
				pqlist2 += '<img src="/mobileMed/assets/defaultUser.jpg" />';
				pqlist2 += '<h3>'+user.lname+', '+user.fname+'</h3>';
				pqlist2 += '<p><strong>Checked In at</strong> : '+user.time+ '</p>';
				pqlist2 += '<p><strong>Reason</strong> : '+user.reason+ '</p>';
				pqlist2 += '</a></li>';	
				inactiveFlag++;
			}
				
		});
			
		if(inactiveFlag == 0){
			pqlist2 += '<li><a>No Inactive Patient</a></li>'
		}
			
		if(activeFlag == 0){
			pqlist += '<li><a>No Active Patient</a></li>'
		}
			
		pqlist += '</ul>';
		pqlist2 += '</ul>';
			
	}
	else{
		var pqlist = '<em><strong>No Patients Found</strong></em>';
	}
		
	$("#docPatListShow").html(pqlist);
	$("#docPatListShowOld").html(pqlist2);
	$("#docPatListShowOld").trigger("create");
	$("#docPatListShow").trigger("create");
	$('body').removeClass('ui-loading');
});

$(document).delegate('#sortTime', 'click', function() {
	//console.log("pressed")
	//var test = new Date(patSavelist[1].time);
	//console.log(test)
	
	patSavelist.sort(function(a,b){
	var splita = a.time.split(", ");
	var splitb = b.time.split(", ");
	//var d1 = new Date(a.time);
	//var d2 = new Date(b.time);
	var d1 = new Date(splita[1]);
	var d2 = new Date(splitb[1]);
	return d1 > d2}
	);
	
	if(patSavelist.length > 0){
		var pqlist = '<ul data-role="listview" data-filter="true" data-inset="true">';
		pqlist += '<li data-role="list-divider">Active Patients</li>';
			
		var pqlist2 = '<ul data-role="listview" data-filter="true" data-inset="true">';
		pqlist2 += '<li data-role="list-divider">Inactive Patients</li>';
			
		var activeFlag = 0, inactiveFlag = 0;
			
		$.each(patSavelist, function(i,user){						
			if(user.val==1){
				pqlist += '<li><a href="doctors/dpatient.html?ppatID='+user.propid+'&pID='+user.patid+'">';
				pqlist += '<img src="/mobileMed/assets/defaultUser.jpg" />';
				pqlist += '<h3>'+user.fname+' '+user.lname+'</h3>';
				pqlist += '<p><strong>Checked In at</strong> : '+user.time+ '</p>';
				pqlist += '<p><strong>Reason</strong> : '+user.reason+ '</p>';
				pqlist += '</a></li>';	
				activeFlag++;
			}
				
			if(user.val==0){
				//pqlist2 += '<li><a>';
				pqlist2 += '<li><a href="doctors/dpatient.html?ppatID='+user.propid+'&pID='+user.patid+'">';
				pqlist2 += '<img src="/mobileMed/assets/defaultUser.jpg" />';
				pqlist2 += '<h3>'+user.fname+' '+user.lname+'</h3>';
				pqlist2 += '<p><strong>Checked In at</strong> : '+user.time+ '</p>';
				pqlist2 += '<p><strong>Reason</strong> : '+user.reason+ '</p>';
				pqlist2 += '</a></li>';	
				inactiveFlag++;
			}
				
		});
			
		if(inactiveFlag == 0){
			pqlist2 += '<li><a>No Inactive Patient</a></li>'
		}
			
		if(activeFlag == 0){
			pqlist += '<li><a>No Active Patient</a></li>'
		}
			
		pqlist += '</ul>';
		pqlist2 += '</ul>';
			
	}
	else{
		var pqlist = '<em><strong>No Patients Found</strong></em>';
	}
		
	$("#docPatListShow").html(pqlist);
	$("#docPatListShowOld").html(pqlist2);
	$("#docPatListShowOld").trigger("create");
	$("#docPatListShow").trigger("create");
	$('body').removeClass('ui-loading');
	
});

function getDocInfo(){

	$('body').addClass('ui-loading');
	sessionStorage["DocProId"] = sessionStorage["uid"];
	var url = "/kohana/profile/doctor/getDoctorInfo";
	$.getJSON(url, {DocProId:sessionStorage["DocProId"]}, function(data){	
		var pqlist = 'Dr. ';
		//console.log(data.doctor.length)
		$.each(data.doctor, function(i,user){
			pqlist += user.fname+' ';
			pqlist += user.lname+' / ';
			pqlist += user.special+' ';
			
			sessionStorage.dfName = user.fname;
			sessionStorage.dlName = user.lname;
			sessionStorage.dspecial = user.special;
			
		});	
		
		$("#doctorInfoLine").html(pqlist);
		$("#doctorInfoLine").trigger("create");
		$('body').removeClass('ui-loading');
		showDoctorMain();
	});		
}

var patSavelist;

function getDocPatList(){
	
	$('body').addClass('ui-loading');
	sessionStorage["DocProId"] = sessionStorage["uid"];
	var url = "/kohana/profile/doctor/getDoctorPatList";
	$.getJSON(url, {DocProId:sessionStorage["DocProId"]}, function(data){	
		//console.log(data.patient.length)
		
		patSavelist = data.patient;
		if(data.patient.length > 0){
			var pqlist = '<ul data-role="listview" data-filter="true" data-inset="true">';
			pqlist += '<li data-role="list-divider">Active Patients</li>';
			
			var pqlist2 = '<ul data-role="listview" data-filter="true" data-inset="true">';
			pqlist2 += '<li data-role="list-divider">Inactive Patients</li>';
			
			var activeFlag = 0, inactiveFlag = 0;
			
			$.each(data.patient, function(i,user){			
				//pqlist += '<li><a href="checkIn4.html?PPatID='+getUrlVars()['proId']+'&patId='+getUrlVars()['patId']+'&PDocID='+user.value+'">';
				if(user.val==1){
					//pqlist += '<li><a>';
					pqlist += '<li><a href="doctors/dpatient.html?ppatID='+user.propid+'&pID='+user.patid+'">';
					pqlist += '<img src="/mobileMed/assets/defaultUser.jpg" />';
					pqlist += '<h3>'+user.fname+' '+user.lname+'</h3>';
					pqlist += '<p><strong>Checked In at</strong> : '+user.time+ '</p>';
					pqlist += '<p><strong>Reason</strong> : '+user.reason+ '</p>';
					pqlist += '</a></li>';	
					activeFlag++;
				}
				
				if(user.val==0){
					//pqlist2 += '<li><a>';
					pqlist2 += '<li><a href="doctors/dpatient.html?ppatID='+user.propid+'&pID='+user.patid+'">';
					pqlist2 += '<img src="/mobileMed/assets/defaultUser.jpg" />';
					pqlist2 += '<h3>'+user.fname+' '+user.lname+'</h3>';
					pqlist2 += '<p><strong>Checked In at</strong> : '+user.time+ '</p>';
					pqlist2 += '<p><strong>Reason</strong> : '+user.reason+ '</p>';
					pqlist2 += '</a></li>';	
					inactiveFlag++;
				}
				
			});
			
			if(inactiveFlag == 0){
				pqlist2 += '<li><a>No Inactive Patient</a></li>'
			}
			
			if(activeFlag == 0){
				pqlist += '<li><a>No Active Patient</a></li>'
			}
			
			pqlist += '</ul>';
			pqlist2 += '</ul>';
			
		}
		else{
			var pqlist = '<em><strong>No Patients Found</strong></em>';
		}
		
		//$("#docPatListShow").html(pqlist+'</br>'+pqlist2);
		$("#docPatListShow").html(pqlist);
		$("#docPatListShowOld").html(pqlist2);
		$("#docPatListShowOld").trigger("create");
		$("#docPatListShow").trigger("create");
		$('body').removeClass('ui-loading');
	});		
}

function hideDoctorAll(){
	$('#doctorMain').hide();
	$('#doctorPatient').hide();
	$('#doctorPatientOld').hide();		
	$('#doctorMenu').hide();
}

function showDoctorMain(){

	$('#doctorMain').show();
	$('#doctorPatient').hide();
	$('#doctorPatientOld').hide();
	$('#doctorMenu').hide();
}

function showDoctorMain2(){

	$("#doctorPatient").slideUp("slow");
	$("#doctorMain").slideDown("slow");
	$('#doctorPatientOld').hide();
	$('#doctorMenu').hide();
}

function showDoctorPatientList(){
	
	$("#doctorMain").slideUp("slow");
	$("#doctorPatient").slideDown("slow");
	$('#doctorMenu').show();
}