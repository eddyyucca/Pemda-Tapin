<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai_m extends CI_Model
{
    public function jumlah_pegawai()
    {
        $query = $this->db->get('pegawai');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function jumlah_bidang()
    {
        $query = $this->db->get('bidang');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function get_all_pegawai()
    {
        $this->db->join('akun', 'akun.nip = pegawai.nip');
        $this->db->order_by('id_pegawai', 'DESC');
        return $this->db->get('pegawai')->result();
    }
    public function get_row_pegawai($id_pegawai)
    {
        $this->db->where('id_pegawai', $id_pegawai);
        $this->db->join('jabatan', 'jabatan.id_jab = pegawai.jabatan');
        $this->db->join('bidang', 'bidang.id_bidang = pegawai.bidang');

        return $this->db->get('pegawai')->row();
    }

    public function get_row_pegawai2($id_pegawai)
    {
        $this->db->where('id_pegawai', $id_pegawai);
        return $this->db->get('pegawai')->row();
    }

    public function get_all_pengajuan_admin()
    {
        return $this->db->get('berkas')->result();
    }

    public function get_all_pengajuan($nip)
    {

        $this->db->where('nip', $nip);
        $this->db->order_by('id_berkas', 'DESC');
        return $this->db->get('berkas')->result();
    }

    public function cek_pass($password, $nip)
    {
        $this->db->where('nip', $nip);
        $this->db->where('password', $password);
        $this->db->limit(1);
        $query = $this->db->get('akun');

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function data_absen($nip)
    {
        $this->db->where('id_peg', $nip);

        $this->db->order_by('id_absen', 'DESC');
        return $this->db->get('absen')->result();
    }
    public function cek_absen($nip, $tanggal, $tipe)
    {
        $this->db->where('id_peg', $nip);
        $this->db->where('tanggal', $tanggal);
        $this->db->where('tipe', $tipe);
        $this->db->order_by('id_absen', 'DESC');
        return $this->db->get('absen')->result();
    }
}

/* End of file Pegawai_m.php */
