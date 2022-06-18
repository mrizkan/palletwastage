<?php

include_once APPPATH ."core/MY_Controller.php" ;

class Calculation extends MY_Controller
{

    function calculate()
    {

        $this->form_validation->set_rules("form[MaterialAL]", "MaterialAL", "required");
        if ($this->form_validation->run()) {

//            $MaterialA[]=$this->session->set_userdata('MaterialA',$this->input->post('form[A]'));
//            $MaterialB[]=$this->session->set_userdata('MaterialB',$this->input->post('form[B]'));

            $PalletSize = $this->input->post('form[PalletSize]');
            $MaterialAL = $this->input->post('form[MaterialAL]');
            $MaterialANoOfPCS = $this->input->post('form[MaterialANoOfPCS]');
            $MaterialBL= $this->input->post('form[MaterialBL]');
            $MaterialBNoOfPCS= $this->input->post('form[MaterialBNoOfPCS]');
            $MaterialCL= $this->input->post('form[MaterialCL]');
            $MaterialCNoOfPCS= $this->input->post('form[MaterialCNoOfPCS]');

            //Calculations Start for A
            $Acm3 = $MaterialAL * 10 * 1.9;
            $Am3 = $Acm3/100000;

            //Calculations End

            //Calculations Start for B
            $Bcm3 = $MaterialBL * 10 * 1.9;
            $Bm3 = $Bcm3/100000;
            //Calculations End

            //Calculations Start for C
            $Ccm3 = $MaterialCL * 10 * 1.9;
            $Cm3 = $Ccm3/100000;
            //Calculations End

            $_SESSION['Material'][] = array(
                "PalletSize" => $PalletSize,
                "MaterialAL" => $MaterialAL,
                "Acm3" => $Acm3,
                "Am3" => $Am3,
                "MaterialANoOfPCS" => $MaterialANoOfPCS,
                "MaterialBL" => $MaterialBL,
                "Bcm3" => $Bcm3,
                "Bm3" => $Bm3,
                "MaterialBNoOfPCS" => $MaterialBNoOfPCS,
                "MaterialCL" => $MaterialCL,
                "Ccm3" => $Ccm3,
                "Cm3" => $Cm3,
                "MaterialCNoOfPCS" => $MaterialCNoOfPCS,
            );




//

//            echo count($_SESSION['cart']);
//            p($_SESSION);


            $d2['data'] = $PalletSize;
            $d2['data'] = $MaterialAL;
            $this->load->view('Dashboard', $d2);
        }


    }
    function print_datas()
    {
        $data['records'] = $_SESSION['Material'];
        //load the view, pass the variable and do not show it but "save" the output into $html variable
        $html=$this->load->view('print_all_datas.php', $data, true);
//        $html=$this->view($data);

//this the the PDF filename that user will get to download
        $pdfFilePath = "Print-Details.pdf";

//load mPDF library
        $this->load->library('pdf');
//actually, you can pass mPDF parameter on this load() functionorder
        $pdf = $this->pdf->load();
//generate the PDF!
        $pdf->WriteHTML($html);
//offer it to user via browser download! (The PDF won't be saved on your server HDD)
        $pdf->Output($pdfFilePath, "I");

    }

}