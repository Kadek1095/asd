@extends('layouts.main')
@section('container')

    <body class="about">
        <!-- Live Style Switcher Starts - demo only -->
        <div id="switcher" class="">
    <div class=" content-switcher">
            <h4>STYLE SWITCHER</h4>
            <ul>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('purple');" title="purple" class="color"><img
                            src="img/styleswitcher/purple.png" alt="purple" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('red');" title="red" class="color"><img
                            src="img/styleswitcher/red.png" alt="red" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('blueviolet');" title="blueviolet" class="color"><img
                            src="img/styleswitcher/blueviolet.png" alt="blueviolet" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('blue');" title="blue" class="color"><img
                            src="img/styleswitcher/blue.png" alt="blue" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('goldenrod');" title="goldenrod" class="color"><img
                            src="img/styleswitcher/goldenrod.png" alt="goldenrod" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('magenta');" title="magenta" class="color"><img
                            src="img/styleswitcher/magenta.png" alt="magenta" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('yellowgreen');" title="yellowgreen" class="color"><img
                            src="img/styleswitcher/yellowgreen.png" alt="yellowgreen" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('orange');" title="orange" class="color"><img
                            src="img/styleswitcher/orange.png" alt="orange" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('green');" title="green" class="color"><img
                            src="img/styleswitcher/green.png" alt="green" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('yellow');" title="yellow" class="color"><img
                            src="img/styleswitcher/yellow.png" alt="yellow" /></a>
                </li>
            </ul>

            <a href="https://themeforest.net/item/tunis-personal-portfolio/26761598?irgwc=1&amp;clickid=UBs0rDX6YxyJWfewUx0Mo3E1UkiwozXD10XATw0&amp;iradid=275988&amp;irpid=1327395&amp;iradtype=ONLINE_TRACKING_LINK&amp;irmptype=mediapartner&amp;mp_value1=&amp;utm_campaign=af_impact_radius_1327395&amp;utm_medium=affiliate&amp;utm_source=impact_radius"
                class="waves-effect waves-light font-weight-700 purchase"><i class="fa fa-shopping-cart"></i> Purchase</a>
            <div id="hideSwitcher">&times;</div>
        </div>
        </div>
        <div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div>
        <!-- Live Style Switcher Ends - demo only -->
        <!-- Header Starts -->

        <!-- Fixed Navigation Starts -->
        @include('partials.navbar');
        <!-- Fixed Navigation Ends -->
        <!-- Mobile Menu Starts -->

        <!-- Header Ends -->
        <!-- Page Title Starts -->
        <section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
            <h1>ABOUT <span>ME</span></h1>
            <span class="title-bg">Resume</span>
        </section>
        <!-- Page Title Ends -->
        <!-- Main Content Starts -->
        <section class="main-content revealator-slideup revealator-once revealator-delay1">
            <div class="container">
                <div class="row">
                    <!-- Personal Info Starts -->
                    <div class="col-12 col-lg-5 col-xl-6">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="text-uppercase custom-title mb-0 ft-wt-600">personal infos</h3>
                            </div>
                            <div class="col-12 d-block d-sm-none">
                                <img src="img/indra.jpg" class="img-fluid main-img-mobile" alt="my picture" />
                            </div>
                            <div class="col-6">
                                <ul class="about-list list-unstyled open-sans-font">
                                    <li> <span class="title">first name :</span> <span
                                            class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $firstnm }}</span>
                                    </li>
                                    <li> <span class="title">last name :</span> <span
                                            class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $lastnm }}</span>
                                    </li>
                                    <li> <span class="title">Age :</span> <span
                                            class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $age }}
                                            Years</span> </li>
                                    <li> <span class="title">Nationality :</span> <span
                                            class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $nationaly }}</span>
                                    </li>
                                    <li> <span class="title">Freelance :</span> <span
                                            class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $freelance }}</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="about-list list-unstyled open-sans-font">
                                    <li> <span class="title">Address :</span> <span
                                            class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $address }}</span>
                                    </li>
                                    <li> <span class="title">phone :</span> <span
                                            class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $phone }}</span>
                                    </li>
                                    <li> <span class="title">Email :</span> <span
                                            class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $email }}</span>
                                    </li>
                                    <li> <span class="title">Skype :</span> <span
                                            class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $skype }}</span>
                                    </li>
                                    <li> <span class="title">langages :</span> <span
                                            class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $languages }}</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 mt-3">
                                <a href="/about" class="btn btn-download">Download CV</a>
                            </div>
                        </div>
                    </div>
                    <!-- Personal Info Ends -->
                    <!-- Boxes Starts -->
                    <div class="col-12 col-lg-7 col-xl-6 mt-5 mt-lg-0">
                        <div class="row">
                            <div class="col-6">
                                <div class="box-stats with-margin">
                                    <h3 class="poppins-font position-relative">12</h3>
                                    <p class="open-sans-font m-0 position-relative text-uppercase">years of <span
                                            class="d-block">experience</span></p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="box-stats with-margin">
                                    <h3 class="poppins-font position-relative">97</h3>
                                    <p class="open-sans-font m-0 position-relative text-uppercase">completed <span
                                            class="d-block">projects</span></p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="box-stats">
                                    <h3 class="poppins-font position-relative">81</h3>
                                    <p class="open-sans-font m-0 position-relative text-uppercase">Happy<span
                                            class="d-block">customers</span></p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="box-stats">
                                    <h3 class="poppins-font position-relative">53</h3>
                                    <p class="open-sans-font m-0 position-relative text-uppercase">awards <span
                                            class="d-block">won</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Boxes Ends -->
                </div>
                <hr class="separator">
                <!-- Skills Starts -->
                <div class="row">
                    <div class="col-12">
                        <h3
                            class="text-uppercase pb-4 pb-sm-5 mb-3 mb-sm-0 text-left text-sm-center custom-title ft-wt-600">
                            My Skills</h3>
                    </div>
                    <div class="col-6 col-md-3 mb-3 mb-sm-5">
                        <div class="c100 p25">
                            <span>25%</span>
                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                        <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">html</h6>
                    </div>
                    <div class="col-6 col-md-3 mb-3 mb-sm-5">
                        <div class="c100 p89">
                            <span>89%</span>
                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                        <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">javascript</h6>
                    </div>
                    <div class="col-6 col-md-3 mb-3 mb-sm-5">
                        <div class="c100 p70">
                            <span>70%</span>
                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                        <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">css</h6>
                    </div>
                    <div class="col-6 col-md-3 mb-3 mb-sm-5">
                        <div class="c100 p66">
                            <span>66%</span>
                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                        <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">php</h6>
                    </div>
                    <div class="col-6 col-md-3 mb-3 mb-sm-5">
                        <div class="c100 p95">
                            <span>95%</span>
                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                        <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">wordpress</h6>
                    </div>
                    <div class="col-6 col-md-3 mb-3 mb-sm-5">
                        <div class="c100 p50">
                            <span>50%</span>
                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                        <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">jquery</h6>
                    </div>
                    <div class="col-6 col-md-3 mb-3 mb-sm-5">
                        <div class="c100 p65">
                            <span>65%</span>
                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                        <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">angular</h6>
                    </div>
                    <div class="col-6 col-md-3 mb-3 mb-sm-5">
                        <div class="c100 p45">
                            <span>45%</span>
                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                        <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">react</h6>
                    </div>
                </div>
                <!-- Skills Ends -->
                <hr class="separator mt-1">
                <!-- Experience & Education Starts -->
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-uppercase pb-5 mb-0 text-left text-sm-center custom-title ft-wt-600">Experience
                            <span>&</span> Education
                        </h3>
                    </div>
                    <div class="col-lg-6 m-15px-tb">
                        <div class="resume-box">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-briefcase"></i>
                                    </div>
                                    <span class="time open-sans-font text-uppercase">2018 - Present</span>
                                    <h5 class="poppins-font text-uppercase">Web Developer <span
                                            class="place open-sans-font">Envato</span></h5>
                                    <p class="open-sans-font">Lorem ipsum dolor sit amet, consectetur tempor incididunt ut
                                        labore adipisicing elit, </p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-briefcase"></i>
                                    </div>
                                    <span class="time open-sans-font text-uppercase">2013 - 2018</span>
                                    <h5 class="poppins-font text-uppercase">UI/UX Designer <span
                                            class="place open-sans-font">Themeforest</span></h5>
                                    <p class="open-sans-font">Lorem incididunt dolor sit amet, consectetur eiusmod dunt
                                        doldunt dol elit, tempor incididunt</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-briefcase"></i>
                                    </div>
                                    <span class="time open-sans-font text-uppercase">2005 - 2013</span>
                                    <h5 class="poppins-font text-uppercase">Consultant <span
                                            class="place open-sans-font">Videohive</span></h5>
                                    <p class="open-sans-font">Lorem ipsum dolor sit amet, tempor incididunt ut
                                        laboreconsectetur elit, sed do eiusmod tempor duntt</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 m-15px-tb">
                        <div class="resume-box">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <span class="time open-sans-font text-uppercase">2015</span>
                                    <h5 class="poppins-font text-uppercase">Engineering Degree <span
                                            class="place open-sans-font">Oxford University</span></h5>
                                    <p class="open-sans-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                        do tempor incididunt ut labore</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <span class="time open-sans-font text-uppercase">2012</span>
                                    <h5 class="poppins-font text-uppercase">Master Degree <span
                                            class="place open-sans-font">Kiev University</span></h5>
                                    <p class="open-sans-font">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod
                                        tempor incididunt ut adipisicing</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <span class="time open-sans-font text-uppercase">2009</span>
                                    <h5 class="poppins-font text-uppercase">Bachelor Degree <span
                                            class="place open-sans-font">Tunis High School</span></h5>
                                    <p class="open-sans-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                        do eiusmod tempor ut labore</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Experience & Education Ends -->
            </div>
        </section>
        <!-- Main Content Ends -->

        <!-- Template JS Files -->
        <script src="js/jquery-3.5.0.min.js"></script>
        <script src="js/styleswitcher.js"></script>
        <script src="js/preloader.min.js"></script>
        <script src="js/fm.revealator.jquery.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/masonry.pkgd.min.js"></script>
        <script src="js/classie.js"></script>
        <script src="js/cbpGridGallery.js"></script>
        <script src="js/jquery.hoverdir.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/custom.js"></script>

    </body>
@endsection
