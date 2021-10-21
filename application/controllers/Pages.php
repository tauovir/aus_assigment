<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pages extends CI_Controller {
	public function __construct()
	{ 
		parent::__construct();
	 	    $this->load->helper('text');
         	$this->load->helper('cookie','url'); 
        	$this->load->library('encrypt');
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

        $data['countryCode']=$ipdat->geoplugin_countryCode; 	
        $data['currencyCode']=$ipdat->geoplugin_currencyCode; 
        $data['currencySymbol']=$ipdat->geoplugin_currencySymbol; 
        $data['regionCode']=$ipdat->geoplugin_regionCode; 

		if (!isset($ipdat)) {
		
        $timezone = \DateTimeZone::listIdentifiers(\DateTimeZone::PER_COUNTRY,$ipdat->geoplugin_countryCode);
		date_default_timezone_set($timezone[0]); 
		} else {
			date_default_timezone_set("Asia/Kolkata"); 
		}
		
       
		$this->db->select('*');
		$this->db->from('configuration_general');
		$this->db->where('id=1');
		$set = $this->db->get();
		$data['webconfig']= $set->row();
		
		
 		if (isset($_COOKIE["wssinfotech_login"])) {
			$this->db->select('*');
			$this->db->from('tbl_members');
			$this->db->where('email',$_COOKIE["wssinfotech_login"]);
			$set = $this->db->get(); 
			
	    $rowcountdata = 	$set->num_rows();	
		if($rowcountdata==0){
		   
        	delete_cookie('wssinfotech_login'); 
        	redirect('login');
		}	
			$data['user_detail'] = $set->row();

	$user_detail = $set->row();
	$this->db->select('*');
    $this->db->from('tbl_income_reports');
    $this->db->order_by('id','DESC');
    $s = array('income_to' =>$user_detail->id);
    $this->db->where($s);
    $all_income=$this->db->get()->result();
    $dr=0.00;
    $cr=0.00;
    $cty=1;
    foreach($all_income as $orderlist){
      if ($orderlist->payment_dr_cr=='cr') {
        $cr=$cr+$orderlist->amount;
      } else {
        $dr=$dr+$orderlist->amount;
      }
    }
    $data['totalwallet'] = $cr-$dr;
		




		} else {
			$data['totalwallet'] =0;
		}

$this->db->select('*');
$this->db->from('tbl_web_images');
$this->db->where('type',1);
$this->db->order_by('id','DESC');
$this->db->limit(1);
$set = $this->db->get();
$data['banner_image'] = $set->row();


$this->db->select('*');
$this->db->from('tbl_web_images');
$this->db->where('type',11);
$this->db->order_by('id','DESC');
$this->db->limit(1);
$set = $this->db->get();
$data['why_choose_u'] = $set->row();


$this->db->select('*');
$this->db->from('tbl_web_images');
$this->db->where('type',3);
$this->db->order_by('id','DESC');
$this->db->limit(1);
$set = $this->db->get();
$data['offer_home_image_count']=$set->num_rows();
$data['offer_home_image'] = $set->row();


$this->db->select('*');
$this->db->from('tbl_web_images');
$this->db->where('type',15);
$this->db->order_by('id','DESC');
$this->db->limit(1);
$set_footer = $this->db->get();
$data['footer_logo'] = $set_footer->row();


$this->db->select('*');
$this->db->from('testimonials');
$set = $this->db->get();
$data['testimonial'] = $set->result();

		$this->db->select('*');
        $this->db->from('tbl_pages');
        $s = array('pagid'=>2);
        $this->db->where($s);
        $data['vision']=$this->db->get()->row();
		
		$this->db->select('*');
        $this->db->from('tbl_pages');
        $s10 = array('pagid'=>10);
        $this->db->where($s10);
        $data['student_review']=$this->db->get()->row();


		$this->db->select('*');
        $this->db->from('tbl_pages');
        $s = array('pagid'=>3);
        $this->db->where($s);
        $data['mission']=$this->db->get()->row();

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
$catrc = $this->db->get();
$data['catrow'] = $catrc->num_rows();
$data['all_category'] = $catrc->result();


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
$this->db->from('add_products');
$this->db->order_by('id','ASC');
$this->db->limit(1);
$first_assignment  = $this->db->get()->row();

	$this->db->select('*');
	$this->db->from('assignment_urgency');
	$this->db->where('assignment_id',$first_assignment->id);
    $all_Urgency = $this->db->get()->result();
    $urgency_opt='';
   		foreach ($all_Urgency as $urgency_data) {
   			$this->db->select('*');
			$this->db->from('urgency');
			$this->db->where('id',$urgency_data->urgency_id);
        	$urgency = $this->db->get()->row();
       	$urgency_opt = $urgency_opt."<option value='".$urgency_data->id."'>".$urgency->name."</option>";
   		}
   		$data['urgency_opt']=$urgency_opt;
 

$this->db->select('*');
$this->db->from('highlighted');
$this->db->order_by('id','ASC');
$this->db->limit(6);
$set = $this->db->get();
$data['highlighted_data'] = $set->result();

$this->db->select('*');
$this->db->from('highlighted');
$this->db->order_by('id','ASC');
$set = $this->db->get();
$data['highlighted_datao'] = $set->result();



$this->db->select('*');
$this->db->from('highlighted2');
$this->db->order_by('id','ASC');
$this->db->limit(6);
$set = $this->db->get();
$data['highlighted_data2'] = $set->result();
	
	$this->db->select('*');
	$this->db->from('highlighted2');
	$this->db->order_by('id','ASC');
	$this->db->limit(6);
	$set = $this->db->get();
	$data['highlighted_data2'] = $set->result();

			$this->db->select('*');
	        $this->db->from('tbl_review');
	        //$s11333xc = array('add_by'=>1);
	        //$this->db->where($s11333xc);
	        $data['student_re']=$this->db->get()->result();

		$this->db->select('*');
        $this->db->from('tbl_pages');
        $s = array('pagid'=>1);
        $this->db->where($s);
        $data['about_data']=$this->db->get()->row();
		$this->db->select('*');
        $this->db->from('tbl_pages');
        $swhy = array('pagid'=>22);
        $this->db->where($swhy);
        $data['whyassignment']=$this->db->get()->row();

		$this->db->select('*');
        $this->db->from('tbl_pages');
        $s = array('pagid'=>8);
        $this->db->where($s);
        $data['about_data2']=$this->db->get()->row();

		$this->db->select('*');
        $this->db->from('tbl_pages');
        $s3 = array('pagid'=>9);
        $this->db->where($s3);
        $data['about_data23']=$this->db->get()->row();


        $this->db->select('*');
        $this->db->from('tbl_pages');
        $s4 = array('pagid'=>21);
        $this->db->where($s4);
        $data['about_data24']=$this->db->get()->row();

        $this->db->select('*');
        $this->db->from('tbl_pages');
        $s25 = array('pagid'=>11);
        $this->db->where($s25);
        $data['about_data25']=$this->db->get()->row();


 		$this->db->select('*');
	    $this->db->from('tbl_review');
	    $review= $this->db->get();
	    $rcou=$review->num_rows();
		$resut=$review->result();
		$trev=0.00;
		$fivstar=0;
		$forstar=0;
		$threestar=0;
		$twstar=0;
		$onestar=0;
		    foreach ($resut as $rdata) {
		      $trev=$trev+$rdata->ratting;

		      if ($rdata->ratting>0 && $rdata->ratting<=1) {
		      	$onestar++;
		      } else if ($rdata->ratting>1 && $rdata->ratting<=2) {
		      	$twstar++;
		      } else if ($rdata->ratting>2 && $rdata->ratting<=3) {
		      	$threestar++;
		      } else if ($rdata->ratting>3 && $rdata->ratting<=4) {
		      	$forstar++;
		      }  else if ($rdata->ratting>4) {
		      	$fivstar++;
		      }
			}
			 
		if(isset($_GET['code']))
		{
	    	$this->googleplus->getAuthenticate();
			$this->session->set_userdata('login',true);
			$this->session->set_userdata('userProfile',$this->googleplus->getUserInfo());
			redirect('pages/profileGoogle');
		}
		
		$data['loginURL'] = $this->googleplus->loginURL();
			$data['tcount']=$rcou;
			$data['onestar']=$onestar;
			$data['twstar']=$twstar;
			$data['threestar']=$threestar;
			$data['forstar']=$forstar;
			$data['fivstar']=$fivstar;
		$data['reviewavg']=round($trev/$rcou,2);
		$this->load->view('pages/new', $data); 
} 
public function geturgency()
{
	$this->db->select('*');
	$this->db->from('assignment_urgency');
	$this->db->where('assignment_id',$this->uri->segment(3));
    $all_Urgency = $this->db->get()->result();
   		foreach ($all_Urgency as $urgency_data) {
   			$this->db->select('*');
			$this->db->from('urgency');
			$this->db->where('id',$urgency_data->urgency_id);
        	$urgency = $this->db->get()->row();
       	echo "<option value='".$urgency_data->id."'>".$urgency->name."</option>";
   		}
}

public function noInternetConnection(){
        $data['title']=ucfirst('No Internet Connection');
		$this->load->view('pages/noConnection');
}


public function calculateprice() 
{
	$assignment = $this->uri->segment(3);
	$deadline = $this->uri->segment(4);
	$paper = $this->uri->segment(5);
	$inr_doller_rate = $this->uri->segment(6);
	$currencyCode = $this->uri->segment(7);
	$this->db->select('*');
	$this->db->from('assignment_urgency');
	$this->db->where('id',$this->uri->segment(4));
	$this->db->where('assignment_id',$this->uri->segment(3));
    $pricedaat = $this->db->get()->row();
    $amount = $pricedaat->urgency_amt*$paper;
    
   /* if($currencyCode=='INR'){
        echo 'INR '.$amount*$inr_doller_rate;
    } else { echo '$'.$amount;} */ 
 ?>
<input type="hidden" name="strid" id="strid" value="<?=$pricedaat->urgency_amt;?>">
 <?php 
    echo '$<span id="text-amt">'.$amount.'</span>';

}

public function loginWithGoogle()
{
    	if(isset($_GET['code']))
		{
			$this->googleplus->getAuthenticate();
			$this->session->set_userdata('login',true);
			$this->session->set_userdata('userProfile',$this->googleplus->getUserInfo());
			redirect('Pages/profileGoogle');
		}
}
    
public function profileGoogle(){
	if($this->session->userdata('login') == true)
	{
		$data['profileData'] = $this->session->userdata('userProfile');
		$this->load->view('Pages/profileGoogle',$data);
	}
	else
	{
		redirect('');
	}
}
public function logoutGoogle(){
	$this->session->sess_destroy();
	$this->googleplus->revokeToken();
	redirect('');
}

public function popupmodal()
{
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
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->db->select('*');
		$this->db->from('add_products');
	 	$this->db->like('title',$this->input->post('str'),'both');
		$this->db->order_by('id','DESC');
	echo "<div  class='list-group'>";
	foreach($this->db->get()->result() as $data){
		echo "
		    <button type='button' class='list-group-item list-group-item-action' value='$data->title' onclick='getthisvalues(this.value,$data->id);'>$data->title</button>
		    "; 
		}
		echo "</div>";
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
		$data['menus']='';
 		$this->load->helper('cookie','url'); 
 		$this->load->library('encrypt');
		log_message('error', 'Some variable did not contain a value.');
		$data['title']=ucfirst('404 Page Not Found');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/error404');
		$this->load->view('templates/footer');
 	}

	public function home()
	{	
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');

		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
			if(isset($_SESSION['mail']['status'])){
		   unset($_SESSION['mail']['status']); 
		}
		$this->db->select('*');
		$this->db->from('tbl_web_images');
		$this->db->where('type',13);
		$this->db->order_by('id','DESC');
		$this->db->limit(1);
		$sethome = $this->db->get();
		$data['home_counter'] = $sethome->row();
		
		$_SESSION['last']['page']='home';

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

        $this->db->select('*');
        $this->db->from('tbl_pages');
        $swhy = array('pagid'=>7);
        $this->db->where($swhy);
        $data['why_chose_data']=$this->db->get()->row();
        $data['menus']='home';
        if ($this->uri->segment(3)=='') {
				$data['title']=ucfirst('Online tutorial');
				$this->load->view('templates/header', $data);
        		$this->load->view('pages/home');
        		$this->load->view('templates/footer');
		} else {
	        $data['title']=ucfirst('Some variable did not contain a value.');
	    	$this->load->view('templates/header', $data);
			$this->load->view('pages/error404');
			$this->load->view('templates/footer');
		}
	}

	public function samples()
	{	
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
		$data['menus']='samples';
		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
		$_SESSION['last']['page']='about';

		$this->db->select('*');
		$this->db->from('category_samples');
		$this->db->group_by('cat_first');
		$this->db->order_by('cat_first');
	    $data['all_category'] = $this->db->get()->result();
        if ($this->uri->segment(3)=='') {
				$data['title']=ucfirst('Online tutorial');
        		$this->load->view('pages/sampless', $data);
        		$this->load->view('templates/footer');
		} else {
			$this->db->select('*');
			$this->db->from('category_samples');
			$this->db->where('id',$this->uri->segment(3));
		    $data['my_category'] = $this->db->get()->row();

			$this->db->select('*');
			$this->db->from('add_samples');
			$where2 = array('cat_it' => $this->uri->segment(3));
			$this->db->where($where2);
        	$sam_data = $this->db->get();
			if ($sam_data->num_rows()>0) {
				$data['my_smples']=$sam_data;
			    $data['title']=ucfirst('Online tutorial');
			    $this->load->view('pages/sampless_data', $data);
			    $this->load->view('templates/footer');
			} else {
				$this->db->select('*');
				$this->db->from('add_samples');
				$wh= array('id' => $this->uri->segment(4));
				$this->db->where($wh);
			    $sam_d = $this->db->get();
			        if ($sam_d->num_rows()>0) {
						$data['my_smples']=$sam_d->row();
			        	$data['title']=ucfirst('Online tutorial');
			        	$this->load->view('pages/sampless_data2', $data);
			        	$this->load->view('templates/footer');
			        } else {
			        	$data['title']=ucfirst('Some variable did not contain a value.');
	    				$this->load->view('templates/header', $data);
						$this->load->view('pages/error404');
						$this->load->view('templates/footer');	
			        }
			}
		}
	}	

public function step1p()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
		$data['menus']='step1p';
		if(isset($_SESSION['mail']['status'])){
		   unset($_SESSION['mail']['status']); 
		}
		if (!isset($_COOKIE["wssinfotech_login"])) {
			$_SESSION['emailid']['emailid']=$this->input->post('emailid');
			$_SESSION['subject']['subject']=$this->input->post('subject');
			$_SESSION['deadline']['deadline']=$this->input->post('deadline');
			$_SESSION['nopages']['nopages']=$this->input->post('nopages');
			$_SESSION['searchid']['searchid']=$this->input->post('searchid');
			$_SESSION['other_assignment']['other_assignment']=$this->input->post('other_assignment');
			redirect('login');
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
        
$ord=68390+$last2;

        		$orderid='FHH'.$ord;
					$data = array(  
						'email' => $_SESSION['emailid']['emailid'],
						'subject' => $_SESSION['subject']['subject'],
						'subject_id' => $_SESSION['searchid']['searchid'],
						'deadline' => $_SESSION['deadline']['deadline'],
						'pages' => $_SESSION['nopages']['nopages'],
						'other_assignment' => $_SESSION['other_assignment']['other_assignment'],
						'order_date' => date('d-m-Y'),
						'order_id' => $orderid
					);  
					$this->db->insert('tbl_orders',$data);
					unset($_SESSION['emailid']['emailid']);
					unset($_SESSION['subject']['subject']);
					unset($_SESSION['searchid']['searchid']);
					unset($_SESSION['deadline']['deadline']);
					unset($_SESSION['nopages']['nopages']);
					unset($_SESSION['other_assignment']['other_assignment']);
					redirect('pages/step2/'.$orderid);
				}	 else {

			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
			$this->form_validation->set_rules(
		        'emailid', 'Email',
		        'required|valid_email',
		        array(
		        	'valid_email'     => 'Enter valid email',
			        'required'     => 'Enter email id'
			    )
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
       						 //$orderid=date('Ymdhis').$last2;
        
							$ord=68390+$last2;
				       		$orderid='FHH'.$ord;
					        $data = array(  
								'email' => $this->input->post('emailid'),
								'fullname' => $this->input->post('fullname'),
								'subject' => $this->input->post('subject'),
								'subject_id' => $this->input->post('searchid'),
								'other_assignment' => $this->input->post('other_assignment'),
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
public function coupancode(){
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
 
		$this->db->select('*');
		$this->db->from('tbl_offer');
		$this->db->where('coupon_code',$this->uri->segment(3));
		$this->db->where('offer_status=1');
		$set = $this->db->get();
		if ($set->num_rows()>0) {

			$getrecord= $set->row();
			$this->db->select('*');
			$this->db->from('tbl_orders');
			$this->db->where('email',$_COOKIE["wssinfotech_login"]);
			$this->db->where('couponcode',$this->uri->segment(3));
			$set2 = $this->db->get();
			 if ($set2->num_rows()==0) {
			 	$_SESSION['coupon']['code']=$this->uri->segment(3);
			 	echo "<span class='alert alert-success'>Coupon code applied! You get a ".$getrecord->offinpercent."% off  </span>"; 
			 	echo "<img src='../assets/preloader.gif' style='max-width:80px;' />";
			 	echo "<meta http-equiv='refresh' content='5'/>";
			 } else {
			 	echo "<span class='alert alert-danger'>Already used this  coupon code</span>"; 
			 }
		} else {
			echo "<span class='alert alert-danger'>Invalid coupon code</span>";
		}
		

}

public function step2()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
if(isset($_SESSION['mail']['status'])){
		   unset($_SESSION['mail']['status']); 
		}
if (isset($_SESSION['coupon']['code'])) {
			unset($_SESSION['coupon']['code']);
		}
		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
		if (!isset($_COOKIE["wssinfotech_login"])) {
			redirect('login');
		}
		$data['menus']='step2';
				$this->db->select('*');
				$this->db->from('configuration_general');
				$this->db->where('id=1');
				$set = $this->db->get();
				$getrecord= $set->row();
				$webconfig= $set->row();
		$this->db->select('*');
		$this->db->from('tbl_orders');
		$this->db->where('order_id',$this->uri->segment(2));
		$data['order_data']=$this->db->get()->row();

if ($this->uri->segment(3)=='save') {
    
    //     echo '<pre>';
    //     print_r($_POST);
    // die();
	$this->form_validation->set_error_delimiters('', '');
$this->form_validation->set_rules('study_level', 'current level of study', 'trim|required');
$this->form_validation->set_rules('assi_referencce', 'Reference style of assignment', 'required');
$this->form_validation->set_rules('subject', 'subject', 'required');
$this->form_validation->set_rules('deadline', 'deadline', 'required');
$this->form_validation->set_rules('nopages', 'No of pages', 'required');
$this->form_validation->set_rules('fullname', 'Full name', 'required');
$this->form_validation->set_rules('assi_desrip', 'assignment description', 'required');
$this->form_validation->set_rules(
	'phonefull', 'Mobile Number',
	 'required',
	    array(
	        'regex_match'     => 'Enter  correct mobile number',
	        'required'     => 'Enter mobile number'));
			if ($this->form_validation->run() == FALSE) {

			} else {

				$config['upload_path']= './assets/setting/';
		        $config['allowed_types']= 'jpg|png|pdf|PDF|doc|docx|pptx|PPTX|PNG|xls|xlsx|XLS|XLSX|JPG|JPEG|jpeg';
		        $config['max_size'] = 1024 * 8;
		       	$config['encrypt_name'] = TRUE;
		       	$this->load->library('upload', $config);
		        if (!$this->upload->do_upload('assign_file'))
		        { 
					$assi_desrip_file='';
				} else {
					$x=$this->upload->data();
		            $assi_desrip_file = $x['file_name'];
		        }
			$datas = array(
				'fullname'     => $this->input->post('fullname'),
				'subject' => $this->input->post('subject'),
				'subject_id' => $this->input->post('searchid'),
				'deadline' => $this->input->post('deadline'),
				'pages' => $this->input->post('nopages'),
				'order_date' => date('d-m-Y'), 
				'study_level' => $this->input->post('study_level'),
				'assi_referencce' => $this->input->post('assi_referencce'),
				'assi_desrip' => $this->input->post('assi_desrip'),
				'mobile' => $this->input->post('phonefull'),
				'currencyCode' => $this->input->post('currencyCode'),
				'dollerRate' => $this->input->post('dollerRate'),
				'assi_desrip_file'=>$assi_desrip_file
			); 
		$this->db->where('order_id',$this->uri->segment(2));
		$this->db->update('tbl_orders',$datas);
			
			
			
			$data25 = array(  
	            'mobile' => $this->input->post('phonefull') 
	        ); 
	        
	        $this->db->where('email',$_COOKIE["wssinfotech_login"]);
		    $this->db->update('tbl_members',$data25);
	
		redirect('order-step3/'.$this->uri->segment(2));
	}
}


		$data['title']=ucfirst('Online tutorial');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/step2');
		$this->load->view('templates/footer');

		 
		

}








public function order_step3()
{
		
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
			redirect('login');
		}
		
		if(isset($_SESSION['mail']['status'])){
		   unset($_SESSION['mail']['status']); 
		}
		
		if(isset($_SESSION['mail']['status2'])){
		   unset($_SESSION['mail']['status2']); 
		}
		
		
		/*
		
		if (isset($_SESSION['coupon']['code'])) {
			unset($_SESSION['coupon']['code']);
		} */
		$data['menus']='order_step3';
		$this->db->select('*');
		$this->db->from('tbl_orders');
		$this->db->where('order_id',$this->uri->segment(2));
		$data['order_data']=$this->db->get()->row();
		if ($this->uri->segment(3)=='confirm') {
			$this->db->select('*');
			$this->db->from('tbl_orders');
			$this->db->where('order_id',$this->uri->segment(2));
			$order_data=$this->db->get()->row();
		 	$this->db->select('*');
		    $this->db->from('add_products');
		    $this->db->where('id',$order_data->subject);
		    $subjetcdata=$this->db->get()->row();
			$segment2 = $this->uri->segment(2);
			$couponcode = $this->input->post('couponcode');
			$discountpercent = $this->input->post('discountpercent');
			$pay_payment = $this->input->post('pay_payment');
			// 1 for advance and 2 for full payment
 			$total=$this->input->post('totalamountofassignment');

 			$walletamount=0.00;

			if ($this->input->post('pay_payment')==1) {
				$advanceper = $subjetcdata->advanceamt;
			} else {
				$advanceper = 0;
			}
			$debitwallet=0.00;
		$total_pa=	$total-$total*$this->input->post('discountpercent')/100;	

		
		 
		 	



		if ($this->input->post('walletamount')!='') {

			$this->db->select('*');
			$this->db->from('tbl_members');
			$this->db->where('email',$_COOKIE["wssinfotech_login"]);
			$set = $this->db->get(); 
			$user_detail = $set->row();
			$walletamount=$this->input->post('walletamount');

			if ($total_pa>=$walletamount) {
				$total_paybleamt=$total_pa-$walletamount;
				$debitwallet=$walletamount;
			} else {
				$total_paybleamt=0.00;
				$debitwallet=$total_pa;
			}

		
		/*	$datas = array(  
				'income_to' => $user_detail->id,
				'payment_dr_cr' =>  'Dr',
				'amount' => $debitwallet,
				'create_date' => date('d-m-Y h:i:s A'),
				'payment_reason' => 'Use wallet amount when order placed!'
			);  
			$this->db->insert('tbl_income_reports',$datas); */

		} else {
			$walletamount=0.00;
			$total_paybleamt=$total_pa;
		}

 			$advanceamount= 	$total_paybleamt*$advanceper/100;
 			$restamount=$total_paybleamt-$advanceamount;
			$datas = array(
				'total_paybleamt'     => $total_paybleamt,
				'assignmentamount' => $total,
				'couponcode' => $couponcode,
				'coupandiscount' => $discountpercent,
				'advanceamount' => $advanceamount,
				'restamount' => $restamount,
				'order_date'=>date('d-m-Y h:i:s A'),
				'debitwallet'=>$debitwallet
			); 
		$this->db->where('order_id',$this->uri->segment(2));
		$this->db->update('tbl_orders',$datas);

		if ($this->input->post('pay_payment')==1) {
			$datas = array(  
				'pay_total' => $total_paybleamt,
				'pay_advahnce' =>  $advanceamount,
				'pay_restamount' => $restamount,
				'pay_date' => date('d-m-Y'),
				'pay_time' => date('h:i:s A'),
				'orderid' => $this->uri->segment(2)
			);  
		} else {
			$datas = array(  
				'pay_total' => $total_paybleamt,
				'pay_advahnce' =>  $total_paybleamt,
				'pay_restamount' => 0,
				'pay_date' => date('d-m-Y'),
				'pay_time' => date('h:i:s A'),
				'orderid' => $this->uri->segment(2)
			);  
		}
		$this->db->insert('order_payment',$datas);
		$this->db->select('*');
        $this->db->from('order_payment');
        $this->db->where('orderid',$this->uri->segment(2));
        $this->db->order_by('pay_id','DESC');
        $this->db->limit(1);
        $payment=$this->db->get()->row();
		redirect('paypal/'.$payment->pay_id);
}
		$data['title']=ucfirst('Online tutorial');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/order_step3');
		$this->load->view('templates/footer');
}


public function checkoutfinal()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
		$data['menus']='checkoutfinal';
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

		redirect('pages/paypal/'.$payment->pay_id);
	}	
}



	public function about()
	{	
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
		$data['menus']='about';
		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
		$_SESSION['checkout']['user']='pages/about';


$this->db->select('*');
$this->db->from('tbl_web_images');
$this->db->where('type',4);
$this->db->order_by('id','DESC');
$set = $this->db->get();
$data['about_image'] = $set->row();

$this->db->select('*');
$this->db->from('tbl_web_images');
$this->db->where('type',5);
$this->db->order_by('id','DESC');
$set = $this->db->get();
$data['about_image5'] = $set->row();

$this->db->select('*');
$this->db->from('tbl_web_images');
$this->db->where('type',6);
$this->db->order_by('id','DESC');
$set = $this->db->get();
$data['about_image6'] = $set->row();

$this->db->select('*');
$this->db->from('tbl_web_images');
$this->db->where('type',8);
$this->db->order_by('id','DESC');
$set = $this->db->get();
$data['about_img'] = $set->row();

		

		$this->db->select('*');
        $this->db->from('tbl_pages');
        $s16 = array('pagid'=>16);
        $this->db->where($s16);
        $data['about_data16']=$this->db->get()->row();

        $this->db->select('*');
        $this->db->from('tbl_pages');
        $s17 = array('pagid'=>17);
        $this->db->where($s17);
        $data['about_data17']=$this->db->get()->row();


        $this->db->select('*');
        $this->db->from('tbl_pages');
        $s18 = array('pagid'=>18);
        $this->db->where($s18);
        $data['about_data18']=$this->db->get()->row();


        if ($this->uri->segment(3)=='') {
				$data['title']=ucfirst('Online tutorial');
        		$this->load->view('templates/header', $data);
        		$this->load->view('pages/about');
        		$this->load->view('templates/footer');
		} else {
	        $data['title']=ucfirst('Some variable did not contain a value.');
	    	$this->load->view('templates/header', $data);
			$this->load->view('pages/error404');
			$this->load->view('templates/footer');
		}		
	}	

public function services()
	{	
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
		$data['menus']='services';
		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}

		$data['title']=ucfirst('Online tutorial');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/services');
		$this->load->view('templates/footer');
	}	


public function assignment()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
			$data['menus']='assignment';
			
			$this->db->select('*');
            $this->db->from('tbl_web_images');
            $this->db->where('type',19);
            $this->db->order_by('id','DESC');
            $data['offer_image'] = $this->db->get();
             




if (!isset($_SESSION['uniew']['useragent'])) {
	$_SESSION['uniew']['useragent']=session_id();
}
	$_SESSION['checkout']['user']='assignment/'.$this->uri->segment(2).'/'.$this->uri->segment(3);

		if($this->uri->segment(4)=='senddata'){
			$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
			$this->form_validation->set_rules('author', 'author name', 'trim|required');
			$this->form_validation->set_rules('email', 'email', 'required');
			$this->form_validation->set_rules('comment', 'comment', 'required');
			$this->form_validation->set_rules('last', 'Some invalid details', 'required');
			$this->form_validation->set_rules('assid', 'Some invalid details', 'required');
			$this->form_validation->set_rules('rating', 'Some invalid details', 'required');
			if ($this->form_validation->run() == FALSE) {
				//$this->session->set_flashdata('success', '<div class="alert alert-danger">All fields are mandatory</div>');
					 //redirect($_SESSION['checkout']['user']);
				} else {
					$data = array(  
						'author' => $this->input->post('author'),
						'email' => $this->input->post('email'),
						'comment' => $this->input->post('comment'),
						'assid' => $this->input->post('assid'),
						'ratting' => $this->input->post('rating'),
						'date_post' => date('d-m-Y'),
						'post_time' => date('h:i:s A')
					);  
					$this->db->insert('tbl_review',$data);
					$this->session->set_flashdata('success', '<div class="alert alert-success">Your review or comment post Successfully</div>');
					 redirect($_SESSION['checkout']['user']);
				}
				
        $this->db->select('*');
        $this->db->from('add_products');
		$s = array('id'=>$this->uri->segment(2));
		$this->db->where($s);
		$asdcfv=$this->db->get();
        $data['alldata']=$asdcfv->row();
            if($asdcfv->num_rows()>0){
                $data['title']=ucfirst('Online tutorial');
        		$this->load->view('templates/header', $data);
        		$this->load->view('pages/assignment');
        		$this->load->view('templates/footer');
            } else {
                $data['title']=ucfirst('Some variable did not contain a value.');
		    	$this->load->view('templates/header', $data);
				$this->load->view('pages/error404');
				$this->load->view('templates/footer');
            }
            
            
			} else {
			    
if($this->uri->segment(4)!='senddata' and $this->uri->segment(4)!=''){  
 $data['title']=ucfirst('Some variable did not contain a value.');
		    	$this->load->view('templates/header', $data);
				$this->load->view('pages/error404');
				$this->load->view('templates/footer');
} else {
		
	    $this->db->select('*');
        $this->db->from('add_products');
		$s = array('id'=>$this->uri->segment(2));
		$this->db->where($s);
		$asdcfv=$this->db->get();
        $data['alldata']=$asdcfv->row();
            if($asdcfv->num_rows()>0){
                $data['title']=ucfirst('Online tutorial');
        		$this->load->view('templates/header', $data);
        		$this->load->view('pages/assignment');
        		$this->load->view('templates/footer');
            } else {
                $data['title']=ucfirst('Some variable did not contain a value.');
		    	$this->load->view('templates/header', $data);
				$this->load->view('pages/error404');
				$this->load->view('templates/footer');
            }	      
			  }
			}
	}

public function enquiry()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
		$data['menus']='enquiry';
		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
		if (!isset($_COOKIE["wssinfotech_login"])) {
			redirect('login');
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

		$data['title']=ucfirst('');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/mne_left');
		$this->load->view('pages/enquiry');
		$this->load->view('templates/mne_right');
		$this->load->view('templates/footer');
 
} else {


		$this->db->select('*');
        $this->db->from('tbl_help_desks');
        $this->db->order_by('id','DESC');
        $this->db->group_by("productid");
		$s = array('query_by' =>$_COOKIE["wssinfotech_login"]);
		$this->db->where($s);
		$data['allquery']=$this->db->get();


 

		$data['title']=ucfirst('');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/mne_left');
		$this->load->view('pages/enquiry-list');
		$this->load->view('templates/mne_right');
		$this->load->view('templates/footer');
}
		
} 



public function wallet()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
		$data['menus']='wallet';
		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
		if (!isset($_COOKIE["wssinfotech_login"])) {
			redirect('login');
		}


		$_SESSION['checkout']['user']='wallet';
		

$this->db->select('*');
$this->db->from('tbl_web_images');
$this->db->where('type',16);
$this->db->order_by('id','DESC');
$set = $this->db->get();
$data['about_img'] = $set->row();

		$this->db->select('*');
		$this->db->from('tbl_members');
		$w = array('email'=>$_COOKIE["wssinfotech_login"]);
		$this->db->where($w);
		$x=$this->db->get();
		$dx=$x->num_rows();
		$row_data=$x->row();

		$this->db->select('*');
        $this->db->from('tbl_income_reports');
        $this->db->order_by('id','DESC');
		$s = array('income_to' =>$row_data->id);
		$this->db->where($s);
		$data['all_income']=$this->db->get();

 


		$data['pag']=ucfirst('Wallet');
		$data['title']=ucfirst('My wallet');
		$this->load->view('templates/header2', $data);
		//$this->load->view('templates/mne_left');
		$this->load->view('pages/wallet');
		//$this->load->view('templates/mne_right');
		$this->load->view('templates/footer');
}






public function vision()
	{	
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
		$data['menus']='vision';
		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
		$_SESSION['checkout']['user']='pages/vision';

		$this->db->select('*');
        $this->db->from('tbl_pages');
        $s = array('pagid'=>2);
        $this->db->where($s);
        $data['about_data']=$this->db->get()->row();




		
		if ($this->uri->segment(3)=='') {
            					$data['title']=ucfirst('Online tutorial');
	//	$this->load->view('templates/header');
		$this->load->view('pages/vision', $data);
		$this->load->view('templates/footer');
		
				
		} else {
	        $data['title']=ucfirst('Some variable did not contain a value.');
	    	$this->load->view('templates/header', $data);
$this->load->view('pages/error404');
$this->load->view('templates/footer');
		}
	}	



public function mission()
	{	
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
		$data['menus']='mission';
		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
$_SESSION['checkout']['user']='pages/mission';

		$this->db->select('*');
        $this->db->from('tbl_pages');
        $s = array('pagid'=>3);
        $this->db->where($s);
        $data['about_data']=$this->db->get()->row();


		if ($this->uri->segment(3)=='') {
            $data['title']=ucfirst('Online tutorial');
    	//	$this->load->view('templates/header');
    		$this->load->view('pages/mission', $data);
    		$this->load->view('templates/footer');
				
		} else {
	        $data['title']=ucfirst('Some variable did not contain a value.');
	    	$this->load->view('templates/header', $data);
$this->load->view('pages/error404');
$this->load->view('templates/footer');
		}

		
	}	

public function privacy_polocy()
	{	
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
		$data['menus']='privacy_polocy';
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


public function license(){	
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
		$data['menus']='license';
		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}

		$_SESSION['checkout']['user']='license';
		$this->db->select('*');
        $this->db->from('tbl_pages');
        $s = array('pagid'=>20);
        $this->db->where($s);
        $data['about_data']=$this->db->get()->row();

		$data['title']=ucfirst('Online tutorial');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/license');
		$this->load->view('templates/footer');
		
	}	


public function why_choose_us()
	{	
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
		$data['menus']='why_choose_us';
		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
$_SESSION['checkout']['user']='pages/why_choose_us';

		$this->db->select('*');
        $this->db->from('tbl_pages');
        $s = array('pagid'=>7);
        $this->db->where($s);
        $data['about_data']=$this->db->get()->row();

        if ($this->uri->segment(3)=='') {
            		$data['title']=ucfirst('Online tutorial');
	//	$this->load->view('templates/header');
		$this->load->view('pages/why_choose_us', $data);
		$this->load->view('templates/footer');
				
		} else {
	        $data['title']=ucfirst('Some variable did not contain a value.');
	    	$this->load->view('templates/header', $data);
$this->load->view('pages/error404');
$this->load->view('templates/footer');
		}

	 
	}	


	public function terms_n_conditions()
	{	
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
		$data['menus']='terms_n_conditions';
		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
			
			$_SESSION['checkout']['user']='pages/terms_n_conditions';
		$this->db->select('*');
        $this->db->from('tbl_pages');
        $s = array('pagid'=>6);
        $this->db->where($s);
        $data['about_data']=$this->db->get()->row();
		if ($this->uri->segment(3)=='') {
	       	$data['title']=ucfirst('Online tutorial');
			$this->load->view('templates/header', $data);
			$this->load->view('pages/terms_n_conditions');
			$this->load->view('templates/footer');
		} else {
	        $data['title']=ucfirst('Some variable did not contain a value.');
	    	$this->load->view('templates/header', $data);
			$this->load->view('pages/error404');
			$this->load->view('templates/footer');
		}
	}	






	public function offe_details()
	{	
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
		$data['menus']='offe_details';
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
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
		$data['menus']='how_it_work';
		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
		

		$this->db->select('*');
        $this->db->from('tbl_pages');
        $s14 = array('pagid'=>14);
        $this->db->where($s14);
        $data['about_data14']=$this->db->get()->row();

        $this->db->select('*');
        $this->db->from('tbl_pages');
        $s15 = array('pagid'=>15);
        $this->db->where($s15);
        $data['about_data15']=$this->db->get()->row();


$this->db->select('*');
$this->db->from('tbl_web_images');
$this->db->where('type',9);
$this->db->order_by('id','DESC');
$set = $this->db->get();
$data['about_img'] = $set->row();

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
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
		$data['menus']='offers';
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
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
		$data['menus']='register';
		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
if ($this->uri->segment(2)=='submit') {
	$this->form_validation->set_error_delimiters('', '');

$this->form_validation->set_rules(
        'phonefull', 'Mobile Number',
        'required',
        array('is_unique'     => 'This %s already exists',
        	'regex_match'     => 'Enter  correct mobile number',
        	'required'     => 'Enter mobile number'));
        	


$this->form_validation->set_rules(
        'email', 'Email',
        'required|valid_email|is_unique[tbl_members.email]',
        array('is_unique'     => 'This %s already exists',
        	'valid_email'     => 'Enter  valid email',
        	'required'     => 'Enter email id'));

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
    $randpasswordx =  implode($password); 

  	$alphabet2 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz&@#$%!';
    $password2 = array(); 
    $alpha_length2 = strlen($alphabet2) - 1; 
    for ($i2 = 0; $i2 < 6; $i2++) 
    {
        $n2 = rand(0, $alpha_length2);
        $password2[] = $alphabet2[$n];
    }
    $randpassword2 =  implode($password2);   

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
		if ($xlast->num_rows()==0) {
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
  $lastid=$lastid+102030;

	if ($dx>0) {
  
	$ncount=strlen($lastid);
	if ($ncount<=6) {
		 	$randpassword=sprintf('%06d', $lastid);
	} else {
	 	$randpassword=$lastid;
	}

	$fid=strtoupper($randpasswordx);


	$_SESSION['username']['demo']=$this->input->post('email');
	$_SESSION['password']['demo']=$fid;
		$data = array(  
            'id'     => $randpassword,  
            'name'     => $this->input->post('name'),  
            'email'  => $this->input->post('email'),  
            'password'   => $fid,  
            'mobile' => $this->input->post('phonefull'),
            'sponsor_id' => $this->input->post('refno'),
             'countryMobileCode' => '+'.$_SESSION['country']['phonecode'],
		
            'registip'=>$this->input->ip_address()
        ); 
		$this->db->insert('tbl_members',$data);


 $this->load->library('email');
$fromemail=$webconfig->organization_email;
$toemail = $this->input->post('email');
$subject = $webconfig->site_name;
$data=array();
$mesg = $this->load->view('templates/hello','',true);
$config=array(
'charset'=>'utf-8',
'wordwrap'=> TRUE,
'mailtype' => 'html'
);

$this->email->initialize($config);
$this->email->to($toemail);
$this->email->from($fromemail, $webconfig->site_name);
$this->email->subject($subject);
$this->email->message($mesg);
$mail = $this->email->send();


		
/*		$to_email = $this->input->post('email');
        $from_email = $webconfig->organization_email;
        $this->load->library('email');
        $this->email->from($from_email, $webconfig->site_name);
        $this->email->to($to_email);
        $this->email->subject($webconfig->site_name.' login details');
        $this->email->message('Dear,  '.$this->input->post('name').',  Your account created successfully & your login details are  Login ID :  '.$this->input->post('email').',   Login Password : '.$fid);
        $this->email->send();*/
				 
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
	redirect('registration-successfull/');

} else {
	$this->session->set_flashdata("success_red",'<div class="alert alert-danger">Invalid refrral code</div>');
	redirect('register/');
}

		

	}


}

 	    	$data['title']=ucfirst('Registration');
           	$this->load->view('templates/header', $data);

    		 $this->load->view('pages/register');
    		$this->load->view('templates/footer');

	}	

	
	public function regiter_success($value='')
	{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
		$data['menus']='registration-successfull';
    	
 
 
 
 
		$data['title']=ucfirst('To.Maaro Login / Registration');
	 	$this->load->view('templates/header', $data);
		$this->load->view('pages/regiter_success');
		$this->load->view('templates/footer');
	}
 
	
public function login()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
		$data['menus']='login';
		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
		if (isset($_COOKIE["wssinfotech_login"]) and !isset($_SESSION['emailid']['emailid'])) {
			redirect('home');
		}
 
		if ($this->uri->segment(3)=='submit') {




				
				
				
				
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

if(!isset($_SESSION['checkout']['user'])){
    $_SESSION['checkout']['user']=$this->input->post('lasturl');
}

							
							
							
							$this->session->set_flashdata("username",'Invalid Email');
							$this->session->set_flashdata("password",'Invalid password');
							redirect('login/');
		        		} else {
		        			$resut = $query->row();
		        			if ($this->input->post('loginRemember')==1) {
		        				$cookie1= array(
						          		'name'   => 'remloginid',
						           		'value'  => $this->input->post('username'),
						           		'expire' => '604800',
						    	);

		        				$cookie2= array(
						          		'name'   => 'rempasswordusernameusername',
						           		'value'  => $this->input->post('password'),
						           		'expire' => '604800',
						    	);
								$this->input->set_cookie($cookie1);
								$this->input->set_cookie($cookie2);

								/*
								echo	$_COOKIE["remloginid"];
		        		echo 	$_COOKIE["rempasswordusernameusername"];
		        		*/
		        			} else {
								delete_cookie('remloginid'); 
								delete_cookie('rempasswordusernameusername'); 
		        			}
		        			$cookie= array(
						          		'name'   => 'wssinfotech_login',
						           		'value'  => $this->input->post('username'),
						           		'expire' => '604800',
						    );
						    $this->input->set_cookie($cookie);
						   if(isset($_SESSION['checkout']['user'])) {
						    	$lastlogin = $_SESSION['checkout']['user'];
						    	unset($_SESSION['checkout']['user']);
								redirect('dashboard');

							} else{
								if (isset($_SESSION['emailid']['emailid'])) {
						    			redirect('order-step-1');
						    	} else{
								redirect($this->input->post('lasturl'));}
							}

	        		}

				}
		}
    		$data['title']=ucfirst('Login / Registration');
		 	$this->load->view('templates/header', $data);
			$this->load->view('pages/login');
			$this->load->view('templates/footer');
}


public function forgot_password()
{
        
        $this->load->helper('cookie','url'); 
        $this->load->library('encrypt');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper('email');
        $this->load->helper('text');
        $data['menus']='forgot_password';
        if (!isset($_SESSION['uniew']['useragent'])) {
            $_SESSION['uniew']['useragent']=session_id();
        }

        if ($this->uri->segment(2)==' ') {
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
                                $this->session->set_flashdata("username",'<div class="error">Invalid Email Id</div>');
                                    redirect('forget-password');
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
				      /*  $this->load->library('email');
				        $this->email->from($from_email, $webconfig->site_name);
				        $this->email->to($to_email);
				        $this->email->subject($webconfig->site_name.' login details');
				        $this->email->message('Dear,  '.$reco->name.',  Your Password on '.$webconfig->site_name.' Please keep it in your records so you dont forget it.  User Id/Email Id :  '.$this->input->post('username').',   Password : '.$randpassword);
				        $this->email->send(); */


$_SESSION['username']['demo']=$this->input->post('username');
$_SESSION['password']['demo']=$randpassword;
$this->load->library('email');
$fromemail=$webconfig->organization_email;
 $toemail = $this->input->post('username');

$subject = $webconfig->site_name;
$data=array();
 $mesg = $this->load->view('templates/hello-password','',true);
 
$config=array(
'charset'=>'utf-8',
'wordwrap'=> TRUE,
'mailtype' => 'html'
);

$this->email->initialize($config);
$this->email->to($toemail);
$this->email->from($fromemail, $webconfig->site_name);
$this->email->subject($subject);
$this->email->message($mesg);
$mail = $this->email->send();
if($mail){
   $this->session->set_flashdata('success_password', 'Password send to your register mail ');
					redirect('forget-password/'); 
} else {
    $this->session->set_flashdata('success_password', 'Somthing wen`t wrong');
}




                        }

                    }
        }

 
            $data['title']=ucfirst(' Login / Registration');
			$this->load->view('templates/header', $data);
			$this->load->view('pages/forgot_password');
			$this->load->view('templates/footer');
}

public function step_one_order()
{
		
        $this->load->helper('cookie','url'); 
        $this->load->library('encrypt');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper('email');
        $this->load->helper('text');
        $data['menus']='step_one_order';
        $this->db->select('*');
		$this->db->from('configuration_general');
		$this->db->where('id=1');
		$set = $this->db->get();
		$getrecord= $set->row();
		$webconfig= $set->row();

if (isset($_SESSION['coupon']['code'])) {
unset($_SESSION['coupon']['code']);
} 
if ($this->uri->segment(2)=='submit') {
	$this->form_validation->set_error_delimiters('', '');
	$this->form_validation->set_rules('emailid', 'Email','required|valid_email',array('valid_email'     => 'Enter valid email','required'     => 'Enter email id'));
	$this->form_validation->set_rules('subject', 'subject', 'required');
	$this->form_validation->set_rules('deadline', 'deadline', 'required');
	$this->form_validation->set_rules('nopages', 'No of pages', 'required');
	//$this->form_validation->set_rules('searchid', 'Subjetc ID', 'required');
	$this->form_validation->set_rules('fullname', 'Full name', 'required');
	if ($this->form_validation->run() == FALSE) {
	} else {
		$this->db->select('*');
		$this->db->from('tbl_members');
		$where = array('email' => $this->input->post('emailid'));
		$this->db->where($where);
        $query = $this->db->get();
       	if ($query->num_rows()==0) {
       		$this->db->select('*');
			$this->db->from('tbl_members');
			$this->db->order_by('dum_id','DESC');
			$this->db->limit(1);
	        $qs = $this->db->get();
	        $newrg=$qs->row();
	        if ($qs->num_rows()==0) {
	        	$newid=1;
	        } else {
	        	$newid=$newrg->dum_id+1;
	        }
			//$id = 'FHWH'.sprintf('%06d', $newid);
            $newid=$newid+102030;
			$ncount=strlen($newid);
			if ($ncount<=6) {
				 	$id=sprintf('%06d', $newid);
			} else {
			 	$id=$newid;
			}


	        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		    $password = array(); 
		    $alpha_length = strlen($alphabet) - 1; 
		    for ($i = 0; $i < 8; $i++) 
		    {
		        $n = rand(0, $alpha_length);
		        $password[] = $alphabet[$n];
		    }
		   	$randpasswordx =  implode($password); 
		  	$fid=strtoupper($randpasswordx);
		  	$_SESSION['username']['demo']=$this->input->post('emailid');
			$_SESSION['password']['demo']=$fid;
			$data = array(  
	            'id'     => $id,  
	            'name'     => $this->input->post('fullname'),  
	            'email'  => $this->input->post('emailid'),  
	            'password'   => $fid, 
	            'countryMobileCode' => '+'.$_SESSION['country']['phonecode'],
	            'registip'=>$this->input->ip_address()
	        ); 
			$this->db->insert('tbl_members',$data);

			$this->load->library('email');
			$fromemail=$webconfig->organization_email;
			$toemail = $this->input->post('emailid');
			$subject = $webconfig->site_name;
			$data=array();
			 $mesg = $this->load->view('templates/hello','',true);
			$config=array(
			'charset'=>'utf-8',
			'wordwrap'=> TRUE,
			'mailtype' => 'html'
			);

		 $this->email->initialize($config);
			$this->email->to($toemail);
			$this->email->from($fromemail, $webconfig->site_name);
			$this->email->subject($subject);
			$this->email->message($mesg);
			$mail = $this->email->send();  

				$this->db->select('*');
				$this->db->from('tbl_members');
				$this->db->where('id',$id);
				$this->db->where('email',$this->input->post('emailid'));
				$setprofile = $this->db->get();
				$myprofile= $setprofile->row();
				$datad = array(  
		            'income_to'     => $id,  
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
				$this->db->where('email',$this->input->post('emailid'));
				$this->db->update('tbl_members',$datas);
$alery= '<h4 class="text-center alert alert-success"><i class="fa fa-exclamation-circle"></i>  Your login credential are sent to your registered email!</h4>
         ';
$this->session->set_flashdata('success_regiter', $alery);
}
		$cookie= array(
			'name'   => 'wssinfotech_login',
			'value'  => $this->input->post('emailid'),
			'expire' => '604800',
		);
		$this->input->set_cookie($cookie);
			$this->db->select('*');
			$this->db->from('tbl_orders');
			$this->db->order_by('id','DESC');
			$this->db->limit(1);
			$lst_order=$this->db->get();
			if ($lst_order->num_rows()>0) {
				$lastdata=$lst_order->row();
				$laorder=$lastdata->id+1;
			} else {
				$laorder=1;
			}
			
			if(isset($_SESSION['orderid']['orderid'])){
			    $data = array( 
        				'fullname'     => $this->input->post('fullname'),  
        				'email' => $this->input->post('emailid'),
        				'subject' => $this->input->post('subject'),
        				'subject_id' => $this->input->post('searchid'),
        				'deadline' => $this->input->post('deadline'),
        				'pages' => $this->input->post('nopages'),
        				'order_date' => date('d-m-Y'),
        				'order_id' => $_SESSION['orderid']['orderid']
        			);  
        			$this->db->where('order_id',$_SESSION['orderid']['orderid']);
        			$this->db->update('tbl_orders',$data);
        	redirect('order-step-2/'.$_SESSION['orderid']['orderid']);
			} else {
			    	$ord=68390+$laorder;
        	   		$orderid='FHH'.$ord;
        	   		
        	   		$_SESSION['orderid']['orderid']=$orderid;
        			$data = array( 
        				'fullname'     => $this->input->post('fullname'),  
        				'email' => $this->input->post('emailid'),
        				'subject' => $this->input->post('subject'),
        				'subject_id' => $this->input->post('searchid'),
        				'deadline' => $this->input->post('deadline'),
        				'pages' => $this->input->post('nopages'),
        				'order_date' => date('d-m-Y'),
        				'order_id' => $orderid
        			);  
        			$this->db->insert('tbl_orders',$data);
        			redirect('order-step-2/'.$orderid);
			}
		
		
		}
	}
   	$data['title']=ucfirst('');
	$this->load->view('templates/header', $data);
	$this->load->view('pages/step_one_order');
	$this->load->view('templates/footer');
}
	



public function post()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$data['menus']='post';
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
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
			$data['menus']='news';
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
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
			$data['menus']='gallery';	
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
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
			$data['menus']='videos';
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

		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
			$data['menus']='contact';
		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}

$this->db->select('*');
$this->db->from('tbl_web_images');
$this->db->where('type',7);
$this->db->order_by('id','DESC');
$set = $this->db->get();
$data['about_img'] = $set->row();



		$_SESSION['checkout']['user']='contact';
			if ($this->uri->segment(2)=='send') {
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
if($this->email->send()){
    $this->session->set_flashdata("email_sent","<span class='alert-error text-success'>Email Send Successfully.</span>");
    redirect('contact'); 
}
else {
	$this->session->set_flashdata("email_faield","<span class='alert-error text-danger'>You have encountered an error</span>");
	redirect('contact'); 
}


				}
			}

		if ($this->uri->segment(3)=='') {
            $data['title']=ucfirst('');
    	 	$this->load->view('templates/header', $data);
    		$this->load->view('pages/contact');
    		$this->load->view('templates/footer');
    	} else {
	        $data['title']=ucfirst('Some variable did not contain a value.');
	    	$this->load->view('templates/header', $data);
			$this->load->view('pages/error404');
			$this->load->view('templates/footer');
		}
	}

public function referral()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$data['menus']='referral';
 		
if (!isset($_SESSION['uniew']['useragent'])) {
		$_SESSION['uniew']['useragent']=session_id();
	}
	if (!isset($_COOKIE["wssinfotech_login"])) {
		redirect('login');
	}
 		$this->db->select('*');
		$this->db->from('tbl_web_images');
		$this->db->where('type',17);
		$this->db->order_by('id','DESC');
		$set = $this->db->get();
		$data['about_img'] = $set->row();





		$data['pag']=ucfirst('Referal');
		$data['title']=ucfirst('Welcome to Natural Life');
		$this->load->view('templates/header2', $data);
		$this->load->view('pages/referral');

		$this->load->view('templates/footer');


}

public function share()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$data['menus']='share';
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
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$data['menus']='refer_policy';
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
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('url');
		$this->load->library('pagination');
		$this->load->model('Main_model');
		$data['menus']='reviews';

		$this->db->select('*');
		$this->db->from('tbl_web_images');
		$this->db->where('type',14);
		$this->db->order_by('id','DESC');
		$this->db->limit(1);
		$sethome = $this->db->get();
		$data['review_image'] = $sethome->row();

		$this->db->select('*');
        $this->db->from('tbl_pages');
        $s = array('pagid'=>12);
        $this->db->where($s);
        $data['about_data']=$this->db->get()->row();
	   if($this->uri->segment(3)=='senddata'){
			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
			$this->form_validation->set_rules('author', 'author name', 'trim|required');
			$this->form_validation->set_rules('email', 'email', 'required');
			$this->form_validation->set_rules('comment', 'comment', 'required');
			$this->form_validation->set_rules('last', 'Some invalid details', 'required');
			$this->form_validation->set_rules('assid', 'Some invalid details', 'required');
				$this->form_validation->set_rules('rating', 'Some invalid details', 'required');
				if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('success', '<div class="alert alert-danger">All fields are mandatory</div>');
					 redirect('assignment/'.$this->input->post('last').'/'.$this->input->post('assid'));
				} else {


					$data = array(  
						'author' => $this->input->post('author'),
						'email' => $this->input->post('email'),
						'comment' => $this->input->post('comment'),
						'assid' => $this->input->post('assid'),
						'ratting' => $this->input->post('rating'),
						'date_post' => date('d-m-Y'),
						'post_time' => date('h:i:s A')
					);  
					$this->db->insert('tbl_review',$data);
					$this->session->set_flashdata('success', '<div class="alert alert-success">Your review or comment post Successfully</div>');
					 redirect('reviews/');


				}
}


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
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
$data['menus']='query';
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

		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
			$data['menus']='blogs';
		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}

		if (!$this->uri->segment(2)) {
			$this->db->select('*');
			$this->db->from('adminblogs');
			$this->db->order_by('bid','desc');
			$blog_result = $this->db->get();
			$data['mail_res']=$blog_result;

			$data['title']=ucfirst('');
			$this->load->view('templates/header', $data);
			$this->load->view('pages/blogs');
			$this->load->view('templates/footer');

		} else {
			$this->db->select('*');
			$this->db->from('adminblogs');
			$this->db->where('bid',$this->uri->segment(2));
			$blog_result = $this->db->get()->row();
			$data['mail_result']=$blog_result;

			$this->db->select('*');
			$this->db->from('adminblogs');
			$this->db->where('bid >',$blog_result->bid);
			$this->db->order_by('bid','ASC');
			$this->db->limit(1);
			$data['next'] =$this->db->get();


			$this->db->select('*');
			$this->db->from('adminblogs');
			$this->db->where('bid <',$blog_result->bid);
			$this->db->order_by('bid','DESC');
			$this->db->limit(1);
			$data['last'] =$this->db->get();

			$data['title']=ucfirst('Welcome to Natural Life');
			$this->load->view('templates/header', $data);
			$this->load->view('pages/blogs-details');
			$this->load->view('templates/footer');
		}
		
		 
		
	}
  
public function blog_details()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
				$data['menus']='blog_details';
		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
		 
			$data['title']=ucfirst('Welcome to Natural Life');
			$this->load->view('templates/header', $data);
			$this->load->view('pages/blogs-details');
			$this->load->view('templates/footer');
		 
}



public function testimonials()
	{	

		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
			$data['menus']='testimonials';
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
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
			
		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
		$data['menus']='privacy';
		$this->db->select('*');
        $this->db->from('tbl_pages');
        $s18 = array('pagid'=>19);
        $this->db->where($s18);
        $data['about_data']=$this->db->get()->row();
		
		if ($this->uri->segment(3)=='') {
            $data['title']=ucfirst('Welcome to Natural Life');
    		$this->load->view('templates/header', $data);
    		$this->load->view('pages/revision-and-refund-policy');
    		$this->load->view('templates/footer');
				
		} else {
	        $data['title']=ucfirst('Some variable did not contain a value.');
	    	$this->load->view('templates/header', $data);
			$this->load->view('pages/error404');
			$this->load->view('templates/footer');
		}
	}

public function features()
{	
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
		$data['menus']='features';
$this->db->select('*');
$this->db->from('tbl_web_images');
$this->db->where('type',12);
$this->db->order_by('id','DESC');
$set = $this->db->get();
$data['about_img'] = $set->row();
		
$this->db->select('*');
$this->db->from('highlighted2');
$this->db->order_by('id','ASC');
$set = $this->db->get();
$data['highlighted_d'] = $set->result();
       
        $data['title']=ucfirst('Welcome to Natural Life');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/features');
		$this->load->view('templates/footer');
}


public function faq()
	{	
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
			$data['menus']='faq';
		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
		

$this->db->select('*');
$this->db->from('tbl_web_images');
$this->db->where('type',10);
$this->db->order_by('id','DESC');
$set = $this->db->get();
$data['about_img'] = $set->row();
		
$this->db->select('*');
$this->db->from('faq');
$set = $this->db->get();
$data['faq_data'] = $set->result();



		if ($this->uri->segment(3)=='') {
            
           	$data['title']=ucfirst('Welcome to Natural Life');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/faq');
		$this->load->view('templates/footer');
				
		} else {
	        $data['title']=ucfirst('Some variable did not contain a value.');
	    	$this->load->view('templates/header', $data);
$this->load->view('pages/error404');
$this->load->view('templates/footer');
		}
	}



public function feedback()
	{	

		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
			
		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
		

		$data['menus']='feedback';
		
			if ($this->uri->segment(3)=='') {
            
           $data['title']=ucfirst('Welcome to Natural Life');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/feedback');
		$this->load->view('templates/footer');
				
		} else {
	        $data['title']=ucfirst('Some variable did not contain a value.');
	    	$this->load->view('templates/header', $data);
$this->load->view('pages/error404');
$this->load->view('templates/footer');
		}
}

 

public function logout()
{
	
 	$this->load->helper('cookie','url'); 
	$this->load->library('encrypt');
	$this->load->library('form_validation');
	$this->load->library('session');
	$this->load->helper('email');
	delete_cookie('wssinfotech_login'); 
	redirect('login');
}

public function downloads()
{
        
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
		if (!isset($_COOKIE["wssinfotech_login"])) {
			redirect('login');
		}
	 
		$this->db->select('*');
        $this->db->from('tbl_orders');
        $s = array('email'=>$_COOKIE["wssinfotech_login"]);
        $this->db->where($s);
        $this->db->order_by('id','DESC');
        $data['my_myorder']=$this->db->get();
        
        
        $data['pag']=ucfirst('downloads');
		$data['title']=ucfirst('downloads');
		$this->load->view('templates/header2', $data);
		$this->load->view('pages/downloads');
    	$this->load->view('templates/footer');
}
public function dashboard()
{
	
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
			
		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}
$data['menus']='dashboard';
		if (!isset($_COOKIE["wssinfotech_login"])) {
			redirect('login');
		}
 
		$this->db->select('*');
        $this->db->from('tbl_orders');
        $s = array('email'=>$_COOKIE["wssinfotech_login"]);
        $this->db->where($s);
        $this->db->order_by('id','DESC');
        $data['my_orders']=$this->db->get();




        $data['pag']=ucfirst('Dashboard');
		$data['title']=ucfirst('dashboard');
		$this->load->view('templates/header2', $data);
		//$this->load->view('templates/mne_left');
		$this->load->view('pages/dashboard');
		//$this->load->view('templates/mne_right');
		$this->load->view('templates/footer');

}


public function NewAssignment()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
		$data['menus']='NewAssignment';
		if (!isset($_COOKIE["wssinfotech_login"])) {
			redirect('login');
		}
		
			if(isset($_SESSION['mail']['status'])){
		   unset($_SESSION['mail']['status']); 
		}
		
		if(isset($_SESSION['mail']['status2'])){
		   unset($_SESSION['mail']['status2']); 
		}
		
		
		
		
if (isset($_SESSION['coupon']['code'])) {
			unset($_SESSION['coupon']['code']);
		}

		 	if ($this->uri->segment(2)=='save') {

$this->form_validation->set_error_delimiters('<p class="danger-page-error">', '</p>');
$this->form_validation->set_rules('fullname', 'Full Name', 'trim|required');
$this->form_validation->set_rules('subject', 'Subject', 'trim|required');
$this->form_validation->set_rules('deadline', 'urgency', 'trim|required');
$this->form_validation->set_rules('nopages', 'number of pages', 'trim|required');
$this->form_validation->set_rules('study_level', 'Study level', 'required');
$this->form_validation->set_rules('assi_referencce', 'assignment Reference', 'required');
$this->form_validation->set_rules(
        'mobile', 'Mobile Number',
        'required',
        array(
        	'regex_match'     => 'Enter  correct mobile number',
        	'required'     => 'Enter mobile number'));

$this->form_validation->set_rules(
        'emailid', 'Email',
        'required|valid_email',
        array('valid_email'     => 'Enter  valid email',
        	'required'     => 'Enter email id'));
if ($this->form_validation->run() == FALSE) {

} else {
		$config['upload_path']= './assets/setting/';
		$config['allowed_types']= 'jpg|png|pdf|PDF|doc|docx|pptx|PPTX|PNG|xls|xlsx|XLS|XLSX|JPG|JPEG|jpeg';
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
       						// $orderid=date('Ymdhis').$last2;
       			$ord=68390+$last2;
	   			$orderid='FHH'.$ord;


			$datas = array(
				'fullname'     => $this->input->post('fullname'),
				'subject' => $this->input->post('subject'),
				'subject_id' => $this->input->post('searchid'),
				'deadline' => $this->input->post('deadline'),
				'pages' => $this->input->post('nopages'),
				'order_date' => date('d-m-Y'), 
				'study_level' => $this->input->post('study_level'),
				'assi_referencce' => $this->input->post('assi_referencce'),
				'assi_desrip' => $this->input->post('assi_desrip'),
				'mobile' => $this->input->post('mobile'),
				'assi_desrip_file'=>$assi_desrip_file,
				'order_id'=>$orderid,
				'email'=>$this->input->post('emailid')
			); 
			$this->db->insert('tbl_orders',$datas);
			redirect('order-step3/'.$orderid);
		}
}

		$data['pag']=ucfirst('Dashboard');
		$data['title']=ucfirst('');
		$this->load->view('templates/header2', $data);
		$this->load->view('pages/new-assignment');
		$this->load->view('templates/footer');

}


public function getstudylevelprice()
{
		$this->db->select('*');
        $this->db->from('level_study');
        $s = array('id'=>$this->uri->segment(3));
        $this->db->where($s);
        $level=$this->db->get()->row();
echo '$'.$level->price;

}

public function track_order()
{
	
	$this->load->helper('cookie','url'); 
	$this->load->library('encrypt');
	$this->load->library('form_validation');
	$this->load->library('session');
	$this->load->helper('email');
	if (!isset($_SESSION['uniew']['useragent'])) {
		$_SESSION['uniew']['useragent']=session_id();
	}
	if (!isset($_COOKIE["wssinfotech_login"])) {
		redirect('login');
	}
		$data['menus']='track_order';
		$this->db->select('*');
        $this->db->from('tbl_orders');
        $s = array('order_id'=>$this->uri->segment(2));
        $this->db->where($s);
        $this->db->order_by('id','DESC');
        $data['my_myorder']=$this->db->get();

	$data['pag']=ucfirst('Order Status & Details');
	$data['title']=ucfirst('');
	$this->load->view('templates/header2', $data);
	$this->load->view('pages/track_order');
	$this->load->view('templates/footer');
}
public function orderplaced()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
$data['menus']='orderplaced';
		
		$data['title']=ucfirst('Online tutorial');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/orderplaced');
		$this->load->view('templates/footer');
}

public function paypal()
{
		
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
		redirect('login');
	}
	
	
		$data['menus']='paypal';
		$this->db->select('*');
        $this->db->from('order_payment');
        $s = array('pay_id'=>$this->uri->segment(2));
        $this->db->where($s);
        $data['pay_amount']=$this->db->get();
		$data['title']=ucfirst('');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/paypalPayment');
		$this->load->view('templates/footer');
}

public function cancel(){
    	 
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
		$data['menus']='cancel';

if(isset($_SESSION['orderid']['orderid'])){
    unset($_SESSION['orderid']['orderid']);
}

	           
$_SESSION['pay']['id']=$this->uri->segment(2);
		$this->db->select('*');
        $this->db->from('order_payment');
        $s = array('pay_id'=>$this->uri->segment(2));
        $this->db->where($s);
        $data['pay_amount']=$this->db->get()->row();
        if ($this->uri->segment(3)=='confirm') {

        	$this->db->select('*');
	        $this->db->from('order_payment');
	        $this->db->where('pay_id',$this->uri->segment(2));
	        $this->db->order_by('pay_id','DESC');
	        $this->db->limit(1);
	        $payment=$this->db->get()->row();
	        $orderid=$payment->orderid;
	        $this->db->select('*');
			$this->db->from('tbl_orders');
			$this->db->where('order_id',$orderid);
			$order_data=$this->db->get()->row();
				$this->db->select('*');
			    $this->db->from('add_products');
			    $this->db->where('id',$order_data->subject);
			    $subjetcdata=$this->db->get()->row();
 			 redirect('paypal/'.$this->uri->segment(2));
        }

                $this->db->select('*');
				$this->db->from('configuration_general');
				$this->db->where('id=1');
				$set = $this->db->get();
				$getrecord= $set->row();
				$webconfig= $set->row();
				 //unset($_SESSION['mail']['status']);
if(isset($_SESSION['mail']['status'])){
        $data['title']=ucfirst('');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/cancel');
		$this->load->view('templates/footer');   
} else {
            $_SESSION['mail']['status']='ok';

    	    $this->db->select('*');
			$this->db->from('tbl_members');
			$this->db->where('email',$_COOKIE["wssinfotech_login"]);
			$set = $this->db->get(); 
			$userdetails=$set->row();
		
            $this->load->library('email');
            $fromemail=$webconfig->organization_email;
            $toemail = $userdetails->email;
            $subject = $webconfig->site_name;
            $data=array();
            $mesg = $this->load->view('templates/invoice-mailer','',true);
            $config=array(
            'charset'=>'utf-8',
            'wordwrap'=> TRUE,
            'mailtype' => 'html'
            );
            
            $this->email->initialize($config);
            $this->email->to($toemail);
            $this->email->from($fromemail, $webconfig->site_name);
            $this->email->subject($subject);
            $this->email->message($mesg);
            $mail = $this->email->send();
            echo '<meta http-equiv="refresh" content="0"/>';
}
        

}
    
 public function success(){
     	
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
		$data['menus']='success';
  		if (!isset($_COOKIE["wssinfotech_login"])) {
			redirect('login');
		}
		
		
		$_SESSION['pay']['id']=$this->uri->segment(2);
		
		
  		$this->db->select('*');
        $this->db->from('order_payment');
        $s = array('pay_id'=>$this->uri->segment(2));
        $this->db->where($s);
        $data['pay_amount']=$this->db->get()->row();


if(isset($_SESSION['orderid']['orderid'])){
    unset($_SESSION['orderid']['orderid']);
}

                 $this->db->select('*');
				$this->db->from('configuration_general');
				$this->db->where('id=1');
				$set = $this->db->get();
				$getrecord= $set->row();
				$webconfig= $set->row();
				 //unset($_SESSION['mail']['status2']);
				 
				 
				
if(isset($_SESSION['mail']['status2'])){
      		$data['title']=ucfirst('');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/success');
		$this->load->view('templates/footer'); 
} else {
            $_SESSION['mail']['status2']='ok';

    	    $this->db->select('*');
			$this->db->from('tbl_members');
			$this->db->where('email',$_COOKIE["wssinfotech_login"]);
			$set = $this->db->get(); 
			$userdetails=$set->row();
		
            $this->load->library('email');
            $fromemail=$webconfig->organization_email;
            $toemail = $userdetails->email;
            $subject = $webconfig->site_name;
            $data=array();
            $mesg = $this->load->view('templates/invoice-mailer-success','',true);
            $config=array(
            'charset'=>'utf-8',
            'wordwrap'=> TRUE,
            'mailtype' => 'html'
            );
            
            $this->email->initialize($config);
            $this->email->to($toemail);
            $this->email->from($fromemail, $webconfig->site_name);
            $this->email->subject($subject);
            $this->email->message($mesg);
            $mail = $this->email->send();
            echo '<meta http-equiv="refresh" content="0"/>';
}
 
  

}


public function changepassword()
{
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
			
		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}

		if (!isset($_COOKIE["wssinfotech_login"])) {
			redirect('login');
		}
		$data['menus']='changepassword';
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
		
	 	$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
		$data['menus']='transactions';
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
	
	$this->load->helper('cookie','url'); 
	$this->load->library('encrypt');
	$this->load->library('form_validation');
	$this->load->library('session');
	$this->load->helper('email');
	$this->load->helper('text');
	$data['menus']='profile';
		$this->db->select('*');
		$this->db->from('tbl_web_images');
		$this->db->where('type',18);
		$this->db->order_by('id','DESC');
		$this->db->limit(1);
		$sethome = $this->db->get();
		$data['review_image'] = $sethome->row();




		if ($this->uri->segment(2)=='change-password') {
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
					redirect('my-profile');
				}
		}
		if ($this->uri->segment(2)=='save') {
			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
			$this->form_validation->set_rules('name', 'Full name', 'required');
			$this->form_validation->set_rules('gender', 'Gender', '');
			$this->form_validation->set_rules('mobile', 'Mobile', 'required');
			$this->form_validation->set_rules('day', 'Days', 'required');
			$this->form_validation->set_rules('month', 'Months', 'required');
			$this->form_validation->set_rules('year', 'Years', 'required');
			//$this->form_validation->set_rules('biographial', 'About yourself', 'required');
			if ($this->form_validation->run() == FALSE) {
			} else {
			$data = array(  
				'name' => $this->input->post('name'),
				'gender' => $this->input->post('gender'),
				'mobile' => $this->input->post('mobile'),
				'day' => $this->input->post('day'),
				'month' => $this->input->post('month'),
				'year' => $this->input->post('year'),
				'countryMobileCode' =>'+'.$_SESSION['country']['phonecode'],
				'biographial' => $this->input->post('biographial')
			); 
		$this->db->where('email', $_COOKIE["wssinfotech_login"]); 
		$this->db->update('tbl_members',$data);
		$this->session->set_flashdata('success', '<div class="alert alert-success">profile update Successfully</div>');
		redirect('my-profile');
	}
}
		$data['pag']=ucfirst('Profile');
		$data['title']=ucfirst('Welcome to Natural Life');
		$this->load->view('templates/header2', $data);
		$this->load->view('pages/profile');
		$this->load->view('templates/footer');
	}
}
