<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_User extends CI_Controller {

	public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->model('M_User');
    }
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function add()
	{
		$data = array(
		        'username' => $this->input->post('username'),
		        'nama' => $this->input->post('nama'),
		        'password' => sha1($this->input->post('password')),
		        'hak_akses' => $this->input->post('hak_akses'),
		        'create_at' => date('Y-m-d'),
		        'delete_at' => 'NULL',
		        'update_at' => date('Y-m-d'),
		        'no_hp' => $this->input->post('no_hp'),
		        'email' => $this->input->post('email')
		);
		// echo date('Y-m-d');
		echo $this->M_User->add($data);
	}
}
