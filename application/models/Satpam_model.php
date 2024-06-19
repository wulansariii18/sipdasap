<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satpam_model extends CI_Model {

    private $table = 'satpam';
    private $primary_key = 'id_satpam';

    public function __construct() {
        parent::__construct();
    }

    // Mendapatkan semua data dari tabel satpam
    public function getAll() {
        return $this->db->get($this->table)->result();
    }

    // Mendapatkan data area untuk combo box
    public function getArea() {
        $this->db->order_by('nama_area', 'ASC');
        return $this->db->get('area')->result();
    }

    // Mendapatkan data satpam berdasarkan ID
    public function getId($id) {
        return $this->db->get_where($this->table, array($this->primary_key => $id))->row();
    }

    // Menambahkan data baru ke tabel satpam
    public function insert($data) {
        $this->db->insert($this->table, $data);
    }

    // Mengedit data satpam berdasarkan ID
    public function edit($id, $data) {
        $this->db->update($this->table, $data, array($this->primary_key => $id));
    }

    // Menghapus data satpam berdasarkan ID
    public function delete($id) {
        $this->db->delete($this->table, array($this->primary_key => $id));
    }
}
