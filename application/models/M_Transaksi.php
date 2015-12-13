<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Transaksi extends CI_Model {
	public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->database();
    }

    public function add($data)
    {
    	return $this->db->insert('transaction_record', $data);
    }

    public function delete($data)
    {
    	return $this->db->delete('transaction_record', $data);
    }
}