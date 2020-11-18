<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct()
{
    parent::__construct();
    $this->load->model('Users');
}

	public function index()
	{
        $this->load->view('inc/header');
        $this->load->view('home');
        $this->load->view('inc/footer');
    }

    public function register(){
      $this->load->view('inc/header');
      $this->load->view('register');
      $this->load->view('inc/footer');
    }

    public function login()
    {
      if ($this->input->post('login')) {
        $name = $this->input->post('name');
        $pass = md5($this->input->post('pass'));

        $user_data = array(
          'name' => $name,
          'pass' => $pass
        );

        echo "<pre>";
        var_dump($user_data);
        echo "</pre>";
        
      }else {
        redirect('home', 'refresh');
      }
    }

    public function register_process(){
      if ($this->input->post('register')) {
        $name = $this->input->post('name');
        $contact = $this->input->post('contact');
        $email = $this->input->post('email');
        if ($this->input->post('password') == $this->input->post('password_2')) {
          $password = md5($this->input->post('password'));
        }else {
          echo "Password doesn't match";
        }      

        $user_data = array(
          'name' => $name,
          'contact' => $contact,
          'email' => $email,
          'password' => $password
        );

        $this->Users->register_user($user_data);
        redirect('home', 'refresh');
      
      }else {
        redirect('home', 'refresh');
      }
    }

}