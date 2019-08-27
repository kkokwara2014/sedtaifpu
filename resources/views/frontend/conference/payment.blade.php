@extends('layout.app')

@section('content')
<section id="faq" class="section faq">
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <h3 class="section-title">Payment Details</h3>

                You can make payment in favor of School of Environmental and Design via the
                following ways :
                <br><br>
                <div class="row">
                    <div class="col-md-11">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a class="faq-toggle collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne"> Mode of Payment</a>
                                    </h4>
                                </div>

                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <h3>Mode of Payment</h3>

                                        <ol>
                                            <li>
                                                <strong>Bank Deposit</strong> <br>
                                                Teller payment in favor of “School of Environmental Design and
                                                Technology Conference," payable
                                                at Fidelity Bank, Akanu Ibiam Federal Polytechnic, Unwana.
                                            </li>
                                            <li>
                                                <strong>Electronic Transfer </strong> <br>
                                                Account Name : "School of Environmental Design and Technology
                                                Conference" <br>
                                                Account Number : 6060188024

                                            </li>
                                            <li>
                                                <strong>Electronic Transfer </strong> <br>
                                                Account Name : "School of Environmental Design and Technology
                                                Conference" <br>
                                                Account Number : 6060188024
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
                
                <b style="color:red">*</b> Please mention your name in the Remarks column while transferring money online.
            </div>

        </div>

    </div>
    <br>
    <div class="row">
        <div class="col-md-11">
               
        </div>
    </div>
</section>
@endsection