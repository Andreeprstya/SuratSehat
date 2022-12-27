<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "library/PHPMailer.php";
require_once "library/Exception.php";
require_once "library/SMTP.php";
 
	$mail = new PHPMailer(true);
	$id_sks = $_POST['id_sks'];
	$FileName = "Surat Sehat $id_sks.pdf";
	//Enable SMTP debugging. 
	$mail->SMTPDebug = 2;
	//Set PHPMailer to use SMTP.
	$mail->isSMTP();            
	//Set SMTP host name                          
	$mail->Host = 'smtp.gmail.com'; //host mail server
	//Set this to true if SMTP host requires authentication to send email
	$mail->SMTPAuth = true;                          
	//Provide username and password     
	$mail->Username = 'andreseptaprasetya06@gmail.com';   //nama-email smtp          
	$mail->Password = 'erkbpsnliginurnt';           //password email smtp
	//If SMTP requires TLS encryption then set it
	$mail->SMTPSecure = 'tls';                           
	//Set TCP port to connect to 
	$mail->Port = 587;                                   
 
	$mail->setFrom("amdreseptaprasetya26@gmail.com", "RUMAH SAKIT SAKITAN"); //email pengirim

	$mail->addAddress($_POST['email'], 'RUMAT SAKIT SAKITAN'); //email penerima
 
	$mail->isHTML(true);
    
    $subject = "SURAT KETERANGAN SEHAT";
    $pesan = "Silakan Download Surat Anda";
	$mail->Subject = $subject; //subject
    $mail->Body    = $pesan;//isi email
    $mail->AltBody = "PHP mailer"; //body email (optional)
	if($FileName!=""){
		$mail->AddAttachment("surat_sehat/".$FileName); // attach files
	}
 
	if(!$mail->send()) 
	{
	    echo "Mailer Error: " . $mail->ErrorInfo;
	} 
	else 
	{
	    echo "Message has been sent successfully";
	}
?>
