<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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

    public function profile()
    {
        return view('profile');
    }

    public function delete($email)
    {
        $dlt = DB::table('users')->where('email', $email)->delete();
        if($dlt){
            echo "Your ID Is Deleted!";
        }else{

            echo "ID Deleting Failed!";
        }
    }

}
