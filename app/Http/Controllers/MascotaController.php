<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mascotas = Mascota::get();
        //dd($mascotas);
        return view('mascotas.mascotaIndex', compact('mascotas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mascotas.mascotaForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //metodo crear registro
        $mascota = new Mascota();
        $mascota->nombreM = $request->nombreM;
        $mascota->foto = $request->foto;
        $mascota->fecha = $request->fecha;
        $mascota->raza = $request->raza;
        $mascota->comentario = $request->comentario;
        $mascota->save();

        if($request->hasFile('foto')){
           $mascota['foto']=$request->file('foto')->store('uploads','public');
        }

        //Mascota::insert($request->all());
        return redirect()->route('mascota.index')->with('mensaje','Mascota agregada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mascota = Mascota::find($id);
        return view('mascotas.mascotaShow', compact('mascota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mascota = Mascota::findOrFail($id);
        return view('mascotas.mascotaForm', compact('mascota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /*$mascota->nombreM = $request->nombreM;
        $mascota->foto = $request->foto;
        $mascota->fecha = $request->fecha;
        $mascota->raza = $request->raza;
        $mascota->comentario = $request->comentario;
        $mascota->save();
        */

        $mascota = request()->except(['_token','_method']);
        Mascota::where('id','=',$id)->update($mascota);

        $mascota = Mascota::findOrFail($id);
        return redirect()->route('mascota.show', $mascota);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mascota::destroy($id);
        return redirect()->route('mascota.index')->with('mensaje','Registro eliminado');
    }
}
