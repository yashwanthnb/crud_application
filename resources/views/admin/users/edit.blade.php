@extends('layouts.adminLayout.createAdmin')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Data</h1>
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Validation</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Users</h3>
            </div><br>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.users.index') }}"> Back</a>
            </div>

            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('admin.users.update',$user->id) }}" method="POST" >
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="{{ $user->name }}" class="form-control @error('name') is-invalid @enderror" placeholder="Name">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                      </div>
                    <div class="form-group">
                      <label>Email address</label>
                      <input type="text" name="email" value="{{ $user->email }}" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="text" name="password" value="{{ $user->password }}" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                      @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                        <lable>Male</lable>
                            <input type="radio" class="form-group @error('gender') is-invalid @enderror" name="gender" value="male"  @if($user->gender == 'Male') checked @endif>
                        <lable>Female</lable>
                            <input type="radio" class="form-group @error('gender') is-invalid @enderror" name="gender" value="Female"  @if($user->gender == 'Female') checked @endif>
                            @error('gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>domain:</strong><br>

                            <div class="checkbox">
                                <label><input type="checkbox" class="form-group @error('domain') is-invalid @enderror" value="developer" name="domain" @if($user->domain == 'developer') checked @endif>Developer</label>
                            </div>
                                <div class="checkbox">
                                <label><input type="checkbox" class="form-group @error('domain') is-invalid @enderror"  value="tester" name="domain"  @if($user->domain == 'tester') checked @endif>Tester</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" class="form-group @error('domain') is-invalid @enderror" value="editor" name="domain"  @if($user->domain == 'editor') checked @endif>editor</label>
                            </div>
                            @error('domain')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                        <strong>Intake:</strong>
                        <select name="intake">
                        <option value="summer" id='intake' name='intake' value="summer" @if($user->intake == 'summer') selected @endif>Summer</option>
                        <option value="winter" id='intake' name='intake' value="winter"  @if($user-> intake == 'winter') selected @endif >Winter</option>
                        <option value="fall" id='intake' name='intake' value="fall"  @if($user->intake == 'fall') selected @endif>Fall</option>
                        </select>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                        <strong>Image:</strong><br>

                        @if($user->image)
                        <img id="image" src="/images/{{ $user->image }}" width="300px">
                        @endif

                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" placeholder="image">
                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
            </form>

          </div>
          <!-- /.card -->
          </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>




@endsection
