<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MImpian;
class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function about()
    {
        return view('dashboard.about');
    }
    
    public function impian()
    {
        $impian = MImpian::all();
        return view('dashboard.impian',['impian'=>$impian]);
    }
    public function create(Request $request)
    {
        MImpian::create($request->all());
        return redirect('/impian');
    }
    
}
