<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Main_model extends CI_Model {


	public function __construct() {
		parent::__construct(); 
	}

	// Fetch records
	public function getData($rowno,$rowperpage) {
			
		$this->db->select('*');
		$this->db->from('tbl_review');
        $this->db->limit($rowperpage, $rowno);  
        $this->db->order_by('id','DESC');
		$query = $this->db->get();
		return $query->result_array();
	}
 
	// Select total records
    public function getrecordCount() {

    	$this->db->select('count(*) as allcount');
      	$this->db->from('tbl_review');
      	$query = $this->db->get();
      	$result = $query->result_array();
      
      	return $result[0]['allcount'];
    }

}