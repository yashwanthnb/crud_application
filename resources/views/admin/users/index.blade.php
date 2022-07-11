@extends('layouts.adminLayout.admin')
@section('customcss')
<link href="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Registered Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                {{--  <div class="card-header">
                    <h2 class="text-center">Users List</h2>
                </div>  --}}
                <div class="card-body">
                    <table
                        id="users_list"
                        class="table table-striped"
                        data-toggle="table"
                        data-search="true"
                        /*data-page-size="1"*/
                        data-sort="true"
                        data-sort-name="id"
                        data-sort-order="desc"
                        data-side-pagination="server"
                        data-cookie="true"
                        data-cookie-id-table="saveId"
                        data-pagination="true"
                        data-url="{{route('admin.users.ajaxList')}}">
                        <thead>
                            <tr>
                                <th data-field="id" data-sortable="true" scope="col">id</th>
                                <th data-field="name" data-sortable="true" scope="col">Name</th>
                                <th data-field="email" data-sortable="true" scope="col">Email</th>
                                <th data-field="gender" data-sortable="true" scope="col">Gender</th>
                                <th data-field="domain" data-sortable="true" scope="col">Domain</th>
                                <th data-field="image" data-sortable="true" scope="col">Image</th>
                                <th data-field="intake" data-sortable="true" scope="col">Intake</th>

                                <th data-formatter="actionsFormatter" scope="col">Actions</th>

                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('customjs')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js?"></script>
<script src="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.js"></script>
    {{--  let downloadRouteUrl = "{{route('admin.push-notifications.downloadUploadedFile', ['push_notification' => ':push_notification'])}}";--}}
<script type="text/javascript">
    let viewRouteUrl="{{route('admin.users.show',['user'=>':user'])}}";

</script>
<script type="text/javascript">
    let editRouteUrl="{{route('admin.users.edit',['user'=>':user'])}}";

</script>
<script type="text/javascript">
    var deleteRouteUrl="{{route('admin.users.destroy',['user'=>':user'])}}";

</script>
<script type="text/javascript" src="{{asset('js/list.js')}}">

</script>
@endsection
