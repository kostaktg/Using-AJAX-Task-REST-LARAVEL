<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax())
         {
          $user = User::All();
        return response($user);

        }

        $users = User::All();
        return view('home', compact('users'));
    }




    public function delete()
    {
        
        $id  = $_POST['id'];


        $query = User::find($id);
        $query->delete();

        if($query){
            return response()->json([
                'status' => 'success']);
        }else{
            return response()->json([
                'status' => 'error']);

        }
    }





}
