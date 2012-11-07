
$("#PQedit").live('pageshow', function(){
	
	$('body').addClass('ui-loading');
	/*if(sessionStorage.IS_pqJSON && sessionStorage.IS_pqJSON==1)
		pqEditInitQuestionStored();
	else*/
		pqEditInitQuestion();
	$('body').removeClass('ui-loading');
		
});

function pqEditInitQuestion(){

	$.getJSON("/kohana/question/MiscQuest/getQuestion",function(data){
	
		var pqlist = '<form id="PQeditForm"><ul data-role="listview" data-inset="true" data-split-icon="arrow-r" data-split-theme="d">';
		pqlist += '<li data-role="list-divider">Existing Questions</li>';
		
		var pqLength = data.MiscQuestion.length;
		var pqLenCount = 0;
		var pqIDsave="";
		
		sessionStorage.pqJSON = JSON.stringify(data.MiscQuestion);
		
		$.each(data.MiscQuestion, function(i,user){
		
			if(user.arrangement != -1){
				pqlist += '<li><a><h3>'+user.question+'*</h3>';
			}
			else{	
				pqlist += '<li><a><h3>'+user.question+'</h3>';
			}
			pqlist += '<div class="ui-li-aside">';
			pqlist += '<select name="edit_'+user.id+'" id="edit_'+user.id+'" data-role="slider">';
			if(user.display=="1"){
				pqlist += '<option value="0">Hide</option><option value="1" selected="selected">Show</option>';
			}
			else{
				pqlist += '<option value="0" selected="selected">Hide</option><option value="1">Show</option>';
			}
			pqlist += '</select></div>';
			pqlist += '</a><a href="PQedit2.html?id='+user.id+'&pos='+pqLenCount+'"data-rel="popup" data-position-to="window" >Edit</a>';
			pqlist += '</li>';
			
			pqIDsave+=user.id;
			pqLenCount++;
			
			if(pqLenCount < pqLength){
					pqIDsave+=",";
			}
			
		});
		pqlist += '</ul>';
		pqlist += '<input type="hidden" name="pqID" id="pqID" value="'+ pqIDsave +'" /></form>';
		$("#pqEdit_b").html(pqlist);
		$("#pqEdit_b").trigger("create");	
	});
	sessionStorage.IS_pqJSON = 1;
}

function pqEditInitQuestionStored(){

	var gettest = sessionStorage.pqJSON;
	var gettest2 = JSON.parse(sessionStorage.pqJSON);
	var pqlist = '<form id="PQeditForm"><ul data-role="listview" data-split-icon="arrow-r" data-split-theme="d">';
	pqlist += '<li data-role="list-divider">Existing Questions</li>';
		
	var pqLength = gettest2.length;
	var pqLenCount = 0;
	var pqIDsave="";
		
	
	$.each(gettest2, function(i,user){
	
		pqlist += '<li><a><h3>'+user.question+'</h3>';
		pqlist += '<div class="ui-li-aside">';
		pqlist += '<select name="edit_'+user.id+'" id="edit_'+user.id+'" data-role="slider">';
		if(user.display=="1"){
			pqlist += '<option value="0">Hide</option><option value="1" selected="selected">Show</option>';
		}
		else{
			pqlist += '<option value="0" selected="selected">Hide</option><option value="1">Show</option>';
		}
		pqlist += '</select></div>';
		pqlist += '</a><a href="PQedit2.html?id='+user.id+'" data-rel="popup" data-position-to="window" >Edit</a>';
		pqlist += '</li>';
			
		pqIDsave+=user.id;
		pqLenCount++;
			
		if(pqLenCount < pqLength){
			pqIDsave+=",";
		}
			
	});
	pqlist += '</ul>';
	pqlist += '<input type="hidden" name="pqID" id="pqID" value="'+ pqIDsave +'" /></form>';
	$("#pqEdit_b").html(pqlist);
	$("#pqEdit_b").trigger("create");	
}

$(document).delegate('#pqEditTest', 'click', function() {
	var printStr = $('#PQeditForm').serialize();
	console.log("hello , %s",printStr)
	var gettest = sessionStorage.pqJSON;
	var gettest2 = JSON.parse(sessionStorage.pqJSON);
	$.each(gettest2, function(i,user){
		console.log(user.id)
	});
	alert("presed " + printStr);
});

$(document).delegate('#pqEditSave', 'click', function() {
	$.ajax({
		type: "POST",
		url: "/kohana/question/MiscQuest/postShow",
		data: $('#PQeditForm').serialize()
		}).done(function( msg ) {
		alert( "Data Saved: " + msg );
		sessionStorage.IS_pqJSON = 0;
	});
});

$(document).delegate('#pqEditBack', 'click', function() {
	$.mobile.changePage("../config/question.html");
});



