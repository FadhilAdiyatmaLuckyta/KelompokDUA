<html>
	<title>Form Login lansa</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<head>
	<div class="kotak_login">
		<table width="300" align="center">
			<form name="form1" method="post" action="ceklogin.php">
			
			<tr>
 
				<td colspan="3"><strong>Form Login</strong></td>
			</tr>
            
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input name="email" type="text" id="email"/>
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input name="password" type="password" id="password"/></td>
			</tr>
			<tr>
				<td><input type="submit" name="Submit" value="Login"/></td>
			</tr>
		</form>
		</table>
</div>
	</head>
</html>