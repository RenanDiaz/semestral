<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class unidad_model extends CI_Model {
  function __construct() {
    parent::__construct();
  }

  function get_unidades() {
    $this->db->from('unidad');

    $query = $this->db->get();
    $result = $query->result();

    return $result;
  }

  function get_descripcion($id) {
    $this->db->select('descripcion');
    $this->db->from('unidad');
    $this->db->where('id', $id);

    $query = $this->db->get();
    $result = $query->result();

    return $result;
  }

  function get_unidad($id) {
    $this->db->from('unidad');
    $this->db->where('id', $id);

    $query = $this->db->get();
    $result = $query->result();

    return $result;
  }
}
