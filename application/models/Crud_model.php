<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    function createData() {
        $data = array (
            'firstName' => $this->input->post('firstName'),
            'lastName' => $this->input->post('lastName'),
            'birthdate' => $this->input->post('birthdate'),
            'contactNo' => $this->input->post('contactNo'),
            'address' => $this->input->post('address')
        );
        $this->db->insert('employers_details', $data);
    }

    function getAllData() {
        $query = $this->db->query('SELECT * FROM employers_details');
        return $query->result();
    }

    function getData($id) {
        $query = $this->db->query('SELECT * FROM employers_details WHERE `id` =' .$id);
        return $query->row();
    }

    function updateData($id) {
        $data = array (
            'firstName' => $this->input->post('firstName'),
            'lastName' => $this->input->post('lastName'),
            'birthdate' => $this->input->post('birthdate'),
            'contactNo' => $this->input->post('contactNo'),
            'address' => $this->input->post('address')
        );
        $this->db->where('id', $id);
        $this->db->update('employers_details', $data);
    }

    function deleteData($id) {
        $this->db->where('id', $id);
        $this->db->delete('employers_details');
    }
}