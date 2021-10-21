<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


  
 


	public function admin()
	{
		$data['title']=ucfirst('Home : shaadi matrimony service provider in Meerut, India');
		$this->load->view('admin/index', $data);
	}



}
