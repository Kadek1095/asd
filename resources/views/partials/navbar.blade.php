<header class="header" id="navbar-collapse-toggle">
    <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
        <li class="icon-box {{ $tittle === 'index' ? 'active' : '' }}">
            <i class="fa fa-home"></i>
            <a href="/">
                <h2>Home</h2>
            </a>
        </li>
        <li class="icon-box {{ $tittle === 'about' ? 'active' : '' }}">
            <i class="fa fa-user"></i>
            <a href="/about">
                <h2>About</h2>
            </a>
        </li>
        <li class="icon-box {{ $tittle === 'portfolio' ? 'active' : '' }}">
            <i class="fa fa-briefcase"></i>
            <a href="/portfolio">
                <h2>Portfolio</h2>
            </a>
        </li>
        <li class="icon-box {{ $tittle === 'contact' ? 'active' : '' }}">
            <i class="fa fa-envelope-open"></i>
            <a href="/contact">
                <h2>Contact</h2>
            </a>
        </li>
        <li class="icon-box {{ $tittle === 'blog' ? 'active' : '' }}">
            <i class="fa fa-comments"></i>
            <a href="/blog">
                <h2>Blog</h2>
            </a>
        </li>
    </ul>
    <nav role="navigation" class="d-block d-lg-none">
        <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul class="list-unstyled" id="menu">
                <li><a href="/index"><i class="fa fa-home"></i><span>Home</span></a></li>
                <li><a href="/about"><i class="fa fa-user"></i><span>About</span></a></li>
                <li><a href="/portfolio"><i class="fa fa-folder-open"></i><span>Portfolio</span></a></li>
                <li><a href="/contact"><i class="fa fa-envelope-open"></i><span>Contact</span></a></li>
                <li><a href="/blog"><i class="fa fa-comments"></i><span>Blog</span></a></li>
            </ul>
        </div>
    </nav>
    <!-- Mobile Menu Ends -->
</header>
