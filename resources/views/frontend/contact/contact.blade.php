@extends('layout.app')

@section('content')
<section id="registration" class="section registration">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">Contact Us</h3>
            </div>
            <div class="col-md-7 col-lg-7">
                Kindly fill the form to send a messsage to us.
            </div>
            <br><br><br><br>
        </div>
        <div class="row">
            <div class="col-md-7">
                @include('messages.success')
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 col-lg-7">
                <form action="{{ route('submit.contactus') }}" method="POST">
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name" name="sender" autofocus>
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email Address"
                                    id="senderemail" name="senderemail">
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" name="themessage" rows="5"
                                    placeholder="Your Message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="text-left">
                        <button type="submit" class="btn btn-black">Send</button>
                    </div>
                </form>
            </div>

            <div class="col-md-5 col-lg-5">
                <p>You can reach us faster by getting in touch with</p>
                <div class="row">
                    <div class="col-md-1"><span class="ion-ios-email" style="font-size: 20px"></span></div>
                    <div class="col-md-11 col-lg-11" style="text-align: left">nceswcd2019@sedtaifpu.org</div>
                </div>
                <div class="row">
                    <div class="col-md-1"><span class="ion-ios-telephone" style="font-size: 20px"></span></div>
                    <div class="col-md-11 col-lg-11" style="text-align: left">+234-(0)-803-888-3919</div>
                </div>
                <div class="row">
                    <div class="col-md-1"><span class="ion-ios-location" style="font-size: 20px"></span></div>
                    <div class="col-md-11 col-lg-11" style="text-align: left">School of Environmental Design &amp;
                        Technology <br>
                        Akanu Ibiam Federal Polytechnic, Unwana. <br>
                        P. M. B. 1007, Afikpo, Ebonyi State.</div>
                </div>

            </div>
        </div>




    </div>
</section>

@endsection