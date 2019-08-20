@extends('layout.app')

@section('content')
    
<section id="schedule" class="section schedule">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">Event Schedule</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="schedule-box">
                    <div class="time">
                        <time datetime="09:00">09:00 am</time> - <time datetime="22:00">10:00 am</time>
                    </div>
                    <h3>Welcome and intro</h3>
                    <p>Mustafizur Khan, SD Asia</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="schedule-box">
                    <div class="time">
                        <time datetime="10:00">10:00 am</time> - <time datetime="22:00">10:00 am</time>
                    </div>
                    <h3>Tips and share</h3>
                    <p>Mustafizur Khan, SD Asia</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="schedule-box">
                    <div class="time">
                        <time datetime="10:00">10:00 am</time> - <time datetime="22:00">10:00 am</time>
                    </div>
                    <h3>View from the top</h3>
                    <p>Mustafizur Khan, SD Asia</p>
                </div>
            </div>
        </div>
</section>
@endsection