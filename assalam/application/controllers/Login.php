<?php
class Login extends CI_Controller {
    
    public function index() {
        // Memuat model User
		$this->load->view('admin/login');
    }
    
    public function cek_login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $cek = $this->db->query("SELECT * FROM login WHERE username='$username' AND password='$password'")->row_array();

        $data=[
            'id'=> $cek['id'],
            'username'=> $cek['username'],
        ];
        $this->session->set_userdata($data);
        
        if($cek){
            redirect ('dashboard');
        }else{
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Anda Gagal Login</div>');
            redirect ('login');
        }
    }


}
?>