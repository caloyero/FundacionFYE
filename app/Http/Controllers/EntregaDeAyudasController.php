<?php

namespace App\Http\Controllers;

use App\Models\EntregaDeAyudas;
use App\Models\EntrgaDeAyudas;
use Illuminate\Http\Request;

class EntregaDeAyudasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entrega_de_ayudas = EntregaDeAyudas::all();
        return view('entrega_de_ayudas.index',compact('entrega_de_ayudas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('entrega_de_ayudas.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'imagen'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]
            );
            $input = $request->all();
        if ($imagen = $request->file('imagen')) {
            $destinationPath = 'imagenes/';
            $profileImage = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move($destinationPath, $profileImage);
            $input['imagen'] = "$profileImage";
        }
        $input['user_id'] = auth()->user()->id;
        EntregaDeAyudas::create($input);
        return redirect()->route('entrega_de_ayudas.index')->with('success','evento creado ');
    }

    /**
     * Display the specified resource.
     */
    public function show(EntregaDeAyudas $entregaDeAyudas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EntregaDeAyudas $entregaDeAyudas)
    {
        return view('entrega_de_ayudas.editar',compact('entregaDeAyudas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EntregaDeAyudas $entregaDeAyudas)
    {
        $input = $request->all();
    
        if ($imagen = $request->file('imagen')) {
            $destinationPath = 'imagenes/';
            $profileImage = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move($destinationPath, $profileImage);
            $input['imagen'] = "$profileImage";
        }else{unset($input['imagen']);}
        $input['user_id'] = auth()->user()->id;
        $entregaDeAyudas->update($input);
        return redirect()->route('entrega_de_ayudas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EntregaDeAyudas $entregaDeAyudas)
    {
        $entregaDeAyudas->delete();
        return redirect()->route('entrega_de_ayudas.index');
    }
}
