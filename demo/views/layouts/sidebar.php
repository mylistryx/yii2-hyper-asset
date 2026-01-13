<?php
/**
 * @var $this View
 */

use yii\web\View;

?>
<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu">

    <!-- Brand Logo Light -->
    <a href="/" class="logo logo-light">
                    <span class="logo-lg">
                        <img src="/images/logo.png" alt="logo">
                    </span>
        <span class="logo-sm">
                        <img src="/images/logo-sm.png" alt="small logo">
                    </span>
    </a>

    <!-- Brand Logo Dark -->
    <a href="/" class="logo logo-dark">
                    <span class="logo-lg">
                        <img src="/images/logo-dark.png" alt="dark logo">
                    </span>
        <span class="logo-sm">
                        <img src="/images/logo-dark-sm.png" alt="small logo">
                    </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
        <i class="ri-checkbox-blank-circle-line align-middle"></i>
    </div>

    <!-- Full Sidebar Menu Close Button -->
    <div class="button-close-fullsidebar">
        <i class="ri-close-fill align-middle"></i>
    </div>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!-- Leftbar User -->
        <div class="leftbar-user">
            <a href="pages-profile.html">
                <img src="/images/users/avatar-1.jpg" alt="user-image" height="42" class="rounded-circle shadow-sm">
                <span class="leftbar-user-name mt-2">Dominic Keller</span>
            </a>
        </div>

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title">Navigation</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span class="badge bg-success float-end">5</span>
                    <span> Dashboards </span>
                </a>
                <div class="collapse" id="sidebarDashboards">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="/dashboard/analytics">Analytics</a>
                        </li>
                        <li>
                            <a href="/dashboard/ecommerce">Ecommerce</a>
                        </li>
                        <li>
                            <a href="/dashboard/projects">Projects</a>
                        </li>
                        <li>
                            <a href="/dashboard/crm">CRM</a>
                        </li>
                        <li>
                            <a href="/dashboard/wallet">E-Wallet</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-title">Apps</li>

            <li class="side-nav-item">
                <a href="/calendar" class="side-nav-link">
                    <i class="uil-calender"></i>
                    <span> Calendar </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="/chat" class="side-nav-link">
                    <i class="uil-comments-alt"></i>
                    <span> Chat </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarCrm" aria-expanded="false" aria-controls="sidebarCrm" class="side-nav-link">
                    <i class="uil uil-tachometer-fast"></i>
                    <span class="badge bg-danger text-white float-end">New</span>
                    <span> CRM </span>
                </a>
                <div class="collapse" id="sidebarCrm">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="/crm/projects">Projects</a>
                        </li>
                        <li>
                            <a href="/crm/orders-list">Orders List</a>
                        </li>
                        <li>
                            <a href="/crm/clients">Clients</a>
                        </li>
                        <li>
                            <a href="/crm/management">Management</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                    <i class="uil-store"></i>
                    <span> Ecommerce </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEcommerce">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="/ecommerce/products">Products</a>
                        </li>
                        <li>
                            <a href="/ecommerce/products-details">Products Details</a>
                        </li>
                        <li>
                            <a href="/ecommerce/orders">Orders</a>
                        </li>
                        <li>
                            <a href="/ecommerce/orders-details">Order Details</a>
                        </li>
                        <li>
                            <a href="/ecommerce/customers">Customers</a>
                        </li>
                        <li>
                            <a href="/ecommerce/shopping-cart">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="/ecommerce/checkout">Checkout</a>
                        </li>
                        <li>
                            <a href="/ecommerce/sellers">Sellers</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail" class="side-nav-link">
                    <i class="uil-envelope"></i>
                    <span> Email </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEmail">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="/email/inbox">Inbox</a>
                        </li>
                        <li>
                            <a href="/email/read">Read Email</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarProjects" aria-expanded="false" aria-controls="sidebarProjects" class="side-nav-link">
                    <i class="uil-briefcase"></i>
                    <span> Projects </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarProjects">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="/projects/list">List</a>
                        </li>
                        <li>
                            <a href="/projects/details">Details</a>
                        </li>
                        <li>
                            <a href="/projects/gantt">Gantt <span class="badge rounded-pill bg-light text-dark font-10 float-end">New</span></a>
                        </li>
                        <li>
                            <a href="/projects/add">Create Project</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a href="/social/feed" class="side-nav-link">
                    <i class="uil-rss"></i>
                    <span> Social Feed </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarTasks" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
                    <i class="uil-clipboard-alt"></i>
                    <span> Tasks </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarTasks">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="/tasks">List</a>
                        </li>
                        <li>
                            <a href="/tasks/details">Details</a>
                        </li>
                        <li>
                            <a href="/tasks/kanban">Kanban Board</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a href="/file-manager" class="side-nav-link">
                    <i class="uil-folder-plus"></i>
                    <span> File Manager </span>
                </a>
            </li>

            <li class="side-nav-title">Custom</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages" class="side-nav-link">
                    <i class="uil-copy-alt"></i>
                    <span> Pages </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPages">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="/pages/profile">Profile</a>
                        </li>
                        <li>
                            <a href="/pages/profile-2">Profile 2</a>
                        </li>
                        <li>
                            <a href="/pages/invoice">Invoice</a>
                        </li>
                        <li>
                            <a href="/pages/faq">FAQ</a>
                        </li>
                        <li>
                            <a href="/pages/pricing">Pricing</a>
                        </li>
                        <li>
                            <a href="/pages/maintenance">Maintenance</a>
                        </li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false" aria-controls="sidebarPagesAuth">
                                <span> Authentication </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarPagesAuth">
                                <ul class="side-nav-third-level">
                                    <li>
                                        <a href="/pages/authentication/login">Login</a>
                                    </li>
                                    <li>
                                        <a href="/pages/authentication/login-2">Login 2</a>
                                    </li>
                                    <li>
                                        <a href="/pages/authentication/register">Register</a>
                                    </li>
                                    <li>
                                        <a href="/pages/authentication/register-2">Register 2</a>
                                    </li>
                                    <li>
                                        <a href="/pages/authentication/logout">Logout</a>
                                    </li>
                                    <li>
                                        <a href="/pages/authentication/logout-2">Logout 2</a>
                                    </li>
                                    <li>
                                        <a href="/pages/authentication/recoverpw">Recover Password</a>
                                    </li>
                                    <li>
                                        <a href="/pages/authentication/recoverpw-2">Recover Password 2</a>
                                    </li>
                                    <li>
                                        <a href="/pages/authentication/lock-screen">Lock Screen</a>
                                    </li>
                                    <li>
                                        <a href="/pages/authentication/lock-screen-2">Lock Screen 2</a>
                                    </li>
                                    <li>
                                        <a href="/pages/authentication/confirm-mail">Confirm Mail</a>
                                    </li>
                                    <li>
                                        <a href="/pages/authentication/confirm-mail-2">Confirm Mail 2</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarPagesError" aria-expanded="false" aria-controls="sidebarPagesError">
                                <span> Error </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarPagesError">
                                <ul class="side-nav-third-level">
                                    <li>
                                        <a href="/pages-error/404">Error 404</a>
                                    </li>
                                    <li>
                                        <a href="/pages-error/404-alt">Error 404-alt</a>
                                    </li>
                                    <li>
                                        <a href="/pages-error/500">Error 500</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="/pages/starter">Starter Page</a>
                        </li>
                        <li>
                            <a href="/pages/preloader">With Preloader</a>
                        </li>
                        <li>
                            <a href="/pages/timeline">Timeline</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a href="/landing" target="_blank" class="side-nav-link">
                    <i class="uil-globe"></i>
                    <span class="badge bg-secondary text-light float-end">New</span>
                    <span> Landing </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarLayouts" aria-expanded="false" aria-controls="sidebarLayouts" class="side-nav-link">
                    <i class="uil-window"></i>
                    <span> Layouts </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarLayouts">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="layouts-horizontal.html" target="_blank">Horizontal</a>
                        </li>
                        <li>
                            <a href="layouts-detached.html" target="_blank">Detached</a>
                        </li>
                        <li>
                            <a href="layouts-full.html" target="_blank">Full View</a>
                        </li>
                        <li>
                            <a href="layouts-fullscreen.html" target="_blank">Fullscreen View</a>
                        </li>
                        <li>
                            <a href="layouts-hover.html" target="_blank">Hover Menu</a>
                        </li>
                        <li>
                            <a href="layouts-compact.html" target="_blank">Compact</a>
                        </li>
                        <li>
                            <a href="layouts-icon-view.html" target="_blank">Icon View</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-title">Components</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarBaseUI" aria-expanded="false" aria-controls="sidebarBaseUI" class="side-nav-link">
                    <i class="uil-box"></i>
                    <span> Base UI </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarBaseUI">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="/ui/accordions">Accordions & Collapse</a>
                        </li>
                        <li>
                            <a href="/ui/alerts">Alerts</a>
                        </li>
                        <li>
                            <a href="/ui/avatars">Avatars</a>
                        </li>
                        <li>
                            <a href="/ui/badges">Badges</a>
                        </li>
                        <li>
                            <a href="/ui/breadcrumb">Breadcrumb</a>
                        </li>
                        <li>
                            <a href="/ui/buttons">Buttons</a>
                        </li>
                        <li>
                            <a href="/ui/cards">Cards</a>
                        </li>
                        <li>
                            <a href="/ui/carousel">Carousel</a>
                        </li>
                        <li>
                            <a href="/ui/dropdowns">Dropdowns</a>
                        </li>
                        <li>
                            <a href="/ui/embed-video">Embed Video</a>
                        </li>
                        <li>
                            <a href="/ui/grid">Grid</a>
                        </li>
                        <li>
                            <a href="/ui/list-group">List Group</a>
                        </li>
                        <li>
                            <a href="/ui/modals">Modals</a>
                        </li>
                        <li>
                            <a href="/ui/notifications">Notifications</a>
                        </li>
                        <li>
                            <a href="/ui/offcanvas">Offcanvas</a>
                        </li>
                        <li>
                            <a href="/ui/placeholders">Placeholders</a>
                        </li>
                        <li>
                            <a href="/ui/pagination">Pagination</a>
                        </li>
                        <li>
                            <a href="/ui/popovers">Popovers</a>
                        </li>
                        <li>
                            <a href="/ui/progress">Progress</a>
                        </li>
                        <li>
                            <a href="/ui/ribbons">Ribbons</a>
                        </li>
                        <li>
                            <a href="/ui/spinners">Spinners</a>
                        </li>
                        <li>
                            <a href="/ui/tabs">Tabs</a>
                        </li>
                        <li>
                            <a href="/ui/tooltips">Tooltips</a>
                        </li>
                        <li>
                            <a href="/ui/typography">Typography</a>
                        </li>
                        <li>
                            <a href="/ui/utilities">Utilities</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarExtendedUI" aria-expanded="false" aria-controls="sidebarExtendedUI" class="side-nav-link">
                    <i class="uil-package"></i>
                    <span> Extended UI </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarExtendedUI">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="/extended/dragula">Dragula</a>
                        </li>
                        <li>
                            <a href="/extended/range-slider">Range Slider</a>
                        </li>
                        <li>
                            <a href="/extended/ratings">Ratings</a>
                        </li>
                        <li>
                            <a href="/extended/scrollbar">Scrollbar</a>
                        </li>
                        <li>
                            <a href="/extended/scrollspy">Scrollspy</a>
                        </li>
                        <li>
                            <a href="/extended/treeview">Treeview</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a href="/widgets" class="side-nav-link">
                    <i class="uil-layer-group"></i>
                    <span> Widgets </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarIcons" aria-expanded="false" aria-controls="sidebarIcons" class="side-nav-link">
                    <i class="uil-streering"></i>
                    <span> Icons </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarIcons">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="/icons/remix">Remix Icons</a>
                        </li>
                        <li>
                            <a href="/icons/mdi">Material Design</a>
                        </li>
                        <li>
                            <a href="/icons/unicons">Unicons</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarCharts" aria-expanded="false" aria-controls="sidebarCharts" class="side-nav-link">
                    <i class="uil-chart"></i>
                    <span> Charts </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarCharts">
                    <ul class="side-nav-second-level">
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarApexCharts" aria-expanded="false" aria-controls="sidebarApexCharts">
                                <span> Apex Charts </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarApexCharts">
                                <ul class="side-nav-third-level">
                                    <li>
                                        <a href="/apex-chart/area">Area</a>
                                    </li>
                                    <li>
                                        <a href="/apex-chart/bar">Bar</a>
                                    </li>
                                    <li>
                                        <a href="/apex-chart/boxplot">Boxplot</a>
                                    </li>
                                    <li>
                                        <a href="/apex-chart/bubble">Bubble</a>
                                    </li>
                                    <li>
                                        <a href="/apex-chart/candlestick">Candlestick</a>
                                    </li>
                                    <li>
                                        <a href="/apex-chart/column">Column</a>
                                    </li>
                                    <li>
                                        <a href="/apex-chart/heatmap">Heatmap</a>
                                    </li>
                                    <li>
                                        <a href="/apex-chart/line">Line</a>
                                    </li>
                                    <li>
                                        <a href="/apex-chart/mixed">Mixed</a>
                                    </li>
                                    <li>
                                        <a href="/apex-chart/pie">Pie</a>
                                    </li>
                                    <li>
                                        <a href="/apex-chart/polar-area">Polar Area</a>
                                    </li>
                                    <li>
                                        <a href="/apex-chart/radar">Radar</a>
                                    </li>
                                    <li>
                                        <a href="/apex-chart/radialbar">Radial Bar</a>
                                    </li>
                                    <li>
                                        <a href="/apex-chart/scatter">Scatter</a>
                                    </li>
                                    <li>
                                        <a href="/apex-chart/sparklines">Sparklines</a>
                                    </li>
                                    <li>
                                        <a href="/apex-chart/timeline">Timeline</a>
                                    </li>
                                    <li>
                                        <a href="/apex-chart/treemap">Treemap</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarChartJSCharts" aria-expanded="false" aria-controls="sidebarChartJSCharts">
                                <span> ChartJS </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarChartJSCharts">
                                <ul class="side-nav-third-level">
                                    <li>
                                        <a href="/chart-js/area">Area</a>
                                    </li>
                                    <li>
                                        <a href="/chart-js/bar">Bar</a>
                                    </li>
                                    <li>
                                        <a href="/chart-js/line">Line</a>
                                    </li>
                                    <li>
                                        <a href="/chart-js/other">Other</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="/brite-chart">Britecharts</a>
                        </li>
                        <li>
                            <a href="/sparkline-chart">Sparklines</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarForms" aria-expanded="false" aria-controls="sidebarForms" class="side-nav-link">
                    <i class="uil-document-layout-center"></i>
                    <span> Forms </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarForms">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="/form/elements">Basic Elements</a>
                        </li>
                        <li>
                            <a href="/form/advanced">Form Advanced</a>
                        </li>
                        <li>
                            <a href="/form/validation">Validation</a>
                        </li>
                        <li>
                            <a href="/form/wizard">Wizard</a>
                        </li>
                        <li>
                            <a href="/form/file-uploads">File Uploads</a>
                        </li>
                        <li>
                            <a href="/form/editors">Editors</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarTables" aria-expanded="false" aria-controls="sidebarTables" class="side-nav-link">
                    <i class="uil-table"></i>
                    <span> Tables </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarTables">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="/tables/basic">Basic Tables</a>
                        </li>
                        <li>
                            <a href="/tables/data">Data Tables</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarMaps" aria-expanded="false" aria-controls="sidebarMaps" class="side-nav-link">
                    <i class="uil-location-point"></i>
                    <span> Maps </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarMaps">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="/maps/google">Google Maps</a>
                        </li>
                        <li>
                            <a href="/maps/vector">Vector Maps</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarMultiLevel" aria-expanded="false" aria-controls="sidebarMultiLevel" class="side-nav-link">
                    <i class="uil-folder-plus"></i>
                    <span> Multi Level </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarMultiLevel">
                    <ul class="side-nav-second-level">
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarSecondLevel" aria-expanded="false" aria-controls="sidebarSecondLevel">
                                <span> Second Level </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarSecondLevel">
                                <ul class="side-nav-third-level">
                                    <li>
                                        <a href="javascript: void(0);">Item 1</a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);">Item 2</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarThirdLevel" aria-expanded="false" aria-controls="sidebarThirdLevel">
                                <span> Third Level </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarThirdLevel">
                                <ul class="side-nav-third-level">
                                    <li>
                                        <a href="javascript: void(0);">Item 1</a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#sidebarFourthLevel" aria-expanded="false" aria-controls="sidebarFourthLevel">
                                            <span> Item 2 </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarFourthLevel">
                                            <ul class="side-nav-forth-level">
                                                <li>
                                                    <a href="javascript: void(0);">Item 2.1</a>
                                                </li>
                                                <li>
                                                    <a href="javascript: void(0);">Item 2.2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>


            <!-- Help Box -->
            <div class="help-box text-white text-center">
                <a href="javascript: void(0);" class="float-end close-btn text-white">
                    <i class="mdi mdi-close"></i>
                </a>
                <img src="/images/svg/help-icon.svg" height="90" alt="Helper Icon Image"/>
                <h5 class="mt-3">Unlimited Access</h5>
                <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>
                <a href="javascript: void(0);" class="btn btn-secondary btn-sm">Upgrade</a>
            </div>
            <!-- end Help Box -->


        </ul>
        <!--- End Sidemenu -->

        <div class="clearfix"></div>
    </div>
</div>
<!-- ========== Left Sidebar End ========== -->