<html>
	
	<head>
		<title>Sign Up System</title>
		<script src="sandbox/jquery_library.js"></script>
		<script src="sandbox/validation.js"></script>
		<link rel="stylesheet" href="sandbox/style.css" />
	</head>
	
	<body>
	
	<div id="wrapper">
	<div id="form">
			<input type="text" id="fname" placeholder="First Name" class="formFields" /><span class="errors" id="fnameerror"></span><br><br>
			<input type="text" id="lname" placeholder="Last Name" class="formFields" /><span class="errors" id="lnameerror"></span><br><br>
			<input type="text" id="email" placeholder="Email" class="formFields" /><span class="errors" id="emailerror"></span><br><br>
			<input type="password" id="password" placeholder="Password" class="formFields" /><span class="errors" id="passworderror"></span><br><br>
			<input type="password" id="repassword" placeholder="Password Again" class="formFields" /><span class="errors" id="repassworderror"></span><br><br>
			
			
			Male <input type="radio" id="male" name="gender"/> &nbsp;&nbsp;&nbsp;
			Female<input type="radio" id="female" name="gender" /><span class="errors" id="gendererror"></span><br><br>

			<input type="text" id="website" placeholder="Website" class="formFields" /><span class="errors" id="websiteerror"></span><br><br>
			<input type="button" id="submitbtn" value="Sign Up"/><span class="errors" id="formerror"></span>
	</div>
	</div>
	</body>

</html>