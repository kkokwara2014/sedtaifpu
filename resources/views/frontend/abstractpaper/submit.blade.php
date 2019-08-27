@extends('layout.app')

@section('content')
<section id="registration" class="section registration">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">Submit Abstract</h3>

                Please fill the form below to submit your Conference Abstract.
                <br><br>
            </div>

        </div>

        <div class="row">
            <div class="col-md-7">
                @include('messages.success')
            </div>
        </div>

        <form action="{{ route('submit.abstract') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-sm-7">

                    <div class="form-group" {{$errors->has('leadauthor')?'has-error':''}}>
                        <label for="">Lead Author's Name</label>
                    <input type="text" class="form-control" placeholder="Lead Author's Name" name="leadauthor" value="{{old('leadauthor')}}">
                            {!! $errors->first('leadauthor','<p style="color:red">:message</p>') !!}
                    </div>
                    <div class="form-group" {{$errors->has('email')?'has-error':''}}>
                        <label for="">Lead Author's Email Address</label>
                        <input type="email" class="form-control" placeholder="Lead Author's Email" name="email" value="{{old('email')}}">
                            {!! $errors->first('email','<p style="color:red">:message</p>') !!}
                    </div>

                    <div class="form-group" {{$errors->has('phone')?'has-error':''}}>
                        <label for="">Phone</label>
                        <input type="tel" class="form-control" placeholder="Lead Author's Phone Number" name="phone"
                    maxlength="11" value="{{old('phone')}}">
                            {!! $errors->first('phone','<p style="color:red">:message</p>') !!}
                    </div>
                    <div class="form-group" {{$errors->has('country_id')?'has-error':''}}>
                        <label for="">Country</label>
                        <select class="form-control" name="country_id">
                            <option selected="disabled">Select Country</option>
                            @foreach ($countries as $country)
                            <option value="{{$country->id}}" @if(old('country_id') == $country->id) {{ 'selected' }} @endif>{{$country->name}}</option>
                            @endforeach
                        </select>
                        {!! $errors->first('country_id','<p style="color:red">:message</p>') !!}
                    </div>

                    <div class="form-group" {{$errors->has('papertitle')?'has-error':''}}>
                        <label for="">Paper Title</label>
                    <input type="text" class="form-control" placeholder="Paper Title" name="papertitle" value="{{old('papertitle')}}">
                        {!! $errors->first('papertitle','<p style="color:red">:message</p>') !!}
                    </div>
                    <div class="form-group" {{$errors->has('abstract')?'has-error':''}}>
                        <label for="">Abstract</label>
                    <textarea class="form-control" name="abstract" rows="5">{{old('abstract')}}</textarea>
                        {!! $errors->first('abstract','<p style="color:red">:message</p>') !!}
                    </div>

                    <div class="form-group" {{$errors->has('filename')?'has-error':''}}>
                        <label for="">Upload Abstract <i style="color: red;">(.doc or .docx only and not more than
                                2MB)</i></label>
                        <input type="file" name="filename">
                        {!! $errors->first('filename','<p style="color:red">:message</p>') !!}
                    </div>
                </div>


            </div>
            <div class="text-left">
                <button type="submit" class="btn btn-black">Submit</button>
            </div>
        </form>
    </div>
</section>

@endsection