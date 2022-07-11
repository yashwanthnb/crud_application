@extends('layouts.adminLayout.createAdmin')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create New User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Validation</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->

      <!--card-header -->
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Enter user data </h3>
            </div><br>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.users.index') }}"> Back</a>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('admin.users.store') }}" method="POST">
                @csrf

                <div class="card-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter name">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>

                  <div class="form-group">
                  <label>Email address</label>
                  <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email">
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input type="text" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                  @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Gender:</strong><br>

                    <input type="radio" class="form-group @error('gender') is-invalid @enderror" name="gender" id="gender"  value="Female">Female
                    <input type="radio" class="form-group @error('gender') is-invalid @enderror" name="gender" id="gender"  value="Male">Male
                    @error('gender')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">

                        <strong>domain:</strong><br>

                        <input type="checkbox" class="form-group @error('domain') is-invalid @enderror" name="domain" id='domain' value="tester">tester<br>
                        <input type="checkbox" class="form-group @error('domain') is-invalid @enderror" name="domain" id='domain' value="editor">editor<br>
                        <input type="checkbox" class="form-group @error('domain') is-invalid @enderror" name="domain" id='domain' value="developer">developer<br><br>
                        @error('domain')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <lable> Intake</lable>
                        <select name="intake">
                        <option value="summer" id='intake' name='intake' value="summer" >Summer</option>
                        <option value="winter" id='intake' name='intake' value="winter">Winter</option>
                        <option value="fall" id='intake' name='intake' value="fall">Fall</option>
                        </select>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Image:</strong><br>

                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" placeholder="image">
                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                </div>



              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>

    </section>
@endsection
