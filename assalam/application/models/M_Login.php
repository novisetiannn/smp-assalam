<?php
class M_Login extends CI_Model {


    public function cek_login($username, $password) {
        // Gantilah 'user' dengan nama tabel yang sesuai di database Anda
        $query = $this->db->get_where('assalam', array('username' => $username, 'password' => $password));
        return $query;
    }

}
