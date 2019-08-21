@extends('layout.app')

@section('content')
<section id="registration" class="section registration">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">Conference Registration</h3>

                Please fill the form below to inform us of your interest in the Conference.
                <br>
            </div>

        </div>

        <form action="#">
            <div class="row">
                {{-- <div class="col-md-12" id="registration-msg" style="display:none;">
                    <div class="alert"></div>
                </div> --}}
                <div class="col-sm-7">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="First Name" id="fname" name="fname"
                            required>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Last Name" id="lname" name="lname"
                            required>
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Phone" id="cell" name="cell" required>
                    </div>
                    <div class="form-group">
                            <input type="text" class="form-control" placeholder="Address" id="address" name="address"
                                required>
                        </div>
    
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Zip Code" id="zip" name="zip" required>
                        </div>
    
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

                {{-- <div class="col-sm-6">
                    
                </div> --}}
            </div>
            <div class="text-left">
                <button type="submit" class="btn btn-black" id="registration-submit-btn">Submit</button>
            </div>
        </form>
    </div>
</section>
    
@endsection