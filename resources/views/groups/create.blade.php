@extends('layouts.main')

@section('styles')

@endsection

@section('content')

@include('layouts.messages')

<div class="row">
    <div class="col-md-12">
        <div class="card mb-0">
            <div class="card-header">
                <h4 class="card-title mb-0">Groups</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('users.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name:</label>
                                <input type="text" class="form-control" name="name" placeholder="write name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Slug:</label>
                                <input type="text" class="form-control" name="slug" placeholder="slug">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Description:</label>
                        <textarea class="form-control" name="name">
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
