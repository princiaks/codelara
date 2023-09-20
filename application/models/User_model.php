<?php
class User_model extends CI_Model {
    public function registerUser($data) {
        // Insert user data into the database
        $this->db->insert('users', $data);
        return $this->db->insert_id();
    }

    public function get_user_by_username($username) {
        // Retrieve user by username
        $query = $this->db->get_where('users', ['username' => $username]);
        return $query->row();
    }
}
