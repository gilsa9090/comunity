<?php 

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Halaman Admin';
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('admin/pages/profile', $data);
        $this->load->view('templates/footer');
    }
    
    public function memberEdit()
    {
        $data['title'] = 'Halaman Admin';
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header2', $data);
        $this->load->view('member/pages/profile', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {

        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if($this->form_validation->run() == FALSE) {
            $data['title'] = 'Edit Profiles';
            $data['user'] = $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();
            $this->load->view('templates/header', $data);
            $this->load->view('admin/editForm/profile', $data);
            $this->load->view('templates/footer');
        } else {
            $nama = $this->input->post('nama');
            $email = $this->input->post('username');

            $image = $_FILES['image']['name'];

            if($image){
                $config['upload_path'] = './assets/image/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('nama', $nama);
            $this->db->where('username', $email);
            $this->db->update('user');
            redirect('profile');
        }

    }

    public function updateMember()
    {

        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if($this->form_validation->run() == FALSE) {
            $data['title'] = 'Edit Profiles';
            $data['user'] = $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();
            $this->load->view('templates/header2', $data);
            $this->load->view('member/editForm/profile', $data);
            $this->load->view('templates/footer');
        } else {
            $nama = $this->input->post('nama');
            $email = $this->input->post('username');

            $image = $_FILES['image']['name'];

            if($image){
                $config['upload_path'] = './assets/image/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('nama', $nama);
            $this->db->where('username', $email);
            $this->db->update('user');
            redirect('profile/memberEdit');
        }

    }
}



?>