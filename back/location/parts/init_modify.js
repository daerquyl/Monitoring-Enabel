
						$(document).ready(function(){
							$(".delete-link").on("click",function(){
								$("#delete-btn a").attr("href",$(this).attr("href"));
								$("#delete-msg span").text($(this).attr("data-location"));
							});
							
							function setCreateLocationForm(){
								$("#location-form #id").val("");
								$("#location-form #type").val("REGION").trigger('change');
								$("#location-form #name").val("");
							}
							function setModifyLocationForm(data){
								$("#location-form #id").val(data.id);
								$("#location-form #type").val(data.type).trigger('change');
								$("#location-form #name").val(data.name);
								$("#location-form #department_id").val(data.department_id);
								$("#location-form #region_id").val(data.region_id);
							}
							$(".create-link").on("click",function(){
								setCreateLocationForm();
							});
							$(".update-link").on("click",function(){
								setCreateLocationForm();
								var id = $(this).attr("data-id");
								var type = $(this).attr("data-type");
								$.ajax({
									async: false,
									type: "GET",
									url: "controller?path=get&id="+id+"&type="+type,
									success: function (data) {
										if(data != undefined && data.location != undefined){
											setModifyLocationForm(data.location);
										}
									}
								});
							});
						});						