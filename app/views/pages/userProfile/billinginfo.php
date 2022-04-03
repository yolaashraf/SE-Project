<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="">
     <title>Billing info</title>

<link href="public/assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<?php
class billinginfo extends View
{
  public function output()
  {

    require APPROOT . '/views/inc/header.php';
    //echo $text;
    $text = <<<EOT
<div class="container-xl px-4 mt-4">
    
<!-- Account page navigation-->
    <nav class="nav nav-borders">
        <a class="nav-link ms-0" href="userprofile.php" style=" color:#d40159" >Profile</a>
        <a class="nav-link" href="securityuserprofile.php" style=" color:#d40159" >Security</a>
    </nav>
    
    <hr class="mt-0 mb-4">
    <div class="row"></div>

    <!-- Payment method header and row ajustment-->
    <div class="card card-header-actions mb-4">
        <div class="card-header">
            Payment Methods
            <button class="btn btn-sm btn-primary" type="button"  style="background-color:#d40159; color:White" >Add Payment Method</button>
        </div>
        <div class="card-body px-0">
            
        <!-- Payment method-->
            <div class="d-flex align-items-center justify-content-between px-4">
                <div class="d-flex align-items-center">
                     <img src="../../../images/Images_userProfile/visa-icon-credit-card-payment-iconset-designbolts-672231.png" alt="">
                    <div class="ms-4">
                        <div class="small"> ex:Visa ending in 1234</div>
                        <div class="text-xs text-muted">ex:Expires 04/2024</div>
                    </div>
                </div>
                <div class="ms-4 small">
                    <div class="badge bg-light text-dark me-3">Default</div>
                    <a href="#!">Edit</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Billing history tag and row adjustment-->
    <div class="card mb-4">
        <div class="card-header">Billing History</div>
        <div class="card-body p-0">
            
        <!-- Billing history table-->
            <div class="table-responsive table-billing-history">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th class="border-gray-200" scope="col">Transaction ID</th>
                            <th class="border-gray-200" scope="col">Date</th>
                            <th class="border-gray-200" scope="col">Amount</th>
                            <th class="border-gray-200" scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ex: #39201</td>
                            <td>ex: 06/15/2021</td>
                            <td>eX: 29.99 EGP</td>
                            <td><span class="badge bg-light text-dark">Pending</span></td>
                        </tr>
                        <tr>
                            <td>ex: #38594</td>
                            <td>ex: 05/15/2021</td>
                            <td>ex: 29.99 EGP</td>
                            <td><span class="badge bg-success">Paid</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

EOT;
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}