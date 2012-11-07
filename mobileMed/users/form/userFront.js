$(document).delegate('#pqTestConfirm', 'click', function() {
	    var testTemp = "num=" + $('input[name=idChoice]:checked').val();
		alert("Confirm, radio is: " + testTemp);
	});

$(document).delegate('#pqTestSubmit', 'click', function() {
	sessionStorage.pQnum = $('input[name=idChoice]:checked').val();
	$.mobile.changePage("views/show.html");
});

$(document).delegate('#pqEditConfirm', 'click', function() {
	    var testTemp = "num=" + $('input[name=idChoice]:checked').val();
		alert("Confirm, radio is: " + testTemp);
	});

$(document).delegate('#pqEditSubmit', 'click', function() {
	sessionStorage.pQnum = $('input[name=idChoice]:checked').val();
	$.mobile.changePage("editUser.html");
});
