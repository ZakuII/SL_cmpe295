$("#PQedit2").live('pagebeforeshow', function(){	
console.log("hello world")

var prevRenOut = '<li><h4>Name</h4><span data-role="fieldcontain"><label for="pq_1_0">Last</label><input type="text" name="pq_1_0" id="pq_1_0" value=""/><label for="pq_1_1">First</label><input type="text" name="pq_1_1" id="pq_1_1" value=""/><label for="pq_1_2">Middle</label><input type="text" name="pq_1_2" id="pq_1_2" value=""/></span></li>';

prevRenOut += '<h4>Radio Test</h4><span data-role="fieldcontain"><fieldset data-role="controlgroup" data-type="horizontal" id="prev-radio0"><legend>r1</legend><input type="radio" name="pq_2_0" id="pq_2_0x0" value="yes"/><label for="pq_2_0x0">yes</label><input type="radio" name="pq_2_0" id="pq_2_0x1" value="no"/><label for="pq_2_0x1">no</label><input type="radio" name="pq_2_0" id="pq_2_0x2" value="maybe"/><label for="pq_2_0x2">maybe</label></fieldset></span>';

$(prevRenOut).appendTo("#pqDisplay");
$("#pqDisplay").trigger("create");
});