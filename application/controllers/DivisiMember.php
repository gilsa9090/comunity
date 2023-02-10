<?php 

class DivisiMember extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('DivisiMember_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
            $data['member'] = $this->DivisiMember_model->index();
            $data['title'] = 'Halaman Admin';
            $data['user'] = $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();
            $this->load->view('templates/header',$data);
            $this->load->view('admin/pages/divisiMember', $data);
            $this->load->view('templates/footer');
    }

    public function insert()
    {
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');

            if($this->form_validation->run() == false){
                $data['nama'] = $this->DivisiMember_model->getName();
                $data['divisi'] = $this->DivisiMember_model->getDivisi();
                $data['title'] = 'Halaman Admin';
                $data['user'] = $this->db->get_where('user', ['username' => 
                $this->session->userdata('username')])->row_array();
                $this->load->view('templates/header',$data);
                $this->load->view('admin/insertForm/divisiMember');
                $this->load->view('templates/footer');
            } else {
                $this->DivisiMember_model->insert();
                redirect('divisiMember');
            }
    }

    public function detail(){
        $data['member'] = $this->DivisiMember_model->getById();
        $data['title'] = 'Halaman Admin';
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header',$data);
        $this->load->view('admin/pages/detailMember', $data);
        $this->load->view('templates/footer'); 
    }

    public function edit($id){
        $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');

            if($this->form_validation->run() == false){
                $data['desc'] = $this->DivisiMember_model->getById($id);
                $data['nama'] = $this->DivisiMember_model->getName();
                $data['divisi'] = $this->DivisiMember_model->getDivisi();
                $data['title'] = 'Halaman Admin';
                $data['user'] = $this->db->get_where('user', ['username' => 
                $this->session->userdata('username')])->row_array();
                $this->load->view('templates/header',$data);
                $this->load->view('admin/editForm/divisiMember',$data);
                $this->load->view('templates/footer');
            } else {
                $this->DivisiMember_model->edit();
                redirect('divisiMember');
            }
    }
}


?>