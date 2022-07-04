<?php 
    function sendMailTo($to) {    
        $subject = 'Test send mail';
        $message = "Hi, my name is Long, I am 22, I from DakLak province";    
        $message = wordwrap($message, 70, "\r\n");
        $headers = 'From: longdang.24hdev@gmail.com' . "\r\n" .    
        'Reply-To: longdang.24hdev@gmail.com' . "\r\n" .    
        'X-Mailer: PHP/' . phpversion();
        mail($to, $subject, $message, $headers);
    }
?>