<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Murid;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $murid = Murid::all();
        return view('murid.index',[
            "murid" => $murid
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('murid.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nama_murid" => "required",
            "umur_murid" => "required",
            "hobi_murid" => "required"
        ]);

        Murid::create($request->all());

        return redirect()->route('index');
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
        $murid = Murid::where('id_murid',$id)->first();

        return view('murid.edit',[
            "murid" => $murid
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $edit = $request->validate([
            "nama_murid" => "required",
            "umur_murid" => "required",
            "hobi_murid" => "required"
        ]);

        Murid::where('id_murid',$id)->update($edit);

        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Murid::where('id_murid',$id)->delete();

        return redirect()->route('index');
    }
}
