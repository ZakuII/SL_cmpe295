$("#schedulePro").live('pageshow', function(e){	
	var number = addLeadingZeros (sessionStorage.ppatId, 9);
	var number2 = addLeadingZeros (sessionStorage["DocProId"], 9);
	$("#procFname").val(sessionStorage.pfName);
	$("#procLname").val(sessionStorage.plName);
	$("#procReason").val(sessionStorage.pReason);
	$("#procPPid").val(number);	
	
	$("#procDocFname").val(sessionStorage.dfName);
	$("#procDocLname").val(sessionStorage.dlName);
	$("#procDocType").val(sessionStorage.dspecial);
	$("#procDocPid").val(number2);	
	$("#procinsurePlace").val(sessionStorage.pfInsurePlace);	
	$("#procinsureID").val(sessionStorage.pfInsureID);	

	function addLeadingZeros (n, length){
		var str = (n > 0 ? n : -n) + "";
		var zeros = "";
		for (var i = length - str.length; i > 0; i--)
			zeros += "0";
			zeros += str;
		return n >= 0 ? zeros : "-" + zeros;
	}
	
	
	$.get("/mobileMed/assets/procedure.txt", function(data){
		var tags2 = data.split(", ");		
		$( "#procedure" ).autocomplete({
        source: tags2,
		minLength: 0
		});
		$( "#procedure" ).focus(function() {
		$(this).autocomplete('search', $(this).val())
		});
		
	});

});

$(document).delegate('#ProcSubmit', 'click', function() {
	var printStr = $('#ScheduleProcForm').serialize();
	//console.log(printStr)
	
	printStr += '&DocProId='+sessionStorage["DocProId"]+'&PatProId='+sessionStorage.ppatId;
	$('body').addClass('ui-loading');
	$.ajax({
		type: "POST",
		url: "/kohana/form/procedure/process",
		data: printStr
		}).done(function( msg ) {
		$('body').removeClass('ui-loading');
		if(msg == "-1"){
			//console.log("-1 " +msg);
			alert("Error, please resubmit");
		}
		else{			
			//console.log(msg);
			alert("Sent");
		}
	});		
});
