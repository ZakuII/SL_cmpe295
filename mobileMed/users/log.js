$(document).delegate('#logout', 'click', function() {
	sessionStorage.clear();
	window.location = "/mobileMed/index.html";
});