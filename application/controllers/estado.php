<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class estado extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->database();
    $this->load->library('form_validation');
    $this->load->library('session');
    $this->load->model('estado_model');
  }

  public function index() {
    $estados = $this->estado_model->get_estados();
    $data['estados'] = $estados;
    $this->load->view('estados_view', $data);
  }

  public function editar($id) {
    $data['id'] = $id;

    $data['descripcion'] = $this->estado_model->get_descripcion($id);

    $this->form_validation->set_rules('descripcion', 'descripcion', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('estado_editar_view', $data);
    } else {
      $data = array(
        'descripcion' => $this->input->post('descripcion'),
      );

      $this->db->update('estado', $data);
      $this->db->where('id', $id);

      $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Estado editado con &eacute;xito.</div>');
      redirect('estado');
    }
  }
}
