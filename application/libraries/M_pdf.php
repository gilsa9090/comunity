<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH.'\libraries\vendor\autoload.php';

use \Mpdf\Mpdf;

class M_pdf {

    public $pdf;

    public function __construct($params = array()) {
        $this->pdf = new Mpdf($params);
    }

    public function load_view($view, $data = array()) {
        $html = $this->CI->load->view($view, $data, true);
        $this->pdf->WriteHTML($html);
        $this->pdf->Output();
    }

}