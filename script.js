$(function() {



	$("#dob").focusout(function(){
		var dob = this.value;

		
		var selected = new Date(dob);

		var now = new Date();


		if (selected > now) {

			alert("Invalid Date of Birth");

			this.value = now;
			this.focus();
		}

	});


	$("#male").click(function(){

		if($(this).prop('checked')==true) {

			$("#female").prop('checked', false);
		}else {

			$("#female").prop('checked', true);
		}
	});

	$("#female").click(function(){

		if($(this).prop('checked')==true) {

			$("#male").prop('checked', false);
		}else {
			$("#male").prop('checked', true);
		}
	});


	$(".frmel").blur(function(){
		
		var val = $(this).val();
		var name = $(this).attr('name');


		if (val=="") {
			$(this).addClass('error');
			this.focus();
			
		}else {
			$(this).removeClass('error');
		}
	});
	

	
});
