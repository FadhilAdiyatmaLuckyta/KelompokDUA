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

	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <!--<a class="navbar-brand" href="#">Logo</a>-->
  <img src="img/logo.png" class="navbar-brand rounded-circle" alt="Cinque Terre" width="40px" height="50px">
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="home.php"style="font-size:100%;">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"style="font-size:100%;">Profil Kami</a>
	</li>
	<li class="nav-item">
      <a class="nav-link" href="#"style="font-size:100%;">Galeri</a>
	</li>
	<li class="nav-item">
      <a class="nav-link" href="#"style="font-size:100%;">Kontak Kami</a>
    </li>
  </ul>
</nav>

	<div class="kotak_login">
		<table width="300" align="center">
			<form name="form1" method="post" action="ceklogin.php">
			
			<tr>
 
				<td colspan="3" align="center"><strong>Form Login</strong></td>
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