<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    //
    public function index()
    {
        return view(
            'users.index',
            [
                'users' => DB::table('users')->orderBy('name')->paginate('40
            ')
            ]

        );
    }
    public function edit($id)
    {
        return view('users.edit', ['user' => User::findOrFail($id)]);
    }

    public function update(Request $id)
    {
        User::findOrFail($id->id)->update($id->all());
        return redirect()->route('user.index');
    }

    public function destroy($id){
        User::FindOrFail($id)->delete(); 
        return redirect()->route('user.index');
    }


    // public function destroy(Request $request): RedirectResponse
    // {
    //     $request->validateWithBag('userDeletion', [
    //         'password' => ['required', 'current_password'],
    //     ]);

    //     $user = $request->user();

    //     Auth::logout();

    //     $user->delete();

    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();

    //     return Redirect::to('/');
    // }

    // public function destroy(User $id)
    // {
    //     return $id->delete($id);
    // }
}
