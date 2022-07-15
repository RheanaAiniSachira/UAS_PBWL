@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Edit Data Pelanggan</h3>
        <form action="{{ url('/pelanggan/' . $row->pel_id) }}" method="POST">
@method('PATCH')
@csrf
    <div class="mb-3">
        <label>ID PESANAN</label>
        <input type="text" class="form-control"
name="pel_id_pesanan" value="{{ $row->pel_id_pesanan }}"></>
    </div>
    <div class="mb-3">
        <label>KODE PESANAN</label>
        <input type="text" class="form-control"
name="pel_kode_pesanan" value="{{ $row->pel_kode_pesanan }}"></>
    </div>
    <div class="mb-3">
        <label>NAMA PELANGGAN</label>
        <input type="text" class="form-control"
name="pel_nama" value="{{ $row->pel_nama }}"></>
    </div>
    <div class="mb-3">
        <label>NOMOR MEJA PELANGGAN</label>
        <input type="text" class="form-control"
name="pel_no_pesanan" value="{{ $row->pel_no_pesanan }}">
    </div>
    <div class="mb-3">
        <input type="submit" value="UPDATE">
    </div>
</form>
</div>
@endsection