<?php

include_once APPPATH ."core/MY_Controller.php" ;

class Delivery extends MY_Controller
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

    function index(){
        $d2['records'] = $this->ordermain->get_many_by(['Status' => 0]);
        $this->load->view('add_delivery', $d2);
    }
    function update_delivery($_id = 0){

        $d2['ordermain_data'] = $this->ordermain->get_many_by(['PoId' => $_id]);
        $d2['orderdetail_data'] = $this->orderdetail->get_many_by(['PoId' => $_id]);
        $d2['sizedetail_data'] = $this->size->get_all();
//            p($this->db->last_query());
//            exit;
//            p($d2);
//            exit;
        $this->load->view('update_delivery', $d2);
        $AlreadyInserted =0;
        if ($this->input->post()) {

            $buyername = $this->input->post('po[BuyerName]');
            $buyerid = $this->input->post('po[BuyerId]');
            $poid = $this->input->post('po[po]');
            $poDeliveryDate = $this->input->post('po[deliverydate]');


            //p($this->input->post('form[]'));

            foreach ($this->input->post('form[]') as $k => $Count) {

              $OrderDetailId = $k;
              $ReleasingAmount = $Count[0];
              $sizeidtopass = $Count[1];

              $orderdetails = $this->orderdetail->get(['OrderDetailId' => $OrderDetailId]);

                $SizeNamefromorderdetails = $orderdetails->Size;
                $PendingAtItemsforTheOrder = $orderdetails->Pending;
                $OrderDetailIdPrice = $orderdetails->Price;
                $OrderDetailIdSubTotal = $OrderDetailIdPrice * $ReleasingAmount;

                $SizeTableDetails = $this->size->get(['SizeId' => $sizeidtopass]);
                $CurrentQuantityFomTheSizeTable = $SizeTableDetails->Quantity;
                $SizeIdtoSizeTable = $SizeTableDetails->SizeId;

                if($CurrentQuantityFomTheSizeTable<$ReleasingAmount || $PendingAtItemsforTheOrder<$ReleasingAmount){

                    $d = '<div class="alert alert-danger background-danger"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <i class="icofont icofont-close-line-circled text-white"></i> </button> <strong>  Please check the Current Stock or Pending Item Count</strong> </div>';
                    $this->session->set_flashdata('notification', $d);
                    redirect('Delivery/index');
                }
                else{

                    $new_delivered_amount = $ReleasingAmount + $orderdetails->Delivered;
                    $new_pending_amount = $PendingAtItemsforTheOrder - $ReleasingAmount;
                    $NewQuantityToSizeTable = $CurrentQuantityFomTheSizeTable - $ReleasingAmount;

                    if($new_pending_amount==0){
                            $this->db->set('Status',1)->where('PoId', $poid)->update('ordermain');
                    } //if only condion no else for this

                    if ($AlreadyInserted==0) {
                        date_default_timezone_set("Asia/Colombo");

                        $deliverymaindetailfortable = array(
                            'Date' => $poDeliveryDate,
                            'Time' => date("h:i:sa"),
                            'PoId' => $poid,
                            'BuyerId' => $buyerid,
                            'BuyerName' => $buyername,

                        );

                        $this->deliverymain->insert($deliverymaindetailfortable);
                        $insert_id = $this->db->insert_id();
                        $AlreadyInserted = 1;
                    }

                    $deliverydetailfortable = array(
                        'DeliveryMainId' => $insert_id,
                        'ItemName' => $SizeNamefromorderdetails,
                        'Releasing_Quantity' => $ReleasingAmount,
                        'Price' => $OrderDetailIdPrice,
                        'SubTotal' => $OrderDetailIdSubTotal,

                    );
                    $this->deliverydetail->insert($deliverydetailfortable);



//                    p($deliverymaindetailfortable);
//                    echo"<br><br><br>";
//                    p($deliverydetailfortable);
//                    exit;

                        $this->db->set('Pending',$new_pending_amount)->where('OrderDetailId', $OrderDetailId)->update('order_details');
                        $this->db->set('Delivered',$new_delivered_amount)->where('OrderDetailId', $OrderDetailId)->update('order_details');
                        $this->db->set('Quantity',$NewQuantityToSizeTable)->where('SizeId', $SizeIdtoSizeTable)->update('size');

//                    date_default_timezone_set("Asia/Colombo");
//
//                    $deliverydetailsdata = array(
//                        'Date' => date("d-m-Y"),
//                        'Time' => date("h:i:sa"),
//                        'PoId' => $poid,
//                        'BuyerId' => $buyerid,
//                        'BuyerName' => $buyername,
//                        'ItemName' => $SizeNamefromorderdetails,
//                        'Releasing_Quantity' => $ReleasingAmount,
//                        'Price' => $OrderDetailIdPrice,
//                        'SubTotal' => $OrderDetailIdSubTotal,
//                        'OrderDetailId' => $OrderDetailId,
//                    );

  //                  p($deliverydetailsdata);
//                    p($deliverymaindetailfortable);
//                    echo"<br><br><br>";
//                    p($deliverydetailfortable);


                    $d = '<div class="alert alert-success background-success"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <i class="icofont icofont-close-line-circled text-white"></i> </button> <strong>  Delivery Details Updated Successfully</strong> </div>';
                    $this->session->set_flashdata('notification', $d);
                }  //else finishing here


            } //foreach finishing here

//            echo $insert_id;
//            exit;


           //$this->delivery_note($insert_id);
            redirect(base_url('Delivery/delivery_note/'.$insert_id));
            //redirect(base_url("Delivery/index"));
        }
//        $this->index();
    }


    function deliverybulk(){

//        $d2['records'] = $this->ordermain->get_many_by(['Status' => 0]);
        $d2['buyers'] = $this->buyer->get_all();
        $d2['sizes'] = $this->size->get_all();
        $this->load->view('add_delivery_bulk', $d2);

        }

    function deliverycart(){

      $supplier_id= $this->input->post('form[Supplier]');
        $supplier_datas =$this->buyer->get_many_by(['BuyerId' => $supplier_id]);
        foreach ($supplier_datas as $k => $supplier_data):
            $supplier_name=$supplier_data->Name;
        endforeach;

        $this->session->set_userdata('Supplier_Name', $supplier_name);
        $this->session->set_userdata('Supplier_Id', $supplier_id);
        $size_id= $this->input->post('form[Size]');
        $size_datas =$this->size->get_many_by(['SizeId' => $size_id]);

        foreach ($size_datas as $k => $size_data):
            $size=$size_data->Size;
        endforeach;

        $data = array(
            'id'=>$this->input->post('form[Size]'),
            'name'=>$supplier_name,
            'qty'=>$this->input->post('form[Quantity]'),
            'price'=>1,
            'size'=>$size,

        );

        $this->cart->insert($data);
        $this->deliverybulk();

    }

    function delivery_calculation(){
       $BuyerId = $this->session->userdata('Supplier_Id');
        $SizeIdFromCart=0;
        $BuyerNameFromCart=0;
        $ReleasingQtyFromCart=0;
        $ItemSizeFromCart=0;
        $AfterReleasePendingQty=0;
        $AfterReleaseReleasingQty=0;
        $QuantityFlag=1;
        $ItemFlag=0;
        $NewPendingQty=0;

        foreach ($this->cart->contents() as $items):

                $SizeIdFromCart = $items['id'];
                $BuyerNameFromCart = $items['name'];
                $ItemSizeFromCart = $items['size'];
                $ReleasingQtyFromCart = $items['qty'];
                $OrderMainDetailsForSupplierId = $this->ordermain->get_many_by(['Status' => 0, 'BuyerId' => $BuyerId]);
                foreach ($OrderMainDetailsForSupplierId as $k => $orderdata):
                    $PoIdForTheBuyerFromOrderMainTable = $orderdata->PoId;

                    $OrderDetailsFromOrderDetailsTable = $this->orderdetail->get_many_by(['PoId' => $PoIdForTheBuyerFromOrderMainTable]);

                    foreach ($OrderDetailsFromOrderDetailsTable as $r => $orderdetails):

                        if ($SizeIdFromCart == $orderdetails->SizeId) {

                            echo "<br><br>";
                            echo "POID " . $PoIdForTheBuyerFromOrderMainTable;
                            echo "<br>Matched Size ID from Order Details Table is " . $orderdetails->SizeId;
                            echo "<br>Size Id from cart is " . $SizeIdFromCart;
                            echo "<br>Pending QTY is " . $orderdetails->Pending;
                            echo "<br>Releasing QTY is " . $ReleasingQtyFromCart;
                            if ($ReleasingQtyFromCart>$orderdetails->Pending) {
                                echo "<br>After Release New QTY in cart " . $AfterReleaseReleasingQty = $ReleasingQtyFromCart - $orderdetails->Pending;
                            }
                            else{

                                echo "<br>New Pending QTY " . $NewPendingQty = $orderdetails->Pending - $ReleasingQtyFromCart;
                                $AfterReleaseReleasingQty=0;
                            }
                            echo "<br><br>";

                            echo "After Release balance Release ".$ReleasingQtyFromCart =$AfterReleaseReleasingQty;

//


                        }
//
                    endforeach; //Order Detail Table Details foreach Ends Here
                endforeach; //Order Main Table (get the PO ID foreach end here)
        endforeach; // Cart Item Fetch ends here
        exit;



        }
    function delivery_calculation_rr(){

        $BuyerId = $this->session->userdata('Supplier_Id');

        foreach ($this->cart->contents() as $items){
            $Pre_orders_details = $this->orderdetail->get_by(['BuyerId' => $BuyerId,'SizeId' => $items['id']]);

            if($Pre_orders_details->Pending!=0){

                $order_Quantity=$Pre_orders_details->Quantity;
                $order_Delivered=$Pre_orders_details->Delivered;
                $order_Pending=$Pre_orders_details->Pending;

                $size_abl_qty = $this->size->get($items['id']);

                if($size_abl_qty->Quantity >= $order_Pending){

                    p('Cart Item Name '.$items['size']);
                    p('Order Details Name '.$Pre_orders_details->Size);
                    p('Releasing Qty '.$items['qty']);
                    p('Pending Quantity '.$order_Pending);
                    p('Stock at Store '.$size_abl_qty->Quantity);

                    echo "Calculations";
                    echo '<br/>';

                    $afr_rls_pending_qty=$order_Pending-$items['qty'];
                    $afr_rls_stock_qty=$size_abl_qty->Quantity-$items['qty'];

                    p('After Release , New Pending QTY '.$afr_rls_pending_qty);
                    p('After Release New Stock Quantity '.$afr_rls_stock_qty);


                }else{
                    p("We Doesn't have enough Stock to Release this product ".$items['size']);
                }


            }
            echo '<br/>';
            echo '----------------- End Cart Row '.$items['rowid'].' ----------------';
            echo '<br/>';

        }

    }


    function cart_destroy(){
        $this->cart->destroy();
//        $this->add();
        redirect('Delivery/deliverybulk');

    }

    function cart_delete($_id = 0)
    {
        $data = array(
            'rowid' => $_id,
            'qty'   => 0
        );
        $this->cart->update($data);
        redirect('Delivery/deliverybulk');

    }








    function delivery_note($_id){

      $GetBuyerIdFromDeliveryTable = $this->deliverymain->get($_id);

        $d['BuyerDetails'] = $this->buyer->get($GetBuyerIdFromDeliveryTable->BuyerId);

        $d['DeliveryMainDetails'] = $this->deliverymain->get(['DeliveryMainId' => $_id]);
        $d['DeliveryDetails'] = $this->deliverydetail->get_many_by(['DeliveryMainId' => $_id]);

        $this->load->view('delivery_note_generate',$d);


    }

    function invoice($_id){

        $GetBuyerIdFromDeliveryTable = $this->deliverymain->get($_id);

        $d['BuyerDetails'] = $this->buyer->get($GetBuyerIdFromDeliveryTable->BuyerId);

        $d['DeliveryMainDetails'] = $this->deliverymain->get(['DeliveryMainId' => $_id]);
        $d['DeliveryDetails'] = $this->deliverydetail->get_many_by(['DeliveryMainId' => $_id]);

        $this->load->view('invoice_generate',$d);

    }

    function mobiledeliverynote($_id){

        $GetBuyerIdFromDeliveryTable = $this->deliverymain->get($_id);

        $d['BuyerDetails'] = $this->buyer->get($GetBuyerIdFromDeliveryTable->BuyerId);

        $d['DeliveryMainDetails'] = $this->deliverymain->get(['DeliveryMainId' => $_id]);
        $d['DeliveryDetails'] = $this->deliverydetail->get_many_by(['DeliveryMainId' => $_id]);

        $this->load->view('mobile_deliverynote',$d);
    }

    function mobileinvoice($_id){

        $GetBuyerIdFromDeliveryTable = $this->deliverymain->get($_id);

        $d['BuyerDetails'] = $this->buyer->get($GetBuyerIdFromDeliveryTable->BuyerId);

        $d['DeliveryMainDetails'] = $this->deliverymain->get(['DeliveryMainId' => $_id]);
        $d['DeliveryDetails'] = $this->deliverydetail->get_many_by(['DeliveryMainId' => $_id]);

        $this->load->view('mobile_invoice',$d);
    }

    function viewdelivery(){


        $d2['delivery_datas'] = $this->deliverymain->get_all();
        $this->load->view('view_delivery',$d2);

    }









}



