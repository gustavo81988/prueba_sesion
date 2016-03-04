<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
        
        $newdata = array(
            'username'  => 'johndoe',
            'email'     => 'johndoe@some-site.com',
            'logged_in' => TRUE
        );
        
        $this->session->set_userdata($newdata);
        $data['email'] = $this->session->userdata('email');; 
        
		$this->load->view('welcome_message',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */