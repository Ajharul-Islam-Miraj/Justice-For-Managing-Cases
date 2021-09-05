$(document).ready(function(){
	var user_id = $("#user_info").attr('class');
	getUser();
	function getUser() {
		$.ajax({
			url: "../../controllers/userController.php", 
			type: "POST",
			data: {type: "4", user_type: "admin", id: user_id},
			success: function(result){
				$("#profile_img").attr("profile_img",)
				$("#user_info").html(result);
		 }});
	}
	
});