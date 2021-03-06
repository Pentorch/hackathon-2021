<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Laporan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->model('Laporan_model');
		$this->load->library('form_validation');
		
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
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('umur', 'Umur', 'trim|required');
		$this->form_validation->set_rules('gejala', 'Gejala', 'trim|required|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('penanganan', 'Penanganan', 'trim|required|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required|min_length[5]|max_length[12]');
		if ($this->form_validation->run() == FALSE) {
		$data['judul'] = 'Halaman Tambah Data';
		$this->load->view('templates/header', $data);
		$this->load->view('laporan/tambah');
		$this->load->view('templates/footer');
		} else {
			$this->Laporan_model->tambahDataPasien();	
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('laporan');
			
		}

	}
	public function edit($id)
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('umur', 'Umur', 'trim|required');
		$this->form_validation->set_rules('gejala', 'Gejala', 'trim|required');
		$this->form_validation->set_rules('penanganan', 'Penanganan', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
		$data['judul'] = 'Halaman Update Data';
		$data['user'] = $this->Laporan_model->getLaporById($id);
		$this->load->view('templates/header', $data);
		$this->load->view('laporan/edit', $data);
		$this->load->view('templates/footer');
		} else {
			$this->Laporan_model->updateDataPasien();	
			$this->session->set_flashdata('flash', 'Diupdate');
			redirect('laporan');
			
		}
	}
	public function detail($id)
	{
		$data['judul'] = 'Halaman Detail Data';
		$data['user'] = $this->Laporan_model->getLaporById($id);
		$this->load->view('templates/header', $data);
		$this->load->view('laporan/detail', $data);
		$this->load->view('templates/footer');
	}
	public function hapus($id)
	{
		$this->Laporan_model->hapusDataPasien($id);	
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('laporan');
	}
}

/* End of file Laporan.php and path /application/controllers/Laporan.php */


