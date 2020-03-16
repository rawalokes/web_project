<!DOCTYPE html>
<html>
<head>
	<title>singup</title>
<link rel="stylesheet" href="style.css"> 
</head>
<body>
	<center>
	<div class="container">
		<h2>Singup</h2>
		<form action="insert2.php" method="post">
		
			<label class="aling" for="name">Name</label><br>

				<input type="text" placeholder="username" name="name" id="name"required ><hr>
				                          
				                          <br>
 <label class="aling" for="email">E-mail</label><br>
 

				<input type="email" placeholder="e-mail" name="email" id="email"required ><hr>
				                          
				                          <br>
<label class="aling" for="password">Password</label><br>

				<input type="Password" placeholder="Password" name="password" id="password"required ><hr>
				                          
				                          <br>

<label class="aling" for="dob">DOB</label><br>

				<input type="Date" placeholder="Date Of Birth" name="dob" id="dob"required ><hr>
				                          
				                          <br>
<label class="aling" for="gender">Gender</label><br>
<br>

				<select class="special" name="gender" id="gender">  
				    <option value="male">Male</option>
				          <option value="female">Female</option>
				                 <option value="Others">Others</option>    </select>  
				                          
				                          <br>

				                          <br>
				                          	<button class="bty" >Singup</button>


		</form>
	</div>	
</body>
</html>