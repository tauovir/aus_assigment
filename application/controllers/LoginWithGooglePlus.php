<?php


class LoginWithGooglePlus extends CI_Controller{
	
	public function index(){
		
		$this->db->select('*');
		$this->db->from('configuration_general');
		$this->db->where('id=1');
		$set = $this->db->get();
		$data['webconfig']= $set->row();
		
		
		
		if(isset($_GET['code']))
		{
			$this->googleplus->getAuthenticate();
			$this->session->set_userdata('login',true);
			$this->session->set_userdata('userProfile',$this->googleplus->getUserInfo());
			redirect('LoginWithGooglePlus/profile');
		}
		
		$data['loginURL'] = $this->googleplus->loginURL();
		    $data['title']=ucfirst('Registration');
    		$this->load->view('templates/log-head', $data);
    		$this->load->view('pages/login');
    		$this->load->view('templates/footer-user');
	}
	
	public function profile(){
		if($this->session->userdata('login') == true)
		{
			$data['profileData'] = $this->session->userdata('userProfile');
			$this->load->view('profile',$data);
		}
		else
		{
			redirect('');
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		$this->googleplus->revokeToken();
		redirect('');
	}
}//class ends here
