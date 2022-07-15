@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Tambah Data Pesanan</h3>
        <form action="{{ url('/pesanan') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>KODE PESANAN</label>
                <input type="text" class="form-control"
name="pesanan_kode">
            </div>
            <div class="mb-3">
                <label>NAMA PESANAN</label>
                <input type="text" class="form-control"
name="pesanan_nama"></textarea>
            </div>
            <div class="mb-3">
                <input type="submit" value="SIMPAN">
            </div>
        </form>
    </div>
@endsection