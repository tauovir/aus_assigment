<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		
        parent::__construct();
        $this->load->helper('url');

        // Load Pagination library
		$this->load->library('pagination');

		// Load model
		$this->load->model('Main_model');
	}

	public function index(){
		$this->load->helper('text');
		$this->db->select('*');
		$this->db->from('configuration_general');
		$this->db->where('id=1');
		$set = $this->db->get();
		$data['webconfig']= $set->row();
		$data['title']=ucfirst('');
		$this->load->view('templates/header', $data);
		$this->load->view('user_view');
		$this->load->view('templates/footer');
	}

	public function loadRecord($rowno=0){

		// Row per page
		$rowperpage = 10;

		// Row position
		if($rowno != 0){
			$rowno = ($rowno-1) * $rowperpage;
		}
      	 
      	// All records count
      	$allcount = $this->Main_model->getrecordCount();

      	// Get  records
      	$users_record = $this->Main_model->getData($rowno,$rowperpage);
		  foreach($users_record as $key => $value){
			$users_record[$key]['date_post'] = date('d M Y',strtotime($value['date_post']));
			
		  }

      	
      	// Pagination Configuration
      	$config['base_url'] = base_url().'index.php/User/loadRecord';
      	$config['use_page_numbers'] = TRUE;
		$config['total_rows'] = $allcount;
		$config['per_page'] = $rowperpage;

		// Initialize
		$this->pagination->initialize($config);

		// Initialize $data Array
		$data['pagination'] = $this->pagination->create_links();
		$data['result'] = $users_record;
		$data['row'] = $rowno;
		
		

		echo json_encode($data);
		
	}

}