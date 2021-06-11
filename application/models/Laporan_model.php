<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Laporan_model extends CI_Model 
{
    public function getAllLapor()
    {
		return $this->db->get('tbl_laporan')->result_array();
    }                        
                        
}


/* End of file Laporan_model.php and path /application/models/Laporan_model.php */

