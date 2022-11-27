<?php

namespace App\Http\Controllers;
use App\Models\filiere;
use Illuminate\Http\Request;


class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Filiere=filiere::all();
        return view('Filiere.index',compact("Filiere"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Filiere.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            "nomF"=>"required",
        ]);
        $filiere=new filiere();
        $filiere->nomf=$request->input('nomF');
        $filiere->save();
        return redirect()->route("Filiere.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $filiere=filiere::findOrFail($id);
       return view("filiere.update",compact("filiere"));
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
        $filiere=filiere::findOrFail($id);
        $filiere->nomF->$request->get('nomF');
        $entreprise->update();
        return redirect()->route("Filiere.index");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        filiere::find($id)->delete();
        return redirect()->route("Filiere.index");
    }
}
