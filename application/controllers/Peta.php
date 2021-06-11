<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Peta extends CI_Controller {
	private $ApiCovid = 'https://api.kawalcorona.com/';
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['judul'] = 'Halaman Provinsi';
		$data['lokasi'] = json_decode(file_get_contents('https://services5.arcgis.com/VS6HdKS0VfIhv8Ct/arcgis/rest/services/COVID19_Indonesia_per_Provinsi/FeatureServer/0/query?where=1%3D1&outFields=*&outSR=4326&f=json'), TRUE);
		$this->load->view('templates/header', $data);
		$this->load->view('corona/peta', $data);
		$this->load->view('templates/footer');
    }
	public function peta()
	{
		$data['lokasi'] = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia'));
		$data = 'peta';
		$this->load->view('templates/header', $data);
		

	}
	// public function ReadAPI($url='')
	// {
	// 	$url = strtolower($url);
	// 	$masUrl = [
	// 		"indonesia" => "indonesia",
	// 		"provinsi" => "indonesia/provinsi",
	// 		"positif" => "positif",
	// 		"sembuh" => "sembuh",
	// 		"meninggal" => "meninggal",
	// 	];

	// 	$generateUrl = strtr($url , $masUrl);
	// 	if (empty($url) or !array_key_exists($url, $masUrl)) {
	// 		$readUrl = file_get_contents($this->ApiCovid) ;
	// 	}else{
	// 		$readUrl = file_get_contents($this->ApiCovid.$generateUrl) ;
	// 	}
	// 	$data = json_decode($readUrl, true);
	// 	return $data ;
	// }

}

/* End of file Home.php and path /application/controllers/Home.php */


