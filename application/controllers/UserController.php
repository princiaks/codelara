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
      
     }
	public function index()
	{
		$this->load->view('header')->view('register')->view('footer');
	}
	public function register() {
        $json_data = file_get_contents('php://input');
        if($json_data)
        {
            $data = json_decode($json_data, true);
            $data['passwordview']=$data['password'];
            $data['password']=password_hash($data['password'], PASSWORD_BCRYPT);
            $return=$this->user_model->registerUser($data);
            echo json_encode(array('result'=>'success'));
        }
        else
        {
            echo json_encode(array('result'=>'failed'));
        }
        // Check if the request contains JSON data
    }
    public function registeruser(){

    }
}
