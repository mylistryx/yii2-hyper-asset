<?php
/**
 * @var $this View
 */

use yii\web\View;

$this->title = 'Embed video';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Responsive embed video 21:9</h4>
                <p class="text-muted font-14">Use class <code>.ratio-21x9</code></p>

                <ul class="nav nav-tabs nav-bordered mb-3">
                    <li class="nav-item">
                        <a href="#embed-1-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                            Preview
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#embed-1-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                            Code
                        </a>
                    </li>
                </ul> <!-- end nav-->
                <div class="tab-content">
                    <div class="tab-pane show active" id="embed-1-preview">
                        <!-- 21:9 aspect ratio -->
                        <div class="ratio ratio-21x9">
                            <iframe src="https://www.youtube.com/embed/PrUxWZiQfy4?autohide=0&showinfo=0&controls=0"></iframe>
                        </div>
                    </div> <!-- end preview-->

                    <div class="tab-pane code" id="embed-1-code">
                        <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                        <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- 21:9 aspect ratio --&gt;
                                                        &lt;div class=&quot;ratio ratio-21x9&quot;&gt;
                                                            &lt;iframe src=&quot;https://www.youtube.com/embed/PrUxWZiQfy4?autohide=0&amp;showinfo=0&amp;controls=0&quot;&gt;&lt;/iframe&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                    </div> <!-- end preview code-->
                </div> <!-- end tab-content-->
            </div> <!-- end card-body -->
        </div> <!-- end card-->

        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Responsive embed video 1:1</h4>
                <p class="text-muted font-14">Use class <code>.ratio-1x1</code></p>

                <ul class="nav nav-tabs nav-bordered mb-3">
                    <li class="nav-item">
                        <a href="#embed-2-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                            Preview
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#embed-2-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                            Code
                        </a>
                    </li>
                </ul> <!-- end nav-->
                <div class="tab-content">
                    <div class="tab-pane show active" id="embed-2-preview">
                        <!-- 1:1 aspect ratio -->
                        <div class="ratio ratio-1x1">
                            <iframe src="https://www.youtube.com/embed/PrUxWZiQfy4?ecver=1"></iframe>
                        </div>
                    </div> <!-- end preview-->

                    <div class="tab-pane code" id="embed-2-code">
                        <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                        <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- 1:1 aspect ratio --&gt;
                                                        &lt;div class=&quot;ratio ratio-1x1&quot;&gt;
                                                            &lt;iframe src=&quot;https://www.youtube.com/embed/PrUxWZiQfy4?ecver=1&quot;&gt;&lt;/iframe&gt;
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
                <h4 class="header-title">Responsive embed video 16:9</h4>
                <p class="text-muted font-14">Use class <code>.ratio-16x9</code></p>

                <ul class="nav nav-tabs nav-bordered mb-3">
                    <li class="nav-item">
                        <a href="#embed-3-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                            Preview
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#embed-3-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                            Code
                        </a>
                    </li>
                </ul> <!-- end nav-->
                <div class="tab-content">
                    <div class="tab-pane show active" id="embed-3-preview">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/PrUxWZiQfy4?autohide=0&showinfo=0&controls=0"></iframe>
                        </div>
                    </div> <!-- end preview-->

                    <div class="tab-pane code" id="embed-3-code">
                        <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                        <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- 16:9 aspect ratio --&gt;
                                                        &lt;div class=&quot;ratio ratio-16x9&quot;&gt;
                                                            &lt;iframe src=&quot;https://www.youtube.com/embed/PrUxWZiQfy4?autohide=0&amp;showinfo=0&amp;controls=0&quot;&gt;&lt;/iframe&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                    </div> <!-- end preview code-->
                </div> <!-- end tab-content-->
            </div> <!-- end card-body -->
        </div> <!-- end card-->

        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Responsive embed video 4:3</h4>
                <p class="text-muted font-14">Use class <code>.ratio-4x3</code></p>

                <ul class="nav nav-tabs nav-bordered mb-3">
                    <li class="nav-item">
                        <a href="#embed-4-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                            Preview
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#embed-4-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                            Code
                        </a>
                    </li>
                </ul> <!-- end nav-->
                <div class="tab-content">
                    <div class="tab-pane show active" id="embed-4-preview">
                        <!-- 4:3 aspect ratio -->
                        <div class="ratio ratio-4x3">
                            <iframe src="https://www.youtube.com/embed/PrUxWZiQfy4?ecver=1"></iframe>
                        </div>
                    </div> <!-- end preview-->

                    <div class="tab-pane code" id="embed-4-code">
                        <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                        <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- 4:3 aspect ratio --&gt;
                                                        &lt;div class=&quot;ratio ratio-4x3&quot;&gt;
                                                            &lt;iframe src=&quot;https://www.youtube.com/embed/PrUxWZiQfy4?ecver=1&quot;&gt;&lt;/iframe&gt;
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
