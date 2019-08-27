@extends('layout.app')

@section('content')
<section id="faq" class="section faq">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h3 class="section-title">Conference Theme</h3>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a class="faq-toggle collapsed" role="button" data-toggle="collapse"
                                    data-parent="#accordion" href="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne"> SUSTAINABLE ECONOMIC GROWTH</a>
                            </h4>
                        </div>

                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingOne">
                            <div class="panel-body">
                                <h3>SUSTAINABLE ECONOMIC GROWTH</h3>

                                <ol>
                                    <li>
                                        Agriculture (Agricultural Productivity and Diversification, Technologies in
                                        Agriculture: Issues of Sustainability-Food Security)
                                    </li>

                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="faq-toggle collapsed" role="button" data-toggle="collapse"
                                    data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo"> Payment Category</a>
                            </h4>
                        </div>

                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingTwo">
                            <div class="panel-body">Payment Category</div>
                            <table class="table table-responsive table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Conference Fee</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Research Scholars </td>
                                        <td>&#8358;15,000.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Academics/Scientists </td>
                                        <td>&#8358;15,000.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Industrial Participants</td>
                                        <td>&#8358;20,000.00</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection