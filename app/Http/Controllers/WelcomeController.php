<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;

class WelcomeController extends Controller
{
    public function index()
    {
        
        if(Auth::check()){
        $user = \Auth::user();
        $month = date("m");
        $items = $user->items()->whereMonth('created_at','=',$month)->paginate(10000);
        
        
        
        
        //////////////////////////////////////////////
        $a = ['genre'=>'生活費','kinngaku'=>0];
        $b = ['genre'=>'交際費','kinngaku'=>0];
        $c = ['genre'=>'食費','kinngaku'=>0];
        
        foreach($items as $item){
            if($item->genre == '生活費'){
                $a['kinngaku'] +=$item->kinngaku;
            }
            elseif($item->genre == '交際費'){
                $b['kinngaku'] += $item->kinngaku;
            }
            else{
                $c['kinngaku'] += $item->kinngaku;
            }
        }
        
        
        $total = [$a,$b,$c];
        /////////////////////////////////////////////////
        
        
        
        $data = [
            'user'=> $user,
            'items' => $items,
            'total' => $total,
            ];
        
        return view('welcome',$data);
        }
        else{
            return view('welcome');
        }
    }
}