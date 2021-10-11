﻿@extends('layouts.main')
@section('container')

    <body class="blog">
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
            <h1>my <span>blog</span></h1>
            <span class="title-bg">posts</span>
        </section>
        <!-- Page Title Ends -->
        <!-- Main Content Starts -->
        <section class="main-content revealator-slideup revealator-once revealator-delay1">
            <div class="container">
                <!-- Articles Starts -->
                <div class="row">
                    <!-- Article Starts -->
                    <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                        <article class="post-container">
                            <div class="post-thumb">
                                <a href="/blog-post" class="d-block position-relative overflow-hidden">
                                    <img src="img/blog/blog-post-1.jpg" class="img-fluid" alt="Blog Post">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="entry-header">
                                    <h3><a href="/blog-post">How to Own Your Audience by Creating an Email List</a></h3>
                                </div>
                                <div class="entry-content open-sans-font">
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore...
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- Article Ends -->
                    <!-- Article Starts -->
                    <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                        <article class="post-container">
                            <div class="post-thumb">
                                <a href="/blog-post" class="d-block position-relative overflow-hidden">
                                    <img src="img/blog/blog-post-2.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="entry-header">
                                    <h3><a href="/blog-post">Top 10 Toolkits for Deep Learning in 2020</a></h3>
                                </div>
                                <div class="entry-content open-sans-font">
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore...
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- Article Ends -->
                    <!-- Article Starts -->
                    <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                        <article class="post-container">
                            <div class="post-thumb">
                                <a href="/blog-post" class="d-block position-relative overflow-hidden">
                                    <img src="img/blog/blog-post-3.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="entry-header">
                                    <h3><a href="/blog-post">Everything You Need to Know About Web Accessibility</a>
                                    </h3>
                                </div>
                                <div class="entry-content open-sans-font">
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore...
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- Article Ends -->
                    <!-- Article Starts -->
                    <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                        <article class="post-container">
                            <div class="post-thumb">
                                <a href="/blog-post" class="d-block position-relative overflow-hidden">
                                    <img src="img/blog/blog-post-4.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="entry-header">
                                    <h3><a href="/blog-post">How to Inject Humor & Comedy Into Your Brand</a></h3>
                                </div>
                                <div class="entry-content open-sans-font">
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore...
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- Article Ends -->
                    <!-- Article Starts -->
                    <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                        <article class="post-container">
                            <div class="post-thumb">
                                <a href="/blog-post" class="d-block position-relative overflow-hidden">
                                    <img src="img/blog/blog-post-5.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="entry-header">
                                    <h3><a href="/blog-post">Women in Web Design: How To Achieve Success</a></h3>
                                </div>
                                <div class="entry-content open-sans-font">
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore...
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- Article Ends -->
                    <!-- Article Starts -->
                    <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                        <article class="post-container">
                            <div class="post-thumb">
                                <a href="/blog-post" class="d-block position-relative overflow-hidden">
                                    <img src="img/blog/blog-post-6.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="entry-header">
                                    <h3><a href="/blog-post">Evergreen versus topical content: An overview</a></h3>
                                </div>
                                <div class="entry-content open-sans-font">
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore...
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- Article Ends -->
                    <!-- Pagination Starts -->
                    <div class="col-12 mt-4">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center mb-0">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Pagination Ends -->
                </div>
                <!-- Articles Ends -->
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
