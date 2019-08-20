
        <nav id="site-nav" class="navbar navbar-fixed-top navbar-custom">
            <div class="container">
                <div class="navbar-header">

                    <!-- logo -->
                    <div class="site-branding">
                        <a class="logo" href="index.html">

                            <!-- logo image  -->
                            <img src="{{asset('bootstrap_assets/assets/images/logo.png')}}" alt="Logo">
                            Conference 2015
                        </a>
                    </div>

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navbar-items" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div><!-- /.navbar-header -->

                <div class="collapse navbar-collapse" id="navbar-items">
                    <ul class="nav navbar-nav navbar-right">

                        <!-- navigation menu -->
                        <li class="active"><a href="{{ route('homepage') }}"><span class="ion-ios-home"
                                    style="font-size: 20px;"></span></a></li>
                        <li><a href="{{ route('aboutus') }}">About</a></li>
                        {{-- conference menu drop down --}}
                        <li><a href="#">Conference</a>
                            <ul>
                                <li><a href="#">Themes</a></li>
                                <li><a href="#">Committee Members</a></li>
                                <li><a href="#">Call for Papers</a></li>
                                <li><a href="#">Location</a></li>
                                <li><a href="#">Registration</a></li>
                            </ul>
                        </li>
                        {{-- downloads menu drop down --}}
                        <li><a href="#">Downloads</a>
                            <ul>
                                <li><a href="#">Abstract Template</a></li>
                                <li><a href="#">Full Paper Template</a></li>
                            </ul>
                        </li>
                        {{-- submit paper menu drop down --}}
                        <li><a href="#">Submit Paper</a>
                            <ul>
                                <li><a href="#">Abstract</a></li>
                                <li><a href="#">Full Paper</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('faq') }}">FAQ</a></li>
                    <li><a href="{{ route('contactus') }}">Contact</a></li>
                        
                        <!-- <li><a href="#">Sponsorship</a></li> -->
                        

                    </ul>
                </div>
            </div><!-- /.container -->
        </nav>

        <header id="site-header" class="site-header valign-center">
            <div class="intro">

                <h2>25 April, 2015 / Townhall California</h2>

                <h1>Freelancer Conference 2015</h1>

                <p>First &amp; Largest Conference</p>

                <a class="btn btn-white" data-scroll href="#registration">Register Now</a>

            </div>
        </header>