<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class products_model extends CI_Model{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function get_products_list()
    {
        //$sql =  'select department_name, employee_name,employee_no, salary from tbl_department, tbl_employee where tbl_department.department_id = tbl_employee.department_id';
        //$query = $this->db->query($sql);
        $this->db->from('products');
        $query = $this->db->get();

        $result = $query->result();
        return $result;
    }

    function get_name() {
        $this->db->select('name');
        $this->db->from('products');
        $query = $this->db->get();

        return $query->result();
    }

    function get_product($id) {
        $this->db->where('id', $id);
        $this->db->from('products');
        $query = $this->db->get();
        return $query->result();
    }
}
