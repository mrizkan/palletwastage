<?php
//p($_SESSION['Material']);exit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pallet Wastage Print</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>

        .invoice-box {
            max-width: 2480px;
            /*max-width: 100%;*/
            margin: auto;
            padding: 30px;
            /*border: 1px solid #eee;*/
            /*box-shadow: 0 0 10px rgba(0, 0, 0, .15);*/
            /*font-size: 16px;*/
            /*line-height: 24px;*/
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        .head {
            font-size: 12px;
            font-weight: bold;
            background-color: #8dd27a;
        }
        .head,th,td {
            padding: 5px;
        }
        .infomation{
            font-size: 12px;
            padding: 5px;
        }

    </style>

</head>
<body>

<div class="invoice-box">
    <pagebreak orientation="landscape">
    <table class="table" >
        <thead>
        <tr style="background-color: #de3c3c; color: white;">
            <th rowspan="2">Pallet Code</th>
            <th rowspan="2">Pallet Size</th>
            <th rowspan="2">Material Details</th>
            <th colspan="3">Standard Size Used for a plank cm</th>
            <th colspan="2">Volume of Standard plank</th>
            <th colspan="1">No. of PCS used for a Pallet</th>
            <th colspan="1">Standard Material Volume for
                Manufacturing a Pallet using Standard
            </th>
            <th colspan="3">Required plank size for manufacturing a
                Pallet
            </th>
            <th colspan="1">No. of PCS used for a Pallet</th>
            <th colspan="1">Actual Material Volume used for
                Manufacturing of a pallet
            </th>
            <th colspan="1">Off Cut</th>
            <th colspan="1">Off Cut Wastage</th>
            <th colspan="1">Wastage</th>
            <th colspan="1">Wastage %</th>
        </tr>
        <tr style="background-color: #de3c3c; color: white;">
            <th>L</th>
            <th>W</th>
            <th>H</th>
            <th>cm<sup>3</sup></th>
            <th>m<sup>3</sup></th>
            <th>#</th>
            <th>#</th>
            <th>L</th>
            <th>W</th>
            <th>H</th>
            <th>#</th>
            <th>(Y m<sup>3</sup>)</th>
            <th>cm</th>
            <th>m<sup>3</sup></sup></th>
            <th>(x-y m<sup>3</sup>)</th>
            <th>m<sup>3</sup></th>
        </tr>
        </thead>
        <tbody>
        <?php $p=1; foreach ($_SESSION['Material'] as $datas => $data) { ?>

            <tr style="background-color: white; mso-ansi-font-weight: bold;">
                <td><?php echo "P".$p; ?></td>
                <td><?php echo $data['PalletSize'];?></td>
                <td>Material A</td>
                <td><?php echo $data['MaterialAL'];?></td>
                <td>10</td>
                <td>1.9</td>
                <td><?php echo $data['Acm3'];?></td>
                <td><?php echo $data['Am3'];?></td>
                <td><?php echo $data['MaterialANoOfPCS'];?></td>
                <td>0.028</td>
                <td>100</td>
                <td>9</td>
                <td>2</td>
                <td>13</td>
                <td>0.0234</td>
                <td>20</td>
                <td>0.00468</td>
                <td>0.0046</td>
                <td>16%</td>
            </tr>
            <tr style="background-color: white; mso-ansi-font-weight: bold;">
                <td></td>
                <td></td>
                <td>Material B</td>
                <td><?php echo $data['MaterialBL'];?></td>
                <td>10</td>
                <td>1.9</td>
                <td><?php echo $data['Bcm3'];?></td>
                <td><?php echo $data['Bm3'];?></td>
                <td><?php echo $data['MaterialBNoOfPCS'];?></td>
                <td>0.028</td>
                <td>100</td>
                <td>9</td>
                <td>2</td>
                <td>13</td>
                <td>0.0234</td>
                <td>20</td>
                <td>0.00468</td>
                <td>0.0046</td>
                <td>16%</td>
            </tr>
            <?php if (!empty($data['MaterialCL'])){?>
                <tr style="background-color: white; mso-ansi-font-weight: bold;">


                    <td></td>
                    <td></td>
                    <td>Material C</td>
                    <td><?php echo $data['MaterialCL'];?></td>
                    <td>10</td>
                    <td>1.9</td>
                    <td><?php echo $data['Ccm3'];?></td>
                    <td><?php echo $data['Cm3'];?></td>
                    <td><?php echo $data['MaterialCNoOfPCS'];?></td>
                    <td>0.028</td>
                    <td>100</td>
                    <td>9</td>
                    <td>2</td>
                    <td>13</td>
                    <td>0.0234</td>
                    <td>20</td>
                    <td>0.00468</td>
                    <td>0.0046</td>
                    <td>16%</td>

                </tr>
                <tr style="background-color: white; mso-ansi-font-weight: bold;">


                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="background-color: #25db25;">0.028</td>
                    <td style="background-color: #25db25;">100</td>
                    <td style="background-color: #25db25;">9</td>
                    <td style="background-color: #25db25;">2</td>
                    <td style="background-color: #25db25;">13</td>
                    <td style="background-color: #25db25;">0.0234</td>
                    <td style="background-color: #25db25;">20</td>
                    <td style="background-color: #25db25;">0.00468</td>
                    <td style="background-color: #25db25;">0.0046</td>
                    <td style="background-color: #25db25;">16%</td>

                </tr>
                <!--  If No Data for Material C below codes-->
                <?php $p++; } else { ?>
                <tr style="background-color: white; mso-ansi-font-weight: bold;">


                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="background-color: #25db25;">0.028</td>
                    <td style="background-color: #25db25;">100</td>
                    <td style="background-color: #25db25;">9</td>
                    <td style="background-color: #25db25;">2</td>
                    <td style="background-color: #25db25;">13</td>
                    <td style="background-color: #25db25;">0.0234</td>
                    <td style="background-color: #25db25;">20</td>
                    <td style="background-color: #25db25;">0.00468</td>
                    <td style="background-color: #25db25;">0.0046</td>
                    <td style="background-color: #25db25;">16%</td>

                </tr>
                <?php $p++;  } ?>

        <?php }?>


        </tbody>

    </table>
    </pagebreak>
</div>



<script type="text/javascript">

    $(document).ready(function () {
        window.print();
    });

</script>
</body>
</html>
