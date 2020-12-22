
						$(document).ready(function(){
							$(".delete-link").on("click",function(){
								$("#delete-btn a").attr("href",$(this).attr("href"));
								$("#delete-msg span").text($(this).attr("data-site"));
							});
							
							function setCreateSiteForm(){
								$("#site-form #id").val("");
								$("#site-form #name").val("");
								$("#site-form #latitude").val("");
								$("#site-form #longitude").val("");
								$("#site-form #commune_id").val($("#site-form #commune_id option:first").val()).trigger("change");
							}
							function setModifySiteForm(data){
								$("#site-form #id").val(data.id);
								$("#site-form #name").val(data.name);
								$("#site-form #commune_id").val(data.commune_id).trigger('change');
								$("#site-form #latitude").val(data.latitude);
								$("#site-form #longitude").val(data.longitude);
							}
							$(".create-link").on("click",function(){
								setCreateSiteForm();
							});
							$(".update-link").on("click",function(){
								setCreateSiteForm();
								var id = $(this).attr("data-id");
								$.ajax({
									async: false,
									type: "GET",
									url: "controller?path=get&id="+id,
									success: function (data) {
										if(data != undefined && data.site != undefined){
											setModifySiteForm(data.site);
										}
									}
								});
							});
						});						