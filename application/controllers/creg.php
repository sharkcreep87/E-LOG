<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class creg extends CI_Controller {
    function __construct(){
        parent::__construct();
    $this->load->database();
	$this->load->library('encrypt');
	$this->load->helper('security');
    }	
	public function index(){
                  
        $this->load->view('vreg');
     
    }
	
	function insert()
{

		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
		$this->form_validation->set_rules('UID', 'User ID', 'trim|required|is_unique[user.UID]');
		$this->form_validation->set_rules('Name', 'Full Name', 'trim|required');
		$this->form_validation->set_rules('ID', 'Identity Card No', 'trim|required');
		$this->form_validation->set_rules('Unit', 'Division/Branch/Unit', 'trim|required');
		$this->form_validation->set_rules('Grade', 'Post/Grade', 'trim|required');
		$this->form_validation->set_rules('Date', 'Day/Month/Year', 'trim|required');
		$this->form_validation->set_rules('Password', 'Password', 'required|min_length[5]');
		$this->form_validation->set_rules('Email', 'Email', 'trim|required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('vreg');
			 return false;
		}
		else
		{
		
		$password=$this->input->post('Password');
		 $passht2=htmlspecialchars($password);
		$encpassword=$this->encrypt->sha1($passht2);
  $data = array(
'Name' => $this->input->post('Name'),
'ID' => $this->input->post('ID'),
'Grade' => $this->input->post('Grade'),
'Date' => $this->input->post('Date'),
'Unit' => $this->input->post('Unit'),
'UID' => $this->input->post('UID'),
'Password' => $encpassword,
'Email' => $this->input->post('Email')
);

$this->load->model('mreg');
$this->mreg->insertdb($data);
$this->load->view('success');//loading success view
}
}

public function password_check($str)
{
   if (preg_match('#[0-9]#', $str) && preg_match('#[a-zA-Z]#', $str)) {
     return TRUE;
   }
   return FALSE;
}
	}