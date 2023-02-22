<?php 

class Divisi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Divisi_model');
        $this->load->library('form_validation');
        check();
    }

    public  function delete($id)
    {
        $this->Divisi_model->delete($id);
        redirect('divisi');
    }

    public  function detail($id)
    {
            $data['divisi'] = $this->Divisi_model->getById($id);
            $data['title'] = 'Halaman Divisi';
            $data['user'] = $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();
            $this->load->view('templates/header', $data);
            $this->load->view('admin/detail/divisi', $data);
            $this->load->view('templates/footer');
    }
    
    public  function index(){
        $data['divisi'] = $this->Divisi_model->index();
        $data['title'] = 'Halaman Admin';
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header',$data);
        $this->load->view('admin/pages/divisi', $data);
        $this->load->view('templates/footer');
    }

    public function insert(){

        $this->form_validation->set_rules('nama', 'Nama', 'required');

            if( $this->form_validation->run() == false){
                $data['title'] = 'Halaman Admin';
                $data['user'] = $this->db->get_where('user', ['username' => 
                $this->session->userdata('username')])->row_array();
                $this->load->view('templates/header',$data);
                $this->load->view('admin/insertForm/divisi');
                $this->load->view('templates/footer');
            } else {
                $this->Divisi_model->insert();
                redirect('divisi');
            }

    }

    public function edit($id)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $data['title'] = 'Halaman Admin';
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $data['divisi'] = $this->Divisi_model->getById($id);


        if( $this->form_validation->run() == false){
            $this->load->view('templates/header',$data);
            $this->load->view('admin/EditForm/divisi', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Divisi_model->edit();
            redirect('divisi');
        }
    }

    

}

?>