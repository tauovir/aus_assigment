<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pages extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	 	$this->load->helper('text');
		$this->db->select('*');
		$this->db->from('configuration_general');
		$this->db->where('id=1');
		$set = $this->db->get();
		$data['webconfig']= $set->row();
 		
 		if (isset($_COOKIE["wssinfotech_login"])) {
			///echo $_COOKIE["wssinfotech_login"];
 
			$this->db->select('*');
			$this->db->from('tbl_members');
			$this->db->where('email',$_COOKIE["wssinfotech_login"]);
			$set = $this->db->get();
			$data['user_detail'] = $set->row();
		}

$this->db->select('*');
$this->db->from('tbl_web_images');
$this->db->where('type',1);
$set = $this->db->get();
$data['banner_image'] = $set->result();


$this->db->select('*');
$this->db->from('testimonials');
$set = $this->db->get();
$data['testimonial'] = $set->result();


		$this->db->select('*');
        $this->db->from('tbl_pages');
        $s = array('pagid'=>9);
        $this->db->where($s);
        $data['top_header']=$this->db->get()->row();



$this->db->select('*');
$this->db->from('videos');
$this->db->order_by('id','DESC');
$set = $this->db->get();
$data['videos_tutorials'] = $set->result();


$this->db->select('*');
$this->db->from('tbl_category');
$this->db->where('level',0);
$this->db->order_by('id','ASC');
$data['all_category'] = $this->db->get()->result();


$this->db->select('*');
$this->db->from('ref_styl_siisgnment');
$this->db->order_by('id','DESC');
$data['all_reference'] = $this->db->get()->result();

$this->db->select('*');
$this->db->from('level_study');
$this->db->order_by('id','DESC');
$data['all_studylevel'] = $this->db->get()->result();
		


$this->db->select('*');
$this->db->from('tbl_offer');
$this->db->where('offer_status',1);
$this->db->order_by('id','DESC');
$data['allcuponcode']  = $this->db->get();


$this->db->select('*');
$this->db->from('add_products');
$this->db->order_by('id','ASC');
$data['all_products']  = $this->db->get();



$this->db->select('*');
$this->db->from('highlighted');
$this->db->order_by('id','ASC');
$this->db->limit(6);
$set = $this->db->get();
$data['highlighted_data'] = $set->result();

$this->db->select('*');
$this->db->from('highlighted2');
$this->db->order_by('id','DESC');
$this->db->limit(6);
$set = $this->db->get();
$data['highlighted_data2'] = $set->result();
	$this->load->view('pages/new', $data); 
} 




public function popupmodal()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
if ($this->uri->segment(3)=='s') {
		$cookie= array(
			'name'   => 'wssinfotech_home',
			'value'  => 'Session are created',
			'expire' => '604800',
		);
		$this->input->set_cookie($cookie);
		echo $_COOKIE["wssinfotech_home"];
}
		
	if ($this->uri->segment(3)=='u') {
		echo 'all session are deleted';
	}
		
}
public function search_json_data()
{	
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->db->select('*');
		$this->db->from('add_products');
	 	$this->db->like('title',$this->input->post('str'),'both');
		$this->db->order_by('id','DESC');

	echo "<ul  class='list-group nav navbar-nav' style='list-style-type: none;'>";
	foreach($this->db->get()->result() as $data){
		    echo "
		    <li  class='list-group-item nav-item'>
		    <button type='button' class='bbtcn' value='$data->title' onclick='getthisvalues(this.value,$data->id);'>$data->title</button></li>
		    "; 
		}
		echo "</ul>";
}
 	public function error404()
 	{ 
 		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
			
		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
		
 		
 		$this->load->helper('cookie','url'); $this->load->library('encrypt');
		log_message('error', 'Some variable did not contain a value.');
		$data['title']=ucfirst('404 Page Not Found');
		$this->load->view('pages/error404', $data);
 	}

	public function home()
	{	
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');

		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
			$_SESSION['checkout']['user']='pages/home';
		
		$this->db->select('*');
        $this->db->from('tbl_pages');
        $s = array('pagid'=>8);
        $this->db->where($s);
        $data['about_data']=$this->db->get()->row();

        $this->db->select('*');
        $this->db->from('tbl_pages');
        $s10 = array('pagid'=>10);
        $this->db->where($s10);
        $data['about_data10']=$this->db->get()->row();
        $this->db->select('*');
        $this->db->from('tbl_pages');
        $s11 = array('pagid'=>11);
        $this->db->where($s11);
        $data['about_data11']=$this->db->get()->row();




		$data['title']=ucfirst('Online tutorial');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/home');
		$this->load->view('templates/footer');
	}


public function step1p()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');


		if (!isset($_COOKIE["wssinfotech_login"])) {
			$_SESSION['emailid']['emailid']=$this->input->post('emailid');
			$_SESSION['subject']['subject']=$this->input->post('subject');
			$_SESSION['deadline']['deadline']=$this->input->post('deadline');
			$_SESSION['nopages']['nopages']=$this->input->post('nopages');
			$_SESSION['searchid']['searchid']=$this->input->post('searchid');
			redirect('pages/login');
		} else {
				if (isset($_SESSION['emailid']['emailid'])) {
					

		$this->db->select('*');
        $this->db->from('tbl_orders');
        $this->db->order_by('id','DESC');
        $this->db->limit(1);
        $lst=$this->db->get();

if ($lst->num_rows()>0) {
		$lastdata=$this->db->get()->row();
		$last2=$lastdata->id+1;
} else {
	$last2=1;
}
        


        		$orderid=date('Ymdhis').$last2;
					$data = array(  
						'email' => $_SESSION['emailid']['emailid'],
						'subject' => $_SESSION['subject']['subject'],
						'subject_id' => $_SESSION['searchid']['searchid'],
						'deadline' => $_SESSION['deadline']['deadline'],
						'pages' => $_SESSION['nopages']['nopages'],
						'order_date' => date('d-m-Y'),
						'order_id' => $orderid
					);  
					$this->db->insert('tbl_orders',$data);
					unset($_SESSION['emailid']['emailid']);
					unset($_SESSION['subject']['subject']);
					unset($_SESSION['searchid']['searchid']);
					unset($_SESSION['deadline']['deadline']);
					unset($_SESSION['nopages']['nopages']);
					redirect('pages/step2/'.$orderid);
				}	 else {

						$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

$this->form_validation->set_rules(
        'emailid', 'Email',
        'required|valid_email',
        array(
        		'valid_email'     => 'Enter  valid email',
	        	'required'     => 'Ente email id')
    	);

						$this->form_validation->set_rules('subject', 'subject', 'required');
						$this->form_validation->set_rules('deadline', 'deadline', 'required');
						$this->form_validation->set_rules('nopages', 'No of pages', 'required');
						$this->form_validation->set_rules('searchid', 'Subjetc ID', 'required');
					if ($this->form_validation->run() == FALSE) {
						  	$data['title']=ucfirst('Online tutorial');
							$this->load->view('templates/log-head', $data);
							$this->load->view('pages/step1p');
							$this->load->view('templates/footer-user');
					} else {
							$this->db->select('*');
					        $this->db->from('tbl_orders');
					        $this->db->order_by('id','DESC');
					        $this->db->limit(1);
					       $lst=$this->db->get();

							if ($lst->num_rows()>0) {
									$lastdata=$lst->row();
									$last2=$lastdata->id+1;
							} else {
								$last2=1;
							}
       						 $orderid=date('Ymdhis').$last2;

					        $data = array(  
								'email' => $this->input->post('emailid'),
								'subject' => $this->input->post('subject'),
								'subject_id' => $this->input->post('searchid'),
								'deadline' => $this->input->post('deadline'),
								'pages' => $this->input->post('nopages'),
								'order_date' => date('d-m-Y'),
								'order_id' => $orderid
							);  
							$this->db->insert('tbl_orders',$data);
							redirect('pages/step2/'.$orderid);


					}
				}		
		}




				





}


public function step2()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');

		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
		if (!isset($_COOKIE["wssinfotech_login"])) {
			redirect('pages/login');
		}
		//echo $this->uri->segment(3);
		$this->db->select('*');
		$this->db->from('tbl_orders');
		$this->db->where('order_id',$this->uri->segment(3));
		$data['order_data']=$this->db->get()->row();



if ($this->uri->segment(4)=='save') {

$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

//$this->form_validation->set_rules('emailid', 'Email id', 'trim|required');
$this->form_validation->set_rules('subject', 'Subject', 'trim|required');
$this->form_validation->set_rules('searchid', '', 'trim|required');
$this->form_validation->set_rules('deadline', 'Deadline', 'trim|required');
$this->form_validation->set_rules('nopages', 'Number  of pages', 'trim|required');
$this->form_validation->set_rules('study_level', 'current level of study', 'trim|required');
$this->form_validation->set_rules('assi_referencce', 'Reference style of assignment', 'required');
$this->form_validation->set_rules('assi_desrip', 'assignment description', 'required');
//$this->form_validation->set_rules('mobile', 'mobile', 'required');
$this->form_validation->set_rules('callbacktime', 'callback time', 'required');

$this->form_validation->set_rules(
        'mobile', 'Mobile Number',
        'required|regex_match[/^[0-9]{10}$/]',
        array(
        	'regex_match'     => 'Enter  correct mobile number',
        	'required'     => 'Ente mobile number'));

$this->form_validation->set_rules(
        'emailid', 'Email',
        'required|valid_email',
        array('valid_email'     => 'Enter  valid email',
        	'required'     => 'Ente email id'));



if ($this->form_validation->run() == FALSE) {

} else {

						$config['upload_path']= './assets/setting/';
		                $config['allowed_types']= 'jpg|png|pdf|PDF|doc|docx';
		            	$config['max_size'] = 1024 * 1;
		        		$config['encrypt_name'] = TRUE;
		        		$this->load->library('upload', $config);
		        		 if (!$this->upload->do_upload('assi_desrip_file'))
		                { 
								$assi_desrip_file='';
						} else {
								$x=$this->upload->data();
		                		$assi_desrip_file = $x['file_name'];
		                }
					$datas = array(  
					   'study_level' => $this->input->post('study_level'),
					   'assi_referencce' => $this->input->post('assi_referencce'),
					   'assi_desrip' => $this->input->post('assi_desrip'),
					   'mobile' => $this->input->post('mobile'),
					   'callbacktime' => $this->input->post('callbacktime'),
					   'assi_desrip_file'=>$assi_desrip_file
					);  
					$this->db->where('order_id',$this->uri->segment(3));
					$this->db->update('tbl_orders',$datas);
				redirect('pages/order_step3/'.$this->uri->segment(3));
				}
}
		$data['title']=ucfirst('Online tutorial');
		$this->load->view('templates/log-head', $data);
		$this->load->view('pages/step2');
		$this->load->view('templates/footer-user');

		 
		

}

public function order_step3()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');

		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
		if (!isset($_COOKIE["wssinfotech_login"])) {
			redirect('pages/login');
		}


		$this->db->select('*');
		$this->db->from('tbl_orders');
		$this->db->where('order_id',$this->uri->segment(3));
		$data['order_data']=$this->db->get()->row();


		$data['title']=ucfirst('Online tutorial');
		$this->load->view('templates/log-head', $data);
		$this->load->view('pages/order_step3');
		$this->load->view('templates/footer-user');
}


public function checkoutfinal()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
		
				$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
				
				$this->form_validation->set_rules('orderid', 'order id', 'required');
				$this->form_validation->set_rules('subject_id', 'subject id', 'required');
				$this->form_validation->set_rules('payment', 'payment amount', 'required');
				if ($this->form_validation->run() == FALSE) {

				} else {
		

		$this->db->select('*');
        $this->db->from('add_products');
        $this->db->where('id',$this->input->post('subject_id'));
        $prod=$this->db->get()->row();
			$totalamount = $this->input->post('pages')*$prod->mrp_price;
			$advance=$totalamount*$prod->advanceamt/100;
			$due=$totalamount-$advance;
if ($this->input->post('payment')==1) {
	$datas = array(  
		'pay_total' => $totalamount,
		'pay_advahnce' =>  $advance,
		'pay_restamount' => $due,
		'pay_date' => date('d-m-Y'),
		'pay_time' => date('h:i:s A'),
		'orderid' => $this->input->post('orderid')
	);  
} else {
	$datas = array(  
		'pay_total' => $totalamount,
		'pay_advahnce' =>  $totalamount,
		'pay_restamount' => 0,
		'pay_date' => date('d-m-Y'),
		'pay_time' => date('h:i:s A'),
		'orderid' => $this->input->post('orderid')
	);  
}

					
		//$this->db->where('order_id',$this->input->post('orderid'));
		$this->db->insert('order_payment',$datas);

		$this->db->select('*');
        $this->db->from('order_payment');
        $this->db->where('orderid',$this->input->post('orderid'));
        $this->db->order_by('pay_id','DESC');
        $this->db->limit(1);
        $payment=$this->db->get()->row();

		redirect('pages/orderplaced/'.$payment->pay_id);
	}	
}

	public function about()
	{	
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');

		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
		$_SESSION['checkout']['user']='pages/about';

		$this->db->select('*');
        $this->db->from('tbl_pages');
        $s = array('pagid'=>1);
        $this->db->where($s);
        $data['about_data']=$this->db->get()->row();



		$data['title']=ucfirst('Online tutorial');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/about');
		$this->load->view('templates/footer');
	}	

public function services()
	{	
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');

		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}


		$this->db->select('*');
        $this->db->from('add_products');

if ($this->uri->segment(3)==0) {
	$s = array('category'=>$this->uri->segment(4));
} else if ($this->uri->segment(3)==1) {
	$s = array('category2'=>$this->uri->segment(4));
}
$this->db->where($s);
$data['serices_data']=$this->db->get();



		$data['title']=ucfirst('Online tutorial');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/services');
		$this->load->view('templates/footer');
	}	


public function assignment()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');

		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
$_SESSION['checkout']['user']='pages/assignment/'.$this->uri->segment(3).'/'.$this->uri->segment(4);

		$this->db->select('*');
        $this->db->from('add_products');
		$s = array('id'=>$this->uri->segment(4));
		$this->db->where($s);
		$data['alldata']=$this->db->get()->row();

if($this->uri->segment(3)=='senddata'){
				$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
				$this->form_validation->set_rules('author', 'author name', 'trim|required');
				$this->form_validation->set_rules('email', 'email', 'required');
				$this->form_validation->set_rules('comment', 'comment', 'required');
				$this->form_validation->set_rules('last', 'Some invalid details', 'required');
				$this->form_validation->set_rules('assid', 'Some invalid details', 'required');
				if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('success', '<div class="alert alert-danger">All fields are mandatory</div>');
					 redirect('pages/assignment/'.$this->input->post('last').'/'.$this->input->post('assid'));
				} else {


					$data = array(  
						'author' => $this->input->post('author'),
						'email' => $this->input->post('email'),
						'comment' => $this->input->post('comment'),
						'assid' => $this->input->post('assid'),
						'date_post' => date('d-m-Y'),
						'post_time' => date('h:i:s A')
					);  
					$this->db->insert('tbl_review',$data);
					$this->session->set_flashdata('success', '<div class="alert alert-success">Your review or comment post Successfully</div>');
					 redirect('pages/assignment/'.$this->input->post('last').'/'.$this->input->post('assid'));


				}
}

		$data['title']=ucfirst('Online tutorial');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/assignment');
		$this->load->view('templates/footer');





}

public function enquiry()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');

		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
		if (!isset($_COOKIE["wssinfotech_login"])) {
			redirect('pages/login');
		}


		$this->db->select('*');
        $this->db->from('add_products');
		$s = array('id'=>$this->uri->segment(3));
		$this->db->where($s);
		$for_count=$this->db->get();
		$data['alldata']=$for_count->row();


		$this->db->select('*');
        $this->db->from('tbl_help_desks');
        $this->db->order_by('id','DESC');
		$s = array('query_by' =>$_COOKIE["wssinfotech_login"], 'productid' =>$this->uri->segment(3));
		$this->db->where($s);
		$data['allquery']=$this->db->get();


		if ($this->uri->segment(4)=='send') {

			$this->form_validation->set_error_delimiters('', '');
			$this->form_validation->set_rules('qtitle', 'Title', 'required');
			$this->form_validation->set_rules('query', 'Your message', 'required');
			if ($this->form_validation->run() == FALSE) {
			} else {


				$datad = array(  
		            'qtitle'     => $this->input->post('qtitle'),  
		            'query'     => $this->input->post('query'),  
		            'ticket_id'  =>date('ymdhis'),  
		            'query_by'   =>$_COOKIE["wssinfotech_login"],  
		            'productid' => $this->uri->segment(3),
		            'create_date'=>date('d-m-Y')
	        	); 
				$this->db->insert('tbl_help_desks',$datad);
				$this->session->set_flashdata('success', '<div class="alert alert-success">Your query post Successfully</div>');
					  
				redirect('pages/enquiry/'.$this->uri->segment(3));
			}
		}
if ($for_count->num_rows()>0) {
		$data['title']=ucfirst('Online tutorial');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/enquiry');
		$this->load->view('templates/footer');
} else {


		$this->db->select('*');
        $this->db->from('tbl_help_desks');
        $this->db->order_by('id','DESC');
        $this->db->group_by("productid");
		$s = array('query_by' =>$_COOKIE["wssinfotech_login"]);
		$this->db->where($s);
		$data['allquery']=$this->db->get();



		$data['title']=ucfirst('Online tutorial');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/enquiry-list');
		$this->load->view('templates/footer');
}
		
} 



public function wallet()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');

		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
		if (!isset($_COOKIE["wssinfotech_login"])) {
			redirect('pages/login');
		}


		$_SESSION['checkout']['user']='pages/wallet';
		
		$data['pag']=ucfirst('Wallet');
		$data['title']=ucfirst('Welcome to Natural Life');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/mne_left');
		$this->load->view('pages/wallet');
		$this->load->view('templates/mne_right');
		$this->load->view('templates/footer');
}






public function vision()
	{	
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');

		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
		$_SESSION['checkout']['user']='pages/vision';

		$this->db->select('*');
        $this->db->from('tbl_pages');
        $s = array('pagid'=>2);
        $this->db->where($s);
        $data['about_data']=$this->db->get()->row();



		$data['title']=ucfirst('Online tutorial');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/vision');
		$this->load->view('templates/footer');
	}	



public function mission()
	{	
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');

		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
$_SESSION['checkout']['user']='pages/mission';

		$this->db->select('*');
        $this->db->from('tbl_pages');
        $s = array('pagid'=>3);
        $this->db->where($s);
        $data['about_data']=$this->db->get()->row();



		$data['title']=ucfirst('Online tutorial');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/mission');
		$this->load->view('templates/footer');
	}	




public function privacy_polocy()
	{	
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');

		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}

$_SESSION['checkout']['user']='pages/privacy_polocy';
		$this->db->select('*');
        $this->db->from('tbl_pages');
        $s = array('pagid'=>4);
        $this->db->where($s);
        $data['about_data']=$this->db->get()->row();



		$data['title']=ucfirst('Online tutorial');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/privacy_polocy');
		$this->load->view('templates/footer');
	}	


public function why_choose_us()
	{	
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');

		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
$_SESSION['checkout']['user']='pages/why_choose_us';

		$this->db->select('*');
        $this->db->from('tbl_pages');
        $s = array('pagid'=>7);
        $this->db->where($s);
        $data['about_data']=$this->db->get()->row();



		$data['title']=ucfirst('Online tutorial');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/why_choose_us');
		$this->load->view('templates/footer');
	}	


	public function terms_n_conditions()
	{	
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');

		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
			
			$_SESSION['checkout']['user']='pages/terms_n_conditions';
		$this->db->select('*');
        $this->db->from('tbl_pages');
        $s = array('pagid'=>6);
        $this->db->where($s);
        $data['about_data']=$this->db->get()->row();



		$data['title']=ucfirst('Online tutorial');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/terms_n_conditions');
		$this->load->view('templates/footer');
	}	






	public function offe_details()
	{	
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');

		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}


		$this->db->select('*');
        $this->db->from('tbl_offer');
        $s = array('id'=>$this->uri->segment(3));
        $this->db->where($s);
        $data['offe_details']=$this->db->get()->row();



		$data['title']=ucfirst('Online tutorial');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/offe_details');
		$this->load->view('templates/footer');
	}	

	public function how_it_work()
	{	
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');

		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}


$this->db->select('*');
$this->db->from('how_it_word');
$this->db->order_by('id','ASC');
$set = $this->db->get();

$data['how_work'] = $set->result();

		$data['title']=ucfirst('Online tutorial');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/how_it_word');
		$this->load->view('templates/footer');
	}	

	public function offers()
	{	
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');

		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
			$_SESSION['checkout']['user']='pages/offers';
		$data['title']=ucfirst('Online tutorial');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/offers');
		$this->load->view('templates/footer');
	}


	public function register()
	{	
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');

		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
if ($this->uri->segment(3)=='submit') {
	$this->form_validation->set_error_delimiters('', '');

$this->form_validation->set_rules(
        'mobile', 'Mobile Number',
        'required|regex_match[/^[0-9]{10}$/]|is_unique[tbl_members.mobile]',
        array('is_unique'     => 'This %s already exists',
        	'regex_match'     => 'Enter  correct mobile number',
        	'required'     => 'Ente mobile number'));

$this->form_validation->set_rules(
        'email', 'Email',
        'required|valid_email|is_unique[tbl_members.email]',
        array('is_unique'     => 'This %s already exists',
        	'valid_email'     => 'Enter  valid email',
        	'required'     => 'Ente email id'));

$this->form_validation->set_rules('name', 'Full Name','trim|required',
        array('required'     => 'Enter full name'));
 
	
	if ($this->form_validation->run() == FALSE) {
	
	} else {


	$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $password = array(); 
    $alpha_length = strlen($alphabet) - 1; 
    for ($i = 0; $i < 8; $i++) 
    {
        $n = rand(0, $alpha_length);
        $password[] = $alphabet[$n];
    }
    $randpassword =  implode($password); 

if ($this->input->post('refno')=='') {
	$dx=1;
} else {
		$this->db->select('*');
		$this->db->from('tbl_members');
		$w = array('id'=>$this->input->post('refno'));
		$this->db->where($w);
		$x=$this->db->get();
		$dx=$x->num_rows();
}

		$this->db->select('*');
		$this->db->from('tbl_members');
		$this->db->order_by('dum_id','DESC');
		$this->db->limit(1);
		$xlast=$this->db->get();
		if ($xlast->num_rows()>0) {
		 	$lastid=1;
		} else{
			$rcv= $xlast->row();
			$lastid=$rcv->dum_id+1;
		}

				$this->db->select('*');
				$this->db->from('configuration_general');
				$this->db->where('id=1');
				$set = $this->db->get();
				$getrecord= $set->row();
				$webconfig= $set->row();


if ($dx>0) {
		$randpassword=strtoupper($randpassword).$lastid.date('is');
		$fid=rand(date('si'),date('hsi')).date('si').$lastid;
		$data = array(  
            'id'     => $randpassword,  
            'name'     => $this->input->post('name'),  
            'email'  => $this->input->post('email'),  
            'password'   => $fid,  
            'mobile' => $this->input->post('mobile'),
            'sponsor_id' => $this->input->post('refno'),
            'registip'=>$this->input->ip_address()
        ); 
		$this->db->insert('tbl_members',$data);
		
		
		$to_email = $this->input->post('email');
        $from_email = $webconfig->organization_email;
        $this->load->library('email');
        $this->email->from($from_email, $webconfig->site_name);
        $this->email->to($to_email);
        $this->email->subject($webconfig->site_name.' login details');
        $this->email->message('Dear,  '.$this->input->post('name').',  Your account created successfully & your login details are  Login ID :  '.$this->input->post('email').',   Login Password : '.$fid);
        $this->email->send();
				 
				$this->db->select('*');
				$this->db->from('tbl_members');
				$this->db->where('id',$randpassword);
				$this->db->where('email',$this->input->post('email'));
				$setprofile = $this->db->get();
				$myprofile= $setprofile->row();

				




/*SignUp bonus income management*/				
		$datad = array(  
            'income_to'     => $randpassword,  
            'payment_dr_cr'     => 'cr',  
            'amount'  =>$getrecord->signupbonus,  
            'create_date'   =>date('d-m-Y'),  
            'payment_reason' => 'Signup welcome bonus amount',
            'istip'=>$this->input->ip_address()
        ); 
		$this->db->insert('tbl_income_reports',$datad);

 		$datas = array(  
		   'wallet' => $getrecord->signupbonus
		);  
		$this->db->where('id',$randpassword);
		$this->db->where('email',$this->input->post('email'));
		$this->db->update('tbl_members',$datas);
/*SignUp bonus income management*/





/*Refer bonus income management*/

		$this->db->select('*');
		$this->db->from('tbl_members');
		$w = array('id'=>$this->input->post('refno'));
		$this->db->where($w);
		$xe=$this->db->get();
		 


if($xe->num_rows()>0){

		$x2c = $xe->row();
		$data2 = array(  
            'income_to'     => $this->input->post('refno'),  
            'income_by'     => $randpassword,  
            'payment_dr_cr'     => 'cr',  
            'amount'  =>$getrecord->reffererrern,  
            'create_date'   =>date('d-m-Y'),  
            'payment_reason' => 'Refere Income',
            'istip'=>$this->input->ip_address()
        ); 
		$this->db->insert('tbl_income_reports',$data2);

		$lastwallet=$x2c->wallet;
		$newwallet=$lastwallet+$getrecord->reffererrern;
		$data3 = array(  
		   'wallet' => $getrecord->signupbonus
		);  
		$this->db->where('id',$this->input->post('refno'));
		$this->db->where('email',$x2c->email);
		$this->db->update('tbl_members',$data3);
}
/*Refer bonus income management*/		

	$this->session->set_flashdata("success_red",'<div class="alert alert-success">Your account created successfully and password sent to your register mail ID</div>');
	redirect('pages/regiter_success/');

} else {
	$this->session->set_flashdata("success_red",'<div class="alert alert-danger">Invalid refrral code</div>');
	redirect('pages/register/');
}

		

	}


}

	

		$data['title']=ucfirst('To.Maaro Login / Registration');
	 

		$this->load->view('templates/log-head', $data);
		$this->load->view('pages/register');
		$this->load->view('templates/footer-user');

 

	}	

	
	public function regiter_success($value='')
	{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');


		$data['title']=ucfirst('To.Maaro Login / Registration');
	 	$this->load->view('templates/log-head', $data);
		$this->load->view('pages/regiter_success');
		$this->load->view('templates/footer-user');
	}
 
	
public function login()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');

		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
		if (isset($_COOKIE["wssinfotech_login"]) and !isset($_SESSION['emailid']['emailid'])) {
			redirect('pages/home');
		}

		if ($this->uri->segment(3)=='submit') {
				$_SESSION['checkout']['user']=$this->input->post('lasturl');
					$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
					$this->form_validation->set_rules('username', 'User name', 'required');
					$this->form_validation->set_rules('password', 'Password', 'required');
					if ($this->form_validation->run() == FALSE) {
					    
					} else {
						$this->db->select('*');
						$this->db->from('tbl_members');
						$where = array('email' => $this->input->post('username'), 'password' => $this->input->post('password'));
						$this->db->where($where);
        				$query = $this->db->get();
        				if ($query->num_rows()==0) {
									$_SESSION['checkout']['user']=$this->input->post('lasturl');
									$this->session->set_flashdata("username",'Invalid user name');
									$this->session->set_flashdata("password",'Invalid password');
									redirect('pages/login/');

		        		} else {
		        			$resut = $query->row();
		        			$cookie= array(
						          		'name'   => 'wssinfotech_login',
						           		'value'  => $this->input->post('username'),
						           		'expire' => '604800',
						    );
						    $this->input->set_cookie($cookie);

						   if(isset($_SESSION['checkout']['user'])) {

						    	$lastlogin = $_SESSION['checkout']['user'];
						    	unset($_SESSION['checkout']['user']);
								redirect($lastlogin);

							} else{

								if (isset($_SESSION['emailid']['emailid'])) {
						    			redirect('pages/step1p');
						    	} else{


								redirect($this->input->post('lasturl'));}
							}

	        		}

				}
		}
		$data['title']=ucfirst('Registration');
		$this->load->view('templates/log-head', $data);
		$this->load->view('pages/login');
		$this->load->view('templates/footer-user');
}


public function forgot_password()
{
        date_default_timezone_set("Asia/Calcutta");
        $this->load->helper('cookie','url'); 
        $this->load->library('encrypt');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper('email');
        $this->load->helper('text');

        if (!isset($_SESSION['uniew']['useragent'])) {
            $_SESSION['uniew']['useragent']=session_id();
        }

        if ($this->uri->segment(3)=='submit') {
                    $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
                    $this->form_validation->set_rules('username', 'User name', 'required');
                    if ($this->form_validation->run() == FALSE) {
                    } else {
                        $this->db->select('*');
                        $this->db->from('tbl_members');
                        $where = array('email' => $this->input->post('username'));
                        $this->db->where($where);
                        $query = $this->db->get();
                        if ($query->num_rows()==0) {
                                $this->session->set_flashdata("username",'<div class="error">Invalid user name</div>');
                                    redirect('pages/forgot_password/');
                        } else {


	$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $password = array(); 
    $alpha_length = strlen($alphabet) - 1; 
    for ($i = 0; $i < 8; $i++) 
    {
        $n = rand(0, $alpha_length);
        $password[] = $alphabet[$n];
    }
    $randpassword =  implode($password); 
    $data = array(  
				'password' => $randpassword
	); 
					$this->db->where('email',$this->input->post('username')); 
					$this->db->update('tbl_members',$data);
				$reco=$query->row();
                $this->db->select('*');
				$this->db->from('configuration_general');
				$this->db->where('id=1');
				$set = $this->db->get();
				$getrecord= $set->row();
				$webconfig= $set->row();
						$to_email = $this->input->post('username');
				        $from_email = $webconfig->organization_email;
				        $this->load->library('email');
				        $this->email->from($from_email, $webconfig->site_name);
				        $this->email->to($to_email);
				        $this->email->subject($webconfig->site_name.' login details');
				        $this->email->message('Dear,  '.$reco->name.',  Your Password on '.$webconfig->site_name.' Please keep it in your records so you dont forget it.  User Id/Email Id :  '.$this->input->post('username').',   Password : '.$randpassword);
				        $this->email->send();
				    $this->session->set_flashdata('success_password', $this->input->post('username'));
					redirect('pages/forgot_password');



                        }

                    }
        }


        $data['title']=ucfirst(' Login / Registration');
        $this->load->view('templates/log-head', $data);
        $this->load->view('pages/forgot_password');
        $this->load->view('templates/footer-user');
}



	
public function post()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');

		$this->db->select('*');
        $this->db->from('cor_team_management');
        $this->db->where('id',$this->uri->segment(3));
        $data['post_details']= $this->db->get()->row();

        $data['title']=ucfirst('');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/details');
		$this->load->view('templates/footer');
}




public function news()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
			
		$this->db->select('*');
		$this->db->from('cor_team_management');
		$this->db->where('type', $this->uri->segment(3));
		if ($this->uri->segment(4)!='') {
			$this->db->where('category', $this->uri->segment(4));	 
		}
		//$set = $this->db->get();
		$data['management'] = $this->db->get();
		 

		$data['title']=ucfirst('');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/services');
		$this->load->view('templates/footer');

}





public function gallery()
	{	
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
			
		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}

$this->db->select('*');
$this->db->from('tbl_web_images');
$this->db->where('type=2');
$set = $this->db->get();
$data['banner_image'] = $set->result();	 
 


		$data['title']=ucfirst('Welcome to Natural Life');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/gallery');
		$this->load->view('templates/footer');
	}



public function videos()
	{	
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
			
		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}

		$data['title']=ucfirst('Welcome to Natural Life');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/videos'); 
		$this->load->view('templates/footer');
	}	
 

	public function contact()
	{	

		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
			
		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
		$_SESSION['checkout']['user']='pages/contact';
			if ($this->uri->segment(3)=='send') {
				$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
				$this->form_validation->set_rules('contact_email', 'Email', 'trim|required|valid_email');
				$this->form_validation->set_rules('contact_name', 'Name', 'required');
				$this->form_validation->set_rules('ContactFormSubject', 'Subject', 'required');
				$this->form_validation->set_rules('contact_body', 'Message', 'required');
			 
				if ($this->form_validation->run() == FALSE) {
				
				} else {

			$replyt=1;
            $this->db->select('*');
            $this->db->from('configuration_general');
            $this->db->where('id', $replyt);
            $set = $this->db->get();
            $webconfig = $set->row();



		$to_email = $webconfig->organization_email;
        $from_email = $this->input->post('contact_email');
        //Load email library
        $this->load->library('email');
        $this->email->from($from_email, 'Identification');
        $this->email->to($to_email);
        $this->email->subject($this->input->post('contact_name'));
        $this->email->message('Name :  '.$this->input->post('contact_name').', Message : '.$this->input->post('contact_body').', Mobile : '.$this->input->post('ContactFormSubject').', Email : '.$this->input->post('contact_email'));
        //Send mail
        if($this->email->send()){

                    $this->session->set_flashdata("email_sent","Email Send Successfully.");
                    redirect('pages/contact'); 
        }
        else {
            $this->session->set_flashdata("email_faield","You have encountered an error");
     		redirect('pages/contact'); 
        }


				}
			}


		$data['title']=ucfirst('');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/contact');
		$this->load->view('templates/footer');
	}

public function referral()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');

 

		$data['pag']=ucfirst('Referal');
		$data['title']=ucfirst('Welcome to Natural Life');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/mne_left');
		$this->load->view('pages/referral');
		$this->load->view('templates/mne_right');
		$this->load->view('templates/footer');


}

public function share()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');

		$this->db->select('*');
        $this->db->from('tbl_members');
        $s = array('id'=>$this->uri->segment(4));
        $this->db->where($s);
        $countdata=$this->db->get();
        if ($countdata->num_rows()>0) {
        	$_SESSION['refer']['id']=$this->uri->segment(4);
        	redirect('pages/register');
        } else{
        	echo 'not Ok';
        }

}

public function refer_policy()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');

		$this->db->select('*');
        $this->db->from('tbl_pages');
        $s = array('pagid'=>13);
        $this->db->where($s);
        $data['about_data']=$this->db->get()->row();


        $_SESSION['checkout']['user']='pages/reviews';
		$data['title']=ucfirst('');
		$this->load->view('templates/header', $data);
		$this->load->view('refer_policy');
		$this->load->view('templates/footer');
}


public function reviews()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('url');
		$this->load->library('pagination');
		$this->load->model('Main_model');

		$this->db->select('*');
        $this->db->from('tbl_pages');
        $s = array('pagid'=>12);
        $this->db->where($s);
        $data['about_data']=$this->db->get()->row();



		$_SESSION['checkout']['user']='pages/reviews';
		$data['title']=ucfirst('');
		$this->load->view('templates/header', $data);
		$this->load->view('user_view');
		//$this->load->view('pages/reviews-ratings');
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


	
public function query()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');

if ($this->uri->segment(3)=='send') {
	$datan = array(
			'query_category'=>  $this->input->post('query_category'), 
			'query_name'=>  $this->input->post('query_name'), 
			'query_email'=>  $this->input->post('query_email'), 
			'query_mobile'=>  $this->input->post('query_mobile'), 
			'query_text'=>  $this->input->post('query_text'),
			 'cteate_date'=>date('d/m/Y h:i:s A')  
		);
		$this ->db->insert('queries',$datan);
		
		redirect("pages/query/");  

}

		$data['title']=ucfirst('Welcome to Natural Life');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/query_success');
		$this->load->view('templates/footer');	


}


	public function blogs()
	{	

		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
			
		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
		

		if ($this->uri->segment(3)!='') {
			# code...
			$data['title']=ucfirst('Welcome to Natural Life');
			$this->load->view('templates/header', $data);
			$this->load->view('pages/details');
			$this->load->view('templates/footer');
		} else {

			$data['title']=ucfirst('Welcome to Natural Life');
			$this->load->view('templates/header', $data);
			$this->load->view('pages/blogs');
			$this->load->view('templates/footer');
		}
		
	}
  
public function testimonials()
	{	

		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
			
		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
		

		$data['title']=ucfirst('Welcome to Natural Life');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/testimonials');
		$this->load->view('templates/footer');
	}





public function privacy()
	{	
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
			
		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
		

		$data['title']=ucfirst('Welcome to Natural Life');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/privacy');
		$this->load->view('templates/footer');
	}




public function faq()
	{	
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
			
		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
		
		$data['title']=ucfirst('Welcome to Natural Life');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/faq');
		$this->load->view('templates/footer');
	}



public function feedback()
	{	

		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
			
		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
		

		$data['title']=ucfirst('Welcome to Natural Life');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/feedback');
		$this->load->view('templates/footer');
}

 

public function logout()
{
	date_default_timezone_set("Asia/Calcutta");
 	$this->load->helper('cookie','url'); 
	$this->load->library('encrypt');
	$this->load->library('form_validation');
	$this->load->library('session');
	$this->load->helper('email');
	delete_cookie('wssinfotech_login'); 
	redirect('pages/login');
}


public function dashboard()
{
	date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
			
		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}

		if (!isset($_COOKIE["wssinfotech_login"])) {
			redirect('pages/login');
		}
 
		$this->db->select('*');
        $this->db->from('tbl_orders');
        $s = array('email'=>$_COOKIE["wssinfotech_login"]);
        $this->db->where($s);
        $data['my_orders']=$this->db->get();




        $data['pag']=ucfirst('Dashboard');
		$data['title']=ucfirst('Welcome to Natural Life');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/mne_left');
		$this->load->view('pages/dashboard');
		$this->load->view('templates/mne_right');
		$this->load->view('templates/footer');

}

public function orderplaced()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');

		
		$data['title']=ucfirst('Online tutorial');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/orderplaced');
		$this->load->view('templates/footer');
}



public function changepassword()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
			
		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}

		if (!isset($_COOKIE["wssinfotech_login"])) {
			redirect('pages/login');
		}

		if ($this->uri->segment(3)=='save') {
				$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
				$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[25]|matches[confirmpassword]');
				$this->form_validation->set_rules('confirmpassword', 'Confirm  Password', 'trim|required');
				$this->form_validation->set_rules('oldpassword', 'Old  Password', 'trim|required');
				if ($this->form_validation->run() == FALSE) {
					 
				} else {

					$this->db->select('*');
					$this->db->from('tbl_members');
					$this->db->where('email',$_COOKIE["wssinfotech_login"]);
					$set = $this->db->get();
					$user_detail = $set->row();
 
					if ($this->input->post('oldpassword')!=$user_detail->password) {
						$this->session->set_flashdata('success', '<div class="alert alert-danger">Enter valid old password</div>');
					} else{
					$data = array(  
					   'password' => $this->input->post('password')
					); 
					$this->db->where('email', $_COOKIE["wssinfotech_login"]); 
					$this->db->update('tbl_members',$data);
					$this->session->set_flashdata('success', '<div class="alert alert-success">Password update Successfully</div>');	
					}


					
					redirect('pages/changepassword');
				}
		}


		$data['title']=ucfirst('Welcome to Natural Life');
		$data['pag']=ucfirst('Change Password');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/mne_left');
		$this->load->view('pages/password');
		$this->load->view('templates/mne_right');
		$this->load->view('templates/footer');


}


	public function transactions()
	{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');

		$data['pag']=ucfirst('Transactions');
		$data['title']=ucfirst('Welcome to Natural Life');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/mne_left');
		$this->load->view('pages/transactions_success');
		$this->load->view('templates/mne_right');
		$this->load->view('templates/footer');
}


	public function profile()
	{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');

			if ($this->uri->segment(3)=='save') {
				$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
				$this->form_validation->set_rules('name', 'Full name', 'required');
				$this->form_validation->set_rules('gender', 'Gender', 'required');
				$this->form_validation->set_rules('mobile', 'Mobile', 'required');
				$this->form_validation->set_rules('day', 'Days', 'required');
				$this->form_validation->set_rules('month', 'Months', 'required');
				$this->form_validation->set_rules('year', 'Years', 'required');
				$this->form_validation->set_rules('biographial', 'About yourself', 'required');
				if ($this->form_validation->run() == FALSE) {
					 
				} else {

						$config['upload_path']          = './assets/setting/';
		                $config['allowed_types']        = 'jpg|png';
		            	$config['max_size'] = 1024 * 1;
		        		$config['encrypt_name'] = TRUE;
		        		$this->load->library('upload', $config);
		        		 if (!$this->upload->do_upload('profilepic'))
		                { 
								$data = array(  
						            'name' => $this->input->post('name'),
						            'gender' => $this->input->post('gender'),
						            'mobile' => $this->input->post('mobile'),
						            'day' => $this->input->post('day'),
						            'month' => $this->input->post('month'),
						            'year' => $this->input->post('year'),
						            'biographial' => $this->input->post('biographial')
						    	); 
						} else {
								$x=$this->upload->data();
		                		$profilepic = $x['file_name'];
								$data = array(  
						            'name' => $this->input->post('name'),
						            'gender' => $this->input->post('gender'),
						            'mobile' => $this->input->post('mobile'),
						            'day' => $this->input->post('day'),
						            'month' => $this->input->post('month'),
						            'year' => $this->input->post('year'),
						            'biographial' => $this->input->post('biographial'),
						            'profilepic' => $profilepic
						    	); 
						}

					$this->db->where('email', $_COOKIE["wssinfotech_login"]); 
					$this->db->update('tbl_members',$data);
					$this->session->set_flashdata('success', '<div class="alert alert-success">profile update Successfully</div>');
					redirect('pages/profile');


		}
}



 
		$data['pag']=ucfirst('Profile');
		$data['title']=ucfirst('Welcome to Natural Life');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/mne_left');
		$this->load->view('pages/profile');
		$this->load->view('templates/mne_right');
		$this->load->view('templates/footer');


	}

}
