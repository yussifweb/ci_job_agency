<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Jobs extends CI_Controller {

public function __construct()
{
    parent::__construct();
    $this->load->model('Employee_Jobs');
}

public function index()
{
  $this->load->view('dashboard/add_job');
}

public function view_jobs()
{
  $this->load->view('dashboard/jobs');
}

public function add_job()
{
    if ($this->input->post('add_job')) {
        $title = $this->input->post('title');
        $industry = $this->input->post('industry');
        $body = $this->input->post('body');
        $location = $this->input->post('location');

        $jobs_data = array(
            'title' => $title,
            'industry' => $industry,
            'body' => $body,
            'location' => $location
        );

    $this->Employee_Jobs->add_job($jobs_data);
    redirect('jobs/view_jobs', 'refresh');
    }
}

    public function job_update($id)
    {
        $this->load->view('dashboard/job_update', $id);
    }

    public function job_update_process($id)
    {
        if ($this->input->post('update_job')) {
            $title = $this->input->post('title');
            $industry = $this->input->post('industry');
            $body = $this->input->post('body');
            $location = $this->input->post('location');

            $job_details = array(
                'title' => $title,
                'industry' => $industry,
                'body' => $body,
                'location' => $location
            );

            $this->db->where('id', $id);
            $this->db->update('jobs', $job_details);
            redirect('jobs/view_jobs', 'refresh');
        }
    }

    public function job_delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('jobs');
        redirect('jobs/view_jobs', 'refresh'); 
    }
        
}
        
    /* End of file  Jobs.php */
        
                            