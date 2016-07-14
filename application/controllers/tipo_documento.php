<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class tipo_documento extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->database();
    $this->load->library('form_validation');
    $this->load->library('session');
    $this->load->model('tipo_documento_model');
  }

  public function index() {
    $tipos_documento = $this->tipo_documento_model->get_tipos_documento();
    $data['tipos_documento'] = $tipos_documento;
    $this->load->view('tipos_documento_view', $data);
  }

  public function editar($id) {
    $data['id'] = $id;

    $data['descripcion'] = $this->tipo_documento_model->get_descripcion($id);

    $this->form_validation->set_rules('descripcion', 'descripcion', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('tipo_documento_editar_view', $data);
    } else {
      $data = array(
        'descripcion' => $this->input->post('descripcion'),
      );

      $this->db->update('tipo_documento', $data);
      $this->db->where('id', $id);

      $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Tipo de documento editado con &eacute;xito.</div>');
      redirect('tipo_documento');
    }
  }
}
