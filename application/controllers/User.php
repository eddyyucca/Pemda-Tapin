<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('jabatan_m');
        $this->load->model('pegawai_m');
        $this->load->model('pengajuan_m');

        $level_akun = $this->session->userdata('level');
        if ($level_akun != "user") {

            return redirect('auth');
        }
    }
    public function index()
    {
        $id_pegawai = $this->session->userdata('id_pegawai');
        $data['judul'] = 'Dashboard Pegawai';
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $id_pegawai =  $this->session->userdata('id_pegawai');
        $data['data'] = $this->pegawai_m->get_row_pegawai($id_pegawai);

        $this->load->view('template_user/header', $data);
        $this->load->view('user/index', $data);
        $this->load->view('template_user/footer');
    }

    public function data_pegawai()
    {
        $data['judul'] = 'Dashboard Pegawai';
        $data['data'] = $this->pegawai_m->get_all_pegawai();

        $this->load->view('template/header', $data);
        $this->load->view('user/index', $data);
        $this->load->view('template/footer');
    }


    // pengajuan gaji
    // -------------------- //
    // public function pengajuan($id_pegawai)
    // {
    //     //logika waktu pengajuan
    //     $tanggal_lahir = "s";
    //     $birthDate = new DateTime($tanggal_lahir);
    //     $today = new DateTime("today");
    //     if ($birthDate > $today) {
    //         exit("0 tahun 0 bulan 0 hari");
    //     }
    //     $y = $today->diff($birthDate)->y;
    //     $m = $today->diff($birthDate)->m;
    //     $d = $today->diff($birthDate)->d;
    //     return $y . " tahun " . $m . " bulan " . $d . " hari";
    //     //end logika

    //     $data['judul'] = 'Data Pegawai';
    //     $data['data'] = $this->pegawai_m->get_all_pegawai();

    //     $this->load->view('template/header', $data);
    //     $this->load->view('admin/pegawai/pegawai_baru', $data);
    //     $this->load->view('template/footer');
    // }

    public function pengajuan()
    {
        $data['judul'] = 'Upload SK Terakhir';
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $id_pegawai =  $this->session->userdata('id_pegawai');
        $data['data'] = $this->pegawai_m->get_row_pegawai($id_pegawai);
        $nip =  $this->session->userdata('nip');
        $data['waktu'] = $this->pengajuan_m->cek_pengajuan($nip);
        $data['pesan'] = false;
        $this->load->view('template_user/header', $data);
        $this->load->view('user/pengajuan/pengajuan_gaji', $data);
        $this->load->view('template_user/footer');
    }
    public function history_pengajuan()
    {
        $data['judul'] = 'Upload SK Terakhir';
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $nip =  $this->session->userdata('nip');
        $data['data'] = $this->pegawai_m->get_all_pengajuan($nip);
        $data['pesan'] = false;
        $this->load->view('template_user/header', $data);
        $this->load->view('user/pengajuan/history_pengajuan', $data);
        $this->load->view('template_user/footer');
    }

    public function pengajuan_baru($nip)
    {
        $config['upload_path']   = './assets/file_pengajuan/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
        //$config['max_size']      = 100; 
        //$config['max_width']     = 1024; 
        //$config['max_height']    = 768;  

        $this->load->library('upload', $config);
        // script upload file 1
        $this->upload->do_upload('file');
        $x = $this->upload->data();
        $id_pegawai =  $this->session->userdata('id_pegawai');
        // $data_model = $this->pegawai_m->get_row_pegawai($id_pegawai);

        $data = array(
            'nip' => $nip,
            'file' => $x["file_name"],
            'date' => date('Y-m-d'),
            'status_pengajuan' => "Diperiksa"
        );
        $this->db->insert('berkas', $data);
        $data['judul'] = 'Upload SK Terakhir';
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $id_pegawai =  $this->session->userdata('id_pegawai');
        $data['data'] = $this->pegawai_m->get_row_pegawai($id_pegawai);
        $nip =  $this->session->userdata('nip');
        $data['waktu'] = $this->pengajuan_m->cek_pengajuan($nip);
        $data['pesan'] = false;
        $data['pesan'] = '<div class="alert alert-success" role="alert">Berkas Berhasil Di Upload !
            </div>';
        $this->load->view('template_user/header', $data);
        $this->load->view('user/pengajuan/pengajuan_gaji', $data);
        $this->load->view('template_user/footer');
    }

    public function ubah_pengajuan($id_pegawai)
    {
        $data['judul'] = 'Data Pegawai';
        $data['data'] = $this->pegawai_m->get_all_pegawai();

        $this->load->view('template/header', $data);
        $this->load->view('admin/pegawai/pegawai_baru', $data);
        $this->load->view('template/footer');
    }
    // pengajuan end
    // -------------------- //

    // passoword
    // ==========================

    public function ubah_password()
    {
        $data['judul'] = 'Ubah Password Pegawai';
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $id_pegawai =  $this->session->userdata('id_pegawai');
        $data['data'] = $this->pegawai_m->get_row_pegawai($id_pegawai);
        $data['pesan'] = false;
        $this->load->view('template_user/header', $data);
        $this->load->view('user/password/ubah_password', $data);
        $this->load->view('template_user/footer');
    }

    public function proses_ubah_password($nip)
    {
        $password = md5($this->input->post('password_lama'));
        $cek = $this->pegawai_m->cek_pass($password, $nip);

        if ($cek == true) {
            $data['judul'] = 'Ubah Password Pegawai';
            $data['nama'] = $this->session->userdata('nama_lengkap');
            $id_pegawai =  $this->session->userdata('id_pegawai');
            $data['data'] = $this->pegawai_m->get_row_pegawai($id_pegawai);
            $data['pesan'] = '<div class="alert alert-success" role="alert">Password Berhasil Diubah !
    </div>';
            $data_update = array(
                "password" => md5($this->input->post('password_baru'))
            );
            $this->db->where('nip', $nip);
            $this->db->update('akun', $data_update);

            $this->load->view('template_user/header', $data);
            $this->load->view('user/password/ubah_password', $data);
            $this->load->view('template_user/footer');
        } else {
            $data['judul'] = 'Ubah Password Pegawai';
            $data['nama'] = $this->session->userdata('nama_lengkap');
            $id_pegawai =  $this->session->userdata('id_pegawai');
            $data['data'] = $this->pegawai_m->get_row_pegawai($id_pegawai);
            $data['pesan'] = '<div class="alert alert-danger" role="alert">Password Salah !
    </div>';

            $this->load->view('template_user/header', $data);
            $this->load->view('user/password/ubah_password', $data);
            $this->load->view('template_user/footer');
        }
    }
    // end password
}

/* End of file User.php */
