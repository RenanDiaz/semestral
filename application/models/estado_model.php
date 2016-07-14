<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class estado_model extends CI_Model {
  function __construct() {
    parent::__construct();
  }

  function get_estados() {
    $this->db->from('estado');
    
    $query = $this->db->get();
    $result = $query->result();

    return $result;
  }

  function get_descripcion($id) {
    $this->db->select('descripcion');
    $this->db->from('estado');
    $this->db->where('id', $id);

    $query = $this->db->get();
    $result = $query->result();

    return $result;
  }

  function get_estado($id) {
    $this->db->from('estado');
    $this->db->where('id', $id);

    $query = $this->db->get();
    $result = $query->result();

    return $result;
  }
}
