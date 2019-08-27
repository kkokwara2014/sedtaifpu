@extends('admin.layouts.main')

@section('content')

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
            <div class="box">
                {{-- <div class="box-header">
                    <h3 class="box-title">Data Table With Full Features</h3>
                </div> --}}
                <!-- /.box-header -->
                <div class="box-body">

                    @if (count($confRegistrations)!=0)
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Conf. Ref.</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Paper Title</th>
                                <th>View Details</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($confRegistrations as $confreg)
                            <tr>
                                <td>{{ $confreg->confreg_ref }}</td>
                                <td>{{ $confreg->fullname }}</td>
                                <td>{{ $confreg->phone }}</td>
                                <td>{{ $confreg->email }}</td>
                                <td>{{ $confreg->papertitle }}</td>
                                <td>
                                    <a href="#"><span class="fa fa-eye fa-2x text-primary"></span></a>
                                </td>
                                <td><a href="#"><span class="fa fa-trash fa-2x text-danger"></span></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Conf. Ref.</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Paper Title</th>
                                <th>View Details</th>
                                <th>Remove</th>
                            </tr>
                        </tfoot>
                    </table>

                    @else
                    <p class="alert alert-warning">No Registration yet!</p>
                    @endif
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