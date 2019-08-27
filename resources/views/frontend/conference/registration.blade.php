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
                    <div class="form-group" {{$errors->has('natureofparti')?'has-error':''}}>
                        <label for="">Nature of Participation <b style="color: red">*</b></label>
                        <select class="form-control" name="natureofparti" >
                            <option selected="disabled">Select Nature of Participation</option>
                            <option value="1" {{ old('natureofparti') == 1 ? 'selected' : '' }}>Academician</option>
                            <option value="2"  {{ old('natureofparti') == 2 ? 'selected' : '' }}>Industrialist</option>
                            <option value="3"  {{ old('natureofparti') == 3 ? 'selected' : '' }}>Scientist</option>
                            <option value="4"  {{ old('natureofparti') == 4 ? 'selected' : '' }}>Student</option>
                            <option value="5"  {{ old('natureofparti') == 5 ? 'selected' : '' }}>Others</option>
                        </select>
                        {!! $errors->first('natureofparti','<p style="color:red">:message</p>') !!}

                    </div>
                    <div class="form-group" {{$errors->has('fullname')?'has-error':''}}>
                        <label for="">Name of Participant <b style="color: red">*</b></label>
                    <input type="text" class="form-control" placeholder="Full Name" name="fullname" value="{{ old('fullname') }}">
                        {!! $errors->first('fullname','<p style="color:red">:message</p>') !!}
                    </div>
                    <div class="form-group" {{$errors->has('gender')?'has-error':''}}>

                        <label for="">Gender <b style="color: red">*</b></label>

                        <select class="form-control" name="gender">
                            <option selected="disabled">Select Gender</option>
                            <option value="1" {{ old('gender') == 1 ? 'selected' : '' }}>Male</option>
                            <option value="2" {{ old('gender') == 2 ? 'selected' : '' }}>Female</option>
                        </select>
                        {!! $errors->first('gender','<p style="color:red">:message</p>') !!}


                    </div>

                    <div class="form-group">
                        <label for="">Designation</label>
                        <input type="text" class="form-control" placeholder="Your Designation" name="designation" value="{{ old('designation') }}">
                    </div>
                    <div class="form-group">
                        <label for="">Department</label>
                        <input type="text" class="form-control" placeholder="Your Department" name="department" value="{{ old('department') }}">
                    </div>
                    <div class="form-group">
                        <label for="">Organization</label>
                        <input type="text" class="form-control" placeholder="Your Organization" name="organization" value="{{ old('organization') }}">
                    </div>
                    <div class="form-group" {{$errors->has('address')?'has-error':''}}>
                        <label for="">Correspondence Address <b style="color: red">*</b></label>
                        <input type="text" class="form-control" placeholder="Your Correspondence Address"
                            name="address">
                        {!! $errors->first('address','<p style="color:red">:message</p>') !!}
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group" {{$errors->has('country_id')?'has-error':''}}>
                        <label for="">Country <b style="color: red">*</b></label>

                        <select class="form-control" name="country_id">
                            <option selected="disabled">Select Country</option>
                            @foreach ($countries as $country)
                            <option value="{{$country->id}}" @if(old('country_id') == $country->id) {{ 'selected' }} @endif>{{$country->name}}</option>
                            @endforeach
                        </select>
                        {!! $errors->first('country_id','<p style="color:red">:message</p>') !!}


                    </div>
                    <div class="form-group">
                        <label for="">Phone <b style="color: red">*</b></label>
                        <input type="tel" class="form-control" placeholder="Phone" name="phone" maxlength="11" value="{{ old('phone') }}">
                        {!! $errors->first('phone','<p style="color:red">:message</p>') !!}
                    </div>
                    <div class="form-group" {{$errors->has('email')?'has-error':''}}>
                        <label for="">Email Address <b style="color: red">*</b></label>
                        <input type="email" class="form-control" placeholder="Your Email Address" name="email" value="{{ old('email') }}">
                        {!! $errors->first('email','<p style="color:red">:message</p>') !!}
                    </div>
                    <div class="form-group" {{$errors->has('papertitle')?'has-error':''}}>
                        <label for="">Paper Title <b style="color: red">*</b></label>
                        <input type="text" class="form-control" placeholder="Paper Title" name="papertitle" value="{{ old('papertitle') }}">
                        {!! $errors->first('papertitle','<p style="color:red">:message</p>') !!}
                    </div>

                    <div class="form-group" {{$errors->has('participation')?'has-error':''}}>
                        <label for="">Participation <b style="color: red">*</b></label>

                        <select class="form-control" name="participation">
                            <option selected="disabled">Select Participation</option>
                            <option value="1" {{ old('participation') == 1 ? 'selected' : '' }}>Author</option>
                            <option value="2" {{ old('participation') == 2 ? 'selected' : '' }}>Delegate</option>
                        </select>
                        {!! $errors->first('participation','<p style="color:red">:message</p>') !!}


                    </div>
                    <div class="form-group" {{$errors->has('modeofpresent')?'has-error':''}}>
                        <label for="">Mode of Presentation <b style="color: red">*</b></label>

                        <select class="form-control" name="modeofpresent">
                            <option selected="disabled">Select Mode of Presentation</option>
                            <option value="1" {{ old('modeofpresent') == 1 ? 'selected' : '' }}>Oral</option>
                            <option value="2" {{ old('modeofpresent') == 2 ? 'selected' : '' }}>Microsoft Powerpoint</option>
                        </select>
                        {!! $errors->first('modeofpresent','<p style="color:red">:message</p>') !!}

                    </div>
                    <div class="form-group" {{$errors->has('accommodation')?'has-error':''}}>
                        <label for="">Accommodation Required? <b style="color: red">*</b></label>

                        <select class="form-control" name="accommodation">
                            <option selected="disabled">Do you need Accommodation?</option>
                            <option value="1" {{ old('accommodation') == 1 ? 'selected' : '' }}>Yes</option>
                            <option value="2" {{ old('accommodation') == 2 ? 'selected' : '' }}>No</option>
                        </select>
                        {!! $errors->first('accommodation','<p style="color:red">:message</p>') !!}

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