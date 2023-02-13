<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        $data = Data::all();
        return view('index', compact('data'));
    }

    public function create()
    {
        return view('create');
    }

    public function inputCreate(Request $request)
    {
            $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'jabatan' => 'required',
            'departemen' => 'required',
        ]);

        $data = new Data([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'email' => $request->email,
            'jabatan' =>  $request->jabatan,
            'departemen' => $request->departemen,
        ]);

        $data->save();

        return redirect('/');
        
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Data $data)
    {
        //
    }

    public function edit($id)
    {
        $data = Data::where('id', $id)->first();
        return view('edit', compact('data'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'jabatan' => 'required',
            'departemen' => 'required',
        ]);

        Data::where('id', $id)->update([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'email' => $request->email,
            'jabatan' =>  $request->jabatan,
            'departemen' => $request->departemen,
        ]);

        return redirect('/');
    }

    public function destroy($id)
    {
        Data::where('id', $id)->delete();
        return redirect()->back();
    }
}
