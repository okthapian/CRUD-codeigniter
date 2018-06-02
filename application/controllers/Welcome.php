<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('queries');
		$post=$this->queries->getpost();
		/**echo "<pre>";
		print_r($post);
		echo "</pre>";
		exit();**/ //hanya untuk mengecek isi database
		$this->load->view('welcome_message',['post'=>$post]);
	}
	public function create()
	{
		$this->load->view('create');
	}

	public function update($id){
		$this->load->model('queries');
		$posts=$this->queries->ambildata($id);
		$this->load->view('update',['posts'=>$posts]);
	}

	public function save(){
		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('deskripsi','Deskripsi','required');
		if ($this->form_validation->run()) {
			$data=$this->input->post();
			$hari=date('Y-m-d');
			$data['tanggal']=$hari;
			unset($data['input_submit']);
			$this->load->model('queries');
			if($this->queries->tambahdata($data)){
				$this->session->set_flashdata('msg','Tambah Data sukses');
			}else{
				$this->session->set_flashdata('msg','Gagal Menambahkan');
			}
			return redirect('welcome');
			/**echo "<pre>";
			print_r($data);
			echo "</pre>";
			exit();**/ //hanya untuk cek
		}
		else{
			$this->load->view('create');
		}

	}

	public function ubah($id){
		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('deskripsi','Deskripsi','required');
		if ($this->form_validation->run()) {
			$data=$this->input->post();
			$hari=date('Y-m-d');
			$data['tanggal']=$hari;
			unset($data['input_submit']);
			$this->load->model('queries');
			if($this->queries->ubahdatadata($data,$id)){
				$this->session->set_flashdata('msg','Update Data sukses');
			}else{
				$this->session->set_flashdata('msg','Gagal Update');
			}
			return redirect('welcome');
			/**echo "<pre>";
			print_r($data);
			echo "</pre>";
			exit();**/
		}
		else{
			$this->load->view('create');
		}
	}

	public function view($id)
	{
		$this->load->model('queries');
		$posts=$this->queries->ambildata($id);
		$this->load->view('view',['posts'=>$posts]);
	}

	public function delete($id){
		$this->load->model('queries');
		if($this->queries->hapus($id)){
			$this->session->set_flashdata('msg','hapus Data sukses');
		}else{
			$this->session->set_flashdata('msg','Gagal hapus');
			}
		return redirect('welcome');
	}
}
