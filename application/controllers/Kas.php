<?php 

class Kas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kas_model');
        $this->load->library('form_validation');
        check();
    }

    public function insert()
    {
                $this->Kas_model->insert();
                redirect('admin/kas');
    }

    public function bayar()
    {
                $this->Kas_model->bayar();
                redirect('admin/kas');
    }

    public function laporan()
    {
            $data['bulan'] = $this->Kas_model->getBulan();
            $data['nama'] = $this->Kas_model->laporan();
            $data['title'] = 'Halaman Laporan';
            $data['user'] = $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();
            $this->load->view('templates/header', $data);
            $this->load->view('admin/detail/kas', $data);
            $this->load->view('templates/footer');
    }

    public function table()
    {
            $data['bulan'] = $this->Kas_model->getBulan();
            $data['nama'] = $this->Kas_model->laporan();
            $data['title'] = 'Halaman Laporan';
            $data['user'] = $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();
            $this->load->view('templates/header', $data);
            $this->load->view('admin/detail/laporan', $data);
            $this->load->view('templates/footer');
    }

}


?>