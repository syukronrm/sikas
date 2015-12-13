<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Transaksi extends CI_Controller {

	public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->model('M_Transaksi');
    }

    public function index()
    {
    	$this->load->view("welcome message");
    }

    public function add()
    {
    	$data = array(
    		'nominal_transaksi' => $this->input->post('nominal_transaksi'),
    		'tanggal_transaksi' => date('Y-m-d'),
    		'keterangan' => $this->input->post('keterangan'),
    		'tipe_transaksi' => $this->input->post('tipe_transaksi'),
    		'group_has_User_group_idgroup' => $this->input->post('group_has_User_group_idgroup'),
    		'group_has_User_User_id_User' => $this->input->post('group_has_User_User_id_User')
    	);
    	//echo "lolol";
    	echo $this->M_Transaksi->add($data);
    }

    public function delete()
    {
        $data = array(
            'id_transaction_record' => $this->input->post('id_transaction_record')
        );

        echo $this->M_Transaksi->delete($data);
    }
}