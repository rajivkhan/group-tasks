<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Group;
use App\Models\Status;
use App\Models\GroupMember;
use Illuminate\Http\Request;

class GroupMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groupMembers = GroupMember::orderBy('created_at', 'DESC')->paginate(10);
        return view('group-members.index', compact(['groupMembers']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::get(['id', 'name']);
        $groups = Group::get(['id', 'name']);
        $statuses = Status::get(['id', 'name']);
        return view('group-members.create', compact(['users', 'groups', 'statuses']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $groupMember = new GroupMember;

        $groupMember->group_id = $request->input('group_id');
        $groupMember->user_id = $request->input('user_id');
        $groupMember->status_id = $request->input('status_id');
        $groupMember->save();

        session()->flash('message', 'Group Member created successfully!');
        session()->flash('messageType', 'success');

        return redirect()->route('group-members.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(GroupMember $groupMember)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GroupMember $groupMember)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GroupMember $groupMember)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GroupMember $groupMember)
    {
        //
    }
}
