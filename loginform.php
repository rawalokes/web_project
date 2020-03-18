<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" href="style.css"> 
</head>
<body>
	
	<center>

	
	
	<div class="container">
		<h2>LOGIN</h2>
		
		<img src="log.jpg"style="width:360px;height:200px;">

		
	
		<form action="logcod.php" method="post">
		
		<label class="aling" for="email">Email</label><br>

		<input type="email" placeholder="email" name="email" id="email"required >
		
		<br>

		<label class="aling" for="password">Password</label><br>
		<input type="password" name="password" placeholder="password" id="password" required>
		
		   	
		   <br>
		   
		   	<button type="submit" id="login" name="login">Login</button>
		   	
		   
	</div>
	</form> 

</body>
</html>
