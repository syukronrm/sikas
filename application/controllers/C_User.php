<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_User extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
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
		        'create_at' => 'NOW()',
		        'delete_at' => 'NULL',
		        'update_at' => 'NOW()',
		        'no_hp' => $this->input->post('no_hp'),
		        'email' => $this->input->post('email')
		);
		echo $this->M_User->add($data);
	}
}
