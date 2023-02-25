<?php 


class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('News_model');
        $this->load->model('Gallery_model');
    }

    public function index()
    {
        $data['news'] = $this->News_model->index();
        $data['gallery'] = $this->Gallery_model->index();
        $this->load->view('home/landing', $data);
    }

}


?>