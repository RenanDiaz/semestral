<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class unidad extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->database();
    $this->load->library('form_validation');
    $this->load->library('session');
    $this->load->model('unidad_model');
  }

  public function index() {
    $unidades = $this->unidad_model->get_unidades();
    $data['unidades'] = $unidades;
    $this->load->view('unidades_view', $data);
  }

  public function insertar() {
    $this->form_validation->set_rules('descripcion', 'descripcion', 'required');
    if ($this->form_validation->run() == FALSE)
    {
      $data = "";
      $this->load->view('unidades_insertar_view', $data);
    }
    else
    {
      $data = array(
        'descripcion' => $this->input->post('descripcion')
      );
      $this->db->insert('unidad', $data);
      $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Unidad agregada</div>');
      redirect('unidad');
    }
  }

  public function editar($id) {
    $data['unidad'] = $this->unidad_model->get_unidad($id);

    $this->form_validation->set_rules('descripcion', 'descripcion', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('unidades_editar_view', $data);
    } else {
      $data = array(
        'descripcion' => $this->input->post('descripcion'),
      );

      $this->db->where('id', $id);
      $this->db->update('unidad', $data);

      $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Unidad editada con &eacute;xito.</div>');
      redirect('unidad');
    }
  }
}
