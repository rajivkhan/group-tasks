<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $statuses = Status::orderBy('created_at', 'DESC')->paginate(10);
        return view('statuses.index', compact(['statuses']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('statuses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $status = new Status;

        $status->name = $request->input('name');
        $status->description = $request->input('description');
        $status->save();

        session()->flash('message', 'status created successfully!');
        session()->flash('messageType', 'success');

        return redirect()->route('statuses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Status $status)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Status $status)
    {
        return view('statuses.edit', compact(['status']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Status $status)
    {
        $status->name = $request->input('name');
        $status->description = $request->input('description');
        $status->update();

        session()->flash('message', 'Status Updated successfully!');
        session()->flash('messageType', 'info');

        return redirect()->route('statuses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Status $status)
    {
        $status->delete();

        session()->flash('message', 'Status Deleted successfully!');
        session()->flash('messageType', 'danger');

        return back();
    }
}
