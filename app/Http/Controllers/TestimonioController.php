<?php

namespace App\Http\Controllers;

use App\Models\Testimonio;
use Illuminate\Http\Request;

class TestimonioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonios = Testimonio::all();
        return view('testimonio/index',compact('testimonios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('testimonio.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'titulo'=>'required',
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
        Testimonio::create($data);
        return redirect()->route('testimonio.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(testimonio $testimonio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(testimonio $testimonio)
    {
        return view('testimonio.editar',compact('testimonio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, testimonio $testimonio)
    {
        $request->validate(
            [
                'titulo'=>'required',
                'leyenda'=>'required',
            ]);
            $input = $request->all();
    
            if ($imagen = $request->file('imagen')) {
                $destinationPath = 'imagenes/';
                $profileImage = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
                $imagen->move($destinationPath, $profileImage);
                $input['imagen'] = "$profileImage";
            }else{unset($input['imagen']);}
            $input['user_id'] = auth()->user()->id;
            $testimonio->update($input);
            return redirect()->route('testimonio.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(testimonio $testimonio)
    {
        $testimonio->delete();
        return redirect()->route('testimonio.index');
    }
}
