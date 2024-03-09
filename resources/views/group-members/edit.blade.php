@extends('layouts.main')

@section('content')
    @include('layouts.messages')

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-0">
                <div class="card-header">
                    <h4 class="card-title mb-0">Edit Group</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('groups.update', ['group' => $group->id]) }}" method="post" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name:</label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name', $group->name) }}" placeholder="write name"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Slug:</label>
                                    <input type="text" class="form-control" name="slug" placeholder="slug" value="{{ old('slug', $group->slug) }}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea id="description" rows="5" class="form-control" name="description">{{ old('description', $group->description) }}</textarea>
                        </div>
                        <div class="text-right">
                            <a href="{{ route('groups.index') }}" class="btn btn-danger">Cancel</a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
