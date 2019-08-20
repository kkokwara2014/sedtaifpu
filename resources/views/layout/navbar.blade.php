<nav id="site-nav" class="navbar navbar-fixed-top navbar-custom">
    <div class="container">
        <div class="navbar-header">

            <!-- logo -->
            <div class="site-branding">
                <a class="logo" href="index.html">

                    <!-- logo image  -->
                    <img src="{{asset('bootstrap_assets/assets/images/logo.png')}}" alt="Logo">
                    NCESWCD2019
                </a>
            </div>

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-items"
                aria-expanded="false">
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
                        <li><a href="{{ route('conf.themes') }}">Themes</a></li>
                        <li><a href="{{ route('conf.committee') }}">Committee Members</a></li>
                        <li><a href="{{ route('conf.keyspeakers') }}">Key Speakers</a></li>
                        <li><a href="{{ route('conf.callforpaper') }}">Call for Papers</a></li>
                        <li><a href="{{ route('conf.location') }}">Location</a></li>
                        <li><a href="{{ route('conf.registration') }}">Registration</a></li>
                        <li><a href="{{ route('conf.schedule') }}">Schedule</a></li>
                        <li><a href="{{ route('conf.paymentdetails') }}">Payment Details</a></li>
                    </ul>
                </li>
                {{-- downloads menu drop down --}}
                <li><a href="#">Downloads</a>
                    <ul>
                        <li><a href="{{ route('download.abstract') }}">Abstract Template</a></li>
                        <li><a href="{{ route('download.fullpaper') }}">Full Paper Template</a></li>
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

        <h2>09 - 11 October, 2019 / Academic Auditorium, <br>
            Akanu Ibiam Federal Polytechnic, Unwana. <br>
            P.M.B 1007, Afikpo, Ebonyi State.
        </h2>

        <h1>National Conference SEDT-2019</h1>

        {{-- <p>First &amp; Largest Conference</p> --}}

        <a class="btn btn-white" href="#registration">Register Now</a>

    </div>
</header>