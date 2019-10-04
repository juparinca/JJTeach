$(document).ready(function(){
	if($(window).width()<720){
    	$('#calendar').remove();
  	}else{
    	$('#calendar').show();
  }
});