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
	public function updateDataPasien()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"umur" => $this->input->post('umur', true),
			"gejala" => $this->input->post('gejala', true),
			"penanganan" => $this->input->post('penanganan', true),
			"alamat" => $this->input->post('alamat', true)
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('tbl_laporan', $data);
	}
	public function getLaporById($id)
	{
		return $this->db->get_where('tbl_laporan', ['id' => $id])->row_array();
	}
	public function hapus($id)
	{
		$this->db->delete('tbl_laporan', ['id' => $id]);
	}
}


/* End of file Laporan_model.php and path /application/models/Laporan_model.php */

