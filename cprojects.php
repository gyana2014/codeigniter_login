<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cprojects extends CI_Controller {
 public function __construct() {
           parent::__construct();
            $this->load->library('session');
               $this->load->model('mprojects');
       if ($this->session->userdata('logged_in')==false) {
            redirect(base_url('clogin'), 'refresh');
        }
       }
	public function index(){
            $data['projects']=$this->mprojects->project_list();
            $this->load->view('header',$data);
            $this->load->view('projects/projects');
            $this->load->view('footer');
                
       }
     
    }
