<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class courseinfo extends CI_Controller {
   function __construct()
 {
   parent:: __construct();
   if($this->session->userdata('UID')==''){
            redirect('login'); }
        $this->load->helper(array('form', 'url'));
        $this->load->database();
        $this->load->model ('mcourseinfo');   
         $this->check_isvalidated();
 }
     public function index(){
                   $this->load->view('courseinfo');
                   
        
    }
    private function check_isvalidated(){
        if(! $this->session->userdata('validated')){
            redirect('login');
        }
    }
    public function insert()
    {
                $this->load->library('form_validation');

		$this->form_validation->set_rules('Coursename', 'Course Name', 'trim|required');
		$this->form_validation->set_rules('Place_type', 'Place', 'trim|required');            

          if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('courseinfo');
                        //return false;
		}
 else {
            $this->mcourseinfo->do_upload();
			 $this->load->view ('vupload');
 }
        
    }
  
}

?>




