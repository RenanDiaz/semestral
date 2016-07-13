<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class organizacion_model extends CI_Model{
  function __construct()
  {
    parent::__construct();
  }

  function get_lista_organizacion()
  {
    $this->db->from('organizacion');
    $query = $this->db->get();

    $result = $query->result();
    return $result;
  }

  function get_nombre($id) {
    $this->db->select('nombre');
    $this->db->from('organizacion');
    $this->db->where('id', $id);
    $query = $this->db->get();

    return $query->result();
  }

  function get_organizacion($id) {
    $this->db->where('id', $id);
    $this->db->from('organizacion');
    $query = $this->db->get();
    return $query->result();
  }

  function get_modelos($id) {
    $this->db->where('organizacion', $id);
    $this->db->from('modelo');
    $query = $this->db->get();
    return $query->result();
  }

  function get_modelo($idOrganizacion, $idElemento) {
    $this->db->where('organizacion', $idOrganizacion);
    $this->db->where('elemento', $idElemento);
    $this->db->from('modelo');
    $query = $this->db->get();
    return $query->result();
  }

  function get_elementos() {
    $this->db->from('elemento');
    $query = $this->db->get();
    $result = $query->result();

    $idElemento = array('-Seleccionar-');
    $valorElemento = array('-Seleccionar-');

    for ($i = 0; $i < count($result); $i++)
    {
        array_push($idElemento, $result[$i]->id);
        array_push($valorElemento, $result[$i]->valor);
    }
    return $elementos = array_combine($idElemento, $valorElemento);
  }
}
