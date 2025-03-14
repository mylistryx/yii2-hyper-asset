<?php
/**
 * @var $this View
 */

use hyper\assets\ApexChartAsset;
use hyper\assets\BootstrapDatePickerAsset;
use hyper\assets\HyperAsset;
use yii\web\View;

$this->title = 'CRM management';
$this->params['breadcrumbs'][] = $this->title;

BootstrapDatePickerAsset::register($this);
ApexChartAsset::register($this);

$this->registerJsFile('/js/pages/demo.crm-management.js', ['depends' => HyperAsset::class]);
?>

<div class="content-container">
    <div class="row">
        <div class="col-xxl-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="header-title">Revenue Statistics</h4>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Today</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Yesterday</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Last Week</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Last Month</a>
                        </div>
                    </div>
                </div>

                <div class="card-body pt-0">
                    <div dir="ltr">
                        <div id="revenue-statistics-chart" class="apex-charts" data-colors="#727cf5,#0acf97"></div>
                    </div>
                </div>
            </div>
        </div> <!-- End col -->

        <div class="col-xxl-6">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item"><i class=""></i><i class="uil uil-pen me-1"></i> Edit</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item text-danger"><i class="uil uil-trash me-1"></i> Remove</a>
                                </div>
                            </div>

                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0">
                                    <div class="avatar-sm">
                                                            <span class="avatar-title bg-primary-lighten text-primary rounded">
                                                                <i class="mdi mdi-shopping-outline font-24"></i>
                                                            </span>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <a href="javascript:void(0);" class="font-16 fw-bold text-secondary">Ecommerce App Design <i class="mdi mdi-checkbox-marked-circle-outline text-success"></i></a>
                                    <p class="text-muted mb-0">Dashboard, Pages & Auth Pages</p>
                                </div>
                            </div>

                            <span class="badge badge-lg bg-light text-secondary rounded-pill me-1">Work in Progress</span>
                            <span class="font-12 fw-semibold text-muted"><i class="mdi mdi-clock-time-four me-1"></i>145 Hours</span>

                            <div class="row mt-2">
                                <div class="col-6">
                                    <p class="text-muted fw-semibold mb-1">Tasks</p>
                                    <h3 class="my-0 text-muted fw-normal">16</h3>
                                </div>
                                <div class="col-6 text-end">
                                    <p class="text-muted fw-semibold mb-1">Assign to</p>
                                    <div class="multi-user">
                                        <a href="javascript:void(0);" class="d-inline-block">
                                            <img src="/images/users/avatar-1.jpg" class="rounded-circle avatar-xs" alt="friend">
                                        </a>
                                        <a href="javascript:void(0);" class="d-inline-block">
                                            <img src="/images/users/avatar-2.jpg" class="rounded-circle avatar-xs" alt="friend">
                                        </a>
                                        <a href="javascript:void(0);" class="d-inline-block">
                                            <img src="/images/users/avatar-3.jpg" class="rounded-circle avatar-xs" alt="friend">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item"><i class=""></i><i class="uil uil-pen me-1"></i> Edit</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item text-danger"><i class="uil uil-trash me-1"></i> Remove</a>
                                </div>
                            </div>

                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0">
                                    <div class="avatar-sm">
                                                            <span class="avatar-title bg-success-lighten text-success rounded">
                                                                <i class="mdi mdi-account-network font-24"></i>
                                                            </span>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <a href="javascript:void(0);" class="font-16 fw-bold text-secondary">Client Power System <i class="mdi mdi-checkbox-marked-circle-outline text-success"></i></a>
                                    <p class="text-muted mb-0">Dashboard, Power System Pages</p>
                                </div>
                            </div>

                            <span class="badge badge-lg bg-light text-secondary rounded-pill me-1">Work in Progress</span>
                            <span class="font-12 fw-semibold text-muted"><i class="mdi mdi-clock-time-four me-1"></i>260 Hours</span>

                            <div class="row mt-2">
                                <div class="col-6">
                                    <p class="text-muted fw-semibold mb-1">Tasks</p>
                                    <h3 class="my-0 text-muted fw-normal">24</h3>
                                </div>
                                <div class="col-6 text-end">
                                    <p class="text-muted fw-semibold mb-1">Assign to</p>
                                    <div class="multi-user">
                                        <a href="javascript:void(0);" class="d-inline-block">
                                            <img src="/images/users/avatar-4.jpg" class="rounded-circle avatar-xs" alt="friend">
                                        </a>
                                        <a href="javascript:void(0);" class="d-inline-block">
                                            <img src="/images/users/avatar-3.jpg" class="rounded-circle avatar-xs" alt="friend">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item"><i class=""></i><i class="uil uil-pen me-1"></i> Edit</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item text-danger"><i class="uil uil-trash me-1"></i> Remove</a>
                                </div>
                            </div>

                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0">
                                    <div class="avatar-sm">
                                                            <span class="avatar-title bg-info-lighten text-info rounded">
                                                                <i class="mdi mdi-page-layout-header font-24"></i>
                                                            </span>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <a href="javascript:void(0);" class="font-16 fw-bold text-secondary">Landing Pages Design <i class="mdi mdi-checkbox-marked-circle-outline text-success"></i></a>
                                    <p class="text-muted mb-0">Business Landing with Auth Pages</p>
                                </div>
                            </div>

                            <span class="badge badge-lg bg-light text-secondary rounded-pill me-1">Work in Progress</span>
                            <span class="font-12 fw-semibold text-muted"><i class="mdi mdi-clock-time-four me-1"></i>48 Hours</span>

                            <div class="row mt-2">
                                <div class="col-6">
                                    <p class="text-muted fw-semibold mb-1">Tasks</p>
                                    <h3 class="my-0 text-muted fw-normal">05</h3>
                                </div>
                                <div class="col-6 text-end">
                                    <p class="text-muted fw-semibold mb-1">Assign to</p>
                                    <div class="multi-user">
                                        <a href="javascript:void(0);" class="d-inline-block">
                                            <img src="/images/users/avatar-5.jpg" class="rounded-circle avatar-xs" alt="friend">
                                        </a>
                                        <a href="javascript:void(0);" class="d-inline-block">
                                            <img src="/images/users/avatar-6.jpg" class="rounded-circle avatar-xs" alt="friend">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item"><i class=""></i><i class="uil uil-pen me-1"></i> Edit</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item text-danger"><i class="uil uil-trash me-1"></i> Remove</a>
                                </div>
                            </div>

                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0">
                                    <div class="avatar-sm">
                                                            <span class="avatar-title bg-danger-lighten text-danger rounded">
                                                                <i class="mdi mdi-monitor-dashboard font-24"></i>
                                                            </span>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <a href="javascript:void(0);" class="font-16 fw-bold text-secondary">Business Dashboard Design <i class="mdi mdi-checkbox-marked-circle-outline text-success"></i></a>
                                    <p class="text-muted mb-0">Dashboard, Components Pages</p>
                                </div>
                            </div>

                            <span class="badge badge-lg bg-light text-secondary rounded-pill me-1">Work in Progress</span>
                            <span class="font-12 fw-semibold text-muted"><i class="mdi mdi-clock-time-four me-1"></i>24 Hours</span>

                            <div class="row mt-2">
                                <div class="col-6">
                                    <p class="text-muted fw-semibold mb-1">Tasks</p>
                                    <h3 class="my-0 text-muted fw-normal">08</h3>
                                </div>
                                <div class="col-6 text-end">
                                    <p class="text-muted fw-semibold mb-1">Assign to</p>
                                    <div class="multi-user">
                                        <a href="javascript:void(0);" class="d-inline-block">
                                            <img src="/images/users/avatar-5.jpg" class="rounded-circle avatar-xs" alt="friend">
                                        </a>
                                        <a href="javascript:void(0);" class="d-inline-block">
                                            <img src="/images/users/avatar-6.jpg" class="rounded-circle avatar-xs" alt="friend">
                                        </a>
                                        <a href="javascript:void(0);" class="d-inline-block ms-n2">
                                            <div class="avatar-xs">
                                                                    <span class="avatar-title bg-primary rounded-circle">
                                                                        +2
                                                                    </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->

            </div> <!-- end row -->
        </div>
    </div> <!-- End row -->

    <h4 class="page-title mb-3">Recently Updated Clients</h4>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xxl-5">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <img class="rounded-circle avatar-sm" src="/images/users/avatar-1.jpg" alt="Avtar image">
                        </div>
                        <div class="flex-grow-1 ms-2">
                            <a href="javascript:void(0);" class="text-secondary"><h5 class="my-1">Kevin Snowden</h5></a>
                            <p class="text-muted mb-0">Simple Solutions LLC</p>
                        </div>

                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-horizontal"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-account me-1"></i>Visite Profilo</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-block-helper me-1"></i>Block</a>
                                <!-- item-->
                                <div class="dropdown-divider my-1"></div>
                                <a href="javascript:void(0);" class="dropdown-item text-danger"><i class="mdi mdi-trash-can-outline me-1"></i>Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center card-body py-2 border-top border-light">
                    <h5 class="my-0 font-13 fw-semibold text-muted"><i class="mdi mdi-calendar me-1"></i> Jan 05 2022</h5>
                    <a href="javascript:void(0);" class="text-muted" data-bs-toggle="modal" data-bs-target="#client-chat"><i class="uil uil-comment-alt-lines font-18" data-bs-toggle="tooltip" data-bs-placement="top" title="Chat"></i></a>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <img class="rounded-circle avatar-sm" src="/images/users/avatar-2.jpg" alt="Avtar image">
                        </div>
                        <div class="flex-grow-1 ms-2">
                            <a href="javascript:void(0);" class="text-secondary"><h5 class="my-1">Steven Embry</h5></a>
                            <p class="text-muted mb-0">Flipside Records LLC</p>
                        </div>

                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-horizontal"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-account me-1"></i>Visite Profilo</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-block-helper me-1"></i>Block</a>
                                <!-- item-->
                                <div class="dropdown-divider my-1"></div>
                                <a href="javascript:void(0);" class="dropdown-item text-danger"><i class="mdi mdi-trash-can-outline me-1"></i>Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center card-body py-2 border-top border-light">
                    <h5 class="my-0 font-13 fw-semibold text-muted"><i class="mdi mdi-calendar me-1"></i> Jan 10 2022</h5>
                    <a href="javascript:void(0);" class="text-muted" data-bs-toggle="modal" data-bs-target="#client-chat"><i class="uil uil-comment-alt-lines font-18" data-bs-toggle="tooltip" data-bs-placement="top" title="Chat"></i></a>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <img class="rounded-circle avatar-sm" src="/images/users/avatar-3.jpg" alt="Avtar image">
                        </div>
                        <div class="flex-grow-1 ms-2">
                            <a href="javascript:void(0);" class="text-secondary"><h5 class="my-1">James McDonald</h5></a>
                            <p class="text-muted mb-0">Vision Clinics LLC</p>
                        </div>

                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-horizontal"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-account me-1"></i>Visite Profilo</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-block-helper me-1"></i>Block</a>
                                <!-- item-->
                                <div class="dropdown-divider my-1"></div>
                                <a href="javascript:void(0);" class="dropdown-item text-danger"><i class="mdi mdi-trash-can-outline me-1"></i>Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center card-body py-2 border-top border-light">
                    <h5 class="my-0 font-13 fw-semibold text-muted"><i class="mdi mdi-calendar me-1"></i> Jan 12 2022</h5>
                    <a href="javascript:void(0);" class="text-muted" data-bs-toggle="modal" data-bs-target="#client-chat"><i class="uil uil-comment-alt-lines font-18" data-bs-toggle="tooltip" data-bs-placement="top" title="Chat"></i></a>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <img class="rounded-circle avatar-sm" src="/images/users/avatar-5.jpg" alt="Avtar image">
                        </div>
                        <div class="flex-grow-1 ms-2">
                            <a href="javascript:void(0);" class="text-secondary"><h5 class="my-1">Ralph Wolford</h5></a>
                            <p class="text-muted mb-0">Merry-Go-Round LLC</p>
                        </div>

                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-horizontal"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-account me-1"></i>Visite Profilo</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-block-helper me-1"></i>Block</a>
                                <!-- item-->
                                <div class="dropdown-divider my-1"></div>
                                <a href="javascript:void(0);" class="dropdown-item text-danger"><i class="mdi mdi-trash-can-outline me-1"></i>Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center card-body py-2 border-top border-light">
                    <h5 class="my-0 font-13 fw-semibold text-muted"><i class="mdi mdi-calendar me-1"></i> Jan 18 2022</h5>
                    <a href="javascript:void(0);" class="text-muted" data-bs-toggle="modal" data-bs-target="#client-chat"><i class="uil uil-comment-alt-lines font-18" data-bs-toggle="tooltip" data-bs-placement="top" title="Chat"></i></a>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <img class="rounded-circle avatar-sm" src="/images/users/avatar-6.jpg" alt="Avtar image">
                        </div>
                        <div class="flex-grow-1 ms-2">
                            <a href="javascript:void(0);" class="text-secondary"><h5 class="my-1">Tomas Cooper</h5></a>
                            <p class="text-muted mb-0">Museum LLC</p>
                        </div>

                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-horizontal"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-account me-1"></i>Visite Profilo</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-block-helper me-1"></i>Block</a>
                                <!-- item-->
                                <div class="dropdown-divider my-1"></div>
                                <a href="javascript:void(0);" class="dropdown-item text-danger"><i class="mdi mdi-trash-can-outline me-1"></i>Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center card-body py-2 border-top border-light">
                    <h5 class="my-0 font-13 fw-semibold text-muted"><i class="mdi mdi-calendar me-1"></i> Feb 02 2022</h5>
                    <a href="javascript:void(0);" class="text-muted" data-bs-toggle="modal" data-bs-target="#client-chat"><i class="uil uil-comment-alt-lines font-18" data-bs-toggle="tooltip" data-bs-placement="top" title="Chat"></i></a>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <div class="row">
        <div class="col-xxl-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="header-title">Monthly Progress</h4>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Today</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Yesterday</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Last Week</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Last Month</a>
                        </div>
                    </div>
                </div>

                <div class="card-body pt-0">
                    <div class="table-responsive mt-n2">
                        <table class="table table-centered table-hover table-nowrap mb-0">
                            <thead>
                            <tr>
                                <th scope="col">Employees Name</th>
                                <th scope="col">Eamil Address</th>
                                <th scope="col">Project Name</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img class="rounded-circle" src="/images/users/avatar-1.jpg" alt="Avtar image" width="31">
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            Adam Baldwin
                                        </div>
                                    </div>
                                </td>
                                <td>AdamNBaldwin@dayrep.com</td>
                                <td>Admin Dashboard</td>
                                <td>
                                    <span class="badge bg-primary-lighten text-primary">In Progress</span>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="font-18 text-info me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="uil uil-pen"></i></a>
                                    <a href="javascript:void(0);" class="font-18 text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="uil uil-trash"></i></a>
                                </td>
                            </tr> <!-- end tr -->

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img class="rounded-circle" src="/images/users/avatar-2.jpg" alt="Avtar image" width="31">
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            Peter Wallace
                                        </div>
                                    </div>
                                </td>
                                <td>PeterGWallace@dayrep.com</td>
                                <td>Landing Page</td>
                                <td>
                                    <span class="badge bg-success-lighten text-success">Completed</span>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="font-18 text-info me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="uil uil-pen"></i></a>
                                    <a href="javascript:void(0);" class="font-18 text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="uil uil-trash"></i></a>
                                </td>
                            </tr> <!-- end tr -->

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img class="rounded-circle" src="/images/users/avatar-3.jpg" alt="Avtar image" width="31">
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            Jacob Dunn
                                        </div>
                                    </div>
                                </td>
                                <td>JacobEDunn@dayrep.com</td>
                                <td>Logo Design</td>
                                <td>
                                    <span class="badge bg-warning-lighten text-warning">Pending</span>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="font-18 text-info me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="uil uil-pen"></i></a>
                                    <a href="javascript:void(0);" class="font-18 text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="uil uil-trash"></i></a>
                                </td>
                            </tr> <!-- end tr -->

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img class="rounded-circle" src="/images/users/avatar-4.jpg" alt="Avtar image" width="31">
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            Terry Adams
                                        </div>
                                    </div>
                                </td>
                                <td>TerryCAdams@dayrep.com</td>
                                <td>Client Project</td>
                                <td>
                                    <span class="badge bg-primary-lighten text-primary">In Progress</span>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="font-18 text-info me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="uil uil-pen"></i></a>
                                    <a href="javascript:void(0);" class="font-18 text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="uil uil-trash"></i></a>
                                </td>
                            </tr> <!-- end tr -->

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img class="rounded-circle" src="/images/users/avatar-5.jpg" alt="Avtar image" width="31">
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            Jason Stovall
                                        </div>
                                    </div>
                                </td>
                                <td>JasonJStovall@armyspy.com</td>
                                <td>Figma Work</td>
                                <td>
                                    <span class="badge bg-warning-lighten text-warning">Pending</span>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="font-18 text-info me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="uil uil-pen"></i></a>
                                    <a href="javascript:void(0);" class="font-18 text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="uil uil-trash"></i></a>
                                </td>
                            </tr> <!-- end tr -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-md-6 col-xxl-3">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="header-title">Task Status</h4>
                    <div class="dropdown float-end">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Today</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Yesterday</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Last Week</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Last Month</a>
                        </div>
                    </div>
                </div>

                <div class="card-body pt-2">
                    <div class="mb-4">
                        <div class="d-flex align-items-center mb-2">
                            <div class="flex-shrink-0">
                                <i class="mdi mdi-file-edit widget-icon bg-primary-lighten text-primary"></i>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <h5 class="my-0 fw-semibold">Running Project</h5>
                            </div>
                            <h5 class="my-0">145/160</h5>
                        </div>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar" role="progressbar" style="width: 91%" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-center mb-2">
                            <div class="flex-shrink-0">
                                <i class="mdi mdi-account-multiple widget-icon bg-success-lighten text-success"></i>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <h5 class="my-0 fw-semibold">Active Clients</h5>
                            </div>
                            <h5 class="my-0">40/85</h5>
                        </div>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 47%" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-center mb-2">
                            <div class="flex-shrink-0">
                                <i class="mdi mdi-account-multiple-plus widget-icon bg-danger-lighten text-danger"></i>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <h5 class="my-0 fw-semibold">New Request</h5>
                            </div>
                            <h5 class="my-0">68%</h5>
                        </div>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="">
                        <div class="d-flex align-items-center mb-2">
                            <div class="flex-shrink-0">
                                <i class="mdi mdi-emoticon-happy widget-icon bg-info-lighten text-info"></i>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <h5 class="my-0 fw-semibold">Happy Clients</h5>
                            </div>
                            <h5 class="my-0">48/50</h5>
                        </div>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-md-6 col-xxl-3">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="header-title">Calendar</h4>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Today</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Yesterday</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Last Week</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Last Month</a>
                        </div>
                    </div>
                </div>
                <div class="card-body px-2 pb-2 pt-0 mt-n2">
                    <div data-provide="datepicker-inline" data-date-today-highlight="true" class="calendar-widget"></div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
</div>
<div class="modal fade" id="client-chat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <img class="rounded-circle" src="/images/users/avatar-4.jpg" height="40" alt="Avtar image">
                        </div>
                        <div class="flex-grow-1 ms-2">
                            <a href="javascript:void(0);" class="text-secondary">Kevin Snowden</a>
                            <p class="text-muted fw-normal font-14 mb-0"><i class="mdi mdi-circle text-success font-12 me-1"></i>Online</p>
                        </div>
                    </div>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="chat-conversation">
                    <div data-simplebar style="height: 350px;">
                        <ul class="conversation-list">
                            <li class="clearfix">
                                <div class="chat-avatar">
                                    <img src="/images/users/avatar-5.jpg" alt="male">
                                    <i>10:00</i>
                                </div>
                                <div class="conversation-text">
                                    <div class="ctext-wrap">
                                        <i>Geneva</i>
                                        <p>
                                            Hello!
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="clearfix odd">
                                <div class="chat-avatar">
                                    <img src="/images/users/avatar-1.jpg" alt="Female">
                                    <i>10:01</i>
                                </div>
                                <div class="conversation-text">
                                    <div class="ctext-wrap">
                                        <i>Dominic</i>
                                        <p>
                                            Hi, How are you? What about our next meeting?
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="chat-avatar">
                                    <img src="/images/users/avatar-5.jpg" alt="male">
                                    <i>10:01</i>
                                </div>
                                <div class="conversation-text">
                                    <div class="ctext-wrap">
                                        <i>Geneva</i>
                                        <p>
                                            Yeah everything is fine
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="clearfix odd">
                                <div class="chat-avatar">
                                    <img src="/images/users/avatar-1.jpg" alt="male">
                                    <i>10:02</i>
                                </div>
                                <div class="conversation-text">
                                    <div class="ctext-wrap">
                                        <i>Dominic</i>
                                        <p>
                                            Wow that's great
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <form class="needs-validation" novalidate name="chat-form" id="chat-form">
                        <div class="row align-items-start">
                            <div class="col">
                                <input type="text" class="form-control chat-input" placeholder="Enter your text" required>
                                <div class="invalid-feedback">
                                    Please enter your messsage
                                </div>
                            </div>
                            <div class="col-auto d-grid">
                                <button type="submit" class="btn btn-danger chat-send waves-effect waves-light">Send</button>
                            </div>
                        </div>
                    </form>

                </div> <!-- end .chat-conversation-->
            </div>
        </div>
    </div>
</div>

