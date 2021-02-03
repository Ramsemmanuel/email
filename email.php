<?php
require_once './vendor/autoload.php';
 
try {

    $transport = (new Swift_SmtpTransport('smtp.absa.co.za', 25))
        ->setUsername('CORP\SVC-Latelierwebsite')
        ->setPassword('!8xsBzOuh26XhIqE');

    $mailer = new Swift_Mailer($transport);

    $message = new Swift_Message();
 
  
    $message->setSubject('Testing email to send');
 
    $message->setFrom(['noreplylateliercompetition@absa.co.za' => 'Latelier  Competition']);

    
    $message->addTo('dkmunwana@gmail.com','recipient name');
 
    $message->setBody("This is the plain text body of the message.\nThanks,\nAdmin");
 
    
    $message->addPart('This is the HTML version of the message.<br>Example of inline image:<br><br>Thanks,<br>Admin', 'text/html');
 
    
    $result = $mailer->send($message);
} catch (Exception $e) {
  echo $e->getMessage();
}