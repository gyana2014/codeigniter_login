<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mlogin extends CI_Model{

       public function __construct() {
           parent::__construct();
            $this->load->library('session');
       }
       
       	public function logincheck($data){
                   $this->db->select('*');
                   $this->db->from('pro_users');
                   $this->db->where('UR_id',$data['user_id']);
                   $this->db->where('UR_Khufiya',md5($data['user_psw']));
                    $query=$this->db->get();
                    if($query->num_rows > 0){
                    $row= $query->row(); 
                     $userdata=array('user_id'=>$row->UR_id,
                 'logged_in'=>TRUE);
                   $this->session->set_userdata($userdata);
                   return TRUE;
                    }
                    else{
                        return FALSE;
                    }
       }
       public function save_register($data){
       
            print_r($data);
       
           //redirect(base_url('clogin'),'refresh');
       }
        public function id_check($checkid,$table){
            $this->db->select('UR_id');
            $this->db->from($table);
            $this->db->where('UR_id',$checkid);
            $query=  $this->db->get();
            return  $query->num_rows;
          
     
       }
     
       
    }

    
    ?>