<?php 

class Card extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('DivisiMember_model');
        $this->load->model('Card');
    }

    
}


?>