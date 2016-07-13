<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class organizacion extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->database();
    $this->load->library('form_validation');
    $this->load->library('session');
    $this->load->model('organizacion_model');
  }

  public function index() {
    $this->listar_organizaciones();
  }

  public function listar_organizaciones() {
    $organizaciones = $this->organizacion_model->get_lista_organizacion();
    $data['organizaciones'] = $organizaciones;
    $this->load->view('organizacion_view', $data);
  }

  function insertar() {
      $this->form_validation->set_rules('nombre', 'Nombre', 'trim|required');
      $this->form_validation->set_rules('direccion', 'Direccion', 'trim|required');
      $this->form_validation->set_rules('cantidad_empleados', 'Cantidad de empleados', 'integer|required|greater_than[-1]');
      $this->form_validation->set_rules('indice_tecnologico', 'Indice tecnologico', 'integer|required|greater_than[-1]');

    if ($this->form_validation->run() == FALSE) {
      $data = "";
      $this->load->view('organizacion_insertar_view', $data);
    } else {
      $data = array(
        'nombre' => $this->input->post('nombre'),
        'direccion' => $this->input->post('direccion'),
        'cantidad_empleados' => $this->input->post('cantidad_empleados'),
        'indice_tecnologico' => $this->input->post('indice_tecnologico')
      );

      $this->db->insert('organizacion', $data);

      $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Organizaci&oacute;n agregada con &eacute;xito.</div>');
      redirect('organizacion');
    }
  }

  function editar($id) {
    $data['id'] = $id;

    $data['organizacion'] = $this->organizacion_model->get_organizacion($id);

    $this->form_validation->set_rules('nombre', 'Nombre', 'trim|required');
    $this->form_validation->set_rules('direccion', 'Direccion', 'trim|required');
    $this->form_validation->set_rules('cantidad_empleados', 'Cantidad de empleados', 'integer|required|greater_than[-1]');
    $this->form_validation->set_rules('indice_tecnologico', 'Indice tecnologico', 'integer|required|greater_than[-1]');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('organizacion_editar_view', $data);
    } else {
      $data = array(
        'nombre' => $this->input->post('nombre'),
        'direccion' => $this->input->post('direccion'),
        'cantidad_empleados' => $this->input->post('cantidad_empleados'),
        'indice_tecnologico' => $this->input->post('indice_tecnologico')
      );

      $this->db->where('id', $id);
      $this->db->update('organizacion', $data);

      $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Organizaci&oacute;n editada con &eacute;xito.</div>');
      redirect('organizacion');
    }
  }

  function modelo($id) {
    $data['id'] = $id;
    $data['organizacion'] = $this->organizacion_model->get_nombre($id)[0]->nombre;
    $data['elementos'] = $this->organizacion_model->get_elementos();

    $modelos = $this->organizacion_model->get_modelos($id);
    $data['modelos'] = $modelos;
    $this->load->view('modelo_view', $data);
  }

  function insertarModelo($id) {
    $data['id'] = $id;
    $data['organizacion'] = $this->organizacion_model->get_nombre($id)[0]->nombre;
    $data['elementos'] = $this->organizacion_model->get_elementos();

    $this->form_validation->set_rules('elemento', 'Elemento', 'trim|required');
    $this->form_validation->set_rules('valor', 'Valor', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('modelo_insertar_view', $data);
    } else {
      $data = array(
        'organizacion' => $id,
        'elemento' => $this->input->post('elemento'),
        'valor' => $this->input->post('valor')
      );

      $this->db->insert('modelo', $data);

      $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Modelo agregado con &eacute;xito.</div>');
      redirect('organizacion/modelo/' . $id);
    }
  }

  function editarModelo($idOrganizacion, $idElemento) {
    $data['organizacion'] = $this->organizacion_model->get_nombre($idOrganizacion)[0]->nombre;
    $data['modelo'] = $this->organizacion_model->get_modelo($idOrganizacion, $idElemento);
    $data['elementos'] = $this->organizacion_model->get_elementos();

    $this->form_validation->set_rules('elemento', 'Elemento', 'trim|required');
    $this->form_validation->set_rules('valor', 'Valor', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('modelo_editar_view', $data);
    } else {
      $data = array(
        'organizacion' => $idOrganizacion,
        'elemento' => $this->input->post('elemento'),
        'valor' => $this->input->post('valor')
      );

      $this->db->where('organizacion', $idOrganizacion);
      $this->db->where('elemento', $idElemento);
      $this->db->update('modelo', $data);

      $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Modelo editado con &eacute;xito.</div>');
      redirect('organizacion/modelo/' . $idOrganizacion);
    }
  }
}
