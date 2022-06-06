<link rel="stylesheet" type="text/css" href="<?= base_url() ?>bower_components/bootstrap/css/deliverynote.css">

<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">

    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300,400,700'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/css/foundation-flex.min.css'>
    <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'><link rel="stylesheet" href="./style.css">
    <style>
        @media print {
            .control-group {
                display: none;
            }
        }
    </style>
</head>
<body>
<!-- partial:index.partial.html -->

<div class="row expanded">
    <main class="columns">
        <div class="inner-container">
            <header class="row control-group">
                <a href="javascript:window.close();"  class="button hollow secondary"><i class="ion ion-chevron-left"></i> Close</a>
                &nbsp;&nbsp;<a href="javascript:window.print()" class="button"><i class="ion-ios-paper-outline"></i> Print Invoice</a>

            </header>
            <section class="row">
                <div class="callout large invoice-container">
                    <table class="invoice">
                        <tr class="header">
                            <td class="">
                                <img src="<?= base_url() ?>assets/images/malogo.png" alt="MA Enterprise" style="width: 20%;" />
                            </td>
                            <td class="align-right">
                                <h2>Invoice</h2>
                            </td>
                        </tr>
                        <tr class="intro">
                            <td class="">
                                <?php echo $BuyerDetails->Name; echo"<br><br>";
                                echo "Dear " .$BuyerDetails->ContactPerson;
                                echo",<br>"; echo $BuyerDetails->Address;
                                echo"<br>"; echo $BuyerDetails->Contact1; echo"/"; echo $BuyerDetails->Contact2; echo"/"; echo $BuyerDetails->Contact3;
                                echo"<br>"; echo $BuyerDetails->Email;?>

                                <!--                                Thank you for your order.-->
                            </td>
                            <td class="text-right">

                                <span class="num">P.O. # <?php echo $DeliveryMainDetails->PoId ?></span><br>
                                Date : <?php echo $DeliveryMainDetails->Date ?><br>
                                <span style="display: none;">Time : <?php date_default_timezone_set("Asia/Colombo"); echo date("h:i:sa"); ?></span>

                            </td>
                        </tr>
                        <tr class="details">
                            <td colspan="2">
                                <table>
                                    <thead>
                                    <tr>
                                        <th class="desc">Item Description</th>
                                        <th class="id">Size</th>
                                        <th class="id">Price</th>
                                        <th class="qty">Quantity</th>
                                        <th class="amt">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $InvoiceSubTotal=0; foreach ($DeliveryDetails as $k => $row):
                                        if ($row->Releasing_Quantity<>0){?>

                                        <tr class="item">
                                            <td class="desc">Pallet Pinewood</td>
                                            <td class="id num"><?php echo $row->ItemName; ?></td>
                                            <td class="qty"><?php  echo number_format($row->Price,2); ?></td>
                                            <td class="qty"><?php echo $row->Releasing_Quantity; ?> pcs</td>
                                            <td class="amt"><?php echo number_format($row->SubTotal,2); ?></td>
                                        </tr>
                                    <?php $InvoiceSubTotal = $InvoiceSubTotal+$row->SubTotal; } endforeach; ?>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr class="totals">
                            <td><td>
                                <table>
                                    <tbody><tr class="subtotal">
                                        <td class="num">Subtotal</td>
                                        <td class="num"><?php echo number_format($InvoiceSubTotal,2); ?></td>
                                    </tr>
<!--                                    <tr class="fees">-->
<!--                                        <td class="num">Shipping &amp; Handling</td>-->
<!--                                        <td class="num">$0.00</td>-->
<!--                                    </tr>-->
                                    <tr class="tax">
                                        <td class="num">Suspended Vat (8%)</td>
                                        <td class="num"><?php echo number_format($vat= $InvoiceSubTotal*8/100,2); ?></td>
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <td>Rs.<?php echo number_format($InvoiceSubTotal+$vat,2); ?></td>
                                    </tr>
                                    </tbody></table>
                            </td>
                        </tr>

                    </table>

                    <section class="additional-info">
                        <div class="row">
                            <div class="columns" style="font-size: 15px;">
                                <h5>Payment Information</h5>
                                <b>Account Name :</b> M.A. ENTERPRISES<br>
                                <b>BANK Name :</b> HATTON NATIONAL BANK<br>
                                <b>BANK A/C :</b> 069010017897<br>
                                <b>BRANCH CODE :</b> 069<br>

                            </div>

                            <div class="columns">

                                <img src="https://chart.googleapis.com/chart?chs=100x100&cht=qr&chl=<?= base_url() ?>Delivery/mobileinvoice/<?php echo $DeliveryMainDetails->DeliveryMainId ?>%2F&choe=UTF-8" title="Scan me for Verification" style="float: right;" />
                            </div>

                        </div>
                        <div class="row">
                            <div class="columns text-center" style="    margin-top: 35px; opacity: 0.5;">
                                IT Solution Partner Riz Creation (PVT) Ltd +94 777 943 607
                            </div>
                        </div>
                    </section>
                </div>
            </section>
        </div>
    </main>
</div>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/js/foundation.js'></script>
</body>
</html>


