//$("#editUser").live('pageshow', function(){	
$("#editUser").live('pageinit', function(){	
	editUserInit();
	sessionStorage.nu1 = 0;
	sessionStorage.nu2 = 0;
	sessionStorage.nu3 = 0;
	sessionStorage.nu4 = 0;
	sessionStorage.nu5 = 0;
});

$(document).delegate('#enbPerson', 'click', function() {
	showPerson_e();
});

$(document).delegate('#enbMedical', 'click', function() {
	showMedical_e();
});

$(document).delegate('#enbEnvironment', 'click', function() {
	showEnvironment_e();
});

$(document).delegate('#enbFamily', 'click', function() {
	showFamily_e();
});

$(document).delegate('#enbMental', 'click', function() {
	showSocial_e();
});

$(document).delegate('#enbMisc', 'click', function() {
	showMisc_e();
});

$(document).delegate('#enbDone', 'click', function() {
	showDone_e();
});

//------------buttons

$(document).delegate('#nfpersonConfirm-e', 'click', function() {
	var printStr = $('#perfPForm-e').serialize();
	alert("perfPForm form is: " + printStr);
});

$(document).delegate('#nffamilyConfirm-e', 'click', function() {
	var printStr = $('#famfPForm-e').serialize();
	alert("famfPForm form is: " + printStr);
});

$(document).delegate('#nfmedicalConfirm-e', 'click', function() {
	var printStr = $('#medfPForm-e').serialize();
	alert("medfPForm form is: " + printStr);
});

$(document).delegate('#nfmiscConfirm-e', 'click', function() {
	var printStr = $('#miscfPForm-e').serialize();
	alert("miscfPForm form is: " + printStr);
});

$(document).delegate('#nfsocialConfirm-e', 'click', function() {
	var printStr = $('#menfPForm-e').serialize();
	alert("menfPForm form is: " + printStr);
});

$(document).delegate('#nfenvironmentalConfirm-e', 'click', function() {
	var printStr = $('#envfPForm-e').serialize();
	alert("envfPForm form is: " + printStr);
});

$(document).delegate('#nfpersonNext-e', 'click', function() {
	showMedical_e();
});

$(document).delegate('#nffamilyNext-e', 'click', function() {
	showSocial_e();
});

$(document).delegate('#nfmedicalNext-e', 'click', function() {
	showEnvironment_e();
});

$(document).delegate('#nfmiscNext-e', 'click', function() {
	showDone_e();
});

$(document).delegate('#nfsocialNext-e', 'click', function() {
	showMisc_e();
});

$(document).delegate('#nfenvironmentalNext-e', 'click', function() {
	showFamily_e();
});

$(document).delegate('#doneSubmit-e', 'click', function() {
	var flag = 0;
	var showStr="Please Provide Answers for the following Sections: </br>";
	var printStr = $('#perfPForm-e').serialize();
	var printStr2 = $('#famfPForm-e').serialize();
	var printStr3 = $('#medfPForm-e').serialize();
	var printStr4 = $('#miscfPForm-e').serialize();
	var printStr5 = $('#menfPForm-e').serialize();
	var printStr6 = $('#envfPForm-e').serialize();
	if(printStr==""){
		showStr+="-Personal Questions</br>"
		flag=1;
	}
	if(printStr2==""){
		showStr+="-Family Questions</br>"
		flag=1;
	}
	if(printStr3==""){
		showStr+="-Medical Questions</br>"
		flag=1;
	}
	if(printStr4==""){
		showStr+="-Miscellanous Questions</br>"
		flag=1;
	}
	if(printStr5==""){
		showStr+="-Social Questions</br>"
		flag=1;
	}
	if(printStr6==""){
		showStr+="-Environmental Questions</br>"
		flag=1;
	}
	
	if(flag==0){
		$("#nUDoneDisplay-e").html("");
		var sendStr = printStr+'&'+printStr2+'&'+printStr3+'&'+printStr4+'&'+printStr5+'&'+printStr6+'&patID='+sessionStorage.pQnum;
		
		$('body').addClass('ui-loading');
		$.ajax({
			type: "POST",
			url: "/kohana/form/user/store",
			data: sendStr
		}).done(function( msg ) {
			$('body').removeClass('ui-loading');
			alert( "Data Saved: " + msg );
			showFinish_e();
			//
			//--------------------add redirect and timer here
			//
		});
		
	}
	else{
	$("#nUDoneDisplay-e").html(showStr);
	}
});

//-----------buttons end

function editUserInit(){	
		
	var url = "/kohana/form/user/getPatient"
	
	$.getJSON(url,{ id: sessionStorage.pQnum},function(data){
		sessionStorage.personQ = data.Patient[0].personQ;
		sessionStorage.medicalQ = data.Patient[0].medicalQ;
		sessionStorage.environmentalQ = data.Patient[0].environmentalQ;
		sessionStorage.socialQ = data.Patient[0].socialQ;
		sessionStorage.familyQ = data.Patient[0].familyQ;
		sessionStorage.miscQ = data.Patient[0].miscQ;
		EditUserFormInit("person","perfPDisplay-e","p",sessionStorage.personQ);
		showPerson_e();
	});
}

function showPerson_e(){
	$('#perfPersonal-e').show();
	$('#medfPersonal-e').hide();
	$('#envfPersonal-e').hide();
	$('#famfPersonal-e').hide();
	$('#menfPersonal-e').hide();
	$('#miscfPersonal-e').hide();
	$('#newUserDone-e').hide();
	$('#newUserFinish-e').hide();
}

function showMedical_e(){
	if(sessionStorage.nu1 == 0){
		EditUserFormInit("medical","medfPDisplay-e","m",sessionStorage.medicalQ);
		sessionStorage.nu1 = 1;
	}
	$('#perfPersonal-e').hide();
	$('#medfPersonal-e').show();
	$('#envfPersonal-e').hide();
	$('#famfPersonal-e').hide();
	$('#menfPersonal-e').hide();
	$('#miscfPersonal-e').hide();
	$('#newUserDone-e').hide();
	$('#newUserFinish-e').hide();
}

function showEnvironment_e(){
	if(sessionStorage.nu2 == 0){
		EditUserFormInit("environmental","envfPDisplay-e","e",sessionStorage.environmentalQ);
		sessionStorage.nu2 = 1;
	}
	$('#perfPersonal-e').hide();
	$('#medfPersonal-e').hide();
	$('#envfPersonal-e').show();
	$('#famfPersonal-e').hide();
	$('#menfPersonal-e').hide();
	$('#miscfPersonal-e').hide();
	$('#newUserDone-e').hide();
	$('#newUserFinish-e').hide();
}

function showFamily_e(){
	if(sessionStorage.nu3 == 0){
		EditUserFormInit("family","famfPDisplay-e","f",sessionStorage.familyQ);
		sessionStorage.nu3 = 1;
	}
	$('#perfPersonal-e').hide();
	$('#medfPersonal-e').hide();
	$('#envfPersonal-e').hide();
	$('#famfPersonal-e').show();
	$('#menfPersonal-e').hide();
	$('#miscfPersonal-e').hide();
	$('#newUserDone-e').hide();
	$('#newUserFinish-e').hide();
}

function showSocial_e(){
	if(sessionStorage.nu4 == 0){
		EditUserFormInit("social","menfPDisplay-e","s",sessionStorage.socialQ);
		sessionStorage.nu4 = 1;
	}
	$('#perfPersonal-e').hide();
	$('#medfPersonal-e').hide();
	$('#envfPersonal-e').hide();
	$('#famfPersonal-e').hide();
	$('#menfPersonal-e').show();
	$('#miscfPersonal-e').hide();
	$('#newUserDone-e').hide();
	$('#newUserFinish-e').hide();
}

function showMisc_e(){
	if(sessionStorage.nu5 == 0){
		EditUserFormInit("misc","miscfPDisplay-e","x",sessionStorage.miscQ);
		sessionStorage.nu5 = 1;
	}
	$('#perfPersonal-e').hide();
	$('#medfPersonal-e').hide();
	$('#envfPersonal-e').hide();
	$('#famfPersonal-e').hide();
	$('#menfPersonal-e').hide();
	$('#miscfPersonal-e').show();
	$('#newUserDone-e').hide();
	$('#newUserFinish-e').hide();
}

function showDone_e(){
	$('#perfPersonal-e').hide();
	$('#medfPersonal-e').hide();
	$('#envfPersonal-e').hide();
	$('#famfPersonal-e').hide();
	$('#menfPersonal-e').hide();
	$('#miscfPersonal-e').hide();
	$('#newUserDone-e').show();
	$('#newUserFinish-e').hide();
}
function showFinish_e(){
	$('#perfPersonal-e').hide();
	$('#medfPersonal-e').hide();
	$('#envfPersonal-e').hide();
	$('#famfPersonal-e').hide();
	$('#menfPersonal-e').hide();
	$('#miscfPersonal-e').hide();
	$('#newUserDone-e').hide();
	$('#newUserFinish-e').show();
}

/*
function RenderPerQuestion_F(prevQuestObj,prefix){

	var pqRenCnt,pqRenCnt2;
	var prevRenOut = '<li data-role="fieldcontain">'+'<h4>'+ prevQuestObj.question +'</h4>';
	
	var pQRenArgSplit, pQRenArgSplit2,pQRenArgSplit3;
	var pQPrefix = prefix + '_' + prevQuestObj.id + '_'; 
	   
	if(prevQuestObj.type=="text"){
		pQRenArgSplit = prevQuestObj.arg.split("|");
		
		for(pqRenCnt=0; pqRenCnt<prevQuestObj.numField; pqRenCnt++){
			pQRenArgSplit2 = pQRenArgSplit[pqRenCnt].split(":");
			prevRenOut += '<label for="'+ pQPrefix + pqRenCnt +'">'+ pQRenArgSplit2[1] +'</label>';
			prevRenOut += '<input type="text" name="'+ pQPrefix + pqRenCnt +'" id="'+ pQPrefix + pqRenCnt +'" value=""/>';
		}
	}//if text
	
	else if(prevQuestObj.type=="radio"){
		pQRenArgSplit = prevQuestObj.arg.split("|");	
		
		for(pqRenCnt=0; pqRenCnt<prevQuestObj.numField; pqRenCnt++){
		
			prevRenOut+='<fieldset data-role="controlgroup" data-type="horizontal" id="prev-radio'+pqRenCnt+'">';
			pQRenArgSplit2 = pQRenArgSplit[pqRenCnt].split(":");
			prevRenOut+='<legend>'+pQRenArgSplit2[1]+'</legend>';
			pQRenArgSplit3 = pQRenArgSplit2[2].split(",");
				
				for(pqRenCnt2=0;pqRenCnt2 < pQRenArgSplit3.length;pqRenCnt2++){
					
				prevRenOut+= '<input type="radio" name="'+ pQPrefix +pqRenCnt+'" id="'+ pQPrefix+pqRenCnt+"x"+pqRenCnt2+'" value="'+pQRenArgSplit3[pqRenCnt2]+'"/>';
			    prevRenOut+= '<label for="'+ pQPrefix+pqRenCnt+"x"+pqRenCnt2+'">'+pQRenArgSplit3[pqRenCnt2]+'</label>';
				
				}
			prevRenOut+='</fieldset>';
		}
	}//else if radio
	
	else if(prevQuestObj.type=="checkbox"){
		pQRenArgSplit = prevQuestObj.arg.split("|");	
		
		for(pqRenCnt=0; pqRenCnt<prevQuestObj.numField; pqRenCnt++){
		
			prevRenOut+='<fieldset data-role="controlgroup" data-type="horizontal" id="prev-check'+pqRenCnt+'">';
			pQRenArgSplit2 = pQRenArgSplit[pqRenCnt].split(":");
			prevRenOut+='<legend>'+pQRenArgSplit2[1]+'</legend>';
			pQRenArgSplit3 = pQRenArgSplit2[2].split(",");
				
				for(pqRenCnt2=0;pqRenCnt2 < pQRenArgSplit3.length;pqRenCnt2++){
				
				prevRenOut+= '<input type="checkbox" name="'+ pQPrefix+pqRenCnt+'[]" id="'+ pQPrefix+pqRenCnt+"x"+pqRenCnt2+'" value="'+pQRenArgSplit3[pqRenCnt2]+'"/>';
			    prevRenOut+= '<label for="'+ pQPrefix+pqRenCnt+"x"+pqRenCnt2+'">'+pQRenArgSplit3[pqRenCnt2]+'</label>';
				
				}
			prevRenOut+='</fieldset>';
		}
	}//else if checkbox
	
	else if(prevQuestObj.type=="menu"){
		pQRenArgSplit = prevQuestObj.arg.split("|");	
		
		for(pqRenCnt=0; pqRenCnt<prevQuestObj.numField; pqRenCnt++){
		
			pQRenArgSplit2 = pQRenArgSplit[pqRenCnt].split(":");
			pQRenArgSplit3 = pQRenArgSplit2[2].split(",");
			prevRenOut+='<label for="'+ pQPrefix+ pqRenCnt +'">'+ pQRenArgSplit2[1] +'</label>';
			prevRenOut+= '<select name="'+ pQPrefix+ pqRenCnt +'" id="'+ pQPrefix+ pqRenCnt +'" data-native-menu="true">';
				
	
				for(pqRenCnt2=0;pqRenCnt2 < pQRenArgSplit3.length;pqRenCnt2++){
				
				prevRenOut+= '<option value="'+pQRenArgSplit3[pqRenCnt2]+'">'+pQRenArgSplit3[pqRenCnt2]+'</option>';
				
				}
			prevRenOut+='</select>';
		}
		
	}//else if menu
	
	else if(prevQuestObj.type=="toggle"){
		pQRenArgSplit = prevQuestObj.arg.split("|");	
		
		for(pqRenCnt=0; pqRenCnt<prevQuestObj.numField; pqRenCnt++){
		
			pQRenArgSplit2 = pQRenArgSplit[pqRenCnt].split(":");
			pQRenArgSplit3 = pQRenArgSplit2[2].split(",");
			prevRenOut+='<label for="'+ pQPrefix+ pqRenCnt +'">'+ pQRenArgSplit2[1] +'</label>';
			
			prevRenOut+= '<select name="'+ pQPrefix+ pqRenCnt +'" id="'+ pQPrefix+ pqRenCnt +'" data-role="slider">';
				
	
				for(pqRenCnt2=0;pqRenCnt2 < pQRenArgSplit3.length;pqRenCnt2++){
				
				prevRenOut+= '<option value="'+pQRenArgSplit3[pqRenCnt2]+'">'+pQRenArgSplit3[pqRenCnt2]+'</option>';
				
				}
			prevRenOut+='</select>';
		}
	}//else if toggle
	
	prevRenOut += '</li>';
	return prevRenOut;
}*/

function EditUserFormInit(type,location,abrev,num){
		
	$('body').addClass('ui-loading');
	var url = "/kohana/question/"+type+"Quest2/getEdit?id="+num;
	$.getJSON(url,function(data){
		
		var pqIDsave="";
		var pqCntSave="";
		var pqLength = data.Question.length;
		var pqLenCount = 0;
		var prefix = abrev+'q';
		var showStr = '<ul data-role="listview">';
		$.each(data.Question, function(i,user){
			if(user.display==1){
				var prevQuestObj = {
					"id": user.id,
					"question": user.question,
					"type": user.type,
					"numField": user.numFields,
					"arg": user.fieldContent,
					"answer": user.answer
				};
				if(pqLenCount>0){
					pqIDsave+=",";
					pqCntSave+=",";
				}
				pqIDsave+=user.id;
				pqCntSave+=user.numFields;
				if(user.type=="checkbox"){
					pqCntSave+=":c";
				}
				showStr += RenderPerQuestion_Edit2(prevQuestObj,prefix);
				pqLenCount++;
			}
		});
		showStr += '<input type="hidden" name="'+prefix+'ID" id="'+prefix+'ID" value="'+ pqIDsave +'" />';
		showStr += '<input type="hidden" name="'+prefix+'Cnt" id="'+prefix+'Cnt" value="'+ pqCntSave +'" />';
		showStr += '<li><input type="button" data-inline="true" value="Confirm" id="nf'+type+'Confirm-e"/>';
		showStr += '<input type="button" data-inline="true" value="Next" id="nf'+type+'Next-e"/>';
		showStr += '<input type="button" data-inline="true" value="Submit" id="nf'+type+'Submit-e"/></li>';
		showStr += '</ul>';
		$("#"+location).append(showStr);
		$("#"+location).trigger("create");
		
		$('body').removeClass('ui-loading');
	});	
}


function RenderPerQuestion_Edit2(prevQuestObj,prefix){	

	var pqRenCnt,pqRenCnt2;
	var prevRenOut = '<li data-role="fieldcontain">'+'<h4>'+ prevQuestObj.question +'</h4>';
	
	var pQRenArgSplit, pQRenArgSplit2,pQRenArgSplit3;
	//var pQPrefix = 'pq_' + prevQuestObj.id + '_'; 
	var pQPrefix = prefix + '_' + prevQuestObj.id + '_'; 
	   
	if(prevQuestObj.type=="text"){
		pQRenArgSplit = prevQuestObj.arg.split("|");
		PQAnswerSplit = prevQuestObj.answer.split("|");
		
		for(pqRenCnt=0; pqRenCnt<prevQuestObj.numField; pqRenCnt++){
			pQRenArgSplit2 = pQRenArgSplit[pqRenCnt].split(":");
			prevRenOut += '<label for="'+ pQPrefix + pqRenCnt +'">'+ pQRenArgSplit2[1] +'</label>';
			if(PQAnswerSplit[pqRenCnt]=="" || PQAnswerSplit == ""){
			prevRenOut += '<input type="text" name="'+ pQPrefix + pqRenCnt +'" id="'+ pQPrefix + pqRenCnt +'" value=""/>';
			}
			else{
			prevRenOut += '<input type="text" name="'+ pQPrefix + pqRenCnt +'" id="'+ pQPrefix + pqRenCnt +'" value="'+PQAnswerSplit[pqRenCnt]+'"/>';
			}
		}
	}//if text
	
	else if(prevQuestObj.type=="radio"){
		pQRenArgSplit = prevQuestObj.arg.split("|");	
		PQAnswerSplit = prevQuestObj.answer.split("|");
		
		//print fields
		for(pqRenCnt=0; pqRenCnt<prevQuestObj.numField; pqRenCnt++){
		
			prevRenOut+='<fieldset data-role="controlgroup" data-type="horizontal" id="prev-radio'+pqRenCnt+'">';
			pQRenArgSplit2 = pQRenArgSplit[pqRenCnt].split(":");
			prevRenOut+='<legend>'+pQRenArgSplit2[1]+'</legend>';
			pQRenArgSplit3 = pQRenArgSplit2[2].split(",");
			PQAnswerSplit2 = PQAnswerSplit[pqRenCnt];
			if(typeof PQAnswerSplit2 === "undefined"){
				PQAnswerSplit2 = "";
			}
			
				for(pqRenCnt2=0;pqRenCnt2 < pQRenArgSplit3.length;pqRenCnt2++){
					
					if(pQRenArgSplit3[pqRenCnt2] == PQAnswerSplit2){
						prevRenOut+= '<input type="radio" name="'+ pQPrefix +pqRenCnt+'" id="'+ pQPrefix+pqRenCnt+"x"+pqRenCnt2+'" value="'+pQRenArgSplit3[pqRenCnt2]+'" checked="checked"/>';
					}
					else{
						prevRenOut+= '<input type="radio" name="'+ pQPrefix +pqRenCnt+'" id="'+ pQPrefix+pqRenCnt+"x"+pqRenCnt2+'" value="'+pQRenArgSplit3[pqRenCnt2]+'"/>';
					}
					prevRenOut+= '<label for="'+ pQPrefix+pqRenCnt+"x"+pqRenCnt2+'">'+pQRenArgSplit3[pqRenCnt2]+'</label>';
				
				}
			prevRenOut+='</fieldset>';
		}
	}//else if radio
	
	else if(prevQuestObj.type=="checkbox"){
		pQRenArgSplit = prevQuestObj.arg.split("|");	
		PQAnswerSplit = prevQuestObj.answer.split("|");
		
		for(pqRenCnt=0; pqRenCnt<prevQuestObj.numField; pqRenCnt++){
		
			prevRenOut+='<fieldset data-role="controlgroup" data-type="horizontal" id="prev-check'+pqRenCnt+'">';
			pQRenArgSplit2 = pQRenArgSplit[pqRenCnt].split(":");
			prevRenOut+='<legend>'+pQRenArgSplit2[1]+'</legend>';
			pQRenArgSplit3 = pQRenArgSplit2[2].split(",");			
			PQAnswerSplit2 = PQAnswerSplit[pqRenCnt];
			if(typeof PQAnswerSplit2 === "undefined"){
				PQAnswerSplit2 = "";
			}
			PQAnswerSplit3 = PQAnswerSplit2.split(",");
			chkbxAnsTemp = 0;
			chkbxAnsTempMax = PQAnswerSplit3.length;
			
				
				for(pqRenCnt2=0;pqRenCnt2 < pQRenArgSplit3.length;pqRenCnt2++){
					
					if(pQRenArgSplit3[pqRenCnt2] == PQAnswerSplit3[chkbxAnsTemp]){
						prevRenOut+= '<input type="checkbox" name="'+ pQPrefix+pqRenCnt+'[]" id="'+ pQPrefix+pqRenCnt+"x"+pqRenCnt2+'" value="'+pQRenArgSplit3[pqRenCnt2]+'" checked="checked"/>';
						if(chkbxAnsTemp<chkbxAnsTempMax){
							chkbxAnsTemp++;
						}
					}
					else{
						prevRenOut+= '<input type="checkbox" name="'+ pQPrefix+pqRenCnt+'[]" id="'+ pQPrefix+pqRenCnt+"x"+pqRenCnt2+'" value="'+pQRenArgSplit3[pqRenCnt2]+'"/>';
					}
					prevRenOut+= '<label for="'+ pQPrefix+pqRenCnt+"x"+pqRenCnt2+'">'+pQRenArgSplit3[pqRenCnt2]+'</label>';
				
				}
			prevRenOut+='</fieldset>';
		}
	}//else if checkbox
	
	else if(prevQuestObj.type=="menu"){
		pQRenArgSplit = prevQuestObj.arg.split("|");
		PQAnswerSplit = prevQuestObj.answer.split("|");		
		
		for(pqRenCnt=0; pqRenCnt<prevQuestObj.numField; pqRenCnt++){
		
			pQRenArgSplit2 = pQRenArgSplit[pqRenCnt].split(":");
			pQRenArgSplit3 = pQRenArgSplit2[2].split(",");
			prevRenOut+='<label for="'+ pQPrefix+ pqRenCnt +'">'+ pQRenArgSplit2[1] +'</label>';
			prevRenOut+= '<select name="'+ pQPrefix+ pqRenCnt +'" id="'+ pQPrefix+ pqRenCnt +'" data-native-menu="true">';
			PQAnswerSplit2 = PQAnswerSplit[pqRenCnt];
			if(typeof PQAnswerSplit2 === "undefined"){
				PQAnswerSplit2 = "";
			}			
	
				for(pqRenCnt2=0;pqRenCnt2 < pQRenArgSplit3.length;pqRenCnt2++){
				
					if(pQRenArgSplit3[pqRenCnt2] == PQAnswerSplit2){
						prevRenOut+= '<option value="'+pQRenArgSplit3[pqRenCnt2]+'" selected=selected>'+pQRenArgSplit3[pqRenCnt2]+'</option>';
					}
					else{
						prevRenOut+= '<option value="'+pQRenArgSplit3[pqRenCnt2]+'">'+pQRenArgSplit3[pqRenCnt2]+'</option>';
					}
				}
			prevRenOut+='</select>';
		}
		
	}//else if menu
	
	else if(prevQuestObj.type=="toggle"){
		pQRenArgSplit = prevQuestObj.arg.split("|");	
		PQAnswerSplit = prevQuestObj.answer.split("|");
		
		for(pqRenCnt=0; pqRenCnt<prevQuestObj.numField; pqRenCnt++){
		
			pQRenArgSplit2 = pQRenArgSplit[pqRenCnt].split(":");
			pQRenArgSplit3 = pQRenArgSplit2[2].split(",");
			PQAnswerSplit2 = PQAnswerSplit[pqRenCnt];
			if(typeof PQAnswerSplit2 === "undefined"){
				PQAnswerSplit2 = "";
			}
			
			prevRenOut+='<label for="'+ pQPrefix+ pqRenCnt +'">'+ pQRenArgSplit2[1] +'</label>';			
			prevRenOut+= '<select name="'+ pQPrefix+ pqRenCnt +'" id="'+ pQPrefix+ pqRenCnt +'" data-role="slider">';
					
				for(pqRenCnt2=0;pqRenCnt2 < pQRenArgSplit3.length;pqRenCnt2++){
				if(pQRenArgSplit3[pqRenCnt2] == PQAnswerSplit2){
					prevRenOut+= '<option value="'+pQRenArgSplit3[pqRenCnt2]+'" selected=selected>'+pQRenArgSplit3[pqRenCnt2]+'</option>';
				}
				else{
					prevRenOut+= '<option value="'+pQRenArgSplit3[pqRenCnt2]+'">'+pQRenArgSplit3[pqRenCnt2]+'</option>';
				}
				}
			prevRenOut+='</select>';
		}
	}//else if toggle
	
	prevRenOut += '</li>';
	return prevRenOut;
}