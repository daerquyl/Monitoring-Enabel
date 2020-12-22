
						$(document).ready(function(){
							$(".delete-link").on("click",function(){
								$("#delete-btn a").attr("href",$(this).attr("href"));
								$("#delete-msg span").text($(this).attr("data-organization"));
							});
							
							function setCreateOrganizationForm(){
								$("#organization-form #id").val("");
								$("#organization-form #name").val("");
								$("#organization-form #logo").val("");
								$("#organization-form #description").val("");
							}
							function setModifyOrganizationForm(data){
								$("#organization-form #id").val(data.id);
								$("#organization-form #name").val(data.name);
								$("#organization-form #logo").val(data.logo);
								$("#organization-form #description").val(data.description);
							}
							$(".create-link").on("click",function(){
								setCreateOrganizationForm();
							});
							$(".update-link").on("click",function(){
								setCreateOrganizationForm();
								var id = $(this).attr("data-id");
								$.ajax({
									async: false,
									type: "GET",
									url: "controller?path=get&id="+id,
									success: function (data) {
										if(data != undefined && data.organization != undefined){
											setModifyOrganizationForm(data.organization);
										}
									}
								});
							});
						});						