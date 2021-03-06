@extends('admin.layouts.main')

@section('content')

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-6 connectedSortable">
            <a href="{{ route('admin.confcommittee.all') }}" class="btn btn-success btn-sm"><span
                    class="fa fa-eye"></span> All Committee Members</a>
            <br><br>
           
            <div class="box">
                {{-- <div class="box-header">
                    <h3 class="box-title">Data Table With Full Features</h3>
                </div> --}}
                <!-- /.box-header -->
                <div class="box-body">
                    <form action="{{ route('admin.confcommittee.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Title</label>
                            <select class="form-control" name="title">
                                <option selected="disabled">Select Title</option>
                                <option>Dr.</option>
                                <option>Engr.</option>
                                <option>EVS.</option>
                                <option>Prof.</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Full Name</label>
                            <input type="text" class="form-control" placeholder="Full Name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="">Designation</label>
                            <input type="text" class="form-control" placeholder="Designation" name="designation">
                        </div>
                        <div class="form-group">
                            <label for="">Institution</label>
                            <input type="text" class="form-control" placeholder="Institution" name="institution">
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="tel" class="form-control" placeholder="Phone Number" name="phone"
                                maxlength="11">
                        </div>
                        <div class="form-group">
                            <label for="">Email Address</label>
                            <input type="email" class="form-control" placeholder="Email Address" name="email">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Create</button>
                        <a href="{{ route('admin.confcommittee.all') }}" class="btn btn-danger btn-sm">Cancel</a>
                    </form>
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