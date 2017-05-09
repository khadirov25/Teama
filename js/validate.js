$(document).ready(function() {
			
				$('#name').on('input', function() {
					var input=$(this);
					var is_name=input.val();
					var error_name=$('#error_name');
					if(is_name){input.removeClass("invalid").addClass("valid");
					error_name.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");
					error_name.removeClass("valid").addClass("invalid");}
				});
				
				
				$('#email').on('input', function() {
					var input=$(this);
					var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
					var is_email=re.test(input.val());
					var error_email = $('#error_email');
					if(is_email){input.removeClass("invalid").addClass("valid");
					error_email.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");
					error_email.removeClass("valid").addClass("invalid");}
				});
				
				
				$('#username').on('input', function() {
					var input=$(this);
					var re = /^[a-z][a-z0-9_\.]{0,24}$/i;
					var error_username = $('#error_username');
					var is_username=re.test(input.val());
					if(is_username){input.removeClass("invalid").addClass("valid");
					error_username.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");
					error_username.removeClass("valid").addClass("invalid");}
				});
				
				
				$('#password').on('input', function() {
					var input=$(this);
					var re = /^[a-z][A-Z0-9_\.]{5,24}$/i;
					var error_password = $('#error_password');
					var is_password=re.test(input.val());
					if(is_password){input.removeClass("invalid").addClass("valid");
					error_password.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");
					error_password.removeClass("valid").addClass("invalid");}
				});
		
				
				$('#repassword').on('input', function() {
					var input=$(this);
					var password_cmp=$('#password')
					var error_repassword = $('#error_repassword')
					if(input.val()==password_cmp.val()){input.removeClass("invalid").addClass("valid");
					error_repassword.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");
					error_repassword.removeClass("valid").addClass("invalid");}	
				});

				$('#phone').on('input', function() {
					var input=$(this);
					var re = /^(\()?\d{2}(\))?(-|\s)?\d{3}(-|\s)\d{4}$/;
					var error_phone = $('#error_phone');
					var is_phone=re.test(input.val());
					if(is_phone){input.removeClass("invalid").addClass("valid");
					error_phone.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");
					error_phone.removeClass("valid").addClass("invalid");}
				});

			$("#submit").click(function(event){
				var error_free=true;
				var element = $('#name');
				var valid=element.hasClass("valid");
				if (!valid){error_free=false;}
				else{error_free=true;}
				element = $('#email');
				valid=element.hasClass("valid");
				if (!valid){ error_free=false;}
				else{error_free=true;}
				element = $('#username');
				valid=element.hasClass("valid");
				if (!valid){error_free=false;}
				else{error_free=true;}
				element = $('#password');
				valid=element.hasClass("valid");
				if (!valid){error_free=false;}
				else{error_free=true;}
				element = $('#repassword');
				valid=element.hasClass("valid");
				if (!valid){error_free=false;}
				else{error_free=true;}
				element = $('#phone');
				valid=element.hasClass("valid");
				if (!valid){error_free=false;}
				else{error_free=true;}
				if (!error_free){
					event.preventDefault();
					alert('Form should be submitted correctly!'); 
				}
				// else{
					
				// }
			});
		});