<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function loginForm()
    {
        if (auth()->guest())
            return view('login');
        else
            return redirect('/');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = auth()->attempt([
            'username' => $request['username'],
            'password' => $request['password']
        ]);

        if ($user) {
            return redirect('/');
        } else {
            return redirect()->back()->with('Error', 'Invalid username or password.');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/login')->with('Success', 'You have been logged out.');
    }

    public function home()
    {
        $male = \App\Candidate::where('category', 'male')->orderBy('no')->get();
        $female = \App\Candidate::where('category', 'female')->orderBy('no')->get();

        if (auth()->user()->role == "admin")
            return view('home', ['maleCandidates' => $male, 'femaleCandidates' => $female]);
        else {
            return view('judge-home', [
                'male' => $male,
                'female' => $female,
                'criterias' => \App\Score::criterias
            ]);
        }
    }

    public function actions()
    {
        return view('actions');
    }
}
