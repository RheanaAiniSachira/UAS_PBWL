<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;

class PesananController extends Controller
{

    public function index()
    {
        $rows = Pesanan::all();
        return view('pesanan.index', compact('rows'));
    }

    public function create()
    {
        return view('pesanan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
                'pesanan_kode' => 'bail|required|unique:tb_pesanan',
                'pesanan_nama' => 'required'
            ],
            [
                'pesanan_kode.required' => 'KODE wajib diisi',
                'pesanan_kode.unique' => 'KODE sudah ada',
                'pesanan_nama.required' => 'NAMA Pesanan wajib diisi'
            ]);
            
            Pesanan::create([
                'pesanan_kode' => $request->pesanan_kode,
                'pesanan_nama' => $request->pesanan_nama,
            ]); 

            return redirect('pesanan');
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Pesanan::findOrFail($id);
        return view('pesanan.edit', compact('row'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'pesanan_kode' => 'bail|required',
                'pesanan_nama' => 'required'
            ],
            [
                'pesanan_kode.required' => 'KODE wajib diisi',
                'pesanan_nama.required' => 'NAMA wajib diisi'
            ]
        );
            
        $row = Pesanan::findOrFail($id);
        $row->update([
            'pesanan_kode' => $request->pesanan_kode,
            'pesanan_nama' => $request->pesanan_nama,
            
        ]);
            
            return redirect('pesanan');
    }

    public function destroy($id)
    {
        $row = Pesanan::findOrFail($id);
        $row->delete();

        return redirect('pesanan'); 
    }
}
