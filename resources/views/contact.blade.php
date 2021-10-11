@extends('layouts.main')
@section('container')

    <body class="contact">
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
            <h1>get in <span>touch</span></h1>
            <span class="title-bg">contact</span>
        </section>
        <!-- Page Title Ends -->
        <!-- Main Content Starts -->
        <section class="main-content revealator-slideup revealator-once revealator-delay1">
            <div class="container">
                <div class="row">
                    <!-- Left Side Starts -->
                    <div class="col-12 col-lg-4">
                        <h3 class="text-uppercase custom-title mb-0 ft-wt-600 pb-3">Don't be shy !</h3>
                        <p class="open-sans-font mb-3">Feel free to get in touch with me. I am always open to discussing new
                            projects, creative ideas or opportunities to be part of your visions.</p>
                        <p class="open-sans-font custom-span-contact position-relative">
                            <i class="fa fa-envelope-open position-absolute"></i>
                            <span class="d-block">mail me</span>steve@mail.com
                        </p>
                        <p class="open-sans-font custom-span-contact position-relative">
                            <i class="fa fa-phone-square position-absolute"></i>
                            <span class="d-block">call me</span>+216 21 184 010
                        </p>
                        <ul class="social list-unstyled pt-1 mb-5">
                            <li class="facebook"><a title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="twitter"><a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="youtube"><a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                            </li>
                            <li class="dribbble"><a title="Dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!-- Left Side Ends -->
                    <!-- Contact Form Starts -->
                    <div class="col-12 col-lg-8">
                        <form class="contactform" method="post"
                            action="http://slimhamdi.net/tunis/dark/php/process-form.php">
                            <div class="contactform">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <input type="text" name="name" placeholder="YOUR NAME">
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <input type="email" name="email" placeholder="YOUR EMAIL">
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <input type="text" name="subject" placeholder="YOUR SUBJECT">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" placeholder="YOUR MESSAGE"></textarea>
                                        <button type="submit" class="btn btn-contact">Send Message</button>
                                    </div>
                                    <div class="col-12 form-message">
                                        <span class="output_message text-center font-weight-600 text-uppercase"></span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Contact Form Ends -->
                </div>
            </div>

        </section>
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
