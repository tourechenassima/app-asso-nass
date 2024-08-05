<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apc;
use App\Models\Tabe3;
use Illuminate\Support\Str;


class ApcsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('apcs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Apc::create([
            'name'=>Str::of(implode("_", explode(" ",$request->input('nameapc')))),

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
        Apc::where('id', $id)->delete();
        return redirect()->route('tabe3s.index')->with('message','تم الحذف');
    }
}
