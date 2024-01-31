<?php

namespace App\Http\Controllers;

use App\Models\QuienesSomos;
use Illuminate\Http\Request;

class QuienesSomosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $qss= QuienesSomos::all();
        return view('quienes_somos.index',compact('qss'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('quienes_somos.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required',
            'contenido'=>'required',
            'imagen'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input = $request->all();
        if ($imagen = $request->file('imagen')) {
            $destinationPath = 'imagenes/';
            $profileImage = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move($destinationPath, $profileImage);
            $input['imagen'] = "$profileImage";
        }
        $input['user_id'] = auth()->user()->id;
        QuienesSomos::create($input);
        return redirect()->route('quienes_somos.index')->with('success','evento creado ');

    }

    /**
     * Display the specified resource.
     */
    public function show(QuienesSomos $quienesSomos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(QuienesSomos $quienesSomos)
    {
        return view('quienes_somos.editar',compact('quienesSomos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, QuienesSomos $quienesSomos)
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
            $quienesSomos->update($input);
            return redirect()->route('quienes_somos.index')->with('success','evento editado ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QuienesSomos $quienesSomos)
    {
        $quienesSomos->delete();
        return redirect()->route('quienes_somos.index')->with('success','evento eliminado ');
    }
}
