@extends('layout.app')

@section('content')
<section id="registration" class="section registration">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">Contact Us</h3>
            </div>
        </div>

        <form action="#" id="registration-form">
            <div class="row">
                <div class="col-md-12" id="registration-msg" style="display:none;">
                    <div class="alert"></div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name" name="name" required>
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Your Email Address" id="email"
                            name="email" required>
                    </div>

                    <div class="form-group">
                        <textarea name="yourmessage" cols="30" rows="10" placeholder="Your Message"></textarea>
                    </div>
                </div>

                <div class="col-sm-6">




                    <div class="form-group">
                        <select class="form-control" name="city" id="city" required>
                            <option readonly>City</option>
                            <option>City Name 1</option>
                            <option>City Name 2</option>
                            <option>City Name 3</option>
                            <option>City Name 4</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <select class="form-control" name="program" id="program" required>
                            <option readonly>Select Your Program</option>
                            <option>Program Name 1</option>
                            <option>Program Name 2</option>
                            <option>Program Name 3</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="text-center mt20">
                <button type="submit" class="btn btn-black" id="registration-submit-btn">Submit</button>
            </div>
        </form>
    </div>
</section>

@endsection