<?php

include_once APPPATH ."core/MY_Controller.php" ;

class Size extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Size_model', 'size');
        $this->controller = get_class();
    }

    function index(){
        $d['records'] = $this->size->get_all();
        $this->load->view('add_size', $d);
    }


    function Create_Size($_id = 0)
    {
        $d['records'] = '';
        $this->_form_body($d);
    }

    function _form_body($d, $_id = 0)
    {

        $this->form_validation->set_rules("form[Size]", "Size", "required");
        if ($this->form_validation->run()) {

            $post = $this->input->post('form');

            if ($_id) {
                //update Query()
                $this->size->update($_id, $post);
                $d = '<div class="alert alert-warning background-warning"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <i class="icofont icofont-close-line-circled text-white"></i> </button> <strong> Successfully Updated</strong> </div>';
                $this->session->set_flashdata('notification', $d);
                redirect('Size/Create_Size');
            } else {
                $this->size->insert($post);

                $d = '<div class="alert alert-success background-success"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <i class="icofont icofont-close-line-circled text-white"></i> </button> <strong>  Successfully Added</strong> </div>';
                $this->session->set_flashdata('notification', $d);
                redirect(current_url());
            }
        }
        $d['records'] = $this->size->get_all();

        $this->load->view('add_size', $d);
    }
    function edit($_id = 0)
    {
        if ($_id) {
            $r['records2'] = $this->size->get($_id);
            $this->_form_body($r, $_id);
//            $this->load->view('create_sales_rep', $d);
        }
    }
    function Delete($_id = 0)
    {
        $this->size->delete($_id);
        redirect('Size/Create_Size');
    }



}

function edit($_id = 0)
{
    if ($_id) {
        $d['records2'] = $this->model->get($_id);
        $this->_form_body($d, $_id);
//            $this->load->view('create_sales_rep', $d);
    }
}

function Delete($_id = 0)
{
    $this->model->delete($_id);
    redirect('Size/index');
}

