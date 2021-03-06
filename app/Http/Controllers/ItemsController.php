<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
     
     
    public function index()
    {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $items = $user->items()->orderBy('created_at', 'desc')->paginate(10);
            

            $data = [
                'user' => $user,
                'items' => $items,
            ];
            $data += $this->counts($user);
            
            return view('users.show', $data);
        }else {
            return view('welcome');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $item = new Item;
        
        return view('items.create', [
            'item' => $item,]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kinngaku' => 'required|max:11',
            'namae' => 'required|max:191',
            'genre' => 'required|max:11',
        ]);
        
        $request->user()->items()->create([
            'kinngaku' => $request->get('kinngaku'),
            'namae' => $request->get('namae'),
            'genre' => $request->get('genre'),
            ]);
            
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     
    public function show()
    {
        $data = [];
            $user = \Auth::user();
            $items = $user->items()->orderBy('created_at', 'desc')->paginate(10);
            $data = [
                'user' => $user,
                'items' => $items,
            ];
            $month = date("m");
        return view('items.show',$data
        );
    }
    
    public function piechart(){
        $data = [];
         $user = \Auth::user();
         $items = $user->items();
         
         $data = [
             'user' => $user,
             'items' => $items,];
             return view('items.piechart',$data);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = \App\Item::find($id);

        if (\Auth::user()->id === $item->user_id) {
            $item->delete();
        }

        return redirect()->back();
    }
    
}
