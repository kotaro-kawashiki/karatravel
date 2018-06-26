<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $user = \Auth::user();
        $items = $user->items()->orderBy('created_at', 'desc')->paginate(10);
        
        $data = [
            'user'=> $user,
            'items' => $items,
            ];
        
        return view('welcome',$data);
    }
}
