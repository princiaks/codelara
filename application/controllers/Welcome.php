<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 * 
	 */
	public function __construct()
    {
        parent::__construct();
        $data = array();

		$this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->database();
        // $this->load->model('admin_model');	 
		// $this->load->model('site_model');
		// if ( ! $this->session->userdata('userdata'))
		// { 
		// 	// Allow some methods?
		// 	$allowed = array(
		// 		'index','user_login'
		// 	);
		// 	if ( ! in_array($this->router->fetch_method(), $allowed))
		// 	{
		// 		redirect('adminpanel');
		// 	}
		// }
     }
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function register() {
        // Handle the POST request here
        // Access POST data using $this->input->post() method
        // $name = $this->input->post('name');
        // $email = $this->input->post('email');
        // $password = $this->input->post('password');
        // Process the registration data as needed
        // You can save it to the database, perform validation, etc.

        // Example: Saving registration data to a model
        // $this->load->model('Registration_model');
        // $this->Registration_model->registerUser($name, $email, $password);

        // Return a response if necessary
        echo "Registration successful";
    }
}
