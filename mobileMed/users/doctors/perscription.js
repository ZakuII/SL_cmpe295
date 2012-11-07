//$("#perscription").live('pageinit', function(e){	
$("#perscription").live('pageshow', function(e){	

	hide_all();
	var center;
	var map = null;
	var infowindow;
	var service;
	
	var number = addLeadingZeros (sessionStorage.ppatId, 9);
	//console.log(number)
	
	$("#mxFname").val(sessionStorage.pfName);
	$("#mxLname").val(sessionStorage.plName);
	$("#mxReason").val(sessionStorage.pReason);
	//$("#mxPPid").val(sessionStorage.ppatId);	
	$("#mxPPid").val(number);	
	
	$("#mxAlleg").val(sessionStorage.pfAllergy);	
	$("#insurePlace").val(sessionStorage.pfInsurePlace);	
	$("#insureID").val(sessionStorage.pfInsureID);	
	
	if(navigator.geolocation) {
			detectBrowser();
			navigator.geolocation.getCurrentPosition(function(position){
			Newinitialize(position.coords.latitude,position.coords.longitude);
		});
	}
					
	else{
			detectBrowser();
			Newinitialize(52.636161,-1.133065);
	}
	
	function detectBrowser() {
		var useragent = navigator.userAgent;
		var mapdivMap = document.getElementById("map_canvas");

		if (useragent.indexOf('iPhone') != -1 || useragent.indexOf('Android') != -1 ) {
			mapdivMap.style.width = '100%';
			mapdivMap.style.height = '100%';
		} 
	};
	

	function Newinitialize(lat,lng) {
	
		$('body').addClass('ui-loading');
		
		center = new google.maps.LatLng(lat,lng);
		
		var myOptions = {
		zoom: 13,
		center: center,
		mapTypeId: google.maps.MapTypeId.ROADMAP				
		}
		
		map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
		
		var request = {
			location: center,
			radius: 5000,
			//types: ['pharmacy','hospital']
			types: ['pharmacy']
		};				
		infowindow = new google.maps.InfoWindow();
		currentMarker();
		service = new google.maps.places.PlacesService(map);		
		
		service.search(request, function (results, status) {
			$('body').removeClass('ui-loading');
			initShow();
			if (status == google.maps.places.PlacesServiceStatus.OK) {
				for (var i = 0; i < results.length; i++) {
					createMarker(results[i]);
				}				
			}
		});
		
		
	}
	
	function createMarker(place) {
		var placeLoc = place.geometry.location;
		var marker = new google.maps.Marker({
		map: map,
		position: place.geometry.location
		});		
		
		var request = { reference: place.reference };
		service.getDetails(request, function(details, status) {
			google.maps.event.addListener(marker, 'click', function() {
			    if(typeof(details) !== 'undefined' && details != null) {
					infowindow.setContent(details.name + "<br />" + details.formatted_address +"<br />" + details.formatted_phone_number);
					infowindow.open(map, this);						
				}			
			$("#pharmacy").val(details.name);	
			$("#pharmacyLoc").val(details.formatted_address);	
			});			
		});		
	}
	
	function currentMarker(){				
		var pinColor = "3BB9FF";
		var pinImage = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" + pinColor,
        new google.maps.Size(21, 34),
        new google.maps.Point(0,0),
        new google.maps.Point(10, 34));
		var pinShadow = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_shadow",
        new google.maps.Size(40, 37),
        new google.maps.Point(0, 0),
        new google.maps.Point(12, 35));
		
		var marker = new google.maps.Marker({
            position: center, 
            map: map,
            icon: pinImage,
            shadow: pinShadow
        });		
		google.maps.event.addListener(marker, 'click', function() {
		infowindow.setContent("Current Location");
		infowindow.open(map, this);
		});
	}
	
	function hide_all(){
		$("#PerscriptForm").hide();
	}

	function initShow(){
		$("#PerscriptForm").show();
		//$("#map_canvas").hide();
	}

	function show_Map(){
		$("#map_canvas").show();
	}

	function hide_Map(){
		$("#map_canvas").hide();
	}
	
	function addLeadingZeros (n, length){
		var str = (n > 0 ? n : -n) + "";
		var zeros = "";
		for (var i = length - str.length; i > 0; i--)
			zeros += "0";
			zeros += str;
		return n >= 0 ? zeros : "-" + zeros;
	}
	
	$.get("/mobileMed/assets/medicine.txt", function(data){
		availableTags2 = data.split(", ");		
		$( "#medicine" ).autocomplete({
        source: availableTags2
		});		
	});
	
});

$(document).delegate('#PerscriptTabMap', 'click', function() {
	$("#map_canvas").slideToggle("slow");
});

$(document).delegate('#PerscriptSubmit', 'click', function() {
	var printStr = $('#perscriptionForm').serialize();
	//console.log(printStr)
	
	printStr += '&DocProId='+sessionStorage["DocProId"]+'&PatProId='+sessionStorage.ppatId;
	$('body').addClass('ui-loading');
	$.ajax({
		type: "POST",
		url: "/kohana/form/prescription/process",
		data: printStr
		}).done(function( msg ) {
		$('body').removeClass('ui-loading');
		if(msg == "-1"){
			console.log("-1 " +msg);
			alert("Error, please resubmit");
		}
		else{
			alert("Sent");
		}
	});		
});
