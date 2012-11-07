$("#formEdit").live('pagebeforeshow', function(){

	$('body').addClass('ui-loading');
	formEditInit();
	$('body').removeClass('ui-loading');
	
});

function formEditInit(){
	$.getJSON("/kohana/question/MedicalQuest2/getEdit?id="+sessionStorage.pQnum,function(data){
		console.log("got JSON")
		
		var pqIDsave="";
		var pqCntSave="";
		var pqLength = data.MedicalQuestion.length;
		var pqLenCount = 0;
		var showStr = '<ul data-role="listview">';
		$.each(data.MedicalQuestion, function(i,user){
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
				showStr += RenderPerQuestion_Edit(prevQuestObj);
				//console.log(" here ")
				pqLenCount++;
			}
			//console.log(pqLenCount)
		});
		showStr += '<input type="hidden" name="pqID" id="pqID" value="'+ pqIDsave +'" />';
		showStr += '<input type="hidden" name="pqCnt" id="pqCnt" value="'+ pqCntSave +'" />';
		showStr += '<input type="hidden" name="pid" id="pid" value="'+ sessionStorage.pQnum +'" />';
		showStr += '<li><input type="button" data-inline="true" value="Confirm" id="fEditConfirm"/>';
		showStr += '<input type="button" data-inline="true" value="Submit" id="fEditSubmit"/></li>';
		showStr += '</ul>';
		$("#fEditShow").append(showStr);
		$("#fEditShow").trigger("create");
	});
}

$(document).delegate('#fEditConfirm', 'click', function() {
	var printStr = $('#fEditForm').serialize();
	alert("form is: " + printStr);
});

$(document).delegate('#fEditSubmit', 'click', function() {	
	$.ajax({
		type: "POST",
		url: "/kohana/question/MedicalQuest2/post",
		data: $('#fEditForm').serialize()
		}).done(function( msg ) {
		alert( "Saved: " + msg );
		//$.mobile.changePage("PQedit.html");
	});
});

function RenderPerQuestion_Edit(prevQuestObj){	

	var pqRenCnt,pqRenCnt2;
	var prevRenOut = '<li data-role="fieldcontain">'+'<h4>'+ prevQuestObj.question +'</h4>';
	
	var pQRenArgSplit, pQRenArgSplit2,pQRenArgSplit3;
	var pQPrefix = 'pq_' + prevQuestObj.id + '_'; 
	   
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

