<?php

use hyper\assets\ApexChartAsset;
use hyper\assets\DatasetAsset;
use hyper\assets\HyperAsset;
use yii\web\View;

/**
 * @var $this View
 */

$this->title = 'Sellers';

DatasetAsset::register($this);
ApexChartAsset::register($this);
$this->registerJsFile('/js/pages/demo.sellers.js', ['depends' => HyperAsset::class]);

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
                            <li class="breadcrumb-item active">Sellers</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Sellers</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-sm-5">
                                <a href="javascript:void(0);" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i> Add Sellers</a>
                            </div>
                            <div class="col-sm-7">
                                <div class="text-sm-end">
                                    <button type="button" class="btn btn-success mb-2 me-1"><i class="mdi mdi-cog"></i></button>
                                    <button type="button" class="btn btn-light mb-2 me-1">Import</button>
                                    <button type="button" class="btn btn-light mb-2">Export</button>
                                </div>
                            </div><!-- end col-->
                        </div>

                        <div class="table-responsive">
                            <table class="table table-centered table-borderless table-hover w-100 dt-responsive nowrap" id="products-datatable">
                                <thead class="table-light">
                                <tr>
                                    <th style="width: 20px;">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck1">
                                            <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                        </div>
                                    </th>
                                    <th>Seller</th>
                                    <th>Store Name</th>
                                    <th>Products</th>
                                    <th>Wallet Balance</th>
                                    <th>Create Date</th>
                                    <th>Revenue</th>
                                    <th style="width: 75px;">Action</th>
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
                                    <td class="table-user">
                                        <img src="/images/users/avatar-4.jpg" alt="table-user" class="me-2 rounded-circle">
                                        <a href="javascript:void(0);" class="text-body fw-semibold">Paul J. Friend</a>
                                    </td>
                                    <td>
                                        Homovee
                                    </td>
                                    <td>
                                        <span class="fw-semibold">128</span>
                                    </td>
                                    <td>
                                        $128,250
                                    </td>
                                    <td>
                                        07/07/2018
                                    </td>
                                    <td>
                                        <div class="spark-chart" data-dataset="[25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]"></div>
                                    </td>

                                    <td>
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
                                    <td class="table-user">
                                        <img src="/images/users/avatar-3.jpg" alt="table-user" class="me-2 rounded-circle">
                                        <a href="javascript:void(0);" class="text-body fw-semibold">Bryan J. Luellen</a>
                                    </td>
                                    <td>
                                        Execucy
                                    </td>
                                    <td>
                                        <span class="fw-semibold">09</span>
                                    </td>
                                    <td>
                                        $78,410
                                    </td>
                                    <td>
                                        09/12/2018
                                    </td>
                                    <td>
                                        <div class="spark-chart" data-dataset="[25, 66, 41, 45, 63, 25, 66, 12, 45, 9, 54]"></div>
                                    </td>

                                    <td>
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
                                    <td class="table-user">
                                        <img src="/images/users/avatar-3.jpg" alt="table-user" class="me-2 rounded-circle">
                                        <a href="javascript:void(0);" class="text-body fw-semibold">Kathryn S. Collier</a>
                                    </td>
                                    <td>
                                        Epiloo
                                    </td>
                                    <td>
                                        <span class="fw-semibold">78</span>
                                    </td>
                                    <td>
                                        $89,458
                                    </td>
                                    <td>
                                        06/30/2018
                                    </td>
                                    <td>
                                        <div class="spark-chart" data-dataset="[25, 66, 41, 34, 63, 25, 34, 12, 434, 9, 54]"></div>
                                    </td>

                                    <td>
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
                                    <td class="table-user">
                                        <img src="/images/users/avatar-1.jpg" alt="table-user" class="me-2 rounded-circle">
                                        <a href="javascript:void(0);" class="text-body fw-semibold">Timothy Kauper</a>
                                    </td>
                                    <td>
                                        Uberer
                                    </td>
                                    <td>
                                        <span class="fw-semibold">847</span>
                                    </td>
                                    <td>
                                        $258,125
                                    </td>
                                    <td>
                                        09/08/2018
                                    </td>
                                    <td>
                                        <div class="spark-chart" data-dataset="[25, 66, 41, 34, 33, 25, 34, 50, 65, 9, 54]"></div>
                                    </td>

                                    <td>
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
                                    <td class="table-user">
                                        <img src="/images/users/avatar-5.jpg" alt="table-user" class="me-2 rounded-circle">
                                        <a href="javascript:void(0);" class="text-body fw-semibold">Zara Raws</a>
                                    </td>
                                    <td>
                                        Symic
                                    </td>
                                    <td>
                                        <span class="fw-semibold">235</span>
                                    </td>
                                    <td>
                                        $56,210
                                    </td>
                                    <td>
                                        07/15/2018
                                    </td>
                                    <td>
                                        <div class="spark-chart" data-dataset="[25, 66, 45, 34, 33, 34, 34, 50, 55, 9, 54]"></div>
                                    </td>

                                    <td>
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
                                    <td class="table-user">
                                        <img src="/images/users/avatar-6.jpg" alt="table-user" class="me-2 rounded-circle">
                                        <a href="javascript:void(0);" class="text-body fw-semibold">Annette P. Kelsch</a>
                                    </td>
                                    <td>
                                        Insulore
                                    </td>
                                    <td>
                                        <span class="fw-semibold">485</span>
                                    </td>
                                    <td>
                                        $330,251
                                    </td>
                                    <td>
                                        09/05/2018
                                    </td>
                                    <td>
                                        <div class="spark-chart" data-dataset="[25, 66, 30, 67, 33, 25, 34, 56, 65, 9, 54]"></div>
                                    </td>

                                    <td>
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
                                    <td class="table-user">
                                        <img src="/images/users/avatar-7.jpg" alt="table-user" class="me-2 rounded-circle">
                                        <a href="javascript:void(0);" class="text-body fw-semibold">Jenny C. Gero</a>
                                    </td>
                                    <td>
                                        Susadmin
                                    </td>
                                    <td>
                                        <span class="fw-semibold">38</span>
                                    </td>
                                    <td>
                                        $12,000
                                    </td>
                                    <td>
                                        08/02/2018
                                    </td>
                                    <td>
                                        <div class="spark-chart" data-dataset="[25, 66, 30, 45, 33, 25, 44, 56, 33, 9, 33]"></div>
                                    </td>

                                    <td>
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
                                    <td class="table-user">
                                        <img src="/images/users/avatar-8.jpg" alt="table-user" class="me-2 rounded-circle">
                                        <a href="javascript:void(0);" class="text-body fw-semibold">Edward Roseby</a>
                                    </td>
                                    <td>
                                        Hyperill
                                    </td>
                                    <td>
                                        <span class="fw-semibold">77</span>
                                    </td>
                                    <td>
                                        $45,216
                                    </td>
                                    <td>
                                        08/23/2018
                                    </td>
                                    <td>
                                        <div class="spark-chart" data-dataset="[25, 43, 30, 67, 34, 25, 34, 56, 43, 9, 56]"></div>
                                    </td>

                                    <td>
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
                                    <td class="table-user">
                                        <img src="/images/users/avatar-9.jpg" alt="table-user" class="me-2 rounded-circle">
                                        <a href="javascript:void(0);" class="text-body fw-semibold">Anna Ciantar</a>
                                    </td>
                                    <td>
                                        Vicedel
                                    </td>
                                    <td>
                                        <span class="fw-semibold">347</span>
                                    </td>
                                    <td>
                                        $7,815
                                    </td>
                                    <td>
                                        05/06/2018
                                    </td>
                                    <td>
                                        <div class="spark-chart" data-dataset="[25, 23, 30, 67, 34, 56, 34, 56, 85, 9, 56]"></div>
                                    </td>

                                    <td>
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
                                    <td class="table-user">
                                        <img src="/images/users/avatar-10.jpg" alt="table-user" class="me-2 rounded-circle">
                                        <a href="javascript:void(0);" class="text-body fw-semibold">Dean Smithies</a>
                                    </td>
                                    <td>
                                        Circumous
                                    </td>
                                    <td>
                                        <span class="fw-semibold">506</span>
                                    </td>
                                    <td>
                                        $68,143
                                    </td>
                                    <td>
                                        04/09/2018
                                    </td>
                                    <td>
                                        <div class="spark-chart" data-dataset="[25, 82, 30, 67, 65, 25, 34, 56, 44, 9, 22]"></div>
                                    </td>

                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck12">
                                            <label class="form-check-label" for="customCheck12">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td class="table-user">
                                        <img src="/images/users/avatar-1.jpg" alt="table-user" class="me-2 rounded-circle">
                                        <a href="javascript:void(0);" class="text-body fw-semibold">Labeeb Ghali</a>
                                    </td>
                                    <td>
                                        Laudent
                                    </td>
                                    <td>
                                        <span class="fw-semibold">121</span>
                                    </td>
                                    <td>
                                        $17,514
                                    </td>
                                    <td>
                                        06/19/2018
                                    </td>
                                    <td>
                                        <div class="spark-chart" data-dataset="[25, 54, 30, 44, 65, 25, 34, 33, 44, 9, 23]"></div>
                                    </td>

                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck13">
                                            <label class="form-check-label" for="customCheck13">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td class="table-user">
                                        <img src="/images/users/avatar-2.jpg" alt="table-user" class="me-2 rounded-circle">
                                        <a href="javascript:void(0);" class="text-body fw-semibold">Rory Seekamp</a>
                                    </td>
                                    <td>
                                        Centinte
                                    </td>
                                    <td>
                                        <span class="fw-semibold">89</span>
                                    </td>
                                    <td>
                                        $14,384
                                    </td>
                                    <td>
                                        03/24/2018
                                    </td>
                                    <td>
                                        <div class="spark-chart" data-dataset="[25, 82, 23, 67, 65, 67, 65, 56, 32, 19, 22]"></div>
                                    </td>

                                    <td>
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
