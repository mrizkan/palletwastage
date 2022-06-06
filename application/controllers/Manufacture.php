<?php

include_once APPPATH . "core/MY_Controller.php";

class Manufacture extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('cart');
        $this->load->model('Size_model', 'size');
        $this->load->model('Manufacture_model', 'manufacture');
        $this->load->model('Pallet_model', 'pallet');
        $this->controller = get_class();
        date_default_timezone_set(date_default_timezone_get());
    }

    function add()
    {
        if ($this->input->post()) {
            //splitting the array the getting the data out
            $date = $this->input->post('form[Date]');
            $date_array = array(
                'Date' => $date,
            );
            $this->manufacture->insert($date_array);
            $last_inserted_id = $this->db->insert_id();

            foreach ($this->input->post('size[]') as $SizeId => $Count) {

                $quantityofsize = $this->size->get(['SizeId' => $SizeId]);
                $CurrentQuantityFomTheSize = $quantityofsize->Quantity;
                $NewQuantityToSizeTable = $CurrentQuantityFomTheSize + $Count;

              $this->db->set('Quantity',$NewQuantityToSizeTable)->where('SizeId', $SizeId)->update('size');


                $data2 = array(
                    'ManufactureId' => $last_inserted_id,
                    'SizeID' => $SizeId,
                    'Quantity' => $Count,
                );

                $this->pallet->insert($data2);
                $d = '<div class="alert alert-success background-success"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <i class="icofont icofont-close-line-circled text-white"></i> </button> <strong>  Pallets for the ' . $date . ' is Successfully Added</strong> </div>';
                $this->session->set_flashdata('notification', $d);
            }
        }

        $d2['sizes'] = $this->size->get_all();
        $this->load->view('add_pallet', $d2);
    }

    function addnew()
    {
        $d2['sizes'] = $this->size->get_all();
        $this->load->view('add_pallet_new', $d2);

    }

    function manufacturecart()
    {
        $SelectedDate= $this->input->post('form[Date]');
        $Quantityfromform= $this->input->post('form[Quantity]');
        $SizeIDtoPass= $this->input->post('form[Size]');
        $sizedatas =$this->size->get_many_by(['SizeId' => $SizeIDtoPass]);

        foreach ($sizedatas as $k => $sizedata):
            $Sizename=$sizedata->Size;
        endforeach;
        $this->session->set_userdata('Selected_Date', $SelectedDate);
        $data = array(
            'id'=>$SizeIDtoPass,
            'name'=>$Sizename,
            'qty'=>$Quantityfromform,
            'price'=>1,
            'size'=>$Sizename,
        );

        $this->cart->insert($data);

        redirect('Manufacture/addnew');
    }

    function addpo()
    {
        
        $date = $this->session->userdata('Selected_Date');
        $date_array = array(
            'Date' => $date,
        );
        $this->manufacture->insert($date_array);
        $last_inserted_id = $this->db->insert_id();




        $i = 1;
        foreach ($this->cart->contents() as $items):

            $data2 = array(
                'ManufactureId' => $last_inserted_id,
                'SizeID' => $items['id'],
                'Quantity' => $items['qty'],
            );

            $quantityofsize = $this->size->get(['SizeId' => $items['id']]);
            $CurrentQuantityFomTheSize = $quantityofsize->Quantity;
            $NewQuantityToSizeTable = $CurrentQuantityFomTheSize + $items['qty'];

            $this->db->set('Quantity',$NewQuantityToSizeTable)->where('SizeId', $items['id'])->update('size');

            $this->pallet->insert($data2);
            $i++;
        endforeach;
        $d = '<div class="alert alert-success background-success"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <i class="icofont icofont-close-line-circled text-white"></i> </button> <strong> Manufacture Details Added Successfully</strong> </div>';
        $this->session->set_flashdata('notification', $d);
        $this->cart_destroy();

    }

    function cart_destroy(){
        $this->cart->destroy();
//        $this->add();
        redirect('Manufacture/addnew');

    }

    function cart_delete($_id = 0)
    {
        $data = array(
            'rowid' => $_id,
            'qty'   => 0
        );
        $this->cart->update($data);
        redirect('Manufacture/addnew');

    }


    function manage()
    {
        $d2['records'] = $this->manufacture->get_all();
        $this->load->view('manage_pallet', $d2);


    }

    function edit($_id = 0)
    {
        if ($_id) {
            //$d2['records2'] = $this->db->where('Date',$_id)->get('pallet')->result();
            $d2['manufacture_data'] = $this->manufacture->get_many_by(['ManufactureId' => $_id]);
            $d2['pallets'] = $this->pallet->get_many_by(['ManufactureId' => $_id]);
            $d2['sizes'] = $this->size->get_all();
            $this->load->view('edit_pallet', $d2);
        }
        if ($this->input->post()) {
            $manufacture_id = $this->input->post('form[ManufactureId]');

//            Delete the datas in the pallet table before insert the data
            $this->db->where('ManufactureId', $manufacture_id)->delete('pallet');

            foreach ($this->input->post('size[]') as $SizeId => $Count) {

//                get qty difference
                $update_size_difference_qty=abs($Count['UpdtQuantity']-$Count['OldQuantity']);

//                checked, if updated quantity greater than old quantity
                if($Count['UpdtQuantity']>$Count['OldQuantity']){
                    $update_size_qty=$Count['OldSizeQuantity'] + $update_size_difference_qty;
                    $update_size_data = array(
                        'Quantity' => $update_size_qty,
                    );
                    $this->size->update($SizeId, $update_size_data);

//                    checked, if updated quantity less than old quantity
                }elseif ($Count['UpdtQuantity']<$Count['OldQuantity']){
                    $update_size_qty=$Count['OldSizeQuantity'] - $update_size_difference_qty;
                    $update_size_data = array(
                        'Quantity' => $update_size_qty,
                    );
                    $this->size->update($SizeId, $update_size_data);
                }

//                update pallet table data
                $data2 = array(
                    'ManufactureId' => $manufacture_id,
                    'SizeID' => $SizeId,
                    'Quantity' => $Count['UpdtQuantity'],
                );
                $this->pallet->insert($data2);
            }

            $d = '<div class="alert alert-warning background-warning"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <i class="icofont icofont-close-line-circled text-white"></i> </button> <strong> Successfully Updated</strong> </div>';
            $this->session->set_flashdata('notification', $d);
            redirect('Manufacture/addnew');


        }

    }

    function delete($_id = 0)
    {
        if ($_id) {

            $pallet_table_data=$this->pallet->get_many_by(['ManufactureId' => $_id]);
            foreach ($pallet_table_data as $key => $pallet_data){

                $size_data = $this->size->get(['SizeId' => $pallet_data->SizeId]);

                $update_size_qty=$size_data->Quantity-$pallet_data->Quantity;

                $update_qty='';
                if($update_size_qty <= 0){
                    $update_qty=0;
                }else{
                    $update_qty=$update_size_qty;
                }
                $update_size_data = array(
                    'Quantity' => $update_qty,
                );
                $this->size->update($size_data->SizeId, $update_size_data);

            }
            $this->db->where('ManufactureId', $_id)->delete('pallet');
            $this->db->where('ManufactureId', $_id)->delete('manufacture');

        }
        $d = '<div class="alert alert-danger background-danger"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <i class="icofont icofont-close-line-circled text-white"></i> </button> <strong> All the Details are Deleted Successfully</strong> </div>';
        $this->session->set_flashdata('notification', $d);
        redirect('Manufacture/addnew');

    }
} 