<?php
header("Content-Type: text/html; charset=utf-8");

$n=$_GET['n'];
$c=$_GET['c'];
$t=$_GET['t'];
$co=$_GET['co'];
$m=$_GET['m'];

$correo_destinatario = "contacto@rodayasociados.com.mx";
$nombre_remitente = $n;
$correo_remitente = $c;
$asunto = "Mensaje rodayasociados.com.mx";
$mensaje='<strong>Nombre:</strong> '.$n."<br/>";
$mensaje.='<strong>Correo:</strong> '.$c."<br/>";
$mensaje.='<strong>Tel&eacute;fono:</strong> '.$t."<br/>";
$mensaje.='<strong>Compa&ntilde;&iacute;a:</strong> '.$co."<br/>";
$mensaje.='<strong>Mensaje:</strong> '.$m."<br/>";
/*
$headers = "From: ".$nombre_remitente."\r\n"."Reply-To: ".$correo_remitente."\r\n"."X-Mailer: PHP/".phpversion();
function mailutf8($correo_destinatario, $asunto = "(Sin Asunto)", $mensaje="", $header=""){
	$header_on = "MIME-Version: 1.0"."\r\n"."Content-type: text/html; charset=UTF-8"."\r\n";
	if(mail($correo_destinatario, "=?UTF-8?B?".base64_encode($asunto)."?=", $mensaje, $header_on.$header)){
		echo "Mensaje enviado. Nos pondremos en contacto.";
	} else {
		echo "Error en el envío. Intentelo de nuevo más tarde.";
	}
}
mailutf8($correo_destinatario, $asunto , $mensaje, $headers);

*/


include('../eden.php');
$smtp = eden('mail')->smtp('smtp.mandrillapp.com', 'contacto@rodayasociados.com.mx', '70YgZWhRlKbpk_bgto3CVQ', 587, false);
if(
$smtp->setSubject($asunto)
->setBody($mensaje, true)
->addTo($c)
->send()){
	echo "Mensaje enviado. Nos pondremos en contacto.";
} else {
	echo 'Ocurrió un error';
}
$smtp->disconnect()

?>