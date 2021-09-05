$(document).ready(function(){
	getReviews();
	function getReviews() {
		$.ajax({
			url: "../../controllers/reviewController.php", 
			type: "POST",
			success: function(result){
				$("#review-box").html(result);
		 }});
	}
});