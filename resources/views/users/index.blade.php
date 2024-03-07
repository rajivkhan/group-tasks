@extends('layouts.main')

@section('styles')

@endsection

@section('content')



<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Users</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Users</li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{route('users.create')}}" class="btn add-btn"><i class="fa fa-plus"></i> Add User</a>
            </div>
        </div>
    </div>
    <!-- /Page Header -->
    @include('layouts.messages')

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table datatable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th class="text-nowrap">Join Date</th>
                            <th class="text-right no-sort">Action</th>

                            
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($users as $user)

                        <tr>

                            <td>
                                <h2 class="table-avatar">
                                    <a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                    <a href="#">{{ $user->name }} <span>Web Designer</span></a>
                                </h2>
                            </td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->mobile }}</td>
                            <td>1 Jan 2013</td>
                            <td class="text-right">
                                <div style="display: inline-block;">
                                    <a href="{{route('users.edit', ['user' => $user->id])}}" class="btn btn-info btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
                                </div>
                                <div style="display: inline-block;">
                                    <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post" enctype="multipart-form/data">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection
