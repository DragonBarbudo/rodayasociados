<?php
/*
	include('eden.php');
	$smtp = eden('mail')->smtp('smtp.mandrillapp.com', 'contacto@rodayasociados.com', '70YgZWhRlKbpk_bgto3CVQ', 587, false);
	$smtp->setSubject('Prueba Mandrillonia!!')
    ->setBody('<p style="background:#336699; color:#fff;">Hello you!</p>', true)
    ->addTo('ealbinu@gmail.com')
    ->send();
    $smtp->disconnect();
*/

	include('php/swift/swift_required.php');
	
	$subject = 'Hello from Mandrill, PHP!';
	$from = array('contacto@rodayasociados.com.mx' =>'Roday & Asociados');
	$to = array(
	'ealbinu@gmail.com'  => 'Albin Rodríguez A.'
	);
	
	$text = "Mandrill speaks plaintext & ";
	$html = "<em>Mandrill speaks <strong>HTML</strong></em>";
	
	$transport = Swift_SmtpTransport::newInstance('smtp.mandrillapp.com', 587);
	$transport->setUsername('dragonbarbudo');
	$transport->setPassword('70YgZWhRlKbpk_bgto3CVQ');
	$swift = Swift_Mailer::newInstance($transport);
	
	$message = new Swift_Message($subject);
	$message->setFrom($from);
	$message->setBody($html, 'text/html');
	$message->setTo($to);
	$message->addPart($text, 'text/plain');
	
	if ($recipients = $swift->send($message, $failures))
	{
	echo 'Message successfully sent!';
	} else {
	echo "There was an error:\n";
	print_r($failures);
	}

?>