<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{
    private $table = 'mahasiswa';

    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id" => $id])->row();
    }

    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result();
    }

    public function save()
    {
        $data = array(
            "nim" => $this->input->post('nim'),
            "nama" => $this->input->post('nama'),
            "jenis_kelamin" => $this->input->post('jenis_kelamin'),
            "telepon" => $this->input->post('telepon'),
            "alamat" => $this->input->post('alamat'),
            "kode_pos" => $this->input->post('kode_pos')
        );
        return $this->db->insert($this->table, $data);
    }

    public function update($id)
    {
        $data = array(
            "nim" => $this->input->post('nim'),
            "nama" => $this->input->post('nama'),
            "jenis_kelamin" => $this->input->post('jenis_kelamin'),
            "telepon" => $this->input->post('telepon'),
            "alamat" => $this->input->post('alamat'),
            "kode_pos" => $this->input->post('kode_pos')
        );
        return $this->db->update($this->table, $data, array('id' => $id));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }
}