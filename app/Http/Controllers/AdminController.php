<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MImpian;
class AdminController extends Controller
{
    public function index()
    {
        // return view('dashboard.index');
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

    public function edit(MImpian $impian)
    {
        $dashboard = MImpian::where('id',$impian->id)->get();
        return view('dashboard.edit',['dashboard'=>$dashboard]);
    }

    public function update(Request $request, MImpian $impian)
    {
        MImpian::where('id',$impian->id)->update([
            'nama_impian' => $request->nama_impian,
            'harapan_tercapai' => $request->harapan_tercapai,
            'status_impian' => $request->status_impian
        ]);
        return redirect('/impian');
    }


    
}
