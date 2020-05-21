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

    public function update(Request $req){

    $data=array();

      $data['name'] = $req->name;
      $data['email'] = $req->email;
     
            //  DB::table('users')
            //     ->where('email', $email)
            //     ->update($data);
                //return Redirect::to('/admin/profile');
        $update = DB::table('users')->where('email', $data['email'])->limit(1)->update([ 'name' => $data['name'], 'email' => $data['email']]); 
        
        if($update){
            echo "Profile Updated!";
        }else{
            echo "Updating Failed!";
        }

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
