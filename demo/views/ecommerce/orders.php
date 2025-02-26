<?php
/**
 * @var $this View
 */

use yii\web\View;

$this->title = 'Orders';
?>

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>
                            <li class="breadcrumb-item active">Orders</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Orders</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-xl-8">
                                <form class="row gy-2 gx-2 align-items-center justify-content-xl-start justify-content-between">
                                    <div class="col-auto">
                                        <label for="inputPassword2" class="visually-hidden">Search</label>
                                        <input type="search" class="form-control" id="inputPassword2" placeholder="Search...">
                                    </div>
                                    <div class="col-auto">
                                        <div class="d-flex align-items-center">
                                            <label for="status-select" class="me-2">Status</label>
                                            <select class="form-select" id="status-select">
                                                <option selected>Choose...</option>
                                                <option value="1">Paid</option>
                                                <option value="2">Awaiting Authorization</option>
                                                <option value="3">Payment failed</option>
                                                <option value="4">Cash On Delivery</option>
                                                <option value="5">Fulfilled</option>
                                                <option value="6">Unfulfilled</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-xl-4">
                                <div class="text-xl-end mt-xl-0 mt-2">
                                    <button type="button" class="btn btn-danger mb-2 me-2"><i class="mdi mdi-basket me-1"></i> Add New Order</button>
                                    <button type="button" class="btn btn-light mb-2">Export</button>
                                </div>
                            </div><!-- end col-->
                        </div>

                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0">
                                <thead class="table-light">
                                <tr>
                                    <th style="width: 20px;">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck1">
                                            <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                        </div>
                                    </th>
                                    <th>Order ID</th>
                                    <th>Date</th>
                                    <th>Payment Status</th>
                                    <th>Total</th>
                                    <th>Payment Method</th>
                                    <th>Order Status</th>
                                    <th style="width: 125px;">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck2">
                                            <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="/ecommerce/orders-details" class="text-body fw-bold">#BM9708</a></td>
                                    <td>
                                        August 05 2018 <small class="text-muted">10:29 PM</small>
                                    </td>
                                    <td>
                                        <h5><span class="badge badge-success-lighten"><i class="mdi mdi-bitcoin"></i> Paid</span></h5>
                                    </td>
                                    <td>
                                        $176.41
                                    </td>
                                    <td>
                                        Mastercard
                                    </td>
                                    <td>
                                        <h5><span class="badge badge-info-lighten">Shipped</span></h5>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck3">
                                            <label class="form-check-label" for="customCheck3">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="/ecommerce/orders-details" class="text-body fw-bold">#BM9707</a></td>
                                    <td>August 04 2018 <small class="text-muted">08:18 AM</small></td>
                                    <td>
                                        <h5><span class="badge badge-warning-lighten"><i class="mdi mdi-timer-sand"></i> Awaiting Authorization</span></h5>
                                    </td>
                                    <td>
                                        $1,458.65
                                    </td>
                                    <td>
                                        Visa
                                    </td>
                                    <td>
                                        <h5><span class="badge badge-warning-lighten">Processing</span></h5>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck4">
                                            <label class="form-check-label" for="customCheck4">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="/ecommerce/orders-details" class="text-body fw-bold">#BM9706</a></td>
                                    <td>August 04 2018 <small class="text-muted">10:29 PM</small></td>
                                    <td>
                                        <h5><span class="badge badge-success-lighten"><i class="mdi mdi-bitcoin"></i> Paid</span></h5>
                                    </td>
                                    <td>
                                        $801.99
                                    </td>
                                    <td>
                                        Credit Card
                                    </td>
                                    <td>
                                        <h5><span class="badge badge-warning-lighten">Processing</span></h5>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck5">
                                            <label class="form-check-label" for="customCheck5">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="/ecommerce/orders-details" class="text-body fw-bold">#BM9705</a></td>
                                    <td>August 03 2018 <small class="text-muted">07:56 AM</small></td>
                                    <td>
                                        <h5><span class="badge badge-success-lighten"><i class="mdi mdi-bitcoin"></i> Paid</span></h5>
                                    </td>
                                    <td>
                                        $215.35
                                    </td>
                                    <td>
                                        Mastercard
                                    </td>
                                    <td>
                                        <h5><span class="badge badge-success-lighten">Delivered</span></h5>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck6">
                                            <label class="form-check-label" for="customCheck6">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="/ecommerce/orders-details" class="text-body fw-bold">#BM9704</a></td>
                                    <td>May 22 2018 <small class="text-muted">07:22 PM</small></td>
                                    <td>
                                        <h5><span class="badge badge-danger-lighten"><i class="mdi mdi-cancel"></i> Payment Failed</span></h5>
                                    </td>
                                    <td>
                                        $2,514.36
                                    </td>
                                    <td>
                                        Paypal
                                    </td>
                                    <td>
                                        <h5><span class="badge badge-danger-lighten">Cancelled</span></h5>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck7">
                                            <label class="form-check-label" for="customCheck7">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="/ecommerce/orders-details" class="text-body fw-bold">#BM9703</a></td>
                                    <td>April 02 2018 <small class="text-muted">03:02 AM</small></td>
                                    <td>
                                        <h5><span class="badge badge-success-lighten"><i class="mdi mdi-bitcoin"></i> Paid</span></h5>
                                    </td>
                                    <td>
                                        $183.20
                                    </td>
                                    <td>
                                        Payoneer
                                    </td>
                                    <td>
                                        <h5><span class="badge badge-info-lighten">Shipped</span></h5>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck8">
                                            <label class="form-check-label" for="customCheck8">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="/ecommerce/orders-details" class="text-body fw-bold">#BM9702</a></td>
                                    <td>March 18 2018 <small class="text-muted">11:19 PM</small></td>
                                    <td>
                                        <h5><span class="badge badge-warning-lighten"><i class="mdi mdi-timer-sand"></i> Awaiting Authorization</span></h5>
                                    </td>
                                    <td>
                                        $1,768.41
                                    </td>
                                    <td>
                                        Visa
                                    </td>
                                    <td>
                                        <h5><span class="badge badge-warning-lighten">Processing</span></h5>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck9">
                                            <label class="form-check-label" for="customCheck9">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="/ecommerce/orders-details" class="text-body fw-bold">#BM9701</a></td>
                                    <td>February 01 2018 <small class="text-muted">07:22 AM</small></td>
                                    <td>
                                        <h5><span class="badge badge-info-lighten"><i class="mdi mdi-cash"></i> Unpaid</span></h5>
                                    </td>
                                    <td>
                                        $3,582.99
                                    </td>
                                    <td>
                                        Paypal
                                    </td>
                                    <td>
                                        <h5><span class="badge badge-info-lighten">Shipped</span></h5>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck10">
                                            <label class="form-check-label" for="customCheck10">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="/ecommerce/orders-details" class="text-body fw-bold">#BM9700</a></td>
                                    <td>January 22 2018 <small class="text-muted">08:09 PM</small></td>
                                    <td>
                                        <h5><span class="badge badge-success-lighten"><i class="mdi mdi-bitcoin"></i> Paid</span></h5>
                                    </td>
                                    <td>
                                        $923.95
                                    </td>
                                    <td>
                                        Credit Card
                                    </td>
                                    <td>
                                        <h5><span class="badge badge-success-lighten">Delivered</span></h5>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck11">
                                            <label class="form-check-label" for="customCheck11">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="/ecommerce/orders-details" class="text-body fw-bold">#BM9699</a></td>
                                    <td>January 17 2018 <small class="text-muted">02:30 PM</small></td>
                                    <td>
                                        <h5><span class="badge badge-success-lighten"><i class="mdi mdi-bitcoin"></i> Paid</span></h5>
                                    </td>
                                    <td>
                                        $5,177.68
                                    </td>
                                    <td>
                                        Mastercard
                                    </td>
                                    <td>
                                        <h5><span class="badge badge-info-lighten">Shipped</span></h5>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- container -->

</div>