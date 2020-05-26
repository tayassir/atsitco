<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomizeModel extends CI_Model
{

  public function company_data(){

      return   $this->db->where('1','1')
        ->get('company_profile')->row();  
  }

  public function update_company($post){

      return   $this->db->where('id','1')
          ->update('company_profile',$post);  
 
  }

  public function aboutus_data(){

      return   $this->db->where('1','1')
        ->get('about_us')->row();  
 
  }

  public function update_aboutus($post){

      return   $this->db->where('id','1')
          ->update('about_us',$post);  
 
  }


  public function services_data(){

      return   $this->db->where('1','1')
        ->get('services')->row();  
 
  }

  public function update_services($post){

      return   $this->db->where('id','1')
          ->update('services',$post);  
 
  }

  public function add_partner($post){

      return   $this->db->insert('partners',$post);
          
 
  }  
  public function fetch_partner(){

      return   $this->db->select()
                    ->get('partners')->result();
          
 
  }  

  public function logo_name($id){
      
    return $this->db->select('logo')
                ->where(['id'=>$id])
                       ->get('partners')->row();
 
  }  

  public function delete_partner($id){
      
    return $this->db->where(['id'=>$id])
                       ->delete('partners');
 
  }  

 
}




?>