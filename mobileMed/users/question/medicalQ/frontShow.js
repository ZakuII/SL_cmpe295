$(document).delegate('#pqTestConfirm', 'click', function() {
	    var testTemp = "num=" + $('input[name=idChoice]:checked').val();
		alert("Confirm, radio is: " + testTemp);
	});

$(document).delegate('#pqTestSubmit', 'click', function() {
	sessionStorage.pQnum = $('input[name=idChoice]:checked').val();
	$.mobile.changePage("view/show.html");
});

$(document).delegate('#pqEditConfirm', 'click', function() {
	    var testTemp = "num=" + $('input[name=idChoice]:checked').val();
		alert("Confirm, radio is: " + testTemp);
	});

$(document).delegate('#pqEditSubmit', 'click', function() {
	sessionStorage.pQnum = $('input[name=idChoice]:checked').val();
	$.mobile.changePage("edit/formEdit.html");
});


$("#pqShow").live('pagebeforeshow', function(){
	
	//console.log("hello world")
	$('body').addClass('ui-loading');
	$.getJSON("/kohana/question/MedicalQuest/getAnswer?id="+sessionStorage.pQnum,function(data){
		
		var pqlist = '<ul data-role="listview">';
		
		$.each(data.MedicalAnswer, function(i,user){
			if(user.display==1){
			pqlist += '<li><h5>'+user.question+'</h5>';
			pqlist += '<p style="font-family:arial;font-size:14px;">'+user.content+'</p>';
			pqlist += '</li>';
			}
		});
		pqlist += '</ul>';
		$("#pqshow").append(pqlist);
		$("#pqshow").trigger("create");	
		$('body').removeClass('ui-loading');
	});	
	
});
