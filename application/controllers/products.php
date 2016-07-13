<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class products extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        $this->list_products();
    }
    public function list_products()
    {
        //load the department_model
        $this->load->model('products_model');
        //call the model function to get the department data
        $prodresult = $this->products_model->get_products_list();
        $data['prodlist'] = $prodresult;
        //load the department_view
        $this->load->view('products_view',$data);
    }

    function insert()
    {
        //fetch data from department and designation tables

        $this->form_validation->set_rules('name', 'name', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            //fail validation
            //
            $data = "";
            $this->load->view('products_insert_view', $data);
        }
        else
        {
            //pass validation
            $data = array(
                'name' => $this->input->post('name'),
                'price' => $this->input->post('price'),
                'image' => $this->input->post('image'),

            );

            //insert the form data into database
            $this->db->insert('products', $data);

            //display success message
            $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Producto Agregado!!!</div>');
            redirect('products/list_products');
        }

    }

    function update($id)
    {
        $data['id'] = $id;
        //load the department_model
        $this->load->model('products_model');

        //fetch employee record for the given employee no
        $data['product'] = $this->products_model->get_product($id);

        //set validation rules
        $this->form_validation->set_rules('name', 'Product Name', 'trim|required|xss_clean|callback_alpha_only_space');

        if ($this->form_validation->run() == FALSE)
        {
            //fail validation
            $this->load->view('update_product_view', $data);
        }
        else
        {
            //pass validation
            $data = array(
                'name' => $this->input->post('name'),
                'price' => $this->input->post('price'),
                'image' => $this->input->post('image'),
            );

            //update employee record
            $this->db->where('id', $id);
            $this->db->update('products', $data);

            //display success message
            $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Product Record is Successfully Updated!</div>');
            redirect('products/');
        }
    }

    function alpha_only_space($str)
    {
        if (!preg_match("/^([-a-z ])+$/i", $str))
        {
            $this->form_validation->set_message('alpha_only_space', 'The %s field must contain only alphabets or spaces');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
}
