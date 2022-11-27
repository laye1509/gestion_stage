<?php

namespace App\Http\Controllers;
use App\Models\etudiant;
use App\Models\filiere;

use Illuminate\Http\Request;


class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Etudiant=etudiant::all();
        $Filiere=filiere::all();
        return view('Etudiant.index',compact("Etudiant",'Filiere'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Filiere=filiere::all();
        return view('Etudiant.add',compact('Filiere'));
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
            "nom"=>"required",
            "prenom"=>"required",
            "naiss"=>"required",
            "sexe"=>"required",
            "lieu"=>"required",
            "filiere_id"=>"required",
        ]);
        $etudiant=new etudiant();
        $etudiant->nom=$request->input('nom');
        $etudiant->prenom=$request->input('prenom');
        $etudiant->naiss=$request->input('naiss');
        $etudiant->sexe=$request->input('sexe');
        $etudiant->lieu=$request->input('lieu');
        $etudiant->filiere_id=$request->input('filiere_id');
        $etudiant->save();
        return redirect()->route("Etudiant.index");
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
        $Etudiant=etudiant::findOrFail($id);
        $Filiere=filiere::all();
       return view("Etudiant.update",compact("Etudiant",'Filiere'));
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
        $Etudiant=etudiant::findOrFail($id);
        $Etudiant->nom->$request('nom');
        $Etudiant->prenom->$request('prenom');
        $Etudiant->naiss->$request('naiss');
        $Etudiant->sexe->$request('sexe');
        $Etudiant->lieu->$request('lieu');
        $Etudiant->filiere_id->$request('filiere_id');
        $Etudiant->update();
        return redirect()->route("Etudiant.index");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        etudiant::find($id)->delete();
        return redirect()->route("Etudiant.index");
    }
}
