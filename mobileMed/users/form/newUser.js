
$("#newUser").live('pageinit', function(){	
	//newUserInit();	
	newUserInit2();
	sessionStorage.nu1 = 0;
	sessionStorage.nu2 = 0;
	sessionStorage.nu3 = 0;
	sessionStorage.nu4 = 0;
	sessionStorage.nu5 = 0;
});

$("#newUser").live('pageshow', function(){	
	//newUserInit2();	
});

$(document).delegate('#nbPerson', 'click', function() {
	showPerson();
});

$(document).delegate('#nbMedical', 'click', function() {
	showMedical();
});

$(document).delegate('#nbEnvironment', 'click', function() {
	showEnvironment();
});

$(document).delegate('#nbFamily', 'click', function() {
	showFamily();
});

$(document).delegate('#nbMental', 'click', function() {
	showSocial();
});

$(document).delegate('#nbMisc', 'click', function() {
	showMisc();
});

$(document).delegate('#nbDone', 'click', function() {
	showDone();
});

//------------buttons

$(document).delegate('#nfpersonConfirm', 'click', function() {
	var printStr = $('#perfPForm').serialize();
	alert("perfPForm form is: " + printStr);
});

$(document).delegate('#nffamilyConfirm', 'click', function() {
	var printStr = $('#famfPForm').serialize();
	alert("famfPForm form is: " + printStr);
});

$(document).delegate('#nfmedicalConfirm', 'click', function() {
	var printStr = $('#medfPForm').serialize();
	alert("medfPForm form is: " + printStr);
});

$(document).delegate('#nfmiscConfirm', 'click', function() {
	var printStr = $('#miscfPForm').serialize();
	alert("miscfPForm form is: " + printStr);
});

$(document).delegate('#nfsocialConfirm', 'click', function() {
	var printStr = $('#menfPForm').serialize();
	alert("menfPForm form is: " + printStr);
});

$(document).delegate('#nfenvironmentalConfirm', 'click', function() {
	var printStr = $('#envfPForm').serialize();
	alert("envfPForm form is: " + printStr);
});

/*
$(document).delegate('#pqDisBtnSubmit', 'click', function() {
	
	$.ajax({
		type: "POST",
		url: "/kohana/question/personQuest/post",
		data: $('#pqform').serialize()
		}).done(function( msg ) {
		alert( "Data Saved: " + msg );
		});
});*/

$(document).delegate('#nfpersonNext', 'click', function() {
	showMedical();
});

$(document).delegate('#nffamilyNext', 'click', function() {
	showSocial();
});

$(document).delegate('#nfmedicalNext', 'click', function() {
	showEnvironment();
});

$(document).delegate('#nfmiscNext', 'click', function() {
	showDone();
});

$(document).delegate('#nfsocialNext', 'click', function() {
	showMisc();
});

$(document).delegate('#nfenvironmentalNext', 'click', function() {
	showFamily();
});

$(document).delegate('#doneSubmit', 'click', function() {
	var flag = 0;
	var showStr="Please Provide Answers for the following Sections: </br>";
	var printStr = $('#perfPForm').serialize();
	var printStr2 = $('#famfPForm').serialize();
	var printStr3 = $('#medfPForm').serialize();
	var printStr4 = $('#miscfPForm').serialize();
	var printStr5 = $('#menfPForm').serialize();
	var printStr6 = $('#envfPForm').serialize();
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
	$("#nUDoneDisplay").html("");
		var sendStr = printStr+'&'+printStr2+'&'+printStr3+'&'+printStr4+'&'+printStr5+'&'+printStr6;
		//alert("submit: "+sendStr);
		
		$('body').addClass('ui-loading');
		$.ajax({
			type: "POST",
			url: "/kohana/form/user/store",
			data: sendStr
		}).done(function( msg ) {
			$('body').removeClass('ui-loading');
			alert( "Data Saved: " + msg );
			showFinish();
			//
			//--------------------add redirect and timer here
			//
		});
		
	}
	else{
	$("#nUDoneDisplay").html(showStr);
	}
});

//-----------buttons end

function newUserInit(){	
	newUserFormInit("person","perfPDisplay");
	newUserFormInit("family","famfPDisplay");
	newUserFormInit("medical","medfPDisplay");
	newUserFormInit("misc","miscfPDisplay");
	newUserFormInit("social","menfPDisplay");
	newUserFormInit("environmental","envfPDisplay");
	showPerson();
}

function newUserInit2(){	

	newUserFormInit("person","perfPDisplay","p");
	showPerson();
}

function showPerson(){
	$('#perfPersonal').show();
	$('#medfPersonal').hide();
	$('#envfPersonal').hide();
	$('#famfPersonal').hide();
	$('#menfPersonal').hide();
	$('#miscfPersonal').hide();
	$('#newUserDone').hide();
	$('#newUserFinish').hide();
}

function showMedical(){
	if(sessionStorage.nu1 == 0){
		newUserFormInit("medical","medfPDisplay","m");
		sessionStorage.nu1 = 1;
	}
	$('#perfPersonal').hide();
	$('#medfPersonal').show();
	$('#envfPersonal').hide();
	$('#famfPersonal').hide();
	$('#menfPersonal').hide();
	$('#miscfPersonal').hide();
	$('#newUserDone').hide();
	$('#newUserFinish').hide();
}

function showEnvironment(){
	if(sessionStorage.nu2 == 0){
		newUserFormInit("environmental","envfPDisplay","e");
		sessionStorage.nu2 = 1;
	}
	$('#perfPersonal').hide();
	$('#medfPersonal').hide();
	$('#envfPersonal').show();
	$('#famfPersonal').hide();
	$('#menfPersonal').hide();
	$('#miscfPersonal').hide();
	$('#newUserDone').hide();
	$('#newUserFinish').hide();
}

function showFamily(){
	if(sessionStorage.nu3 == 0){
		newUserFormInit("family","famfPDisplay","f");
		sessionStorage.nu3 = 1;
	}
	$('#perfPersonal').hide();
	$('#medfPersonal').hide();
	$('#envfPersonal').hide();
	$('#famfPersonal').show();
	$('#menfPersonal').hide();
	$('#miscfPersonal').hide();
	$('#newUserDone').hide();
	$('#newUserFinish').hide();
}

function showSocial(){
	if(sessionStorage.nu4 == 0){
		newUserFormInit("social","menfPDisplay","s");
		sessionStorage.nu4 = 1;
	}
	$('#perfPersonal').hide();
	$('#medfPersonal').hide();
	$('#envfPersonal').hide();
	$('#famfPersonal').hide();
	$('#menfPersonal').show();
	$('#miscfPersonal').hide();
	$('#newUserDone').hide();
	$('#newUserFinish').hide();
}

function showMisc(){
	if(sessionStorage.nu5 == 0){
		newUserFormInit("misc","miscfPDisplay","x");
		sessionStorage.nu5 = 1;
	}
	$('#perfPersonal').hide();
	$('#medfPersonal').hide();
	$('#envfPersonal').hide();
	$('#famfPersonal').hide();
	$('#menfPersonal').hide();
	$('#miscfPersonal').show();
	$('#newUserDone').hide();
	$('#newUserFinish').hide();
}

function showDone(){
	$('#perfPersonal').hide();
	$('#medfPersonal').hide();
	$('#envfPersonal').hide();
	$('#famfPersonal').hide();
	$('#menfPersonal').hide();
	$('#miscfPersonal').hide();
	$('#newUserDone').show();
	$('#newUserFinish').hide();
}
function showFinish(){
	$('#perfPersonal').hide();
	$('#medfPersonal').hide();
	$('#envfPersonal').hide();
	$('#famfPersonal').hide();
	$('#menfPersonal').hide();
	$('#miscfPersonal').hide();
	$('#newUserDone').hide();
	$('#newUserFinish').show();
}

function RenderPerQuestion_F(prevQuestObj,prefix){

	var pqRenCnt,pqRenCnt2;
	var prevRenOut = '<li data-role="fieldcontain">'+'<h4>'+ prevQuestObj.question +'</h4>';
	
	var pQRenArgSplit, pQRenArgSplit2,pQRenArgSplit3;
	//var pQPrefix = 'pq_' + prevQuestObj.id + '_'; 
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
}

function newUserFormInit(type,location,abrev){
	
	
	$('body').addClass('ui-loading');
	var url = "/kohana/question/"+type+"Quest/getQuestion2"
	
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
					"arg": user.fieldContent
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
				showStr += RenderPerQuestion_F(prevQuestObj,prefix);
				pqLenCount++;
			}
		});
		showStr += '<input type="hidden" name="'+prefix+'ID" id="'+prefix+'ID" value="'+ pqIDsave +'" />';
		showStr += '<input type="hidden" name="'+prefix+'Cnt" id="'+prefix+'Cnt" value="'+ pqCntSave +'" />';
		showStr += '<li><input type="button" data-inline="true" value="Confirm" id="nf'+type+'Confirm"/>';
		showStr += '<input type="button" data-inline="true" value="Next" id="nf'+type+'Next"/>';
		showStr += '<input type="button" data-inline="true" value="Submit" id="nf'+type+'Submit"/></li>';
		showStr += '</ul>';
		$("#"+location).append(showStr);
		$("#"+location).trigger("create");
		
		$('body').removeClass('ui-loading');
	});
	
}