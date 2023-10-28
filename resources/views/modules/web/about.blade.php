@extends('modules.web.master')
@section('content')
    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Section Start -->
        <div class="rs-breadcrumbs bg-1">
            <div class="container">
                <div class="content-part text-center">
                    <h1 class="breadcrumbs-title white-color mb-0">Nosotros</h1>
                </div>
            </div>
        </div>
        <!-- Breadcrumbs Section End -->

        <!-- About Section Start -->
        <div class="rs-about inner pt-100 lg-pt-92 md-pt-80 pb-100 md-pb-80">
            <div class="container">
                <div class="row y-middle mb-64 lg-mb-30 md-mb-0">
                    <div class="col-lg-6 md-mb-95">
                        <div class="image-part">
                            <img src="{{ asset('assets/images/about/inner/left-img.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 pl-50 md-pl-15 pr-50 lg-pr-15">
                        <div class="sec-title mb-25">
                            <div class="sub-title primary">Misión</div>
                            <h2 class="title mb-18">Elevamos el Trayecto del Moto Taxista</h2>
                            <div class="desc">Nuestra misión es impulsar la vida del Moto Taxista proporcionando unidades
                                GNV de última generación, con garantías que fortalecen su productividad y calidad en cada
                                servicio.</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- About Section End -->

        <!-- Counter Section Start -->
        <div class="rs-counter style1 modify bg21 pt-92 pb-100 md-pt-72 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-52 md-mb-29">
                    <div class="sub-title white-color">Visión</div>
                    <h2 class="title mb-0 white-color">Tu Camino al Éxito</h2>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 mb-30 m-auto text-center text-white fw-600">
                        <p class="desc">Aspiramos a ser el soporte esencial en el crecimiento personal y laboral del Moto Taxista. Ofrecemos
                        unidades GNV con un respaldo técnico excepcional y asesoramiento empresarial de primer nivel.
                        Juntos, avanzamos hacia un futuro lleno de éxitos y oportunidades.</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Section End -->

        <!-- Team Section Start -->
        <div class="rs-team inner pt-100 pb-60 md-pt-80 md-pb-40">
            <div class="container">
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true"
                    data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false"
                    data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
                    data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2"
                    data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1"
                    data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-lg-device="3"
                    data-md-device-nav="false" data-md-device-dots="false">
                    <div class="team-item">
                        <div class="team-image">
                            <img src="{{ asset('assets/images/team/1.jpg') }}" alt="Team Image">
                        </div>
                        <div class="text-bottom">
                            <h3 class="person-name"><a href="team-single.html">Mike Jason</a></h3>
                            <span class="designation">Business Advisor</span>
                            <div class="desc">Et harum quidem rerum facilis est et expedita disctinctio. Nam libero
                                tempore veriations.</div>
                            <div class="team-social">
                                <ul>
                                    <li><a href="team-single.html"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <div class="team-image">
                            <img src="{{ asset('assets/images/team/2.jpg') }}" alt="Team Image">
                        </div>
                        <div class="text-bottom">
                            <h3 class="person-name"><a href="team-single.html">Francis Ibikunle</a></h3>
                            <span class="designation">Senior Consultant</span>
                            <div class="desc">Et harum quidem rerum facilis est et expedita disctinctio. Nam libero
                                tempore veriations.</div>
                            <div class="team-social">
                                <ul>
                                    <li><a href="team-single.html"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <div class="team-image">
                            <img src="{{ asset('assets/images/team/3.jpg') }}" alt="Team Image">
                        </div>
                        <div class="text-bottom">
                            <h3 class="person-name"><a href="team-single.html">Ara Gates</a></h3>
                            <span class="designation">Finance Consultant</span>
                            <div class="desc">Et harum quidem rerum facilis est et expedita disctinctio. Nam libero
                                tempore veriations.</div>
                            <div class="team-social">
                                <ul>
                                    <li><a href="team-single.html"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <div class="team-image">
                            <img src="{{ asset('assets/images/team/4.jpg') }}" alt="Team Image">
                        </div>
                        <div class="text-bottom">
                            <h3 class="person-name"><a href="team-single.html">Claire Divas</a></h3>
                            <span class="designation">Business Advisor</span>
                            <div class="desc">Et harum quidem rerum facilis est et expedita disctinctio. Nam libero
                                tempore veriations.</div>
                            <div class="team-social">
                                <ul>
                                    <li><a href="team-single.html"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <div class="team-image">
                            <img src="{{ asset('assets/images/team/5.jpg') }}" alt="Team Image">
                        </div>
                        <div class="text-bottom">
                            <h3 class="person-name"><a href="team-single.html">Isabella Croline</a></h3>
                            <span class="designation">IT Consultant</span>
                            <div class="desc">Et harum quidem rerum facilis est et expedita disctinctio. Nam libero
                                tempore veriations.</div>
                            <div class="team-social">
                                <ul>
                                    <li><a href="team-single.html"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <div class="team-image">
                            <img src="{{ asset('assets/images/team/6.jpg') }}" alt="Team Image">
                        </div>
                        <div class="text-bottom">
                            <h3 class="person-name"><a href="team-single.html">Rafian Sagar</a></h3>
                            <span class="designation">Senior Consultant</span>
                            <div class="desc">Et harum quidem rerum facilis est et expedita disctinctio. Nam libero
                                tempore veriations.</div>
                            <div class="team-social">
                                <ul>
                                    <li><a href="team-single.html"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="team-single.html"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team Section End -->

    </div>
    <!-- Main content End -->
@endsection
