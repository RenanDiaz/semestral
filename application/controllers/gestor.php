<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class gestor extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->database();
    $this->load->library('form_validation');
    $this->load->library('session');
    $this->load->model('gestor_model');
  }

  public function index() {
    $gestores = $this->gestor_model->get_gestores();
    $data['gestores'] = $gestores;
    $this->load->view('gestores_view', $data);
  }

  public function editar($id) {
    $data['gestor'] = $this->gestor_model->get_gestor($id);

    $this->form_validation->set_rules('descripcion', 'descripcion', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('gestor_editar_view', $data);
    } else {
      $data = array(
        'descripcion' => $this->input->post('descripcion'),
      );

      $this->db->update('gestor', $data);
      $this->db->where('id', $id);

      $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Gestor editado con &eacute;xito.</div>');
      redirect('gestor');
    }
  }
}
