// application/controllers/Auth.php

<?php

class Auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('user_model');
        
    }
    public function home(){
        $this->load->view('home');
    }
    public function showregister(){
        $this->load->view('register');
    }
    public function register() {
        // Handle user registration
        // Validate input, hash password, and save user data
    }

    public function login() {
        $this->session->set_userdata('user_id', $user->id);
    }

    public function logout() {
        $this->session->unset_userdata('user_id');
    }
}
