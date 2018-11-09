<?php
/**
 * Created by PhpStorm.
 * User: mglopez
 * Date: 5/11/18
 * Time: 11:45
 */ ?>
<div class="nav-container">
    <nav>
        <div class="container nav-stack">
            <div class="row">
                <div class="nav-stack__upper">
                    <div class="col-xs-6">
                        <a href="index.html">
                            <img alt="logo_profiled" class="logo" src="assets/images/logo_high.png">
                        </a>
                    </div>
                    <div class="col-xs-6 text-right">
                        <a href="mailto:info@profiled.es" class="btn btn--sm btn--square">
		                            <span class="btn__text">
		                                        contact now </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="nav-bar">
                        <div class="nav-module menu-module left">
                            <ul class="menu">
                                <li>
                                    <a class="{{ $page->selected('index') }}" href="index.html" target="_self"> HOME </a>
                                </li>
                                <li>
                                    <a class="{{ $page->selected('technology') }}" href="technology.html" target="_self"> TECHNOLOGY</a>
                                </li>
                                <li>
                                    <a class="{{ $page->selected('applications') }}" href="applications.html" target="_self"> APPLICATIONS</a>
                                </li>
                                <li>
                                    <a class="{{ $page->selected('products') }}" href="products.html" target="_self"> PRODUCTS </a>
                                </li>
                                <li>
                                    <a class="{{ $page->selected('projects') }}" href="projects.html" target="_self"> PROJECTS </a>
                                </li>
                                <li>
                                    <a class="{{ $page->selected('about_us') }}" href="about_us.html" target="_self"> ABOUT US </a>
                                </li>
                            </ul>
                        </div>

                    </div>

                    <div class="nav-mobile-toggle visible-sm visible-xs">
                        <i class="icon-Align-Right icon icon--sm"></i>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>