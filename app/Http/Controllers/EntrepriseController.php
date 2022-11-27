<?php

namespace App\Http\Controllers;
use App\Models\entreprise;
use Illuminate\Http\Request;


class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Entreprise=entreprise::all();
        return view('entreprise.index',compact("Entreprise"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entreprise.add');
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
            "nomE"=>"required",
            "description"=>"required",
        ]);
        $entreprise=new entreprise();
        $entreprise->nomE=$request->input('nomE');
        $entreprise->description=$request->input('description');
        $entreprise->save();
        return redirect()->route("tableEntreprise");
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
        $entreprise=entreprise::findOrFail($id);
       return view("entreprise.update",compact("entreprise"));
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
        $entreprise=entreprise::findOrFail($id);
        $entreprise->nomE->$request->get('nomE');
        $entreprise->description->$request->get('description');
        $entreprise->update();
        return redirect()->route("Entreprise.index");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        entreprise::find($id)->delete();
        return redirect()->route("Entreprise.index");
    }
}
