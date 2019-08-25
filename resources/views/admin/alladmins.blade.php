@extends('admin.layouts.main')

@section('content')

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-10 connectedSortable">
            <a href="{{ route('admin.admins.create') }}" class="btn btn-success btn-sm"><span
                    class="fa fa-plus-circle"></span> Add New</a>
            <br><br>
            <div class="box">
                {{-- <div class="box-header">
                    <h3 class="box-title">Data Table With Full Features</h3>
                </div> --}}
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Sender</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Edit</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>Gecko</td>
                                <td>Firefox 1.5</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td>
                                    <a href="#"><span class="fa fa-pencil-square fa-2x text-primary"></span></a>
                                </td>
                                <td><a href="#"><span class="fa fa-trash fa-2x text-danger"></span></a></td>

                            </tr>
                            <tr>
                                <td>Gecko</td>
                                <td>Firefox 2.0</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td>
                                    <a href="#"><span class="fa fa-pencil-square fa-2x text-primary"></span></a>
                                </td>
                                <td><a href="#"><span class="fa fa-trash fa-2x text-danger"></span></a></td>

                            </tr>


                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Sender</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Edit</th>
                                <th>Remove</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </section>
    </div>

</section>
<!-- /.Left col -->

{{-- <section class="col-lg-5 connectedSortable">

</section> --}}
<!-- right col -->

{{-- </div> --}}

<!-- /.row (main row) -->

{{-- </section> --}}

<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection