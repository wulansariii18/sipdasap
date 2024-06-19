<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Area_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Method to get all areas
    public function get_all_area() {
        $query = $this->db->get('area');
        return $query->result();
    }

    // Method to get an area by ID
    public function getId($id) {
        $query = $this->db->get_where('area', array('id_area' => $id));
        return $query->row();
    }

    // Method to insert a new area
    public function insert($data) {
        return $this->db->insert('area', $data);
    }

    // Method to update an area by ID
    public function edit($id, $data) {
        $this->db->where('id_area', $id);
        return $this->db->update('area', $data);
    }

    // Method to delete an area by ID
    public function delete($id) {
        $this->db->where('id_area', $id);
        return $this->db->delete('area');
    }
}
?>
