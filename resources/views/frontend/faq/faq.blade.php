@extends('layout.app')

@section('content')
<section id="faq" class="section faq">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">Conference FAQs</h3>
                
                Below are the Frequently Asked Questions about this Conference.
                <br>
            </div>
           
        </div>
        <br>
        <div class="row">
            <div class="col-md-10">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a class="faq-toggle collapsed" role="button" data-toggle="collapse"
                                    data-parent="#accordion" href="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne"> What is the price of the ticket ?</a>
                            </h4>
                        </div>

                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingOne">
                            <div class="panel-body">
                                <h3>Hello</h3>
                                <p>Lorem Ipsum</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="faq-toggle collapsed" role="button" data-toggle="collapse"
                                    data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo"> What is included in my ticket ?</a>
                            </h4>
                        </div>

                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingTwo">
                            <div class="panel-body">Hello</div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="faq-toggle collapsed" role="button" data-toggle="collapse"
                                    data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree"> Office address ?</a>
                            </h4>
                        </div>

                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingThree">
                            <div class="panel-body">Hello</div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title">
                                <a class="faq-toggle collapsed" role="button" data-toggle="collapse"
                                    data-parent="#accordion" href="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour"> How should I dress ?</a>
                            </h4>
                        </div>

                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingFour">
                            <div class="panel-body">Hello</div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFive">
                            <h4 class="panel-title">
                                <a class="faq-toggle collapsed" role="button" data-toggle="collapse"
                                    data-parent="#accordion" href="#collapseFive" aria-expanded="false"
                                    aria-controls="collapseFive"> I have specific questions that are not
                                    addressed here. Who can help me ?</a>
                            </h4>
                        </div>

                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingFive">
                            <div class="panel-body">Hello</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection