<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        var_dump($request->all());
        var_dump($request->path());
        die();
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'telegram'=>['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $usertype = '';
        if($request->path() == 'signup'){
            $usertype = 'crash';
        }else{
            $usertype= 'learner';
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'telegram'=>$request->telegram,
            'usertype'=>$usertype,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        if($request->path() == 'signup'){
            return redirect()->route('crash.take');
        }else{
            return redirect()->route('panel');
        }
    }
}
