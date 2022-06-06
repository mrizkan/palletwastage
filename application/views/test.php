$BuyerId = $this->session->userdata('Supplier_Id');
$SizeIdFromCart=0;
$BuyerNameFromCart=0;
$ReleasingQtyFromCart=0;
$ItemSizeFromCart=0;
$AfterReleasePendingQty=0;
$AfterReleaseReleasingQty=0;
$QuantityFlag=0;
$ItemFlag=0;



foreach ($this->cart->contents() as $items):
//get PO Number 01
//table recode by poid 02

$OrderMainDetailsForSupplierId = $this->ordermain->get_many_by(['Status' => 0 ,'BuyerId' =>$BuyerId]);
foreach ($OrderMainDetailsForSupplierId as $k => $orderdata):
$PoIdForTheBuyerFromOrderMainTable=$orderdata->PoId;
echo "<br><br>".$PoIdForTheBuyerFromOrderMainTable;echo "<br>";

$SizeIdFromCart= $items['id'];
$BuyerNameFromCart= $items['name'];
$ItemSizeFromCart= $items['size'];



$OrderDetailsFromOrderDetailsTable = $this->orderdetail->get_many_by(['PoId' => $PoIdForTheBuyerFromOrderMainTable]);
foreach ($OrderDetailsFromOrderDetailsTable as $r => $orderdetails):
if ($SizeIdFromCart==$orderdetails->SizeId) {

if($QuantityFlag == 0) {
$ReleasingQtyFromCart = $items['qty'];
}
else{

$ReleasingQtyFromCart = $AfterReleaseReleasingQty;
}

$sizedetail_data = $this->size->get($SizeIdFromCart);
$PendingFromOrderDetails= $orderdetails->Pending; $StockAtStore =$sizedetail_data->Quantity;
if ($PendingFromOrderDetails < $StockAtStore) {
echo "Cart Item Name " . $ItemSizeFromCart;
echo "<br>";
echo "Order Details Name " . $orderdetails->Size;
echo "<br>";
echo " Releasing Qty" . $ReleasingQtyFromCart;
echo "<br>";
echo "Pending Quantity " . $orderdetails->Pending;
echo "<br>";
echo "Stock at Store " . $sizedetail_data->Quantity;

echo "<br><br><br>";

echo "Calculations";
echo "<br>";
echo "After Release , New Release QTY ".  $AfterReleaseReleasingQty = $ReleasingQtyFromCart - $orderdetails->Pending;
echo "<br>";
if ($orderdetails->Pending > $ReleasingQtyFromCart){
$NewPendingQtyForOrderDetailTable= $orderdetails->Pending - $ReleasingQtyFromCart;
}
else{
$NewPendingQtyForOrderDetailTable=0;
}
echo "Aftre Release , New Pending QTY ". $NewPendingQtyForOrderDetailTable;
echo "<br>";

echo " After Release New Reasing Quantity ".$AfterReleaseReleasingQty;
// $ReleasingQtyFromCart =$AfterReleaseReleasingQty;
$QuantityFlag=1;
echo "<br><br><br>";

}
else{
echo"We Doesn't have enough Stock to Release";
} //Stock Checking IF finishing Here
} //Cheking Item ID If ends Here
endforeach; // Order Detail Table (Order Details for the PO ID from Order Main table)




endforeach; //Order Main Table (get the PO ID foreach end here)

endforeach; // Cart Item Fetch ends here