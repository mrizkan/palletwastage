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
            $MaterialARL = $this->input->post('form[MaterialARL]');
            $MaterialARNPCS = $this->input->post('form[MaterialARNPCS]');
            $MaterialBL= $this->input->post('form[MaterialBL]');
            $MaterialBNoOfPCS= $this->input->post('form[MaterialBNoOfPCS]');
            $MaterialBRL= $this->input->post('form[MaterialBRL]');
            $MaterialBRNPCS= $this->input->post('form[MaterialBRNPCS]');
            $MaterialCL= $this->input->post('form[MaterialCL]');
            $MaterialCNoOfPCS= $this->input->post('form[MaterialCNoOfPCS]');
            $MaterialCRL= $this->input->post('form[MaterialCRL]');
            $MaterialCRNPCS= $this->input->post('form[MaterialCRNPCS]');

            //Calculations Start for A
            $Acm3 = $MaterialAL * 10 * 1.9;
            $Am3 = $Acm3/100000;
            $MaterialASMVMPuS = $MaterialAL * 10 * 1.9 * $MaterialANoOfPCS /1000000;
            $MaterialAAMVuMP = $MaterialARL * 10 * 1.9 * $MaterialARNPCS /1000000;
            $MaterialAOffCut = $MaterialAL - $MaterialARL;
            $MaterialAWastage =$MaterialASMVMPuS - $MaterialAAMVuMP;

            //Calculations End

            //Calculations Start for B
            $Bcm3 = $MaterialBL * 10 * 3.8;
            $Bm3 = $Bcm3/100000;
            $MaterialBSMVMPuS = $MaterialBL * 10 * 3.8 * $MaterialBNoOfPCS /1000000;
            $MaterialBAMVuMP = $MaterialBRL * 10 * 3.8 * $MaterialBRNPCS /1000000;
            $MaterialBOffCut = $MaterialBL - $MaterialBRL;
            $MaterialBWastage = $MaterialBSMVMPuS - $MaterialBAMVuMP;

            //Calculations End

            //Calculations Start for C
            $Ccm3 = $MaterialCL * 10 * 3.8;
            $Cm3 = $Ccm3/100000;
            $MaterialCSMVMPuS = $MaterialCL * 10 * 3.8 * $MaterialCNoOfPCS /1000000;
            $MaterialCAMVuMP = $MaterialCRL * 10 * 3.8 * $MaterialCRNPCS /1000000;
            $MaterialCOffCut = $MaterialCL - $MaterialCRL;
            $MaterialCWastage = $MaterialCSMVMPuS - $MaterialCAMVuMP;

            //Calculations End

            if ($Ccm3==0) {
                //Total Calculation for A and B only
                echo "C is 0";
                $TotalSMVMPuS = $MaterialASMVMPuS + $MaterialBSMVMPuS;
                $TotalAMVuMP = $MaterialAAMVuMP + $MaterialBAMVuMP;
                $TotalOffCut = $MaterialAOffCut + $MaterialBOffCut;
                $TotalWastage = $MaterialAWastage + $MaterialBWastage;

                //Total Calculation for A and B End
            }else {
                //Total Calculation for All Start
                echo "C is Not 0";
                $TotalSMVMPuS = $MaterialASMVMPuS + $MaterialBSMVMPuS + $MaterialCSMVMPuS;
                $TotalAMVuMP = $MaterialAAMVuMP + $MaterialBAMVuMP + $MaterialCAMVuMP;
                $TotalOffCut = $MaterialAOffCut + $MaterialBOffCut + $MaterialCOffCut;
                $TotalWastage = $MaterialAWastage + $MaterialBWastage + $MaterialCWastage;
                //Total Calculation for All End
            }

            $_SESSION['Material'][] = array(
                "PalletSize" => $PalletSize,
                "MaterialAL" => $MaterialAL,
                "Acm3" => $Acm3,
                "Am3" => $Am3,
                "MaterialANoOfPCS" => $MaterialANoOfPCS,
                "MaterialASMVMPuS" => $MaterialASMVMPuS,
                "MaterialARequiredPSMP" => $MaterialARL,
                "MaterialARequiredNPCS" => $MaterialARNPCS,
                "MaterialAAMVuMP" => $MaterialAAMVuMP,
                "MaterialAOffCut" => $MaterialAOffCut,
                "MaterialAWastage" => $MaterialAWastage,
                "MaterialBL" => $MaterialBL,
                "Bcm3" => $Bcm3,
                "Bm3" => $Bm3,
                "MaterialBNoOfPCS" => $MaterialBNoOfPCS,
                "MaterialBSMVMPuS" => $MaterialBSMVMPuS,
                "MaterialBRequiredPSMP" => $MaterialBRL,
                "MaterialBRequiredNPCS" => $MaterialBRNPCS,
                "MaterialBAMVuMP" => $MaterialBAMVuMP,
                "MaterialBOffCut" =>$MaterialBOffCut,
                "MaterialBWastage" => $MaterialBWastage,
                "MaterialCL" => $MaterialCL,
                "Ccm3" => $Ccm3,
                "Cm3" => $Cm3,
                "MaterialCNoOfPCS" => $MaterialCNoOfPCS,
                "MaterialCSMVMPuS" => $MaterialCSMVMPuS,
                "MaterialCRequiredPSMP" => $MaterialCRL,
                "MaterialCRequiredNPCS" => $MaterialCRNPCS,
                "MaterialCAMVuMP" => $MaterialCAMVuMP,
                "MaterialCOffCut" =>$MaterialCOffCut,
                "MaterialCWastage" => $MaterialCWastage,
                "TotalSMVMPuS" => $TotalSMVMPuS,
                "TotalAMVuMP" => $TotalAMVuMP,
                "TotalOffCut" => $TotalOffCut,
                "TotalWastage" => $TotalWastage,
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