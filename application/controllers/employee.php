<?php
/*
* File Name: employee.php
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class employee extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('form_validation');
        //load the employee model
        $this->load->model('employee_model');
    }

    //index function
    function index()
    {
        //fetch data from department and designation tables
        $data['department'] = $this->employee_model->get_department();
        $data['designation'] = $this->employee_model->get_designation();

        //set validation rules
        $this->form_validation->set_rules('employeeno', 'Employee No', 'trim|required|numeric');
        $this->form_validation->set_rules('employeename', 'Employee Name', 'trim|required|xss_clean|callback_alpha_only_space');
        $this->form_validation->set_rules('department', 'Department', 'callback_combo_check');
        $this->form_validation->set_rules('designation', 'Designation', 'callback_combo_check');
        $this->form_validation->set_rules('hireddate', 'Hired Date', 'required');
        $this->form_validation->set_rules('salary', 'Salary', 'required|numeric');

        if ($this->form_validation->run() == FALSE)
        {
            //fail validation
            $this->load->view('employee_view', $data);
        }
        else
        {
            //pass validation
            $data = array(
                'employee_no' => $this->input->post('employeeno'),
                'employee_name' => $this->input->post('employeename'),
                'department_id' => $this->input->post('department'),
                'designation_id' => $this->input->post('designation'),
                'hired_date' => @date('Y-m-d', @strtotime($this->input->post('hireddate'))),
                'salary' => $this->input->post('salary'),
            );

            //insert the form data into database
            $this->db->insert('tbl_employee', $data);

            //display success message
            $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Employee details added to Database!!!</div>');
            redirect('employee/index');
        }

    }
    public function lista_empleados()
    {
        //load the department_model
        $this->load->model('employee_model');
        //call the model function to get the department data
        $deptresult = $this->employee_model->get_employee_record_all();
        $data['deptlist'] = $deptresult;
        //load the department_view
        $this->load->view('employee_list_view',$data);
    }
    //custom validation function for dropdown input
    function combo_check($str)
    {
        if ($str == '-SELECT-')
        {
            $this->form_validation->set_message('combo_check', 'Valid %s Name is required');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
    // MODULO PARA ACTUALIZAR EL EMPLEADO

    //index function
    function actualizar($empno)
    {
        $data['empno'] = $empno;

        //fetch data from department and designation tables
        $data['department'] = $this->employee_model->get_department();
        $data['designation'] = $this->employee_model->get_designation();

        //fetch employee record for the given employee no
        $data['emprecord'] = $this->employee_model->get_employee_record($empno);

        //set validation rules
        $this->form_validation->set_rules('employeename', 'Employee Name', 'trim|required|xss_clean|callback_alpha_only_space');
        $this->form_validation->set_rules('department', 'Department', 'callback_combo_check');
        $this->form_validation->set_rules('designation', 'Designation', 'callback_combo_check');
        $this->form_validation->set_rules('hireddate', 'Hired Date', 'required');
        $this->form_validation->set_rules('salary', 'Salary', 'required|numeric');

        if ($this->form_validation->run() == FALSE)
        {
            //fail validation
            $this->load->view('update_employee_view', $data);
        }
        else
        {
            //pass validation
            $data = array(
                'employee_name' => $this->input->post('employeename'),
                'department_id' => $this->input->post('department'),
                'designation_id' => $this->input->post('designation'),
                'hired_date' => @date('Y-m-d', @strtotime($this->input->post('hireddate'))),
                'salary' => $this->input->post('salary'),
            );

            //update employee record
            $this->db->where('employee_no', $empno);
            $this->db->update('tbl_employee', $data);

            //display success message
            $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Employee Record is Successfully Updated!</div>');
            redirect('updateEmployee/index/' . $empno);
        }
    }
    //custom validation function to accept only alpha and space input
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
?>
