<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = Group::orderBy('created_at', 'DESC')->paginate(10);
        return view('groups.index', compact(['groups']));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::get(['id', 'name']);;
        return view('groups.create', compact(['users']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $group = new Group;

        $group->name = $request->input('name');
        $group->slug = $request->input('slug');
        $group->description = $request->input('description');
        $group->save();


        // Get the selected user IDs from the request
        $userIds = $request->input('user_ids', []);

        // Attach the users to the group using sync()
        $group->users()->sync($userIds);
        

        session()->flash('message', 'Group created successfully!');
        session()->flash('messageType', 'success');

        return redirect()->route('groups.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $group)
    {
        return view('groups.edit', compact(['group']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Group $group)
    {
        $group->name = $request->input('name');
        $group->slug = $request->input('slug');
        $group->description = $request->input('description');
        $group->update();

        session()->flash('message', 'Group Updated successfully!');
        session()->flash('messageType', 'info');

        return redirect()->route('groups.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        $group->delete();

        session()->flash('message', 'Group Deleted successfully!');
        session()->flash('messageType', 'danger');

        return back();

    }
}
