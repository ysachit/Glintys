// JavaScript Document
$(document).ready(function() {
				$(".sl_link").click(function(event){
					$('.l_pane').slideToggle('normal').toggleClass('dn');
					$('.sl_link,.lb_ribbon').children('span').toggle();
					event.preventDefault();
				});

				$("#l_form").validate({
					highlight: function(element) {
						$(element).closest('.elVal').addClass("form-field error");
					},
					unhighlight: function(element) {
						$(element).closest('.elVal').removeClass("form-field error");
					},
					rules: {
						username: "required",
						password: "required"
					},
					messages: {
						username: "Please enter your username (type anything)",
						password: "Please enter a password (type anything)"
					},
					errorPlacement: function(error, element) {
						error.appendTo( element.closest(".elVal") );
					}
				});

				$("#rp_form").validate({
					highlight: function(element) {
						$(element).closest('.elVal').addClass("form-field error");
					},
					unhighlight: function(element) {
						$(element).closest('.elVal').removeClass("form-field error");
					},
					rules: {
						upname: {
							required: true,
							email: true
						}
					},
					messages: {
						upname: "Please enter a valid email address"
					},
					errorPlacement: function(error, element) {
						error.appendTo( element.closest(".elVal") );
					}
				});
			});