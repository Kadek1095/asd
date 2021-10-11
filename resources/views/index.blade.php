@extends('layouts.main')
@section('container')

    <body class="home">
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
        <!-- Main Content Starts -->
        <section
            class="container-fluid main-container container-home p-0 revealator-slideup revealator-once revealator-delay1">
            <div class="color-block d-none d-lg-block"></div>
            <div class="row home-details-container align-items-center">
                <div class="col-lg-4 bg position-fixed d-none d-lg-block"></div>
                <div class="col-12 col-lg-8 offset-lg-4 home-details text-left text-sm-center text-lg-left">
                    <div>
                        <img src="img/indra.jpg" class="img-fluid main-img-mobile d-none d-sm-block d-lg-none"
                            alt="my picture" />
                        <h6 class="text-uppercase open-sans-font mb-0 d-block d-sm-none d-lg-block">hi there !</h6>
                        <h1 class="text-uppercase poppins-font"><span>I'm</span> {{ $name }}</h1>
                        <p class="open-sans-font">{{ $bio }}</p>
                        <a href="/about" class="btn btn-about">more about me</a>
                    </div>
                </div>
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
