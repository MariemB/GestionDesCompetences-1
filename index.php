<?php 
	include_once("config.php");
?>

<?php if( !(isset( $_POST['login'] ) ) ) { ?>

<!DOCTYPE html>
<head>
	<meta charset=UTF-8" />
	<title>LOGIN</title>
	<link rel="stylesheet" href="css/screen.css"  media="screen"  />
	<!--  jquery core -->
	<script src="js/jquery/jquery-1.4.1.min.js" ></script>

	<!-- Custom jquery scripts -->
	<script src="js/jquery/custom_jquery.js" ></script>

	<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
	<script src="js/jquery/jquery.pngFix.pack.js"></script>
	<script>
	$(document).ready(function(){
	$(document).pngFix( );
	});
	</script>
</head>

<body id="login-bg"> 
	<center> <strong> LOGIN </center>
	<!-- Start: login-holder -->

	<div id="login-holder">

		<!-- start logo -->
		<div id="logo-login">
		
		</div>
		<!-- end logo -->
	
		<div class="clear"></div>
	
		<!--  start loginbox  -->
			<div id="loginbox">
	
				<!--  start login-inner -->
	
				<div id="login-inner">
					<form method="post" action="">
						<table border="0" cellpadding="0" cellspacing="0">
		
							<tr>
								<th>Username :</th>
								<td><input type="text"  name="username" class="login-inp" placeholder="Username"  required="required"/></td>
							</tr>
							<tr>
								<th>Password :</th>
								<td><input type="password" name="password" onfocus="this.value=''"  class="login-inp" placeholder="********" required="required"/></td>
							</tr>
							<tr>
								<th></th>
							</tr>
							<tr>
								<th></th>
							</tr>
							<tr>
								<th></th>
							</tr>
							<tr>
								<th></th>
								<td align="center"><input type="submit" class="submit-login"  name="login"/></td>
							</tr>
						</table>
					</form>
				</div>
				<!--  end login-inner -->
	<div class="clear"></div>
	<a href="" class="forgot-pwd">MOT DE PASSE OUBLIE ?</a>
 </div>

 <!--  end loginbox -->
</body>
</html>

<?php 
} else {
	$usr = new Authentification;
	$usr->storeFormValues( $_POST );
	
	if( $usr->logUser() ) {
		echo "Welcome";	
	} else {
		echo "Erreur";	
	}
}
?>
