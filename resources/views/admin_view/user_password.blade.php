@extends('layout.admin.app')

@section('internal_css')    
  <style type="text/css">
  .error{
    color:red;
  }
</style>

@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Change Password</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Change Password</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Change Password</h3>
              </div>
              @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
              <!-- /.card-header -->
              <!-- form start -->
              <form id="user_form" action="{{url('password_update')}}" method="post">
               @csrf
                <input type="hidden" name="id" value="{{ auth()->user()->id}}">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Current password</label>
                    <input type="password" name="old_password" class="form-control" id="exampleInputEmail1" placeholder="Enter current password" >
                  </div>
              
                  
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">New Password</label>
                    <input type="password" name="new_password" class="form-control" id="exampleInputEmail1" placeholder="Enter new password">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control" id="exampleInputEmail1" placeholder="Enter Confirm Password" >
                  </div>
                  
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" id="add_user" class="btn btn-primary">update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
         
        </div>
      </div>
    </div>
  </div>
</section>
</div>
@endsection

@section('footer_script')

@endsection
