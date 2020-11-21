<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Employees extends CI_Controller {


public function __construct()
{
    parent::__construct();
    $this->load->model('Employees_list');
}


public function index()
{
  $this->load->view('dashboard/employees');             
}

    public function single_employee($id)
    {
        $this->load->view('dashboard/single_employee', $id);
    }

    public function add_employee()
    {
      $this->load->view('dashboard/add_employee');
    }

    public function employee_update($id)
    {
      $this->load->view('dashboard/employee_update', $id);
    }

    public function update_employee_process($id)
    {
        if ($this->input->post('update_employee')) {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $phone = $this->input->post('phone');
            $job = $this->input->post('job');

            $employee_data = array(
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'job' => $job
            );

            $this->db->where('id', $id);
            $this->db->update('employees', $employee_data);
            redirect('employees', 'refresh');
        }
    }

    public function add_employee_process()
    {
        if ($this->input->post('add_employee')) {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $phone = $this->input->post('phone');
            $job = $this->input->post('job');

            $employee_data = array(
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'job' => $job
            );

            $this->Employees_list->insert_employee($employee_data);
            redirect('employees', 'refresh');
        }
    }

    public function employee_delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('employees');
        redirect('employees', 'refresh');
    }
        
}
        
    /* End of file  Employees.php */
        
                            