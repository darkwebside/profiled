@extends('_layouts.master')
@section('description')
    Shape your light.
@endsection
@section('body')
    <div class="main-container">

        <section class="cover imagebg height-90" data-overlay="3">
            <div class="background-image-holder">
                <img alt="background" src="assets/images/cabp2.jpg">
            </div>
            <div class="container pos-vertical-center">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h1 class="h1">Shape your light.</h1>


                    </div>
                </div>

            </div>
        </section>

        <section class="height-40">
            <div class="container pos-vertical-center">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div style="display: inline-block; text-align: left;">

                            <h2 class="h7">Driverless</h2>

                            <h2 class="h7">Endless</h2>

                            <h2>Magical</h2>
                        </div>
                    </div>
                </div>

            </div>

        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="card card-3">
                            <div class="card__image">
                                <img alt="Pic" src="assets/images/0984.jpg">
                            </div>
                            <div class="card__body boxed bg--white">
                                <div class="card__title">
                                    <h4>Special encapsulation features.</h4>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="card card-3">
                            <div class="card__image">
                                <img alt="Pic" src="assets/images/luz.jpg">
                            </div>
                            <div class="card__body boxed bg--white">
                                <div class="card__title">
                                    <h4>Wide range of configurations.</h4>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 col-sm-12">

                        <div class="card card-3">
                            <div class="card__image">
                                <img alt="Pic" src="assets/images/luz20.jpg">
                            </div>
                            <div class="card__body boxed bg--white">
                                <div class="card__title">
                                    <h4>Solderless connections.</h4>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 col-sm-12">

                        <div class="card card-3">
                            <div class="card__image">
                                <img alt="Pic" src="assets/images/p1.jpg">
                            </div>
                            <div class="card__body boxed bg--white">
                                <div class="card__title">
                                    <h4>Up to 300 meters.</h4>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </section>

        <section class="imagebg section--even parallax" data-overlay="4">
            <div class="background-image-holder">
                <img alt="image" src="assets/images/0833.jpg">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 text-center">
                        <h3>Discover our advantages</h3><br>
                        <a class="btn inner-link" href="assets/images/Profiled-Our Advantages.pdf" target="_blank">
                            <span class="btn__text">DOWNLOAD .PDF</span>
                        </a>
                    </div>
                </div>

            </div>

        </section>


        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="slider" data-arrows="false" data-paging="true" data-timing="">
                            <ul class="slides">
                                <li>
                                    <br>
                                    <img alt="pic" src="assets/images/table.png">
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </section>


        <section class="wide-grid masonry">

            <div class="masonry__container masonry--animate masonry--active">


                <div class="col-sm-6 masonry__item col-md-4">
                    <a href="assets/images/Profiled-Connection Solutions.pdf" target="_blank">
                        <div class="hover-element hover-element-1 hover--active" data-title-position="top,right">
                            <div class="hover-element__initial">
                                <img alt="Pic" src="assets/images/luzdef6.jpg">
                            </div>
                            <div class="hover-element__reveal" data-scrim-top="6">
                                <div class="boxed">
                                    <h4>Connection Solutions</h4>
                                    <span>
		                                            <em>Download .pdf</em>
		                                        </span>
                                </div>
                            </div>
                        </div>

                    </a>
                </div>
                <div class="col-sm-6 masonry__item col-md-4">
                    <a href="assets/images/Profiled-Best Seller Configuration.pdf" target="_blank">
                        <div class="hover-element hover-element-1 hover--active" data-title-position="top,right">
                            <div class="hover-element__initial">
                                <img alt="Pic" src="assets/images/luzdef2.jpg">
                            </div>
                            <div class="hover-element__reveal" data-scrim-top="6">
                                <div class="boxed">
                                    <h4>Best Seller Configuration</h4>
                                    <span>
		                                            <em>Download .pdf</em>
		                                        </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>


                <div class="col-sm-6 masonry__item col-md-4">
                    <a href="assets/images/Profiled-Installation Instructions.pdf" target="_blank">
                        <div class="hover-element hover-element-1 hover--active" data-title-position="top,right">
                            <div class="hover-element__initial">
                                <img alt="Pic" src="assets/images/inst.jpg">
                            </div>
                            <div class="hover-element__reveal" data-scrim-top="6">
                                <div class="boxed">
                                    <h4>Installation Instructions</h4>
                                    <span>
		                                            <em>Download .pdf</em>
		                                        </span>
                                </div>
                            </div>
                        </div>

                    </a>
                </div>
            </div>
        </section>
    </div>
@endsection
