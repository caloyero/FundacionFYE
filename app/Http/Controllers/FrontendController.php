<?php

namespace App\Http\Controllers;

use App\Models\Slices;
use App\Models\Testimonio;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $slices = Slices::all();
        $testimonios = Testimonio::orderBy('id','desc')->paginate(3);
        $data = [ 'slices' => $slices, 'testimonios'=>$testimonios];
        //dd($data['slices']);
       // dd($slices);
        return view('frontend.home',compact('data'));
    }
}
