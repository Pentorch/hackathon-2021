<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['judul'] = 'Home';
		$this->load->view('templates/header', $data);
		$this->load->view('corona/home', $data);
		$this->load->view('templates/footer');
    }
}

/* End of file Home.php and path /application/controllers/Home.php */


