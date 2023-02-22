<?php 

class Card extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('DivisiMember_model');
        $this->load->model('Card_model');
        $this->load->library('Pdf');
        check();
    }

    public function pdf($id)
    {
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $data['nama'] = $this->DivisiMember_model->detail($id);
        $this->load->view('admin/pages/pdf', $data);
    }

    public function jpg($id){
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $data['nama'] = $this->Card_model->users($id);
        $this->load->view('admin/pages/kta', $data);

        $this->load->helper('download');
        $html = $this->load->view('admin/pages/kta', '', true); // Mengambil HTML dari tampilan
        $filename = 'export.jpg';
        $output = 'assets/image/' . $filename; // Menyimpan output gambar di direktori assets/img
        $options = array(
            'width' => 800, // Lebar gambar
            'height' => 600, // Tinggi gambar
            'scale' => 2, // Skala gambar (untuk meningkatkan resolusi)
            'useCORS' => true, // Mengaktifkan CORS (Cross-Origin Resource Sharing)
            'allowTaint' => true // Mengaktifkan taint (untuk mengizinkan gambar cross-origin)
        );
        echo "<script src='" . base_url('assets/js/html2canvas.js') . "'></script>"; // Memuat library html2canvas
        echo "<script>";
        echo "html2canvas(document.getElementById('kta'), " . json_encode($options) . ").then(function(canvas) {";
        echo "var dataURL = canvas.toDataURL('image/jpeg');";
        echo "var link = document.createElement('a');";
        echo "link.download = '" . $filename . "';";
        echo "link.href = dataURL;";
        echo "document.body.appendChild(link);";
        echo "link.click();";
        echo "document.body.removeChild(link);";
        echo "});";
        echo "</script>";
    }

    
}


?>