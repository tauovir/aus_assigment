<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $webconfig->site_name;?></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
    #invoice{
    padding: 30px;
}

.invoice {
    position: relative;
    background-color: #FFF;
    min-height: 680px;
    padding: 15px
}

.invoice header {
    padding: 10px 0;
    margin-bottom: 20px;
    border-bottom: 1px solid #3989c6
}

.invoice .company-details {
    text-align: right
}

.invoice .company-details .name {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .contacts {
    margin-bottom: 20px
}

.invoice .invoice-to {
    text-align: left
}

.invoice .invoice-to .to {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .invoice-details {
    text-align: right
}

.invoice .invoice-details .invoice-id {
    margin-top: 0;
    color: #3989c6
}

.invoice main {
    padding-bottom: 50px
}

.invoice main .thanks {
    margin-top: -100px;
    font-size: 2em;
    margin-bottom: 50px
}

.invoice main .notices {
    padding-left: 6px;
    border-left: 6px solid #3989c6
}

.invoice main .notices .notice {
    font-size: 1.2em
}

.invoice table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px
}

.invoice table td,.invoice table th {
    padding: 12px;
    
    border-bottom: 1px solid #fff
}

.invoice table th {
    white-space: nowrap;
    font-weight: 600;
    font-size: 1.2em;
}

.invoice table td h3 {
    margin: 0;
    font-weight: 400;
    color: #000;
    font-size: 1.2em
}

.invoice table .qty,.invoice table .total,.invoice table .unit {
    text-align: center;
    font-size: 1.2em
}

.invoice table .no {
    color: #000;
    font-size: 1.2em;
    
}


.invoice table .total {
    background: #3989c6;
    color: #fff
}

.invoice table tbody tr:last-child td {
    border: none
}

.invoice table tfoot td {
    background: 0 0;
    border-bottom: none;
    white-space: nowrap;
    text-align: right;
    padding: 10px 20px;
    font-size: 1.2em;
    border-top: 1px solid #aaa
}

.invoice table tfoot tr:first-child td {
    border-top: none
}

.invoice table tfoot tr:last-child td {
    color: #3989c6;
    font-size: 1.4em;
    border-top: 1px solid #3989c6
}

.invoice table tfoot tr td:first-child {
    border: none
}

.invoice footer {
    width: 100%;
    text-align: center;
    color: #777;
    border-top: 1px solid #aaa;
    padding: 8px 0
}

@media print {
    .invoice {
        font-size: 11px!important;
        overflow: hidden!important
    }

    .invoice footer {
        position: absolute;
        bottom: 10px;
        page-break-after: always
    }

    .invoice>div:last-child {
        page-break-before: always
    }
}
</style>
<!------ Include the above in your HEAD tag ---------->
<body>
<div class="container">
<!------ Include the above in your HEAD tag ---------->


<div id="invoice">

    <div class="toolbar hidden-print">
        <div class="text-right">
            <button id="printInvoice" class="btn btn-info"><i class="fa fa-print"></i> Print</button>
            <button class="btn btn-info"><i class="fa fa-file-pdf-o"></i> Export as PDF</button>
        </div>
        <hr>
    </div>
    <div class="invoice overflow-auto">
        <div style="min-width: 600px">
            <header>
                <div class="row">
                    <div class="col">
                        <a target="_blank" href="https://lobianijs.com">
                            <img src="<?= base_url();?>assets/setting/3879ad8e7cb18729e89e5398c26b4150.png" data-holder-rendered="true" />
                            </a>
                    </div>
                    <div class="col company-details">
                        <h2 class="name"><?php echo $webconfig->site_name;?>
                        </h2>
                        <div><?php echo $webconfig->address;?></div>
                        <div><?php echo $webconfig->organization_email;?></div>
                        <div><?php echo $webconfig->other_mobile;?></div>
                    </div>
                </div>
            </header>
            <main>
                <div class="row contacts">
                    <div class="col invoice-to">
                        <div class="text-gray-light">INVOICE TO:</div>
                        <h2 class="to">John Doe</h2>
                        <div class="address">796 Silver Harbour, TX 79273, US</div>
                        <div class="email"><a href="#">john@example.com</a></div>
                    </div>
                    <div class="col invoice-details">
                        <h3 class="invoice-id">INVOICE ID-123456</h3>
                        <div class="date">Date of Invoice: 01/10/2018</div>
                    </div>
                </div>
                <table  class="table table-stripped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Sr.no</th>
                            <th class="text-left">Order Id</th>
                            <th class="text-center">Assignment</th>
                            <th class="text-center">Pages/Price</th>
                            <th class="text-center">TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-primary">
                            <td class="no">01</td>
                            <td class="text-left"><h3>1234567</h3>
                            </td>
                            <td class="unit">Law Assignment Help</td>
                            <td class="qty">1Page/250Words</td>
                            <td class="total">$20.00</td>
                        </tr>
                         <tr class="table-primary">
                            <td class="no">01</td>
                            <td class="text-left"><h3>
                                1234567
                                </h3>
                                                          </td>
                            <td class="unit">Bussiness Assignment Help</td>
                            <td class="qty">1Page/250Words</td>
                            <td class="total">$20.00</td>
                        </tr>
                       
                    </tbody>
                    <tfoot class="table-bordered">
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">SUBTOTAL</td>
                            <td>$40.00</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">TAX 25%</td>
                            <td>$40.00</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">GRAND TOTAL</td>
                            <td>$40.00</td>
                        </tr>
                    </tfoot>
                </table>
                <div class="thanks">Thank you!</div>
                
            </main>
            
            <footer>
                Invoice was created on a computer and is valid without the signature and seal.
            </footer>
        </div>
       
        <div></div>
    </div>
</div>
</body>
</html>

