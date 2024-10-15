<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class SocialiteController extends Controller
{
<<<<<<< HEAD
    public function redirectTo()
    {
        return Socialite::driver('github')->redirect();
    }

    public function callback()
    {
        $githubUser = Socialite::driver('github')->user();

         
        $user = User::updateOrCreate([
            'github_id' => $githubUser->id,
        ], [
            'name' => !$githubUser->name ? $githubUser->login : $githubUser->name,
            'email' => !$githubUser->email ? $githubUser->name . mt_rand() . '@spotlightng.com' :$githubUser->email,
            'password'=> Hash::make(Str::password(16)),
            'last_github_login'=> now()
=======
    public function  redirectTo() 
    {
        return Socialite::driver('github')->redirect();    
    }

    public function  callback() 
    {
        $githubUser = Socialite::driver('github')->user();
 
        // dd($githubUser->getNickname());

        $user = User::updateOrCreate([
            'github_id' => $githubUser->id,
        ], [
            'name' => !$githubUser->name ? $githubUser->getNickname() : $githubUser->name,
            'email' => !$githubUser->email ? $githubUser->name . mt_rand() . '@spotlightng.com' : $githubUser->email,
            'password' => Hash::make(Str::password(16)),
            'last_github_login' => now()
>>>>>>> 385a9718e8fa6a553a860fb19627029edf07e905
        ]);
     
        Auth::login($user);
     
        return redirect('/home');
    }
}
