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
                <form action="{{ route('users.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h4 class="card-title">Personal details</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name:</label>
                                <input type="text" class="form-control" name="name" placeholder="write name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>User Name:</label>
                                <input type="text" class="form-control" name="username" placeholder="user name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" class="form-control" name="email" placeholder="mail" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone:</label>
                                <input type="text" class="form-control" name="mobile" placeholder="mobile number">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" class="form-control" name="password" placeholder="password">
                    </div>
                    <div class="form-group">
                        <label>Image:</label>
                        <input type="file" class="form-control" name="profile_image">
                    </div>

                    <div class="text-right">
                        <a href="{{route('users.index')}}" class="btn btn-danger">Cancel</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection
