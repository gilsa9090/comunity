<?php 

require_once dirname(__FILE__).'/tcpdf/tcpdf.php';
class Pdf extends tcpdf
{
    protected $ci;
    public function __construct()
    {
        $this->ci=& get_instance();
    }
}

?>