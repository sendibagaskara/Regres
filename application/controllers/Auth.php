<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[12]');
        
        if($this->form_validation->run() == false){
            $this->load->view('auth/login');
        }else {

            $data = [
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            ];

            redirect('user','refresh');
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('firstname', 'Firstname', 'required|trim');
        $this->form_validation->set_rules('lastname', 'Lastname', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[12]');
        $this->form_validation->set_rules('birthdate', 'Birthdate', 'required|trim');
        $this->form_validation->set_rules('age', 'Age','required|trim|greater_than_equal_to[17]');


        if($this->form_validation->run() == false){
            $this->load->view('auth/register');
        }else {
            $data = [
                'firstname' => htmlspecialchars($this->input->post('firstname', true)),
                'lastname' => htmlspecialchars($this->input->post('lastname', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'birthdate' => $this->input->post('birthdate'),
                'age' => $this->input->post('age'),
                'datecreated' => time()
            ];

            redirect('auth','refresh');
            
        }
        
    }

    

}