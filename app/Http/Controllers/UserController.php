<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'DESC')->paginate(10);
        return view('users.index', compact(['users']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User;

        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->mobile = $request->input('mobile');
        $user->profile_image = $request->input('profile_image');
        $user->email = $request->input('email');


        $password = $request->input('password'); // get the value of password field
        $user->password = Hash::make($password); // encrypt the password

        $user->save();


        session()->flash('message', 'User created successfully!');
        session()->flash('messageType', 'success');


        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {

        return view('users.edit', compact(['user']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->mobile = $request->input('mobile');
        $user->profile_image = $request->input('profile_image');
        $user->email = $request->input('email');


        $password = $request->input('password'); // get the value of password field
        $user->password = Hash::make($password); // encrypt the password

        $user->update();


        session()->flash('message', 'User updated successfully!');
        session()->flash('messageType', 'info');


        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        session()->flash('message', 'User Deleted successfully!');
        session()->flash('messageType', 'danger');

        return back();
    }
}
