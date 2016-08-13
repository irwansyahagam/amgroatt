<?php if(!defined('BASEPATH')) exit ('No Direct Access Allowed');

class login extends CI_Controller{


	function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->helper(array('lokup'));
		$this->load->model(array('m_att'));
		$this->load->database();
	}

		function index(){
	$data	= 	array(
			'title'	=> ' .:: Login Administrator AmgroATT::. ',
			'eror'	=> '',
	);
		$this->load->view('panel/login_1', $data);
	}


	function proseslogin(){
		$nik=$this->input->post('nik'); 
		$pass=base64_encode(base64_encode($this->input->post('pass')));

		
		$sql=$this->db->get_where('USERINFO',array('SSN'=>$nik,'PASSWORD'=>$pass));
		if($sql->num_rows()>0){
			$session=array(
				'nik'=>$nik, 
				'pass'=>$pass, 
				'nama'=>$sql->row()->Name
				); 
			$this->session->set_userdata($session);
            redirect('index.php/home', 'location');
		} else{
			$this->session->set_flashdata('message','NIP/NIK/ Password anda salah');
			redirect('index.php/login','location'); 
		}	

	}

	function logout() {
        $user = $this->session->userdata('nik');
        $this->session->unset_userdata(array());
        $this->session->sess_destroy();
        redirect('index.php/login', 'refresh');
    }

	function getPassword()
    {
       $password="123";
       echo base64_encode(base64_encode('123'));
    }

    function dec(){
    	echo base64_decode(base64_decode('TVRJeg==')); 
    }

    function changepass(){
    	$akses=isLogin(); 
    	if(empty($akses['nik'])){
    		$this->session->set_flashdata('message','User Limit');
			redirect('index.php/login','location'); 
    	}else{
    	$pass=base64_encode(base64_encode($this->input->post('pass'))); 
    	$nik=$this->session->userdata('nik'); 

    	$sql=$this->db->get_where('USERINFO',array('SSN'=>$nik,'PASSWORD'=>$pass)); 
    	if($sql->num_rows()>0){
    		echo '1'; // password benar 
    	}else{
    		echo '0'; // Password salah 
    	}
    }
    }

    function changepass2(){
    	$nik=$this->session->userdata('nik'); 
    	$pass=base64_encode(base64_encode($this->input->post('pass'))); 
    	$arr=array(
    		'PASSWORD'=>$pass
    		); 
    	$sql=$this->db->update('USERINFO',$arr,array('SSN'=>$nik));
    	if($sql){
    		echo '2'; // sukses
    	} else{
    		echo '3'; // Gagal 
    	}
    }



}