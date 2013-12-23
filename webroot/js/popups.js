function pop(){
	$("#flashMessage").hide();
	if ( $("#flashMessage").length > 0 ) {
      	var pop = document.getElementById('flashMessage');
  		$("#flashMessage").fadeIn("slow",function() {
	    	setTimeout(function() {
	    		$('#flashMessage').fadeOut("slow");
	    	}, 5000);
	  	});
	}
}