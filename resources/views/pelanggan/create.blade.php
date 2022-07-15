@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Tambah Data Pelanggan</h3>
        <form action="{{ url('/pelanggan') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>ID PESANAN</label>
                <input type="text" class="form-control"
name="pel_id_pesanan">
            </div>
            <div class="mb-3">
                <label>KODE PESANAN</label>
                <input type="text" class="form-control"
name="pel_kode_pesanan">
            </div>
            <div class="mb-3">
                <label>NAMA PELANGGAN</label>
                <input type="text" class="form-control"
name="pel_nama">
            </div>
            <div class="mb-3">
                <label>NOMOR MEJA PELANGGAN</label>
                <input type="text" class="form-control"
name="pel_no_pesanan">
            </div>
            <div class="mb-3">
                <input type="submit" value="SIMPAN">
            </div>
        </form>
    </div>
@endsection