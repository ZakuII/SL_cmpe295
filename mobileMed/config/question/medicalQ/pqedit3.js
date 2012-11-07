
/*
changes text: $('input[id=some_id]').val('foobar')
changes toggle: var myswitch = $("#flip-1");myswitch[0].selectedIndex = 1;myswitch.slider("refresh");
*/

$(document).delegate('#pqEditBack3', 'click', function() {
	$.mobile.changePage("PQedit.html");
});

$("#PQedit3").live('pagebeforeshow', function(){
	
	$('body').addClass('ui-loading');
	PQ_InitEdit3();
	$('body').removeClass('ui-loading');
});

$(document).bind('pageinit', '#PQedit3',function(){
	$("#pqedit3_2_numFields, #pqedit3_2_R").change(function(){
		var radioResult = $('input[name=pqedit3_2_RC]:checked').val()
		var menuResult = $("#pqedit3_2_numFields").val();
		var menuResultInt = parseInt(menuResult);
		
		expand_personQ_e3(radioResult, menuResultInt);
	 
	});
});	


$(document).delegate('#pqEditPrevTest', 'click', function() {
	var printStr = $('#pqEditPrevForm').serialize()
		alert("form is: " + printStr);
});

$(document).delegate('#pqEditPrevConfirm', 'click', function() {
	
	if(sessionStorage.pqedit2_type == "question"){
		
		$.ajax({
			type: "POST",
			url: "/kohana/config/MedicalQuest/edit",
			data: { 
			id: sessionStorage.pqedit2_id,
			edit: "question",
			question: sessionStorage.perQQuestion}
			}).done(function( msg ) {
			alert( msg );
			$.mobile.changePage("PQedit.html");
		});
		
	}
	
	else if (sessionStorage.pqedit2_type == "all"){
		
		$.ajax({
			type: "POST",
			url: "/kohana/config/MedicalQuest/edit",
			data: { 
			id: sessionStorage.pqedit2_id,
			edit: "all",
			question: sessionStorage.perQQuestion,
			type: sessionStorage.perQType,
			numFields: sessionStorage.perQNumField,
			fieldContent: sessionStorage.perQArgField}
			}).done(function( msg ) {
			alert( msg );
			$.mobile.changePage("PQedit.html");
		});
	}
	
});

$(document).bind('pagebeforeshow', '#pqEditPrev', function(){
	
	$('body').addClass('ui-loading');
	var prevQuestObj = {
		"question": sessionStorage.perQQuestion,
		"type": sessionStorage.perQType,
		"numField": sessionStorage.perQNumField,
		"arg": sessionStorage.perQArgField
	};
	
	PrevRenderQuestion_e3(prevQuestObj);
	$('body').removeClass('ui-loading');		
});

function PQ_InitEdit3(){

	//hidePQedit3_all();
	if(sessionStorage.pqedit2_type == "question")
		showPQedit3_1();
	else if (sessionStorage.pqedit2_type == "all")
		showPQedit3_2();
}

function showPQedit3_1(){
	$('#pqedit3_1').show();
	$('#pqedit3_2').hide();
	
	var editJson = sessionStorage.pqJSON;
	var editJson2 = JSON.parse(sessionStorage.pqJSON);
	$('#pqedit3_1_Q').val(editJson2[sessionStorage.pqedit2_pos].question);
}

function showPQedit3_2(){
	$('#pqedit3_1').hide();
	$('#pqedit3_2').show();
	
	var editJson = sessionStorage.pqJSON;
	var editJson2 = JSON.parse(sessionStorage.pqJSON);
	$('#pqedit3_2_Q').val(editJson2[sessionStorage.pqedit2_pos].question);
}

function hidePQedit3_all(){
	$('#pqedit3_1').hide();
	$('#pqedit3_2').hide();
}

$(document).delegate('#pqEditPrev3', 'click', function() {
	
	if(sessionStorage.pqedit2_type == "question"){
		var textResult = $("#pqedit3_1_Q").val();
		var editJson = sessionStorage.pqJSON;
		var editJson2 = JSON.parse(sessionStorage.pqJSON);
			if(textResult==""){
				$("#pqPrevAuth_e3").html("Please Provide a Question");
			}
			else{
				sessionStorage.perQQuestion = textResult;
				sessionStorage.perQType = editJson2[sessionStorage.pqedit2_pos].type;
				sessionStorage.perQNumField = editJson2[sessionStorage.pqedit2_pos].numFields;
				sessionStorage.perQArgField = editJson2[sessionStorage.pqedit2_pos].fieldContent;
				$.mobile.changePage("pqEditPrev.html");
			}
	}
	
	else if (sessionStorage.pqedit2_type == "all"){
		var radioResult = $('input[name=pqedit3_2_RC]:checked').val()
		var textResult = $("#pqedit3_2_Q").val();
		var menuResult = $("#pqedit3_2_numFields").val();
		var menuResultInt = parseInt(menuResult);
		
		var prevResult = PrevBtnCheck_e3(textResult,radioResult,menuResultInt);
		
		if(prevResult.prevBtnChkOutCnt<1){
		
			sessionStorage.perQQuestion = textResult;
			sessionStorage.perQType = radioResult;
			sessionStorage.perQNumField = menuResultInt;
			sessionStorage.perQArgField = prevResult.perQuestArgStr;
			$.mobile.changePage("pqEditPrev.html");
		}
		else{
			$("#pqPrevAuth_e3").html(prevResult.prevBtnChkOutStr + prevResult.prevBtnChkOutCnt);
		}
	
	}
});

function PrevRenderQuestion_e3(prevQuestObj){
	
	var pqRenCnt,pqRenCnt2;
	var prevRenOut = '<h4>'+ prevQuestObj.question +'<\h4><div data-role="fieldcontain">';
	
	var pQRenArgSplit, pQRenArgSplit2,pQRenArgSplit3;	
	   
	if(prevQuestObj.type=="text"){
		pQRenArgSplit = prevQuestObj.arg.split("|");
		
		for(pqRenCnt=0; pqRenCnt<prevQuestObj.numField; pqRenCnt++){
			pQRenArgSplit2 = pQRenArgSplit[pqRenCnt].split(":");
			prevRenOut += '<label for="PqPvRen'+ pqRenCnt +'">'+ pQRenArgSplit2[1] +'</label>';
			prevRenOut += '<input type="text" name="PqPvRen'+ pqRenCnt +'" id="PqPvRen'+ pqRenCnt +'" value=""/>';
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
				
				prevRenOut+= '<input type="radio" name="perQRend'+pqRenCnt+'" id="perQRend'+pqRenCnt+"x"+pqRenCnt2+'" value="'+pQRenArgSplit3[pqRenCnt2]+'"/>';
			    prevRenOut+= '<label for="perQRend'+pqRenCnt+"x"+pqRenCnt2+'">'+pQRenArgSplit3[pqRenCnt2]+'</label>';
				
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
				
				prevRenOut+= '<input type="checkbox" name="perQRend'+pqRenCnt+'[]" id="perQRend'+pqRenCnt+"x"+pqRenCnt2+'" value="'+pQRenArgSplit3[pqRenCnt2]+'"/>';
			    prevRenOut+= '<label for="perQRend'+pqRenCnt+"x"+pqRenCnt2+'">'+pQRenArgSplit3[pqRenCnt2]+'</label>';
				
				}
			prevRenOut+='</fieldset>';
		}
	}//else if checkbox
	
	else if(prevQuestObj.type=="menu"){
		pQRenArgSplit = prevQuestObj.arg.split("|");	
		
		for(pqRenCnt=0; pqRenCnt<prevQuestObj.numField; pqRenCnt++){
		
			pQRenArgSplit2 = pQRenArgSplit[pqRenCnt].split(":");
			pQRenArgSplit3 = pQRenArgSplit2[2].split(",");
			prevRenOut+='<label for="menufields'+ pqRenCnt +'">'+ pQRenArgSplit2[1] +'</label>';
			prevRenOut+= '<select name="menufields'+ pqRenCnt +'" id="menufields'+ pqRenCnt +'" data-native-menu="true">';
				
	
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
			prevRenOut+='<label for="flip'+ pqRenCnt +'">'+ pQRenArgSplit2[1] +'</label>';
			
			prevRenOut+= '<select name="flip'+ pqRenCnt +'" id="flip'+ pqRenCnt +'" data-role="slider">';
				
	
				for(pqRenCnt2=0;pqRenCnt2 < pQRenArgSplit3.length;pqRenCnt2++){
				
				prevRenOut+= '<option value="'+pQRenArgSplit3[pqRenCnt2]+'">'+pQRenArgSplit3[pqRenCnt2]+'</option>';
				
				}
			prevRenOut+='</select>';
		}
	}//else if toggle
	
	prevRenOut += '</div>';
	$("#pqEditPrevRender").html(prevRenOut);
	//$("#pqlog").html(logging);
	$("#pqEditPrevRender").trigger( "create");
}

function expand_personQ_e3(radioResult, menuResultInt){
	
	var pOutStr,pOutStrTemp,pOutStrTemp2,pqi;
			
	if(menuResultInt != 0){
		if(radioResult == "text"){
			pOutStr = "New Text Field Configuration </br> *Note* </br>";
			pOutStr = pOutStr + "1) Enter name of Argument Field in the \"Field Name\" section (Can be blank)</br>";
			pOutStr = pOutStr + "<div data-role=\"fieldcontain\">"
			for(pqi = 1; pqi < menuResultInt+1; pqi++){
				pOutStrTemp = "<label for=\"expand_personQField"+ pqi +"\">Field Name " + pqi +"</label>";
				pOutStrTemp = pOutStrTemp + "<input type=\"text\" name=\"expand_personQField" + pqi + "\" id=\"expand_personQField"+ pqi + "\" value=\"\"  /> </br>";
				pOutStr = pOutStr + pOutStrTemp;
			}
			pOutStr = pOutStr + "</div>";
		}
		
		else if(radioResult == "radio"){
			pOutStr = "New Radio Field Configuration </br> *Note* </br>";
			pOutStr = pOutStr + "1) Enter name of Argument Field in the \"Field Name\" section (Can be blank)</br>";
			pOutStr = pOutStr + "2) Enter name of Arguments Field in the \"Field Argument\" section</br>";
			pOutStr = pOutStr + "Using the Syntax: arg1,arg2,arg3,... </br>";
			pOutStr = pOutStr + "<div data-role=\"fieldcontain\">"
			for(pqi = 1; pqi < menuResultInt+1; pqi++){
				pOutStrTemp = "<label for=\"expand_personQField"+ pqi +"\">Field Name " + pqi +"</label>"
				pOutStrTemp = pOutStrTemp + "<input type=\"text\" name=\"expand_personQField" + pqi + "\" id=\"expand_personQField"+ pqi + "\" value=\"\"  /> </br>";
				pOutStrTemp2 = "<label for=\"expand_personQFieldArg"+ pqi +"\">Field Arguments " + pqi +"</label>"
				pOutStrTemp2 = pOutStrTemp2 + "<input type=\"text\" name=\"expand_personQFieldArg" + pqi +  "\" id=\"expand_personQFieldArg"+ pqi + "\" value=\"\"  /> </br>";
				pOutStr = pOutStr + pOutStrTemp + pOutStrTemp2;
			}
			pOutStr = pOutStr + "</div>";
		}
		
		else if(radioResult == "checkbox"){
			pOutStr = "New Check Box Field Configuration </br> *Note* </br>";
			pOutStr = pOutStr + "1) Enter name of Argument Field in the \"Field Name\" section (Can be blank)</br>";
			pOutStr = pOutStr + "2) Enter name of Arguments Field in the \"Field Argument\" section</br>";
			pOutStr = pOutStr + "Using the Syntax: arg1,arg2,arg3,... </br>";
			pOutStr = pOutStr + "<div data-role=\"fieldcontain\">"
			for(pqi = 1; pqi < menuResultInt+1; pqi++){
				pOutStrTemp = "<label for=\"expand_personQField"+ pqi +"\">Field Name " + pqi +"</label>"
				pOutStrTemp = pOutStrTemp + "<input type=\"text\" name=\"expand_personQField" + pqi + "\" id=\"expand_personQField"+ pqi + "\" value=\"\"  /> </br>";
				pOutStrTemp2 = "<label for=\"expand_personQFieldArg"+ pqi +"\">Field Arguments " + pqi +"</label>"
				pOutStrTemp2 = pOutStrTemp2 + "<input type=\"text\" name=\"expand_personQFieldArg" + pqi +  "\" id=\"expand_personQFieldArg"+ pqi + "\" value=\"\"  /> </br>";
				pOutStr = pOutStr + pOutStrTemp + pOutStrTemp2;
			}
			pOutStr = pOutStr + "</div>";
		}
		
		else if(radioResult == "menu"){
			pOutStr = "New Menu Field Configuration </br> *Note* </br>";
			pOutStr = pOutStr + "1) Enter name of Argument Field in the \"Field Name\" section (Can be blank)</br>";
			pOutStr = pOutStr + "2) Enter name of Arguments Field in the \"Field Argument\" section</br>";
			pOutStr = pOutStr + "Using the Syntax: arg1,arg2,arg3,... </br>";
			pOutStr = pOutStr + "<div data-role=\"fieldcontain\">"
			for(pqi = 1; pqi < menuResultInt+1; pqi++){
				pOutStrTemp = "<label for=\"expand_personQField"+ pqi +"\">Field Name " + pqi +"</label>"
				pOutStrTemp = pOutStrTemp + "<input type=\"text\" name=\"expand_personQField" + pqi + "\" id=\"expand_personQField"+ pqi + "\" value=\"\"  /> </br>";
				pOutStrTemp2 = "<label for=\"expand_personQFieldArg"+ pqi +"\">Field Arguments " + pqi +"</label>"
				pOutStrTemp2 = pOutStrTemp2 + "<input type=\"text\" name=\"expand_personQFieldArg" + pqi +  "\" id=\"expand_personQFieldArg"+ pqi + "\" value=\"\"  /> </br>";
				pOutStr = pOutStr + pOutStrTemp + pOutStrTemp2;
			}
			pOutStr = pOutStr + "</div>";
		}
		
		else if(radioResult == "toggle"){
			pOutStr = "New Toggle Field Configuration </br> *Note* </br>";
			pOutStr = pOutStr + "1) Enter name of Argument Field in the \"Field Name\" section (Can be blank)</br>";
			pOutStr = pOutStr + "2) Enter name of Arguments Field in the \"Field Argument\" section (Give two)</br>";
			pOutStr = pOutStr + "Using the Syntax: arg1,arg2 </br>";
			pOutStr = pOutStr + "<div data-role=\"fieldcontain\">"
			for(pqi = 1; pqi < menuResultInt+1; pqi++){
				pOutStrTemp = "<label for=\"expand_personQField"+ pqi +"\">Field Name " + pqi +"</label>"
				pOutStrTemp = pOutStrTemp + "<input type=\"text\" name=\"expand_personQField" + pqi + "\" id=\"expand_personQField"+ pqi + "\" value=\"\"  /> </br>";
				pOutStrTemp2 = "<label for=\"expand_personQFieldArg"+ pqi +"\">Field Arguments " + pqi +"</label>"
				pOutStrTemp2 = pOutStrTemp2 + "<input type=\"text\" name=\"expand_personQFieldArg" + pqi +  "\" id=\"expand_personQFieldArg"+ pqi + "\" value=\"\"  /> </br>";
				pOutStr = pOutStr + pOutStrTemp + pOutStrTemp2;
			}
			pOutStr = pOutStr + "</div>";
		}
		$("#pqedit3_2_more").html(pOutStr);
		$("#pqedit3_2_more").trigger( "create" );
	}
}

function PrevBtnCheck_e3(textResult,radioResult,menuResultInt){

	var prevBtnChkOutStr = "Please Review the Following:</br>";
	var prevBtnChkOutCnt = 0;
	var PrevBtnCheckCounter, PrevBtnCheckTemp, PrevBtnCheckFieldTemp, PrevBtnCheckArgTemp;
	var perQuestArgStr ="";
	
	if(textResult==""){
		prevBtnChkOutStr = prevBtnChkOutStr + "-Question Field </br>";
		prevBtnChkOutCnt++;
	}
	if(menuResultInt<1){
		prevBtnChkOutStr = prevBtnChkOutStr + "-Select Number of Field </br>";
		prevBtnChkOutCnt++;
	}
	
	else if(menuResultInt>=1){
	
		for(PrevBtnCheckCounter = 1;PrevBtnCheckCounter < menuResultInt + 1; PrevBtnCheckCounter++){
			PrevBtnCheckTemp = "#expand_personQField" + PrevBtnCheckCounter;
			PrevBtnCheckFieldTemp = $(PrevBtnCheckTemp).val();
			
			if(radioResult=="text"){
				if(perQuestArgStr == ""){
						perQuestArgStr += PrevBtnCheckCounter + ":" + PrevBtnCheckFieldTemp;
					}
				else{
						perQuestArgStr += "|" + PrevBtnCheckCounter + ":" + PrevBtnCheckFieldTemp;
					}
			}//if
			
			else{
				PrevBtnCheckTemp = "#expand_personQFieldArg" + PrevBtnCheckCounter;
				PrevBtnCheckArgTemp = $(PrevBtnCheckTemp).val();
			
				if(PrevBtnCheckArgTemp==""){
					prevBtnChkOutStr += "-Arguement Field [" + PrevBtnCheckCounter + "] is blank</br>";
					prevBtnChkOutCnt++;
				}
				
				else{
					var pQArgSplitResult = PrevBtnCheckArgTemp.split(",");
					if(radioResult=="toggle"){				
						if(pQArgSplitResult.length!=2){
							prevBtnChkOutStr += "-Arguement Field [" + PrevBtnCheckCounter + "] does not have 2 arguments</br>";
							prevBtnChkOutCnt++;
						}
					}
				
					if(perQuestArgStr == ""){
						perQuestArgStr += PrevBtnCheckCounter + ":" + PrevBtnCheckFieldTemp + ":" + PrevBtnCheckArgTemp;
					}
					else{
						perQuestArgStr += "|" + PrevBtnCheckCounter + ":" + PrevBtnCheckFieldTemp + ":" + PrevBtnCheckArgTemp;
					}//else
				}//else
			}//else
		}//for
	}//else if
	
	return {
        prevBtnChkOutCnt: prevBtnChkOutCnt, 
		prevBtnChkOutStr: prevBtnChkOutStr,
		perQuestArgStr: perQuestArgStr
    };  
}

