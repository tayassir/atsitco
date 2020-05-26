<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customize extends CI_Controller {

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
		if(!$this->session->userdata('userprofile'))
		return redirect('admin');	
// 		echo("<script>location.href = '".base_url()."index.php/admin';</script>");
		

	}
	public function index()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/customize');
		$this->load->view('admin/fotter');
	}

	public function companyprofile()
	{
		if($this->input->post()){
      		$post = $this->input->post();
      		$phone =  array();
      		$email =  array();
      		foreach ($post['phone'] as  $value) {
      			// if($value != ""){
      				array_push($phone,array('phone' =>$value));
      			// }
      		}
      		foreach ($post['email'] as  $value) {
      			// if($value != ""){
      				array_push($email,array('email' =>$value));
      			// }
      		}

      		$post['phone'] = json_encode($phone);
      		$post['email'] = json_encode($email);

      		$companydata = $this->CustomizeModel->company_data();
        	$path_to_file =  FCPATH .'assets/upload/'.$companydata->company_logo;			
        	
			$config=[
					'upload_path'=>'./assets/upload', // SET UPLOAD FOLDER PATH
					'allowed_types'=>'jpeg|jpg|png',
			// 		// 'max_size'=>'3000000',		
			];

			$this->load->library('upload',$config);
			if($this->upload->do_upload('company_logo')){
				$data = $this->upload->data();
				$company_logo = $data['raw_name'].$data['file_ext'];
				$post['company_logo'] = $company_logo;
				if($this->CustomizeModel->update_company($post)){
					unlink($path_to_file);
					$this->session->set_flashdata('update','Update Successfully!');
				}else{
					echo 'logo not upload try again later';
					$this->session->set_flashdata('error','Something Went Worng!');
				}
      		}else{
      			if($this->CustomizeModel->update_company($post)){
					$this->session->set_flashdata('update','Update Successfully!');
				}else{
					$this->session->set_flashdata('error','Something Went Worng!');
				}
      		}
      		return redirect('customize/companyprofile');
      	}else{
      		$company_data = $this->db->where('id','1')
        				->get('company_profile')->row();
			$this->load->view('admin/header');
			$this->load->view('admin/companyprofile',compact('company_data'));
			$this->load->view('admin/fotter');
      	}
	}

	public function aboutus()
	{
		if($this->input->post()){
			$post = $this->input->post();
      		$aboutdata = $this->CustomizeModel->aboutus_data();
        	$path_to_history =  FCPATH .'assets/upload/'.$aboutdata->history_img;
        	$path_to_mission =  FCPATH .'assets/upload/'.$aboutdata->mission_img;
        	$path_to_values =  FCPATH .'assets/upload/'.$aboutdata->value_img;
			$config=[
					'upload_path'=>'./assets/upload', // SET UPLOAD FOLDER PATH
					'allowed_types'=>'jpeg|jpg|png|svg',
			// 		// 'max_size'=>'3000000',		
			];

			$this->load->library('upload',$config);
			if($this->upload->do_upload('history_img')){
				$data = $this->upload->data();
				$history_img = $data['raw_name'].$data['file_ext'];
				$post['history_img'] = $history_img;
				unlink($path_to_history);
      		}
      		if($this->upload->do_upload('mission_img')){
				$data = $this->upload->data();
				$mission_img = $data['raw_name'].$data['file_ext'];
				$post['mission_img'] = $mission_img;
				unlink($path_to_mission);
      		}
      		if($this->upload->do_upload('value_img')){
				$data = $this->upload->data();
				$value_img = $data['raw_name'].$data['file_ext'];
				$post['value_img'] = $value_img;
				unlink($path_to_value);
      		}
		

      		if($this->CustomizeModel->update_aboutus($post)){
				$this->session->set_flashdata('update','Update Successfully!');
			}else{
				echo 'logo not upload try again later';
				$this->session->set_flashdata('error','Something Went Worng!');
			}

      		return redirect('customize/aboutus');

		}else{
			$aboutdata = $this->CustomizeModel->aboutus_data();
			$this->load->view('admin/header');
			$this->load->view('admin/aboutus',compact('aboutdata'));
			$this->load->view('admin/fotter');
		}
	}

	public function services()
	{
		if($this->input->post()){
			$post = $this->input->post();

      		$aboutdata = $this->CustomizeModel->services_data();
        	$path_to_infra =  FCPATH .'assets/upload/'.$aboutdata->infra_img;
        	$path_to_security =  FCPATH .'assets/upload/'.$aboutdata->security_img;
        	$path_to_network =  FCPATH .'assets/upload/'.$aboutdata->network_img;
        	$path_to_hardware =  FCPATH .'assets/upload/'.$aboutdata->hardware_img;
        	$path_to_lowcur =  FCPATH .'assets/upload/'.$aboutdata->lowcur_img;
			$config=[
					'upload_path'=>'./assets/upload', // SET UPLOAD FOLDER PATH
					'allowed_types'=>'jpeg|jpg|png|svg',
			// 		// 'max_size'=>'3000000',		
			];

			$this->load->library('upload',$config);
			if($this->upload->do_upload('infra_img')){
				$data = $this->upload->data();
				$infra_img = $data['raw_name'].$data['file_ext'];
				$post['infra_img'] = $infra_img;
				unlink($path_to_infra);
      		}
      		if($this->upload->do_upload('security_img')){
				$data = $this->upload->data();
				$security_img = $data['raw_name'].$data['file_ext'];
				$post['security_img'] = $security_img;
				unlink($path_to_security);
      		}
      		if($this->upload->do_upload('network_img')){
				$data = $this->upload->data();
				$network_img = $data['raw_name'].$data['file_ext'];
				$post['network_img'] = $network_img;
				unlink($path_to_network);
      		}
      		if($this->upload->do_upload('hardware_img')){
				$data = $this->upload->data();
				$hardware_img = $data['raw_name'].$data['file_ext'];
				$post['hardware_img'] = $hardware_img;
				unlink($path_to_hardware);
      		}
      		if($this->upload->do_upload('lowcur_img')){
				$data = $this->upload->data();
				$lowcur_img = $data['raw_name'].$data['file_ext'];
				$post['lowcur_img'] = $lowcur_img;
				unlink($path_to_lowcur);
      		}
		

      		if($this->CustomizeModel->update_services($post)){
				$this->session->set_flashdata('update','Update Successfully!');
			}else{
				echo 'logo not upload try again later';
				$this->session->set_flashdata('error','Something Went Worng!');
			}

      		return redirect('customize/services');

		}else{
			$servicesdata = $this->CustomizeModel->services_data();
			$this->load->view('admin/header');
			$this->load->view('admin/services',compact('servicesdata'));
			$this->load->view('admin/fotter');
		}
	}


	public function addpartner()
  	{
  		if($this->input->post()){
  			$post = $this->input->post();
  			$config=[
					'upload_path'=>'./assets/upload', // SET UPLOAD FOLDER PATH
					'allowed_types'=>'jpeg|jpg|png|svg',
					'max_size'=>'3000000',		
			];
  			$this->load->library('upload',$config);
  			if($this->upload->do_upload('logo')){
				$data = $this->upload->data();
				$logo = $data['raw_name'].$data['file_ext'];
				$post['logo'] = $logo;
				if($this->CustomizeModel->add_partner($post)){
					// $this->session->set_tempdata('success','add sucess');
     //  				$this->load->view('admin/header');
					// $this->load->view('admin/partners');
					// $this->load->view('admin/fotter');
					redirect('customize/addpartner');
				}
      		}
  		}else{
  			$partnerdata = $this->CustomizeModel->fetch_partner();
  			$this->load->view('admin/header');
			$this->load->view('admin/partners',compact('partnerdata'));
			$this->load->view('admin/fotter');
  		}

	}

	public function deletepartner()
  	{
  		if($this->input->get()){
  			$id = $this->input->get('id');
  			$imagename = $this->CustomizeModel->logo_name($id);
  			$path_to_file =  FCPATH .'assets/upload/'.$imagename->logo;	
  			if($this->CustomizeModel->delete_partner($id)){
  				unlink($path_to_file);
  				redirect('customize/addpartner');
  			}
  			

  		}

	    
	}



	public function logout()
  	{

	    $this->session->unset_userdata('userprofile');
	    return redirect('admin');
	   // $this->load->view('admin/login');
	}
				

}
