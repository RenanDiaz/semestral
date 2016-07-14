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

  public function insertar() {
    $this->form_validation->set_rules('nombre', 'nombre', 'trim|required');
    $this->form_validation->set_rules('apellido', 'apellido', 'trim|required');
    if ($this->form_validation->run() == FALSE)
    {
      $data = "";
      $this->load->view('gestores_insertar_view', $data);
    }
    else
    {
      $data = array(
        'nombre' => $this->input->post('nombre'),
        'apellido' => $this->input->post('apellido')
      );
      $this->db->insert('gestor', $data);
      $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Gestor agregado</div>');
      redirect('gestor');
    }
  }

  public function editar($id) {
    $data['gestor'] = $this->gestor_model->get_gestor($id);

    $this->form_validation->set_rules('nombre', 'nombre', 'trim|required');
    $this->form_validation->set_rules('apellido', 'apellido', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('gestores_editar_view', $data);
    } else {
      $data = array(
        'nombre' => $this->input->post('nombre'),
        'apellido' => $this->input->post('apellido')
      );

      $this->db->where('id', $id);
      $this->db->update('gestor', $data);

      $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Gestor editado con &eacute;xito.</div>');
      redirect('gestor');
    }
  }

  public function eliminar($id) {
    $this->db->where('id', $id);
    $this->db->delete('gestor');
    redirect('gestor');
  }
}
