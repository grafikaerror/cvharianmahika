
	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Home extends CI_Controller {
		
		public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}
		public function index()
		{
			$data['title'] = "CV Harian Mahika - Home";
			$this->load->view('guest/_partials/header', $data);
			$this->load->view('guest/home', $data);
			$this->load->view('guest/_partials/footer');
		}
		public function konstruksi()
		{
			$data['title'] = "CV Harian Mahika - Konstruksi Bangunan";
			$this->load->view('guest/_partials/header', $data);
			$this->load->view('guest/konstruksi', $data);
			$this->load->view('guest/_partials/footer');
		}

		public function jualbeli()
		{
			$data['title'] = "CV Harian Mahika - Jual Beli";
			$this->load->view('guest/_partials/header', $data);
			$this->load->view('guest/jualbeli', $data);
			$this->load->view('guest/_partials/footer');
		}

		public function art()
		{
			$data['title'] = "CV Harian Mahika - Arts";
			$this->load->view('guest/_partials/header', $data);
			$this->load->view('guest/art', $data);
			$this->load->view('guest/_partials/footer');
		}

		public function produk()
		{
			$data['title'] = "CV Harian Mahika - Produk";
			$this->load->view('guest/_partials/header', $data);
			$this->load->view('guest/produk', $data);
			$this->load->view('guest/_partials/footer');
		}
	}
	
	/* End of file Home.php */
	/* Location: ./application/controllers/Home.php */
