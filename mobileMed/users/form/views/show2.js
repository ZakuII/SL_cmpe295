$("#userShow").live('pagebeforeshow', function(){
//$("#userShow").live('pageinit', function(){
		sessionStorage.nu0 = 1;
		sessionStorage.nu1 = 1;
		sessionStorage.nu2 = 1;
		sessionStorage.nu3 = 1;
		sessionStorage.nu4 = 1;
		sessionStorage.nu5 = 1;
		UhideAll();
		UserShowInit();
});

$(document).delegate('#usPerson', 'click', function() {
	UshowPerson();
});	

$(document).delegate('#usMedical', 'click', function() {
	UshowMedical();
});	

$(document).delegate('#usEnvironment', 'click', function() {
	UshowEnvironment();
});	

$(document).delegate('#usFamily', 'click', function() {
	UshowFamily();
});	

$(document).delegate('#usMental', 'click', function() {
	UshowSocial();
});	

$(document).delegate('#usMisc', 'click', function() {
	UshowMisc();
});	

function permissionSwitch(permIn){
	
	if(permIn==0)
		permOut=1;
	else
		permOut=0;
	return permOut
}

function getPermission(){

	if(sessionStorage["PMainId"] != sessionStorage["pQnum"]){	

	var url = "/kohana/profile/doctor/getPermission";
	$.getJSON(url, {DocProId:sessionStorage["DocProId"]}, function(data){	
		//console.log(data.patient.length)
		$.each(data.doctor, function(i,user){
		
		sessionStorage.nu0 = permissionSwitch(user.pq);
		sessionStorage.nu1 = permissionSwitch(user.mq);
		sessionStorage.nu2 = permissionSwitch(user.eq);
		sessionStorage.nu3 = permissionSwitch(user.fq);
		sessionStorage.nu4 = permissionSwitch(user.sq);
		sessionStorage.nu5 = permissionSwitch(user.xq);				
		});
		
		if(sessionStorage.nu0 == 0){
			UserShowFormInit("person","showPerson_s",sessionStorage.personQ);
			sessionStorage.nu0 = 1;
		}		
		
		//$('body').removeClass('ui-loading');
		UshowPerson();
		
		//added
		sessionStorage["PMainId"] = sessionStorage["pQnum"];
		sessionStorage["PPerm"] = JSON.stringify(data);
	});	
	
	}//if not same
	
	//added
	else if(sessionStorage["PMainId"] == sessionStorage["pQnum"]){	
		var data2 = JSON.parse(sessionStorage["PPerm"]);
		
		$.each(data2.doctor, function(i,user){
		
		sessionStorage.nu0 = permissionSwitch(user.pq);
		sessionStorage.nu1 = permissionSwitch(user.mq);
		sessionStorage.nu2 = permissionSwitch(user.eq);
		sessionStorage.nu3 = permissionSwitch(user.fq);
		sessionStorage.nu4 = permissionSwitch(user.sq);
		sessionStorage.nu5 = permissionSwitch(user.xq);				
		});
		
		if(sessionStorage.nu0 == 0){
			UserShowFormInit("person","showPerson_s",sessionStorage.personQ);
			sessionStorage.nu0 = 1;
		}		
		
		//$('body').removeClass('ui-loading');
		UshowPerson();		
	}
	
}

function UserShowFormInit(type,location,num){
	
	$('body').addClass('ui-loading');
	
	$.getJSON("/kohana/question/"+type+"Quest/getAnswer2?id="+num,function(data){
		
		var pqlist = '<ul data-role="listview" data-inset="true">';
		
		$.each(data.Answer, function(i,user){
			if(user.display==1){
			pqlist += '<li><h5>'+user.question+'</h5>';
			pqlist += '<p style="font-family:arial;font-size:14px;">'+user.content+'</p>';
			pqlist += '</li>';
			}
		});
		pqlist += '</ul>';
		$("#"+location).html(pqlist);
		$("#"+location).trigger("create");	
		$('body').removeClass('ui-loading');
	});	
}

function UserShowInit(){

	if(sessionStorage["PMainId2"] != sessionStorage["pQnum"]){	
	var url = "/kohana/form/user/getPatient"
	$('body').addClass('ui-loading');
	$.getJSON(url,{ id: sessionStorage.pQnum},function(data){
		sessionStorage.personQ = data.Patient[0].personQ;
		sessionStorage.medicalQ = data.Patient[0].medicalQ;
		sessionStorage.environmentalQ = data.Patient[0].environmentalQ;
		sessionStorage.socialQ = data.Patient[0].socialQ;
		sessionStorage.familyQ = data.Patient[0].familyQ;
		sessionStorage.miscQ = data.Patient[0].miscQ;		
		sessionStorage["PMainId2"] = sessionStorage["pQnum"];
		getPermission();
	});	
	}//if
	else{
		$('body').addClass('ui-loading');
		getPermission();
	}
}


function UshowPerson(){
	$('#showPerson_us').show();
	$('#showMedical_us').hide();
	$('#showEnvironmental_us').hide();
	$('#showFamily_us').hide();
	$('#showSocial_us').hide();
	$('#showMisc_us').hide();
	$("#usPerson").css("background-color","#3399FF"); 
	$("#usMedical").css("background-color","transparent"); 
	$("#usEnvironment").css("background-color","transparent"); 
	$("#usFamily").css("background-color","transparent"); 
	$("#usMental").css("background-color","transparent"); 
	$("#usMisc").css("background-color","transparent"); 
}

function UshowMedical(){
	if(sessionStorage.nu1 == 0){
		UserShowFormInit("medical","showMedical_s",sessionStorage.medicalQ);
		sessionStorage.nu1 = 1;
	}
	$('#showPerson_us').hide();
	$('#showMedical_us').show();
	$('#showEnvironmental_us').hide();
	$('#showFamily_us').hide();
	$('#showSocial_us').hide();
	$('#showMisc_us').hide();
	$("#usPerson").css("background-color","transparent"); 
	$("#usMedical").css("background-color","#3399FF"); 
	$("#usEnvironment").css("background-color","transparent"); 
	$("#usFamily").css("background-color","transparent"); 
	$("#usMental").css("background-color","transparent"); 
	$("#usMisc").css("background-color","transparent");
	
}

function UshowEnvironment(){
	if(sessionStorage.nu2 == 0){
		UserShowFormInit("environmental","showEnvironmental_s",sessionStorage.environmentalQ);
		sessionStorage.nu2 = 1;
	}
	$('#showPerson_us').hide();
	$('#showMedical_us').hide();
	$('#showEnvironmental_us').show();
	$('#showFamily_us').hide();
	$('#showSocial_us').hide();
	$('#showMisc_us').hide();
	$("#usPerson").css("background-color","transparent"); 
	$("#usMedical").css("background-color","transparent"); 
	$("#usEnvironment").css("background-color","#3399FF"); 
	$("#usFamily").css("background-color","transparent"); 
	$("#usMental").css("background-color","transparent"); 
	$("#usMisc").css("background-color","transparent");
}

function UshowFamily(){
	if(sessionStorage.nu3 == 0){
		UserShowFormInit("family","showFamily_s",sessionStorage.familyQ);
		sessionStorage.nu3 = 1;
	}
	$('#showPerson_us').hide();
	$('#showMedical_us').hide();
	$('#showEnvironmental_us').hide();
	$('#showFamily_us').show();
	$('#showSocial_us').hide();
	$('#showMisc_us').hide();
	$("#usPerson").css("background-color","transparent"); 
	$("#usMedical").css("background-color","transparent"); 
	$("#usEnvironment").css("background-color","transparent"); 
	$("#usFamily").css("background-color","#3399FF"); 
	$("#usMental").css("background-color","transparent"); 
	$("#usMisc").css("background-color","transparent");
}

function UshowSocial(){
	if(sessionStorage.nu4 == 0){
		UserShowFormInit("social","showSocial_s",sessionStorage.socialQ);
		sessionStorage.nu4 = 1;
	}
	$('#showPerson_us').hide();
	$('#showMedical_us').hide();
	$('#showEnvironmental_us').hide();
	$('#showFamily_us').hide();
	$('#showSocial_us').show();
	$('#showMisc_us').hide();
	$("#usPerson").css("background-color","transparent"); 
	$("#usMedical").css("background-color","transparent"); 
	$("#usEnvironment").css("background-color","transparent"); 
	$("#usFamily").css("background-color","transparent"); 
	$("#usMental").css("background-color","#3399FF"); 
	$("#usMisc").css("background-color","transparent");
}

function UshowMisc(){
	if(sessionStorage.nu5 == 0){
		UserShowFormInit("misc","showMisc_s",sessionStorage.miscQ);
		sessionStorage.nu5 = 1;
	}
	$('#showPerson_us').hide();
	$('#showMedical_us').hide();
	$('#showEnvironmental_us').hide();
	$('#showFamily_us').hide();
	$('#showSocial_us').hide();
	$('#showMisc_us').show();
	$("#usPerson").css("background-color","transparent"); 
	$("#usMedical").css("background-color","transparent"); 
	$("#usEnvironment").css("background-color","transparent"); 
	$("#usFamily").css("background-color","transparent"); 
	$("#usMental").css("background-color","transparent"); 
	$("#usMisc").css("background-color","#3399FF");
}

function UhideAll(){
	$('#showPerson_us').hide();
	$('#showMedical_us').hide();
	$('#showEnvironmental_us').hide();
	$('#showFamily_us').hide();
	$('#showSocial_us').hide();
	$('#showMisc_us').hide();
}

