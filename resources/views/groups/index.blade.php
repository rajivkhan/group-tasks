@extends('layouts.main')

@section('styles')

@endsection

@section('content')



<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Groups</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Groups</li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{route('groups.create')}}" class="btn add-btn"><i class="fa fa-plus"></i> Add group</a>
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
                            <th>Slug</th>
                            <th>Description</th>
                            <th class="text-right no-sort">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($groups as $group)

                        <tr>

                            <td>{{ $group->name }}</td>
                            <td>{{ $group->slug }}</td>
                            <td>{{ $group->description }}</td>

                            <td class="text-right">
                                <div style="display: inline-block;">
                                    <a href="{{route('groups.edit', ['group' => $group->id])}}" class="btn btn-info btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
                                </div>
                                <div style="display: inline-block;">
                                    <form action="{{ route('groups.destroy', ['group' => $group->id]) }}" method="post" enctype="multipart-form/data">
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
