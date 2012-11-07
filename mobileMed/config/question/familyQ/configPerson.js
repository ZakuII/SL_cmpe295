
$(document).bind("mobileinit", function () {
            //$.mobile.autoInitializePage = false;
			 $.mobile.selectmenu.prototype.options.nativeMenu = false;
});


$(document).bind('pageinit', '#PersonQuestion',function(){
	$("#numFields, #preQ-radio1").change(function(){
		var radioResult = $('input[name=perQ-radio-choice]:checked').val()
		var menuResult = $("#numFields").val();
		var menuResultInt = parseInt(menuResult);
		
		expand_personQ(radioResult, menuResultInt);
	 
	});	
});

$(document).delegate('#pqBtnPreview', 'click', function() {
		var PrevBtnOutStr = "";
		var radioResult = $('input[name=perQ-radio-choice]:checked').val()
		var textResult = $("#personQtextarea").val();
		var menuResult = $("#numFields").val();
		var menuResultInt = parseInt(menuResult);
		
		var prevResult = PrevBtnCheck(textResult,radioResult,menuResultInt);
		
		if(prevResult.prevBtnChkOutCnt<1){
			sessionStorage.perQQuestion = textResult;
			sessionStorage.perQType = radioResult;
			sessionStorage.perQNumField = menuResultInt;
			sessionStorage.perQArgField = prevResult.perQuestArgStr;
			$.mobile.changePage("PQPreview.html");
		}
		else{
			$("#pqPrevAuth").html(prevResult.prevBtnChkOutStr + prevResult.prevBtnChkOutCnt);
		}
});
	
$(document).delegate('#pqPrevTest', 'click', function() {
		var printStr = $('#pqPreview').serialize()
		alert("form is: " + printStr);
	});

$(document).delegate('#pqBtnConfirm', 'click', function() {

	$.ajax({
		type: "POST",
		url: "/kohana/config/FamilyQuest/post",
		data: { 
		question: sessionStorage.perQQuestion,
		type: sessionStorage.perQType,
		numFields: sessionStorage.perQNumField,
		fieldContent: sessionStorage.perQArgField}
		}).done(function( msg ) {
		alert( "Data Saved: " + msg );		
		$.mobile.changePage("PQedit.html");
	});
});

$(document).bind('pagebeforeshow', '#PersonQuestionPreview', function(){
	
	$('body').addClass('ui-loading');
	var prevQuestObj = {
		"question": sessionStorage.perQQuestion,
		"type": sessionStorage.perQType,
		"numField": sessionStorage.perQNumField,
		"arg": sessionStorage.perQArgField
	};
	
	PrevRenderQuestion(prevQuestObj);
	$('body').removeClass('ui-loading');		
});

function PrevRenderQuestion(prevQuestObj){
	
	var logging = "Question: " + prevQuestObj.question + " Type:" + prevQuestObj.type + " NumField" + prevQuestObj.numField + " ArgField" + prevQuestObj.arg;
	
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
	$("#pqRender").html(prevRenOut);
	$("#pqlog").html(logging);
	$("#pqRender").trigger( "create");
}

function PrevBtnCheck(textResult,radioResult,menuResultInt){

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
			}
			
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
					}
				}
			}
			//prevBtnChkOutStr += "[" + PrevBtnCheckCounter + "]: " + PrevBtnCheckFieldTemp + PrevBtnCheckArgTemp + "</br>";
			
		}
		//prevBtnChkOutStr += "[]</br>";
	}
	//$("#pqPrevAuth").html("clicked:" + prevBtnChkOutStr + prevBtnChkOutCnt);
	//$("#pqPrevAuth").html("clicked: " + textResult + radioResult + menuResultInt);
	
	return {
        prevBtnChkOutCnt: prevBtnChkOutCnt, 
		prevBtnChkOutStr: prevBtnChkOutStr,
		perQuestArgStr: perQuestArgStr
    };  
}

function expand_personQ(radioResult, menuResultInt){
	
	var pOutStr,pOutStrTemp,pOutStrTemp2,pqi;

	var testing = "<input type=\"button\" data-inline=\"true\" value=\"Preview\" />";
			
	if(menuResultInt != 0){
		if(radioResult == "text"){
			pOutStr = "New Text Field Configuration </br> *Note* </br>";
			pOutStr = pOutStr + "1) Enter name of Argument Field in the \"Field Name\" section (Can be blank)</br>";
			pOutStr = pOutStr + "<div data-role=\"fieldcontain\">"
			for(pqi = 1; pqi < menuResultInt+1; pqi++){
				pOutStrTemp = "<label for=\"expand_personQField"+ pqi +"\">Field Name " + pqi +"</label>"
				pOutStrTemp = pOutStrTemp + "<input type=\"text\" name=\"expand_personQField" + pqi + "\" id=\"expand_personQField"+ pqi + "\" value=\"\"  /> </br>"
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
				pOutStrTemp = pOutStrTemp + "<input type=\"text\" name=\"expand_personQField" + pqi + "\" id=\"expand_personQField"+ pqi + "\" value=\"\"  /> </br>"
				pOutStrTemp2 = "<label for=\"expand_personQFieldArg"+ pqi +"\">Field Arguments " + pqi +"</label>"
				pOutStrTemp2 = pOutStrTemp2 + "<input type=\"text\" name=\"expand_personQFieldArg" + pqi +  "\" id=\"expand_personQFieldArg"+ pqi + "\" value=\"\"  /> </br>"
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
				pOutStrTemp = pOutStrTemp + "<input type=\"text\" name=\"expand_personQField" + pqi + "\" id=\"expand_personQField"+ pqi + "\" value=\"\"  /> </br>"
				pOutStrTemp2 = "<label for=\"expand_personQFieldArg"+ pqi +"\">Field Arguments " + pqi +"</label>"
				pOutStrTemp2 = pOutStrTemp2 + "<input type=\"text\" name=\"expand_personQFieldArg" + pqi +  "\" id=\"expand_personQFieldArg"+ pqi + "\" value=\"\"  /> </br>"
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
				pOutStrTemp = pOutStrTemp + "<input type=\"text\" name=\"expand_personQField" + pqi + "\" id=\"expand_personQField"+ pqi + "\" value=\"\"  /> </br>"
				pOutStrTemp2 = "<label for=\"expand_personQFieldArg"+ pqi +"\">Field Arguments " + pqi +"</label>"
				pOutStrTemp2 = pOutStrTemp2 + "<input type=\"text\" name=\"expand_personQFieldArg" + pqi +  "\" id=\"expand_personQFieldArg"+ pqi + "\" value=\"\"  /> </br>"
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
				pOutStrTemp = pOutStrTemp + "<input type=\"text\" name=\"expand_personQField" + pqi + "\" id=\"expand_personQField"+ pqi + "\" value=\"\"  /> </br>"
				pOutStrTemp2 = "<label for=\"expand_personQFieldArg"+ pqi +"\">Field Arguments " + pqi +"</label>"
				pOutStrTemp2 = pOutStrTemp2 + "<input type=\"text\" name=\"expand_personQFieldArg" + pqi +  "\" id=\"expand_personQFieldArg"+ pqi + "\" value=\"\"  /> </br>"
				pOutStr = pOutStr + pOutStrTemp + pOutStrTemp2;
			}
			pOutStr = pOutStr + "</div>";
		}
		$("#perQ-more").html(pOutStr);
		$("#perQ-more").trigger( "create" );
	}
}