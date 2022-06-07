<?php
    include("PHPMailer/PHPMailer.php");
    include("PHPMailer/SMTP.php");
    include("PHPMailer/Exception.php");

    function correoRegistro(){
    $mail = new PHPMailer\PHPMailer\PHPMailer();

    $emailTO = "hipwarfth19905@gmail.com";

    //aleatoria
		$codigo = rand(1000,9999);

		// mensaje
		$mensaje = '
		<html>
			<head>
    			<meta charset="UTF8" />
  				<title>Confirmacion de Correo</title>
			</head>
			<body>
  				<p>tu codigo de verificacion es :!</p>
  				<p> <a 
     				href="confirm.php?email='.$email.'">
    				Verificar cuenta </a> 
    			</p>
 				<h2>'.$codigo.'</h2>
  
			</body>
		</html>
		';

    try {

        $fromemail = "moviesplus042022@gmail.com";
        echo("mail");
        $fromname = "Movies Plus";
        echo("name");
        $host = "smtp.gmail.com";
        echo("host");
        $port = "587";
        echo("port");
        $SMTPAuth = "login";
        echo("login");
        $_SMTPSecure = "tls";
        echo("tls");
        $password = "MP12345&";
        echo("pass");
        $subject = "Aviso de Registro";
        echo($subject);
        $bodyEmail="Gracias por elegirnos %$emailTO%";
        
        echo("1111111");
        echo("hola");

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

        echo("22222222");

        if(!$mail->send()){
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            error_log("Sucess");
            echo("No se mando");
            return true;
        }

    } catch (\Throwable $th) {    
    }
}
?>