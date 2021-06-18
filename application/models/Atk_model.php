<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Atk_model extends CI_Model
{

    public function getDataBarang()
    {
        $query = $this->db->get('data_barang');
        return $query->result();
    }

    public function getDataBarangById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('data_barang');
        return $query->row();
    }

    public function InsertOrder($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('Table', $data);
    }

    //ambil data mahasiswa dari database
    function getDataBarangPage($limit, $start)
    {
        $query = $this->db->get('data_barang', $limit, $start);
        return $query;
    }

    public function insertbarang($data)
    {
        $this->db->insert('data_barang', $data);
    }
    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('data_barang', $data);
    }

    public function excel()
    {
        $update = $this->db->get('data_barang');
        return $update->result();
    }
}

/* End of file Atk_model.php */
