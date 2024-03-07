@extends('layouts.main')

@section('styles')

@endsection

@section('content')

@include('layouts.messages')

<div class="row">
    <div class="col-md-12">
        <div class="card mb-0">
            <div class="card-header">
                <h4 class="card-title mb-0">Users Form</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('users.update', ['user' => $user->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <h4 class="card-title">Personal details</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name:</label>
                                <input type="text" class="form-control" name="name" placeholder="write name" required value="{{ old('name', $user->name) }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>User Name:</label>
                                <input type="text" class="form-control" name="username" placeholder="user name" value="{{ old('username', $user->username) }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" class="form-control" name="email" placeholder="mail" required value="{{ old('email', $user->email) }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone:</label>
                                <input type="text" class="form-control" name="mobile" placeholder="mobile number" value="{{ old('mobile', $user->mobile) }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" class="form-control" name="password" placeholder="password" value="{{ old('password', $user->password) }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Image:</label>
                        <input type="file" class="form-control" name="profile_image">
                    </div>

                    <div class="text-right">
                        <a href="{{route('users.index')}}" class="btn btn-danger">Cancel</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection
