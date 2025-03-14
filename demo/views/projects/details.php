<?php

use hyper\assets\ChartAsset;
use hyper\assets\HyperAsset;
use yii\web\View;

/**
 * @var $this View
 */

$this->title = 'Details';
$this->params['breadcrumbs'][] = $this->title;

ChartAsset::register($this);
$this->registerJsFile('/js/pages/demo.project-detail.js', ['depends' => HyperAsset::class]);
?>
<div class="content-container">
    <div class="row">
        <div class="col-xxl-8 col-lg-6">
            <!-- project card -->
            <div class="card d-block">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h3 class="">App design and development</h3>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ri-more-fill"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Edit</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-delete me-1"></i>Delete</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-email-outline me-1"></i>Invite</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app me-1"></i>Leave</a>
                            </div>
                        </div>
                        <!-- project title-->
                    </div>
                    <div class="badge bg-secondary text-light mb-3">Ongoing</div>

                    <h5>Project Overview:</h5>

                    <p class="text-muted mb-2">
                        With supporting text below as a natural lead-in to additional contenposuere erat a ante. Voluptates, illo, iste itaque voluptas
                        corrupti ratione reprehenderit magni similique? Tempore, quos delectus asperiores libero voluptas quod perferendis! Voluptate,
                        quod illo rerum? Lorem ipsum dolor sit amet.
                    </p>

                    <p class="text-muted mb-4">
                        Voluptates, illo, iste itaque voluptas corrupti ratione reprehenderit magni similique? Tempore, quos delectus asperiores
                        libero voluptas quod perferendis! Voluptate, quod illo rerum? Lorem ipsum dolor sit amet. With supporting text below
                        as a natural lead-in to additional contenposuere erat a ante.
                    </p>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-4">
                                <h5>Start Date</h5>
                                <p>17 March 2018 <small class="text-muted">1:00 PM</small></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-4">
                                <h5>End Date</h5>
                                <p>22 December 2018 <small class="text-muted">1:00 PM</small></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-4">
                                <h5>Budget</h5>
                                <p>$15,800</p>
                            </div>
                        </div>
                    </div>

                    <div id="tooltip-container">
                        <h5>Team Members:</h5>
                        <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Mat Helme" class="d-inline-block">
                            <img src="/images/users/avatar-6.jpg" class="rounded-circle img-thumbnail avatar-sm" alt="friend">
                        </a>

                        <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Michael Zenaty" class="d-inline-block">
                            <img src="/images/users/avatar-7.jpg" class="rounded-circle img-thumbnail avatar-sm" alt="friend">
                        </a>

                        <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="James Anderson" class="d-inline-block">
                            <img src="/images/users/avatar-8.jpg" class="rounded-circle img-thumbnail avatar-sm" alt="friend">
                        </a>

                        <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Mat Helme" class="d-inline-block">
                            <img src="/images/users/avatar-4.jpg" class="rounded-circle img-thumbnail avatar-sm" alt="friend">
                        </a>

                        <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Michael Zenaty" class="d-inline-block">
                            <img src="/images/users/avatar-5.jpg" class="rounded-circle img-thumbnail avatar-sm" alt="friend">
                        </a>

                        <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="James Anderson" class="d-inline-block">
                            <img src="/images/users/avatar-3.jpg" class="rounded-circle img-thumbnail avatar-sm" alt="friend">
                        </a>
                    </div>

                </div> <!-- end card-body-->

            </div> <!-- end card-->

            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 mb-3">Comments (258)</h4>

                    <textarea class="form-control form-control-light mb-2" placeholder="Write message" id="example-textarea" rows="3"></textarea>
                    <div class="text-end">
                        <div class="btn-group mb-2">
                            <button type="button" class="btn btn-link btn-sm text-muted font-18"><i class="ri-attachment-2"></i></button>
                        </div>
                        <div class="btn-group mb-2 ms-2">
                            <button type="button" class="btn btn-primary btn-sm">Submit</button>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mt-2">
                        <img class="me-3 avatar-sm rounded-circle" src="/images/users/avatar-3.jpg" alt="Generic placeholder image">
                        <div class="w-100 overflow-hidden">
                            <h5 class="mt-0">Jeremy Tomlinson</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                            vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis
                            in faucibus.

                            <div class="d-flex align-items-start mt-3">
                                <a class="pe-3" href="#">
                                    <img src="/images/users/avatar-4.jpg" class="avatar-sm rounded-circle" alt="Generic placeholder image">
                                </a>
                                <div class="w-100 overflow-hidden">
                                    <h5 class="mt-0">Kathleen Thomas</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                    vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                                    felis in faucibus.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-2">
                        <a href="javascript:void(0);" class="text-danger">Load more </a>
                    </div>
                </div> <!-- end card-body-->
            </div>
            <!-- end card-->
        </div> <!-- end col -->

        <div class="col-lg-6 col-xxl-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-3">Progress</h5>
                    <div dir="ltr">
                        <div class="mt-3 chartjs-chart" style="height: 320px;">
                            <canvas id="line-chart-example"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card-->

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-3">Files</h5>

                    <div class="card mb-1 shadow-none border">
                        <div class="p-2">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <div class="avatar-sm">
                                                            <span class="avatar-title rounded">
                                                                .ZIP
                                                            </span>
                                    </div>
                                </div>
                                <div class="col ps-0">
                                    <a href="javascript:void(0);" class="text-muted fw-bold">Hyper-admin-design.zip</a>
                                    <p class="mb-0">2.3 MB</p>
                                </div>
                                <div class="col-auto">
                                    <!-- Button -->
                                    <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                        <i class="ri-download-2-line"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-1 shadow-none border">
                        <div class="p-2">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <img src="/images/projects/project-1.jpg" class="avatar-sm rounded" alt="file-image"/>
                                </div>
                                <div class="col ps-0">
                                    <a href="javascript:void(0);" class="text-muted fw-bold">Dashboard-design.jpg</a>
                                    <p class="mb-0">3.25 MB</p>
                                </div>
                                <div class="col-auto">
                                    <!-- Button -->
                                    <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                        <i class="ri-download-2-line"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-0 shadow-none border">
                        <div class="p-2">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <div class="avatar-sm">
                                                            <span class="avatar-title bg-secondary text-light rounded">
                                                                .MP4
                                                            </span>
                                    </div>
                                </div>
                                <div class="col ps-0">
                                    <a href="javascript:void(0);" class="text-muted fw-bold">Admin-bug-report.mp4</a>
                                    <p class="mb-0">7.05 MB</p>
                                </div>
                                <div class="col-auto">
                                    <!-- Button -->
                                    <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                        <i class="ri-download-2-line"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
</div> <!-- container -->
