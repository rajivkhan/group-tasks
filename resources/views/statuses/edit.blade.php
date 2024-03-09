@extends('layouts.main')

@section('content')
    @include('layouts.messages')

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-0">
                <div class="card-header">
                    <h4 class="card-title mb-0">Edit Status</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('statuses.update', ['status' => $status->id]) }}" method="post" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf

                        <div class="form-status">
                            <label>Name:</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name', $status->name) }}" placeholder="write name"
                                required>
                        </div>                       

                        <div class="form-status">
                            <label for="description">Description:</label>
                            <textarea id="description" rows="5" class="form-control" name="description">{{ old('description', $status->description) }}</textarea>
                        </div>

                        <div class="text-right">
                            <a href="{{ route('statuses.index') }}" class="btn btn-danger">Cancel</a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
