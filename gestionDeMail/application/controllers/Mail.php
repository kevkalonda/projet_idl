<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller{
   
    function  __construct(){
        parent::__construct();
    }
   
    function send(){
        /* Load PHPMailer library */
        $this->load->library('phpmailer');
       
        /* PHPMailer object */
        $mail = $this->phpmailer->load();
       
        /* SMTP configuration */
        $mail->isSMTP();
        $mail->Host     = 'fr.mailjet.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'w.nemmar@esi-sba.dz';
        $mail->Password = 'Wardaghnemmar99@';
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = 465;
       
        $mail->setFrom('w.nemmar@esi-sba.dz', 'CodexWorld');
        $mail->addReplyTo('w.nemmar@esi-sba.dz', 'CodexWorld');
       
        /* Add a recipient */
        $mail->addAddress('divyasundarsahu@gmail.com');
       
        /* Add cc or bcc */
        $mail->addCC('cc@example.com');
        $mail->addBCC('bcc@example.com');
       
        /* Email subject */
        $mail->Subject = 'Send Email via SMTP using PHPMailer in CodeIgniter';
       
        /* Set email format to HTML */
        $mail->isHTML(true);
       
        /* Email body content */
        $mailContent = "<h1>Send HTML Email using SMTP in CodeIgniter</h1>
        <p>This is a test email sending using SMTP mail server with PHPMailer.</p>";
        $mail->Body = $mailContent;
       
        /* Send email */
        if(!$mail->send()){
            echo 'Mail could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            echo 'Mail has been sent';
        }
    }
   
}
