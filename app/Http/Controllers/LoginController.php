<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function index(){
        return  view('login');
    }
    public function user(){
        $users = UserModel::all();
        return view('test',['users'=>$users]);
    }
    public function register(Request $request){

        $data = $request->validate([
            'role_id'=> 'nullable',
            'first_name' => ['required','min:4'],
            'middle_name' => 'nullable',
            'last_name' => 'required',
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => 'required',
            'status' => 'required'
        ],[
            'required' => 'The :attribute field is required.',
            'min' => 'The :attribute must be at least :min character.',
            'email' => ':attribute must be valid email address.',
            'email.unique' => ':attribute already exist.'
        ]);
        
        $newLogin = UserModel::create($data);
        return redirect(route('index'));
    }
}
