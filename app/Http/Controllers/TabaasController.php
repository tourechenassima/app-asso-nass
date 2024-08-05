<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tabe3;
use App\Models\Apc;
use Illuminate\Support\Str;
class TabaasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tabe3s = Tabe3::all();
        $apcs = Apc::all();
        return view('dashboard',['tabe3s'=>$tabe3s],['apcs'=>$apcs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tabe3s.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //  $request->validate([
        //      'name'=>'required'
        //  ]);

        Tabe3::create([
                        
            'name'=>Str::of(implode("_", explode(" ",$request->input('nametabe3')))),
        ]);
        return redirect()->route('tabe3s.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          
        Tabe3::where('id', $id)->delete();
        return redirect()->route('tabe3s.index')->with('message','تم الحذف');
       
    }
}
