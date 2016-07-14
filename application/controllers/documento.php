<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class documento extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->database();
    $this->load->library('form_validation');
    $this->load->library('session');
    $this->load->model('documento_model');
  }

  public function index() {
    $documentos = $this->documento_model->get_documentos();

    $gestor = $documentos[0]->gestor;
    $this->load->model('gestor_model');
    $documentos[0]->gestor = $this->gestor_model->get_gestor($gestor);

    $unidad = $documentos[0]->unidad;
    $this->load->model('unidad_model');
    $documentos[0]->unidad = $this->unidad_model->get_unidad($unidad);

    $tipo_documento = $documentos[0]->tipo_documento;
    $this->load->model('tipo_documento_model');
    $documentos[0]->tipo_documento = $this->tipo_documento_model->get_tipo_documento($tipo_documento);

    $estado = $documentos[0]->estado;
    $this->load->model('estado_model');
    $documentos[0]->estado = $this->estado_model->get_estado($estado);

    $data['documentos'] = $documentos;
    $this->load->view('documentos_view', $data);
  }

  public function insertar() {
    $this->form_validation->set_rules('nombre', 'nombre', 'required');
    $this->form_validation->set_rules('descripcion', 'descripcion', 'required');
    $this->form_validation->set_rules('fecha', 'fecha', 'required');
    $this->form_validation->set_rules('gestor', 'gestor', 'required');
    $this->form_validation->set_rules('unidad', 'unidad', 'required');
    $this->form_validation->set_rules('tipo_documento', 'tipo_documento', 'required');
    $this->form_validation->set_rules('estado', 'estado', 'required');
    $this->form_validation->set_rules('archivo', 'archivo', 'required');

    if ($this->form_validation->run() == FALSE)
    {
      $data = "";
      $this->load->view('documentos_insertar_view', $data);
    }
    else
    {
      $data = array(
        'nombre' => $this->input->post('nombre'),
        'descripcion' => $this->input->post('descripcion'),
        'fecha' => $this->input->post('fecha'),
        'gestor' => $this->input->post('gestor'),
        'unidad' => $this->input->post('unidad'),
        'tipo_documento' => $this->input->post('tipo_documento'),
        'estado' => $this->input->post('estado'),
        'archivo' => $this->input->post('archivo')
      );
      $this->db->insert('documento', $data);
      $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Documento agregado</div>');
      redirect('documento');
    }
  }

  public function editar($id) {
    $data['documento'] = $this->documento_model->get_documento($id);

    $this->form_validation->set_rules('nombre', 'nombre', 'required');
    $this->form_validation->set_rules('descripcion', 'descripcion', 'required');
    $this->form_validation->set_rules('fecha', 'fecha', 'required');
    $this->form_validation->set_rules('gestor', 'gestor', 'required');
    $this->form_validation->set_rules('unidad', 'unidad', 'required');
    $this->form_validation->set_rules('tipo_documento', 'tipo_documento', 'required');
    $this->form_validation->set_rules('estado', 'estado', 'required');
    $this->form_validation->set_rules('archivo', 'archivo', 'required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('documentos_editar_view', $data);
    } else {
      $data = array(
        'nombre' => $this->input->post('nombre'),
        'descripcion' => $this->input->post('descripcion'),
        'fecha' => $this->input->post('fecha'),
        'gestor' => $this->input->post('gestor'),
        'unidad' => $this->input->post('unidad'),
        'tipo_documento' => $this->input->post('tipo_documento'),
        'estado' => $this->input->post('estado'),
        'archivo' => $this->input->post('archivo')
      );

      $this->db->where('id', $id);
      $this->db->update('documento', $data);

      $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Documento editado con &eacute;xito.</div>');
      redirect('documento');
    }
  }
}
