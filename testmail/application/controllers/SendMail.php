<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('mail/PHPMailerAutoload.php');

class SendMail extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('sendMail_view');
	}
	public function do_send()
	{
		$ngnhan = $this->input->post('email');
		$ten = $this->input->post('ten');
		$noidung = $this->input->post('noidung');



		$mail = new PHPMailer;                            // Passing `true` enables exceptions

    	//$mail->SMTPDebug = 2;                                 // Enable verbose debug output
    	$mail->isSMTP();                                      // Set mailer to use SMTP
    	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
   		$mail->SMTPAuth = true;                               // Enable SMTP authentication
    	$mail->Username = 'namnguyenvnvnvn@gmail.com';                 // SMTP username
    	$mail->Password = 'bfeenaktdonwavap';                           // SMTP password
    	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    	$mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    	$mail->setFrom('namnguyen@edu.vn', 'Nam Nguyen');
    	$mail->addAddress($ngnhan);     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // //Content
    // $mail->isHTML(true);                                  // Set email format to HTML
    	$mail->Subject = $ten;
    	$mail->Body    = $noidung;
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    	$mail->Charset = "UTF-8";
    	if($mail->send()) {
    		echo 'Thư đã được gửi rồi ';
    	} else {
    		echo 'Chưa gửi dc!';
    	}
}

}


/* End of file SendMail.php */
/* Location: ./application/controllers/SendMail.php */