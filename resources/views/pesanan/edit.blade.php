@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Edit Data Pesanan</h3>
        <form action="{{ url('/pesanan/' . $row->pesanan_id) }}" method="POST">
@method('PATCH')
@csrf
    <div class="mb-3">
        <label>KODE PESANAN</label>
        <input type="text" class="form-control"
name="pesanan_kode" value="{{ $row->pesanan_kode }}"></>
    </div>
    <div class="mb-3">
        <label>NAMA PESANAN</label>
        <input type="text" class="form-control"
name="pesanan_nama" value="{{ $row->pesanan_nama }}"></textarea>
    </div>
    <div class="mb-3">
        <input type="submit" value="UPDATE">
    </div>
</form>
</div>
@endsection