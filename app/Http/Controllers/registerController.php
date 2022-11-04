<?php

namespace App\Http\Controllers;

use App\Http\Requests\flagRequest;
use App\Http\Requests\registerRequest;
use App\Models\flag;
use App\Models\User;
use App\Models\winner;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    function store(registerRequest $request)
    {

        if (Auth::attempt(['email' => $request->username, 'password' => $request->flag])) {

            $request->session()->flash('user', 'success');
            return redirect()->route('flagcreate');
        } else {
            $flag = flag::firstorfail()->flag;
            $user = User::firstorfail()->email;
            if ($request->username == $user) {
                $request->session()->flash('owner', 'no');
                return redirect('/');
            } else if ($request->flag == $flag) {

                winner::create([
                    'name' => $request->username
                ]);
                $request->session()->flash('winner', 'success');
                return redirect('/');
            } else {
                $request->session()->flash('winner', 'failed');
                return redirect('/');
            }
        }
    }
    function flag()
    {
        $flag = flag::first();
        return view('flag', compact('flag'));
    }
    function storeflag(flagRequest $request)
    {
        winner::truncate();
        flag::truncate();
        flag::create([
            'flag' => $request->flag
        ]);

        auth()->logout();
        return redirect('/');
    }
}
