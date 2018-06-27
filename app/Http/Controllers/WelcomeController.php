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
        $a = ['genre'=>'美容費','kinngaku'=>0];
        $b = ['genre'=>'交際費','kinngaku'=>0];
        $c = ['genre'=>'食費','kinngaku'=>0];
        $d = ['genre'=>'固定費','kinngaku'=>0];
        $e = ['genre'=>'その他','kinngaku'=>0];
        
        foreach($items as $item){
            if($item->genre == '美容費'){
                $a['kinngaku'] +=$item->kinngaku;
            }
            elseif($item->genre == '交際費'){
                $b['kinngaku'] += $item->kinngaku;
            }
            elseif($item->genre == '食費'){
                $c['kinngaku'] += $item->kinngaku;
            }
            elseif($item->genre == '固定費'){
                $d['kinngaku'] += $item->kinngaku;
            }
            else{
                $e['kinngaku'] += $item->kinngaku;
            }
        }
        
        
        $total = [$a,$b,$c,$d,$e];
        /////////////////////////////////////////////////
        $month_total = 0;
        foreach($items as $item){
            $month_total += $item->kinngaku;
        }
        
        
        $data = [
            'user'=> $user,
            'items' => $items,
            'total' => $total,
            'month_total' => $month_total,
            ];
        
        return view('welcome',$data);
        }
        else{
            return view('welcome');
        }
    }
} 