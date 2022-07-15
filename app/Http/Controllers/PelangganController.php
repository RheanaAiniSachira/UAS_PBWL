<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    
    public function index()
    {
        $rows = Pelanggan::all();
        return view('pelanggan.index', compact('rows'));
    }

    public function create()
    {
        return view('pelanggan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
                'pel_kode_pesanan' => 'bail|required|unique:tb_pelanggan',
                'pel_nama' => 'required'
            ],
            [
                'pel_kode_pesanan.required' => 'KODE wajib diisi',
                'pel_kode_pesanan.unique' => 'KODE sudah ada',
                'pel_nama.required' => 'Nama wajib diisi'
            ]);
            
            Pelanggan::create([
                'pel_id_pesanan' => $request->pel_id_pesanan,
                'pel_kode_pesanan' => $request->pel_kode_pesanan,
                'pel_nama' => $request->pel_nama,
                'pel_no_pesanan' => $request->pel_no_pesanan
            ]);
            return redirect('pelanggan');
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
        $row = Pelanggan::findOrFail($id);
        return view('pelanggan.edit', compact('row'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'pel_kode_pesanan' => 'bail|required',
                'pel_nama' => 'required'
            ],
            [
                'pel_kode_pesanan.required' => 'KODE wajib diisi',
                'pel_nama.required' => 'Nama wajib diisi'
            ]
            );
            $row = Pelanggan::findOrFail($id);
            $row->update([
            'pel_id_pesanan' => $request->pel_id_pesanan,
            'pel_kode_pesanan' => $request->pel_kode_pesanan,
            'pel_nama' => $request->pel_nama,
            'pel_no_pesanan' => $request->pel_no_pesanan
            ]);
            return redirect('pelanggan');
    }

   
    public function destroy($id)
    {
        $row = Pelanggan::findOrFail($id);
        $row->delete();

        return redirect('pelanggan'); 
    }
}
