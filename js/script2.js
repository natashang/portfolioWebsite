$(document).ready(function(){
	
	$("#play").click(function(){	
		
		$("#gallery img:last-child").animate({'opacity':'0'},2000,function(){
			
			var x=$("#gallery img:last-child").attr('src');	
			
			$("#gallery").prepend('<img src="'+x+'" />');		
			
			$("#gallery img:last-child").remove();
			
			$("#play").click();	
			
		});
		
		
	});
	
	$("#play").click();		
	
	
	
	})