<?php
namespace app\http\controllers;

use Auth;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

 class AdminController extends BaseController {

 	public function index()
 	{
 		  return view('layouts.app');
 	}

 	public function test()
 	{
 	    $users = DB::select('select * from registered_users where id = ?', [1]);

        return view('test1', ['users' => $users]);
    }

    public function login(Request $request)
    {
         // return $request->all();
      //  abort(403, 'Unauthorized action.');

        $rules = ['Email' => 'required|email', 'Password' => 'required'];
        $validator = Validator::make($request->all(), $rules);
        // $this->validate($request,$rules)

        $response = array();
        

        $credentials = array(
            'Email' => $request->input('Email'),
            'password' => $request->input('Password')
        );

         if(Auth::attempt($credentials,false))
        //if (Auth::check()) 
        {
            // $response['Status'] = 'LoggedIn';
            // $response['User'] = Auth::user();
            // return response()->json($response);
            echo "success";
        }

        else
        {
            // $response['Status'] = 'Failed';
            // $response['Errors'] = 'Invalid Email or Password';
            // return response()->json($response);
            echo "not autorised";
        }
    }

    public function addUser()
    {
        $data['page'] = "add_user";
        return view('add_user',$data);
    }

    public function addRest()
    {
        $data['page'] = "add_restaurant";
        return view('add_restaurant',$data);
    }

    public function manageRest()
    {
        $data['page'] = "manage_restaurant";
        return view('manage_restaurant',$data);   
    }
    
    public function dashboard()
    {
        $data['page'] = "dashboard";
        return view('dashboard',$data);      
    }

    public function newfunc()
    {
        //something
    }

 }