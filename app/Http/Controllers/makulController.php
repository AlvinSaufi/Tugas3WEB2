<?php

namespace App\Http\Controllers;

use App\Makul;
use Illuminate\Http\Request;

class makulController extends Controller
{
    public function index()
    {
        $makul = Makul::all(); // select * from nama_table
        return view('makul.index', compact('makul'));
    }
    public function create()
    {
        return view ('makul.create');
    }

    public function store(Request $request)
    {
        Makul::create($request->all());
        return redirect()->route('makul');
    }

    public function edit($id)
    {
        
    }
}
