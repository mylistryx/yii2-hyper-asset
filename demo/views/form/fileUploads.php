<?php
/**
 * @var $this View
 */

use hyper\assets\CodeHighLightAsset;
use hyper\assets\DropZoneAsset;
use yii\web\View;

CodeHighLightAsset::register($this);
DropZoneAsset::register($this);

$this->registerJsFile('/js/ui/component.fileupload.js', ['depends' => DropZoneAsset::class]);

$this->title = 'File Uploads';
$this->params['breadcrumbs'][] = $this->title;

?>


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Dropzone File Upload</h4>
                <p class="text-muted font-14">
                    DropzoneJS is an open source library that provides drag’n’drop file uploads with image previews.
                </p>

                <ul class="nav nav-tabs nav-bordered mb-3">
                    <li class="nav-item">
                        <a href="#file-upload-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                            Preview
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#file-upload-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                            Code
                        </a>
                    </li>
                </ul> <!-- end nav-->
                <div class="tab-content">
                    <div class="tab-pane show active" id="file-upload-preview">
                        <form action="/" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                              data-upload-preview-template="#uploadPreviewTemplate">
                            <div class="fallback">
                                <input name="file" type="file" multiple/>
                            </div>

                            <div class="dz-message needsclick">
                                <i class="h1 text-muted ri-upload-cloud-2-line"></i>
                                <h3>Drop files here or click to upload.</h3>
                                <span class="text-muted font-13">(This is just a demo dropzone. Selected files are
                                                            <strong>not</strong> actually uploaded.)</span>
                            </div>
                        </form>

                        <!-- Preview -->
                        <div class="dropzone-previews mt-3" id="file-previews"></div>
                    </div> <!-- end preview-->

                    <div class="tab-pane code" id="file-upload-code">
                        <p class="m-2">Make sure to include following js files at end of <code>body element</code></p>
                        <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                        <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- plugin js --&gt;
                                                        &lt;script src=&quot;assets/vendor/dropzone/min/dropzone.min.js&quot;&gt;&lt;/script&gt;
                                                        &lt;!-- init js --&gt;
                                                        &lt;script src=&quot;assets/js/ui/component.fileupload.js&quot;&gt;&lt;/script&gt;

                                                        &lt;!-- File Upload --&gt;
                                                        &lt;form action=&quot;/&quot; method=&quot;post&quot; class=&quot;dropzone&quot; id=&quot;myAwesomeDropzone&quot; data-plugin=&quot;dropzone&quot; data-previews-container=&quot;#file-previews&quot;
                                                            data-upload-preview-template=&quot;#uploadPreviewTemplate&quot;&gt;
                                                            &lt;div class=&quot;fallback&quot;&gt;
                                                                &lt;input name=&quot;file&quot; type=&quot;file&quot; multiple /&gt;
                                                            &lt;/div&gt;

                                                            &lt;div class=&quot;dz-message needsclick&quot;&gt;
                                                                &lt;i class=&quot;h1 text-muted ri-upload-cloud-2-line&quot;&gt;&lt;/i&gt;
                                                                &lt;h3&gt;Drop files here or click to upload.&lt;/h3&gt;
                                                                &lt;span class=&quot;text-muted font-13&quot;&gt;(This is just a demo dropzone. Selected files are
                                                                    &lt;strong&gt;not&lt;/strong&gt; actually uploaded.)&lt;/span&gt;
                                                            &lt;/div&gt;
                                                        &lt;/form&gt;

                                                        &lt;!-- Preview --&gt;
                                                        &lt;div class=&quot;dropzone-previews mt-3&quot; id=&quot;file-previews&quot;&gt;&lt;/div&gt;

                                                        &lt;!-- file preview template --&gt;
                                                        &lt;div class=&quot;d-none&quot; id=&quot;uploadPreviewTemplate&quot;&gt;
                                                            &lt;div class=&quot;card mt-1 mb-0 shadow-none border&quot;&gt;
                                                                &lt;div class=&quot;p-2&quot;&gt;
                                                                    &lt;div class=&quot;row align-items-center&quot;&gt;
                                                                        &lt;div class=&quot;col-auto&quot;&gt;
                                                                            &lt;img data-dz-thumbnail src=&quot;#&quot; class=&quot;avatar-sm rounded bg-light&quot; alt=&quot;&quot;&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;div class=&quot;col ps-0&quot;&gt;
                                                                            &lt;a href=&quot;javascript:void(0);&quot; class=&quot;text-muted fw-bold&quot; data-dz-name&gt;&lt;/a&gt;
                                                                            &lt;p class=&quot;mb-0&quot; data-dz-size&gt;&lt;/p&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;div class=&quot;col-auto&quot;&gt;
                                                                            &lt;!-- Button --&gt;
                                                                            &lt;a href=&quot;&quot; class=&quot;btn btn-link btn-lg text-muted&quot; data-dz-remove&gt;
                                                                                &lt;i class=&quot;ri-close-line&quot;&gt;&lt;/i&gt;
                                                                            &lt;/a&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                    </div> <!-- end preview code-->
                </div> <!-- end tab-content-->


            </div>
            <!-- end card-body -->
        </div>
        <!-- end card-->
    </div>
    <!-- end col-->
</div>
<!-- end row -->
