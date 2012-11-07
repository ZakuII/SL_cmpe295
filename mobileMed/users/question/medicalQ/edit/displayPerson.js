
$("#PersonQuestion").live('pagebeforeshow', function(){	
	
	$('body').addClass('ui-loading');
	formInit();
	$('body').removeClass('ui-loading');
});


function formInit(){
	$.getJSON("/kohana/question/MedicalQuest/getQuestion",function(data){
		
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
				showStr += RenderPerQuestion_F(prevQuestObj);
				//console.log(" here ")
				pqLenCount++;
			}
		});
		showStr += '<input type="hidden" name="pqID" id="pqID" value="'+ pqIDsave +'" />';
		showStr += '<input type="hidden" name="pqCnt" id="pqCnt" value="'+ pqCntSave +'" />';
		showStr += '<li><input type="button" data-inline="true" value="Confirm" id="pqDisBtnConfirm"/>';
		showStr += '<input type="button" data-inline="true" value="Submit" id="pqDisBtnSubmit"/></li>';
		showStr += '</ul>';
		$("#pqDisplay").append(showStr);
		$("#pqDisplay").trigger("create");
	});
}


$(document).delegate('#pqDisBtnConfirm', 'click', function() {
	var printStr = $('#pqform').serialize();
	alert("form is: " + printStr);
});

$(document).delegate('#pqDisBtnSubmit', 'click', function() {
	
	$.ajax({
		type: "POST",
		url: "/kohana/question/MedicalQuest/post",
		data: $('#pqform').serialize()
		}).done(function( msg ) {
		alert( "Data Saved: " + msg );
		});
});


function RenderPerQuestion_F(prevQuestObj){

	var pqRenCnt,pqRenCnt2;
	var prevRenOut = '<li data-role="fieldcontain">'+'<h4>'+ prevQuestObj.question +'</h4>';
	
	var pQRenArgSplit, pQRenArgSplit2,pQRenArgSplit3;
	var pQPrefix = 'pq_' + prevQuestObj.id + '_'; 
	   
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