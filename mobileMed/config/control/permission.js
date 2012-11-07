//$("#ConfigPermission").live('pageinit', function(){
$("#ConfigPermission").live('pagebeforeshow', function(){
	console.log("ConfigPermission");	
	showPermissions("permEdit_b");
});

$(document).delegate('#newPermSave', 'click', function() {
	//alert("clicked");
	$("#newPermNameLabel").css("color","black");
	var printStr = $('#newPermForm').serialize();
	console.log(printStr)
	
	if($('#newPermName').val() == ""){
			
		$("#newPermNameLabel").css("color","red");
		console.log("nothing")
	}
	else{
		
		$('body').addClass('ui-loading');
		$.ajax({
			type: "POST",
			url: "/kohana/config/permission/save",
			data: printStr
			}).done(function( msg ) {
			$('body').removeClass('ui-loading');
			if(msg == "-1"){
				alert("Entry Already Exists");
			}
			else{
				alert("saved to: "+msg);
				$.mobile.changePage("permission.html");
			}
		});
	
		console.log("something")
	}
});

function showPermissions(location){

	$('body').addClass('ui-loading');
	var url = "/kohana/config/permission/getPermission";
	$.getJSON(url,function(data){
		
		var pqlist = '<ul data-role="listview" data-inset="true">';
		pqlist += '<li data-role="list-divider">Existing Permission</li>';
		$.each(data.permission, function(i,user){			
			pqlist += '<li><a href="editpermission.html?id='+user.id+'&pq='+user.personQ_id+'&mq='+user.medicalQ_id+'&eq='+user.environmentQ_id+'&sq='+user.socialQ_id+'&fq='+user.familyQ_id+'&xq='+user.miscQ_id+'&q='+user.user_type+'"data-rel="popup" data-position-to="window" >'+user.user_type;
			pqlist += '<p><b>Personal : </b>'+permissionRead(user.personQ_id)+', <b>Medical : </b>'+permissionRead(user.medicalQ_id)+', <b>Social : </b>'+permissionRead(user.socialQ_id)+', <b>Environmental : </b>'+permissionRead(user.environmentQ_id)+', <b>Family : </b>'+permissionRead(user.familyQ_id)+', <b>Misc : </b>'+permissionRead(user.miscQ_id);
			//pqlist += '<p style="font-family:arial;font-size:14px;">'+user.content+'</p>';
			pqlist += '</p></a></li>';			
		});
		pqlist += '</ul>';
		$("#"+location).html(pqlist);
		$("#"+location).trigger("create");	
		$('body').removeClass('ui-loading');
	});	
}

function permissionRead(id){
	var returnVal = "";
	if(id==0)
		returnVal = "Hide";
	else if(id==1)
		returnVal = "Show";
	return returnVal;
}