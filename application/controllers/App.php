<?php 

use Dompdf\Dompdf;

class App extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_users");
        $this->load->library("pdf");
        $this->load->helper("url");
    }

    public function index()
    {
        $path = base_url('public/assets/images/foto.png');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $image = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($image);
        $data["users"] = $this->M_users->all();
        $data["image"] = $base64;
        $size = [0, 0, 480, 286.5];
        $this->pdf->setPaper($size, 'potrait');
        $this->pdf->filename = "tugas_dompdf.pdf";
        $this->pdf->load_view('pdf/index', $data);
        // $this->load->view("pdf/index", $data);
    }
}

?>