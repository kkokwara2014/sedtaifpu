@extends('layout.app')

@section('content')
<section id="registration" class="section registration">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">Contact Us</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7 col-lg-7">
                <form action="#" id="registration-form">
                    <div class="row">
                        <div class="col-md-12" id="registration-msg" style="display:none;">
                            <div class="alert"></div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name" name="name" required>
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email Address" id="email"
                                    name="email" required>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" name="yourmessage" rows="5"
                                    placeholder="Your Message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="text-left">
                        <button type="submit" class="btn btn-black" id="registration-submit-btn">Send</button>
                    </div>
                </form>
            </div>

            <div class="col-md-5 col-lg-5">
               <p>You can reach us faster by getting in touch with</p> 
                <p><span class="ion-ios-email" style="font-size: 20px"></span> nceswcd2019@sedtaifpu.org</p>
            </div>
        </div>




    </div>
</section>

@endsection