<?php

namespace App\Http\Controllers;

use App\Models\Slices;
use Illuminate\Http\Request;

class SlicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slice = Slices::All();
        return(view('slice.index',compact('slice')));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('slice.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
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
        Slices::create($input);
        return redirect()->route('slice.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slices $slice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slices $slice)
    {
        return view('slice.editar',compact('slice'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slices $slice)
    {
        $input = $request->all();
    
        if ($imagen = $request->file('imagen')) {
            $destinationPath = 'imagenes/';
            $profileImage = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move($destinationPath, $profileImage);
            $input['imagen'] = "$profileImage";
        }else{unset($input['imagen']);}
        $input['user_id'] = auth()->user()->id;
        $slice->update($input);
        return redirect()->route('slice.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slices $slice)
    {
        $slice->delete();
        return redirect()->route('slice.index');
    }
}
