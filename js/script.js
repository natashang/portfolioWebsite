/*used in Contact.html form element*/

function valid() {

	var name =document.forms["myForm"]["name"].value;
	var email=document.forms["myForm"]["email"].value;
	var phoneno=document.forms["myForm"]["phone"].value;
	var comments =document.forms["myForm"]["comments"].value;


	if (name == "" || name == null) {
		alert("Please enter your name.");
		return false;
	}

	else if (email == "" || email == null) {
		alert("Please enter your email.");
		return false;
	}

	else if (phone =="" || phone == null) {
		alert("Please enter your phone number.");
		return false;
	}

	else if (comments == "" || comments == null) {
		alert("Please enter a comment.");
		return false;
	}


	
}

/*
$(document).ready(function() {

	$('#slider').cycle({

		fx: 'scrollHorz',
		next: '#next',
		prev: '#pre',
		timeout: 3000,
		pause: 1,

	});
	
	$(".picture").click(function() {

		var img=$(this).attr("src");

		$("body").append('<div id="curtain"></div>');

		$("body").append('<img src="'+img+'" id="light" />');

		$("body").append('<img src="../images/close.png" id="close" />');

		$("#light").animate({'opacity': '1'}, 1000);

		$("#light,#curtain, #close").click(function() {

			$("#light").remove();
			$("#curtain").remove();
			$("#close").remove();

		});

	});
});*/


