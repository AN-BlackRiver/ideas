<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function show(User $user)
    {
        $usersFollow = User::inRandomOrder()->limit(5)->get();
        $ideas = $user->ideas()->paginate(5);
        return view('user.show', compact('user', 'usersFollow', 'ideas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        if (auth()->user()->id != $user->id) {
            return abort(404);
        }

        $editing = true;
        $usersFollow = User::inRandomOrder()->limit(5)->get();
        $ideas = $user->ideas()->paginate(5);
        return view('user.show', compact('user', 'usersFollow', 'editing', 'ideas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

}
