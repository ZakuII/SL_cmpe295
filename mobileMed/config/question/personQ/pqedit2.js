$(document).delegate('#pq_editQ_Delete', 'click', function() {
	//alert("was pressed");
	
	$.ajax({
		type: "POST",
		url: "/kohana/config/personQuest/edit",
		data: { 
		//id: $.urlParam('id'),
		id: getUrlVars()['id'],
		edit: "remove"}
		}).done(function( msg ) {
		alert( msg );
		$.mobile.changePage("PQedit.html");
	});
	
});
$(document).delegate('#pq_editQ_Only', 'click', function() {
	sessionStorage.pqedit2_type="question";
	$.mobile.changePage("pqedit3.html");
});
$(document).delegate('#pq_editQ_All', 'click', function() {
	sessionStorage.pqedit2_type="all";
	$.mobile.changePage("pqedit3.html");
});

$("#PQedit2").live('pagebeforeshow', function(){
	
	$('body').addClass('ui-loading');
	PQ_InitEdit();
	$('body').removeClass('ui-loading');
});

function PQ_InitEdit(){

	/*
	var storing = $.urlParam('id');
	console.log("PQedit2 : ",storing);
	console.log("pos : ",$.urlParam('pos'));
	*/
	
	var storing = getUrlVars()['id'];
	console.log("PQedit2v2 : ",storing);
	console.log("pos : ",getUrlVars()['pos'])
	
	var editJson = sessionStorage.pqJSON;
	var editJson2 = JSON.parse(sessionStorage.pqJSON);
	//var num = $.urlParam('pos');
	var num = getUrlVars()['pos'];
	var editObj = editJson2[num];
	//console.log(editObj.question)
	
	sessionStorage.pqedit2_id = storing;
	sessionStorage.pqedit2_pos = num;
	var prevQuestObj = {
					"id": editObj.id,
					"question": editObj.question,
					"type": editObj.type,
					"numField": editObj.numFields,
					"arg": editObj.fieldContent
				};
	
	RenderPerQuestion_Edit(prevQuestObj);
	$("#pqEdit2_a").trigger("create");	
}

$.urlParam = function(name){
	var results = new RegExp('[\\?&]' + name + '=([^&#]*)').exec(window.location.href);
	return results[1] || 0;
}

function getUrlVars() {
	var vars = {};
	var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
		vars[key] = value;
	});
	return vars;
}

function RenderPerQuestion_Edit(prevQuestObj){
	

	var pqRenCnt,pqRenCnt2;
	var prevRenOut = '<h4>'+ prevQuestObj.question +'</h4><span data-role="fieldcontain">';
	
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
	
	prevRenOut += '</span>';
	$("#pqEdit2_a").html(prevRenOut);
}

