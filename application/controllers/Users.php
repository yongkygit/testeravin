<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

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
	 
	function __construct(){
		
		parent::__construct();		
		$this->load->model('Musers');
		$this->load->database();
	}	 
	 
	public function index()
	{
		$where = array('NAMA' => $this->input->post('cari') ? $this->input->post('cari') : '');
		
		$data['users'] = $this->Musers->edit_data($where,'t_users')->result();

		
		$this->load->view('Vtampil', $data);
	}	

	public function users_add()
	{

		
		$this->load->view('Vusers_add');
	}	

	function tambah_aksi(){
		
		
		$nama = $this->input->post('nama');
		$telephone = $this->input->post('telephone');
		$email = $this->input->post('email');
		$cetak = $this->input->post('cetak');


			for($i =0; $i < count($cetak); $i++){
				

			$cetakv = $cetak[$i];
		
						
		$data = array(
		
		
			'TELEPHONE' => $telephone,
			'NAMA' => $nama,
			'EMAIL' => $email,
			'ALAMAT' => $cetakv,
			);
			$this->Musers->input_data($data,'t_users');					
									
		}				
		
		redirect('Users');		
		
	}	
	function datacustomer(){

	$term = $_GET['term'];	
	$data['id'] = $this->Musers->kodecustomer($term,'NAMA')->result();
	foreach($data['id'] as $n){
		
		$dataid[] = $n->NAMA;
		
	}
	echo json_encode($dataid);

	
	}	

	
}


