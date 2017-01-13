<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chome extends CI_Controller {
 public function __construct() {
           parent::__construct();
            $this->load->library('session');
       if ($this->session->userdata('logged_in')==false) {
            redirect(base_url('clogin'), 'refresh');
        }
       }
	public function index(){
            $this->load->view('header');
            $this->load->view('dashboard');
            $this->load->view('footer');
                
       }
     
    }
