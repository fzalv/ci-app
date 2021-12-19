<?php 

/**
 * 
 */
class Home extends CI_Controller
{
	
	// function __construct(argument)
	// {
	// 	# code...
	// }

	public function index($nama = '')
	{
		$data['judul'] = 'Halaman Home';
		$data['nama'] = $nama;
		$this->load->view('templates/header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');
	}
}
?>