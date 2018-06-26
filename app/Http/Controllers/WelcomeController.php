<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $user = \Auth::user();
        $month = date("m");
        $items = $user->items()->whereMonth('created_at','=',$month)->paginate(10000);
        
        $data = [
            'user'=> $user,
            'items' => $items,
            ];
        
        return view('welcome',$data);
    }
}
