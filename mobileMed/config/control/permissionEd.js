$("#editPermission").live('pagebeforeshow', function(){
	$('#newPermName').val(getUrlVars()['q']);
	$('#toggle_pq').val(getUrlVars()['pq']).slider("refresh");	
	$('#toggle_mq').val(getUrlVars()['mq']).slider("refresh");	
	$('#toggle_sq').val(getUrlVars()['sq']).slider("refresh");	
	$('#toggle_eq').val(getUrlVars()['eq']).slider("refresh");	
	$('#toggle_fq').val(getUrlVars()['fq']).slider("refresh");	
	$('#toggle_xq').val(getUrlVars()['xq']).slider("refresh");	
});

$(document).delegate('#editPermSave', 'click', function() {
	$("#newPermNameLabel").css("color","black");
	var printStr = $('#editPermForm').serialize();
	console.log(printStr)
	
	if($('#newPermName').val() == ""){
			
		$("#newPermNameLabel").css("color","red");
		console.log("nothing")
	}
	else{
		printStr += '&id='+ getUrlVars()['id'];
		$('body').addClass('ui-loading');
		$.ajax({
			type: "POST",
			url: "/kohana/config/permission/saveEdit",
			data: printStr
			}).done(function( msg ) {
			$('body').removeClass('ui-loading');
			if(msg == "-1"){
				alert("Edit Error...");
			}
			else{
				alert("saved to: "+msg);
				$.mobile.changePage("permission.html");
			}
		});
	
		console.log("something")
	}
});

$(document).delegate('#editPermDelete', 'click', function() {

	var parameter = "id="+getUrlVars()['id']
	$('body').addClass('ui-loading');
	$.ajax({
		type: "POST",
		url: "/kohana/config/permission/remove",
		data: parameter
		}).done(function( msg ) {
		$('body').removeClass('ui-loading');
		if(msg == "-1"){
			alert("Edit Error...");
		}
		else{
			alert("Deleted: "+getUrlVars()['id']);
			$.mobile.changePage("permission.html");
		}
	});	
});


function getUrlVars() {
	var vars = {};
	var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
		vars[key] = value;
	});
	return vars;
}