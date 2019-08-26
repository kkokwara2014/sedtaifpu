@extends('layout.app')

@section('content')
<section id="registration" class="section registration">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">Conference Registration</h3>

                Please fill the form below to inform us of your interest in the Conference. Compulsory fields are
                marked with esterisk <b style="color: red">*</b>
                <br><br>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                @include('messages.success')
            </div>
        </div>
        <br>

        <form action="{{ route('conf.registration.store') }}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Nature of Participation <b style="color: red">*</b></label>
                        <select class="form-control" name="natureofparti">
                            <option selected="disabled">Select Nature of Participation</option>
                            <option>Academician</option>
                            <option>Industrialist</option>
                            <option>Scientist</option>
                            <option>Student</option>
                            <option>Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Name of Participant <b style="color: red">*</b></label>
                        <input type="text" class="form-control" placeholder="Full Name" name="fullname">
                    </div>
                    <div class="form-group">
                        <label for="">Gender <b style="color: red">*</b></label>
                        <select class="form-control" name="gender">
                            <option selected="disabled">Select Gender</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Designation</label>
                        <input type="text" class="form-control" placeholder="Your Designation" name="designation">
                    </div>
                    <div class="form-group">
                        <label for="">Department</label>
                        <input type="text" class="form-control" placeholder="Your Department" name="department">
                    </div>
                    <div class="form-group">
                        <label for="">Organization</label>
                        <input type="text" class="form-control" placeholder="Your Organization" name="organization">
                    </div>
                    <div class="form-group">
                        <label for="">Correspondence Address <b style="color: red">*</b></label>
                        <input type="text" class="form-control" placeholder="Your Correspondence Address"
                            name="address">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Country <b style="color: red">*</b></label>
                        <select class="form-control" name="country_id">
                            <option selected="disabled">Select Country</option>
                            @foreach ($countries as $country)
                            <option value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Phone <b style="color: red">*</b></label>
                        <input type="tel" class="form-control" placeholder="Phone" name="phone" maxlength="11">
                    </div>
                    <div class="form-group">
                        <label for="">Email Address <b style="color: red">*</b></label>
                        <input type="email" class="form-control" placeholder="Your Email Address" name="email">
                    </div>


                    <div class="form-group">
                        <label for="">Paper Title <b style="color: red">*</b></label>
                        <input type="text" class="form-control" placeholder="Paper Title" name="papertitle">
                    </div>

                    <div class="form-group">
                        <label for="">Participation <b style="color: red">*</b></label>
                        <select class="form-control" name="participation">
                            <option selected="disabled">Select Participation</option>
                            <option>Author</option>
                            <option>Delegate</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Mode of Presentation <b style="color: red">*</b></label>
                        <select class="form-control" name="modeofpresent">
                            <option selected="disabled">Select Mode of Presentation</option>
                            <option>Oral</option>
                            <option>Microsoft Powerpoint</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Accommodation Required? <b style="color: red">*</b></label>
                        <select class="form-control" name="accommodation">
                            <option selected="disabled">Do you need Accommodation?</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="text-left">
                <button type="submit" class="btn btn-black">Submit Details</button>
            </div>
        </form>
    </div>
</section>

@endsection