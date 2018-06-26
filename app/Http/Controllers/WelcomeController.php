<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function index()
    {
        
        if(Auth::check()){
        $user = \Auth::user();
        $month = date("m");
        $items = $user->items()->whereMonth('created_at','=',$month)->paginate(10000);
        
        $data = [
            'user'=> $user,
            'items' => $items,
            ];
        
        return view('welcome',$data);
        }
        else{
            return view('welcome');
        }
    }
}
