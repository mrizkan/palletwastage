<?php

include_once APPPATH ."core/MY_Controller.php" ;

class ReturnItems extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Buyer_model', 'buyer');
        $this->load->model('Size_model', 'size');
        $this->load->model('Ordermain_model', 'ordermain');
        $this->load->model('Order_Detail_model', 'orderdetail');
        $this->load->model('DeliveryMain_model', 'deliverymain');
        $this->load->model('DeliveryDetail_model', 'deliverydetail');
        $this->controller = get_class();
    }

    function index()
    {
        $d['records'] = $this->ordermain->get_all();
        $this->load->view('mark_return', $d);

    }

    function updatereturn(){

        $PoIdFromForm = $this->input->post('form[PoId]');
        $d['OrderMainDetails'] = $this->ordermain->get_many_by(['PoId' => $PoIdFromForm]);
        $d['OrderDetails'] = $this->orderdetail->get_many_by(['PoId' => $PoIdFromForm]);

        $this->load->view('update_return', $d);

    }

    function updatereturndetails(){

      // $buyername = $this->input->post('po[BuyerName]');
      // $buyerid = $this->input->post('po[BuyerId]');
       $poid = $this->input->post('po[po]');

        foreach ($this->input->post('form[]') as $k => $Count) {

            $OrderDetailId = $k;
            $ReturningItemCount = $Count[0];
           // $sizeidtopass = $Count[1];

           $orderdetails = $this->orderdetail->get(['OrderDetailId' => $OrderDetailId]);

          // $SizeNamefromorderdetails = $orderdetails->Size;
           $PendingAtItemsforTheOrder = $orderdetails->Pending;
           $DeliveredItemsatTable = $orderdetails->Delivered;
           $ReturnItemsatTable = $orderdetails->ItemReturn;
           $NewReturnItemsforTable = $ReturnItemsatTable + $ReturningItemCount;
           $NewDeliveryItemstoTable =$DeliveredItemsatTable - $ReturningItemCount;
           $NewPendingAmount = $PendingAtItemsforTheOrder + $ReturningItemCount;

            if ($NewPendingAmount>0){
                $this->db->set('Status',0)->where('PoId', $poid)->update('ordermain');
            }
            $this->db->set('Pending',$NewPendingAmount)->where('OrderDetailId', $OrderDetailId)->update('order_details');
            $this->db->set('Delivered',$NewDeliveryItemstoTable)->where('OrderDetailId', $OrderDetailId)->update('order_details');
            $this->db->set('ItemReturn',$NewReturnItemsforTable)->where('OrderDetailId', $OrderDetailId)->update('order_details');


        }



        $d = '<div class="alert alert-success background-success"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <i class="icofont icofont-close-line-circled text-white"></i> </button> <strong>  Return Item Updated Successfully</strong> </div>';
        $this->session->set_flashdata('notification', $d);
        $this->index();

    }


}