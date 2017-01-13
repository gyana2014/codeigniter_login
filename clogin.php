<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clogin extends CI_Controller {

       public function __construct() {
           parent::__construct();
           $this->load->library('session');
           $this->load->model('mlogin');
       }
       
       	public function index(){
            $this->load->view('login');
                
       }
       public function logincheck(){
        $data=$_POST;
        
        $result=  $this->mlogin->logincheck($data);
        
        if($result === TRUE){
          redirect(base_url('dashboard'),'refresh');
        }
         else{
           
           
            redirect(base_url('clogin'),'refresh');
        }
           
       }
       
       public function logout(){
           $userdata=array(
              'user_id'=>  $this->session->userdata('user_id'),
               'logged_in'=>FALSE
               
           );
           $this->session->sess_destroy();
           $this->session->unset_userdata($userdata);
           
           redirect(base_url('clogin'),'refresh');
       }
       
      public function register_user(){
          
        $data= array(
             'UR_FirstName'=> $this->input->post('customer_name', TRUE),
             'UR_Emailid'=> $this->input->post('customer_email', TRUE),
             'UR_Phno'=> $this->input->post('customer_mobile', TRUE),
             'UR_Khufiya'=> md5($this->input->post('customer_psw', TRUE))
        );
       // $this->mlogin->save_register($data);
        //redirect(base_url('clogin'),'refresh');
       }
       public function checkid(){
           while (1){
               $uniid=$this->new_id();
               if($this->mlogin->id_check($uniid,'pro_users') == 0){
                   
                   break;
                   return $uniid;
               }
           }
       }

       public function new_id() { 
       $s = strtoupper(md5(uniqid(rand(),true))); 
       return  $checkid =substr($s,0,6);
      }

}

