<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Group extends CI_Controller {

	public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->model('M_Group');
    }
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function add()
	{
		$data = array(
		     'group_name' => $this->input->post ('group_name'),
		     'periode_pembayaran' => $this->input->post ('periode_pembayaran'),
		     'tagihan' => $this->input->post ('tagihan')
		);
		// echo date('Y-m-d');
		echo $this->M_Group->add($data);
	}
}
