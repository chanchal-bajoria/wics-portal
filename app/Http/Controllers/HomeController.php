<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Socialite;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('loggedin')->except(['login', 'loginCallback', /*'leaderboard'*/]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function login()
    {
        return Socialite::driver('google')->redirect();
        #Auth::loginUsingId(1);
        #return redirect()->route('play');
    }

    public function loginCallback()
    {
        try
        {
            $user = Socialite::driver('google')->user();    
        }
        catch(Exception $e)
        {
            return redirect()->route('login');
        }
        //var_dump($user);
        if(empty($user) || empty($user->email))
            return redirect()->route('login');
        
        $dbUser = DB::table('users')->where('email', $user->email)->first();

        if(empty($dbUser))
        {
            Auth::loginUsingId(DB::table('users')->insertGetId([
                'email' => $user->email,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]));
        }
        else
            Auth::loginUsingId($dbUser->id);
        return redirect()->route('play');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('welcome');
    }

    public function leaderboard()
    {
        $users = DB::table('users')
            ->whereNotNull('name')
            ->orderBy('level', 'desc')
            ->orderBy('updated_at', 'asc')
            ->get();
        return view('leaderboard', ['users'=>$users]);
    }

    public function play()
    {
        $user = Auth::user();
        $q = "";
        if($user->level < count(config('app.qs')))
        {
            $q = config('app.qs')[$user->level];
        }
        return view('play', ['q' => $q]);
    }

    public function rules()
    {
        return view('rules');
    }

    public function attempt(Request $request)
    {
        $user = Auth::user();
        if($user->level >= count(config('app.as')))
            return redirect()->route('play');
        $a = config('app.as')[$user->level];
        $correct = true;
        $input = [];
        $request->validate([
            'answer' => 'required|string',
        ]);
        $answer = $request->input('answer');
        if($answer != $a) $correct = false;
        DB::table('attempts')->insert([
            'user_id' => $user->id,
            'level' => $user->level,
            'value' => $answer,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        if($correct)
        {
            $user = Auth::user();
            $user->level++;
            $user->save();
        }
        return redirect()->route('play');
    }

    public function nameassign()
    {
        return view('nameassign');
    }

    public function assignchosenname(Request $request)
    {
        $request->validate([
            'username' => 'required|string|between:3,25|unique:users,name',
        ]);
        $user = Auth::user();
        if(!empty($user->name)) die();
        $user->name = $request->input('username');
        $user->save();
        return redirect()->route('rules');
    }

    public function removeThese()
    {
        DB::table('users')
            ->whereIn('id', [1, 2, 3, 4])
            ->delete();
        echo "Done";
    }
}
