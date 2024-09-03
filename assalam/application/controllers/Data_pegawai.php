<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pegawai');
	}
	public function index()
	{
		$data = array(
			'title'=> 'Data Pegawai',
			'data'=> $this->Pegawai->get_data('data_pegawai')->result_array(),
		);

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/data_pegawai/index');
		$this->load->view('admin/template/footer');
	}
	public function tambah_data()
	{
		$data = array(
			'title'=> 'Tambah Data Pegawai',
		);

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/data_pegawai/tambah');
		$this->load->view('admin/template/footer');
	}
	public function proses_tambah()
	{
		$nama_pegawai = $this->input->post('nama_pegawai');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$jabatan = $this->input->post('jabatan');
		$pendidikan_terakhir = $this->input->post('pendidikan_terakhir');
		
		$data = array(
			'nama_pegawai'=> $nama_pegawai,
			'tempat_lahir'=> $tempat_lahir,
			'tanggal_lahir'=> $tanggal_lahir,
			'jabatan'=> $jabatan,
			'pendidikan_terakhir'=> $pendidikan_terakhir,
		);
		$this->Pegawai->insert_data('data_pegawai',$data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');
        redirect ('data_pegawai');
	}
}
