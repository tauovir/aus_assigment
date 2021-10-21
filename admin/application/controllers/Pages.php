<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Pages extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
    	 	$this->load->helper('cookie','url'); 
    		$this->load->library('form_validation');
    		$this->load->library('session');
    		$this->load->helper('email');
    		$this->load->model('GetIpAddress');
    		
$ipaddress = $this->GetIpAddress->getVisIpAddr();
$ipdat = @json_decode(file_get_contents( 
    "http://www.geoplugin.net/json.gp?ip=".$ipaddress)); 
    $data['ary']=array(
	'AD'=>array('name'=>'ANDORRA','c_code'=>'AD','code'=>'376'),
	'AE'=>array('name'=>'UNITED ARAB EMIRATES','c_code'=>'AE','code'=>'971'),
	'AF'=>array('name'=>'AFGHANISTAN','c_code'=>'AF','code'=>'93'),
	'AG'=>array('name'=>'ANTIGUA AND BARBUDA','c_code'=>'AG','code'=>'1268'),
	'AI'=>array('name'=>'ANGUILLA','c_code'=>'AI','code'=>'1264'),
	'AL'=>array('name'=>'ALBANIA','c_code'=>'AL','code'=>'355'),
	'AM'=>array('name'=>'ARMENIA','c_code'=>'AM','code'=>'374'),
	'AN'=>array('name'=>'NETHERLANDS ANTILLES','c_code'=>'AN','code'=>'599'),
	'AO'=>array('name'=>'ANGOLA','c_code'=>'AO','code'=>'244'),
	'AQ'=>array('name'=>'ANTARCTICA','c_code'=>'AQ','code'=>'672'),
	'AR'=>array('name'=>'ARGENTINA','c_code'=>'AR','code'=>'54'),
	'AS'=>array('name'=>'AMERICAN SAMOA','c_code'=>'AS','code'=>'1684'),
	'AT'=>array('name'=>'AUSTRIA','c_code'=>'AT','code'=>'43'),
	'AU'=>array('name'=>'AUSTRALIA','c_code'=>'AU','code'=>'61'),
	'AW'=>array('name'=>'ARUBA','c_code'=>'AW','code'=>'297'),
	'AZ'=>array('name'=>'AZERBAIJAN','c_code'=>'AZ','code'=>'994'),
	'BA'=>array('name'=>'BOSNIA AND HERZEGOVINA','c_code'=>'BA','code'=>'387'),
	'BB'=>array('name'=>'BARBADOS','c_code'=>'BB','code'=>'1246'),
	'BD'=>array('name'=>'BANGLADESH','c_code'=>'BD','code'=>'880'),
	'BE'=>array('name'=>'BELGIUM','c_code'=>'BE','code'=>'32'),
	'BF'=>array('name'=>'BURKINA FASO','c_code'=>'BF','code'=>'226'),
	'BG'=>array('name'=>'BULGARIA','c_code'=>'BG','code'=>'359'),
	'BH'=>array('name'=>'BAHRAIN','c_code'=>'BH','code'=>'973'),
	'BI'=>array('name'=>'BURUNDI','c_code'=>'BI','code'=>'257'),
	'BJ'=>array('name'=>'BENIN','c_code'=>'BJ','code'=>'229'),
	'BL'=>array('name'=>'SAINT BARTHELEMY','c_code'=>'BL','code'=>'590'),
	'BM'=>array('name'=>'BERMUDA','c_code'=>'BM','code'=>'1441'),
	'BN'=>array('name'=>'BRUNEI DARUSSALAM','c_code'=>'BN','code'=>'673'),
	'BO'=>array('name'=>'BOLIVIA','c_code'=>'BO','code'=>'591'),
	'BR'=>array('name'=>'BRAZIL','c_code'=>'BR','code'=>'55'),
	'BS'=>array('name'=>'BAHAMAS','c_code'=>'BS','code'=>'1242'),
	'BT'=>array('name'=>'BHUTAN','c_code'=>'BT','code'=>'975'),
	'BW'=>array('name'=>'BOTSWANA','c_code'=>'BW','code'=>'267'),
	'BY'=>array('name'=>'BELARUS','c_code'=>'BY','code'=>'375'),
	'BZ'=>array('name'=>'BELIZE','c_code'=>'BZ','code'=>'501'),
	'CA'=>array('name'=>'CANADA','c_code'=>'CA','code'=>'1'),
	'CC'=>array('name'=>'COCOS (KEELING) ISLANDS','c_code'=>'CC','code'=>'61'),
	'CD'=>array('name'=>'CONGO, THE DEMOCRATIC REPUBLIC OF THE','c_code'=>'CD','code'=>'243'),
	'CF'=>array('name'=>'CENTRAL AFRICAN REPUBLIC','c_code'=>'CF','code'=>'236'),
	'CG'=>array('name'=>'CONGO','c_code'=>'CG','code'=>'242'),
	'CH'=>array('name'=>'SWITZERLAND','c_code'=>'CH','code'=>'41'),
	'CI'=>array('name'=>'COTE D IVOIRE','c_code'=>'CI','code'=>'225'),
	'CK'=>array('name'=>'COOK ISLANDS','c_code'=>'CK','code'=>'682'),
	'CL'=>array('name'=>'CHILE','c_code'=>'CL','code'=>'56'),
	'CM'=>array('name'=>'CAMEROON','c_code'=>'CM','code'=>'237'),
	'CN'=>array('name'=>'CHINA','c_code'=>'CN','code'=>'86'),
	'CO'=>array('name'=>'COLOMBIA','c_code'=>'CO','code'=>'57'),
	'CR'=>array('name'=>'COSTA RICA','c_code'=>'CR','code'=>'506'),
	'CU'=>array('name'=>'CUBA','c_code'=>'CU','code'=>'53'),
	'CV'=>array('name'=>'CAPE VERDE','c_code'=>'CV','code'=>'238'),
	'CX'=>array('name'=>'CHRISTMAS ISLAND','c_code'=>'CX','code'=>'61'),
	'CY'=>array('name'=>'CYPRUS','c_code'=>'CY','code'=>'357'),
	'CZ'=>array('name'=>'CZECH REPUBLIC','c_code'=>'CZ','code'=>'420'),
	'DE'=>array('name'=>'GERMANY','c_code'=>'DE','code'=>'49'),
	'DJ'=>array('name'=>'DJIBOUTI','c_code'=>'DJ','code'=>'253'),
	'DK'=>array('name'=>'DENMARK','c_code'=>'DK','code'=>'45'),
	'DM'=>array('name'=>'DOMINICA','c_code'=>'DM','code'=>'1767'),
	'DO'=>array('name'=>'DOMINICAN REPUBLIC','c_code'=>'DO','code'=>'1809'),
	'DZ'=>array('name'=>'ALGERIA','c_code'=>'DZ','code'=>'213'),
	'EC'=>array('name'=>'ECUADOR','c_code'=>'EC','code'=>'593'),
	'EE'=>array('name'=>'ESTONIA','c_code'=>'EE','code'=>'372'),
	'EG'=>array('name'=>'EGYPT','c_code'=>'EG','code'=>'20'),
	'ER'=>array('name'=>'ERITREA','c_code'=>'ER','code'=>'291'),
	'ES'=>array('name'=>'SPAIN','c_code'=>'ES','code'=>'34'),
	'ET'=>array('name'=>'ETHIOPIA','c_code'=>'ET','code'=>'251'),
	'FI'=>array('name'=>'FINLAND','c_code'=>'FI','code'=>'358'),
	'FJ'=>array('name'=>'FIJI','c_code'=>'FJ','code'=>'679'),
	'FK'=>array('name'=>'FALKLAND ISLANDS (MALVINAS)','c_code'=>'FK','code'=>'500'),
	'FM'=>array('name'=>'MICRONESIA, FEDERATED STATES OF','c_code'=>'FM','code'=>'691'),
	'FO'=>array('name'=>'FAROE ISLANDS','c_code'=>'FO','code'=>'298'),
	'FR'=>array('name'=>'FRANCE','c_code'=>'FR','code'=>'33'),
	'GA'=>array('name'=>'GABON','c_code'=>'GA','code'=>'241'),
	'GB'=>array('name'=>'UNITED KINGDOM','c_code'=>'GB','code'=>'44'),
	'GD'=>array('name'=>'GRENADA','c_code'=>'GD','code'=>'1473'),
	'GE'=>array('name'=>'GEORGIA','c_code'=>'GE','code'=>'995'),
	'GH'=>array('name'=>'GHANA','c_code'=>'GH','code'=>'233'),
	'GI'=>array('name'=>'GIBRALTAR','c_code'=>'GI','code'=>'350'),
	'GL'=>array('name'=>'GREENLAND','c_code'=>'GL','code'=>'299'),
	'GM'=>array('name'=>'GAMBIA','c_code'=>'GM','code'=>'220'),
	'GN'=>array('name'=>'GUINEA','c_code'=>'GN','code'=>'224'),
	'GQ'=>array('name'=>'EQUATORIAL GUINEA','c_code'=>'GQ','code'=>'240'),
	'GR'=>array('name'=>'GREECE','c_code'=>'GR','code'=>'30'),
	'GT'=>array('name'=>'GUATEMALA','c_code'=>'GT','code'=>'502'),
	'GU'=>array('name'=>'GUAM','c_code'=>'GU','code'=>'1671'),
	'GW'=>array('name'=>'GUINEA-BISSAU','c_code'=>'GW','code'=>'245'),
	'GY'=>array('name'=>'GUYANA','c_code'=>'GY','code'=>'592'),
	'HK'=>array('name'=>'HONG KONG','c_code'=>'HK','code'=>'852'),
	'HN'=>array('name'=>'HONDURAS','c_code'=>'HN','code'=>'504'),
	'HR'=>array('name'=>'CROATIA','c_code'=>'HR','code'=>'385'),
	'HT'=>array('name'=>'HAITI','c_code'=>'HT','code'=>'509'),
	'HU'=>array('name'=>'HUNGARY','c_code'=>'HU','code'=>'36'),
	'ID'=>array('name'=>'INDONESIA','c_code'=>'ID','code'=>'62'),
	'IE'=>array('name'=>'IRELAND','c_code'=>'IE','code'=>'353'),
	'IL'=>array('name'=>'ISRAEL','c_code'=>'IL','code'=>'972'),
	'IM'=>array('name'=>'ISLE OF MAN','c_code'=>'IM','code'=>'44'),
	'IN'=>array('name'=>'INDIA','c_code'=>'IN','code'=>'91'),
	'IQ'=>array('name'=>'IRAQ','c_code'=>'IQ','code'=>'964'),
	'IR'=>array('name'=>'IRAN, ISLAMIC REPUBLIC OF','c_code'=>'IR','code'=>'98'),
	'IS'=>array('name'=>'ICELAND','c_code'=>'IS','code'=>'354'),
	'IT'=>array('name'=>'ITALY','c_code'=>'IT','code'=>'39'),
	'JM'=>array('name'=>'JAMAICA','c_code'=>'JM','code'=>'1876'),
	'JO'=>array('name'=>'JORDAN','c_code'=>'JO','code'=>'962'),
	'JP'=>array('name'=>'JAPAN','c_code'=>'JP','code'=>'81'),
	'KE'=>array('name'=>'KENYA','c_code'=>'KE','code'=>'254'),
	'KG'=>array('name'=>'KYRGYZSTAN','c_code'=>'KG','code'=>'996'),
	'KH'=>array('name'=>'CAMBODIA','c_code'=>'KH','code'=>'855'),
	'KI'=>array('name'=>'KIRIBATI','c_code'=>'KI','code'=>'686'),
	'KM'=>array('name'=>'COMOROS','c_code'=>'KM','code'=>'269'),
	'KN'=>array('name'=>'SAINT KITTS AND NEVIS','c_code'=>'KN','code'=>'1869'),
	'KP'=>array('name'=>'KOREA DEMOCRATIC PEOPLES REPUBLIC OF','c_code'=>'KP','code'=>'850'),
	'KR'=>array('name'=>'KOREA REPUBLIC OF','c_code'=>'KR','code'=>'82'),
	'KW'=>array('name'=>'KUWAIT','c_code'=>'KW','code'=>'965'),
	'KY'=>array('name'=>'CAYMAN ISLANDS','c_code'=>'KY','code'=>'1345'),
	'KZ'=>array('name'=>'KAZAKSTAN','c_code'=>'KZ','code'=>'7'),
	'LA'=>array('name'=>'LAO PEOPLES DEMOCRATIC REPUBLIC','c_code'=>'LA','code'=>'856'),
	'LB'=>array('name'=>'LEBANON','c_code'=>'LB','code'=>'961'),
	'LC'=>array('name'=>'SAINT LUCIA','c_code'=>'LC','code'=>'1758'),
	'LI'=>array('name'=>'LIECHTENSTEIN','c_code'=>'LI','code'=>'423'),
	'LK'=>array('name'=>'SRI LANKA','c_code'=>'LK','code'=>'94'),
	'LR'=>array('name'=>'LIBERIA','c_code'=>'LR','code'=>'231'),
	'LS'=>array('name'=>'LESOTHO','c_code'=>'LS','code'=>'266'),
	'LT'=>array('name'=>'LITHUANIA','c_code'=>'LT','code'=>'370'),
	'LU'=>array('name'=>'LUXEMBOURG','c_code'=>'LU','code'=>'352'),
	'LV'=>array('name'=>'LATVIA','c_code'=>'LV','code'=>'371'),
	'LY'=>array('name'=>'LIBYAN ARAB JAMAHIRIYA','c_code'=>'LY','code'=>'218'),
	'MA'=>array('name'=>'MOROCCO','c_code'=>'MA','code'=>'212'),
	'MC'=>array('name'=>'MONACO','c_code'=>'MC','code'=>'377'),
	'MD'=>array('name'=>'MOLDOVA, REPUBLIC OF','c_code'=>'MD','code'=>'373'),
	'ME'=>array('name'=>'MONTENEGRO','c_code'=>'ME','code'=>'382'),
	'MF'=>array('name'=>'SAINT MARTIN','c_code'=>'MF','code'=>'1599'),
	'MG'=>array('name'=>'MADAGASCAR','c_code'=>'MG','code'=>'261'),
	'MH'=>array('name'=>'MARSHALL ISLANDS','c_code'=>'MH','code'=>'692'),
	'MK'=>array('name'=>'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF','c_code'=>'MK','code'=>'389'),
	'ML'=>array('name'=>'MALI','c_code'=>'ML','code'=>'223'),
	'MM'=>array('name'=>'MYANMAR','c_code'=>'MM','code'=>'95'),
	'MN'=>array('name'=>'MONGOLIA','c_code'=>'MN','code'=>'976'),
	'MO'=>array('name'=>'MACAU','c_code'=>'MO','code'=>'853'),
	'MP'=>array('name'=>'NORTHERN MARIANA ISLANDS','c_code'=>'MP','code'=>'1670'),
	'MR'=>array('name'=>'MAURITANIA','c_code'=>'MR','code'=>'222'),
	'MS'=>array('name'=>'MONTSERRAT','c_code'=>'MS','code'=>'1664'),
	'MT'=>array('name'=>'MALTA','c_code'=>'MT','code'=>'356'),
	'MU'=>array('name'=>'MAURITIUS','c_code'=>'MU','code'=>'230'),
	'MV'=>array('name'=>'MALDIVES','c_code'=>'MV','code'=>'960'),
	'MW'=>array('name'=>'MALAWI','c_code'=>'MW','code'=>'265'),
	'MX'=>array('name'=>'MEXICO','c_code'=>'MX','code'=>'52'),
	'MY'=>array('name'=>'MALAYSIA','c_code'=>'MY','code'=>'60'),
	'MZ'=>array('name'=>'MOZAMBIQUE','c_code'=>'MZ','code'=>'258'),
	'NA'=>array('name'=>'NAMIBIA','c_code'=>'NA','code'=>'264'),
	'NC'=>array('name'=>'NEW CALEDONIA','c_code'=>'NC','code'=>'687'),
	'NE'=>array('name'=>'NIGER','c_code'=>'NE','code'=>'227'),
	'NG'=>array('name'=>'NIGERIA','c_code'=>'NG','code'=>'234'),
	'NI'=>array('name'=>'NICARAGUA','c_code'=>'NI','code'=>'505'),
	'NL'=>array('name'=>'NETHERLANDS','c_code'=>'NL','code'=>'31'),
	'NO'=>array('name'=>'NORWAY','c_code'=>'NO','code'=>'47'),
	'NP'=>array('name'=>'NEPAL','c_code'=>'NP','code'=>'977'),
	'NR'=>array('name'=>'NAURU','c_code'=>'NR','code'=>'674'),
	'NU'=>array('name'=>'NIUE','c_code'=>'NU','code'=>'683'),
	'NZ'=>array('name'=>'NEW ZEALAND','c_code'=>'NZ','code'=>'64'),
	'OM'=>array('name'=>'OMAN','c_code'=>'OM','code'=>'968'),
	'PA'=>array('name'=>'PANAMA','c_code'=>'PA','code'=>'507'),
	'PE'=>array('name'=>'PERU','c_code'=>'PE','code'=>'51'),
	'PF'=>array('name'=>'FRENCH POLYNESIA','c_code'=>'PF','code'=>'689'),
	'PG'=>array('name'=>'PAPUA NEW GUINEA','c_code'=>'PG','code'=>'675'),
	'PH'=>array('name'=>'PHILIPPINES','c_code'=>'PH','code'=>'63'),
	'PK'=>array('name'=>'PAKISTAN','c_code'=>'PK','code'=>'92'),
	'PL'=>array('name'=>'POLAND','c_code'=>'PL','code'=>'48'),
	'PM'=>array('name'=>'SAINT PIERRE AND MIQUELON','c_code'=>'PM','code'=>'508'),
	'PN'=>array('name'=>'PITCAIRN','c_code'=>'PN','code'=>'870'),
	'PR'=>array('name'=>'PUERTO RICO','c_code'=>'PR','code'=>'1'),
	'PT'=>array('name'=>'PORTUGAL','c_code'=>'PT','code'=>'351'),
	'PW'=>array('name'=>'PALAU','c_code'=>'PW','code'=>'680'),
	'PY'=>array('name'=>'PARAGUAY','c_code'=>'PY','code'=>'595'),
	'QA'=>array('name'=>'QATAR','c_code'=>'QA','code'=>'974'),
	'RO'=>array('name'=>'ROMANIA','c_code'=>'RO','code'=>'40'),
	'RS'=>array('name'=>'SERBIA','c_code'=>'RS','code'=>'381'),
	'RU'=>array('name'=>'RUSSIAN FEDERATION','c_code'=>'RU','code'=>'7'),
	'RW'=>array('name'=>'RWANDA','c_code'=>'RW','code'=>'250'),
	'SA'=>array('name'=>'SAUDI ARABIA','c_code'=>'SA','code'=>'966'),
	'SB'=>array('name'=>'SOLOMON ISLANDS','c_code'=>'SB','code'=>'677'),
	'SC'=>array('name'=>'SEYCHELLES','c_code'=>'SC','code'=>'248'),
	'SD'=>array('name'=>'SUDAN','c_code'=>'SD','code'=>'249'),
	'SE'=>array('name'=>'SWEDEN','c_code'=>'SE','code'=>'46'),
	'SG'=>array('name'=>'SINGAPORE','c_code'=>'SG','code'=>'65'),
	'SH'=>array('name'=>'SAINT HELENA','c_code'=>'SH','code'=>'290'),
	'SI'=>array('name'=>'SLOVENIA','c_code'=>'SI','code'=>'386'),
	'SK'=>array('name'=>'SLOVAKIA','c_code'=>'SK','code'=>'421'),
	'SL'=>array('name'=>'SIERRA LEONE','c_code'=>'SL','code'=>'232'),
	'SM'=>array('name'=>'SAN MARINO','c_code'=>'SM','code'=>'378'),
	'SN'=>array('name'=>'SENEGAL','c_code'=>'SN','code'=>'221'),
	'SO'=>array('name'=>'SOMALIA','c_code'=>'SO','code'=>'252'),
	'SR'=>array('name'=>'SURINAME','c_code'=>'SR','code'=>'597'),
	'ST'=>array('name'=>'SAO TOME AND PRINCIPE','c_code'=>'ST','code'=>'239'),
	'SV'=>array('name'=>'EL SALVADOR','c_code'=>'SV','code'=>'503'),
	'SY'=>array('name'=>'SYRIAN ARAB REPUBLIC','c_code'=>'SY','code'=>'963'),
	'SZ'=>array('name'=>'SWAZILAND','c_code'=>'SZ','code'=>'268'),
	'TC'=>array('name'=>'TURKS AND CAICOS ISLANDS','c_code'=>'TC','code'=>'1649'),
	'TD'=>array('name'=>'CHAD','c_code'=>'TD','code'=>'235'),
	'TG'=>array('name'=>'TOGO','c_code'=>'TG','code'=>'228'),
	'TH'=>array('name'=>'THAILAND','c_code'=>'TH','code'=>'66'),
	'TJ'=>array('name'=>'TAJIKISTAN','c_code'=>'TJ','code'=>'992'),
	'TK'=>array('name'=>'TOKELAU','c_code'=>'TK','code'=>'690'),
	'TL'=>array('name'=>'TIMOR-LESTE','c_code'=>'TL','code'=>'670'),
	'TM'=>array('name'=>'TURKMENISTAN','c_code'=>'TM','code'=>'993'),
	'TN'=>array('name'=>'TUNISIA','c_code'=>'TN','code'=>'216'),
	'TO'=>array('name'=>'TONGA','c_code'=>'TO','code'=>'676'),
	'TR'=>array('name'=>'TURKEY','c_code'=>'TR','code'=>'90'),
	'TT'=>array('name'=>'TRINIDAD AND TOBAGO','c_code'=>'TT','code'=>'1868'),
	'TV'=>array('name'=>'TUVALU','c_code'=>'TV','code'=>'688'),
	'TW'=>array('name'=>'TAIWAN, PROVINCE OF CHINA','c_code'=>'TW','code'=>'886'),
	'TZ'=>array('name'=>'TANZANIA, UNITED REPUBLIC OF','c_code'=>'TZ','code'=>'255'),
	'UA'=>array('name'=>'UKRAINE','c_code'=>'UA','code'=>'380'),
	'UG'=>array('name'=>'UGANDA','c_code'=>'UG','code'=>'256'),
	'US'=>array('name'=>'UNITED STATES','c_code'=>'US','code'=>'1'),
	'UY'=>array('name'=>'URUGUAY','c_code'=>'UY','code'=>'598'),
	'UZ'=>array('name'=>'UZBEKISTAN','c_code'=>'UZ','code'=>'998'),
	'VA'=>array('name'=>'HOLY SEE (VATICAN CITY STATE)','c_code'=>'VA','code'=>'39'),
	'VC'=>array('name'=>'SAINT VINCENT AND THE GRENADINES','c_code'=>'VC','code'=>'1784'),
	'VE'=>array('name'=>'VENEZUELA','c_code'=>'VE','code'=>'58'),
	'VG'=>array('name'=>'VIRGIN ISLANDS, BRITISH','c_code'=>'VG','code'=>'1284'),
	'VI'=>array('name'=>'VIRGIN ISLANDS, U.S.','c_code'=>'VI','code'=>'1340'),
	'VN'=>array('name'=>'VIET NAM','c_code'=>'VN','code'=>'84'),
	'VU'=>array('name'=>'VANUATU','c_code'=>'VU','code'=>'678'),
	'WF'=>array('name'=>'WALLIS AND FUTUNA','c_code'=>'WF','code'=>'681'),
	'WS'=>array('name'=>'SAMOA','c_code'=>'WS','code'=>'685'),
	'XK'=>array('name'=>'KOSOVO','c_code'=>'XK','code'=>'381'),
	'YE'=>array('name'=>'YEMEN','c_code'=>'YE','code'=>'967'),
	'YT'=>array('name'=>'MAYOTTE','c_code'=>'YT','code'=>'262'),
	'ZA'=>array('name'=>'SOUTH AFRICA','c_code'=>'ZA','code'=>'27'),
	'ZM'=>array('name'=>'ZAMBIA','c_code'=>'ZM','code'=>'260'),
	'ZW'=>array('name'=>'ZIMBABWE','c_code'=>'ZW','code'=>'263')
);
        $timezone = \DateTimeZone::listIdentifiers(\DateTimeZone::PER_COUNTRY,$ipdat->geoplugin_countryCode);
        date_default_timezone_set($timezone[0]); 
  
	}
 	public function error404()
 	{
 		
	 	$this->load->helper('cookie','url'); 
 	
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
			
		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		} 

		 $_SESSION['login_by_sohan']['login_by_sohan']=$_SESSION['login_by_sohan']['login_by_sohan'];
 		$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		log_message('error', 'Webpage not found');
		$data['title']=ucfirst('Welcome ::  Webpage not found');
		$this->load->view('error404', $data);
	 
 	}
 
	public function home()
	{	
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (isset($_COOKIE["login_by_sohan"])){
				redirect('pages/dashboard');						
		}
 
			if ($this->uri->segment(3)=='login') {

 				$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
				$this->form_validation->set_rules('loginid', 'Email', 'trim|required');
				$this->form_validation->set_rules('loginpassword', 'Password', 'required');
				if ($this->form_validation->run() == FALSE) {
					 
				} else {
					
					$this->db->select('*');
					$this->db->from('adminlogin');
					$where = array('adminusername' => md5($this->input->post('loginid')), 'adminpassword' => md5($this->input->post('loginpassword')));
					$this->db->where($where);
        			$query = $this->db->get();
        			$asd = $query->row();



        			$this->db->select('*');
					$this->db->from('tbl_members');		 
					$this->db->order_by('dum_id','ASC');
					$this->db->limit(1);
        			$qu = $this->db->get()->row();
        			if ($query->num_rows()>0) {
								$data = array(  
						            'login_ip'     => $this->input->user_agent(),  
						            'login_date'  => date('d/m/Y'),  
						            'login_time'   => date("h:i:s A")
						        );  
					$this->db->insert('admin_login_history',$data);
					$_SESSION['login_by_sohan']['login_by_sohan']=$qu->id;					
					$cookie= array(
							   'name'   => 'login_by_sohan',
							   'value'  => $this->input->post('loginid'),
							   'expire' => '7200',
					);
					$cookie_rol= array(
							   'name'   => 'login_rol',
							   'value'  => $asd->rol,
							   'expire' => '7200',
						);
 
					$this->input->set_cookie($cookie);
					$this->input->set_cookie($cookie_rol);	
                    $_SESSION['login_by_sohan']['login_by_sohan']=$this->input->post('loginid');
					
        			redirect("pages/dashboard/");
        			} else {

        				$data = array(  
						            'login_ip'     => $this->input->user_agent(),  
						            'login_attempt'  => 1,  
						            'login_attempt_time'   => date("h:i:s A")
						);  
						$this->db->insert('admin_login_history',$data);
						         			}  	 
				}
 				

	 		} 
		
		$data['title']=ucfirst('Welcome :: Admin');
		$this->load->view('home', $data);
		 
	}	


public function adminblogs(){
		$action =  $this->uri->segment(3);
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}	
 		if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}
	$this->db->select('*');
	$this->db->from('adminblogs');
	$data['result'] = $this->db->get();

			if ($action=='edit') {
				$this->db->select('*');
				$this->db->from('adminblogs');
				$where2 = array('bid' => $this->uri->segment(4));
				$this->db->where($where2);
        		$data['query'] = $this->db->get()->result();
			}
			if ($action=='update') {
				$config['upload_path']          = './../assets/blogs/';
		        $config['allowed_types']        = 'gif|jpg|png';
            	$config['max_size'] = 1024 * 8;
        		$config['encrypt_name'] = TRUE;
        		$this->load->library('upload', $config);
				if (! $this->upload->do_upload('gallery'))
                {
				$data['title']=ucfirst('Admin Panel banner');
				$datan = array('metdescription'=>  $this->input->post('metdescription'),'metkeywords'=>  $this->input->post('metkeywords'),'metatitle'=>  $this->input->post('metatitle'),'title'=>  $this->input->post('title'), 'postdate'=>date("d M, Y"), 'url'=>  $this->input->post('url'), 'addin'=>  $this->input->post('addin'));
				$where = array('bid' => $this->uri->segment(4));
				$this->db->where($where);
                $this ->db->update('adminblogs',$datan);
                redirect("pages/adminblogs/");  
            } else {
           		$urs=base_url().'./../assets/blogs/';
               	$data['title']=ucfirst('Admin Panel banner');
               	$x=$this->upload->data();   		
                $datan = array('metdescription'=>  $this->input->post('metdescription'),'metkeywords'=>  $this->input->post('metkeywords'),'metatitle'=>  $this->input->post('metatitle'),'image' => $x['file_name'], 'postdate'=>date("d M, Y"), 'title'=>  $this->input->post('title'), 'url'=>  $this->input->post('url'), 'addin'=>  $this->input->post('addin'));
				$where = array('bid' => $this->uri->segment(4));
				$this->db->where($where);
                $this ->db->update('adminblogs',$datan);
                redirect("pages/adminblogs/");  
            }
}
if ($action=='insert') {
	$config['upload_path']          = './../assets/blogs/';
	$config['allowed_types']        = 'gif|jpg|png';
   	$config['max_size'] = 1024 * 8;
	$config['encrypt_name'] = TRUE;
	$this->load->library('upload', $config);
	if (! $this->upload->do_upload('gallery'))
	{
		$error = array('error' => $this->upload->display_errors());    
		$data['title']=ucfirst('Welcome :: ');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $error);
		$this->load->view('adminblogs');
		$this->load->view('templates/footer');
	}
	else
	{

		//date("D M j G:i:s T Y");
		$urs=base_url().'./../assets/blogs/';
		$data['title']=ucfirst('Admin Panel banner');
		$x=$this->upload->data();   		
		$datan = array('metdescription'=>  $this->input->post('metdescription'),'metkeywords'=>  $this->input->post('metkeywords'),'metatitle'=>  $this->input->post('metatitle'), 'image' => $x['file_name'],'postdate'=>date("d M, Y"),'title'=>  $this->input->post('title'), 'url'=>  $this->input->post('url'), 'addin'=>  $this->input->post('addin'));
		$this ->db->insert('adminblogs',$datan);
		$this->session->set_flashdata('success', '<div class="alert alert-success">Blog save successfully</div>');
		redirect("pages/adminblogs/");  
	}
	} else {
		$data['title']=ucfirst('Welcome :: ');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('adminblogs');
		$this->load->view('templates/footer');
	}
}



public function adminblogslist(){
		$action =  $this->uri->segment(3);
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}	

 		if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}
		$this->db->select('*');
		$this->db->from('adminblogs');
		$data['result'] = $this->db->get();
		if ($action=='delete') {
			$this->db->select('*');
			$this->db->from('adminblogs');
			$where2 = array('bid' => $this->uri->segment(4));
			$this->db->where($where2);
	   		$query2 = $this->db->get();
	   		$deletepic=$query2->row();
	   				@unlink('../assets/blogs/'.$deletepic->image);
					$where = array('bid' => $this->uri->segment(4));
					$this->db->where($where);
					$this->db->delete('adminblogs');
				redirect("pages/adminblogslist/");
		}

		$data['title']=ucfirst('Welcome :: ');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('adminblogslist');
		$this->load->view('templates/footer');
}

 


public function manage_users()
{
	
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}

		if ($_COOKIE["login_rol"]==0) {
			redirect('pages/logout');
		}

		$this->db->select('*');
		$this->db->from('adminlogin');
		$this->db->where('rol',0);
		$this->db->order_by('id','DESC');
        $data['all_members'] = $this->db->get()->result();

        $this->db->select('*');
		$this->db->from('adminlogin');
		$this->db->order_by('id','DESC');
		$this->db->limit(1);
        $data['all_members2'] = $this->db->get()->row();


if ($this->uri->segment(3)=='update') {
				$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
				$this->form_validation->set_rules('collegecode', 'User Login Id', 'required');
				$this->form_validation->set_rules('mobleno', 'Mobile number', 'required');
				$this->form_validation->set_rules('name', 'name', 'required');
				$this->form_validation->set_rules('status', 'Status', 'required');
				if ($this->form_validation->run() == FALSE) {
					 
				} else {

						$config['upload_path']          = './../assets/setting/';
		                $config['allowed_types']        = 'jpg|png';
		            	$config['max_size'] = 1024 * 2;
		        		$config['encrypt_name'] = TRUE;
		        		$this->load->library('upload', $config);
		        		 if (!$this->upload->do_upload('profilepic'))
		                {
		                		if ($this->input->post('adminpassword')=='') {
	$data = array(  
						            'adminusername' => md5($this->input->post('collegecode')),
						            'name' => $this->input->post('name'),
						            'mobleno' => $this->input->post('mobleno'),
						            'status' => $this->input->post('status'),
						            'email' => $this->input->post('email'),
						             
						); 
} else {
	$data = array(  
						            'adminusername' => md5($this->input->post('collegecode')),
						            'adminpassword' => md5($this->input->post('adminpassword')),
						            'name' => $this->input->post('name'),
						            'mobleno' => $this->input->post('mobleno'),
						            'status' => $this->input->post('status'),
						            'email' => $this->input->post('email'),
						            'b_password' => $this->input->post('adminpassword')
						); 
}
		                		
					$this->db->where('collegecode', $this->input->post('collegecode')); 
					$this->db->update('adminlogin',$data);
					$this->session->set_flashdata('success', 'Update Successfully.');
					redirect('pages/manage_users');

		                } else {
		                		 
		                		$x=$this->upload->data();
		                		$profilepic = $x['file_name'];

if ($this->input->post('adminpassword')=='') {
	$data = array(  
						            'adminusername' => md5($this->input->post('collegecode')),
						            'name' => $this->input->post('name'),
						            'mobleno' => $this->input->post('mobleno'),
						            'status' => $this->input->post('status'),
						            'email' => $this->input->post('email'),
						            'profilepic' => $profilepic
						); 
} else {
	$data = array(  
						            'adminusername' => md5($this->input->post('collegecode')),
						            'adminpassword' => md5($this->input->post('adminpassword')),
						            'name' => $this->input->post('name'),
						            'mobleno' => $this->input->post('mobleno'),
						            'status' => $this->input->post('status'),
						            'email' => $this->input->post('email'),
						            'profilepic' => $profilepic,
						            'b_password' => $this->input->post('adminpassword')
						); 
}
		                		
					$this->db->where('collegecode', $this->input->post('collegecode')); 
					$this->db->update('adminlogin',$data);
					$this->session->set_flashdata('success', 'Update Successfully.');
					redirect('pages/manage_users');



		                }	
				}
}


        if ($this->uri->segment(3)=='insert') {
        	$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
				$this->form_validation->set_rules('collegecode', 'User Login Id', 'required');
				$this->form_validation->set_rules('mobleno', 'Mobile number', 'required');
				$this->form_validation->set_rules('name', 'name', 'required');
				$this->form_validation->set_rules('adminpassword', 'password', 'required');
				$this->form_validation->set_rules('status', 'Status', 'required');
				if ($this->form_validation->run() == FALSE) {
					 
				} else {
					

				$config['upload_path']          = './../assets/setting/';
                $config['allowed_types']        = 'jpg|png';
            	$config['max_size'] = 1024 * 2;
        		$config['encrypt_name'] = TRUE;
        		$this->load->library('upload', $config);
        		 if (!$this->upload->do_upload('profilepic'))
                {
                		$profilepic ='';

                } else {
                		 
                		$x=$this->upload->data();
                		$profilepic = $x['file_name'];

                }	



					$data = array(  
						            'adminusername' => md5($this->input->post('collegecode')),
						            'adminpassword' => md5($this->input->post('adminpassword')),
						            'rol' => 0,
						            'name' => $this->input->post('name'),
						            'mobleno' => $this->input->post('mobleno'),
						            'status' => $this->input->post('status'),
						            'collegecode' => $this->input->post('collegecode'),
						            'email' => $this->input->post('email'),
						            'profilepic' => $profilepic,
						            'b_password' => $this->input->post('adminpassword')
						);  
					$this->db->insert('adminlogin',$data);
					$this->session->set_flashdata('success', 'Save Successfully.');
					redirect('pages/manage_users');

				}
        }
		$data['title']=ucfirst('Welcome :: Admin');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('manage_users');
		$this->load->view('templates/footer');
}


public function order_update_status()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}

		$data = array(  
		   'track_status' => $this->uri->segment(4)
		);  
		$this->db->where('order_id', $this->uri->segment(3));
		$this->db->update('tbl_myorder',$data);
		$this->session->set_flashdata('success', 'Order Status Chnage To '.$this->uri->segment(4).' Successfully.');
		redirect('pages/'.$this->uri->segment(5));
}



public function getpagedata()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}
		$this->db->select('*');
        $this->db->from('tbl_pages');
        $s = array('pagid'=>$this->uri->segment(3));
        $this->db->where($s);
        $query=$this->db->get();

        if ($query->num_rows()>0) {
        	$x = $query->row();
			echo $x->pagecontent;
        } else {
        	echo 'No Data Set';
        }



}

	public function help_desk()
	{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}

			if ($this->uri->segment(3)=='reply') {
				$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
				$this->form_validation->set_rules('rplymsg', 'Messages', 'required');
				if ($this->form_validation->run() == FALSE) {
					 
				} else {
					$replyto = $this->input->post('replyto');
					$rplymsg = $this->input->post('rplymsg');
					$data = array(  
						            'admin_reply' => $this->input->post('rplymsg'),
						             'recti_by' => $_COOKIE["login_by_sohan"]
						);  
					$this->db->where('id', $replyto);
					$this->db->update('tbl_help_desks',$data);
					$this->session->set_flashdata('success', 'Reply Save Successfully.');
					redirect('pages/help_desk');

				}
			}


			if ($this->uri->segment(3)=='open') {
					$this->db->select('*');
					$this->db->from('tbl_help_desks');
					$this->db->where('admin_reply','');
					$this->db->order_by('id','DESC');
        			$data['help_desks'] = $this->db->get();
			} else if ($this->uri->segment(3)=='closed') {
					$this->db->select('*');
					$this->db->from('tbl_help_desks');
					$this->db->where('admin_reply!=','');
					$this->db->order_by('id','DESC');
        			$data['help_desks'] = $this->db->get();
			} else {
					$this->db->select('*');
					$this->db->from('tbl_help_desks');
					$this->db->order_by('id','DESC');
        			$data['help_desks'] = $this->db->get();
			}
					

		$data['title']=ucfirst('Welcome :: ');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('help_desk');
		$this->load->view('templates/footer');

	}
 
public function online_orders()
{
	
	$this->load->helper('cookie','url'); 
	$this->load->library('form_validation');
	$this->load->library('session');
	$this->load->helper('email');
	if (!isset($_COOKIE["login_by_sohan"])){
		redirect('pages/logout');					
	}
	if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
		redirect('pages/logout');						
	}
	$payment_mode=2;
	$this->db->select('*');
    $this->db->from('tbl_orders');
    $this->db->order_by('id','DESC');
    $set = $this->db->get();
    $data['my_myorder'] = $set;

    $data['title']=ucfirst('');
	$this->load->view('templates/header', $data);
	$this->load->view('templates/sidebar');
	$this->load->view('myorderes');
	$this->load->view('templates/footer');
}

	public function payment_details()
	{
		
		$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
			redirect('pages/logout');					
		}
		if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
			redirect('pages/logout');						
		}
		$data['error']='';
		$payment_mode=2;
		$this->db->select('*');
	    $this->db->from('tbl_orders');
	    $this->db->where('order_id',$this->uri->segment(3));
	    $this->db->order_by('id','DESC');
	    $set = $this->db->get();
	    $data['my_myorder'] = $set;

	    		if($this->uri->segment(4)=='request'){
	    				$this->form_validation->set_rules('assignment_title', 'Title', 'required');
						if ($this->form_validation->run() == FALSE) {
							 
						} else {
$config['upload_path'] = './../assets/';
$config['allowed_types'] = 'jpg|png|pdf|PDF|doc|docx|pptx|PPTX|PNG|xls|xlsx|XLS|XLSX|JPG|JPEG|jpeg';
$config['encrypt_name'] = FALSE;
$this->load->library('upload', $config);
			        		 if (!$this->upload->do_upload('assignment_file'))
			                {
			                	$x = array('error' => $this->upload->display_errors());  
			                	$data['error']=$x['error'];
			                } else {
			                		
/*
if ($this->input->post('pay_restamount')==0) {
	$x=$this->upload->data();
	$assignment_file = $x['file_name'];
	$data = array( 
		'assignment_title'=>$this->input->post('assignment_title'),
		'orderid' => $this->uri->segment(3),
		'content' => $this->input->post('content'),
		'assignment_file' => $assignment_file,
	);  
	$replyto=1;
	$this->db->where('orderid', $this->uri->segment(3));
	$this->db->update('order_payment',$data);*/
//} else {
	$x=$this->upload->data();
	$assignment_file = $x['file_name'];
	$data = array( 
		'pay_total'=>$this->input->post('pay_total'),
		'status'=>1,
		'pay_advahnce'=>$this->input->post('pay_advahnce'),
		'pay_restamount'=>$this->input->post('pay_restamount'),
		'assignment_title'=>$this->input->post('assignment_title'),
		'orderid' => $this->uri->segment(3),
		'content' => $this->input->post('content'),
		'assignment_file' => $assignment_file,
	);  
	$replyto=1;
	//$this->db->where('orderid', $this->uri->segment(3));
	$this->db->insert('order_payment',$data);
//}


			                		
									$this->session->set_flashdata('success', 'project uploaded Successfully.');
									redirect('pages/payment_details/'.$this->uri->segment(3));

			                }	
						}
	    		}

	    $data['title']=ucfirst('');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('payment_details');
		$this->load->view('templates/footer');
	}



public function myorderes()
{
	
	$this->load->helper('cookie','url'); 
	$this->load->library('form_validation');
	$this->load->library('session');
	$this->load->helper('email');
	if (!isset($_COOKIE["login_by_sohan"])){
		redirect('pages/logout');					
	}
	if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
		redirect('pages/logout');						
	}

	if ($this->uri->segment(3)=='decline') {
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
				$this->form_validation->set_rules('declinereson', 'Decline Reason', 'required');
				$this->form_validation->set_rules('orderid', 'All', 'required');
				if ($this->form_validation->run() == FALSE) {
					 
				} else {
					$order_status=3; 
					$data = array( 
					 	'order_status'=>$order_status,
						'declinereson' => $this->input->post('declinereson'),
						'userid' => $_COOKIE["login_by_sohan"]
					);  
					$replyto=1;
					$this->db->where('order_id', $this->input->post('orderid'));
					$this->db->update('tbl_myorder',$data);
					$this->session->set_flashdata('success', 'Update Successfully.');
					redirect($this->input->post('lasturl'));

				}
	}

}
 

public function offline_orders()
{
	
	$this->load->helper('cookie','url'); 
	$this->load->library('form_validation');
	$this->load->library('session');
	$this->load->helper('email');
	if (!isset($_COOKIE["login_by_sohan"])){
		redirect('pages/logout');					
	}
	if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
		redirect('pages/logout');						
	}


	if ($this->uri->segment(3)=='status') {
		$data = array(  
			'cstatus' => $this->input->post('cstatus')
			); 
		$this->db->where('order_id', $this->uri->segment(4)); 
		$this->db->update('tbl_myorder',$data);
		$this->session->set_flashdata('success', 'Update Successfully.');
		redirect('pages/'.$this->input->post('loc'));


	}
	$payment_mode=1;
	$this->db->select('*');
    $this->db->from('tbl_myorder');
    $this->db->where('payment_mode', $payment_mode);
    $this->db->order_by('dum_id','DESC');
    $set = $this->db->get();
    $data['my_myorder'] = $set;

    $data['title']=ucfirst('Welcome :: Natural Life Offline Orders');
	$this->load->view('templates/header', $data);
	$this->load->view('templates/sidebar');
	$this->load->view('myorderes');
	$this->load->view('templates/footer');
}

public function order_excel()
{
	
	$this->load->helper('cookie','url'); 
	$this->load->library('form_validation');
	$this->load->library('session');
	$this->load->helper('email');
	if (!isset($_COOKIE["login_by_sohan"])){
		redirect('pages/logout');					
	}
	if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
		redirect('pages/logout');						
	}

	if ($this->uri->segment(3)=='offline') {
		$payment_mode=1;
		$this->db->select('*');
	    $this->db->from('tbl_myorder');
	    $this->db->where('payment_mode', $payment_mode);
	    $this->db->order_by('dum_id','DESC');
	    $set = $this->db->get();
	    $data['my_myorder'] = $set;
	} else {
		$payment_mode=2;
		$this->db->select('*');
	    $this->db->from('tbl_myorder');
	    $this->db->where('payment_mode', $payment_mode);
	    $this->db->order_by('dum_id','DESC');
	    $set = $this->db->get();
	    $data['my_myorder'] = $set;
	}
	
 
	 
	$this->load->view('order_excel', $data);
	 
}
public function getRecors()
	{
	 
		if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}

		$this->db->select('*');
        $this->db->from('tbl_members');
        $s = array('id'=>$this->input->post('id'));
        $this->db->where($s);
        $query=$this->db->get();
 		

 		


		if($query->num_rows()>0){ 
		$rest=$query->row();

		$this->db->select('*');
        $this->db->from('tbl_packages');
        $s2 = array('id'=>$rest->package_id);
        $this->db->where($s2);
        $qpack=$this->db->get()->row();
		if($rest->position==0){ $post =  'Left'; } else { $post =  'Right'; }
		echo "<table class='table table-responsive'>
				
				
				<tr>
					<td colspan='2'><img style='width:120px;' src='../../member/uploads/profilepic/thumb/".$rest->profilepic."' /></td>
					 
					<td colspan='2'>

						<table  class='table table-responsive'>
							<tr>
								<td><strong>Sponsor Id </strong></td>
								<td>: $rest->sponsor_id</td>
							</tr>
							<tr>
								<td><strong>Wallet Balance </strong></td>
								<td>: $rest->wallet</td>
							</tr>
							<tr>    
								<td><strong>Package Details </strong></td>
								<td>: $qpack->package_activation_name / <i class='fa fa-inr'></i> $qpack->package_activation_amount</td>
							</tr>
						</table>
					</td>
					
				</tr>
				
				
				<tr>
					<td><strong>Name </strong></td>
					<td>: $rest->name</td>
					<td><strong>Email</strong></td>
					<td>: $rest->email</td>
				</tr>
				
				<tr>			
				<td><strong>Mobile </strong></td>
					<td>: $rest->mobile</td>
					<td><strong>Position</strong></td>
					<td>: $post</td>
				</tr>
				
				
		</table>";
		
		} else {
			
			echo "<table class='table table-responsive'>
				
				
				<tr>
					 
					<td>No Downline Found</td>
				</tr>
				
			 
				
				
		</table>";
			
		}
	}

public function getwalletedetaisl()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}

		$this->db->select('*');
        $this->db->from('tbl_members');
        $s = array('id'=>$this->input->post('id'));
        $this->db->where($s);
        $query=$this->db->get();

        	$this->db->select('*');
			$this->db->from('tbl_income_reports');
			$this->db->where('income_to', $this->input->post('id'));
        	$inco_vali = $this->db->get();
        	$wall_first=0.00;
        	if ($inco_vali->num_rows()>0) {
        		echo "<table class='table table-responsive'>
        				
        		<thead>
	       				<tr  style='background: #017901;
    color: #fff;'>
	       					<th style='background: #017901;
    color: #fff;'>Income By</th>
	       					<th style='background: #017901;
    color: #fff;'> Mode</th>
	       					<th style='background: #017901;
    color: #fff;'> Amount</th>
	       					<th style='background: #017901;
    color: #fff;'> Date</th>
	       					<th style='background: #017901;
    color: #fff;'>Order ID</th>
	       				</tr>

	       		</thead>";
        	
						echo "<tr>
							       					<td colspan='5'><strong>Income Details</strong></td>
							       				</tr>";
							      $total=0.00;
        		foreach ($inco_vali->result() as $wall_data) {
        			$wall_first=$wall_first+$wall_data->amount;
        			 $total= $total+$wall_data->amount;
        			echo "<tr>
        					<td>$wall_data->income_by</td>
	       					<td>$wall_data->income_mode</td>
	       					<td><i class='fa fa-inr'></i> $wall_data->amount</td>
	       					<td>$wall_data->create_date</td>
	       					<td>$wall_data->order_id </td>
        			</tr>";
        		}	

        		echo "<tr style='background: #017901;
    color: #fff;'>
        					<td colspan='2'> Total Income</td>
        					<td colspan='3'> <i class='fa fa-inr'></i>  $total</td>
        		</tr>";
        		echo "</table>";
        	}  

        	$this->db->select('*');
			$this->db->from('tbl_widthdraws');
			$this->db->where('requested_by', $this->input->post('id'));
			$this->db->where('status',1);
        	$inco_vali2 = $this->db->get();
        	$wall_first2=0.00;
        	if ($inco_vali2->num_rows()>0) {

        		echo "<table class='table table-responsive'>
        				
        		<thead>
	       				<tr style='background: #ef8e00;
    color: #fff;'>
	       					 
	       					<th style='background: #ef8e00;
    color: #fff;'> User Remark</th>
	       					<th style='background: #ef8e00;
    color: #fff;'> Amount</th>
	       					<th style='background: #ef8e00;
    color: #fff;'> Date</th>
	       					 
	       				</tr>

	       		</thead>";
        	
						echo "<tr>
							       					<td colspan='3'><strong>Withdrawal Datils</strong></td>
							       				</tr>";


$total2 =0.00;
        		foreach ($inco_vali2->result() as $wall_data2) {
        			$wall_first2=$wall_first2+$wall_data2->amount;
        				$total2=$total2+$wall_data2->amount;
        			echo "<tr>
        					<td>$wall_data2->remarks</td>
	       					<td><i class='fa fa-inr'></i> $wall_data2->amount</td>
	       					<td>$wall_data2->create_date</td>
	       			 
        			</tr>";
        		}

        		echo "<tr style='background: #ef8e00;
    color: #fff;'>
        					<td colspan=''> Total Withdrawal</td>
        					<td colspan='2'>  <i class='fa fa-inr'></i> $total2</td>
        		</tr>";
        		echo "</table>";
        	}  

$f_wallete=$wall_first-$wall_first2;

	echo "<table class='table table-responsive'>
				<tr  style='background: #017901;
    color: #fff;'>
					<td><strong>Wallet Balance : <i class='fa fa-inr'></i> $f_wallete</strong></td>
				</tr>
	</table>";
}

public function getProdile()
	{
	 
		if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}

		$this->db->select('*');
        $this->db->from('tbl_members');
        $s = array('id'=>$this->input->post('id'));
        $this->db->where($s);
        $query=$this->db->get();
 		

 		


		if($query->num_rows()>0){ 
		$rest=$query->row();

		 

        $this->db->select('*');
        $this->db->from('tbl_kycs');
        $skyc = array('id'=>$this->input->post('id'));
        $this->db->where($skyc);
        $canterkyc=$this->db->get();
        $cankyc=$canterkyc->row();

 

if($rest->status==1){ $status='Active'; }  else { $status='inActive';}
if($rest->position==0){ $post =  'Left'; } else { $post =  'Right'; }
		if($rest->gender==0){ $gender =  'Female'; } else { $gender =  'Male'; }

	 
		$this->db->select('*');
        $this->db->from('tbl_payments');
        $s234 = array('id'=>$rest->payment_id);
        $this->db->where($s234);
        $payment=$this->db->get();
        $paymentrow = $payment->row();

        $this->db->select('*');
        $this->db->from('tbl_bank_details');
        $s234b = array('id'=>$this->input->post('id'));
        $this->db->where($s234b);
        $bank=$this->db->get();
        $bank_row = $bank->row();


		$this->db->select('*');
        $this->db->from('tbl_income_reports');
        $this->db->order_by('id','DESC');
		$s = array('income_to' =>$rest->id);
		$this->db->where($s);
		$all_income=$this->db->get();
		
		
	            	$dr=0.00;
                    $cr=0.00;
                    $cty=1;
                    $total=0.00;
                    foreach($all_income->result() as $orderlist){
                        if ($orderlist->payment_dr_cr=='cr') {
                            $cr=$cr+$orderlist->amount;
                        } else {
                            $dr=$dr+$orderlist->amount;
                        }
                    }
		$total=$cr-$dr;

		/*	$this->db->select('*');
			$this->db->from('tbl_income_reports');
			$this->db->where('income_to', $this->input->post('id'));
        	$inco_vali = $this->db->get();
        	$wall_first=0.00;
        	if ($inco_vali->num_rows()>0) {
        		foreach ($inco_vali->result() as $wall_data) {
        			$wall_first=$wall_first+$wall_data->amount;
        		}
        	}  */

        	$this->db->select('*');
			$this->db->from('tbl_widthdraws');
			$this->db->where('requested_by', $this->input->post('id'));
			$this->db->where('status',1);
        	$inco_vali2 = $this->db->get();
        	$wall_first2=0.00;
        	if ($inco_vali2->num_rows()>0) {
        		foreach ($inco_vali2->result() as $wall_data2) {
        			$wall_first2=$wall_first2+$wall_data2->amount;
        		}
        	}  

//$f_wallete=$wall_first-$wall_first2;
		echo "<table class='table table-responsive'>
				
				
				<tr>
				
					 
					<td colspan='4'>

						<table  class='table table-responsive'>
							<tr>
								<td><strong>User ID </strong></td>
								<td>: $rest->id</td>
							</tr>
							<tr>
								<td><strong>Wallet Balance </strong></td>
								<td>: $".$total."</td>
							</tr>
						 
							 
						</table>
					</td>
					
				</tr>
				
				
				<tr>
					<td><strong>Name </strong></td>
					<td>: $rest->name</td>
					<td><strong>Email</strong></td>
					<td>: $rest->email</td>
				</tr>
				
				<tr>			
				<td><strong>Mobile </strong></td>
					<td>:$rest->mobile</td>
					 			
				<td><strong>Gender </strong></td>
					<td>: </td>
					 
				</tr>
 
				
		</table>";
		
		} else {
			
			echo "<table class='table table-responsive'>
				
				
				<tr>
					 
					<td>Not Found</td>
				</tr>
				
			 
				
				
		</table>";
			
		}
	}


public function kyc_dec_act()
{
	if ($this->uri->segment(3)=='delete') {
		
					$data = array(  
						            'aadhar_card_front' => 'default_aadhar_card_front.png',
						            'aadhar_card_front_status' => 0,
						            'aadhar_card_back' => 'default_aadhar_card_back.png',
						            'aadhar_card_back_status' => 0,
						            'pancard' => 'default_pancard.png',
						            'pancard_status' => 0,
						            'final_submit'=>0
					);  
					$replyto=1;
					$this->db->where('id', $this->uri->segment(4));
					$this->db->update('tbl_kycs',$data);
					$this->session->set_flashdata('success', 'Record Update Successfully.');


	echo "<script>
			window.history.back();
	</script>";

	}


	if ($this->uri->segment(3)=='activate') {

			$data = array(  
				'aadhar_card_front_status' => 1,
				'aadhar_card_back_status' => 1,
				'pancard_status' => 1,
				'final_submit'=>2,
				'activate_date'=>date('d-m-Y')
			); 
				$this->db->where('id',$this->uri->segment(4));
				$this->db->update('tbl_kycs',$data);
				$this->session->set_flashdata('success', 'Record Update Successfully.');


	echo "<script>
			window.history.back();
	</script>";
 
	}


}

public function member_excel()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}

		$data['title']=ucfirst('');
	if ($this->uri->segment(3)=='all') {
		$this->db->select('*');
		$this->db->from('tbl_members');
		$data['all_members'] = $this->db->get()->result();
	} else if ($this->uri->segment(3)=='active') {
			$this->db->select('*');
			$this->db->from('tbl_members');
			$this->db->where('status',1);
			$data['all_members'] = $this->db->get()->result();
	} else {
			$this->db->select('*');
			$this->db->from('tbl_members');
			$this->db->where('status',0);
			$data['all_members'] = $this->db->get()->result();
	} 
		$this->load->view('member_excel',$data);
 


}


public function kyc_excel()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}

		$data['title']=ucfirst('');
	if ($this->uri->segment(3)=='all') {
		$this->db->select('*');
		$this->db->from('tbl_kycs');
		$data['all_kyc'] = $this->db->get()->result();
	} else if ($this->uri->segment(3)=='active') {
			$this->db->select('*');
			$this->db->from('tbl_kycs');
			$this->db->where('final_submit',2);
			$data['all_kyc'] = $this->db->get()->result();
	} else {
			$this->db->select('*');
			$this->db->from('tbl_kycs');
			$this->db->where('final_submit',1);
			$data['all_kyc'] = $this->db->get()->result();
	} 
		$this->load->view('kyc_excel',$data);
 


}




public function email_settings()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}
		$replyt=1;
$this->db->select('*');
$this->db->from('tbl_email_setting');
$this->db->where('id', $replyt);
$data['email_setting'] = $this->db->get()->row();;




if($this->uri->segment(3)=='save'){
				$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
				$this->form_validation->set_rules('host', 'Host Name', 'required');
				$this->form_validation->set_rules('port', 'Port', 'required');
				$this->form_validation->set_rules('username', 'User Name', 'required');
				$this->form_validation->set_rules('password', 'Password', 'required');
				if ($this->form_validation->run() == FALSE) {
					 
				} else {
					 
					$data = array(  
						            'host' => $this->input->post('host'),
						            'port' => $this->input->post('port'),
						            'username' => $this->input->post('username'),
						            'password' => $this->input->post('password')
						);  
					$replyto=1;
					$this->db->where('id', $replyto);
					$this->db->update('tbl_email_setting',$data);
					$this->session->set_flashdata('success', 'Record Update Successfully.');
					redirect('pages/email_settings');

				}
}

		$data['title']=ucfirst('Welcome :: ');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('email_settings');
		$this->load->view('templates/footer');


}

public function withdrawal_requests($value='')
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}

		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}

		$this->db->select('*');
		$this->db->from('tbl_widthdraws');
		$this->db->where('status=0');
		$this->db->order_by('id','DESC');
		$data['req_width'] = $this->db->get();
		

		if ($this->uri->segment(3)=='confirm') {
				$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
				$this->form_validation->set_rules('transection_id', 'Transaction Id ', 'required');
				$this->form_validation->set_rules('transection_date', 'Transaction Date', 'required');
				$this->form_validation->set_rules('id', 'Id', 'required');
				if ($this->form_validation->run() == FALSE) {
					 
				} else {
					 

				$config['upload_path']          = './../assets/';
                $config['allowed_types']        = 'gif|jpg|png|pdf';
            	$config['max_size'] = 1024 * 8;
        		$config['encrypt_name'] = TRUE;
        		$this->load->library('upload', $config);
        		 if (!$this->upload->do_upload('transection_slip'))
                {
                		$transection_slip ='';

                } else {
                		
                		$x=$this->upload->data();
                		$transection_slip = $x['file_name'];

                }	


					$data = array(  
						'status' => 1,
						'pay_by' => $_COOKIE["login_by_sohan"],
						'transection_date' => $this->input->post('transection_date'),
						'transection_id' => $this->input->post('transection_id'),
						'other_remark' => $this->input->post('other_remark'),
						'transection_slip' => $transection_slip
					);  
				 
					$this->db->where('id', $this->input->post('id'));
					$this->db->update('tbl_widthdraws',$data);
					$this->session->set_flashdata('final_success', 'Update Successfully.');
					redirect('pages/withdrawal_requests');

				}

		}	           

		$data['title']=ucfirst('Welcome :: Natural Life');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('withdrawal_requests');
		$this->load->view('templates/footer');

}

public function neft_bank_detail()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}

		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}
			$this->db->select('*');
			$this->db->from('tbl_neft_bank_details');
			$this->db->where('dum_id', 1);
			$data['sms_setting'] = $this->db->get()->row();

if ($this->uri->segment(3)=='save') {

$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
$this->form_validation->set_rules('bankname', 'Bank Name', 'required');
$this->form_validation->set_rules('accounthodername', 'Account Holder Name', 'required');
$this->form_validation->set_rules('ifsccode', 'IFSC Code', 'required');
$this->form_validation->set_rules('branchname', 'Branch Name', 'required');
$this->form_validation->set_rules('accountnumber', 'Account Number', 'required');

				if ($this->form_validation->run() == FALSE) {
					 
				} else {
					 
			 

	$data = array(  
		'bankname' => $this->input->post('bankname'),
		'accounthodername' => $this->input->post('accounthodername'),
		'ifsccode' => $this->input->post('ifsccode'),
		'branchname' => $this->input->post('branchname'),
		'accountnumber' => $this->input->post('accountnumber')
);  
					$replyto=1;
					$this->db->where('dum_id', $replyto);
					$this->db->update('tbl_neft_bank_details',$data);
					$this->session->set_flashdata('success', 'Record Update Successfully.');
					redirect('pages/neft_bank_detail');
}

}

		$data['title']=ucfirst('');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('neft_bank_detail');
		$this->load->view('templates/footer');
}


public function getPayWisth()
{
	
	$this->db->select('*');
	$this->db->from('tbl_widthdraws');
	$this->db->where('id', $this->input->post('id'));
	$dreq_width = $this->db->get()->row();


if ($dreq_width->status==1) {
	$status= 'readonly';
} else {
	$status= '';
}
echo "<form action='".base_url()."pages/withdrawal_requests/confirm' method='post' enctype='multipart/form-data'>";
	echo "<table class='table table-responsive'>";
			echo "<tr>
					<td>

						<input type='hidden' value='$dreq_width->id' name='id' readonly />
						<label class='col-sm-12'>Request Amount</label> 
						<input type='text' name='amount' value='$dreq_width->amount' readonly class='form-control' />
					</td>
					<td>
						<label class='col-sm-12'>Request Date</label> 
						<input type='text' name='create_date' value='$dreq_width->create_date' readonly class='form-control' />
					</td>
			</tr>";
			echo "<tr>
					<td colspan='2'>
						<label>Remark</label>
						<textarea name='remarks' readonly class='form-control'>$dreq_width->remarks</textarea>
					</td>
			</tr>";


			echo "<tr>
					<td>
						<label class='col-sm-12'>Transaction Id / Bank Ref. No.</label> 
						<input type='text' name='transection_id'  $status value='$dreq_width->transection_id'  class='form-control' />
					</td>
					<td>
						<label class='col-sm-12'>Transaction Date</label> 
						<input type='text' name='transection_date' value='$dreq_width->transection_date'  $status  class='form-control' />
					</td>
			</tr>";
			if($dreq_width->status==0){


			echo "<tr>
					<td colspan='2'>
						<label class='col-sm-12'>Transaction Slip</label> 
						<input type='file' name='transection_slip' value='$dreq_width->transection_slip'  class='form-control' />
					</td>
					 
			</tr>";

		}  else {

			if ($dreq_width->transection_slip!='') {
				echo "<tr><td colspan='2'>";
				echo "<iframe src='".base_url()."../assets/$dreq_width->transection_slip' style='width:100%; height:400px;' frameborder='0'></iframe>";
				echo "</td></tr>";
			}
		}

			echo "<tr>
					<td colspan='2'>
						<label>Your Remark</label>
						<textarea name='other_remark' $status  class='form-control'>$dreq_width->other_remark</textarea>
					</td>
			</tr>";



if($dreq_width->status==0){
			echo "<tr>
				<td colspan='2'>
					<input type='submit' name='submit' value='Save' class='btn btn-success form-control' />
 				</td>
			</tr>";

} else {
			echo "<tr>
				<td colspan='2'>
					

				<input type='button' value='Already Paid!' class='btn btn-danger form-control' />
 				</td>
			</tr>";	
}
	echo "</table>";
	echo '</form>';
}



public function member_wallet_balance()
{
	
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}

		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}


if ($this->uri->segment(3)=='confirm') {
	$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
				$this->form_validation->set_rules('amount', 'Amoun', 'required');
				$this->form_validation->set_rules('maxamount', 'Maximum Amoun', 'required');
				$this->form_validation->set_rules('userid', 'User ID', 'required');
				$this->form_validation->set_rules('transection_id', 'Transection ID', 'required');
				$this->form_validation->set_rules('transection_date', 'Transection Date', 'required');
				
				if ($this->form_validation->run() == FALSE) {
					 
				} else {
//maxamount
                    if($this->input->post('amount')>$this->input->post('maxamount')){
                       	$this->session->set_flashdata('success', 'Amount must be less than or equal to your current wallet amount.');
					        redirect('pages/member_wallet_balance'); 
                    } else {

				$config['upload_path']          = './../assets/';
                $config['allowed_types']        = 'gif|jpg|png';
            	$config['max_size'] = 1024 * 8;
        		$config['encrypt_name'] = TRUE;
        		$this->load->library('upload', $config);
        		 if (!$this->upload->do_upload('company_logo'))
                {
                		$transection_slip ='';

                } else {		
                		$x=$this->upload->data();
                		$transection_slip = $x['file_name'];

                }

                $data = array(  
						            'requested_by' => $this->input->post('userid'),
						            'amount' => $this->input->post('amount'),
						            'remarks' => $this->input->post('remarks'),
						            'status' => 1,
						            'create_date' => $this->input->post('create_date'),
						            'pay_by' => $_SESSION['login_by_sohan']['login_by_sohan'],
						            'transection_date' => $this->input->post('transection_date'),
						            'transection_id' => $this->input->post('transection_id'),
						            'other_remark' => $this->input->post('other_remark'),
						            'transection_slip' => $transection_slip
				);  
					
				
					$this->db->insert('tbl_widthdraws',$data);
					$this->session->set_flashdata('success', 'Payment submit Successfully.');
					redirect('pages/member_wallet_balance');

				
				    
				    
                    }
				    
				    
				    
				    
				}
}

		$this->db->select('*');
		$this->db->from('tbl_members');
		$this->db->order_by('dum_id','DESC');
		$data['all_members'] = $this->db->get();


		$data['title']=ucfirst('Welcome :: Natural Life');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('member_wallet_balance');
		$this->load->view('templates/footer');



}

public function sms_settings()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}

		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}

				$replyt=1;
				$this->db->select('*');
				$this->db->from('tbl_sms_setting');
				$this->db->where('id', $replyt);
				$data['sms_setting'] = $this->db->get()->row();;

if($this->uri->segment(3)=='save'){
				$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
				$this->form_validation->set_rules('apilink', 'Applink', 'required');
				$this->form_validation->set_rules('username', 'User Name', 'required');
				$this->form_validation->set_rules('headingusername', 'Heading User Name', 'required');
				$this->form_validation->set_rules('headingmobile', 'Heading Mobile Number', 'required');
				//$this->form_validation->set_rules('posttype', 'Host Name', 'required');
				$this->form_validation->set_rules('senderid', 'Sender id', 'required');
				$this->form_validation->set_rules('password', 'Password', 'required');
				$this->form_validation->set_rules('headingpassword', 'Heading Password', 'required');
				$this->form_validation->set_rules('headingmsg', 'Heading Message', 'required');
				$this->form_validation->set_rules('othersmsdetail', 'Others', 'required');
				$this->form_validation->set_rules('headingsenderid', 'Heading Sender Id', 'required');
				if ($this->form_validation->run() == FALSE) {
					 
				} else {
					 
					$data = array(  
						            'apilink' => $this->input->post('apilink'),
						            'username' => $this->input->post('username'),
						            'headingusername' => $this->input->post('headingusername'),
						            'headingmobile' => $this->input->post('headingmobile'),
						            'senderid' => $this->input->post('senderid'),
						            'password' => $this->input->post('password'),
						            'headingpassword' => $this->input->post('headingpassword'),
						            'headingmsg' => $this->input->post('headingmsg'),
						            'othersmsdetail' => $this->input->post('othersmsdetail'),
						            'headingsenderid' => $this->input->post('headingsenderid')
						);  
					$replyto=1;
					$this->db->where('id', $replyto);
					$this->db->update('tbl_sms_setting',$data);
					$this->session->set_flashdata('success', 'Record Update Successfully.');
					redirect('pages/sms_settings');

				}
}

		$data['title']=ucfirst('Welcome :: ');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('sms_setting');
		$this->load->view('templates/footer');


}





public function send_emails()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}

		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}
		$replyt=1;
$this->db->select('*');
$this->db->from('tbl_email_setting');
$this->db->where('id', $replyt);
$data['email_setting'] = $this->db->get()->row();;




if($this->uri->segment(3)=='send'){
				$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
				$this->form_validation->set_rules('any_email', 'Email', 'required');
				$this->form_validation->set_rules('subject', 'Subject', 'required');
				$this->form_validation->set_rules('message', 'Message', 'required');
				 
				if ($this->form_validation->run() == FALSE) {
					 
				} else {
					 
		$from_email = "info@wssinfotech.com";
        $to_email = $this->input->post('any_email');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

        $this->load->library('email');
        $this->email->from($from_email, 'wssinfotech');
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($message);

        	if($this->email->send())
            $this->session->set_flashdata("success","Email Send Successfully.");
        else
            $this->session->set_flashdata("success","You have encountered an error");
			redirect('pages/send_emails');

				}
}

		$data['title']=ucfirst('Welcome :: ');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('send_emails');
		$this->load->view('templates/footer');


}




public function send_sms()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}

		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}



		$replyt=1;
$this->db->select('*');
$this->db->from('tbl_email_setting');
$this->db->where('id', $replyt);
$data['email_setting'] = $this->db->get()->row();;




if($this->uri->segment(3)=='send'){
				$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
				$this->form_validation->set_rules('number', 'Number', 'required');
				$this->form_validation->set_rules('message', 'SMS message', 'required');
				if ($this->form_validation->run() == FALSE) {
					 
				} else {
					
					$mobil=$this->input->post('number');

					$sms_message=$this->input->post('message');
					$message1=urlencode ($sms_message);

					$url2="http://justsms.nstechindia.com/api/mt/SendSMS?user=ititmaya&password=@&senderid=ITIMYA&channel=Trans&DCS=0&flashsms=0&number=91".$mobil."&text=".$message1;
					$ch2 = curl_init();
					curl_setopt($ch2,CURLOPT_URL, $url2);
					curl_exec($ch2);
					$result = curl_close($ch2);
	$this->session->set_flashdata('success', 'SMS Send Successfully.');
					echo "<script>
					    window.location.href='../../pages/send_sms/';
					 </script>"; 

				}
}

		$data['title']=ucfirst('Welcome :: ');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('send_sms');
		$this->load->view('templates/footer');


}

public function configuration_payment_setting()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}

if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
}



$replyt=1;
$this->db->select('*');
$this->db->from('tbl_email_setting');
$this->db->where('id', $replyt);
$data['email_setting'] = $this->db->get()->row();;




if($this->uri->segment(3)=='save'){
				$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
				$this->form_validation->set_rules('host', 'Host Name', 'required');
				$this->form_validation->set_rules('port', 'Port', 'required');
				$this->form_validation->set_rules('username', 'User Name', 'required');
				$this->form_validation->set_rules('password', 'Password', 'required');
				if ($this->form_validation->run() == FALSE) {
					 
				} else {
					 
					$data = array(  
						            'host' => $this->input->post('host'),
						            'port' => $this->input->post('port'),
						            'username' => $this->input->post('username'),
						            'password' => $this->input->post('password')
						);  
					$replyto=1;
					$this->db->where('id', $replyto);
					$this->db->update('tbl_email_setting',$data);
					$this->session->set_flashdata('success', 'Record Update Successfully.');
					redirect('pages/email_settings');
				}
}

		$data['title']=ucfirst('Welcome :: ');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('configuration_payment_setting');
		$this->load->view('templates/footer');


}


public function offer_n_coupon_cod()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}

if($this->uri->segment(3)=='add'){



		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('offer_title', 'Image Category', 'trim|required');
		$this->form_validation->set_rules('offinpercent', 'Offer Percentage', 'trim|required');
		$this->form_validation->set_rules('color', 'Color', 'trim|required');
		$this->form_validation->set_rules('offer_status', 'Status', 'trim|required');
		$this->form_validation->set_rules('coupon_code', 'Coupon cde', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
					
		} else {

    

                		$data = array(  
						            'offer_title' => $this->input->post('offer_title'),
						            'offinpercent' => $this->input->post('offinpercent'),
						            'coupon_code' => $this->input->post('coupon_code'),
						            'offer_status' => $this->input->post('offer_status'),
						            'content' => $this->input->post('content'),
						            'color' => $this->input->post('color'),
						            'add_date' => date('d-m-Y')
		
						);  
					
					$this->db->insert('tbl_offer',$data);
					$this->session->set_flashdata('success', 'Offer add Successfully.');
					 redirect('pages/offer_n_coupon_cod'); 


		}

}

if ($this->uri->segment(3)=='update') {
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('offer_title', 'Image Category', 'trim|required');
		$this->form_validation->set_rules('offinpercent', 'Offer Percentage', 'trim|required');
		$this->form_validation->set_rules('color', 'Color', 'trim|required');
		$this->form_validation->set_rules('offer_status', 'Status', 'trim|required');
		$this->form_validation->set_rules('coupon_code', 'Coupon cde', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
				redirect('pages/offer_n_coupon_cod/edit/'.$this->uri->segment(4)); 	
		} else {

    

                		$data = array(  
						            'offer_title' => $this->input->post('offer_title'),
						            'offinpercent' => $this->input->post('offinpercent'),
						            'coupon_code' => $this->input->post('coupon_code'),
						            'offer_status' => $this->input->post('offer_status'),
						            'content' => $this->input->post('content'),
						             'color' => $this->input->post('color'),
						            'add_date' => date('d-m-Y')
		
						);  
					$this->db->where('id',$this->uri->segment(4));
					$this->db->update('tbl_offer',$data);
					$this->session->set_flashdata('success', 'Offer update Successfully.');
					 redirect('pages/offer_n_coupon_cod/edit/'.$this->uri->segment(4)); 


		}
		
}
if ($this->uri->segment(3)=='edit') {
	$this->db->select('*');
	$this->db->from('tbl_offer');
	$this->db->where('id',$this->uri->segment(4));
	$data['edit_coupon']  = $this->db->get()->row();
}
		$data['title']=ucfirst('Welcome :: ');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('offer-coupan');
		$this->load->view('templates/footer');
}




public function offer_n_coupon_cod_view($value='')
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}

$this->db->select('*');
$this->db->from('tbl_offer');
$this->db->order_by('id','DESC');
$data['allcuponcode']  = $this->db->get();
 


		$data['title']=ucfirst('Welcome :: ');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('view-offer-coupan');
		$this->load->view('templates/footer');

}




public function configuration_general()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}


$replyt=1;
$this->db->select('*');
$this->db->from('configuration_general');
$this->db->where('id', $replyt);
$set = $this->db->get();

$data['configuration_details'] = $set->row();


$datax = $set->row();

if($this->uri->segment(3)=='save'){
				 
				$config['upload_path']          = './../assets/setting/';
                $config['allowed_types']        = 'gif|jpg|png';
            	$config['max_size'] = 1024 * 8;
        		$config['encrypt_name'] = TRUE;
        		$this->load->library('upload', $config);
        		 if (!$this->upload->do_upload('company_logo'))
                {
                		$company_logo =$datax->company_logo;

                } else {
                		unlink('./../assets/setting/'.$datax->company_logo);
                		$x=$this->upload->data();
                		$company_logo = $x['file_name'];

                }	 
					


					$data = array(  
						            'site_name' => $this->input->post('site_name'),
						            'organization_name' => $this->input->post('organization_name'),
						            'domain_name' => $this->input->post('domain_name'),
						            'organization_email' => $this->input->post('organization_email'),
						            'meta_title' => $this->input->post('meta_title'),
						            'meta_keyword' => $this->input->post('meta_keyword'),
						            'meta_content' => $this->input->post('meta_content'),
						            'address' => $this->input->post('address'),
						            'primary_mobile' => $this->input->post('primary_mobile'),
						            'opening_days' => $this->input->post('opening_days'),
						            'company_logo' => $company_logo,
						            'other_mobile' => $this->input->post('other_mobile'),
						            'other_email' => $this->input->post('other_email'),
						            'facebook' => $this->input->post('facebook'),
						            'twitter' => $this->input->post('twitter'),
						            'linkedin' => $this->input->post('linkedin'),
						            'youtube' => $this->input->post('youtube'),
						            'pinterest' => $this->input->post('pinterest'),
						            'powerd_by' => $this->input->post('powerd_by'),
						            'powerd_by_link' => $this->input->post('powerd_by_link'),
						            'signupbonus' => $this->input->post('signupbonus'),
						            'reffererrern' => $this->input->post('reffererrern'),
						            'lastupdate' => date('d-m-Y'),
						            'cashbackpercent' => $this->input->post('cashbackpercent')
						);  
					$replyto=1;
					$this->db->where('id', $replyto);
					$this->db->update('configuration_general',$data);
					$this->session->set_flashdata('success', 'Record Update Successfully.');
					redirect('pages/configuration_general');

				 
}

		$data['title']=ucfirst('Welcome :: ');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('configuration_general');
		$this->load->view('templates/footer');


}


public function web_images()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}

		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}

$this->db->select('*');
$this->db->from('tbl_web_images');
$set = $this->db->get();
$data['website_image'] = $set->result();

if ($this->uri->segment(3)=='edit') {
	$this->db->select('*');
	$this->db->from('tbl_web_images');
	$this->db->where('id',$this->uri->segment(4));
	$set = $this->db->get();
	$data['website_edit_image'] = $set->row();
}

if ($this->uri->segment(3)=='delete') {
	

	$this->db->select('*');
	$this->db->from('tbl_web_images');
	$this->db->where('id',$this->uri->segment(4));
	$set = $this->db->get();
	$datadd= $set->row();
	unlink('./../assets/setting/'.$datadd->image);
	$this->db->where('id',$this->uri->segment(4));
	$this->db->delete('tbl_web_images');
	$this->session->set_flashdata('success', 'Image deleted successfully.');
	redirect('pages/web_images');

}
if ($this->uri->segment(3)=='update') {
	

				$config['upload_path']          = './../assets/setting/';
                $config['allowed_types']        = 'gif|jpg|png';
            	$config['max_size'] = 1024 * 8;
        		$config['encrypt_name'] = TRUE;
        		$this->load->library('upload', $config);
        		 if (!$this->upload->do_upload('company_logo'))
                {
                		
                	$data = array(  
						            'type' => $this->input->post('image_category'),
						            'title' => $this->input->post('title')
					);  
                	$this->db->where('id',$this->uri->segment(4));
					$this->db->update('tbl_web_images',$data);
					$this->session->set_flashdata('success', 'Image update successfully.');
					redirect('pages/web_images'); 
                } else {
                		
                		unlink('./../assets/setting/'.$this->input->post('lastimage'));
                		$x=$this->upload->data();
                		$company_logo = $x['file_name'];

                		$data = array(  
						            'type' => $this->input->post('image_category'),
						            'title' => $this->input->post('title'),
						            'image' => $company_logo
						);  
                	$this->db->where('id',$this->uri->segment(4));	
					$this->db->update('tbl_web_images',$data);
					$this->session->set_flashdata('success', 'Image update successfully.');
					redirect('pages/web_images'); 

                }	 
					
}


if ($this->uri->segment(3)=='add') {
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('image_category', 'Image Category', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
					
		} else {

				$config['upload_path']          = './../assets/setting/';
                $config['allowed_types']        = 'gif|jpg|png';
            	$config['max_size'] = 1024 * 8;
        		$config['encrypt_name'] = TRUE;
        		$this->load->library('upload', $config);
        		 if (!$this->upload->do_upload('company_logo'))
                {
                		
                	$this->session->set_flashdata("image_error","Please select image in correct format.");
                    redirect('pages/web_images'); 
                } else {
                		
                		$x=$this->upload->data();
                		$company_logo = $x['file_name'];

                		$data = array(  
						            'type' => $this->input->post('image_category'),
						            'title' => $this->input->post('title'),
						            'image' => $company_logo
						);  
					
					$this->db->insert('tbl_web_images',$data);
					$this->session->set_flashdata('success', 'Image add Successfully.');
					 redirect('pages/web_images'); 

                }	 
					


		}

}



		$data['title']=ucfirst('Welcome :: Manage Website Images');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('web_images');
		$this->load->view('templates/footer');
}





public function how_it_word()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}

		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}

$this->db->select('*');
$this->db->from('how_it_word');
$set = $this->db->get();
$data['website_image'] = $set->result();

if ($this->uri->segment(3)=='edit') {
	$this->db->select('*');
	$this->db->from('how_it_word');
	$this->db->where('id',$this->uri->segment(4));
	$set = $this->db->get();
	$data['website_edit_image'] = $set->row();
}

if ($this->uri->segment(3)=='delete') {
	

	$this->db->select('*');
	$this->db->from('how_it_word');
	$this->db->where('id',$this->uri->segment(4));
	$set = $this->db->get();
	$datadd= $set->row();
	unlink('./../assets/setting/'.$datadd->image);
	$this->db->where('id',$this->uri->segment(4));
	$this->db->delete('how_it_word');
	$this->session->set_flashdata('success', 'Image deleted successfully.');
	redirect('pages/how_it_word');

}
if ($this->uri->segment(3)=='update') {
	

				$config['upload_path']          = './../assets/setting/';
                $config['allowed_types']        = 'gif|jpg|png';
            	$config['max_size'] = 1024 * 8;
        		$config['encrypt_name'] = TRUE;
        		$this->load->library('upload', $config);
        		 if (!$this->upload->do_upload('company_logo'))
                {
                		
                	$data = array(  
						            'type' => $this->input->post('image_category'),
						            'content' => $this->input->post('content'),
						            'title' => $this->input->post('title')
					);  
                	$this->db->where('id',$this->uri->segment(4));
					$this->db->update('how_it_word',$data);
					$this->session->set_flashdata('success', 'Image update successfully.');
					redirect('pages/how_it_word'); 
                } else {
                		
                		unlink('./../assets/setting/'.$this->input->post('lastimage'));
                		$x=$this->upload->data();
                		$company_logo = $x['file_name'];

                		$data = array(  
						            'type' => $this->input->post('image_category'),
						            'title' => $this->input->post('title'),
						            'content' => $this->input->post('content'),
						            'image' => $company_logo
						);  
                	$this->db->where('id',$this->uri->segment(4));	
					$this->db->update('how_it_word',$data);
					$this->session->set_flashdata('success', 'Image update successfully.');
					redirect('pages/how_it_word'); 

                }	 
					
}


if ($this->uri->segment(3)=='add') {
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('image_category', 'Image Category', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
					
		} else {

				$config['upload_path']          = './../assets/setting/';
                $config['allowed_types']        = 'gif|jpg|png';
            	$config['max_size'] = 1024 * 8;
        		$config['encrypt_name'] = TRUE;
        		$this->load->library('upload', $config);
        		 if (!$this->upload->do_upload('company_logo'))
                {
                		
                	$this->session->set_flashdata("image_error","Please select image in correct format.");
                    redirect('pages/how_it_word'); 
                } else {
                		
                		$x=$this->upload->data();
                		$company_logo = $x['file_name'];

                		$data = array(  
						            'type' => $this->input->post('image_category'),
						            'title' => $this->input->post('title'),
						            'content' => $this->input->post('content'),
						            'image' => $company_logo
						);  
					
					$this->db->insert('how_it_word',$data);
					$this->session->set_flashdata('success', 'Image add Successfully.');
					 redirect('pages/how_it_word'); 

                }	 
					


		}

}



		$data['title']=ucfirst('Welcome :: Manage Website Images');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('how_it_word');
		$this->load->view('templates/footer');
}








public function highlighted()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}

		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}


$this->db->select('*');
$this->db->from('add_products');
$this->db->order_by('id','ASC');
$data['all_products']  = $this->db->get();



$this->db->select('*');
$this->db->from('highlighted');
$set = $this->db->get();
$data['website_image'] = $set->result();

if ($this->uri->segment(3)=='edit') {
	$this->db->select('*');
	$this->db->from('highlighted');
	$this->db->where('id',$this->uri->segment(4));
	$set = $this->db->get();
	$data['website_edit_image'] = $set->row();
}

if ($this->uri->segment(3)=='delete') {
	

	$this->db->select('*');
	$this->db->from('highlighted');
	$this->db->where('id',$this->uri->segment(4));
	$set = $this->db->get();
	$datadd= $set->row();
	unlink('./../assets/setting/'.$datadd->image);
	$this->db->where('id',$this->uri->segment(4));
	$this->db->delete('highlighted');
	$this->session->set_flashdata('success', 'Image deleted successfully.');
	redirect('pages/highlighted');

}
if ($this->uri->segment(3)=='update') {
	

				$config['upload_path']          = './../assets/setting/';
                $config['allowed_types']        = 'gif|jpg|png';
            	$config['max_size'] = 1024 * 8;
        		$config['encrypt_name'] = TRUE;
        		$this->load->library('upload', $config);
        		 if (!$this->upload->do_upload('company_logo'))
                {
                		
                	$data = array(  
						            'image_category' => $this->input->post('image_category'),
						            'content' => $this->input->post('content'),
						            'bgcolor' => $this->input->post('bgcolor'),
						            'title' => $this->input->post('title')
					);  
                	$this->db->where('id',$this->uri->segment(4));
					$this->db->update('highlighted',$data);
					$this->session->set_flashdata('success', 'Image update successfully.');
					redirect('pages/highlighted'); 
                } else {
                		
                		unlink('./../assets/setting/'.$this->input->post('lastimage'));
                		$x=$this->upload->data();
                		$company_logo = $x['file_name'];

                		$data = array(  
						            'image_category' => $this->input->post('image_category'),
						            'title' => $this->input->post('title'),
						            'content' => $this->input->post('content'),
						            'bgcolor' => $this->input->post('bgcolor'),
						            'image' => $company_logo
						);  
                	$this->db->where('id',$this->uri->segment(4));	
					$this->db->update('highlighted',$data);
					$this->session->set_flashdata('success', 'Image update successfully.');
					redirect('pages/highlighted'); 

                }	 
					
}


if ($this->uri->segment(3)=='add') {
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('image_category', 'Image Category', 'trim|required');
		
		if ($this->form_validation->run() == FALSE) {
					
		} else {

				$config['upload_path']          = './../assets/setting/';
                $config['allowed_types']        = 'gif|jpg|png';
            	$config['max_size'] = 1024 * 8;
        		$config['encrypt_name'] = TRUE;
        		$this->load->library('upload', $config);
        		 if (!$this->upload->do_upload('company_logo'))
                {
                		
                	$this->session->set_flashdata("image_error","Please select image in correct format.");
                    redirect('pages/highlighted'); 
                } else {
                		
                		$x=$this->upload->data();
                		$company_logo = $x['file_name'];

                		$data = array(  
						            'image_category' => $this->input->post('image_category'),
						            'title' => $this->input->post('title'),
						            'content' => $this->input->post('content'),
						            'bgcolor' => $this->input->post('bgcolor'),
						            'image' => $company_logo
						);  
					
					$this->db->insert('highlighted',$data);
					$this->session->set_flashdata('success', 'Image add Successfully.');
					 redirect('pages/highlighted'); 

                }	 
					


		}

}



		$data['title']=ucfirst('Welcome :: Manage Website Images');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('highlighted');
		$this->load->view('templates/footer');
}









public function highlighted2()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}

		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}

$this->db->select('*');
$this->db->from('highlighted2');
$set = $this->db->get();
$data['website_image'] = $set->result();

if ($this->uri->segment(3)=='edit') {
	$this->db->select('*');
	$this->db->from('highlighted2');
	$this->db->where('id',$this->uri->segment(4));
	$set = $this->db->get();
	$data['website_edit_image'] = $set->row();
}

if ($this->uri->segment(3)=='delete') {
	

	$this->db->select('*');
	$this->db->from('highlighted2');
	$this->db->where('id',$this->uri->segment(4));
	$set = $this->db->get();
	$datadd= $set->row();
	unlink('./../assets/setting/'.$datadd->image);
	$this->db->where('id',$this->uri->segment(4));
	$this->db->delete('highlighted2');
	$this->session->set_flashdata('success', 'Image deleted successfully.');
	redirect('pages/highlighted2');

}
if ($this->uri->segment(3)=='update') {
	

				$config['upload_path']          = './../assets/setting/';
                $config['allowed_types']        = 'gif|jpg|png';
            	$config['max_size'] = 1024 * 8;
        		$config['encrypt_name'] = TRUE;
        		$this->load->library('upload', $config);
        		 if (!$this->upload->do_upload('company_logo'))
                {
                		
                	$data = array(  
						            'image_category' => $this->input->post('image_category'),
						            'content' => $this->input->post('content'),
						            'title' => $this->input->post('title')
					);  
                	$this->db->where('id',$this->uri->segment(4));
					$this->db->update('highlighted2',$data);
					$this->session->set_flashdata('success', 'Image update successfully.');
					redirect('pages/highlighted2'); 
                } else {
                		
                		unlink('./../assets/setting/'.$this->input->post('lastimage'));
                		$x=$this->upload->data();
                		$company_logo = $x['file_name'];

                		$data = array(  
						            'image_category' => $this->input->post('image_category'),
						            'title' => $this->input->post('title'),
						            'content' => $this->input->post('content'),
						            'image' => $company_logo
						);  
                	$this->db->where('id',$this->uri->segment(4));	
					$this->db->update('highlighted2',$data);
					$this->session->set_flashdata('success', 'Image update successfully.');
					redirect('pages/highlighted2'); 

                }	 
					
}


if ($this->uri->segment(3)=='add') {
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('image_category', 'Image Category', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
					
		} else {

				$config['upload_path']          = './../assets/setting/';
                $config['allowed_types']        = 'gif|jpg|png';
            	$config['max_size'] = 1024 * 8;
        		$config['encrypt_name'] = TRUE;
        		$this->load->library('upload', $config);
        		 if (!$this->upload->do_upload('company_logo'))
                {
                		
                	$this->session->set_flashdata("image_error","Please select image in correct format.");
                    redirect('pages/highlighted2'); 
                } else {
                		
                		$x=$this->upload->data();
                		$company_logo = $x['file_name'];

                		$data = array(  
						            'image_category' => $this->input->post('image_category'),
						            'title' => $this->input->post('title'),
						            'content' => $this->input->post('content'),
						            'image' => $company_logo
						);  
					
					$this->db->insert('highlighted2',$data);
					$this->session->set_flashdata('success', 'Image add Successfully.');
					 redirect('pages/highlighted2'); 

                }	 
					


		}

}



		$data['title']=ucfirst('Welcome :: Manage Website Images');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('highlighted2');
		$this->load->view('templates/footer');
}







public function faq()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}

		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}

$this->db->select('*');
$this->db->from('faq');
$set = $this->db->get();
$data['website_image'] = $set->result();

if ($this->uri->segment(3)=='edit') {
	$this->db->select('*');
	$this->db->from('faq');
	$this->db->where('id',$this->uri->segment(4));
	$set = $this->db->get();
	$data['website_edit_image'] = $set->row();
}

if ($this->uri->segment(3)=='delete') {
	

	$this->db->select('*');
	$this->db->from('faq');
	$this->db->where('id',$this->uri->segment(4));
	$set = $this->db->get();
	$datadd= $set->row();
	$this->db->where('id',$this->uri->segment(4));
	$this->db->delete('faq');
	$this->session->set_flashdata('success', 'Image deleted successfully.');
	redirect('pages/faq');

}
if ($this->uri->segment(3)=='update') {
	

				 	
                	$data = array(  
						            'image_category' => $this->input->post('image_category'),
						            'content' => $this->input->post('content'),
						            'title' => $this->input->post('title')
					);  
                	$this->db->where('id',$this->uri->segment(4));
					$this->db->update('faq',$data);
					$this->session->set_flashdata('success', 'update successfully.');
					redirect('pages/faq'); 
              					
}
if ($this->uri->segment(3)=='add') {
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('image_category', 'Category', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
					
		} else {

                		$data = array(  
						            'image_category' => $this->input->post('image_category'),
						            'title' => $this->input->post('title'),
						            'content' => $this->input->post('content')
						);  
					
					$this->db->insert('faq',$data);
					$this->session->set_flashdata('success', 'Add Successfully.');
					 redirect('pages/faq'); 
                
		}
}
		$data['title']=ucfirst('Welcome :: Manage Website Images');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('faq');
		$this->load->view('templates/footer');
}







public function testimonials()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}

		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}

$this->db->select('*');
$this->db->from('testimonials');
$set = $this->db->get();
$data['website_image'] = $set->result();

if ($this->uri->segment(3)=='edit') {
	$this->db->select('*');
	$this->db->from('testimonials');
	$this->db->where('id',$this->uri->segment(4));
	$set = $this->db->get();
	$data['website_edit_image'] = $set->row();
}

if ($this->uri->segment(3)=='delete') {
	

	$this->db->select('*');
	$this->db->from('testimonials');
	$this->db->where('id',$this->uri->segment(4));
	$set = $this->db->get();
	$datadd= $set->row();
 
	$this->db->where('id',$this->uri->segment(4));
	$this->db->delete('testimonials');
	$this->session->set_flashdata('success', 'Image deleted successfully.');
	redirect('pages/assignment-help-services');

}
if ($this->uri->segment(3)=='update') {
	

				$config['upload_path']          = './../assets/setting/';
                $config['allowed_types']        = 'gif|jpg|png';
            	$config['max_size'] = 1024 * 8;
        		$config['encrypt_name'] = TRUE;
        		$this->load->library('upload', $config);
        		   	$data = array(  
						            'type' => $this->input->post('image_category'),
						            'content' => $this->input->post('content'),
						            'title' => $this->input->post('title')
					);  
                	$this->db->where('id',$this->uri->segment(4));
					$this->db->update('testimonials',$data);
					$this->session->set_flashdata('success', 'Image update successfully.');
					redirect('pages/assignment-help-services'); 
                 
					
}


if ($this->uri->segment(3)=='add') {
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('image_category', 'Image Category', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
					
		} else {
               		$data = array(  
			            'type' => $this->input->post('image_category'),
			            'title' => $this->input->post('title'),
			            'content' => $this->input->post('content'),
					);  
					
					$this->db->insert('testimonials',$data);
					$this->session->set_flashdata('success', 'Image add Successfully.');
					 redirect('pages/assignment-help-services'); 
 

		}

}



		$data['title']=ucfirst('Welcome :: Manage Website Images');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('testimonials');
		$this->load->view('templates/footer');
}












public function videos()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}

		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}

$this->db->select('*');
$this->db->from('videos');
$set = $this->db->get();
$data['website_image'] = $set->result();

if ($this->uri->segment(3)=='edit') {
	$this->db->select('*');
	$this->db->from('videos');
	$this->db->where('id',$this->uri->segment(4));
	$set = $this->db->get();
	$data['website_edit_image'] = $set->row();
}

if ($this->uri->segment(3)=='delete') {
	
	$this->db->where('id',$this->uri->segment(4));
	$this->db->delete('videos');
	$this->session->set_flashdata('success', 'Video deleted successfully.');
	redirect('pages/videos');

}
if ($this->uri->segment(3)=='update') {
	

                	$data = array(  
						            'type' => $this->input->post('image'),
						            'content' => $this->input->post('content'),
						            'title' => $this->input->post('title')
					);  
                	$this->db->where('id',$this->uri->segment(4));
					$this->db->update('videos',$data);
					$this->session->set_flashdata('success', 'Video update successfully.');
					redirect('pages/videos'); 
                
					
}


if ($this->uri->segment(3)=='add') {
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('content', 'Video Link', 'trim|required');
		$this->form_validation->set_rules('image', 'Video Type', 'trim|required');
		$this->form_validation->set_rules('title', 'Video Title', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
					
		} else {
 
                 
                		$data = array(  
						            'type' => $this->input->post('image'),
						            'title' => $this->input->post('title'),
						            'content' => $this->input->post('content')
						);  
					
					$this->db->insert('videos',$data);
					$this->session->set_flashdata('success', 'Video add Successfully.');
					 redirect('pages/videos'); 
 


		}

}



		$data['title']=ucfirst('Welcome :: Manage Website Images');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('videos');
		$this->load->view('templates/footer');
}




 


public function manage_pages($value='')
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}

		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}

if ($this->uri->segment(3)=='savedata') {
		$this->db->select('*');
        $this->db->from('tbl_pages');
        $s = array('pagid'=>$this->input->post('pagename'));
        $this->db->where($s);
        $query=$this->db->get();

         

        if ($query->num_rows()>0) {
        	$data = array(
			'pagecontent' => $this->input->post('content')
		);
        	$this->db->where('pagid',$this->input->post('pagename'));
        	$this->db->update('tbl_pages',$data);
        	$this->session->set_flashdata('success', 'Record Update Successfully.');
        } else {

        	$data = array(  
			'pagid' => $this->input->post('pagename'),
			'pagecontent' => $this->input->post('content')
			);
        	$this->db->insert('tbl_pages',$data);
        	$this->session->set_flashdata('success', 'Record insert Successfully.');
        }

       redirect('pages/manage_pages/');
}


		$data['title']=ucfirst('Welcome :: ');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('manage_pages');
		$this->load->view('templates/footer');


		
}




public function e_wallet_settings()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}

		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}
		$replyt=1;
$this->db->select('*');
$this->db->from('tbl_email_setting');
$this->db->where('id', $replyt);
$data['email_setting'] = $this->db->get()->row();;




if($this->uri->segment(3)=='save'){
				$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
				$this->form_validation->set_rules('host', 'Host Name', 'required');
				$this->form_validation->set_rules('port', 'Port', 'required');
				$this->form_validation->set_rules('username', 'User Name', 'required');
				$this->form_validation->set_rules('password', 'Password', 'required');
				if ($this->form_validation->run() == FALSE) {
					 
				} else {
					 
					$data = array(  
						            'host' => $this->input->post('host'),
						            'port' => $this->input->post('port'),
						            'username' => $this->input->post('username'),
						            'password' => $this->input->post('password')
						);  
					$replyto=1;
					$this->db->where('id', $replyto);
					$this->db->update('tbl_email_setting',$data);
					$this->session->set_flashdata('success', 'Record Update Successfully.');
					redirect('pages/email_settings');

				}
}

		$data['title']=ucfirst('Welcome :: ');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('e_wallet_settings');
		$this->load->view('templates/footer');


}




public function plan_configuration()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}

		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}
		$replyt=1;
$this->db->select('*');
$this->db->from('tbl_email_setting');
$this->db->where('id', $replyt);
$data['email_setting'] = $this->db->get()->row();;




if($this->uri->segment(3)=='save'){
				$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
				$this->form_validation->set_rules('host', 'Host Name', 'required');
				$this->form_validation->set_rules('port', 'Port', 'required');
				$this->form_validation->set_rules('username', 'User Name', 'required');
				$this->form_validation->set_rules('password', 'Password', 'required');
				if ($this->form_validation->run() == FALSE) {
					 
				} else {
					 
					$data = array(  
						            'host' => $this->input->post('host'),
						            'port' => $this->input->post('port'),
						            'username' => $this->input->post('username'),
						            'password' => $this->input->post('password')
						);  
					$replyto=1;
					$this->db->where('id', $replyto);
					$this->db->update('tbl_email_setting',$data);
					$this->session->set_flashdata('success', 'Record Update Successfully.');
					redirect('pages/email_settings');

				}
}

		$data['title']=ucfirst('Welcome :: ');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('plan_configuration');
		$this->load->view('templates/footer');


}




public function configuration_weblogos()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}

		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}
		$replyt=1;
$this->db->select('*');
$this->db->from('tbl_email_setting');
$this->db->where('id', $replyt);
$data['email_setting'] = $this->db->get()->row();;




if($this->uri->segment(3)=='save'){
				$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
				$this->form_validation->set_rules('host', 'Host Name', 'required');
				$this->form_validation->set_rules('port', 'Port', 'required');
				$this->form_validation->set_rules('username', 'User Name', 'required');
				$this->form_validation->set_rules('password', 'Password', 'required');
				if ($this->form_validation->run() == FALSE) {
					 
				} else {
					 
					$data = array(  
						            'host' => $this->input->post('host'),
						            'port' => $this->input->post('port'),
						            'username' => $this->input->post('username'),
						            'password' => $this->input->post('password')
						);  
					$replyto=1;
					$this->db->where('id', $replyto);
					$this->db->update('tbl_email_setting',$data);
					$this->session->set_flashdata('success', 'Record Update Successfully.');
					redirect('pages/email_settings');

				}
}

		$data['title']=ucfirst('Welcome :: ');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('configuration_weblogos');
		$this->load->view('templates/footer');


}





public function forgotpassword()
	{	
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (isset($_COOKIE["login_by_sohan"])){
				redirect('pages/dashboard');						
		}
		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}
		$data['title']=ucfirst('Welcome ::   : About Us');
		$this->load->view('forgotpassword', $data);
		 
}	




public function change_password()
	{	
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		  if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}

if ($this->uri->segment(3)=='confirm') {
	$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
 
$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[25]|matches[confirmpassword]');

	$this->form_validation->set_rules('confirmpassword', 'Confirm  Password', 'trim|required');
				if ($this->form_validation->run() == FALSE) {
					 
				} else {

					$data = array( 
						'adminpassword' => md5($this->input->post('password'))
					);  
					 
					$this->db->where('collegecode', $_COOKIE["login_by_sohan"]);
					$this->db->update('adminlogin',$data);
					$this->session->set_flashdata('profile_update_success', 'Password update Successfully');
					redirect('pages/change_password');
				}
}


		$data['title']=ucfirst('Admin : Dashboard  Manage Websites');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('change_password');
		$this->load->view('templates/footer');
		 
}	











public function dashboard(){
	
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
 
		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}

			$this->db->select('*');
			$this->db->from('tbl_members');
			$this->db->order_by('dum_id','DESC');
        	$dmember = $this->db->get()->result();

        		$todayjoining=0;
        		$todayacive=0;
        		$todayinacive=0;
        		$todayamount=0;

        		$totljoining=0;
        		$totlacive=0;
        		$totlinacive=0;
        		$totlamount=0;
        		
        		foreach ($dmember as $sresult) {

        			$newDate = date("d-m-Y", strtotime($sresult->registration_date));
        			 
        			if ($newDate==date('d-m-Y')) {
        				 $todayjoining=$todayjoining+1;

						 
        				 $todayamount=0;

        				 if ($sresult->status==0) {
        				 	$todayinacive=$todayinacive+1;
        				 } else if ($sresult->status==1) {
        				 	$todayacive=$todayacive+1;
        				 }
        				}



        				$totljoining=$totljoining+1;
        				if ($sresult->status==0) {
        				 	$totlinacive=$totlinacive+1;
        				 } else if ($sresult->status==1) {
        				 	$totlacive=$totlacive+1;
        				 }
        				  $totlamount=0;
        		 

        		}


				$data['todayjoining']=$todayjoining;
        		$data['todayacive']=$todayacive;
        		$data['todayinacive']=$todayinacive;
        		$data['todayamount']=$todayamount;

        		$data['totljoining']=$totljoining;
        		$data['totlacive']=$totlacive;
        		$data['totlinacive']=$totlinacive;
        		$data['totlamount']=$totlamount;



$this->db->select('*');
$this->db->from('tbl_help_desks');
$this->db->order_by('id','DESC');
$data['help_desks'] = $this->db->get();


			$this->db->select('*');
			$this->db->from('tbl_members');
			$this->db->order_by('dum_id','ASC');
			$this->db->limit(1);
        	$admin_member = $this->db->get()->row();
			
			$this->db->select('*');
            $this->db->from('tbl_income_reports');
            $this->db->where('income_to',$admin_member->id);
            $this->db->order_by('id','DESC');
        
            $data['income'] = $this->db->get();

$this->db->select('*');
        $this->db->from('tbl_help_desks');
        $this->db->order_by('id','DESC');
        $this->db->limit('10');
        $data['help_desk']=$this->db->get();

        	$this->db->select('*');
            $this->db->from('tbl_orders');
           $data['my_myorder'] = $this->db->get();
          ///  $data['my_myorder'] = $set->result();



            $this->db->select('*');
            $this->db->from('order_payment');
            $set2 = $this->db->get();
            $data['payments'] = $set2->result();



			$this->db->select('*');
            $this->db->from('tbl_neft_bank_details');
            $this->db->where('dum_id', 1);
            $setb = $this->db->get();
            $data['neft_bank'] = $setb->row();

			$this->db->select('*');
            $this->db->from('tbl_widthdraws');
            $this->db->order_by('id','DESC');
            $set = $this->db->get();
            $data['req_width'] = $set;



		//$_SESSION['login_by_sohan']['login_by_sohan']=$_SESSION['login_by_sohan']['login_by_sohan']; 
		$data['title']=ucfirst('Admin : Dashboard  Manage Websites');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard');
		$this->load->view('templates/footer');
}


public function admin_income()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}

		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}

			$this->db->select('*');
			$this->db->from('tbl_members');
			$this->db->order_by('dum_id','ASC');
			$this->db->limit(1);
        	$admin_member = $this->db->get()->row();
			
			$this->db->select('*');
            $this->db->from('tbl_income_reports');
            $this->db->where('income_to',$admin_member->id);
            $this->db->order_by('id','DESC');
            $data['income'] = $this->db->get();

		$data['title']=ucfirst('Admin : Dashboard  Manage Websites');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('admin_income');
		$this->load->view('templates/footer');
}


public function all_member()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}

		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}	
		$_SESSION['login_by_sohan']['login_by_sohan']=$_SESSION['login_by_sohan']['login_by_sohan'];
			$this->db->select('*');
			$this->db->from('tbl_members');
			//$this->db->where('status',1);
			$this->db->order_by('dum_id','DESC');
        	$data['all_members'] = $this->db->get()->result();
		
		
		
		 
		$data['title']=ucfirst('All Members');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('all_member');
		$this->load->view('templates/footer');	
}	



public function active_member()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}

		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}	
		$_SESSION['login_by_sohan']['login_by_sohan']=$_SESSION['login_by_sohan']['login_by_sohan'];
			$this->db->select('*');
			$this->db->from('tbl_members');
			$this->db->where('status=1');
			$this->db->order_by('dum_id','DESC');
        	$data['all_members'] = $this->db->get()->result();
		
		
		
		 
		$data['title']=ucfirst('All Active Members');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('all_active_member');
		$this->load->view('templates/footer');	
}	



public function in_active_member()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}	

		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}
		$_SESSION['login_by_sohan']['login_by_sohan']=$_SESSION['login_by_sohan']['login_by_sohan'];
			$this->db->select('*');
			$this->db->from('tbl_members');
			$this->db->where('status=0');
			$this->db->order_by('dum_id','DESC');
        	$data['all_members'] = $this->db->get()->result();
		
		
		
		 
		$data['title']=ucfirst('All InActive Members');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('all_inactive_member');
		$this->load->view('templates/footer');	
}	

public function member_status()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}	

		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}

		$datan = array('status' => $this->uri->segment(5));
		$where2 = array('id' => $this->uri->segment(4));
		$this->db->where($where2);
        $this ->db->update($this->uri->segment(3),$datan);
		$this->session->set_flashdata('success', 'Record Update Successfully.');
		redirect('pages/'.$this->uri->segment(6));





}

public function in_active_kyc()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}	

		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}

			$this->db->select('*');
			$this->db->from('tbl_kycs');
			$this->db->order_by('dum_id','DESC');
        	$data['all_kyc'] = $this->db->get()->result();
		
		
		
		 
		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('in_active_kyc');
		$this->load->view('templates/footer');	
}	


public function active_kyc()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}
		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}
			$this->db->select('*');
			$this->db->from('tbl_kycs');
			$this->db->order_by('dum_id','DESC');
        	$data['all_kyc'] = $this->db->get()->result();
		
		
		
		 
		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('active_kyc');
		$this->load->view('templates/footer');	
}	



public function package_list()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}	
		
		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}
			$this->db->select('*');
			$this->db->from('tbl_packages');
			$this->db->order_by('id','DESC');
        	$data['all_packages'] = $this->db->get()->result();
		
		if ($this->uri->segment(3)=='delete') {
			
			$this->db->where('id',$this->uri->segment(4));
			$this->db->delete('tbl_packages');
			$this->session->set_flashdata('success', 'Record Delete Successfully.');
			redirect('pages/package_list');
		}
		
		 
		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('package_list');
		$this->load->view('templates/footer');	
}	





public function add_package()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}	
		
	 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}

if($this->uri->segment(3)=='edit'){ 
			$this->db->select('*');
			$this->db->from('tbl_packages');
			$where2 = array('id' => $this->uri->segment(4));
			$this->db->where($where2);
        	$data['all_packages'] = $this->db->get()->row();
			
		
}
if($this->uri->segment(3)=='insert'){
								$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
								$this->form_validation->set_rules('package_activation_name', 'Package Name ', 'trim|required');
								$this->form_validation->set_rules('package_activation_amount', 'Package Amount ', 'trim|required');
								$this->form_validation->set_rules('package_activation_item_cost', 'Package Item Cost ', 'trim|required');
								$this->form_validation->set_rules('package_activation_gift_amount', 'Package Gift Amount ', 'trim|required');
								$this->form_validation->set_rules('package_gift_amount_percentage_per_child', 'Package Gift Amount Percentage ', 'trim|required');
								if ($this->form_validation->run() == FALSE) {
									
								} else {
									$datan = array(
			                    	'package_activation_name'=>  $this->input->post('package_activation_name'),
			                    	'package_activation_amount'=>  $this->input->post('package_activation_amount'),
			                    	'package_activation_item_cost'=>  $this->input->post('package_activation_item_cost'), 
			                    	'package_activation_gift_amount'=>  $this->input->post('package_activation_gift_amount'), 
			                    	'package_gift_amount_percentage_per_child'=>  $this->input->post('package_gift_amount_percentage_per_child') 
			                    );

			                    $this ->db->insert('tbl_packages',$datan);
								$this->session->set_flashdata('success', 'Record Save Successfully.');
								redirect('pages/add_package');
					}
	
}


if($this->uri->segment(5)=='update'){
								$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
								$this->form_validation->set_rules('package_activation_name', 'Package Name ', 'trim|required');
								$this->form_validation->set_rules('package_activation_amount', 'Package Amount ', 'trim|required');
								$this->form_validation->set_rules('package_activation_item_cost', 'Package Item Cost ', 'trim|required');
								$this->form_validation->set_rules('package_activation_gift_amount', 'Package Gift Amount ', 'trim|required');
								$this->form_validation->set_rules('package_gift_amount_percentage_per_child', 'Package Gift Amount Percentage ', 'trim|required');
								if ($this->form_validation->run() == FALSE) {
									
								} else {
									$datan = array(
			                    	'package_activation_name'=>  $this->input->post('package_activation_name'),
			                    	'package_activation_amount'=>  $this->input->post('package_activation_amount'),
			                    	'package_activation_item_cost'=>  $this->input->post('package_activation_item_cost'), 
			                    	'package_activation_gift_amount'=>  $this->input->post('package_activation_gift_amount'), 
			                    	'package_gift_amount_percentage_per_child'=>  $this->input->post('package_gift_amount_percentage_per_child')
			                    );
								
								$where2 = array('id' => $this->uri->segment(4));
								$this->db->where($where2);
									
									
			                    $this ->db->update('tbl_packages',$datan);
								$this->session->set_flashdata('success', 'Record Update Successfully.');
								
								redirect('pages/add_package/edit/'.$this->uri->segment(4).'/update');
					}
	
}			
		
		
		 
		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('add_package');
		$this->load->view('templates/footer');	
}	


public function productDataView()
	{
	 
		if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}

		$this->db->select('*');
        $this->db->from('add_products');
        $s = array('id'=>$this->input->post('id'));
        $this->db->where($s);
        $query=$this->db->get();


		if($query->num_rows()>0){ 
		$rest=$query->row();
 
 		$this->db->select('*');
        $this->db->from('tbl_category');
        $payment=$this->db->get();
        $paymentrow = $payment->result();
        	$datsd='';

        		foreach ($paymentrow as $cardaaa) {
        			if($cardaaa->id==$rest->category){
        				$datsd=$datsd."<option selected='' value=$cardaaa->id>$cardaaa->name</option>";
        			} else {
        				$datsd=$datsd."<option value=$cardaaa->id>$cardaaa->name</option>";
        			}
        			
        		}
        
        $datsd2='';
        $img=base_url().'../assets/products/'.$rest->product_image;
       echo	$datsd2=$datsd2."<div class='row'>
        			<div class='col-sm-6'>
					<label>Category *</label>
        			<select class='form-control' name='category'>".$datsd."</select></div>

        	<div class='col-sm-6'>
        		<label>Video Link</label>
        		<input type='text' class='form-control' name='video_link' value='$rest->video_link' />
        	</div>
        </div>
        <div class='row'>
        	
        	<div class='col-sm-12'>
        		<label>Product Title *</label>
        		<input type='text' class='form-control' name='title' value='$rest->title' />
        	</div>
        </div>

        <div class='row'>
        	
        	<div class='col-sm-6'>
        		<label>M.R.P. *</label>
        		<input type='text' class='form-control' name='mrp_price' value='$rest->mrp_price' />
        	</div>
         
        	
        	<div class='col-sm-6'>
        		<label>Selling Price *</label>
        		<input type='text' class='form-control' name='selling_price' value='$rest->selling_price' />
        	</div>
        </div>
        <div class='row'>
        	<div class='col-sm-12'>
        			<label>Description *</label>
        			<textarea name='description' class='ckeditor' id='editor1'>$rest->description</textarea>
        	</div>
        </div>
        <div class='row'>
        	<div class='col-sm-6'>
        		<label>Product Image *</label>
        		<input type='file' name='product_image' class='form-control' />
        	</div>
        	<div class='col-sm-6'>
        			<img src='$img' style='width:100px;' />
        	</div>
        </div>
        ";

		
		} else {
			
			echo "<table class='table table-responsive'>
				
				
				<tr>
					 
					<td>Not Found</td>
				</tr>
				
			 
				
				
		</table>";
			
		}
	}




 

public function add_assignment()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}	
		
	 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}
			$this->db->select('*');
			$this->db->from('tbl_category');
			$this->db->order_by('id','DESC');
        	$data['all_category'] = $this->db->get()->result();

			$this->db->select('*');
			$this->db->from('urgency');
			$this->db->order_by('id','ASC');
        	$data['urgency'] = $this->db->get()->result();

if($this->uri->segment(3)=='edit'){ 
			$this->db->select('*');
			$this->db->from('add_products');
			$where2 = array('id' => $this->uri->segment(4));
			$this->db->where($where2);
        	$data['all_packages'] = $this->db->get()->row();
			
		
}
if($this->uri->segment(3)=='insert'){
	$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
	$this->form_validation->set_rules('category', 'Category ', 'trim|required');
	$this->form_validation->set_rules('title', 'Product name ', 'trim|required');
	$this->form_validation->set_rules('mrp_price', 'M.R.P. ', 'trim|required');
	$this->form_validation->set_rules('selling_price', 'Selling Price ', 'trim|required');
	$this->form_validation->set_rules('description', 'Description', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
								
		} else {


			
				$config['upload_path']          = './../assets/products/';
                $config['allowed_types']        = 'gif|jpg|png';
            	$config['max_size'] = 1024 * 8;
        		$config['encrypt_name'] = TRUE;
        		$this->load->library('upload', $config);
        		 if (!$this->upload->do_upload('product_image'))
                {
                	$this->session->set_flashdata('success', 'Select image in jpg, png format');	
                	$company_logo='';

                } else {
                		$x=$this->upload->data();
                		$company_logo = $x['file_name'];
                }


	$this->db->select('*');
    $this->db->from('tbl_category');
    $this->db->where('id',$this->input->post('category'));
    $checkcatlevel = $this->db->get()->row();
     if ($checkcatlevel->cat_it==0) {
     	 	$categry=$this->input->post('category');
	     	$sub_category=0;
     } else {
     	$categry=$checkcatlevel->cat_it;
 		$sub_category=$this->input->post('category');
     }

                	
                		$datan = array(
					      	'category'=>  $categry,
					      	'category2'=> $sub_category,
					       	'title'=>  $this->input->post('title'),
					       	'mrp_price'=>  $this->input->post('mrp_price'), 
					       	'selling_price'=>  $this->input->post('selling_price'), 
					       	'description'=>  $this->input->post('description'), 
					       	'product_image'=> $company_logo, 
					       	'video_link'=>  $this->input->post('video_link'), 
					       	'neet_to_pay'=>  $this->input->post('neet_to_pay'), 
					       	'metatitle'=>  $this->input->post('metatitle'),
					       	'metkeywords'=>  $this->input->post('metkeywords'), 
					       	'metdescription'=>  $this->input->post('metdescription'),
					       	 'advanceamt'=>  $this->input->post('advanceamt')
						);
                		$this ->db->insert('add_products',$datan);
                		$lastid = $this->db->insert_id();
								
								$amount = $this->input->post('amount');
								$urgency_amt = $this->input->post('urgency_amt');
								$countamount =  count($amount);
								if ($countamount>0) {
									for($i=0;$i<$countamount;$i++){
										if ($amount[$i]!='') {
										$datan2 = array(
									      	'assignment_id'=>  $lastid,
									      	'urgency_id'=> $urgency_amt[$i],
									      	'urgency_amt'=>$amount[$i]
									      );
				                		$this ->db->insert('assignment_urgency',$datan2);
										}
									}
								}
					$this->session->set_flashdata('success', 'Record Save Successfully.');
					redirect('pages/add_assignment');
		}
	
}


if($this->uri->segment(3)=='update'){
								

	$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
	$this->form_validation->set_rules('category', 'Category ', 'trim|required');
	$this->form_validation->set_rules('title', 'Product name ', 'trim|required');
	$this->form_validation->set_rules('mrp_price', 'M.R.P. ', 'trim|required');
	$this->form_validation->set_rules('selling_price', 'Selling Price ', 'trim|required');
	$this->form_validation->set_rules('description', 'Description', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
								
		} else {
	$this->db->select('*');
    $this->db->from('tbl_category');
    $this->db->where('id',$this->input->post('category'));
    $checkcatlevel = $this->db->get()->row();
     if ($checkcatlevel->cat_it==0) {
     	 	$categry=$this->input->post('category');
	     	$sub_category=0;
     } else {
     	$categry=$checkcatlevel->cat_it;
 		$sub_category=$this->input->post('category');
     }

			
				$config['upload_path']          = './../assets/products/';
                $config['allowed_types']        = 'gif|jpg|png';
            	$config['max_size'] = 1024 * 8;
        		$config['encrypt_name'] = TRUE;
        		$this->load->library('upload', $config);
        		 if (!$this->upload->do_upload('product_image'))
                {
                		$datan = array(
					      	'category'=>  $categry,
					      	'category2'=> $sub_category,
					       	'title'=>  $this->input->post('title'),
					       	'mrp_price'=>  $this->input->post('mrp_price'), 
					       	'selling_price'=>  $this->input->post('selling_price'), 
					       	'description'=>  $this->input->post('description'),
					       	'video_link'=>  $this->input->post('video_link'), 
					       	'metatitle'=>  $this->input->post('metatitle'),
					       	'metkeywords'=>  $this->input->post('metkeywords'), 
					       	'metdescription'=>  $this->input->post('metdescription'),
					       	 'advanceamt'=>  $this->input->post('advanceamt')  
						);
                } else {
                		 
			$this->db->select('*');
			$this->db->from('add_products');
			$where2 = array('id' => $this->uri->segment(4));
			$this->db->where($where2);
        	$dall_packages = $this->db->get()->row();
        			unlink('./../assets/products/'.$dall_packages->product_image);
                		$x=$this->upload->data();
                		$company_logo = $x['file_name'];
                		
                		$datan = array(
					      	'category'=>  $categry,
					      	'category2'=> $sub_category,
					       	'title'=>  $this->input->post('title'),
					       	'mrp_price'=>  $this->input->post('mrp_price'), 
					       	'selling_price'=>  $this->input->post('selling_price'), 
					       	'description'=>  $this->input->post('description'), 
					       	'product_image'=> $company_logo, 
					       	'video_link'=>  $this->input->post('video_link'), 
					       	'metatitle'=>  $this->input->post('metatitle'),
					       	'metkeywords'=>  $this->input->post('metkeywords'), 
					       	'metdescription'=>  $this->input->post('metdescription'),
					       	'advanceamt'=>  $this->input->post('advanceamt')  
						);
                	}	 
		    	$where2 = array('id'=> $this->uri->segment(4));
				$this->db->where($where2);
				$this ->db->update('add_products',$datan);
						
						$lastid = $this->uri->segment(4);
						$where = array('assignment_id'=>  $lastid);
						$this->db->where($where);
						$this->db->delete('assignment_urgency');
								
								$amount = $this->input->post('amount');
								$urgency_amt = $this->input->post('urgency_amt');
								$countamount =  count($amount);
								if ($countamount>0) {
									for($i=0;$i<$countamount;$i++){
										if ($amount[$i]!='') {
										$datan2 = array(
									      	'assignment_id'=>  $lastid,
									      	'urgency_id'=> $urgency_amt[$i],
									      	'urgency_amt'=>$amount[$i]
									      );
				                		$this ->db->insert('assignment_urgency',$datan2);
										}
									}
								}


				$this->session->set_flashdata('success', 'Record Update Successfully.');
				redirect('pages/add_assignment/edit/'.$this->uri->segment(4));
		}








								
								
	 
	
}			
		
		
		 
		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('add_products');
		$this->load->view('templates/footer');	
}	



 public function assignment_list()
 {
 	
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}	
		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}

			$this->db->select('*');
			$this->db->from('add_products');
        	$data['all_products'] = $this->db->get()->result();



if($this->uri->segment(3)=='delete'){ 
			$this->db->select('*');
			$this->db->from('add_products');
			$where2 = array('id' => $this->uri->segment(4));
			$this->db->where($where2);
        	$dall_packages= $this->db->get()->row();

        				$where = array('assignment_id'=>  $this->uri->segment(4));
						$this->db->where($where);
						$this->db->delete('assignment_urgency');
        	unlink('./../assets/products/'.$dall_packages->product_image);
						$where = array('id' => $this->uri->segment(4));
						$this->db->where($where);
						$this->db->delete('add_products');
		$this->session->set_flashdata('success', 'Record Delete Successfully.');
		redirect('pages/assignment_list');
}


 
		$data['title']=ucfirst('Admin : Manage Products');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('products_list');
		$this->load->view('templates/footer');	
 }
 public function assignmentReview()
 {
            if ($this->uri->segment(4)=='delete') {
                	$where = array('id' => $this->uri->segment(5));
						$this->db->where($where);
						$this->db->delete('tbl_review');
                    $this->session->set_flashdata('success', 'Record Delete Successfully.');
                    redirect('pages/assignmentReview/'.$this->uri->segment(3));
            }
 		 
 			if ($this->uri->segment(4)=='save') {
 				$datan = array(
			        'author'=>  $this->input->post('author'),
			        'email'=>  $this->input->post('email'),
			        'comment'=>  $this->input->post('comment'),
			        'assid'=>  $this->uri->segment(3),
			        'date_post'=> date('d/m/Y'),
			        'post_time'=> date('h:i:s A'),
			        'ratting'=>  $this->input->post('ratting'),
			        'subject'=>  $this->input->post('subject'),
			        'add_by'=>  1
			                    
				);
				$this ->db->insert('tbl_review',$datan);
				$this->session->set_flashdata('success', 'Post Successfully.');
				redirect('pages/assignmentReview/'.$this->uri->segment(3));
 			}
            $this->db->select('*');
			$this->db->from('tbl_review');
			$this->db->where('assid',$this->uri->segment(3));
			$this->db->or_where('assid',0);
        	$data['all_category'] = $this->db->get()->result();

 		$data['title']=ucfirst('Manage review ratting');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('review-ratting');
		$this->load->view('templates/footer');	
 }

/*Start Center list */
public function assignment_request()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}	
		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}



		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('assignment_request');
		$this->load->view('templates/footer');	


}



public function center_list()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}	
		 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}
			$this->db->select('*');
			$this->db->from('tbl_centers');
			$this->db->order_by('id','DESC');
        	$data['all_packages'] = $this->db->get()->result();
		
	if($this->uri->segment(3)=='delete'){
		
						$where = array('id' => $this->uri->segment(4));
						$this->db->where($where);
						$this->db->delete('tbl_centers');
$this->session->set_flashdata('success', 'Record Delete Successfully.');
redirect('pages/center_list');
	}	
		
		 
		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('center-list');
		$this->load->view('templates/footer');	
}	

public function add_center()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}	
		
			
 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}
if($this->uri->segment(3)=='edit'){ 
			$this->db->select('*');
			$this->db->from('tbl_centers');
			$where2 = array('id' => $this->uri->segment(4));
			$this->db->where($where2);
        	$data['all_packages'] = $this->db->get()->row();
			
		
}
				if($this->uri->segment(3)=='insert'){
								$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
								$this->form_validation->set_rules('name', 'Center Name ', 'trim|required');

								if ($this->form_validation->run() == FALSE) {
									
								} else {
									$datan = array(
			                    	'name'=>  $this->input->post('name'),
			                    	'status'=>  $this->input->post('status')
			                    
			                    );

			                    $this ->db->insert('tbl_centers',$datan);
								$this->session->set_flashdata('success', 'Record Save Successfully.');
								redirect('pages/add_center');
					}
	
}


if($this->uri->segment(5)=='update'){
								$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
								$this->form_validation->set_rules('name', 'Center Name ', 'trim|required');
								if ($this->form_validation->run() == FALSE) {
									
								} else {
									$datan = array(
			                    	'name'=>  $this->input->post('name'),
			                    	'status'=>  $this->input->post('status')
			                    );
								
								$where2 = array('id' => $this->uri->segment(4));
								$this->db->where($where2);
									
									
			                    $this ->db->update('tbl_centers',$datan);
								$this->session->set_flashdata('success', 'Record Update Successfully.');
								
								redirect('pages/add_center/edit/'.$this->uri->segment(4).'/update');
					}
	
}			
		
		
		 
		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('add-center');
		$this->load->view('templates/footer');	
}	


public function level_study()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}	
		
			
 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
}


			$this->db->select('*');
			$this->db->from('level_study');
			$this->db->order_by('id','DESC');
        	$data['all_category'] = $this->db->get()->result();
		
	if($this->uri->segment(3)=='delete'){
		
						$where = array('id' => $this->uri->segment(4));
						$this->db->where($where);
						$this->db->delete('level_study');
$this->session->set_flashdata('success', 'Record Delete Successfully.');
redirect('pages/level_study');
	}	
		


if($this->uri->segment(3)=='edit'){ 
			$this->db->select('*');
			$this->db->from('level_study');
			$where2 = array('id' => $this->uri->segment(4));
			$this->db->where($where2);
        	$data['all_packages'] = $this->db->get()->row();
			
		
}


				if($this->uri->segment(3)=='insert'){
								$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
								$this->form_validation->set_rules('name', 'Category Name ', 'trim|required');

								if ($this->form_validation->run() == FALSE) {
									
								} else {
if ($this->input->post('cat_it')==0) {
	$level=0;
} else {
	$level=1;
}


									$datan = array(
			                    	'name'=>  $this->input->post('name'),
			                    	'status'=>  $this->input->post('status'),
			                    	'level'=>  $level,
			                    	'cat_it'=>  $this->input->post('cat_it'),
			                    	'price'=>  $this->input->post('price')
			                    );

			                    $this ->db->insert('level_study',$datan);
								$this->session->set_flashdata('success', 'Record Save Successfully.');
								redirect('pages/level_study');
					}
	
}


if($this->uri->segment(5)=='update'){
								$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
								$this->form_validation->set_rules('name', 'Category Name ', 'trim|required');
								if ($this->form_validation->run() == FALSE) {
									
								} else {

if ($this->input->post('cat_it')==0) {
	$level=0;
} else {
	$level=1;
}



									$datan = array(
			                    	'name'=>  $this->input->post('name'),
			                    	'status'=>  $this->input->post('status'),
			                    	'level'=>  $level,
			                    	'cat_it'=>  $this->input->post('cat_it'),
			                    	'price'=>  $this->input->post('price')
			                    );
								
								$where2 = array('id' => $this->uri->segment(4));
								$this->db->where($where2);
									
									
			                    $this ->db->update('level_study',$datan);
								$this->session->set_flashdata('success', 'Record Update Successfully.');
								
								redirect('pages/level_study/edit/'.$this->uri->segment(4).'/update');
					}
	
}			
		
		
		 
		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('level_study');
		$this->load->view('templates/footer');	
}	








public function ref_styl_siisgnment()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}	
		
			
 if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
}


			$this->db->select('*');
			$this->db->from('ref_styl_siisgnment');
			$this->db->order_by('id','DESC');
        	$data['all_category'] = $this->db->get()->result();
		
	if($this->uri->segment(3)=='delete'){
		
						$where = array('id' => $this->uri->segment(4));
						$this->db->where($where);
						$this->db->delete('ref_styl_siisgnment');
$this->session->set_flashdata('success', 'Record Delete Successfully.');
redirect('pages/ref_styl_siisgnment');
	}	
		


if($this->uri->segment(3)=='edit'){ 
			$this->db->select('*');
			$this->db->from('ref_styl_siisgnment');
			$where2 = array('id' => $this->uri->segment(4));
			$this->db->where($where2);
        	$data['all_packages'] = $this->db->get()->row();
			
		
}


				if($this->uri->segment(3)=='insert'){
								$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
								$this->form_validation->set_rules('name', 'Category Name ', 'trim|required');

								if ($this->form_validation->run() == FALSE) {
									
								} else {
if ($this->input->post('cat_it')==0) {
	$level=0;
} else {
	$level=1;
}


									$datan = array(
			                    	'name'=>  $this->input->post('name'),
			                    	'status'=>  $this->input->post('status'),
			                    	'level'=>  $level,
			                    	'cat_it'=>  $this->input->post('cat_it')
			                    
			                    );

			                    $this ->db->insert('ref_styl_siisgnment',$datan);
								$this->session->set_flashdata('success', 'Record Save Successfully.');
								redirect('pages/ref_styl_siisgnment');
					}
	
}


if($this->uri->segment(5)=='update'){
								$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
								$this->form_validation->set_rules('name', 'Category Name ', 'trim|required');
								if ($this->form_validation->run() == FALSE) {
									
								} else {

if ($this->input->post('cat_it')==0) {
	$level=0;
} else {
	$level=1;
}



									$datan = array(
			                    	'name'=>  $this->input->post('name'),
			                    	'status'=>  $this->input->post('status'),
			                    	'level'=>  $level,
			                    	'cat_it'=>  $this->input->post('cat_it')
			                    );
								
								$where2 = array('id' => $this->uri->segment(4));
								$this->db->where($where2);
									
									
			                    $this ->db->update('ref_styl_siisgnment',$datan);
								$this->session->set_flashdata('success', 'Record Update Successfully.');
								
								redirect('pages/ref_styl_siisgnment/edit/'.$this->uri->segment(4).'/update');
					}
	
}			
		
		
		 
		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('ref_styl_siisgnment');
		$this->load->view('templates/footer');	
}	







public function category()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}	
		
			
 	if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
		redirect('pages/logout');						
	}
	$this->db->select('*');
	$this->db->from('tbl_category');
	$this->db->order_by('id','DESC');
    $data['all_category'] = $this->db->get()->result();
		
	if($this->uri->segment(3)=='delete'){
		$where = array('id' => $this->uri->segment(4));
		$this->db->where($where);
		$this->db->delete('tbl_category');
		$this->session->set_flashdata('success', 'Record Delete Successfully.');
		redirect('pages/category');
	}	
	if($this->uri->segment(3)=='edit'){ 
			$this->db->select('*');
			$this->db->from('tbl_category');
			$where2 = array('id' => $this->uri->segment(4));
			$this->db->where($where2);
        	$data['all_packages'] = $this->db->get()->row();
	}
	if($this->uri->segment(3)=='insert'){
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('name', 'Category Name ', 'trim|required');
			if ($this->form_validation->run() == FALSE) {
			} else {
				if ($this->input->post('cat_it')==0) {
					$level=0;
				} else {
					$level=1;
				}
			$datan = array(
               	'name'=>  $this->input->post('name'),
               	'status'=>  $this->input->post('status'),
               	'level'=>  $level,
               	'cat_it'=>  $this->input->post('cat_it')
            );

			                    $this ->db->insert('tbl_category',$datan);
								$this->session->set_flashdata('success', 'Record Save Successfully.');
								redirect('pages/category');
					}
	
}


if($this->uri->segment(5)=='update'){
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('name', 'Category Name ', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
									
		} else {

		if ($this->input->post('cat_it')==0) {
			$level=0;
		} else {
			$level=1;
		}
		$datan = array(
			'name'=>  $this->input->post('name'),
			'status'=>  $this->input->post('status'),
			'level'=>  $level,
			'cat_it'=>  $this->input->post('cat_it')
		);
		$where2 = array('id' => $this->uri->segment(4));
		$this->db->where($where2);
									
		$this ->db->update('tbl_category',$datan);
		$this->session->set_flashdata('success', 'Record Update Successfully.');
		redirect('pages/category/edit/'.$this->uri->segment(4).'/update');
	}
	
}			
		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('add-category');
		$this->load->view('templates/footer');	
}	





public function Urgency()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}	
		
			
 	if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
		redirect('pages/logout');						
	}
		$this->db->select('*');
		$this->db->from('urgency');
		$this->db->order_by('id','DESC');
	    $data['all_Urgency'] = $this->db->get()->result();
		
	if($this->uri->segment(3)=='delete'){
		$where = array('id' => $this->uri->segment(4));
		$this->db->where($where);
		$this->db->delete('urgency');
		$this->session->set_flashdata('success', 'Record Delete Successfully.');
		redirect('pages/Urgency');
	}	
	if($this->uri->segment(3)=='edit'){ 
			$this->db->select('*');
			$this->db->from('urgency');
			$where2 = array('id' => $this->uri->segment(4));
			$this->db->where($where2);
        	$data['all_packages'] = $this->db->get()->row();
	}
	if($this->uri->segment(3)=='insert'){
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('name', 'Category Name ', 'trim|required');
			if ($this->form_validation->run() == FALSE) {
			} else {
				if ($this->input->post('cat_it')==0) {
					$level=0;
				} else {
					$level=1;
				}
			$datan = array(
               	'name'=>  $this->input->post('name'),
               	'status'=>  $this->input->post('status'),
               	'level'=>  $level,
               	'cat_it'=>  $this->input->post('cat_it')
            );

			                    $this ->db->insert('urgency',$datan);
								$this->session->set_flashdata('success', 'Record Save Successfully.');
								redirect('pages/Urgency');
					}
	
}


if($this->uri->segment(5)=='update'){
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('name', 'Category Name ', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
									
		} else {

		if ($this->input->post('cat_it')==0) {
			$level=0;
		} else {
			$level=1;
		}
		$datan = array(
			'name'=>  $this->input->post('name'),
			'status'=>  $this->input->post('status'),
			'level'=>  $level,
			'cat_it'=>  $this->input->post('cat_it')
		);
		$where2 = array('id' => $this->uri->segment(4));
		$this->db->where($where2);
									
		$this ->db->update('urgency',$datan);
		$this->session->set_flashdata('success', 'Record Update Successfully.');
		redirect('pages/Urgency/edit/'.$this->uri->segment(4).'/update');
	}
	
}			
		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('Urgency');
		$this->load->view('templates/footer');	
}	


public function category_samples()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');

		}		
 	if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
		redirect('pages/logout');						
	}
	$this->db->select('*');
	$this->db->from('category_samples');
	$this->db->order_by('id','DESC');
    $data['all_category'] = $this->db->get()->result();
		
	if($this->uri->segment(3)=='delete'){
		$where = array('id' => $this->uri->segment(4));
		$this->db->where($where);
		$this->db->delete('category_samples');
		$this->session->set_flashdata('success', 'Record Delete Successfully.');
		redirect('pages/category_samples');
	}	


	if($this->uri->segment(3)=='edit'){ 
			$this->db->select('*');
			$this->db->from('category_samples');
			$where2 = array('id' => $this->uri->segment(4));
			$this->db->where($where2);
        	$data['all_packages'] = $this->db->get()->row();
	}
	if($this->uri->segment(3)=='insert'){
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('name', 'Category Name ', 'trim|required');
			if ($this->form_validation->run() == FALSE) {
			} else {
				if ($this->input->post('cat_it')==0) {
					$level=0;
				} else {
					$level=1;
				}

			$cat_first=substr($this->input->post('name'),0,1);
			$datan = array(
               	'name'=>  $this->input->post('name'),
               	'status'=>  $this->input->post('status'),
               	'level'=>  $level,
               	'cat_it'=>  $this->input->post('cat_it'),
               	'cat_first'=>$cat_first
            );
			$this ->db->insert('category_samples',$datan);
			$this->session->set_flashdata('success', 'Record Save Successfully.');
			redirect('pages/category_samples');
			}
	}





if($this->uri->segment(5)=='update'){
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('name', 'Category Name ', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
									
		} else {

		if ($this->input->post('cat_it')==0) {
			$level=0;
		} else {
			$level=1;
		}
		$cat_first=substr($this->input->post('name'),0,1);
		$datan = array(
			'name'=>  $this->input->post('name'),
			'status'=>  $this->input->post('status'),
			'level'=>  $level,
			'cat_it'=>  $this->input->post('cat_it'),
            'cat_first'=>$cat_first
		);
		$where2 = array('id' => $this->uri->segment(4));
		$this->db->where($where2);
									
		$this ->db->update('category_samples',$datan);
		$this->session->set_flashdata('success', 'Record Update Successfully.');
		redirect('pages/category_samples/edit/'.$this->uri->segment(4).'/update');
	}
	
}			
		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('category_samples');
		$this->load->view('templates/footer');	
}	


 
public function add_samples()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');

		}		
 	if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
		redirect('pages/logout');						
	}
	$this->db->select('*');
	$this->db->from('category_samples');
	$this->db->order_by('id','DESC');
    $data['all_category'] = $this->db->get()->result();
		
	if($this->uri->segment(3)=='delete'){
		$where = array('id' => $this->uri->segment(4));
		$this->db->where($where);
		$this->db->delete('add_samples');
		$this->session->set_flashdata('success', 'Record Delete Successfully.');
		redirect('pages/add_samples');
	}	


	if($this->uri->segment(3)=='edit'){ 
			$this->db->select('*');
			$this->db->from('add_samples');
			$where2 = array('id' => $this->uri->segment(4));
			$this->db->where($where2);
        	$data['all_packages'] = $this->db->get()->row();
	}
	if($this->uri->segment(3)=='insert'){
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('name', 'Category Name ', 'trim|required');
			if ($this->form_validation->run() == FALSE) {
			} else {
		
			$datan = array(
               	'name'=>  $this->input->post('name'),
               	'visibl_text'=>  $this->input->post('visibl_text'),
               	'hide_text'=>  $this->input->post('hide_text'),
               	'cat_it'=>  $this->input->post('cat_it')
            );
			$this ->db->insert('add_samples',$datan);
			$this->session->set_flashdata('success', 'Record Save Successfully.');
			redirect('pages/add_samples');
			}
	}





if($this->uri->segment(5)=='update'){
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('name', 'Category Name ', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
									
		} else {

		$cat_first=substr($this->input->post('name'),0,1);
		$datan = array(
			'name'=>  $this->input->post('name'),
            'visibl_text'=>  $this->input->post('visibl_text'),
            'hide_text'=>  $this->input->post('hide_text'),
            'cat_it'=>  $this->input->post('cat_it')
		);
		$where2 = array('id' => $this->uri->segment(4));
		$this->db->where($where2);
									
		$this ->db->update('add_samples',$datan);
		$this->session->set_flashdata('success', 'Record Update Successfully.');
		redirect('pages/add_samples/edit/'.$this->uri->segment(4).'/update');
	}
	
}			
		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('add_samples');
		$this->load->view('templates/footer');	
}	


public function samples_list(){




	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');

		}		
 	if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
		redirect('pages/logout');						
	}
	$this->db->select('*');
	$this->db->from('add_samples');
	$this->db->order_by('id','DESC');
    $data['all_category'] = $this->db->get()->result();
		
	if($this->uri->segment(3)=='delete'){
		$where = array('id' => $this->uri->segment(4));
		$this->db->where($where);
		$this->db->delete('add_samples');
		$this->session->set_flashdata('success', 'Record Delete Successfully.');
		redirect('pages/samples_list');
	}	

		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('samples_list');
		$this->load->view('templates/footer');	



}







public function print_order()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}	
		
			
 		if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}

			$this->db->select('*');
			$this->db->from('tbl_myorder');
			$this->db->where('order_id', $this->uri->segment(3));
        	$data['order_details'] = $this->db->get()->row();

		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('print_order');
		$this->load->view('templates/footer');	


}


public function payment()
 {
 		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}	
		
			
 		if (!isset($_SESSION['login_by_sohan']['login_by_sohan'])){
				redirect('pages/logout');						
		}
$vla_url = base_url().'pages/'.$this->uri->segment(6);




		if ($this->uri->segment(3)=='accept') {



				$orderid = $this->uri->segment(4);
				$user = $this->uri->segment(5);
				$heandel_by = $_COOKIE["login_by_sohan"];

			$this->db->select('*');
			$this->db->from('tbl_myorder');
			$this->db->where('order_id', $orderid);
        	$order_details = $this->db->get()->row();
if ($order_details->order_type==0) {
	
	 				/*New Order updation details*/
	$order_status=1; 
	$data = array( 
		'order_status'=>$order_status,
		'declinereson' => '',
		'userid' => $_COOKIE["login_by_sohan"],
		'payment_rcv_date'=>date('d-m-Y h:i:s A')
	);
	 $this->db->where('order_id', $orderid);
	 $this->db->update('tbl_myorder',$data);
	$order_details->total_amount;
	$master=$order_details->total_amount*1/3; 

 $namount=$master;
/*Direct Admin payment rcv*/
	
	 $this->db->select('*');
	$this->db->from('tbl_members');
	$this->db->order_by('dum_id','ASC');
	$this->db->limit(1);
	$admin = $this->db->get()->row();
	$adminwallet = $admin->wallet+$master;
 	$dataa = array( 
		'wallet'=>$adminwallet
	);
	$this->db->where('id', $admin->id);
	$this->db->update('tbl_members',$dataa);
	$dataad = array(  
		'income_to'=> $admin->id, 'income_by'=> $user, 'Income_mode'=> 'NEW ORDER', 'amount'=>$master, 'status'=> 1, 'payment_recived_by'=> $_COOKIE["login_by_sohan"], 'order_id'=> $orderid
		);  
		$this->db->insert('tbl_income_reports',$dataad);  
/*Direct admin payment rcv*/

	$this->db->select('*');
	$this->db->from('tbl_members');
	$this->db->where('id', $user);
	$member = $this->db->get()->row();
	$sponsor_id=$member->sponsor_id;
$x=0;
 $i=1;
	$j=11;
	while ($i<=11) {
		if ($i==1) {



/*start of just upper level member user */	
if ($sponsor_id==0) {
			$this->db->select('*');
			$this->db->from('tbl_members');
			$this->db->where('sponsor_id', $sponsor_id);
			$member = $this->db->get()->row();
			$sponsor_id=$member->sponsor_id;
} else {
			$this->db->select('*');
			$this->db->from('tbl_members');
			$this->db->where('id', $sponsor_id);
			$member = $this->db->get()->row();
			$sponsor_id=$member->sponsor_id;
}
			


			if ($member->status==0) {
			} else {

				$memberwallet = $member->wallet+$master;
			 	$dataa = array( 
					'wallet'=>$memberwallet
				);
				$this->db->where('id', $member->id);
				$this->db->update('tbl_members',$dataa);
				$dataad = array(  
					'income_to'=> $member->id, 'income_by'=> $user, 'Income_mode'=> 'NEW ORDER', 'amount'=>$master, 'status'=> 1, 'payment_recived_by'=> $_COOKIE["login_by_sohan"], 'order_id'=> $orderid
					);  
					$this->db->insert('tbl_income_reports',$dataad);
						$j--; $i++; 
			}
	

	} else {


		if ($sponsor_id==0) {
			$this->db->select('*');
			$this->db->from('tbl_members');
			$this->db->where('sponsor_id', $sponsor_id);
			$nbn=$this->db->get();
			$member = $nbn->row();

				$y= $master-$x;
				$adminwallet = $member->wallet+$y;
			 	$dataa = array( 
					'wallet'=>$adminwallet
				);
				$this->db->where('id', $member->id);
				$this->db->update('tbl_members',$dataa);
				$dataad = array(  
					'income_to'=> $member->id, 'income_by'=> $user, 'Income_mode'=> 'NEW ORDER', 'amount'=>$y, 'status'=> 1, 'payment_recived_by'=> $_COOKIE["login_by_sohan"], 'order_id'=> $orderid
					);  
					$this->db->insert('tbl_income_reports',$dataad); 
redirect('pages/'.$this->uri->segment(6));
			 
		} else {
			$this->db->select('*');
			$this->db->from('tbl_members');
			$this->db->where('id', $sponsor_id);
			$nbn=$this->db->get();
			$member = $nbn->row();

			if ($member->status==0) {
				$sponsor_id=$member->sponsor_id;
				
			} else {


				if ($member->sponsor_id==0) {
					$y= $master-$x;
					$adminwallet = $member->wallet+$y;
			 		$dataa = array( 
						'wallet'=>$adminwallet
						);
					$this->db->where('id', $member->id);
					$this->db->update('tbl_members',$dataa);
					$dataad = array(  
					'income_to'=> $member->id, 'income_by'=> $user, 'Income_mode'=> 'NEW ORDER', 'amount'=>$y, 'status'=> 1, 'payment_recived_by'=> $_COOKIE["login_by_sohan"], 'order_id'=> $orderid
					);  
					$this->db->insert('tbl_income_reports',$dataad); 
					redirect('pages/'.$this->uri->segment(6));
				} else {
					$payme = $master*$j/100;
				$x=$x+$payme;
				$master = $master;
				$adminwallet = $member->wallet+$payme;
				$namount = $master-$payme;
			 	$dataa = array( 
					'wallet'=>$adminwallet
				);
				$this->db->where('id', $member->id);
				$this->db->update('tbl_members',$dataa);
				
				$dataad = array(  
					'income_to'=> $member->id, 'income_by'=> $user, 'Income_mode'=> 'NEW ORDER', 'amount'=>$payme, 'status'=> 1, 'payment_recived_by'=> $_COOKIE["login_by_sohan"], 'order_id'=> $orderid
					);  
					$this->db->insert('tbl_income_reports',$dataad); 

					$sponsor_id=$member->sponsor_id;
				}
				
				
				



		}


		}

		
	$j--; $i++;

	}




	}
echo "<script>
			window.location.href='$vla_url';
</script>";

	 				/*New Order updation details*/

} else {


	$order_status=1; 
	$data = array( 
		'order_status'=>$order_status,
		'declinereson' => '',
		'userid' => $_COOKIE["login_by_sohan"],
		'payment_rcv_date'=>date('d-m-Y h:i:s A')
	);
	 $this->db->where('order_id', $orderid);
	 $this->db->update('tbl_myorder',$data);


//echo 'RE PURCHASING';

 $order_details->total_amount;
/*####################################################################################
			 FOR ADMIN
####################################################################################*/
$adminamount = $order_details->total_amount*75/100;

 	$this->db->select('*');
	$this->db->from('tbl_members');
	$this->db->order_by('dum_id','ASC');
	$this->db->limit(1);
	$admin = $this->db->get()->row();
	$adminwallet = $admin->wallet+$adminamount;
 	$dataa = array( 
		'wallet'=>$adminwallet
	);
	$this->db->where('id', $admin->id);
	$this->db->update('tbl_members',$dataa);
	$dataad = array(  
		'income_to'=> $admin->id, 'income_by'=> $user, 'Income_mode'=> 'NEW ORDER', 'amount'=>$adminamount, 'status'=> 1, 'payment_recived_by'=> $_COOKIE["login_by_sohan"], 'order_id'=> $orderid
		);  
		$this->db->insert('tbl_income_reports',$dataad); 

/*####################################################################################
			 FOR ADMIN
####################################################################################*/


$distribut= $order_details->total_amount-$adminamount;


/*####################################################################################
			 FOR 10% distribution
####################################################################################*/
$this->db->select('*');
$this->db->from('tbl_members');
$this->db->where('id', $user);
$member = $this->db->get()->row();
$sponsor_id=$member->sponsor_id;


$x=0;
 $i=1;
	$j=10;
	while ($i<=10) {




		if ($sponsor_id==0) {
			$this->db->select('*');
			$this->db->from('tbl_members');
			$this->db->where('sponsor_id', $sponsor_id);
			$member = $this->db->get()->row();
			$sponsor_id=$member->sponsor_id;

			$y= $distribut-$x;
				$adminwallet = $member->wallet+$y;
			 	$dataa = array( 
					'wallet'=>$adminwallet
				);
				$this->db->where('id', $member->id);
				$this->db->update('tbl_members',$dataa);
				$dataad = array(  
					'income_to'=> $member->id, 'income_by'=> $user, 'Income_mode'=> 'NEW ORDER', 'amount'=>$y, 'status'=> 1, 'payment_recived_by'=> $_COOKIE["login_by_sohan"], 'order_id'=> $orderid
					);  
					$this->db->insert('tbl_income_reports',$dataad); 

			redirect('pages/'.$this->uri->segment(6));
		} else {
			$this->db->select('*');
			$this->db->from('tbl_members');
			$this->db->where('id', $sponsor_id);
			$member = $this->db->get()->row();
			$sponsor_id=$member->sponsor_id;


			if ($member->status==0) {
				$sponsor_id=$member->sponsor_id;
				
			} else {


				if ($member->sponsor_id==0) {
					
					$y= $distribut-$x;
				$adminwallet = $member->wallet+$y;
			 	$dataa = array( 
					'wallet'=>$adminwallet
				);
				$this->db->where('id', $member->id);
				$this->db->update('tbl_members',$dataa);
				$dataad = array(  
					'income_to'=> $member->id, 'income_by'=> $user, 'Income_mode'=> 'NEW ORDER', 'amount'=>$y, 'status'=> 1, 'payment_recived_by'=> $_COOKIE["login_by_sohan"], 'order_id'=> $orderid
					);  
					$this->db->insert('tbl_income_reports',$dataad); 

			redirect('pages/'.$this->uri->segment(6));

				} else {
				$payme = $distribut*10/100;
				$x=$x+$payme;
				$distribut = $distribut;
				$adminwallet = $member->wallet+$payme;
			 
			 	$dataa = array( 
					'wallet'=>$adminwallet
				);
				$this->db->where('id', $member->id);
				$this->db->update('tbl_members',$dataa);
				
				$dataad = array(  
					'income_to'=> $member->id, 'income_by'=> $user, 'Income_mode'=> 'RE PURCHASING', 'amount'=>$payme, 'status'=> 1, 'payment_recived_by'=> $_COOKIE["login_by_sohan"], 'order_id'=> $orderid
					);  
					$this->db->insert('tbl_income_reports',$dataad); 

					$sponsor_id=$member->sponsor_id;
				
				
				}
				


				}

		}
			$j--; $i++;	



	}
echo "<script>
			window.location.href='$vla_url';
</script>";

/*####################################################################################
			 FOR 10% distribution
####################################################################################*/

 




}






		} else {
			redirect('pages/illegal_access');
		}



 }









public function getorderdetails()
{
	//echo $this->input->post('id');

		$this->db->select('*');
        $this->db->from('tbl_myorder');
        $this->db->where('order_id',$this->input->post('id'));
        $set = $this->db->get();
        $my_myorder= $set->row();


        $this->db->select('*');
        $this->db->from('tbl_members');
        $this->db->where('id',$my_myorder->id);
        $setu = $this->db->get();
        $my_user= $setu->row();


        





        	$this->db->select('*');
            $this->db->from('mypackage');
            $this->db->where('order_id',$this->input->post('id'));
            $this->db->group_by('product_id');
            $my_pacck = $this->db->get();
         echo $table="<table class='table table-responsive'><tbody>";
         echo $table="<tr>
         		<td colspan='2'>Name :  $my_user->name</td>
         		<td colspan='2'>Profile Id :  $my_user->id</td>
         </tr>";
         echo $table = "<tr>
         	<th>Image</th>
         	<th>Title</th>
         	<th>Amount</th>
         	<th>Quan.</th>
         </tr>
         ";

		$this->db->select('*');
        $this->db->from('tbl_neft_bank_details');
        $this->db->where('dum_id',1);
        $bank_details = $this->db->get()->row();

$gtotal=0;

            foreach ($my_pacck->result() as $keymy_pacck) {
        $this->db->select('*');
        $this->db->from('add_products');
        $this->db->where('id', $keymy_pacck->product_id);
        $my_product = $this->db->get()->row();

$this->db->select('*');
$this->db->from('mypackage');
//$this->db->where('id', $_SESSION['login']['mlm_id']);
$this->db->where('order_id',$keymy_pacck->order_id);
$this->db->where('product_id',$keymy_pacck->product_id);
$myquant = $this->db->get()->num_rows();
 $gtotal=$gtotal+$my_product->selling_price*$myquant;
            	echo $table="<tr>
            			<td><img src='".base_url()."../assets/products/$my_product->product_image' style='max-width:30px;' /></td>
            			<td>$my_product->title</td>
            			<td>$my_product->selling_price</td>
            			<td>$myquant</td>
            	</tr>";
            }
            
            
              if($my_myorder->order_type==1){
              $namt = $gtotal*33/100;
              $values = "Rs. <del style='color:red;'>$gtotal</del> <span style='color:green;'>$namt</span> <span>(67% Off on re purchasing)</span>";
          }   else {
              $values=$gtotal;
          }
            
          echo "
          <tr>
            <td colspan='2'>Total</td>
            <td colspan='2'>$values</td>
          </tr>
          
          ";  
            
            
            
            if ($my_myorder->pyaslip=='') {
            	echo $table="
			<tr>
				<td colspan='4'><h4> No Deposit Amount</h4>
				</td>
			</tr>";
            } else {

            	$x=$this->uri->segment(4);
            		echo $table="

			<tr>
				<td colspan='4'><h4>Details of RTGS/NEFT/Online Diposit Amount</h4></td>
			</tr>

			<tr>
				<td>Transaction Date </td>
				<td>$my_myorder->paydate</td>
				<td>Transaction Amount</td>
				<td>$my_myorder->transection_amt</td>
			</tr>

			<tr>
				<td>Transaction id </td>
				<td colspan='2'>$my_myorder->transection_id</td>
				 <td>";
				 	
	if ($my_myorder->order_status==1) {
			echo 'Received Date : ';
			echo $my_myorder->payment_rcv_date;
	} else {			 	 

echo "<a href='".base_url()."pages/payment/accept/$my_myorder->order_id/$my_myorder->id/$x' class='bt btn-success btn-sm pull-right'>Accept</a>";


if ($my_myorder->order_status!=3) {
 
			 	echo "<a href='javascript:void();'  data-dismiss='modal' data-toggle='modal' data-target='#memberDetails2' onclick='paymentdecline($my_myorder->order_id);' class='bt btn-danger btn-sm pull-right'>Decline</a>
				 	";
}
	}
				echo " </td>
			</tr> ";
if ($my_myorder->order_status==3) {
	echo "<tr>
			<td colspan='4' class='bt btn-xs btn-danger'>
				Decline by $my_myorder->userid, with the Reason - $my_myorder->declinereson
			</td>
	</tr>";
}




			echo "<tr>
				<td colspan='4'>
<iframe src='".base_url()."../member/uploads/bank/".$my_myorder->pyaslip."' style='width:100%; height:400px;' frameborder='0'></iframe>
				</td>
			</tr>




			";



            }


			 
            echo $table="</tbody></table>";
}








public function logout(){
	
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		 delete_cookie('login_by_sohan'); 
		 delete_cookie('login_rol'); 
		 redirect('pages/home');
}




}
