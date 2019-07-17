$(document).ready(function(){
	
		var fname = "";
		var lname = "";
		var email = "";
		var password = "";
		var repassword = "";
		var gender = "";
		var website = "";
		
		
	$("#fname").keyup(function(){
		
				var vall = $(this).val();
				
				if(vall == "")
				{
					$("#fnameerror").html("<span style='color:red;'>Please enter your first name</span>");
					fname = "";
				}
				else if(vall.length < 3)
				{
					$("#fnameerror").html("<span style='color:red;'>First name is too short</span>");
					fname = "";
				}
				else
				{
					$("#fnameerror").html("<span style='color:green;'>Awesome!</span>");
					fname = vall;
				}
		
	});
	
	
	
	
		
	$("#lname").keyup(function(){
		
				var vall = $(this).val();
				
				if(vall == "")
				{
					$("#lnameerror").html("<span style='color:red;'>Please enter your last name</span>");
					lname = "";
				}
				else if(vall.length < 3)
				{
					$("#lnameerror").html("<span style='color:red;'>Last name is too short</span>");
					lname = "";
				}
				else
				{
					$("#lnameerror").html("<span style='color:green;'>Awesome!</span>");
					lname = vall;
				}
		
	});
	
	
	$("#email").keyup(function(){
		
			
			var vall = $(this).val();
			
			if(vall == "")
			{
				$("#emailerror").html("<span style='color:red;'>Please enter your Email Address</span>");
				email = "";
			}
			else
			{
				$.ajax({
					
					type:'POST',
					url:'sandbox/script.php',
					data:"email="+vall,
					success:function(msg){
						
						if(msg == "invalid"){
						
						$("#emailerror").html("<span style='color:red;'>Email is invalid</span>");
						email = "";
						
						}
						else if(msg == "exists")
						{
							$("#emailerror").html("<span style='color:red;'>Email already exists</span>");
							email = "";

					    }
						else if(msg == "OK")
						{
							$("#emailerror").html("<span style='color:green;'>Awesome!</span>");
							email = vall;
						}

						
					}
					
					
				});
			}
		
		
	});
	
	
	$("#password").keyup(function(){
		
			var vall = $(this).val();
			
			if(vall == "")
			{
				$("#passworderror").html("<span style='color:red;'>Please enter a new password</span>");
				password = "";

			}
			else if(vall.length < 9)
			{
				$("#passworderror").html("<span style='color:red;'>Password must be greater than 8 characters</span>");
				password = "";
			}
			else{
			
				$("#passworderror").html("<span style='color:green;'>Awesome!</span>");
				
				password = vall;
				
			}
		
	});
	
	
	
	$("#repassword").keyup(function(){
		
			var vall = $(this).val();
			
			if(vall == "")
			{
				$("#repassworderror").html("<span style='color:red;'>Please re-enter your password</span>");
				repassword = "";

			}
			else if(password !== vall)
			{
				$("#repassworderror").html("<span style='color:red;'>Password does not match</span>");
				repassword = "";
			}
			else{
			
				$("#repassworderror").html("<span style='color:green;'>Awesome!</span>");
				
				repassword = vall;
				
			}
		
	});
		
		
	
	
		$("#male").click(function(){
			
				gender = "Male";
				$("#gendererror").html("<span style='color:green;'>Awesome!</span>");

			
		});
	
	
	
		$("#female").click(function(){
			
				gender = "Female";
				$("#gendererror").html("<span style='color:green;'>Awesome!</span>");

			
		});
	
			
	$("#website").keyup(function(){
		
			var vall = $(this).val();
			
			if(vall == "")
			{
				$("#websiteerror").html("<span style='color:red;'>Please enter your website</span>");
				website = "";
			}
			else
			{
				$("#websiteerror").html("<span style='color:green;'>Awesome!</span>");
				website = vall;

			}
			
		
	});
	
	
	
	$("#submitbtn").click(function(){
		
		
		
		if(fname == "" || lname == "" || email == "" || password == "" || repassword == "" || gender == "" || website == "")
		{
			$("#formerror").html("<span style='color:red;'>Please correct the errors on the form!</span>");
		}
		else
		{ 
			
		var formDiv = $("#form");
		
		formDiv.html("<img src='loading.gif' width='100'/>");
			
			
			$.ajax({
				
				type:'POST',
				url:'sandbox/script.php',
				data:"fname="+fname+"&lname="+lname+"&email="+email+"&password="+password+"&gender="+gender+"&website="+website,
				success:function(msg){
					
					if(msg == "done")
					{		
						$("#form").html("You are signed Up!");
					}
					else
					{
					    $("#form").html("There is an error, please try again later!");

					}
					
				}
				
			});
			
			
		}
		
	})
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
			
			
	
});