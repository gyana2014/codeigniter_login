<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mprojects extends CI_Model{

      
        public function project_list(){
            $query=  $this->db->get('pro_projects');
            return  $query->result();
       }
     
       
    }

    
    ?>