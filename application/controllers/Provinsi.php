<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Provinsi extends CI_Controller {
	private $ApiCovid = 'https://api.kawalcorona.com/';
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['judul'] = 'Data Provinsi';
		$data['indonesia'] = $this->ReadAPI('Provinsi');
		$data['global'] = $this->ReadAPI();
		$this->load->view('templates/header', $data);
		$this->load->view('corona/provinsi', $data);
		$this->load->view('templates/footer');
    }
	public function ReadAPI($url='')
	{
		$url = strtolower($url);
		$masUrl = [
			"indonesia" => "indonesia",
			"provinsi" => "indonesia/provinsi",
			"positif" => "positif",
			"sembuh" => "sembuh",
			"meninggal" => "meninggal",
		];

		$generateUrl = strtr($url , $masUrl);
		if (empty($url) or !array_key_exists($url, $masUrl)) {
			$readUrl = file_get_contents($this->ApiCovid) ;
		}else{
			$readUrl = file_get_contents($this->ApiCovid.$generateUrl) ;
		}
		$data = json_decode($readUrl, true);
		return $data ;
	}

}

/* End of file Home.php and path /application/controllers/Home.php */


