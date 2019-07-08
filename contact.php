<?
$name  = $_REQUEST["name"];
$email = $_REQUEST["email"];
$mobile   = $_REQUEST["mobile"];
$msg   = $_REQUEST["msg"];
$to    = "pantisanchezmusic@gmail.com";
if (isset($email) && isset($name) && isset($msg)) {
    $subject = "$name te envio un mensaje a traves de Panti sanchez music";
		$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: ".$name." <".$email.">\r\n"."Reply-To: ".$email."\r\n" ;
$msg     = "De: $name<br/> Email: $email <br/> Celular: $mobile <br/>Mensaje: $msg";
	
   $mail =  mail($to, $subject, $msg, $headers);
  if($mail)
	{
		echo 'success';
	}

else
	{
		echo 'failed';
	}
}

?>