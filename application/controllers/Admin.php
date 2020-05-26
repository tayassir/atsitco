<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('AuthenticationModel');
		if($this->session->userdata('userprofile'))
        return redirect('customize');
// 		echo("<script>location.href = '".base_url()."index.php/customize';</script>");
// 		return redirect('customize');	

	}
	public function index()
	{
	
		if($this->input->post()){
			
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));
			if($result = $this->AuthenticationModel->isValidate($email,$password)){
				if($result->status == 0){
					echo json_encode('notverify');
				}
				else{
					
					$this->session->set_userdata('userprofile',$result);
					// echo json_encode('login');
					redirect('customize/index');
				}
			}
			else{

				echo json_encode('invalid');
			}
		}
		else{
	
			$this->load->view('admin/login');
		}
	}


	
	public function forgetPassword()
	{

		$this->load->view('admin/forget');
	// 	if($this->input->post())
	// 	{
	// 		$email = $this->input->post('email'); 
			
	// 		$check = $this->authenticationModel->fetchUserPassword($email);

	// 		if($check != false)
	// 		{

	// 			$activationcode=md5($check->email.time());

	// 			$this->load->library('email'); 
	// 		 	$config['mailtype'] = 'html';
	// 		 	$this->email->initialize($config);

	// 		     $ms ="<html></body><div><div>Dear $check->email,</div></br></br>";
	// 				$ms.="<div style='padding-top:8px;'>Please click The following link For creating new password of your account</div>
	// 				<div style='padding-top:10px;'><a href='http://saketschool.com/emailverify/index.php/email_verification/changePassword/$activationcode'>Click Here</a></div>
	// 				<div style='padding-top:4px;'>Powered by <a href='www.PassportNotepad.com'>PassportNotepad.com</a></div></div>
	// 				</body></html>";
									    
	// 		         $from_email = "tayassir@passportnotepad.com"; 
	// 		         $to_email = $this->input->post('email'); 
			   
	// 		         //Load email library 
			         
			   
	// 		         $this->email->from($from_email, 'Tayassir'); 
	// 		         $this->email->to($to_email);
	// 		         $this->email->subject('Verification'); 
	// 		         $this->email->message($ms); 
			   
	// 		         //Send mail 
	// 		         if($this->email->send())
	// 		         {
	// 		         	echo "sent"; 
	// 		         } 
	// 		         else
	// 		         {
	// 		         	echo "ErrorEmail"; 
	// 		         } 	
	// 		}
	// 		else
	// 		{
	// 			echo 'invalid';
	// 		}
	// 	}
	// 	else
	// 	{

	// 	$this->load->view('authentication/forgetPassword');
	// 	}

	}

	












}
