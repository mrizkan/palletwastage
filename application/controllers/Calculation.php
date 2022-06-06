<?php

include_once APPPATH ."core/MY_Controller.php" ;

class Calculation extends MY_Controller
{

    function calculate()
    {

        $this->form_validation->set_rules("form[A]", "A", "required");
        if ($this->form_validation->run()) {
            $MaterialA = $this->input->post('form[A]');
            $MaterialB = $this->input->post('form[B]');
            $MaterialL = $this->input->post('form[L]');
            $d2['data'] = $MaterialA * $MaterialB;
            $this->load->view('Dashboard', $d2);
        }


    }

}