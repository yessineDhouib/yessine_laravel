<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    // 
    function login(Request $req){
        $user= User::where(['email'=>$req->email])->first();
        
       if(! $user || ! Hash::check($req->password,$user->password))
        {
            
            
            return "username or password is not matched";
          
        }else{
             $req->session()->put('user',$user);
            return redirect('/');
            
    } } 
}
