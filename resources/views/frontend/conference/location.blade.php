@extends('layout.app')

@section('content')
<section id="location" class="section location">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <h3 class="section-title">Conference Location</h3>
                <address>
                    <p>Eardenia<br> The Grand Hall<br> House # 08, Road #52, Street<br> Phone: +1159t3764<br>
                        Email: example@mail.com</p>
                </address>
            </div>
            <div class="col-sm-7">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96706.50013548559!2d-78.9870674333782!3d40.76030630398601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sbd!4v1436299406518"
                    width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>
@endsection