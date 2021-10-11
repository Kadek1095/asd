@extends('layouts.main')
@section('container')

    <body class="portfolio">
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
            <h1>my <span>portfolio</span></h1>
            <span class="title-bg">works</span>
        </section>
        <!-- Page Title Ends -->
        <!-- Main Content Starts -->
        <section class="main-content text-center revealator-slideup revealator-once revealator-delay1">
            <div id="grid-gallery" class="container grid-gallery">
                <!-- Portfolio Grid Starts -->
                <section class="grid-wrap">
                    <ul class="row grid">
                        <!-- Portfolio Item Starts -->
                        <li>
                            <figure>
                                <img src="img/projects/project-1.jpg" alt="Portolio Image" />
                                <div><span>Image Project</span></div>
                            </figure>
                        </li>
                        <!-- Portfolio Item Ends -->
                        <!-- Portfolio Item Starts -->
                        <li>
                            <figure>
                                <img src="img/projects/project-2.jpg" alt="Portolio Image" />
                                <div><span>Youtube Project</span></div>
                            </figure>
                        </li>
                        <!-- Portfolio Item Ends -->
                        <!-- Portfolio Item Starts -->
                        <li>
                            <figure>
                                <img src="img/projects/project-3.jpg" alt="Portolio Image" />
                                <div><span>Slider Project</span></div>
                            </figure>
                        </li>
                        <!-- Portfolio Item Ends -->
                        <!-- Portfolio Item Starts -->
                        <li>
                            <figure>
                                <img src="img/projects/project-4.jpg" alt="Portolio Image" />
                                <div><span>Local Video Project</span></div>
                            </figure>
                        </li>
                        <!-- Portfolio Item Ends -->
                        <!-- Portfolio Item Starts -->
                        <li>
                            <figure>
                                <img src="img/projects/project-5.jpg" alt="Portolio Image" />
                                <div><span>Image Project</span></div>
                            </figure>
                        </li>
                        <!-- Portfolio Item Ends -->
                        <!-- Portfolio Item Starts -->
                        <li>
                            <figure>
                                <img src="img/projects/project-6.jpg" alt="Portolio Image" />
                                <div><span>Image Project</span></div>
                            </figure>
                        </li>
                        <!-- Portfolio Item Ends -->
                        <!-- Portfolio Item Starts -->
                        <li>
                            <figure>
                                <img src="img/projects/project-7.jpg" alt="Portolio Image" />
                                <div><span>Image Project</span></div>
                            </figure>
                        </li>
                        <!-- Portfolio Item Ends -->
                        <!-- Portfolio Item Starts -->
                        <li>
                            <figure>
                                <img src="img/projects/project-8.jpg" alt="Portolio Image" />
                                <div><span>Image Project</span></div>
                            </figure>
                        </li>
                        <!-- Portfolio Item Ends -->
                        <!-- Portfolio Item Starts -->
                        <li>
                            <figure>
                                <img src="img/projects/project-9.jpg" alt="Portolio Image" />
                                <div><span>Image Project</span></div>
                            </figure>
                        </li>
                        <!-- Portfolio Item Ends -->
                    </ul>
                </section>
                <!-- Portfolio Grid Ends -->
                <!-- Portfolio Details Starts -->
                <section class="slideshow">
                    <ul>
                        <!-- Portfolio Item Detail Starts -->
                        <li>
                            <figure>
                                <!-- Project Details Starts -->
                                <figcaption>
                                    <h3>Image Project</h3>
                                    <div class="row open-sans-font">
                                        <div class="col-12 col-sm-6 mb-2">
                                            <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project
                                            </span>: <span class="ft-wt-600 uppercase">Website</span>
                                        </div>
                                        <div class="col-12 col-sm-6 mb-2">
                                            <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>:
                                            <span class="ft-wt-600 uppercase">Envato</span>
                                        </div>
                                        <div class="col-12 col-sm-6 mb-2">
                                            <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>:
                                            <span class="ft-wt-600 uppercase">HTML, CSS, Javascript</span>
                                        </div>
                                        <div class="col-12 col-sm-6 mb-2">
                                            <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview
                                            </span>: <span class="ft-wt-600 uppercase"><a href="#"
                                                    target="_blank">www.envato.com</a></span>
                                        </div>
                                    </div>
                                </figcaption>
                                <!-- Project Details Ends -->
                                <!-- Main Project Content Starts -->
                                <img src="img/projects/project-1.jpg" alt="Portolio Image" />
                                <!-- Main Project Content Ends -->
                            </figure>
                        </li>
                        <!-- Portfolio Item Detail Ends -->
                        <!-- Portfolio Item Detail Starts -->
                        <li>
                            <figure>
                                <!-- Project Details Starts -->
                                <figcaption>
                                    <h3>Youtube Project</h3>
                                    <div class="row open-sans-font">
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project
                                            </span>: <span class="ft-wt-600 uppercase">Video</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>:
                                            <span class="ft-wt-600 uppercase">Videohive</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>:
                                            <span class="ft-wt-600 uppercase">Adobe After Effects</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview
                                            </span>: <span class="ft-wt-600 uppercase"><a href="#"
                                                    target="_blank">www.videohive.net</a></span>
                                        </div>
                                    </div>
                                </figcaption>
                                <!-- Project Details Ends -->
                                <!-- Main Project Content Starts -->
                                <div class="videocontainer">
                                    <iframe class="youtube-video"
                                        src="https://www.youtube.com/embed/7e90gBu4pas?enablejsapi=1&amp;version=3&amp;playerapiid=ytplayer"
                                        allowfullscreen></iframe>
                                </div>
                                <!-- Main Project Content Ends -->
                            </figure>
                        </li>
                        <!-- Portfolio Item Detail Ends -->
                        <!-- Portfolio Item Detail Starts -->
                        <li>
                            <figure>
                                <!-- Project Details Starts -->
                                <figcaption>
                                    <h3>Slider Project</h3>
                                    <div class="row open-sans-font">
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project
                                            </span>: <span class="ft-wt-600 uppercase">Website</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>:
                                            <span class="ft-wt-600 uppercase">Themeforest</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>:
                                            <span class="ft-wt-600 uppercase">HTML, CSS, Javascript</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview
                                            </span>: <span class="ft-wt-600 uppercase"><a href="#"
                                                    target="_blank">www.themeforest.net</a></span>
                                        </div>
                                    </div>
                                </figcaption>
                                <!-- Project Details Ends -->
                                <!-- Main Project Content Starts -->
                                <div id="slider" class="carousel slide portfolio-slider" data-ride="carousel"
                                    data-interval="false">
                                    <ol class="carousel-indicators">
                                        <li data-target="#slider" data-slide-to="0" class="active"></li>
                                        <li data-target="#slider" data-slide-to="1"></li>
                                        <li data-target="#slider" data-slide-to="2"></li>
                                    </ol>
                                    <!-- The slideshow -->
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="img/projects/project-3.jpg" alt="slide 1">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/projects/project-2.jpg" alt="slide 2">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/projects/project-1.jpg" alt="slide 3">
                                        </div>
                                    </div>
                                </div>
                                <!-- Main Project Content Ends -->
                            </figure>
                        </li>
                        <!-- Portfolio Item Detail Ends -->
                        <!-- Portfolio Item Detail Starts -->
                        <li>
                            <figure>
                                <!-- Project Details Starts -->
                                <figcaption>
                                    <h3>Local Video Project</h3>
                                    <div class="row open-sans-font">
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project
                                            </span>: <span class="ft-wt-600 uppercase">Video</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>:
                                            <span class="ft-wt-600 uppercase">Videohive</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>:
                                            <span class="ft-wt-600 uppercase">Adobe Premium</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview
                                            </span>: <span class="ft-wt-600 uppercase"><a href="#"
                                                    target="_blank">www.envato.com</a></span>
                                        </div>
                                    </div>
                                </figcaption>
                                <!-- Project Details Ends -->
                                <!-- Main Project Content Starts -->
                                <video id="video" class="responsive-video" controls poster="img/projects/project-1.jpg">
                                    <source src="img/projects/video.mp4" type="video/mp4">
                                </video>
                                <!-- Main Project Content Ends -->
                            </figure>
                        </li>
                        <!-- Portfolio Item Detail Ends -->
                        <!-- Portfolio Item Detail Starts -->
                        <li>
                            <figure>
                                <!-- Project Details Starts -->
                                <figcaption>
                                    <h3>Image Project</h3>
                                    <div class="row open-sans-font">
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project
                                            </span>: <span class="ft-wt-600 uppercase">Website</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>:
                                            <span class="ft-wt-600 uppercase">Envato</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>:
                                            <span class="ft-wt-600 uppercase">HTML, CSS, Javascript</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview
                                            </span>: <span class="ft-wt-600 uppercase"><a href="#"
                                                    target="_blank">www.envato.com</a></span>
                                        </div>
                                    </div>
                                </figcaption>
                                <!-- Project Details Ends -->
                                <!-- Main Project Content Starts -->
                                <img src="img/projects/project-5.jpg" alt="Portolio Image" />
                                <!-- Main Project Content Ends -->
                            </figure>
                        </li>
                        <!-- Portfolio Item Detail Ends -->
                        <!-- Portfolio Item Detail Starts -->
                        <li>
                            <figure>
                                <!-- Project Details Starts -->
                                <figcaption>
                                    <h3>Image Project</h3>
                                    <div class="row open-sans-font">
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project
                                            </span>: <span class="ft-wt-600 uppercase">Website</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>:
                                            <span class="ft-wt-600 uppercase">Envato</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>:
                                            <span class="ft-wt-600 uppercase">HTML, CSS, Javascript</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview
                                            </span>: <span class="ft-wt-600 uppercase"><a href="#"
                                                    target="_blank">www.envato.com</a></span>
                                        </div>
                                    </div>
                                </figcaption>
                                <!-- Project Details Ends -->
                                <!-- Main Project Content Starts -->
                                <img src="img/projects/project-6.jpg" alt="Portolio Image" />
                                <!-- Main Project Content Ends -->
                            </figure>
                        </li>
                        <!-- Portfolio Item Detail Ends -->
                        <!-- Portfolio Item Detail Starts -->
                        <li>
                            <figure>
                                <!-- Project Details Starts -->
                                <figcaption>
                                    <h3>Image Project</h3>
                                    <div class="row open-sans-font">
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project
                                            </span>: <span class="ft-wt-600 uppercase">Website</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>:
                                            <span class="ft-wt-600 uppercase">Envato</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>:
                                            <span class="ft-wt-600 uppercase">HTML, CSS, Javascript</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview
                                            </span>: <span class="ft-wt-600 uppercase"><a href="#"
                                                    target="_blank">www.envato.com</a></span>
                                        </div>
                                    </div>
                                </figcaption>
                                <!-- Project Details Ends -->
                                <!-- Main Project Content Starts -->
                                <img src="img/projects/project-7.jpg" alt="Portolio Image" />
                                <!-- Main Project Content Ends -->
                            </figure>
                        </li>
                        <!-- Portfolio Item Detail Ends -->
                        <!-- Portfolio Item Detail Starts -->
                        <li>
                            <figure>
                                <!-- Project Details Starts -->
                                <figcaption>
                                    <h3>Image Project</h3>
                                    <div class="row open-sans-font">
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project
                                            </span>: <span class="ft-wt-600 uppercase">Website</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>:
                                            <span class="ft-wt-600 uppercase">Envato</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>:
                                            <span class="ft-wt-600 uppercase">HTML, CSS, Javascript</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview
                                            </span>: <span class="ft-wt-600 uppercase"><a href="#"
                                                    target="_blank">www.envato.com</a></span>
                                        </div>
                                    </div>
                                </figcaption>
                                <!-- Project Details Ends -->
                                <!-- Main Project Content Starts -->
                                <img src="img/projects/project-8.jpg" alt="Portolio Image" />
                                <!-- Main Project Content Ends -->
                            </figure>
                        </li>
                        <!-- Portfolio Item Detail Ends -->
                        <!-- Portfolio Item Detail Starts -->
                        <li>
                            <figure>
                                <!-- Project Details Starts -->
                                <figcaption>
                                    <h3>Image Project</h3>
                                    <div class="row open-sans-font">
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project
                                            </span>: <span class="ft-wt-600 uppercase">Website</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>:
                                            <span class="ft-wt-600 uppercase">Envato</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>:
                                            <span class="ft-wt-600 uppercase">HTML, CSS, Javascript</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview
                                            </span>: <span class="ft-wt-600 uppercase"><a href="#"
                                                    target="_blank">www.envato.com</a></span>
                                        </div>
                                    </div>
                                </figcaption>
                                <!-- Project Details Ends -->
                                <!-- Main Project Content Starts -->
                                <img src="img/projects/project-9.jpg" alt="Portolio Image" />
                                <!-- Main Project Content Ends -->
                            </figure>
                        </li>
                        <!-- Portfolio Item Detail Ends -->
                    </ul>
                    <!-- Portfolio Navigation Starts -->
                    <nav>
                        <span class="icon nav-prev"><img src="img/projects/navigation/left-arrow.png"
                                alt="previous"></span>
                        <span class="icon nav-next"><img src="img/projects/navigation/right-arrow.png" alt="next"></span>
                        <span class="nav-close"><img src="img/projects/navigation/close-button.png" alt="close">
                        </span>
                    </nav>
                    <!-- Portfolio Navigation Ends -->
                </section>
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