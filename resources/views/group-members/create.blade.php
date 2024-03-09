@extends('layouts.main')

@section('content')
    @include('layouts.messages')

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-0">
                <div class="card-header">
                    <h4 class="card-title mb-0">Create Group Member</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('group-members.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user">Group Name:</label>
                                    <select name="group_id" id="user" class="form-control">
                                        <option>Choose one...</option>
                                        @foreach ($groups as $group)
                                            <option value="{{ $group->id }}">
                                                {{ $group->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user">User Name:</label>
                                    <select name="user_id" id="user" class="form-control">
                                        <option>Choose one...</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">
                                                {{ $user->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="user">Status:</label>
                            <select name="status_id" id="user" class="form-control">
                                <option>Choose one...</option>
                                @foreach ($statuses as $status)
                                    <option value="{{ $status->id }}">
                                        {{ $status->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="text-right">
                            <a href="{{ route('group-members.index') }}" class="btn btn-danger">Cancel</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
