<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class documento_model extends CI_Model {
  function __construct() {
    parent::__construct();
  }

  function get_documentos() {
    $this->db->from('documento');

    $query = $this->db->get();
    $result = $query->result();

    return $result;
  }

  function get_documento($id) {
    $this->db->from('documento');
    $this->db->where('id', $id);

    $query = $this->db->get();
    $result = $query->result();

    return $result;
  }
}
