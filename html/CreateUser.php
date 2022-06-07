<?php

	include("PHPMailer/PHPMailer.php");
    include("PHPMailer/SMTP.php");
    include("PHPMailer/Exception.php");

if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
	include('conexion/config.php');
	$emailUser 		= trim($_REQUEST['emailUser']);
	$passwordUser    	= trim($_REQUEST['passwordUser']);
	$nameUser  		= filter_var($_REQUEST['nameUser'], FILTER_SANITIZE_STRING);
	date_default_timezone_set("America/Bogota");
	$createUser              = date("Y-m-d H:i:A");

	$PasswordHash = password_hash($passwordUser, PASSWORD_BCRYPT); //Incriptando clave,
	//crea un nuevo hash de contraseña usando un algoritmo de hash fuerte de único sentido.

	/*funcion para capturar la ip del Usuario Logueando*/
	function getVisitorIp()
	{
		if (!empty($_SERVER['HTTP_CLIENT_IP']))   
		{
			$ipAdress = $_SERVER['HTTP_CLIENT_IP'];
		}
		elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
		{
			$ipAdress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		else
		{
			$ipAdress = $_SERVER['REMOTE_ADDR'];
		}
		return $ipAdress;
	}
 $ipUser = getVisitorIp();


 //generar un token o variable aleatoria
 function TokenAleatorio($length = 50) {
    return substr(str_shuffle(str_repeat($x='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}
$miToken  = TokenAleatorio();

 	//Primero verifico si existe algun usuario asociado a dicho correo
 	$SqlVerificandoEmail = ("SELECT emailUser FROM myusers WHERE emailUser COLLATE utf8_bin='$emailUser'");
	$jqueryEmail         = mysqli_query($con, $SqlVerificandoEmail); 
	if(mysqli_num_rows($jqueryEmail) >0){
		//Ya existe el correo
		header("location:formLogin.php?errorC=".$miToken);
	}else{
		//aleatoria
		$codigo = rand(1000,9999);

		$queryInsertUser  = ("INSERT INTO myusers(emailUser,passwordUser, nameUser,ipUser,createUser,confirmado,codigo) VALUES ('$emailUser','$PasswordHash','$nameUser','$ipUser','$createUser','no','$codigo')");
		$resultInsertUser = mysqli_query($con, $queryInsertUser);

		//Se manda el correo
		$mail = new PHPMailer\PHPMailer\PHPMailer();
		if(($_SERVER["REQUEST_METHOD"] == "POST")){
			$emailTo=$_REQUEST['emailUser'];
			$username=$_REQUEST['nameUser'];
		}

		// mensaje
		$mensaje = '
		<html>
			<head>
    			<meta charset="UTF8" />
  				<title>Confirmacion de Correo</title>
			</head>
			<body>
  				<p>tu codigo de verificacion es :!</p>
  				<p>
    			</p>
 				<h2>'.$codigo.'</h2>
				 <img src="Images/fav-icon.png">
			</body>
		</html>
		';
		try {
			$fromemail = "moviesplus042022@gmail.com";
			$fromname = "Movies Plus";
			$host = "smtp.gmail.com";
			$port = "587";
			$SMTPAuth = "login";
			$_SMTPSecure = "tls";
			$password = "MP12345&";
			$subject = "Aviso de Registro del usuario $username";
			$bodyEmail="$mensaje";
			$mail->isSMTP();
			$mail->SMTDebug = 2;
			$mail->Host = $host;
			$mail->Port = $port;
			$mail->SMTPAuth = $SMTPAuth;
			$mail->SMTPSecure = $_SMTPSecure;
			$mail->Username = $fromemail;
			$mail->Password = $password;
			$mail->setFrom($fromemail,$fromname);
			$mail->addAddress($emailTo);
			$mail->isHTML(true);
			$mail->Subject = $subject;
			$mail->Body = $bodyEmail;
			if(!$mail->send()){
				echo 'Mailer Error: ' . $mail->ErrorInfo;
			}else{
				//Se direcciona a la pagina principal
				header("location:confirm.php?fineS=".$miToken);			
			}
	
		} catch (\Throwable $th) { 

		}	
	}
}
?>
