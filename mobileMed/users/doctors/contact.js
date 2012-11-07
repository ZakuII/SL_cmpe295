$("#docContact").live('pagebeforeshow', function(e){	
	showConversation();
	removeMessageUpdate();
	//remove update
});

$(document).delegate('#sendMsg', 'click', function() {	        
	var msg = $('#message').val();           
	if(msg != ""){
		var url = "/kohana/profile/message/message";	
		$('body').addClass('ui-loading');
		$.ajax({
			type: "POST",
			url: url,
			data: {
			DocProId:sessionStorage["DocProId"], 
			ppatId:sessionStorage["ppatId"],
			msg:msg,
			by:"doc"}
			}).done(function( msg ) {	
			showConversation();			
			$('#message').val("");
			$('body').removeClass('ui-loading');
		});
	
	}
});


function removeMessageUpdate(){

	$('body').addClass('ui-loading');
	var url = "/kohana/profile/message/removeUpdate";	
	$.ajax({
		type: "POST",
		url: url,
		data: {DocProId:sessionStorage["DocProId"], ppatId:sessionStorage["ppatId"],by:"doc"}
		}).done(function( msg ) {		
		$('body').removeClass('ui-loading');
	});
	
}

function showConversation(){	
	
	var url = '/kohana/userdata/message/'+sessionStorage.ppatId+'/message-'+sessionStorage["DocProId"]+'.txt';
	//var msg;
	
	$('body').addClass('ui-loading');
	$.ajax({
		url: url,
		cache: false
	}).done(function(msg) {
		
		var obj = jQuery.parseJSON(msg);
		var msgShow = "";
		var msgLength = obj.length;
		var i=msgLength-1;
		for (i; i>=0; i--){			
			
			if(obj[i].by == "pat"){
				msgShow += '<div class="messageDocP">';
				msgShow += '<strong>'+obj[i].time+'</strong>';
				msgShow += '<p><strong>Patient: </strong></p>';			
				msgShow += '<p>'+obj[i].msg+'</p>';			
			}
			else if(obj[i].by == "doc"){
				msgShow += '<div class="messageDocD">';
				msgShow += '<strong>'+obj[i].time+'</strong>';
				msgShow += '<p><strong>You: </strong></p>';			
				msgShow += '<p>'+obj[i].msg+'</p>';			
			}
			else{
				msgShow += '<div>';
			}
			
			msgShow += '</div>';
		}
		
		$("#docConv").html(msgShow);
		$("#docConv").trigger("create");		
		$('body').removeClass('ui-loading');
	})
	.fail(function(jqXHR, textStatus) {
	//alert( "Request failed: " + textStatus );
	$("#docConv").html("No Message Found");
	$('body').removeClass('ui-loading');
	});
	
	
	
	
	/*$('body').addClass('ui-loading');
	
	$.get(url, function(data) {
		msg = data;
	})	
	.success(function() { 
		//alert("success" + msg);
		
		var obj = jQuery.parseJSON(msg);
		var msgShow = "";
		var msgLength = obj.length;
		var i=msgLength-1;
		for (i; i>=0; i--){			
			
			if(obj[i].by == "pat"){
				msgShow += '<div class="messageDocP">';
				msgShow += '<strong>'+obj[i].time+'</strong>';
				msgShow += '<p><strong>Patient: </strong></p>';			
				msgShow += '<p>'+obj[i].msg+'</p>';			
			}
			else if(obj[i].by == "doc"){
				msgShow += '<div class="messageDocD">';
				msgShow += '<strong>'+obj[i].time+'</strong>';
				msgShow += '<p><strong>You: </strong></p>';			
				msgShow += '<p>'+obj[i].msg+'</p>';			
			}
			else{
				msgShow += '<div>';
			}
			
			msgShow += '</div>';
		}
		
		$("#docConv").html(msgShow);
		$("#docConv").trigger("create");	
		
	})
	.error(function() { $("#docConv").html("No Message Found"); })
	.complete(function() { $('body').removeClass('ui-loading'); });*/
}