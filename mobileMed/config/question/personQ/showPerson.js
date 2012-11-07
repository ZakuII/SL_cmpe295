$("#pqShow").live('pagebeforeshow', function(){
	
	//console.log("hello world")
	$('body').addClass('ui-loading');
	/*$.getJSON("/kohana/question/personQuest/getAnswer?id=1",function(data){
	//$.getJSON("/kohana/question/personQuest/getAnswer",function(data){
		
		var pqlist = '<ul data-role="listview">';
		
		$.each(data.personalAnswer, function(i,user){
			if(user.display==1){
			pqlist += '<li><h5>'+user.question+'</h5>';
			pqlist += '<p style="font-family:arial;font-size:14px;">'+user.content+'</p>';
			pqlist += '</li>';
			}
		});
		pqlist += '</ul>';
		$("#pqshow").append(pqlist);
		$("#pqshow").trigger("create");	
		
	});*/
	
	$('body').removeClass('ui-loading');
	//$("#pqlog").append("SHOW: "+sessionStorage.pQnum+"</br></br></br>");
	
});
