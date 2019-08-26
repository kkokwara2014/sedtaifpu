@extends('layout.app')

@section('content')
<section id="speakers" class="section speakers">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">Committee Members</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    @forelse ($confcommittees->chunk(4) as $chunk)
                    @foreach ($chunk as $committee)
                    <div class="col-md-3">
                        <div class="speaker">
                            <figure>
                                <img alt="" class="img-responsive center-block"
                                    src="{{asset('bootstrap_assets/assets/images/speakers/speaker-1.jpg')}}">
                            </figure>
                            <h4>{{$committee->title.' '.$committee->name}}</h4>

                            <p><span class="ion-briefcase"></span> {{$committee->designation}}</p>
                            <p><span class="ion-location"></span> {{$committee->institution}}</p>
                            <p><span class="ion-mail"></span> {{$committee->phone}}</p>
                            <p>{{$committee->email}}</p>

                            {{-- <ul class="social-block">
                                <li><a href=""><i class="ion-social-twitter"></i></a></li>
                                <li><a href=""><i class="ion-social-facebook"></i></a></li>

                            </ul> --}}

                        </div><!-- /.speaker -->
                    </div><!-- /.col-md-3 -->
                    @endforeach
                    @empty
                        <p class="alert alert-info">No Committee Member has been added!</p>
                    @endforelse

                    {{-- <div class="col-md-3">
                        <div class="speaker">

                            <figure>
                                <img alt="" class="img-responsive center-block"
                                    src="{{asset('bootstrap_assets/assets/images/speakers/speaker-2.jpg')}}">
                    </figure>

                    <h4>Jhon Smith</h4>

                    <p>CEO of Peren</p>

                    <ul class="social-block">
                        <li><a href=""><i class="ion-social-twitter"></i></a></li>
                        <li><a href=""><i class="ion-social-facebook"></i></a></li>

                    </ul>

                </div><!-- /.speaker -->
            </div><!-- /.col-md-3 -->

            <div class="col-md-3">
                <div class="speaker">

                    <figure>
                        <img alt="" class="img-responsive center-block"
                            src="{{asset('bootstrap_assets/assets/images/speakers/speaker-3.jpg')}}">
                    </figure>

                    <h4>Jhon Smith</h4>

                    <p>CEO of Peren</p>

                    <ul class="social-block">
                        <li><a href=""><i class="ion-social-twitter"></i></a></li>
                        <li><a href=""><i class="ion-social-facebook"></i></a></li>

                    </ul>

                </div><!-- /.speaker -->
            </div><!-- /.col-md-3 -->
            <div class="col-md-3">
                <div class="speaker">

                    <figure>
                        <img alt="" class="img-responsive center-block"
                            src="{{asset('bootstrap_assets/assets/images/speakers/speaker-3.jpg')}}">
                    </figure>

                    <h4>Jhon Smith</h4>

                    <p>CEO of Peren</p>

                    <ul class="social-block">
                        <li><a href=""><i class="ion-social-twitter"></i></a></li>
                        <li><a href=""><i class="ion-social-facebook"></i></a></li>

                    </ul>

                </div><!-- /.speaker -->
            </div><!-- /.col-md-3 --> --}}
        </div><!-- /.row -->
    </div>
    </div>
    </div>
</section>
@endsection