<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class tipo_documento_model extends CI_Model {
  function __construct() {
    parent::__construct();
  }

  function get_tipos_documento() {
    $this->db->from('tipo_documento');

    $query = $this->db->get();
    $result = $query->result();

    return $result;
  }

  function get_tipo_documento($id) {
    $this->db->from('tipo_documento');
    $this->db->where('id', $id);

    $query = $this->db->get();
    $result = $query->result();

    return $result;
  }
}
