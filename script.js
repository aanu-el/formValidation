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
});