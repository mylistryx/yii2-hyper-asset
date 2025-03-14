<?php
/**
 * @var $this View
 */

use hyper\assets\CodeHighLightAsset;
use yii\web\View;

$this->title = 'Tabs';
$this->params['breadcrumbs'][] = $this->title;

CodeHighLightAsset::register($this);
?>
<div class="content-container">
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Default Tabs</h4>
                    <p class="text-muted font-14 mb-3">Simple widget of tabbable panes of local content.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#default-tabs-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#default-tabs-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="default-tabs-preview">
                            <ul class="nav nav-tabs mb-3">
                                <li class="nav-item">
                                    <a href="#home" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                        <i class="mdi mdi-home-variant d-md-none d-block"></i>
                                        <span class="d-none d-md-block">Home</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#profile" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                                        <i class="mdi mdi-account-circle d-md-none d-block"></i>
                                        <span class="d-none d-md-block">Profile</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#settings" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                        <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                        <span class="d-none d-md-block">Settings</span>
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane" id="home">
                                    <p>Food truck quinoa dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                    <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                </div>
                                <div class="tab-pane show active" id="profile">
                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                    <p class="mb-0">Food truck quinoa dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                </div>
                                <div class="tab-pane" id="settings">
                                    <p>Food truck quinoa dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                    <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                </div>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="default-tabs-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;ul class=&quot;nav nav-tabs mb-3&quot;&gt;
                                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                                &lt;a href=&quot;#home&quot; data-bs-toggle=&quot;tab&quot; aria-expanded=&quot;false&quot; class=&quot;nav-link&quot;&gt;
                                                                    &lt;i class=&quot;mdi mdi-home-variant d-md-none d-block&quot;&gt;&lt;/i&gt;
                                                                    &lt;span class=&quot;d-none d-md-block&quot;&gt;Home&lt;/span&gt;
                                                                &lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                                &lt;a href=&quot;#profile&quot; data-bs-toggle=&quot;tab&quot; aria-expanded=&quot;true&quot; class=&quot;nav-link active&quot;&gt;
                                                                    &lt;i class=&quot;mdi mdi-account-circle d-md-none d-block&quot;&gt;&lt;/i&gt;
                                                                    &lt;span class=&quot;d-none d-md-block&quot;&gt;Profile&lt;/span&gt;
                                                                &lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                                &lt;a href=&quot;#settings&quot; data-bs-toggle=&quot;tab&quot; aria-expanded=&quot;false&quot; class=&quot;nav-link&quot;&gt;
                                                                    &lt;i class=&quot;mdi mdi-settings-outline d-md-none d-block&quot;&gt;&lt;/i&gt;
                                                                    &lt;span class=&quot;d-none d-md-block&quot;&gt;Settings&lt;/span&gt;
                                                                &lt;/a&gt;
                                                            &lt;/li&gt;
                                                        &lt;/ul&gt;

                                                        &lt;div class=&quot;tab-content&quot;&gt;
                                                            &lt;div class=&quot;tab-pane&quot; id=&quot;home&quot;&gt;
                                                                &lt;p&gt;...&lt;/p&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;tab-pane show active&quot; id=&quot;profile&quot;&gt;
                                                                &lt;p&gt;...&lt;/p&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;tab-pane&quot; id=&quot;settings&quot;&gt;
                                                                &lt;p&gt;...&lt;/p&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Tabs Justified</h4>
                    <p class="text-muted font-14 mb-3">Using class <code>.nav-justified</code>, you can force your <code>tab menu items</code> to use the full available width.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#justified-tabs-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#justified-tabs-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="justified-tabs-preview">
                            <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                                <li class="nav-item">
                                    <a href="#home1" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                        <i class="mdi mdi-home-variant d-md-none d-block"></i>
                                        <span class="d-none d-md-block">Home</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#profile1" data-bs-toggle="tab" aria-expanded="true" class="nav-link rounded-0 active">
                                        <i class="mdi mdi-account-circle d-md-none d-block"></i>
                                        <span class="d-none d-md-block">Profile</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#settings1" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                        <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                        <span class="d-none d-md-block">Settings</span>
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane" id="home1">
                                    <p>Leggings occaecat dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                    <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                </div>
                                <div class="tab-pane show active" id="profile1">
                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                    <p class="mb-0">Leggings occaecat dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                </div>
                                <div class="tab-pane" id="settings1">
                                    <p>Food truck quinoa dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                    <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                </div>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="justified-tabs-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;ul class=&quot;nav nav-pills bg-nav-pills nav-justified mb-3&quot;&gt;
                                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                                &lt;a href=&quot;#home1&quot; data-bs-toggle=&quot;tab&quot; aria-expanded=&quot;false&quot; class=&quot;nav-link rounded-0&quot;&gt;
                                                                    &lt;i class=&quot;mdi mdi-home-variant d-md-none d-block&quot;&gt;&lt;/i&gt;
                                                                    &lt;span class=&quot;d-none d-md-block&quot;&gt;Home&lt;/span&gt;
                                                                &lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                                &lt;a href=&quot;#profile1&quot; data-bs-toggle=&quot;tab&quot; aria-expanded=&quot;true&quot; class=&quot;nav-link rounded-0 active&quot;&gt;
                                                                    &lt;i class=&quot;mdi mdi-account-circle d-md-none d-block&quot;&gt;&lt;/i&gt;
                                                                    &lt;span class=&quot;d-none d-md-block&quot;&gt;Profile&lt;/span&gt;
                                                                &lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                                &lt;a href=&quot;#settings1&quot; data-bs-toggle=&quot;tab&quot; aria-expanded=&quot;false&quot; class=&quot;nav-link rounded-0&quot;&gt;
                                                                    &lt;i class=&quot;mdi mdi-settings-outline d-md-none d-block&quot;&gt;&lt;/i&gt;
                                                                    &lt;span class=&quot;d-none d-md-block&quot;&gt;Settings&lt;/span&gt;
                                                                &lt;/a&gt;
                                                            &lt;/li&gt;
                                                        &lt;/ul&gt;

                                                        &lt;div class=&quot;tab-content&quot;&gt;
                                                            &lt;div class=&quot;tab-pane&quot; id=&quot;home1&quot;&gt;
                                                                &lt;p&gt;...&lt;/p&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;tab-pane show active&quot; id=&quot;profile1&quot;&gt;
                                                                &lt;p&gt;...&lt;/p&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;tab-pane&quot; id=&quot;settings1&quot;&gt;
                                                                &lt;p&gt;...&lt;/p&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Tabs Vertical Left</h4>
                    <p class="text-muted font-14 mb-3">
                        You can stack your navigation by changing the flex item direction with the <code>.flex-column</code> utility.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#vertical-left-tabs-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#vertical-left-tabs-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="vertical-left-tabs-preview">
                            <div class="row">
                                <div class="col-sm-3 mb-2 mb-sm-0">
                                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active show" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                           aria-selected="true">
                                            <i class="mdi mdi-home-variant d-md-none d-block"></i>
                                            <span class="d-none d-md-block">Home</span>
                                        </a>
                                        <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                           aria-selected="false">
                                            <i class="mdi mdi-account-circle d-md-none d-block"></i>
                                            <span class="d-none d-md-block">Profile</span>
                                        </a>
                                        <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                                           aria-selected="false">
                                            <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                            <span class="d-none d-md-block">Settings</span>
                                        </a>
                                    </div>
                                </div> <!-- end col-->

                                <div class="col-sm-9">
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                            <p class="mb-0">Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Leggings sint. Veniam sint duis incididunt
                                                do esse magna mollit excepteur laborum qui. Id id reprehenderit sit est eu aliqua occaecat quis et velit
                                                excepteur laborum mollit dolore eiusmod. Ipsum dolor in occaecat commodo et voluptate minim reprehenderit
                                                mollit pariatur. Deserunt non laborum enim et cillum eu deserunt excepteur ea incididunt minim occaecat.</p>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                            <p class="mb-0">Culpa dolor voluptate do laboris laboris irure reprehenderit id incididunt duis pariatur mollit aute magna
                                                pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo et minim in quis laboris ipsum velit
                                                id veniam. Quis ut consectetur adipisicing officia excepteur non sit. Ut et elit aliquip labore Leggings
                                                enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui esse anim eiusmod do sint minim consectetur
                                                qui.</p>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                            <p class="mb-0">Food truck quinoa dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                                                natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                                                eu, pretium quis, sem. Nulla consequat massa quis enim. Cillum ad ut irure tempor velit nostrud occaecat ullamco
                                                aliqua anim Leggings sint. Veniam sint duis incididunt do esse magna mollit excepteur laborum qui.</p>
                                        </div>
                                    </div> <!-- end tab-content-->
                                </div> <!-- end col-->
                            </div>
                            <!-- end row-->
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="vertical-left-tabs-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;row&quot;&gt;
                                                            &lt;div class=&quot;col-sm-3 mb-2 mb-sm-0&quot;&gt;
                                                                &lt;div class=&quot;nav flex-column nav-pills&quot; id=&quot;v-pills-tab&quot; role=&quot;tablist&quot; aria-orientation=&quot;vertical&quot;&gt;
                                                                    &lt;a class=&quot;nav-link active show&quot; id=&quot;v-pills-home-tab&quot; data-bs-toggle=&quot;pill&quot; href=&quot;#v-pills-home&quot; role=&quot;tab&quot; aria-controls=&quot;v-pills-home&quot;
                                                                        aria-selected=&quot;true&quot;&gt;
                                                                        &lt;i class=&quot;mdi mdi-home-variant d-md-none d-block&quot;&gt;&lt;/i&gt;
                                                                        &lt;span class=&quot;d-none d-md-block&quot;&gt;Home&lt;/span&gt;
                                                                    &lt;/a&gt;
                                                                    &lt;a class=&quot;nav-link&quot; id=&quot;v-pills-profile-tab&quot; data-bs-toggle=&quot;pill&quot; href=&quot;#v-pills-profile&quot; role=&quot;tab&quot; aria-controls=&quot;v-pills-profile&quot;
                                                                        aria-selected=&quot;false&quot;&gt;
                                                                        &lt;i class=&quot;mdi mdi-account-circle d-md-none d-block&quot;&gt;&lt;/i&gt;
                                                                        &lt;span class=&quot;d-none d-md-block&quot;&gt;Profile&lt;/span&gt;
                                                                    &lt;/a&gt;
                                                                    &lt;a class=&quot;nav-link&quot; id=&quot;v-pills-settings-tab&quot; data-bs-toggle=&quot;pill&quot; href=&quot;#v-pills-settings&quot; role=&quot;tab&quot; aria-controls=&quot;v-pills-settings&quot;
                                                                        aria-selected=&quot;false&quot;&gt;
                                                                        &lt;i class=&quot;mdi mdi-settings-outline d-md-none d-block&quot;&gt;&lt;/i&gt;
                                                                        &lt;span class=&quot;d-none d-md-block&quot;&gt;Settings&lt;/span&gt;
                                                                    &lt;/a&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt; &lt;!-- end col--&gt;

                                                            &lt;div class=&quot;col-sm-9&quot;&gt;
                                                                &lt;div class=&quot;tab-content&quot; id=&quot;v-pills-tabContent&quot;&gt;
                                                                    &lt;div class=&quot;tab-pane fade active show&quot; id=&quot;v-pills-home&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;v-pills-home-tab&quot;&gt;
                                                                        &lt;p class=&quot;mb-0&quot;&gt;...&lt;/p&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;tab-pane fade&quot; id=&quot;v-pills-profile&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;v-pills-profile-tab&quot;&gt;
                                                                        &lt;p class=&quot;mb-0&quot;&gt;...&lt;/p&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;tab-pane fade&quot; id=&quot;v-pills-settings&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;v-pills-settings-tab&quot;&gt;
                                                                        &lt;p class=&quot;mb-0&quot;&gt;...&lt;/p&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt; &lt;!-- end tab-content--&gt;
                                                            &lt;/div&gt; &lt;!-- end col--&gt;
                                                        &lt;/div&gt;
                                                        &lt;!-- end row--&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Tabs Vertical Right</h4>
                    <p class="text-muted font-14 mb-3">
                        You can stack your navigation by changing the flex item direction with the <code>.flex-column</code> utility.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#vertical-right-tabs-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#vertical-right-tabs-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="vertical-right-tabs-preview">
                            <div class="row">
                                <div class="col-sm-9">
                                    <div class="tab-content" id="v-pills-tabContent-right">
                                        <div class="tab-pane fade active show" id="v-pills-home2" role="tabpanel" aria-labelledby="v-pills-home-tab2">
                                            <p class="mb-0">Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Leggings sint. Veniam sint duis incididunt
                                                do esse magna mollit excepteur laborum qui. Id id reprehenderit sit est eu aliqua occaecat quis et velit
                                                excepteur laborum mollit dolore eiusmod. Ipsum dolor in occaecat commodo et voluptate minim reprehenderit
                                                mollit pariatur. Deserunt non laborum enim et cillum eu deserunt excepteur ea incididunt minim occaecat.</p>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-profile2" role="tabpanel" aria-labelledby="v-pills-profile-tab2">
                                            <p class="mb-0">Culpa dolor voluptate do laboris laboris irure reprehenderit id incididunt duis pariatur mollit aute magna
                                                pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo et minim in quis laboris ipsum velit
                                                id veniam. Quis ut consectetur adipisicing officia excepteur non sit. Ut et elit aliquip labore Leggings
                                                enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui esse anim eiusmod do sint minim consectetur
                                                qui.</p>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-settings2" role="tabpanel" aria-labelledby="v-pills-settings-tab2">
                                            <p class="mb-0">Food truck quinoa dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                                                natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                                                eu, pretium quis, sem. Nulla consequat massa quis enim. Cillum ad ut irure tempor velit nostrud occaecat ullamco
                                                aliqua anim Leggings sint. Veniam sint duis incididunt do esse magna mollit excepteur laborum qui.</p>
                                        </div>
                                    </div> <!-- end tabcontent-->
                                </div> <!-- end col-->

                                <div class="col-sm-3 mt-2 mt-sm-0">
                                    <div class="nav flex-column nav-pills" id="v-pills-tab2" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active show" id="v-pills-home-tab2" data-bs-toggle="pill" href="#v-pills-home2" role="tab" aria-controls="v-pills-home2"
                                           aria-selected="true">
                                            <i class="mdi mdi-home-variant d-md-none d-block"></i>
                                            <span class="d-none d-md-block">Home</span>
                                        </a>
                                        <a class="nav-link" id="v-pills-profile-tab2" data-bs-toggle="pill" href="#v-pills-profile2" role="tab" aria-controls="v-pills-profile2"
                                           aria-selected="false">
                                            <i class="mdi mdi-account-circle d-md-none d-block"></i>
                                            <span class="d-none d-md-block">Profile</span>
                                        </a>
                                        <a class="nav-link" id="v-pills-settings-tab2" data-bs-toggle="pill" href="#v-pills-settings2" role="tab" aria-controls="v-pills-settings2"
                                           aria-selected="false">
                                            <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                            <span class="d-none d-md-block">Settings</span>
                                        </a>
                                    </div>
                                </div> <!-- end col-->
                            </div> <!-- end row-->
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="vertical-right-tabs-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;row&quot;&gt;
                                                            &lt;div class=&quot;col-sm-9&quot;&gt;
                                                                &lt;div class=&quot;tab-content&quot; id=&quot;v-pills-tabContent-right&quot;&gt;
                                                                    &lt;div class=&quot;tab-pane fade active show&quot; id=&quot;v-pills-home2&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;v-pills-home-tab2&quot;&gt;
                                                                        &lt;p class=&quot;mb-0&quot;&gt;...&lt;/p&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;tab-pane fade&quot; id=&quot;v-pills-profile2&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;v-pills-profile-tab2&quot;&gt;
                                                                        &lt;p class=&quot;mb-0&quot;&gt;...&lt;/p&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;tab-pane fade&quot; id=&quot;v-pills-settings2&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;v-pills-settings-tab2&quot;&gt;
                                                                        &lt;p class=&quot;mb-0&quot;&gt;...&lt;/p&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt; &lt;!-- end tabcontent--&gt;
                                                            &lt;/div&gt; &lt;!-- end col--&gt;

                                                            &lt;div class=&quot;col-sm-3 mt-2 mt-sm-0&quot;&gt;
                                                                &lt;div class=&quot;nav flex-column nav-pills&quot; id=&quot;v-pills-tab2&quot; role=&quot;tablist&quot; aria-orientation=&quot;vertical&quot;&gt;
                                                                    &lt;a class=&quot;nav-link active show&quot; id=&quot;v-pills-home-tab2&quot; data-bs-toggle=&quot;pill&quot; href=&quot;#v-pills-home2&quot; role=&quot;tab&quot; aria-controls=&quot;v-pills-home2&quot;
                                                                        aria-selected=&quot;true&quot;&gt;
                                                                        &lt;i class=&quot;mdi mdi-home-variant d-md-none d-block&quot;&gt;&lt;/i&gt;
                                                                        &lt;span class=&quot;d-none d-md-block&quot;&gt;Home&lt;/span&gt;
                                                                    &lt;/a&gt;
                                                                    &lt;a class=&quot;nav-link&quot; id=&quot;v-pills-profile-tab2&quot; data-bs-toggle=&quot;pill&quot; href=&quot;#v-pills-profile2&quot; role=&quot;tab&quot; aria-controls=&quot;v-pills-profile2&quot;
                                                                        aria-selected=&quot;false&quot;&gt;
                                                                        &lt;i class=&quot;mdi mdi-account-circle d-md-none d-block&quot;&gt;&lt;/i&gt;
                                                                        &lt;span class=&quot;d-none d-md-block&quot;&gt;Profile&lt;/span&gt;
                                                                    &lt;/a&gt;
                                                                    &lt;a class=&quot;nav-link&quot; id=&quot;v-pills-settings-tab2&quot; data-bs-toggle=&quot;pill&quot; href=&quot;#v-pills-settings2&quot; role=&quot;tab&quot; aria-controls=&quot;v-pills-settings2&quot;
                                                                        aria-selected=&quot;false&quot;&gt;
                                                                        &lt;i class=&quot;mdi mdi-settings-outline d-md-none d-block&quot;&gt;&lt;/i&gt;
                                                                        &lt;span class=&quot;d-none d-md-block&quot;&gt;Settings&lt;/span&gt;
                                                                    &lt;/a&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt; &lt;!-- end col--&gt;
                                                        &lt;/div&gt; &lt;!-- end row--&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Tabs Bordered</h4>
                    <p class="text-muted font-14 mb-3">
                        The navigation item can have a simple bottom border as well. Just specify the class <code>.nav-bordered</code>.
                    </p>

                    <ul class="nav nav-pills bg-nav-pills mb-3">
                        <li class="nav-item">
                            <a href="#bordered-tabs-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0 active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#bordered-tabs-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link rounded-0">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="bordered-tabs-preview">
                            <ul class="nav nav-tabs nav-bordered mb-3">
                                <li class="nav-item">
                                    <a href="#home-b1" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                        <i class="mdi mdi-home-variant d-md-none d-block"></i>
                                        <span class="d-none d-md-block">Home</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#profile-b1" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                                        <i class="mdi mdi-account-circle d-md-none d-block"></i>
                                        <span class="d-none d-md-block">Profile</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#settings-b1" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                        <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                        <span class="d-none d-md-block">Settings</span>
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane" id="home-b1">
                                    <p>Leggings occaecat dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                    <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                </div>
                                <div class="tab-pane show active" id="profile-b1">
                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                    <p class="mb-0">Leggings occaecat dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                </div>
                                <div class="tab-pane" id="settings-b1">
                                    <p>Food truck quinoa dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                    <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                </div>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="bordered-tabs-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;ul class=&quot;nav nav-tabs nav-bordered mb-3&quot;&gt;
                                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                                &lt;a href=&quot;#home-b1&quot; data-bs-toggle=&quot;tab&quot; aria-expanded=&quot;false&quot; class=&quot;nav-link&quot;&gt;
                                                                    &lt;i class=&quot;mdi mdi-home-variant d-md-none d-block&quot;&gt;&lt;/i&gt;
                                                                    &lt;span class=&quot;d-none d-md-block&quot;&gt;Home&lt;/span&gt;
                                                                &lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                                &lt;a href=&quot;#profile-b1&quot; data-bs-toggle=&quot;tab&quot; aria-expanded=&quot;true&quot; class=&quot;nav-link active&quot;&gt;
                                                                    &lt;i class=&quot;mdi mdi-account-circle d-md-none d-block&quot;&gt;&lt;/i&gt;
                                                                    &lt;span class=&quot;d-none d-md-block&quot;&gt;Profile&lt;/span&gt;
                                                                &lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                                &lt;a href=&quot;#settings-b1&quot; data-bs-toggle=&quot;tab&quot; aria-expanded=&quot;false&quot; class=&quot;nav-link&quot;&gt;
                                                                    &lt;i class=&quot;mdi mdi-settings-outline d-md-none d-block&quot;&gt;&lt;/i&gt;
                                                                    &lt;span class=&quot;d-none d-md-block&quot;&gt;Settings&lt;/span&gt;
                                                                &lt;/a&gt;
                                                            &lt;/li&gt;
                                                        &lt;/ul&gt;

                                                        &lt;div class=&quot;tab-content&quot;&gt;
                                                            &lt;div class=&quot;tab-pane&quot; id=&quot;home-b1&quot;&gt;
                                                                &lt;p&gt;...&lt;/p&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;tab-pane show active&quot; id=&quot;profile-b1&quot;&gt;
                                                                &lt;p&gt;...&lt;/p&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;tab-pane&quot; id=&quot;settings-b1&quot;&gt;
                                                                &lt;p&gt;...&lt;/p&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Tabs Bordered Justified</h4>
                    <p class="text-muted font-14 mb-3">
                        The navigation item with a simple bottom border and justified</code>
                    </p>

                    <ul class="nav nav-pills bg-nav-pills mb-3">
                        <li class="nav-item">
                            <a href="#bordered-justified-tabs-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0 active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#bordered-justified-tabs-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link rounded-0">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="bordered-justified-tabs-preview">
                            <ul class="nav nav-tabs nav-justified nav-bordered mb-3">
                                <li class="nav-item">
                                    <a href="#home-b2" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                        <i class="mdi mdi-home-variant d-md-none d-block"></i>
                                        <span class="d-none d-md-block">Home</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#profile-b2" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                                        <i class="mdi mdi-account-circle d-md-none d-block"></i>
                                        <span class="d-none d-md-block">Profile</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#settings-b2" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                        <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                        <span class="d-none d-md-block">Settings</span>
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane" id="home-b2">
                                    <p>Leggings occaecat dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                    <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                </div>
                                <div class="tab-pane show active" id="profile-b2">
                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                    <p class="mb-0">Leggings occaecat dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                </div>
                                <div class="tab-pane" id="settings-b2">
                                    <p>Food truck quinoa dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                    <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                </div>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="bordered-justified-tabs-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;ul class=&quot;nav nav-tabs nav-justified nav-bordered mb-3&quot;&gt;
                                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                                &lt;a href=&quot;#home-b2&quot; data-bs-toggle=&quot;tab&quot; aria-expanded=&quot;false&quot; class=&quot;nav-link&quot;&gt;
                                                                    &lt;i class=&quot;mdi mdi-home-variant d-md-none d-block&quot;&gt;&lt;/i&gt;
                                                                    &lt;span class=&quot;d-none d-md-block&quot;&gt;Home&lt;/span&gt;
                                                                &lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                                &lt;a href=&quot;#profile-b2&quot; data-bs-toggle=&quot;tab&quot; aria-expanded=&quot;true&quot; class=&quot;nav-link active&quot;&gt;
                                                                    &lt;i class=&quot;mdi mdi-account-circle d-md-none d-block&quot;&gt;&lt;/i&gt;
                                                                    &lt;span class=&quot;d-none d-md-block&quot;&gt;Profile&lt;/span&gt;
                                                                &lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li class=&quot;nav-item&quot;&gt;
                                                                &lt;a href=&quot;#settings-b2&quot; data-bs-toggle=&quot;tab&quot; aria-expanded=&quot;false&quot; class=&quot;nav-link&quot;&gt;
                                                                    &lt;i class=&quot;mdi mdi-settings-outline d-md-none d-block&quot;&gt;&lt;/i&gt;
                                                                    &lt;span class=&quot;d-none d-md-block&quot;&gt;Settings&lt;/span&gt;
                                                                &lt;/a&gt;
                                                            &lt;/li&gt;
                                                        &lt;/ul&gt;

                                                        &lt;div class=&quot;tab-content&quot;&gt;
                                                            &lt;div class=&quot;tab-pane&quot; id=&quot;home-b2&quot;&gt;
                                                                &lt;p&gt;...&lt;/p&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;tab-pane show active&quot; id=&quot;profile-b2&quot;&gt;
                                                                &lt;p&gt;...&lt;/p&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;tab-pane&quot; id=&quot;settings-b2&quot;&gt;
                                                                &lt;p&gt;...&lt;/p&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->
</div>