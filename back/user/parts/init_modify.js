
	$(document).ready(function(){
		$(".delete-link").on("click",function(){
			$("#delete-btn a").attr("href",$(this).attr("href"));
			$("#delete-msg span").text($(this).attr("data-user"));
		});
		
		function setCreateUserForm(){
			$("#user-form #role option:selected").prop("selected",true);
			$("#user-form #id").val("");
			$("#user-form #name").val("");
			$("#user-form #login").val("");
			$("#user-form #email").val("");
		}
		function setModifyUserForm(data){
			$("#user-form #role").val(data.role).trigger('change');
			$("#user-form #id").val(data.id);
			$("#user-form #name").val(data.name);
			$("#user-form #login").val(data.login);
			$("#user-form #email").val(data.email);
			$("#user-form #organization_id").val(data.organization_id);
			$("#user-form #supervisor_id").val(data.supervisor_id);
			$("#user-form #deputy_id").val(data.deputy_id);
			$("#user-form #manager_id").val(data.manager_id);
			$("#user-form #admin_ong_id").val(data.admin_ong_id);
			
			switchForm(superior);
		}
		$(".create-link").on("click",function(){
			setCreateUserForm();
		});
		$(".update-link").on("click",function(){
			setCreateUserForm();
			var id = $(this).attr("data-id");
			$.ajax({
				async: false,
				type: "GET",
				url: "controller?path=get&id="+id,
				success: function (data) {
					if(data != undefined && data.user != undefined){
						setModifyUserForm(data.user);
					}
				}
			});
		});
	});						
