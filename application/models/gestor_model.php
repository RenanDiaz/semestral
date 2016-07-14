<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class gestor_model extends CI_Model {
  function __construct() {
    parent::__construct();
  }

  function get_gestores() {
    $this->db->from('gestor');

    $query = $this->db->get();
    $result = $query->result();

    return $result;
  }

  function get_gestor($id) {
    $this->db->from('gestor');
    $this->db->where('id', $id);

    $query = $this->db->get();
    $result = $query->result();

    return $result;
  }
}
