<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['web_ppdb']	 = $this->db->get_where('tbl_web', "id_web='1'")->row();
		$this->load->view('web/index', $data);
	}

	public function pendaftaran()
	{
		$data['web_ppdb']	 = $this->db->get_where('tbl_web', "id_web='1'")->row();
		if ($data['web_ppdb']->status_ppdb == 'tutup') {
			redirect('404');
		}
		$this->form_validation->set_rules('nisn', 'NISN', 'required|trim|is_unique[tbl_siswa.nisn]', [
			'is_unique' => 'NISN anda sudah pernah didaftarkan!'
		]);
		if ($this->form_validation->run() == false) {
			$this->db->order_by('id_pdd', 'ASC');
			$data['v_pdd'] = $this->db->get('tbl_pdd')->result();

			$this->db->order_by('id_penghasilan', 'ASC');
			$data['v_penghasilan'] = $this->db->get('tbl_penghasilan')->result();

			$this->db->where('ket_pekerjaan', 'ayah');
			$this->db->order_by('id_pekerjaan', 'ASC');
			$data['v_pekerjaan_ayah'] = $this->db->get('tbl_pekerjaan')->result();

			$this->db->where('ket_pekerjaan', 'ibu');
			$this->db->order_by('id_pekerjaan', 'ASC');
			$data['v_pekerjaan_ibu'] = $this->db->get('tbl_pekerjaan')->result();

			$this->db->order_by('id_pekerjaan', 'ASC');
			$this->db->group_by('nama_pekerjaan');
			$data['v_pekerjaan_wali'] = $this->db->get('tbl_pekerjaan')->result();

			$this->load->view('web/pendaftaran', $data);
		} else {

			if (isset($_POST['btndaftar'])) {
				$this->db->order_by('id_siswa', 'DESC');
				$sql 		= $this->db->get('tbl_siswa');
				if ($sql->num_rows() == 0) {
					$no_pendaftaran   = "PSB20240001";
				} else {
					$noUrut 	 	= substr($sql->row()->no_pendaftaran, 8, 3);
					$noUrut++;
					$no_pendaftaran	  = "PSB20240" . sprintf("%03s", $noUrut);
				}

				$nis							= $this->input->post('nis');
				$nisn							= $this->input->post('nisn');
				$nik							= $this->input->post('nik');
				$nama_lengkap					= $this->input->post('nama_lengkap');
				$jk								= $this->input->post('jk');
				$tempat_lahir					= $this->input->post('tempat_lahir');
				$tgl_lahir						= $this->input->post('tgl_lahir') . "-" . $this->input->post('bln_lahir') . "-" . $this->input->post('thn_lahir');
				$agama							= $this->input->post('agama');
				$status_keluarga				= $this->input->post('status_keluarga');
				$alamat_siswa					= $this->input->post('alamat_siswa');
				$no_hp_siswa					= $this->input->post('no_hp_siswa');
				$nama_ayah						= $this->input->post('nama_ayah');
				$pdd_ayah						= $this->input->post('pdd_ayah');
				$pekerjaan_ayah					= $this->input->post('pekerjaan_ayah');
				$penghasilan_ayah				= $this->input->post('penghasilan_ayah');
				$no_hp_ayah						= $this->input->post('no_hp_ayah');
				$nama_ibu						= $this->input->post('nama_ibu');
				$pdd_ibu						= $this->input->post('pdd_ibu');
				$pekerjaan_ibu					= $this->input->post('pekerjaan_ibu');
				$penghasilan_ibu				= $this->input->post('penghasilan_ibu');
				$no_hp_ibu						= $this->input->post('no_hp_ibu');
				$nama_wali						= $this->input->post('nama_wali');
				$pdd_wali						= $this->input->post('pdd_wali');
				$pekerjaan_wali					= $this->input->post('pekerjaan_wali');
				$penghasilan_wali				= $this->input->post('penghasilan_wali');
				$no_hp_wali						= $this->input->post('no_hp_wali');
				$nama_sekolah					= $this->input->post('nama_sekolah');
				$npsn_sekolah					= $this->input->post('npsn_sekolah');
				$status_sekolah					= $this->input->post('status_sekolah');
				$model_un						= $this->input->post('model_un');
				$alamat_sekolah					= $this->input->post('alamat_sekolah');
				$thn_lulus						= $this->input->post('thn_lulus');
				$jalur_pendaftaran				= $this->input->post('jalur_pendaftaran');
				//	$prestasi = $this->input->post('prestasi');
				$tgl_siswa						= $this->Model_data->date('waktu_default');


				$data = array(
					'no_pendaftaran'		=> $no_pendaftaran,
					'password'				=> $nisn,
					'nis'					=> $nis,
					'nisn'				    => $nisn,
					'nik'				  	=> $nik,
					'nama_lengkap'			=> $nama_lengkap,
					'jk'				  	=> $jk,
					'tempat_lahir'			=> $tempat_lahir,
					'tgl_lahir'				=> $tgl_lahir,
					'agama'				  	=> $agama,
					'status_keluarga'		=> $status_keluarga,
					'alamat_siswa'			=> $alamat_siswa,
					'no_hp_siswa'			=> $no_hp_siswa,
					'nama_ayah'				=> $nama_ayah,
					'pdd_ayah'				=> $pdd_ayah,
					'pekerjaan_ayah'		=> $pekerjaan_ayah,
					'penghasilan_ayah'	    => $penghasilan_ayah,
					'no_hp_ayah'			=> $no_hp_ayah,
					'nama_ibu'				=> $nama_ibu,
					'pdd_ibu'				=> $pdd_ibu,
					'pekerjaan_ibu'			=> $pekerjaan_ibu,
					'penghasilan_ibu'		=> $penghasilan_ibu,
					'no_hp_ibu'				=> $no_hp_ibu,
					'nama_wali'				=> $nama_wali,
					'pdd_wali'				=> $pdd_wali,
					'pekerjaan_wali'		=> $pekerjaan_wali,
					'penghasilan_wali'	    => $penghasilan_wali,
					'no_hp_wali'			=> $no_hp_wali,
					'npsn_sekolah'  	    => $npsn_sekolah,
					'nama_sekolah'			=> $nama_sekolah,
					'status_sekolah'		=> $status_sekolah,
					'model_un'				=> $model_un,
					'alamat_sekolah'		=> $alamat_sekolah,
					'thn_lulus'				=> $thn_lulus,
					'jalur_pendaftaran'		=> $jalur_pendaftaran,
				//		'prestasi'		=> $prestasi,
					'tgl_siswa'				=> $tgl_siswa
				);
				$this->db->insert('tbl_siswa', $data);

				for ($i = 1; $i <= 5; $i++) {
					if ($i == 1) {
						$mapel = 'Ilmu Pengetahuan Alam (IPA)';
						$smstr = 'ipa';
						//}elseif ($i == 2) {
						//	$mapel = 'Ilmu Pengetahuan Sosial (IPS)';
						//	$smstr = 'ips';
					} elseif ($i == 2) {
						$mapel = 'Matematika';
						$smstr = 'mtk';
					} elseif ($i == 3) {
						$mapel = 'Bahasa Indonesia';
						$smstr = 'ind';
					} elseif ($i == 4) {
						$mapel = 'Bahasa Inggris';
						$smstr = 'ing';
					} elseif ($i == 5) {
						$mapel = 'Ilmu Pengetahuan Sosial (IPS)';
						$smstr = 'ips';
					}
					$data2 = array(
						'mapel'				 	=> $mapel,
						'semester1'		 		=> $this->input->post($smstr . "1"),
						'semester2'				=> $this->input->post($smstr . "2"),
						'semester3'				=> $this->input->post($smstr . "3"),
						'semester4'				=> $this->input->post($smstr . "4"),
						'semester5'				=> $this->input->post($smstr . "5"),
						'rata_rata_nilai'	=> $this->input->post("nilai_" . $smstr),
						'no_pendaftaran'	=> $no_pendaftaran
					);
					$this->db->insert('tbl_rapor', $data2);
				}


				$this->session->set_userdata('no_pendaftaran', "$no_pendaftaran");
				redirect('panel_siswa/pendaftaran_berhasil');
			}
		}
	}
	public function login()
	{
		$data['web_ppdb']	 = $this->db->get_where('tbl_web', "id_web='1'")->row();
		//	if ($data['web_ppdb']->status_ppdb == 'tutup') {
		//		redirect('404');
		//	}
		$ceks = $this->session->userdata('no_pendaftaran');
		if (isset($ceks)) {
			redirect('panel_siswa');
		} else {
			$this->load->view('web/login', $data);

			if (isset($_POST['btnlogin'])) {
				$username = $_POST['username'];
				$pass	   = $_POST['password'];

				// $this->db->like('tgl_siswa', date('Y'), "after");
				$query  = $this->db->get_where('tbl_siswa', "no_pendaftaran='$username'");
				$cek    = $query->result();
				$cekun  = $cek[0]->no_pendaftaran;
				// var_dump($cekun);
				$jumlah = $query->num_rows();

				if ($jumlah == 0) {
					$this->session->set_flashdata(
						'msg',
						'
									 <div class="alert alert-danger alert-dismissible" role="alert">
									 		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;&nbsp;</span>
											</button>
											<strong>No. Pendaftaran "' . $username . '"</strong> belum terdaftar.
									 </div>'
					);
					redirect('web/login');
				} else {
					$row = $query->row();
					$cekpass = $row->password;
					if ($cekpass <> $pass) {
						$this->session->set_flashdata(
							'msg',
							'<div class="alert alert-warning alert-dismissible" role="alert">
													 		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">&times;&nbsp;</span>
															</button>
															<strong>No. Tes atau NISN Salah!</strong>.
													 </div>'
						);
						redirect('web/login');
					} else {

						$this->session->set_userdata('no_pendaftaran', "$cekun");

						redirect('panel_siswa');
					}
				}
			}
		}
	}


	function error_not_found()
	{
		$this->load->view('404_content');
	}
}
