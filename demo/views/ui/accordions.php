<?php
/**
 * @var $this View
 */

use hyper\assets\CodeHighLightAsset;
use yii\web\View;

$this->title = 'Accordions & Collapse';
$this->params['breadcrumbs'][] = $this->title;

CodeHighLightAsset::register($this);
?>
<div class="content-container">
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Default Accordions</h4>
                    <p class="text-muted font-14 mb-3">Click the accordions below to expand/collapse the accordion content.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item" role="presentation">
                            <a href="#default-accordions-preview" class="nav-link active" data-bs-toggle="tab" role="tab" aria-controls="nav-preview" aria-selected="true">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#default-accordions-code" class="nav-link" data-bs-toggle="tab" role="tab" aria-controls="nav-code" aria-selected="false">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->

                    <div class="tab-content">
                        <div class="tab-pane show active" id="default-accordions-preview">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                            Accordion Item #1
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse
                                            plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                            appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                                            custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                                            within the <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Accordion Item #2
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse
                                            plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                            appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                                            custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                                            within the <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Accordion Item #3
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse
                                            plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                            appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                                            custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                                            within the <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="default-accordions-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;accordion&quot; id=&quot;accordionExample&quot;&gt;
                                                            &lt;div class=&quot;accordion-item&quot;&gt;
                                                                &lt;h2 class=&quot;accordion-header&quot; id=&quot;headingOne&quot;&gt;
                                                                    &lt;button class=&quot;accordion-button&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseOne&quot;
                                                                        aria-expanded=&quot;true&quot; aria-controls=&quot;collapseOne&quot;&gt;
                                                                        Accordion Item #1
                                                                    &lt;/button&gt;
                                                                &lt;/h2&gt;
                                                                &lt;div id=&quot;collapseOne&quot; class=&quot;accordion-collapse collapse show&quot; aria-labelledby=&quot;headingOne&quot;
                                                                    data-bs-parent=&quot;#accordionExample&quot;&gt;
                                                                    &lt;div class=&quot;accordion-body&quot;&gt;
                                                                        &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by default, until the collapse
                                                                        plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                                                        appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                                                                        custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                                                                        within the &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;accordion-item&quot;&gt;
                                                                &lt;h2 class=&quot;accordion-header&quot; id=&quot;headingTwo&quot;&gt;
                                                                    &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot;
                                                                        data-bs-target=&quot;#collapseTwo&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseTwo&quot;&gt;
                                                                        Accordion Item #2
                                                                    &lt;/button&gt;
                                                                &lt;/h2&gt;
                                                                &lt;div id=&quot;collapseTwo&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;headingTwo&quot;
                                                                    data-bs-parent=&quot;#accordionExample&quot;&gt;
                                                                    &lt;div class=&quot;accordion-body&quot;&gt;
                                                                        &lt;strong&gt;This is the second item's accordion body.&lt;/strong&gt; It is hidden by default, until the collapse
                                                                        plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                                                        appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                                                                        custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                                                                        within the &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;accordion-item&quot;&gt;
                                                                &lt;h2 class=&quot;accordion-header&quot; id=&quot;headingThree&quot;&gt;
                                                                    &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot;
                                                                        data-bs-target=&quot;#collapseThree&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseThree&quot;&gt;
                                                                        Accordion Item #3
                                                                    &lt;/button&gt;
                                                                &lt;/h2&gt;
                                                                &lt;div id=&quot;collapseThree&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;headingThree&quot;
                                                                    data-bs-parent=&quot;#accordionExample&quot;&gt;
                                                                    &lt;div class=&quot;accordion-body&quot;&gt;
                                                                        &lt;strong&gt;This is the third item's accordion body.&lt;/strong&gt; It is hidden by default, until the collapse
                                                                        plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                                                        appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                                                                        custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                                                                        within the &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Flush Accordions</h4>
                    <p class="text-muted font-14 mb-3">Add <code>.accordion-flush</code> to remove the default <code>background-color</code>, some borders, and some rounded corners to render accordions edge-to-edge with their parent container.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item" role="presentation">
                            <a href="#flush-accordions-preview" class="nav-link active" data-bs-toggle="tab" role="tab" aria-controls="nav-preview" aria-selected="true">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#flush-accordions-code" class="nav-link" data-bs-toggle="tab" role="tab" aria-controls="nav-code" aria-selected="false">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->

                    <div class="tab-content">
                        <div class="tab-pane show active" id="flush-accordions-preview">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            Accordion Item #1
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                                         data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                                            <code>.accordion-flush</code> class. This is the first item's accordion body.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            Accordion Item #2
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                                         data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                                            <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being
                                            filled with some actual content.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            Accordion Item #3
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                                         data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                                            <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting
                                            happening here in terms of content, but just filling up the space to make it look, at least at first
                                            glance, a bit more representative of how this would look in a real-world application.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="flush-accordions-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;accordion accordion-flush&quot; id=&quot;accordionFlushExample&quot;&gt;
                                                            &lt;div class=&quot;accordion-item&quot;&gt;
                                                                &lt;h2 class=&quot;accordion-header&quot; id=&quot;flush-headingOne&quot;&gt;
                                                                    &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot;
                                                                        data-bs-target=&quot;#flush-collapseOne&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;flush-collapseOne&quot;&gt;
                                                                        Accordion Item #1
                                                                    &lt;/button&gt;
                                                                &lt;/h2&gt;
                                                                &lt;div id=&quot;flush-collapseOne&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;flush-headingOne&quot;
                                                                    data-bs-parent=&quot;#accordionFlushExample&quot;&gt;
                                                                    &lt;div class=&quot;accordion-body&quot;&gt;Placeholder content for this accordion, which is intended to demonstrate the
                                                                        &lt;code&gt;.accordion-flush&lt;/code&gt; class. This is the first item's accordion body.&lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;accordion-item&quot;&gt;
                                                                &lt;h2 class=&quot;accordion-header&quot; id=&quot;flush-headingTwo&quot;&gt;
                                                                    &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot;
                                                                        data-bs-target=&quot;#flush-collapseTwo&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;flush-collapseTwo&quot;&gt;
                                                                        Accordion Item #2
                                                                    &lt;/button&gt;
                                                                &lt;/h2&gt;
                                                                &lt;div id=&quot;flush-collapseTwo&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;flush-headingTwo&quot;
                                                                    data-bs-parent=&quot;#accordionFlushExample&quot;&gt;
                                                                    &lt;div class=&quot;accordion-body&quot;&gt;Placeholder content for this accordion, which is intended to demonstrate the
                                                                        &lt;code&gt;.accordion-flush&lt;/code&gt; class. This is the second item's accordion body. Let's imagine this being
                                                                        filled with some actual content.&lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;accordion-item&quot;&gt;
                                                                &lt;h2 class=&quot;accordion-header&quot; id=&quot;flush-headingThree&quot;&gt;
                                                                    &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot;
                                                                        data-bs-target=&quot;#flush-collapseThree&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;flush-collapseThree&quot;&gt;
                                                                        Accordion Item #3
                                                                    &lt;/button&gt;
                                                                &lt;/h2&gt;
                                                                &lt;div id=&quot;flush-collapseThree&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;flush-headingThree&quot;
                                                                    data-bs-parent=&quot;#accordionFlushExample&quot;&gt;
                                                                    &lt;div class=&quot;accordion-body&quot;&gt;Placeholder content for this accordion, which is intended to demonstrate the
                                                                        &lt;code&gt;.accordion-flush&lt;/code&gt; class. This is the third item's accordion body. Nothing more exciting
                                                                        happening here in terms of content, but just filling up the space to make it look, at least at first
                                                                        glance, a bit more representative of how this would look in a real-world application.&lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

    </div>
    <!-- end row-->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Simple Card Accordions</h4>
                    <p class="text-muted font-14 mb-3">
                        Using the card component, you can
                        extend the default collapse behavior to create an accordion. To properly achieve
                        the accordion style, be sure to use <code>.accordion</code> as a wrapper.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item" role="presentation">
                            <a href="#card-accordions-preview" class="nav-link active" data-bs-toggle="tab" role="tab" aria-controls="nav-preview" aria-selected="true">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#card-accordions-code" class="nav-link" data-bs-toggle="tab" role="tab" aria-controls="nav-code" aria-selected="false">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->

                    <div class="tab-content">
                        <div class="tab-pane show active" id="card-accordions-preview">
                            <div class="accordion" id="CardaccordionExample">
                                <div class="card mb-0">
                                    <div class="card-header" id="CardheadingOne">
                                        <h5 class="m-0">
                                            <a class="custom-accordion-title d-block pt-2 pb-2" data-bs-toggle="collapse" href="#CardcollapseOne" aria-expanded="true" aria-controls="CardcollapseOne">
                                                Collapsible Group Item #1
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="CardcollapseOne" class="collapse show"
                                         aria-labelledby="CardheadingOne" data-bs-parent="#CardaccordionExample">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                                            accusamus terry richardson ad squid. 3 wolf moon officia
                                            aute, non cupidatat skateboard dolor brunch. Food truck
                                            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                            sunt aliqua put a bird on it squid single-origin coffee
                                            nulla assumenda shoreditch et. Nihil anim keffiyeh
                                            helvetica, craft beer labore wes anderson cred nesciunt
                                            sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                            Leggings occaecat craft beer farm-to-table, raw denim
                                            aesthetic synth nesciunt you probably haven't heard of them
                                            accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-0">
                                    <div class="card-header" id="CardheadingTwo">
                                        <h5 class="m-0">
                                            <a class="custom-accordion-title collapsed d-block pt-2 pb-2"
                                               data-bs-toggle="collapse" href="#CardcollapseTwo"
                                               aria-expanded="false" aria-controls="CardcollapseTwo">
                                                Collapsible Group Item #2
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="CardcollapseTwo" class="collapse" aria-labelledby="CardheadingTwo"
                                         data-bs-parent="#CardaccordionExample">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                                            accusamus terry richardson ad squid. 3 wolf moon officia
                                            aute, non cupidatat skateboard dolor brunch. Food truck
                                            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                            sunt aliqua put a bird on it squid single-origin coffee
                                            nulla assumenda shoreditch et. Nihil anim keffiyeh
                                            helvetica, craft beer labore wes anderson cred nesciunt
                                            sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                            Leggings occaecat craft beer farm-to-table, raw denim
                                            aesthetic synth nesciunt you probably haven't heard of them
                                            accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-0">
                                    <div class="card-header" id="CardheadingThree">
                                        <h5 class="m-0">
                                            <a class="custom-accordion-title collapsed d-block pt-2 pb-2"
                                               data-bs-toggle="collapse" href="#CardcollapseThree"
                                               aria-expanded="false" aria-controls="CardcollapseThree">
                                                Collapsible Group Item #3
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="CardcollapseThree" class="collapse"
                                         aria-labelledby="CardheadingThree" data-bs-parent="#CardaccordionExample">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                                            accusamus terry richardson ad squid. 3 wolf moon officia
                                            aute, non cupidatat skateboard dolor brunch. Food truck
                                            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                            sunt aliqua put a bird on it squid single-origin coffee
                                            nulla assumenda shoreditch et. Nihil anim keffiyeh
                                            helvetica, craft beer labore wes anderson cred nesciunt
                                            sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                            Leggings occaecat craft beer farm-to-table, raw denim
                                            aesthetic synth nesciunt you probably haven't heard of them
                                            accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="card-accordions-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;accordion&quot; id=&quot;CardaccordionExample&quot;&gt;
                                                            &lt;div class=&quot;card mb-0&quot;&gt;
                                                                &lt;div class=&quot;card-header&quot; id=&quot;CardheadingOne&quot;&gt;
                                                                    &lt;h5 class=&quot;m-0&quot;&gt;
                                                                        &lt;a class=&quot;custom-accordion-title d-block pt-2 pb-2&quot;
                                                                            data-bs-toggle=&quot;collapse&quot; href=&quot;#collapseOne&quot;
                                                                            aria-expanded=&quot;true&quot; aria-controls=&quot;collapseOne&quot;&gt;
                                                                            Collapsible Group Item #1
                                                                        &lt;/a&gt;
                                                                    &lt;/h5&gt;
                                                                &lt;/div&gt;

                                                                &lt;div id=&quot;collapseOne&quot; class=&quot;collapse show&quot;
                                                                    aria-labelledby=&quot;CardheadingOne&quot; data-bs-parent=&quot;#CardaccordionExample&quot;&gt;
                                                                    &lt;div class=&quot;card-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;card mb-0&quot;&gt;
                                                                &lt;div class=&quot;card-header&quot; id=&quot;CardheadingTwo&quot;&gt;
                                                                    &lt;h5 class=&quot;m-0&quot;&gt;
                                                                        &lt;a class=&quot;custom-accordion-title collapsed d-block pt-2 pb-2&quot;
                                                                            data-bs-toggle=&quot;collapse&quot; href=&quot;#collapseTwo&quot;
                                                                            aria-expanded=&quot;false&quot; aria-controls=&quot;collapseTwo&quot;&gt;
                                                                            Collapsible Group Item #2
                                                                        &lt;/a&gt;
                                                                    &lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div id=&quot;collapseTwo&quot; class=&quot;collapse&quot; aria-labelledby=&quot;CardheadingTwo&quot;
                                                                    data-bs-parent=&quot;#CardaccordionExample&quot;&gt;
                                                                    &lt;div class=&quot;card-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;card mb-0&quot;&gt;
                                                                &lt;div class=&quot;card-header&quot; id=&quot;CardheadingThree&quot;&gt;
                                                                    &lt;h5 class=&quot;m-0&quot;&gt;
                                                                        &lt;a class=&quot;custom-accordion-title collapsed d-block pt-2 pb-2&quot;
                                                                            data-bs-toggle=&quot;collapse&quot; href=&quot;#collapseThree&quot;
                                                                            aria-expanded=&quot;false&quot; aria-controls=&quot;collapseThree&quot;&gt;
                                                                            Collapsible Group Item #3
                                                                        &lt;/a&gt;
                                                                    &lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div id=&quot;collapseThree&quot; class=&quot;collapse&quot;
                                                                    aria-labelledby=&quot;CardheadingThree&quot; data-bs-parent=&quot;#CardaccordionExample&quot;&gt;
                                                                    &lt;div class=&quot;card-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Always Open Accordions</h4>
                    <p class="text-muted font-14 mb-3">Omit the <code>data-bs-parent</code> attribute on each <code>.accordion-collapse</code> to make accordion items stay open when another item is opened.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item" role="presentation">
                            <a href="#alwaysopen-accordions-preview" class="nav-link active" data-bs-toggle="tab" role="tab" aria-controls="nav-preview" aria-selected="true">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#alwaysopen-accordions-code" class="nav-link" data-bs-toggle="tab" role="tab" aria-controls="nav-code" aria-selected="false">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->

                    <div class="tab-content">
                        <div class="tab-pane show active" id="alwaysopen-accordions-preview">
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                                aria-controls="panelsStayOpen-collapseOne">
                                            Accordion Item #1
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                         aria-labelledby="panelsStayOpen-headingOne">
                                        <div class="accordion-body">
                                            <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse
                                            plugin adds the appropriate classes that we use to style each element. These classes control the
                                            overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of
                                            this with custom CSS or overriding our default variables. It's also worth noting that just about any
                                            HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                                aria-controls="panelsStayOpen-collapseTwo">
                                            Accordion Item #2
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                         aria-labelledby="panelsStayOpen-headingTwo">
                                        <div class="accordion-body">
                                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                                            modify any of this with custom CSS or overriding our default variables. It's also worth noting that
                                            just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit
                                            overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                                aria-controls="panelsStayOpen-collapseThree">
                                            Accordion Item #3
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                         aria-labelledby="panelsStayOpen-headingThree">
                                        <div class="accordion-body">
                                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                                            modify any of this with custom CSS or overriding our default variables. It's also worth noting that
                                            just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit
                                            overflow.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="alwaysopen-accordions-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;accordion&quot; id=&quot;accordionPanelsStayOpenExample&quot;&gt;
                                                            &lt;div class=&quot;accordion-item&quot;&gt;
                                                                &lt;h2 class=&quot;accordion-header&quot; id=&quot;panelsStayOpen-headingOne&quot;&gt;
                                                                    &lt;button class=&quot;accordion-button&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot;
                                                                        data-bs-target=&quot;#panelsStayOpen-collapseOne&quot; aria-expanded=&quot;true&quot;
                                                                        aria-controls=&quot;panelsStayOpen-collapseOne&quot;&gt;
                                                                        Accordion Item #1
                                                                    &lt;/button&gt;
                                                                &lt;/h2&gt;
                                                                &lt;div id=&quot;panelsStayOpen-collapseOne&quot; class=&quot;accordion-collapse collapse show&quot;
                                                                    aria-labelledby=&quot;panelsStayOpen-headingOne&quot;&gt;
                                                                    &lt;div class=&quot;accordion-body&quot;&gt;
                                                                        &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by default, until the collapse
                                                                        plugin adds the appropriate classes that we use to style each element. These classes control the
                                                                        overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of
                                                                        this with custom CSS or overriding our default variables. It's also worth noting that just about any
                                                                        HTML can go within the &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;accordion-item&quot;&gt;
                                                                &lt;h2 class=&quot;accordion-header&quot; id=&quot;panelsStayOpen-headingTwo&quot;&gt;
                                                                    &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot;
                                                                        data-bs-target=&quot;#panelsStayOpen-collapseTwo&quot; aria-expanded=&quot;false&quot;
                                                                        aria-controls=&quot;panelsStayOpen-collapseTwo&quot;&gt;
                                                                        Accordion Item #2
                                                                    &lt;/button&gt;
                                                                &lt;/h2&gt;
                                                                &lt;div id=&quot;panelsStayOpen-collapseTwo&quot; class=&quot;accordion-collapse collapse&quot;
                                                                    aria-labelledby=&quot;panelsStayOpen-headingTwo&quot;&gt;
                                                                    &lt;div class=&quot;accordion-body&quot;&gt;
                                                                        &lt;strong&gt;This is the second item's accordion body.&lt;/strong&gt; It is hidden by default, until the
                                                                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                                                                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                                                                        modify any of this with custom CSS or overriding our default variables. It's also worth noting that
                                                                        just about any HTML can go within the &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit
                                                                        overflow.
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;accordion-item&quot;&gt;
                                                                &lt;h2 class=&quot;accordion-header&quot; id=&quot;panelsStayOpen-headingThree&quot;&gt;
                                                                    &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot;
                                                                        data-bs-target=&quot;#panelsStayOpen-collapseThree&quot; aria-expanded=&quot;false&quot;
                                                                        aria-controls=&quot;panelsStayOpen-collapseThree&quot;&gt;
                                                                        Accordion Item #3
                                                                    &lt;/button&gt;
                                                                &lt;/h2&gt;
                                                                &lt;div id=&quot;panelsStayOpen-collapseThree&quot; class=&quot;accordion-collapse collapse&quot;
                                                                    aria-labelledby=&quot;panelsStayOpen-headingThree&quot;&gt;
                                                                    &lt;div class=&quot;accordion-body&quot;&gt;
                                                                        &lt;strong&gt;This is the third item's accordion body.&lt;/strong&gt; It is hidden by default, until the
                                                                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                                                                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                                                                        modify any of this with custom CSS or overriding our default variables. It's also worth noting that
                                                                        just about any HTML can go within the &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit
                                                                        overflow.
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

    </div>
    <!-- end row-->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Custom Accordions</h4>
                    <p class="text-muted font-14 mb-3">
                        You can have custom look and feel for accorion as well. Just use class <code>.custom-accordion</code> along with
                        <code>.accordion</code> as a wrapper.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#custom-accordions-preview" class="nav-link active" data-bs-toggle="tab" role="tab" aria-controls="nav-preview" aria-selected="true">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#custom-accordions-code" class="nav-link" data-bs-toggle="tab" role="tab" aria-controls="nav-code" aria-selected="false">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->

                    <div class="tab-content">
                        <div class="tab-pane show active" id="custom-accordions-preview">
                            <div class="accordion custom-accordion" id="custom-accordion-one">
                                <div class="card mb-0">
                                    <div class="card-header" id="headingFour">
                                        <h5 class="m-0">
                                            <a class="custom-accordion-title d-block py-1"
                                               data-bs-toggle="collapse" href="#collapseFour"
                                               aria-expanded="true" aria-controls="collapseFour">
                                                Q. Can I use this template for my client? <i
                                                        class="mdi mdi-chevron-down accordion-arrow"></i>
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="collapseFour" class="collapse show"
                                         aria-labelledby="headingFour"
                                         data-bs-parent="#custom-accordion-one">
                                        <div class="card-body">
                                            Yup, the marketplace license allows you to use this theme
                                            in any end products.
                                            For more information on licenses, please refere <a
                                                    href="https://themes.getbootstrap.com/licenses/">here</a>.
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-0">
                                    <div class="card-header" id="headingFive">
                                        <h5 class="m-0">
                                            <a class="custom-accordion-title collapsed d-block py-1"
                                               data-bs-toggle="collapse" href="#collapseFive"
                                               aria-expanded="false" aria-controls="collapseFive">
                                                Q. Can this theme work with Wordpress? <i
                                                        class="mdi mdi-chevron-down accordion-arrow"></i>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseFive" class="collapse"
                                         aria-labelledby="headingFive"
                                         data-bs-parent="#custom-accordion-one">
                                        <div class="card-body">
                                            No. This is a HTML template. It won't directly with
                                            wordpress, though you can convert this into wordpress
                                            compatible theme
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-0">
                                    <div class="card-header" id="headingSix">
                                        <h5 class="m-0">
                                            <a class="custom-accordion-title collapsed d-block py-1"
                                               data-bs-toggle="collapse" href="#collapseSix"
                                               aria-expanded="false" aria-controls="collapseSix">
                                                Q. How do I get help with the theme? <i
                                                        class="mdi mdi-chevron-down accordion-arrow"></i>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                         data-bs-parent="#custom-accordion-one">
                                        <div class="card-body">
                                            Use our dedicated support email (support@coderthemes.com) to
                                            send your issues or feedback. We are here to help anytime
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-0">
                                    <div class="card-header" id="headingSeven">
                                        <h5 class="m-0">
                                            <a class="custom-accordion-title collapsed d-block py-1"
                                               data-bs-toggle="collapse" href="#collapseSeven"
                                               aria-expanded="false" aria-controls="collapseSeven">
                                                Q. Will you regularly give updates of Hyper ? <i
                                                        class="mdi mdi-chevron-down accordion-arrow"></i>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseSeven" class="collapse"
                                         aria-labelledby="headingSeven"
                                         data-bs-parent="#custom-accordion-one">
                                        <div class="card-body">
                                            Yes, We will update the Hyper regularly. All the
                                            future updates would be available without any cost
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="custom-accordions-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;accordion custom-accordion&quot; id=&quot;custom-accordion-one&quot;&gt;
                                                            &lt;div class=&quot;card mb-0&quot;&gt;
                                                                &lt;div class=&quot;card-header&quot; id=&quot;headingFour&quot;&gt;
                                                                    &lt;h5 class=&quot;m-0&quot;&gt;
                                                                        &lt;a class=&quot;custom-accordion-title d-block py-1&quot;
                                                                            data-bs-toggle=&quot;collapse&quot; href=&quot;#collapseFour&quot;
                                                                            aria-expanded=&quot;true&quot; aria-controls=&quot;collapseFour&quot;&gt;
                                                                            Q. Can I use this template for my client? &lt;i
                                                                                class=&quot;mdi mdi-chevron-down accordion-arrow&quot;&gt;&lt;/i&gt;
                                                                        &lt;/a&gt;
                                                                    &lt;/h5&gt;
                                                                &lt;/div&gt;

                                                                &lt;div id=&quot;collapseFour&quot; class=&quot;collapse show&quot;
                                                                    aria-labelledby=&quot;headingFour&quot;
                                                                    data-bs-parent=&quot;#custom-accordion-one&quot;&gt;
                                                                    &lt;div class=&quot;card-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;card mb-0&quot;&gt;
                                                                &lt;div class=&quot;card-header&quot; id=&quot;headingFive&quot;&gt;
                                                                    &lt;h5 class=&quot;m-0&quot;&gt;
                                                                        &lt;a class=&quot;custom-accordion-title collapsed d-block py-1&quot;
                                                                            data-bs-toggle=&quot;collapse&quot; href=&quot;#collapseFive&quot;
                                                                            aria-expanded=&quot;false&quot; aria-controls=&quot;collapseFive&quot;&gt;
                                                                            Q. Can this theme work with Wordpress? &lt;i
                                                                                class=&quot;mdi mdi-chevron-down accordion-arrow&quot;&gt;&lt;/i&gt;
                                                                        &lt;/a&gt;
                                                                    &lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div id=&quot;collapseFive&quot; class=&quot;collapse&quot;
                                                                    aria-labelledby=&quot;headingFive&quot;
                                                                    data-bs-parent=&quot;#custom-accordion-one&quot;&gt;
                                                                    &lt;div class=&quot;card-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;card mb-0&quot;&gt;
                                                                &lt;div class=&quot;card-header&quot; id=&quot;headingSix&quot;&gt;
                                                                    &lt;h5 class=&quot;m-0&quot;&gt;
                                                                        &lt;a class=&quot;custom-accordion-title collapsed d-block py-1&quot;
                                                                            data-bs-toggle=&quot;collapse&quot; href=&quot;#collapseSix&quot;
                                                                            aria-expanded=&quot;false&quot; aria-controls=&quot;collapseSix&quot;&gt;
                                                                            Q. How do I get help with the theme? &lt;i
                                                                                class=&quot;mdi mdi-chevron-down accordion-arrow&quot;&gt;&lt;/i&gt;
                                                                        &lt;/a&gt;
                                                                    &lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div id=&quot;collapseSix&quot; class=&quot;collapse&quot; aria-labelledby=&quot;headingSix&quot;
                                                                    data-bs-parent=&quot;#custom-accordion-one&quot;&gt;
                                                                    &lt;div class=&quot;card-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;card mb-0&quot;&gt;
                                                                &lt;div class=&quot;card-header&quot; id=&quot;headingSeven&quot;&gt;
                                                                    &lt;h5 class=&quot;m-0&quot;&gt;
                                                                        &lt;a class=&quot;custom-accordion-title collapsed d-block py-1&quot;
                                                                            data-bs-toggle=&quot;collapse&quot; href=&quot;#collapseSeven&quot;
                                                                            aria-expanded=&quot;false&quot; aria-controls=&quot;collapseSeven&quot;&gt;
                                                                            Q. Will you regularly give updates of Hyper ? &lt;i
                                                                                class=&quot;mdi mdi-chevron-down accordion-arrow&quot;&gt;&lt;/i&gt;
                                                                        &lt;/a&gt;
                                                                    &lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div id=&quot;collapseSeven&quot; class=&quot;collapse&quot;
                                                                    aria-labelledby=&quot;headingSeven&quot;
                                                                    data-bs-parent=&quot;#custom-accordion-one&quot;&gt;
                                                                    &lt;div class=&quot;card-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Collapse</h4>
                    <p class="text-muted font-14 mb-3">
                        Bootstrap's collapse provides the way to toggle the visibility of any content or element.
                        Please read the official <a href="https://getbootstrap.com/docs/5.2/components/collapse/" target="_blank">Bootstrap</a>
                        documentation for a full list of options.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#collapse-preview" class="nav-link active" data-bs-toggle="tab" role="tab" aria-controls="nav-preview" aria-selected="true">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#collapse-code" class="nav-link" data-bs-toggle="tab" role="tab" aria-controls="nav-code" aria-selected="false">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->

                    <div class="tab-content">
                        <div class="tab-pane show active" id="collapse-preview">
                            <p>
                                <a class="btn btn-primary" data-bs-toggle="collapse"
                                   href="#collapseExample" aria-expanded="false"
                                   aria-controls="collapseExample">
                                    Link with href
                                </a>
                                <button class="btn btn-primary ms-1" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseExample"
                                        aria-expanded="false" aria-controls="collapseExample">
                                    Button with data-bs-target
                                </button>
                            </p>
                            <div class="collapse show" id="collapseExample">
                                <div class="card card-body mb-0">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life
                                    accusamus terry
                                    richardson ad squid. Nihil anim keffiyeh helvetica, craft beer
                                    labore wes
                                    anderson cred nesciunt sapiente ea proident.
                                </div>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="collapse-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;p&gt;
                                                            &lt;a class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;collapse&quot;
                                                                href=&quot;#collapseExample&quot; aria-expanded=&quot;false&quot;
                                                                aria-controls=&quot;collapseExample&quot;&gt;
                                                                Link with href
                                                            &lt;/a&gt;
                                                            &lt;button class=&quot;btn btn-primary ms-1&quot; type=&quot;button&quot;
                                                                data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseExample&quot;
                                                                aria-expanded=&quot;false&quot; aria-controls=&quot;collapseExample&quot;&gt;
                                                                Button with data-bs-target
                                                            &lt;/button&gt;
                                                        &lt;/p&gt;
                                                        &lt;div class=&quot;collapse show&quot; id=&quot;collapseExample&quot;&gt;
                                                            &lt;div class=&quot;card card-body mb-0&quot;&gt;
                                                                ...
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

    </div>
    <!-- end row-->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Collapse Horizontal</h4>
                    <p class="text-muted font-14 mb-3">The collapse plugin also supports horizontal collapsing. Add the <code>.collapse-horizontal</code> modifier class to transition the <code>width</code> instead of <code>height</code> and set a <code>width</code> on the immediate child element.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#collapse-horizontal-preview" class="nav-link active" data-bs-toggle="tab" role="tab" aria-controls="nav-preview" aria-selected="true">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#collapse-horizontal-code" class="nav-link" data-bs-toggle="tab" role="tab" aria-controls="nav-code" aria-selected="false">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->

                    <div class="tab-content">
                        <div class="tab-pane show active" id="collapse-horizontal-preview">
                            <p>
                                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample"
                                        aria-expanded="false" aria-controls="collapseWidthExample">
                                    Toggle width collapse
                                </button>
                            </p>
                            <div style="min-height: 120px;">
                                <div class="collapse collapse-horizontal" id="collapseWidthExample">
                                    <div class="card card-body mb-0" style="width: 300px;">
                                        This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane code" id="collapse-horizontal-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;p&gt;
                                                            &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseWidthExample&quot;
                                                                aria-expanded=&quot;false&quot; aria-controls=&quot;collapseWidthExample&quot;&gt;
                                                                Toggle width collapse
                                                            &lt;/button&gt;
                                                        &lt;/p&gt;
                                                        &lt;div style=&quot;min-height: 120px;&quot;&gt;
                                                            &lt;div class=&quot;collapse collapse-horizontal&quot; id=&quot;collapseWidthExample&quot;&gt;
                                                                &lt;div class=&quot;card card-body mb-0&quot; style=&quot;width: 300px;&quot;&gt;
                                                                    This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Multiple Targets</h4>
                    <p class="text-muted font-14 mb-3">
                        Multiple <code>&lt;button&gt;</code> or <code>&lt;a&gt;</code> can show and hide an element if
                        they each reference it with their <code>href</code> or <code>data-bs-target</code> attribute
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#multiple-targets-preview" class="nav-link active" data-bs-toggle="tab" role="tab" aria-controls="nav-preview" aria-selected="true">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#multiple-targets-code" class="nav-link" data-bs-toggle="tab" role="tab" aria-controls="nav-code" aria-selected="false">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->

                    <div class="tab-content">
                        <div class="tab-pane show active" id="multiple-targets-preview">
                            <p>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
                                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>
                                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
                            </p>
                            <div class="row">
                                <div class="col">
                                    <div class="collapse multi-collapse" id="multiCollapseExample1">
                                        <div class="card card-body mb-0">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="collapse multi-collapse" id="multiCollapseExample2">
                                        <div class="card card-body mb-0">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row-->
                        </div> <!-- end preview-->

                        <div class="tab-pane code" id="multiple-targets-code">
                            <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;p&gt;
                                                            &lt;a class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;collapse&quot; href=&quot;#multiCollapseExample1&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;multiCollapseExample1&quot;&gt;Toggle first element&lt;/a&gt;
                                                            &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#multiCollapseExample2&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;multiCollapseExample2&quot;&gt;Toggle second element&lt;/button&gt;
                                                            &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;.multi-collapse&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;multiCollapseExample1 multiCollapseExample2&quot;&gt;Toggle both elements&lt;/button&gt;
                                                        &lt;/p&gt;
                                                        &lt;div class=&quot;row&quot;&gt;
                                                            &lt;div class=&quot;col&quot;&gt;
                                                                &lt;div class=&quot;collapse multi-collapse&quot; id=&quot;multiCollapseExample1&quot;&gt;
                                                                    &lt;div class=&quot;card card-body mb-0&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;col&quot;&gt;
                                                                &lt;div class=&quot;collapse multi-collapse&quot; id=&quot;multiCollapseExample2&quot;&gt;
                                                                    &lt;div class=&quot;card card-body mb-0&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt; &lt;!-- end col --&gt;
                                                        &lt;/div&gt; &lt;!-- end row--&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row-->
</div>
