<?php

namespace App\Http\Controllers;

use App\Models\Integrantes;
use Illuminate\Http\Request;

class IntegrantesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $integrantes = Integrantes::all();
        return view('integrantes.index',compact('integrantes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('integrantes.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'cargo'=>'required',
                'nombre'=>'required',
                'leyenda'=>'required',
                'imagen'=>'required|image|mimes:png,jpg,jpeg,gif,svg|max:2048',
            ]
            );
        $data = $request->all();
        if($foto = $request->file('imagen'))
        {
            $destino = 'imagenes/';
            $perfil = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($destino,$perfil);
            $data['imagen']= "$perfil";
        }    
        $data['user_id'] = auth()->user()->id;
        Integrantes::create($data);
        return redirect()->route('integrantes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Integrantes $integrantes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Integrantes $integrantes)
    {
        //dd($integrantes);
        return view('integrantes.editar',compact('integrantes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Integrantes $integrantes)
    {
        $request->validate(
            [
                'nombre' => 'required',
                'cargo' => 'required',
                'leyenda' => 'required',
            ]);
            $input = $request->all();
    
            if ($imagen = $request->file('imagen')) {
                $destinationPath = 'imagenes/';
                $profileImage = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
                $imagen->move($destinationPath, $profileImage);
                $input['imagen'] = "$profileImage";
            }else{unset($input['imagen']);}
            $input['user_id'] = auth()->user()->id;
            $integrantes->update($input);
            return redirect()->route('integrantes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Integrantes $integrantes)
    {
        $integrantes->delete();
        return redirect()->route('integrantes.editar');
    }
}
