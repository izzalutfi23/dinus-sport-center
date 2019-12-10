<?php 
	class Home extends CI_Controller{
		
		public function index(){
			$data = array(
				'judul' => 'Home | Manajemen Proyek',
				'menu' => 'home'
			);
			$this->load->view('_header', $data);
			$this->load->view('menu/home');
			$this->load->view('_footer');
		}

		public function jadwal(){
			$data = array(
				'judul' => 'Jadwal | Manajemen Proyek',
				'menu' => 'jadwal'
			);
			$this->load->view('_header', $data);
			$this->load->view('menu/jadwal');
			$this->load->view('_footer');
		}

		public function fasilitas(){
			$data = array(
				'judul' => 'Fasilitas | Manajemen Proyek',
				'menu' => 'fasilitas'
			);
			$this->load->view('_header', $data);
			$this->load->view('menu/fasilitas');
			$this->load->view('_footer');
		}

		public function prosedur(){
			$data = array(
				'judul' => 'Prosedur | Manajemen Proyek',
				'menu' => 'prosedur'
			);
			$this->load->view('_header', $data);
			$this->load->view('menu/prosedur');
			$this->load->view('_footer');
		}

		public function kontak(){
			$data = array(
				'judul' => 'Kontak | Manajemen Proyek',
				'menu' => 'kontak'
			);
			$this->load->view('_header', $data);
			$this->load->view('menu/kontak');
			$this->load->view('_footer');
		}
	}
 ?>