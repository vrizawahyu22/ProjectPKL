<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cUser extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mUser');
		$this->load->helper('url_helper');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('vUser/vLoginUser.php');
		$this->load->view('vUser/vFooterLoginUser.php');
	}

	public function validation()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->mAdmin->getAdmin("admin",$where)->num_rows();

		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);
		 	// redirect(base_url("admin/sukses"));
		 	echo "SUKSES COYY";
		}
		else{
			$this->load->view('vAdmin/vHomeAdmin.php');
			$this->load->view('vAdmin/vError');
			$this->load->view('vAdmin/vFooterHomeAdmin.php');
		}
	}
}
