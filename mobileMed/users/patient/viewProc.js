
$("#procShow").live('pagebeforeshow', function(e){			
	hideProcAll();
	getProcedures();	
});

var procedure = new Object;
var procedureResult = new Object;
var graphData = new Object;
var resultFlag = 0;

function getProcedures(){
	
	$('body').addClass('ui-loading');
	var url = "/kohana/config/procedure/getProcedure";
	$.getJSON(url, function(data){	
		$.each(data.procedure, function(i,user){
			
			procedure[user.name] = user;
			var temp= new Array();
			procedureResult[user.name] = temp;
		});	
		var temp= new Array();
		procedureResult['Other'] = temp;
		getProcResult();		
	$('body').removeClass('ui-loading');		
	});			
}


function getProcResult(){

	//var url = '/kohana/userdata/procedures/'+sessionStorage.ppatId+'/result.txt';	
	var url = '/kohana/userdata/procedures/'+sessionStorage["PatProId"]+'/result.txt';		
	var type;	
	
	$('body').addClass('ui-loading');
	$.ajax({
		url: url,
		cache: false
	}).done(function(msg) {
		var obj = jQuery.parseJSON(msg);		
		$.each(obj, function(i,user){
			type = user.type
			if(procedureResult.hasOwnProperty(type)){
				procedureResult[type].push(user);
			}
			else{
				procedureResult['Other'].push(user);
			}
		});	
		resultFlag = 1;
		showPtable();
		$('body').removeClass('ui-loading');			
	})
	.fail(function(jqXHR, textStatus) {
		resultFlag = 0;
		$("#procTable").html("<h3>No Result Found</h3>"); 
		showPtable();
		$('body').removeClass('ui-loading');		
	});		
}

function renderProcTableOther(proc){
	if(resultFlag == 1){
		if(procedureResult[proc].length>0){			
			var procTable = "";	
			var procGraphSel = "";
			var results = procedureResult[proc];
			
			//sort from latest to oldest
			results.sort(function(a,b){return a.time<b.time});

			procGraphSel += '<h3 style="text-align: center">'+proc+'</h3>';				
			
			for(var i=0; i<results.length; i++) {
				procTable += '<div class="procOther">';
				for(var key in results[i]) {
					procTable += '<strong>'+key+'</strong> : '+results[i][key]+'</br>';
				}
				procTable += '</div>';
			}
	
			$("#procHead").html(procGraphSel);
			$("#procTable").html(procTable);		
			$("#procHead").trigger("create");
			$("#procTable").trigger("create");		
		}//if has property
		else{
			$("#procHead").html("");
			$("#procTable").html('<h3 style="text-align: center">No Results for <i>'+proc+'</i></h3>');			
			$("#procHead").trigger("create");
			$("#procTable").trigger("create");
		}//else
	}//if result flag
}

var indexNum;
var argTemp = new Array();
var argHeader = new Array();
var max = new Array();
var min = new Array();
var showNum = 5;	
var currentProc;

function renderProcTable(proc){
	
	if(resultFlag == 1){
		if(procedureResult[proc.name].length>0){
		
		var procTable = "";	
		var procGraphSel = "";
		var results = procedureResult[proc.name];	
		indexNum = 0;
		currentProc = proc;
			
		//sort from latest to oldest
		results.sort(function(a,b){return a.time<b.time});

		procGraphSel += '<h3 style="text-align: center">'+proc.name+'</h3>';
		procGraphSel += '<select name="procGraph" id="procGraph" data-native-menu="true">';
		procGraphSel += '<option value="0">Select Parameter to Graph</option>';	
		
		var tempHeadStr;
		
		var argsParse = proc.Args.split("|");				//parse parameter field
		for(var i = 0; i < proc.numArg; i++){
			tempHeadStr = "";
			ParamParse = argsParse[i].split(":");		
			tempHeadStr += '<th>'+ParamParse[0]+'</br>';		//parameter name
			tempHeadStr += ParamParse[1]+'</br>';				//parameter units					
			procGraphSel += '<option value="'+proc.name+'|'+ParamParse[0]+'|'+ParamParse[2]+'|'+ParamParse[3]+'">'+ParamParse[0]+'</option>';
		
			argTemp[i] = ParamParse[0];
			
			if(ParamParse[2] == '-'){
				tempHeadStr += '< '+ParamParse[3]+'</th>';
				min[i] = 0;
				max[i] = ParamParse[3];
			}
			else if(ParamParse[3] == '+'){
				tempHeadStr += '> '+ParamParse[2]+'</th>';
				min[i] = ParamParse[2];
				max[i] = 0;
			}
			else{
				tempHeadStr += ParamParse[2]+' - '+ParamParse[3]+'</th>';
				min[i] = ParamParse[2];
				max[i] = ParamParse[3];
			}
			argHeader[i] = tempHeadStr;
		}//for
										
		procGraphSel += '</select>';
		
		if(proc.numArg > showNum){
			procTable = renderProcTablePortion(proc,argTemp,argHeader,max,min,showNum);	
			procTable += '<div data-role="controlgroup" data-type="horizontal"><input type="button" id="viewProcBack" value="<" data-inline="true"/> <input type="button" id="viewProcNext" value=">" data-inline="true"/></div>';
			indexNum = showNum;
		}
		else{
			procTable = renderProcTablePortion(proc,argTemp,argHeader,max,min,proc.numArg);	
		}
							
		$("#procHead").html(procGraphSel);
		$("#procTable").html(procTable);
		$("#procHead").trigger("create");
		$("#procTable").trigger("create");
		showPtable();			
		
		}//if has property
		else{
			$("#procHead").html("");
			$("#procTable").html('<h3 style="text-align: center">No Results for <i>'+proc.name+'</i></h3>');			
			$("#procHead").trigger("create");
			$("#procTable").trigger("create");
		}//else
	}//if result flag
}

$(document).delegate('#viewProcBack', 'click', function() {
	indexNum -= (showNum);
	if(indexNum<showNum){
		indexNum = showNum;
	}
	//console.log("Back PRESSED ",indexNum);		
	var procTable = renderProcTablePortion(currentProc,argTemp,argHeader,max,min,indexNum);
	procTable += '<div data-role="controlgroup" data-type="horizontal"><input type="button" id="viewProcBack" value="<" data-inline="true"/> <input type="button" id="viewProcNext" value=">" data-inline="true"/></div>';	
	$("#procTable").html(procTable);
	$("#procTable").trigger("create");
});
		
$(document).delegate('#viewProcNext', 'click', function() {		
	indexNum += showNum;
	if(indexNum>currentProc.numArg){
		indexNum=currentProc.numArg;
	}
	//console.log("Next PRESSED ",indexNum);
	var procTable = renderProcTablePortion(currentProc,argTemp,argHeader,max,min,indexNum);
	procTable += '<div data-role="controlgroup" data-type="horizontal"><input type="button" id="viewProcBack" value="<" data-inline="true"/> <input type="button" id="viewProcNext" value=">" data-inline="true"/></div>';
	$("#procTable").html(procTable);
	$("#procTable").trigger("create");
});

function renderProcTablePortion(proc,argTemp,argHeader,max,min,indexMax){

	var results = procedureResult[proc.name];
	var tempTime;
	var cellNum;
	var procTable = "";	
	var indexMax2;
	var indexMin;
	
	if(indexMax > proc.numArg){
		indexMax2 = proc.numArg;
	}
	else{
		indexMax2 = indexMax;
	}
	
	indexMin = indexMax2 - (showNum+1);
	
	if(indexMin<0){
		indexMin = 0;
	}
	

	procTable += '<table border="1" width="100%"><tr>';	
	procTable += '<th>Date</th>';
	
	var argsParse = proc.Args.split("|");				//parse parameter field
	//for(var i = 0; i < proc.numArg; i++){
	//for(var i = 0; i < indexMax2; i++){
	for(var i = indexMin; i < indexMax2; i++){
		procTable += argHeader[i];
	}//for
	
	//console.log(results);
	for(var k = 0; k < results.length; k++){
		procTable += '</tr>';
		tempTime = results[k]['time'].split(" ");
		procTable += '<tr><td>'+tempTime[0]+'</td>';
		//for(var j = 0; j < proc.numArg; j++){			
		//for(var j = 0; j < indexMax2; j++){		
		for(var j = indexMin; j < indexMax2; j++){				
			cellNum = results[k][argTemp[j]];
			if(max[j] == 0){
				if(cellNum < min[j]){
					procTable += '<td style="background-color:#FA8072;">'+cellNum+'</td>';
				}
				else{
				procTable += '<td>'+cellNum+'</td>';
				}
			}
			else{
				if(cellNum >= min[j] && cellNum <= max[j]){
					procTable += '<td>'+cellNum+'</td>';
				}
				else{
					procTable += '<td style="background-color:#FA8072;">'+cellNum+'</td>';
				}
			}
		}			
	}
	procTable += '</tr></table>';
	return procTable;
}

$(document).delegate('#procGraph', 'change', function() {
	var menuResult = $("#procGraph").val();
	
	if(menuResult != 0){
		var graphAmt;	
		var graphLimit = 6;	
		var selParse = menuResult.split('|');
		var results = procedureResult[selParse[0]];			
	
		//only graph the <graphLimit> latest
		if(results.length>graphLimit){
			graphAmt = graphLimit;
		}
		else{
			graphAmt = results.length;
		}
		var values = new Array;
		for(var i=0;i<graphAmt;i++){
			var tempTime = results[i]['time'].split(" ");
			var temp = {X: tempTime[0],Y: results[i][selParse[1]]};
			values.push(temp);
		}		
		values.sort(function(a,b){return a.X>b.X});
		graphData['values'] = values;
		var gmin = selParse[2];
		var gmax = selParse[3];
		if(gmin == '-'){gmin = 0;}
		var temp2 = {min: gmin, max: gmax};
		graphData['limits'] = temp2;
		clearCanvas();
		graphTable();
		showPgraph();
	}
	else{
		showPtable();
	}
});

$(document).delegate('#procCBC', 'click', function() {
	renderProcTable	(procedure['Comprehensive Blood Count (CBC)']);
});

$(document).delegate('#procFBS', 'click', function() {
	renderProcTable	(procedure['Fasting Blood Sugar (FBS)']);
});

$(document).delegate('#procLBT', 'click', function() {
	//console.log(procedure['Lipid Blood Test'].numArg)	 
	renderProcTable	(procedure['Lipid Blood Test']);
});

$(document).delegate('#procTBT', 'click', function() {
	//console.log(procedure['Thyroid Blood Test'].numArg)	 
	renderProcTable	(procedure['Thyroid Blood Test']);
});

$(document).delegate('#procCMP', 'click', function() {
	//console.log(procedure['Comprehensive Metabolic Panel (CMP)'].numArg)	 
	renderProcTable	(procedure['Comprehensive Metabolic Panel (CMP)']);
});

$(document).delegate('#procOTHER', 'click', function() {	
	renderProcTableOther ('Other');		
});

function showPtable(){
	$('#procTable').show();
	$('#pgraph').hide();
	$('#gallery').hide();
}
function showPgraph(){
	$('#procTable').hide();
	$('#pgraph').show();
	$('#gallery').hide();
}
function hideProcAll(){
	$('#procTable').hide();
	$('#pgraph').hide();
	$('#gallery').hide();
}



//-------------------------graph-----------------------


	var graph;
	var xPadding = 40;
	var yPadding = 30;

	// Returns the max Y value in our graphData list
	function getMaxY() {
		var max = 0;
                
		for(var i = 0; i < graphData.values.length; i ++) {
			if(graphData.values[i].Y > max) {
				max = graphData.values[i].Y;
			}
		}
		var yposMax = graphData.limits.max;
		if(yposMax!='+'){
			if(max < yposMax){
				max = parseFloat(yposMax);
			}
		}		
		max += 10 - max % 10;
		return max;
	}
            
	// Return the x pixel for a graph point
	function getXPixel(val) {
	return ((graph.width() - xPadding) / graphData.values.length) * val + (xPadding * 1.5);
	}
            
	// Return the y pixel for a graph point
	function getYPixel(val) {
	return graph.height() - (((graph.height() - yPadding) / getMaxY()) * val) - yPadding;
	}
	
	function clearCanvas(){		
		var c=document.getElementById("pgraph");
		var ctx=c.getContext("2d");
		ctx.clearRect(0,0,c.width,c.height);
	}
	
	function drawLimit(){		
		var c=document.getElementById("pgraph");
		var ctx=c.getContext("2d");		
		ctx.fillStyle="#BCF5CD";		
		var xpos = getXPixel(0);
		
		var yposMaxTemp = graphData.limits.max;
		if(yposMaxTemp=='+'){
			var yposMax = 1;
		}
		else{
			var yposMax = getYPixel(parseFloat(yposMaxTemp));
		}
		var yposMin = getYPixel(parseFloat(graphData.limits.min));
		//ctx.fillRect(xpos,yposMax,300,(yposMin-yposMax));
		ctx.fillRect(xpos,yposMax,(graph.width() - xPadding),(yposMin-yposMax));
		//console.log(parseFloat(yposMaxTemp) +' '+yposMax);
		//console.log(parseFloat(graphData.limits.min) +' '+yposMin);
	}
	
	function graphTable(){
		graph = $('#pgraph');
		var c = graph[0].getContext('2d');    
                
		c.lineWidth = 2;
		c.strokeStyle = '#333';
		c.font = 'italic 8pt sans-serif';
		c.textAlign = "center";
               
		// Draw the axises
		c.beginPath();
		c.moveTo(xPadding, 0);
		c.lineTo(xPadding, graph.height() - yPadding);
		c.lineTo(graph.width(), graph.height() - yPadding);
		c.stroke();
                
		// Draw the X value texts
		for(var i = 0; i < graphData.values.length; i ++) {
			c.fillText(graphData.values[i].X, getXPixel(i), graph.height() - yPadding + 20);
		}
                
		// Draw the Y value texts
		c.textAlign = "right"
        c.textBaseline = "middle";
		
		var ynum = 10;
		var ymax = getMaxY();
		
		//console.log('- ' + ymax)
		if(ymax < 15){
		ynum = 1;
		//console.log('a ' + ymax)
		}
		else if(ymax < 30){
		ynum = 5;
		//console.log('b ' + ymax)
		}		
		else if(ymax < 100){
		ynum = 10;
		//console.log('c ' + ymax)
		}		
		else if(ymax < 400){
		ynum = 50;
		//console.log('d ' + ymax)
		}
		else{
		ynum = 100;
		//console.log('e ' + ymax)
		}
		
		//for(var i = 0; i < getMaxY(); i += 10) {
		for(var i = 0; i < getMaxY(); i += ynum) {
			c.fillText(i, xPadding - 10, getYPixel(i));
		}
		
		//draw limit first to be underneath lines
		drawLimit();
		
		c.strokeStyle = '#5E9';
	
		// Draw the line graph
		c.beginPath();
		c.moveTo(getXPixel(0), getYPixel(graphData.values[0].Y));
		for(var i = 1; i < graphData.values.length; i ++) {
			c.lineTo(getXPixel(i), getYPixel(graphData.values[i].Y));
		}
		c.stroke();
                
		// Draw the dots
		c.fillStyle = '#333';
                
		for(var i = 0; i < graphData.values.length; i ++) {  
			c.beginPath();
			c.arc(getXPixel(i), getYPixel(graphData.values[i].Y), 4, 0, Math.PI * 2, true);
			c.fill();
		}
		
	}
