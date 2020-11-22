<?php 

	$email = $_POST["email"];
	$senha = $_POST["senha"];

	$captcha = curl_init();
	curl_setopt($captcha, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
	curl_setopt($captcha, CURLOPT_SSL_VERIFYHOST , 0);
	curl_setopt($captcha, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($captcha, CURLOPT_POSTFIELDS, http_build_query(array(
		"secret"=>"6Ld0ueYZAAAAAJKfuiKZkivBrNdJ9ulDrMw3NpMe",
		"response"=>$_POST["g-recaptcha-response"],
		"remoteip"=>$_SERVER["REMOTE_ADDR"]
	)));

	curl_setopt($captcha, CURLOPT_RETURNTRANSFER , true);
	$recaptcha = json_decode(curl_exec($captcha),true);

	curl_close($captcha);


	if ($recaptcha["success"] === true ){
		echo "Login Realizado: ".$email;
	}else{
		echo "Realize o login novamente." ;
	}
	
	if ($recaptcha["success"] === false){
		echo "Usuário ou senha inválidos";
	}
?>