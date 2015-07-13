<?php 
require_once 'lib/swift_required.php';

// Create the Transport
$transport = Swift_SmtpTransport::newInstance('smtp-mail.outlook.com', 587, 'tls')
->setUsername('ryan@yuzhi.tw')
->setPassword('wayne0717')
;


$mailer = Swift_Mailer::newInstance($transport);

// Create a message
$message = Swift_Message::newInstance('中文測試2')
->setFrom(array('ryan@yuzhi.tw' => '邱榮嘉'))
->setTo(array('chiujchia@gmail.com', 'hkac.astroband.us@gmail.com' => 'A name'))
->setBody('Here中文測試 is the message itself')
// And optionally an alternative body
->addPart('<q>Here is the message itself</q>', 'text/html')
->attach(Swift_Attachment::fromPath('test.txt'))
;

// Send the message
$numSent = $mailer->send($message);

echo 'ok '.date("H:i:s");
?>