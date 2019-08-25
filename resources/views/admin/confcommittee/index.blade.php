@extends('admin.layouts.main')

@section('content')

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
            <a href="{{ route('admin.confcommittee.create') }}" class="btn btn-success btn-sm"><span
                    class="fa fa-plus-circle"></span> Add New</a>
            <br><br>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    @include('messages.success')
                </div>
            </div>
            <div class="box">
                {{-- <div class="box-header">
                    <h3 class="box-title">Data Table With Full Features</h3>
                </div> --}}
                <!-- /.box-header -->
                <div class="box-body">

                    @if (count($confcommittees)!=0)
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Institution</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Edit</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($confcommittees as $confcom)
                            <tr>
                                <td>{{ $confcom->title .' '. $confcom->name }}</td>
                                <td>{{ $confcom->designation }}</td>
                                <td>{{ $confcom->institution }}</td>
                                <td>{{ $confcom->phone }}</td>
                                <td>{{ $confcom->email }}</td>

                                <td>
                                    <a href="#"><span class="fa fa-pencil-square fa-2x text-primary"></span></a>
                                </td>
                                <td><a href="#"><span class="fa fa-trash fa-2x text-danger"></span></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Institution</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Edit</th>
                                <th>Remove</th>
                            </tr>
                        </tfoot>
                    </table>

                    @else
                    <p class="alert alert-warning">No Conference Committee Member found!</p>
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