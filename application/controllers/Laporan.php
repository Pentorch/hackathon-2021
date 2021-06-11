<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Laporan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->model('Laporan_model');
		
    }
    public function index()
    {
        $data['judul'] = 'Halaman Laporan';
		$data['user'] = $this->Laporan_model->getAllLapor();
		$this->load->view('templates/header', $data);
		$this->load->view('laporan/index', $data);
		$this->load->view('templates/footer');
    }

	public function tambah()
	{
		$data['judul'] = 'Halaman Tambah Data';
		$this->load->view('templates/header', $data);
		$this->load->view('laporan/tambah', $data);
		$this->load->view('templates/footer');

	}
}

/* End of file Laporan.php and path /application/controllers/Laporan.php */


