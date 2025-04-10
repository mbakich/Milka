<?php

namespace App\Http\Controllers\Web\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\User\UserCreateRequest;
use App\Http\Requests\User\UserUpdateRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::latest()->paginate(10);

        return view('users.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
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
    public function store(UserCreateRequest $request)
    {
        User::create($request->validated());

        return redirect()->route('users.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $request, User $user)
    {
     //   $user->update($request->validated());

        $user->update( $request->only(['role_id', 'city', 'address','phoneNumber','idNumber',
            'country',
            'currentPoints',
            'redeemedPoints']) );

        return redirect()->route('users.index')
            ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')
            ->with('success','Product deleted successfully');
    }
}
