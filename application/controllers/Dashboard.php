<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Dashboard extends CI_Controller {

public function index()
{
    $this->load->view('./inc/header');
    $this->load->view('dashboard/dashboard');
    $this->load->view('./inc/footer');
        
}
        
}
        
    /* End of file  Dashboard.php */
        
                            