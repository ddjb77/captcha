
<html>
<head>
	
	<title>ReCaptcha</title>
	<meta charset="utf-8">
	<style>
		body { box-sizing:border-box;
			   position: relative;
			   width:100%;
			   height:auto;
			   display: grid;
			   place-items: center;
			   font-family: sans-serif;
			   text-align:center;
		
		}
		
		#form {
		
			display:flex;
			background-color: rgba(13, 9, 36, 0.062);
			
			
			}
			
			
		

		#form div {
			margin:25px;
			}
		
		#form input[type="submit"] {
			width:100%;
			padding:10px;
			background-color:rgb(0, 255, 191);
			color:rgb(255, 255, 255);
			border:none;
			cursor:pointer;
			margin-right:10px;
			
		}
		
		.resend {
			display: inline-flex;
			cursor:pointer;
		}
		
		#form input[type="reset"] {
			width:100%;
			padding:10px;
			background-color:#FF9800;
			color:rgb(255, 255, 255);
			border:none;
			cursor:pointer;
			
		}
		

		label {
			display:block;
			
		}


	</style>
	<script src='https://www.google.com/recaptcha/api.js' async defer></script>
</head>
<body>
	<p>Login</p>
	<div id="form">
		<form  action="login.php" method="POST">
			
			<div>
				<label> E-mail:
				<input type="email" name="email" size="25" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Ensira um email válido" >
			</label>
			</div>
			
			<div>
				<label> Senha:
				<input type="password" name="senha" size="25" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Deve conter no mínimo uma letra maiúscula e uma minúscula e no mínimo 8 caractéres"></label>
			</div>
			<div class="resend">
				<input type="submit" value="Enviar" name="enviar">
				<input type="reset" value="Limpar" name="Limpar">
			</div>
			
			<div class="g-recaptcha" data-sitekey="6Ld0ueYZAAAAAFIOXrUE5SeDPp1_kDCNJlW-DQM4"></div>
			
		</form>
	</div>
</body>
</html>