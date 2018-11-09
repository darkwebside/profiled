@extends('_layouts.master')
@section('description')
    Light years ahead.
@endsection
@section('body')
    <div class="main-container">
        <section class="cover imagebg height-90" data-overlay="4">
            <div class="background-image-holder">
                <img alt="background" src="assets/images/test5.jpg">
            </div>
            <div class="container pos-vertical-center">
                <div class="row">
                    <div class="col-sm-12 text-left">
                        <h1 class="h1">Light.<br>Years ahead.</h1>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <br>
                        <h1>Profiled, the light shapers</h1>
                        <br>
                        <p class="lead">We believe in a new way of making everything bright like nothing else did it before.
                            <br>A new world of linear lighting with endless possibilities is just in front of you.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="height-100 slider slider--animate cover cover-3 parallax" data-paging="true" data-timing="5000">
            <ul class="slides">
                <li class="imagebg" data-overlay="6">
                    <div class="background-image-holder">
                        <img alt="image" src="assets/images/0903.jpg">
                    </div>
                    <div class="container pos-absolute pos-bottom text-center-xs">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2>Technology</h2>
                                <p class="lead">Introducing a disruptive <br>technology for linear lighting.</p>
                                <a class="btn btn--sm" href="technology.html">
                                    <span class="btn__text">read more</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="imagebg" data-overlay="6">
                    <div class="background-image-holder">
                        <img alt="image" src="assets/images/ah1.jpg">
                    </div>
                    <div class="container pos-absolute pos-bottom text-center-xs">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2>Applications</h2>
                                <p class="lead">Discover a new world of applications.</p>
                                <a class="btn btn--sm" href="applications.html">
                                    <span class="btn__text">read more</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="imagebg" data-overlay="6">
                    <div class="background-image-holder">
                        <img alt="image" src="assets/images/0825.jpg">
                    </div>
                    <div class="container pos-absolute pos-bottom text-center-xs">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2>Products</h2>
                                <p class="lead">ODM your ideas.</p>
                                <a class="btn btn--sm" href="products.html">
                                    <span class="btn__text">read more</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="imagebg" data-overlay="6">
                    <div class="background-image-holder">
                        <img alt="image" src="assets/images/17.jpg">
                    </div>
                    <div class="container pos-absolute pos-bottom text-center-xs">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2>Projects</h2>
                                <p class="lead">Love stories.</p>
                                <a class="btn btn--sm" href="projects.html">
                                    <span class="btn__text">read more</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="imagebg" data-overlay="6">
                    <div class="background-image-holder">
                        <img alt="image" src="assets/images/aboutus.jpg">
                    </div>
                    <div class="container pos-absolute pos-bottom text-center-xs">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2>About Us</h2>
                                <a class="btn btn--sm" href="about_us.html">
                                    <span class="btn__text">read more</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </section>
@endsection

