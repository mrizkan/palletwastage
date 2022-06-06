$BuyerId = $this->session->userdata('Supplier_Id');

foreach ($this->cart->contents() as $items){
$Pre_orders_details = $this->orderdetail->get_by(['BuyerId' => $BuyerId,'SizeId' => $items['id']]);

p($this->db->last_query());

echo "<br>";
p($Pre_orders_details);
exit;

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