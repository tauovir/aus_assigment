
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
    	 	$this->load->helper('cookie','url'); 
    		$this->load->library('form_validation');
    		$this->load->library('session');
    		$this->load->helper('email');
    }

    public function update($id)
    
	{
        

        $this->db->select('*');
        $this->db->from('tbl_members');
        $s = array('id'=>$id);
        $this->db->where($s);
        $query=$this->db->get();
 		
		if($query->num_rows()>0){ 
		$rest=$query->row();
        }
      
        $data['result'] = $rest;
        $data['title']=ucfirst('All Members');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('edit_member');
		$this->load->view('templates/footer');	
		
	}


    public function update_save()
    
	{
        $id = $this->input->post('id');

        $this->form_validation->set_rules('name','Username','trim|required|exact_length[4]|xss_clean');
        $this->form_validation->set_rules('email','Password','trim|required|min_length[4]|max_length[40]|xss_clean|callback_login');
        
        if($this->form_validation->run() == false)
        {
            redirect('member/edit/'. $id);
        }
        

      
        $data = array(  
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'mobile' => $this->input->post('mobile'));  

            $this->db->where('id', $id);
            $this->db->update('tbl_members', $data);
            $this->session->set_flashdata('success', 'Updated successfully');
            redirect('member/edit/'. $id);

		
	}


}