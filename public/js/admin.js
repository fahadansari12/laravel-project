$(document).ready(function() { 
	alert("oifejebfeir");
    setInterval(function() {
		$('#res').load('{{ action("DemoController@index") }}');          
	},1000);
});
	