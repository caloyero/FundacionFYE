<?php

namespace App\Http\Controllers;

use App\Models\Eventos;
use Illuminate\Http\Request;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventos = Eventos::all();
        return view('eventos.index',compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('eventos.crear');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate(
            [
                'nombre' => 'required',
                'contenido' => 'required',
                'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $input = $request->all();
    
            if ($imagen = $request->file('imagen')) {
                $destinationPath = 'imagenes/';
                $profileImage = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
                $imagen->move($destinationPath, $profileImage);
                $input['imagen'] = "$profileImage";
            }
            $input['user_id'] = auth()->user()->id;
            Eventos::create($input);
            return redirect()->route('eventos.index')->with('success','evento creado ');
    }

    /**
     * Display the specified resource.
     */
    public function show(Eventos $eventos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Eventos $evento)
    {
        return view('eventos.editar',compact('evento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Eventos $evento)
    {
        $request->validate(
            [
                'nombre' => 'required',
                'contenido' => 'required',
                /* 'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', */
            ]);
            $input = $request->all();
    
            if ($imagen = $request->file('imagen')) {
                $destinationPath = 'imagenes/';
                $profileImage = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
                $imagen->move($destinationPath, $profileImage);
                $input['imagen'] = "$profileImage";
            }else{unset($input['imagen']);}
            $input['user_id'] = auth()->user()->id;
            $evento->update($input);
            //Eventos::create($input);
            return redirect()->route('eventos.index')->with('success','evento editado ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Eventos $eventos)
    {
        $eventos->delete();
        return redirect()->route('eventos.index')->with('success','evento eliminado ');
    }
}
