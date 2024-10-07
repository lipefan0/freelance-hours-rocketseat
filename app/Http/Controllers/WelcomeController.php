<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // $user = User::find(1);
        // User::query()->create([
        //    'name'=>'Felipe',
        //    'email'=>'felipe@gmail.com',
        //    'password'=>'123456',
        //]);

        // $user->email_verified_at = now();
        // $user->save();

        // $user->email_verified_at = now()->subMonths(10);
        // $user->save();

        //$user->update([
        //    'email_verified_at' => now()->subMonths(10)
        //]);
        
        // dd($user->email_verified_at->diffForHumans());

        // Auth::login($user);

        // Auth::logout();

        return view('welcome');
    }
}
