<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends CI_Controller {

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

	
	public function index()
	{
		$company_data = $this->db->where('id','1')
        				->get('company_profile')->row();
		$this->load->view('template/head',compact('company_data'));
		$this->load->view('template/home');
		$this->load->view('template/footer');
	}
	public function about()
	{
		$company_data = $this->db->where('id','1')
        				->get('company_profile')->row();
        $aboutdata = $this->CustomizeModel->aboutus_data();
		$this->load->view('template/head',compact('company_data','aboutdata'));
		$this->load->view('template/about');
		$this->load->view('template/footer');
	}
	// public function service()
	// {
	// 	$company_data = $this->db->where('id','1')
 //        				->get('company_profile')->row();
	// 	$this->load->view('template/head',compact('company_data'));
	// 	$this->load->view('template/infra');
	// 	$this->load->view('template/footer');
	// }
	public function contact()
	{
		$company_data = $this->db->where('id','1')
        				->get('company_profile')->row();
		$this->load->view('template/head',compact('company_data'));
		$this->load->view('template/contact');
		$this->load->view('template/footer');
	}

	public function infra()
	{
		$company_data = $this->db->where('id','1')
        				->get('company_profile')->row();
		$servicesdata = $this->CustomizeModel->services_data();
		$this->load->view('template/head',compact('servicesdata','company_data'));
		$this->load->view('template/itinfra');
		$this->load->view('template/footer');
	}

	public function security()
	{
		$company_data = $this->db->where('id','1')
        				->get('company_profile')->row();
		$servicesdata = $this->CustomizeModel->services_data();
		$this->load->view('template/head',compact('company_data','servicesdata'));
		$this->load->view('template/security');
		$this->load->view('template/footer');
	}

	public function network()
	{
		$company_data = $this->db->where('id','1')
        				->get('company_profile')->row();
		$servicesdata = $this->CustomizeModel->services_data();
		$this->load->view('template/head',compact('company_data','servicesdata'));
		$this->load->view('template/network');
		$this->load->view('template/footer');
	}

	public function hardware()
	{
		$company_data = $this->db->where('id','1')
        				->get('company_profile')->row();
		$servicesdata = $this->CustomizeModel->services_data();
		$this->load->view('template/head',compact('company_data','servicesdata'));
		$this->load->view('template/hardware');
		$this->load->view('template/footer');
	}

	public function lowcurrent()
	{
		$company_data = $this->db->where('id','1')
        				->get('company_profile')->row();
		$servicesdata = $this->CustomizeModel->services_data();
		$this->load->view('template/head',compact('company_data','servicesdata'));
		$this->load->view('template/lowcurrent');
		$this->load->view('template/footer');
	}

	public function partners()
	{
		$company_data = $this->db->where('id','1')
        				->get('company_profile')->row();
        $partnerdata = $this->CustomizeModel->fetch_partner();
		$this->load->view('template/head',compact('company_data','partnerdata'));
		$this->load->view('template/partners');
		$this->load->view('template/footer');
	}

	public function contact_email()
	{
		if($this->input->post()){
			$subject = 'Contact Us Registration By - ' . $this->input->post("name");
			$message = '
			   <h3 align="center">Contact us Details</h3>
			    <table width="100%" cellpadding="5">
			     <tr>
			      <td width="30%">Name</td>
			      <td width="70%">'.$this->input->post("name").'</td>
			     </tr>
			     <tr>
			      <td width="30%">Email Address</td>
			      <td width="70%">'.$this->input->post("email").'</td>
			     </tr>
			      <tr>
			      <td width="30%">Subject</td>
			      <td width="70%">'.$this->input->post("subject").'</td>
			     </tr>
			     <tr>
			      <td width="30%">Message</td>
			      <td width="70%">'.$this->input->post("message").'</td>
			     </tr>
			    </table>
			   ';

			$this->load->library('email'); 
			$config['mailtype'] = 'html';
			$this->email->initialize($config);
			$this->email->set_newline("\r\n");
			$this->email->from($this->input->post("email"));
			$this->email->to('info@atsitco.com');
			$this->email->subject($subject);
			$this->email->message($message);
			if($this->email->send()){
				echo 'Thankyou for details. We will contact you as soon! ';
			}
			else{
			   	echo 'There is an error in email send. Please try again! ';
			}
		}
		
	}


}

?>
