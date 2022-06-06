<?php

include_once APPPATH."core/MY_Controller.php" ;

class Order extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('cart');
        $this->load->model('Buyer_model', 'buyer');
        $this->load->model('Size_model', 'size');
        $this->load->model('Ordermain_model', 'ordermain');
        $this->load->model('Order_Detail_model', 'orderdetail');

        $this->controller = get_class();


    }

    function add()
    {

        $d['buyers'] = $this->buyer->get_all();
        $d['sizes'] = $this->size->get_all();
        $this->load->view('add_order',$d);

    }

    function cart()
    {
        $supplier_id= $this->input->post('form[Supplier]');
        $PONumber= $this->input->post('form[PoNumber]');


            $supplier_datas =$this->buyer->get_many_by(['BuyerId' => $supplier_id]);
            foreach ($supplier_datas as $k => $supplier_data):
               $supplier_name=$supplier_data->Name;
            endforeach;

            $this->session->set_userdata('Supplier_Name', $supplier_name);
        $this->session->set_userdata('Supplier_Id', $supplier_id);
        $this->session->set_userdata('PoNumber', $PONumber);
        $size_id= $this->input->post('form[Size]');
        $size_datas =$this->size->get_many_by(['SizeId' => $size_id]);
        foreach ($size_datas as $k => $size_data):
                    $size=$size_data->Size;
        endforeach;

            $data = array(
                'id'=>$this->input->post('form[Size]'),
                'name'=>$supplier_name,
                'qty'=>$this->input->post('form[Quantity]'),
                'price'=>$this->input->post('form[Price]'),
                'size'=>$size,

            );

            $this->cart->insert($data);

//         p($this->cart->contents()); exit;
        $d = '<div class="alert border-info background-info"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <i class="icofont icofont-close-line-circled text-white"></i> </button> <strong> P.O. Details Updated for '. $supplier_name .'</strong> </div>';
        $this->session->set_flashdata('notification', $d);
             $this->add();
        //redirect('Order/add');
      //$this->cart->destroy();
//            p($this->input->post('form[rowid]'));
//            echo "<br><br><br>after update datas will be dislay below<br><br><br>";
//            p($this->input->post('form[rowid]'));

//            $data = array(
//                'rowid' => $this->input->post('form[rowid]'),
//                'qty'   => 0
//            );
//
//
//            $this->cart->update($data);
//            p($this->cart->contents());






    }

    function cart_delete($_id = 0)
    {
        $data = array(
               'rowid' => $_id,
              'qty'   => 0
           );
        $this->cart->update($data);
        redirect('Order/add');

    }

    function cart_destroy(){
        $this->cart->destroy();
//        $this->add();
        redirect('Order/add');

    }


    function addpo(){
       $po_number = $this->session->userdata('PoNumber');
       $supplier_name = $this->session->userdata('Supplier_Name');
       $supplier_id = $this->session->userdata('Supplier_Id');


        $data = array(
            'PoId'=>$po_number,
            'BuyerId'=>$supplier_id,
            'BuyerName'=>$supplier_name,

        );

        $this->ordermain->insert($data);
        $i = 1;
        foreach ($this->cart->contents() as $items):

            $data = array(
                'PoId'=>$po_number,
                'BuyerId'=>$supplier_id,
                'SizeId'=>$items['id'],
                'Size'=>$items['size'],
                'Quantity'=>$items['qty'],
                'Price'=>$items['price'],
                'Delivered'=>0,
                'Pending'=>$items['qty'],
                'SubTotal'=>$items['subtotal'],
            );

         $this->orderdetail->insert($data);
            $i++;
        endforeach;

        $d = '<div class="alert alert-success background-success"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <i class="icofont icofont-close-line-circled text-white"></i> </button> <strong> P.O. Added Successfully for '. $supplier_name .'</strong> </div>';
        $this->session->set_flashdata('notification', $d);
        $this->cart_destroy();

        }

        function manage_po(){
            $d2['records'] = $this->ordermain->get_all();
            $this->load->view('manage_order', $d2);
        }

        function view_order($_id = 0){

            $d2['ordermain_data'] = $this->ordermain->get_many_by(['PoId' => $_id]);
            $d2['orderdetail_data'] = $this->orderdetail->get_many_by(['PoId' => $_id]);
//            p($this->db->last_query());
//            exit;
//            p($d2);
//            exit;
        $this->load->view('view_order', $d2);
        }

        function delete_order($_id=0){


            $this->db->where('Poid', $_id)->delete('ordermain');
            $this->db->where('Poid', $_id)->delete('order_details');
            $d = '<div class="alert alert-danger background-danger"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <i class="icofont icofont-close-line-circled text-white"></i> </button> <strong> Purchase order  '. $_id .' is Successfully Deleted from the system</strong> </div>';
            $this->session->set_flashdata('notification', $d);

//            p($this->db->last_query());
//            exit;


            $this->manage_po();
        }






}