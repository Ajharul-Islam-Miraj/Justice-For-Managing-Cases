$(document).ready(function(){
	getAllLawyer();
	function getAllLawyer() {
		$.ajax({
			url: "../../controllers/userController.php", 
			type: "POST",
			data: {type: "1", user_type: "client"},
			success: function(result){
				$("#user_info").html(result);
		 }});
	}
	
	$(document).on('click','#remove_lawyer',function(){
		 $.ajax({
			url: "../../controllers/userController.php",
			type: "POST",
			data: {type: "2", id: $(this).attr("class"),user_type: "client"},
			success: function(result){
				alert("Delete");
				getAllLawyer();
		 }});
		 
	 })
	var user_id = "";
	$(document).on('click','.update_lawyer_btn',function(){
		var users_info = $(this).attr("class");
		users_info = users_info.split(" ");
		user_id = parseInt(users_info[0]);
		$("#client_name").attr("value", users_info[1]);
		$("#nid").attr("value", users_info[3]);
		$("#phone").attr("value", users_info[2]);
		 
	 })
	 $(document).on('click','.update_data',function(){	
		 $.ajax({
			 
			url: "../../controllers/userController.php",
			type: "POST",
			data: {type: "3", id: user_id, username: $("#client_name").val(), nid:$("#nid").val(), phone:$("#phone").val(),user_type: "client"},
			success: function(result){
				$("#update_form").modal('hide');
				alert("Update");
				getAllLawyer();
		 }});
		 
	 })
	 //$("#update_form").modal();
});