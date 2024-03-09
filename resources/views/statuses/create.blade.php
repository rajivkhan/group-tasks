@extends('layouts.main')

@section('content')
    @include('layouts.messages')

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-0">
                <div class="card-header">
                    <h4 class="card-title mb-0">Create Statuses</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('statuses.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                       
                            <div class="form-group">
                                <label>Name:</label>
                                <input type="text" class="form-control" name="name" placeholder="write name" required>
                            </div>                            
                            
                            <div class="form-group">
                                <label>Description:</label>
                                <textarea id="w3review" rows="5" class="form-control" name="description"></textarea>
                            </div>
                       
                        <div class="text-right">
                            <a href="{{ route('statuses.index') }}" class="btn btn-danger">Cancel</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
