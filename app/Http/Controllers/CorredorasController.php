<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Corredora;
use App\Region;
use App\Provincia;
use App\Comuna;

class CorredorasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $corredoras = Corredora::paginate(10);
        return view('admin.corredoras.index', ['corredoras'=>$corredoras]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regionesList= Region::pluck('nombre','id');
        $provinciasList= Provincia::pluck('nombre','id');
        $comunassList= Comuna::pluck('nombre','id');
        //$estudios = Estudio::all();
        return view('admin.corredoras.create',compact('regionesList','provinciasList','comunasList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $corredora = new Corredora;
            $corredora->rut = $request->rut; 
            $corredora->nombre = $request->nombre; 
            $corredora->correo = $request->correo; 
            $corredora->telefono = $request->telefono; 
            $corredora->comuna_id = $request->comuna; 
            $corredora->direccion = $request->direccion; 
             
            $corredora->save();
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
        //
    }

public function getProvincias(Request $request, $id){
        if ($request->ajax()) {
            $provincia = Provincia::provincias($id);
            //$usuario = ['uno'=> 2,'dos'=>2];
            
            return response()->json($provincia);
    }
    $provincia = Provincia::provincias($id);
            //$usuario = ['uno'=> 2,'dos'=>2];
            
            return response()->json($provincia);
    }

    public function getComunas(Request $request, $id){
        if ($request->ajax()) {
            $comuna = Comuna::comunas($id);
            //$usuario = ['uno'=> 2,'dos'=>2];
            
            return response()->json($comuna);
    }
    $comuna = Comuna::comunas($id);
            //$usuario = ['uno'=> 2,'dos'=>2];
            
            return response()->json($comuna);
    }


}
