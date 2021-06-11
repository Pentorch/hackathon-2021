<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Laporan_model extends CI_Model 
{
    public function getAllLapor()
    {
		return $this->db->get('tbl_laporan')->result_array();
    }                        
    public function tambahDataPasien()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"umur" => $this->input->post('umur', true),
			"gejala" => $this->input->post('gejala', true),
			"penanganan" => $this->input->post('penanganan', true),
			"alamat" => $this->input->post('alamat', true)
		];
		$this->db->insert('tbl_laporan', $data);
	}
}


/* End of file Laporan_model.php and path /application/models/Laporan_model.php */

