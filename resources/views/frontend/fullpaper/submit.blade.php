@extends('layout.app')

@section('content')
<section id="registration" class="section registration">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">Submit Full Paper</h3>

                Please fill the form below to submit your Conference full paper.
                <br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                @include('messages.success')
            </div>
        </div>

        <form action="{{ route('submit.paper') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                {{-- <div class="col-md-12" id="registration-msg" style="display:none;">
                    <div class="alert"></div>
                </div> --}}
                <div class="col-sm-7">

                    <div class="form-group">
                        <label for="">Lead Author's Name</label>
                        <input type="text" class="form-control" placeholder="Lead Author's Name" name="leadauthor">
                    </div>
                    <div class="form-group">
                        <label for="">Lead Author's Email Address</label>
                        <input type="email" class="form-control" placeholder="Lead Author's Email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="">Co-author(s)</label>
                        <input type="text" class="form-control" placeholder="Co-author(s)" name="coauthors">
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="tel" class="form-control" placeholder="Lead Author's Phone Number" name="phone"
                            maxlength="11">
                    </div>
                    <div class="form-group">
                        <label for="">Country</label>
                        <select class="form-control" name="country_id">
                            <option selected="disabled">Select Country</option>
                            @foreach ($countries as $country)
                            <option value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Paper Title</label>
                        <input type="text" class="form-control" placeholder="Paper Title" name="papertitle">
                    </div>

                    <div class="form-group">
                        <label for="">Upload Full Paper <i style="color: red;">(.doc or .docx only and not more than
                                2MB)</i></label>
                        <input type="file" name="filename">
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