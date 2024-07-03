<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Panel_siswa extends CI_Controller
{

	public function index()
	{
		$ceks = $this->session->userdata('no_pendaftaran');
		if (!isset($ceks)) {
			redirect('');
		} else {
			$data['user']   	 = $this->db->get_where('tbl_siswa', "no_pendaftaran='$ceks'");
			$data['judul_web'] = "Dashboard";

			$this->load->view('siswa/header', $data);
			$this->load->view('siswa/dashboard', $data);
			$this->load->view('siswa/footer');
		}
	}
	
	public function pendaftaran_berhasil()
	{
		$ceks = $this->session->userdata('no_pendaftaran');
		if(!isset($ceks)) {
			redirect('');
		}else{
			$data['user']   	 = $this->db->get_where('tbl_siswa', "no_pendaftaran='$ceks'");
			$data['judul_web'] = "Pendaftaran Berhasil";

			$this->load->view('siswa/header', $data);
			$this->load->view('siswa/pendaftaran_berhasil', $data);
			$this->load->view('siswa/footer');
		}
	}


	public function informasi()
	{
		$ceks = $this->session->userdata('no_pendaftaran');
		if (!isset($ceks)) {
			redirect('');
		} else {
			$data['user']   	 = $this->db->get_where('tbl_siswa', "no_pendaftaran='$ceks'");
			$data['judul_web'] = "Informasi, Syarat dan Jadwal PPDB";

			$this->load->view('siswa/header', $data);
			$this->load->view('siswa/informasi', $data);
			$this->load->view('siswa/footer');
		}
	}

	public function verifikasi_nilai()
	{
		$ceks = $this->session->userdata('no_pendaftaran');
		if (!isset($ceks)) {
			redirect('');
		} else {
			$data['user']   	 = $this->db->get_where('tbl_siswa', "no_pendaftaran='$ceks'");
			$data['judul_web'] = "Verifikasi nilai rata-rata rapor";

			$this->load->view('siswa/header', $data);
			$this->load->view('siswa/cek_nilai', $data);
			$this->load->view('siswa/footer');
		}
	}

	public function pengumuman()
	{
		$ceks = $this->session->userdata('no_pendaftaran');
		if (!isset($ceks)) {
			redirect('');
		} else {
			$data['user']   	 = $this->db->get_where('tbl_siswa', "no_pendaftaran='$ceks'");
			$data['judul_web'] = "Pengumuman";

			$this->load->view('siswa/header', $data);
			$this->load->view('siswa/pengumuman', $data);
			$this->load->view('siswa/footer');
		}
	}

	public function biodata()
	{
		$ceks = $this->session->userdata('no_pendaftaran');
		if (!isset($ceks)) {
			redirect('logcs');
		} else {
			$data['user']  			  = $this->db->get_where('tbl_siswa', "no_pendaftaran='$ceks'");
			$data['judul_web'] 		= "Biodata " . ucwords($data['user']->row()->nama_lengkap);

			$this->load->view('siswa/header', $data);
			$this->load->view('siswa/biodata', $data);
			$this->load->view('siswa/footer');
		}
	}


	public function cetak()
	{
		$ceks = $this->session->userdata('no_pendaftaran');
		if (!isset($ceks)) {
			redirect('logcs');
		}
		$data['user'] 			= $this->db->get_where('tbl_siswa', "no_pendaftaran='$ceks'")->row();
		$data['judul_web'] 	= "Cetak Bukti Pendaftaran " . ucwords($data['user']->nama_lengkap);

		$data['thn_ppdb'] 	= date('Y', strtotime($data['user']->tgl_siswa));

		$this->db->select_sum('rata_rata_nilai');
		$data['nilai_rapor'] 	= $this->db->get_where('tbl_rapor', "no_pendaftaran='$ceks'")->row()->rata_rata_nilai / 4;


		$this->load->view('siswa/cetak', $data);
	}

	public function cetakverifikasi()
	{
		$ceks = $this->session->userdata('no_pendaftaran');
		if (!isset($ceks)) {
			redirect('logcs');
		}
		$this->db->like('tgl_siswa', date('Y'), 'after');
		$data['user'] 			= $this->db->get_where('tbl_siswa', "no_pendaftaran='$ceks'")->row();
		$data['judul_web'] 	= "Cetak Bukti Lulus " . ucwords($data['user']->nama_lengkap);

		if ($data['user']->status_verifikasi != 1) {
			redirect('404');
		}

		$data['thn_ppdb'] 	= date('Y', strtotime($data['user']->tgl_siswa));
		$data['v_ket'] 			= $this->db->get_where('tbl_pengumuman', "id_pengumuman='1'")->row();

		$this->load->view('siswa/cetakverifikasi', $data);
	}


	public function rekap_nilai()
	{
		$ceks = $this->session->userdata('no_pendaftaran');
		if (!isset($ceks)) {
			redirect('logcs');
		}
		$data['user'] 			= $this->db->get_where('tbl_siswa', "no_pendaftaran='$ceks'")->row();
		$data['judul_web'] 	= "Cetak Rekap Nilai " . ucwords($data['user']->nama_lengkap);

		$data['thn_ppdb'] 	= date('Y', strtotime($data['user']->tgl_siswa));

		$this->db->select_sum('rata_rata_nilai');
		$data['nilai_rapor'] 	= $this->db->get_where('tbl_rapor', "no_pendaftaran='$ceks'")->row()->rata_rata_nilai;


		$this->load->view('siswa/rekap_nilai', $data);
	}

	public function cetak_lulus()
	{
		$ceks = $this->session->userdata('no_pendaftaran');
		if (!isset($ceks)) {
			redirect('logcs');
		}
		$this->db->like('tgl_siswa', date('Y'), 'after');
		$data['user'] 			= $this->db->get_where('tbl_siswa', "no_pendaftaran='$ceks'")->row();
		$data['judul_web'] 	= "Cetak Bukti Lulus " . ucwords($data['user']->nama_lengkap);

		if ($data['user']->status_pendaftaran != 'lulus') {
			redirect('404');
		}

		$data['thn_ppdb'] 	= date('Y', strtotime($data['user']->tgl_siswa));
		$data['v_ket'] 			= $this->db->get_where('tbl_pengumuman', "id_pengumuman='1'")->row();

		$this->load->view('siswa/cetak_lulus', $data);
	}

	public function logout()
	{
		if ($this->session->userdata('no_pendaftaran') != '') {
			$this->session->sess_destroy();
		}
		redirect('');
	}
}
