<?php

include_once APPPATH ."core/MY_Controller.php" ;

class Buyer extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Buyer_model', 'buyer');
        $this->controller = get_class();
    }

    function index(){
        $d['records'] = $this->buyer->get_all();
        $this->load->view('manage_buyers', $d);
    }


    function Create_Buyer($_id = 0)
    {
        $d['records'] = '';
        $this->_form_body($d);
    }

    function _form_body($d, $_id = 0)
    {

        $this->form_validation->set_rules("form[Name]", "Name", "required");
        if ($this->form_validation->run()) {

            $post = $this->input->post('form');

            if ($_id) {
                //update Query()
                $this->buyer->update($_id, $post);

                $d = '<div class="alert alert-warning background-warning"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <i class="icofont icofont-close-line-circled text-white"></i> </button> <strong>' . $post['Name'] . ' Successfully Updated</strong> </div>';
                $this->session->set_flashdata('notification', $d);

            } else {
                $this->buyer->insert($post);

                $d = '<div class="alert alert-success background-success"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <i class="icofont icofont-close-line-circled text-white"></i> </button> <strong> ' . $post['Name'] . ' Successfully Added as Supplier</strong> </div>';
                $this->session->set_flashdata('notification', $d);
            }

            redirect(current_url());
        }

        $this->load->view('create_buyer', $d);
    }


    function edit($_id = 0)
    {
        if ($_id) {
            $d['records'] = $this->buyer->get($_id);
            $this->_form_body($d, $_id);
//            $this->load->view('create_sales_rep', $d);
        }
    }

    function Delete($_id = 0)
    {
        $this->buyer->delete($_id);
        redirect('Buyer/index');
    }







}