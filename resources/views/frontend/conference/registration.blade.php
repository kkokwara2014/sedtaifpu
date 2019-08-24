@extends('layout.app')

@section('content')
<section id="registration" class="section registration">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">Conference Registration</h3>

                Please fill the form below to inform us of your interest in the Conference.
                <br><br>
            </div>

        </div>

        <form action="#">
            <div class="row">
                {{-- <div class="col-md-12" id="registration-msg" style="display:none;">
                    <div class="alert"></div>
                </div> --}}
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Nature of Participation</label>
                        <select class="form-control" name="natureofparti" required>
                            <option selected="disabled">Select Nature of Participation</option>
                            <option>Academician</option>
                            <option>Industrialist</option>
                            <option>Scientist</option>
                            <option>Student</option>
                            <option>Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Name of Participant</label>
                        <input type="text" class="form-control" placeholder="Full Name" name="fullname" required>
                    </div>
                    <div class="form-group">
                        <label for="">Gender</label>
                        <select class="form-control" name="gender" required>
                            <option selected="disabled">Select Gender</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Designation</label>
                        <input type="text" class="form-control" placeholder="Your Designation" name="designation"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="">Department</label>
                        <input type="text" class="form-control" placeholder="Your Department" name="department"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="">Organization</label>
                        <input type="text" class="form-control" placeholder="Your Organization" name="organization"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="">Correspondence Address</label>
                        <input type="text" class="form-control" placeholder="Your Correspondence Address" name="address"
                            required>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Country</label>
                        <select class="form-control" name="city" id="city" required>
                            <option selected="disabled">Select Country</option>
                            <option>Nigeria</option>
                            <option>USA</option>
                            <option>UK</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="tel" class="form-control" placeholder="Phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="">Email Address</label>
                        <input type="email" class="form-control" placeholder="Your Email Address" name="email" required>
                    </div>


                    <div class="form-group">
                        <label for="">Paper Title</label>
                        <input type="text" class="form-control" placeholder="Paper Title" name="papertitle" required>
                    </div>

                    <div class="form-group">
                        <label for="">Participation</label>
                        <select class="form-control" name="participation" required>
                            <option selected="disabled">Select Participation</option>
                            <option>Author</option>
                            <option>Delegate</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Mode of Presentation</label>
                        <select class="form-control" name="modeofpresent" required>
                            <option selected="disabled">Select Mode of Presentation</option>
                            <option>Oral</option>
                            <option>Microsoft Powerpoint</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Accommodation Required?</label>
                        <select class="form-control" name="accommodation" required>
                            <option selected="disabled">Do you need Accommodation?</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="text-left">
                <button type="submit" class="btn btn-black" id="registration-submit-btn">Submit Details</button>
            </div>
        </form>
    </div>
</section>

@endsection