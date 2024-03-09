@extends('layouts.main')

@section('styles')

@endsection

@section('content')



<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Group Members</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Group Members</li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{route('group-members.create')}}" class="btn add-btn"><i class="fa fa-plus"></i> Add Group Member</a>
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
                            <th>Group Name</th>
                            <th>Member Name</th>
                            <th>Status</th>
                            <th class="text-right no-sort">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($groupMembers as $groupMember)

                        <tr>

                            <td>{{ $groupMember->group->name }}</td>
                            <td>{{ $groupMember->user->name }}</td>
                            <td>{{ $groupMember->status->name }}</td>

                            <td class="text-right">
                                <div style="display: inline-block;">
                                    <a href="{{route('group-members.edit', ['group_member' => $groupMember->id])}}" class="btn btn-info btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
                                </div>
                                <div style="display: inline-block;">
                                    <form action="{{ route('group-members.destroy', ['group_member' => $groupMember->id]) }}" method="post" enctype="multipart-form/data">
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
