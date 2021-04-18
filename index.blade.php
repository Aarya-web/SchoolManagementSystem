    @extends('backend.pages.layout.hf')

@section('content')

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Notice Which You Searching For</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Class</th>
                  <th>Roll.no</th>
                  <th>Address</th>
                  <th>Phone</th>
                  <th>ParentName</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @isset($student)
                    @foreach ($student as $gam)
                    <tr>
                        <td> {{ $gam->id }} </td>
                        <td> {{ $gam->name }} </td>
                        <td> {{ $gam->class }} </td>
                        <td> {{ $gam->rollnumber }} </td>
                        <td> {{ $gam->address }} </td>
                        <td> {{ $gam->phone }} </td>
                        <td> {{ $gam->fathersname }} </td>
                        <td> {{ $gam->email }} </td>
                        <td> {{ $gam->status }} </td>
                        <td><img src="{{ asset( $gam->image ) }}" target="_blank" rel="noopener noreferrer" width="40px"></td>
                        <td>
                            <div class="form-button-action">
                                <a href="{{ route('student.edit', $gam->id) }}" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                    <i class="fa fa-edit" style="color: white"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    @endisset
                </tbody>
                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Roll.no</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>ParentName</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>

@endsection
