
						$(document).ready(function(){
							$(".delete-link").on("click",function(){
								$("#delete-btn a").attr("href",$(this).attr("href"));
								$("#delete-msg span").text($(this).attr("data-campaign"));
							});
							
							function setCreateCampaignForm(){
								$("#campaign-form #id").val("");
								$("#campaign-form #title").val("");
								$("#campaign-form #start_date").val("");
								$("#campaign-form #end_date").val("");
							}
							function setModifyCampaignForm(data){
								$("#campaign-form #id").val(data.id);
								$("#campaign-form #title").val(data.title);
								$("#campaign-form #start_date").val(data.start_date);
								$("#campaign-form #end_date").val(data.end_date);
							}
							
							function updateExtendLinkAction(self){
								$("#campaign-form #start_date").parent().show();
								setCreateCampaignForm();
								var id = $(self).attr("data-id");
								$.ajax({
									async: false,
									type: "GET",
									url: "controller?path=get&id="+id,
									success: function (data) {
										if(data != undefined && data.campaign != undefined){
											setModifyCampaignForm(data.campaign);
										}
									}
								});
							}
							$(".create-link").on("click",function(){
								$("#campaign-form #path").val("addorupdate");
								$("#campaign-form #start_date").parent().show();
								setCreateCampaignForm();
							});
							$(".update-link").on("click",function(){
								$("#campaign-form #path").val("addorupdate");
								updateExtendLinkAction(this);
							});
							$(".extend-link").on("click",function(){
								$("#campaign-form #path").val("extend");
								updateExtendLinkAction(this);
								$("#campaign-form #start_date").parent().hide();
							});
						});						