<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $data = array();

		$this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->database();
        $this->load->model('user_model');
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
		$this->load->view('header')->view('register')->view('footer');
	}
	public function register() {
        // Handle the POST request here
        // Access POST data using $this->input->post() method
        $parsed_data = json_decode($_POST, true); 
    //    $data['name'] = $this->input->post('name');
    //    $data['email'] = $this->input->post('email');
    //    $data['password'] = $this->input->post('password');
       print_r($parsed_data);
        // Process the registration data as needed
        // You can save it to the database, perform validation, etc.

        // Example: Saving registration data to a model
        // $this->load->model('Registration_model');
       
        $return=$this->user_model->registerUser($data);

        // Return a response if necessary
        // echo "Registration successful";
    }
    public function registeruser(){

    }
}
