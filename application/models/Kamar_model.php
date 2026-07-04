<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar_model extends CI_Model {

    public function get_all() {
        return $this->db->get('kamar')->result();
    }

    public function get_by_id($id) {
        return $this->db->get_where('kamar', ['id_kamar' => $id])->row();
    }

    public function get_kosong() {
        return $this->db->get_where('kamar', ['status' => 'Kosong'])->result();
    }

    public function tambah($data) {
        return $this->db->insert('kamar', $data);
    }

    public function update($id, $data) {
        $this->db->where('id_kamar', $id);
        return $this->db->update('kamar', $data);
    }

    public function hapus($id) {
        return $this->db->delete('kamar', ['id_kamar' => $id]);
    }

    public function update_status($id, $status) {
        $this->db->where('id_kamar', $id);
        return $this->db->update('kamar', ['status' => $status]);
    }

    public function count_by_status($status) {
        return $this->db->get_where('kamar', ['status' => $status])->num_rows();
    }
}
