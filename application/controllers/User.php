<?php

include_once APPPATH."core/MY_Controller.php" ;

class User extends MY_Controller
{
    var $page = "user";

    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model','model');
        $this->load->model('Employee_model', 'employee');
        $this->controller =  get_class();
    }


    function create()
    {
        $this->obj = $this->model->get_all_fields();
        $d = [
            'page' => "$this->page/form",
            'obj' => $this->obj
        ];
        $this->_form($d);
    }

    function edit($_id = 0)
    {
        if ($_id) {
            $d = [
                'page' => "$this->page/form",
                'obj' => $this->model->get($_id)
            ];
            $this->_form($d, $_id);
        } else {
            $this->index();
        }
    }

    function index()
    {
        $d = [
            'page' => "$this->page/index",
            'records' => $this->model->get_all()
        ];
        $this->_form($d);
    }


    function _form(&$d,$_id=0){



        $this->form_validation->set_rules("form[EmployeeId]","Employee","required");
        $this->form_validation->set_rules("form[Type]","User Type","required");
//        if(!$_id) {
//            $this->form_validation->set_rules("form[Username]", "User Name", "required|is_unique[user_tab.Username]");
//        }
        if( $this->form_validation->run() ) {

            $one_employee = $this->employee->get($this->input->post('form[EmployeeId]'));

            $post = $this->input->post('form') ;
            $post['Username'] = str_replace(' ', '',$one_employee->EmployeeEmail) ;
            $post['Name'] = $one_employee->EmployeeName;
            $post['Type'] = $this->input->post('form[Type]');
            $post['Password'] = '7c4a8d09ca3762af61e59520943dc26494f8941b';


            $this->db->trans_begin();
            if($_id){
                $this->model->update($_id,$post);
            }else{
                $this->model->insert($post);
            }

            if ($this->db->trans_status() === FALSE)  {
                $this->db->trans_rollback();
                $this->session->set_flashdata('notification', ["alert"=>"danger","text"=>'<strong> '.(!$_id?"Creation.":"Update.").' Failure !!! </strong>']);
            }
            else  {
                $this->session->set_flashdata('notification', ["alert"=>"success","text"=>'<strong> Successfully '.(!$_id?"Created. The Username is ".$post['Username']:"Updated.").'</strong>']);
                $this->db->trans_commit();
            }
            redirect(current_url());
        }
        $d['employee_all'] = $this->employee->get_all();
        $this->view($d);
    }



    function delete($_id=0){
        $this->model->delete($_id);
        redirect(base_url("$this->controller"));
    }




}