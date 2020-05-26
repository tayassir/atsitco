<?php

class AuthenticationModel extends CI_Model
{

  public function isValidate($email,$password){

  	 $q = $this->db->select('id,email,status')
                   ->where(['email'=>$email,'password'=>$password])
                    ->get('admin');

      if($q->num_rows())
		 {
			return $q->row();
		 }
		 else
		 {
			return false;
		}

             
  }




}




?>