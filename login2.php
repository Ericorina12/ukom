
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
	<style> 
	.body{
		
	}
	.container{
		width: 20px;
		height: 20px;
		margin-right: 50%;
		margin-left: 50%;

		}
	.form-grup{
		font-size: 20px;
	}	

	.button{
		font-size: 20px;
		
	}
		
	</style>
</head>
<body>
	<div class="container">
	<form action ="login.php" method="post">
	<h1>login</h1>
	<div class="form-grup">
	<label for="username">username</label><br>
	<br><input type="username" id="username" name="username" required><br>
	<div class="form-grup">
	<br><label for="username">password</label><br>
	<br><input type="password" id="password"name="password" required><br>
	<div class="button">
	<br><button onclick="submit"  value="submit" >submit</button><br>
</form>

	</div>
</div>
</div>
</div>

</body>

</html>