<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct(){
        parent::__construct();
        $this->load->model('Auth_model');
        $this->load->library('form_validation');
    }

    public function login()
    {

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() == false){
            $data['title'] = 'User Login';
            $this->load->view('auth/login', $data);
        } else {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        $user = $this->db->get_where('user', ['username' => $username])->row_array();
        if($user){
            if ($user['is_active'] == 1) {
                
            } else {
                $this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">
                User Tidak Aktif
                </div>');
                redirect('auth/login');
            }         
            } else {
                $this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">
                User Tidak Ada
                </div>');
                
            }
            }
    }

    public function register(){

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() == false) {
            $data['title'] = 'User Register';
            $this->load->view('auth/register', $data);    
        } else {
            $this->Auth_model-> register();
            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">
            User Berhasil Dibuat
            </div>');
            redirect('auth/login');
        }
    }


}

?>