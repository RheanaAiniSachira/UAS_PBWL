@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Data Pelanggan</h3>
    <a href="{{ url('pelanggan/create') }}">Tambah Pelanggan</a>
    <table class="table table-bordered">
        <tr>
            <td>ID PESANAN</td>
            <td>KODE PESANAN</td>
            <td>NAMA PELANGGAN</td>
            <td>NOMOR MEJA PELANGGAN</td>
            <td>EDIT</td>
        </tr>
@foreach($rows as $row)
        <tr>
            <td>{{ $row->pel_id_pesanan }}</td>
            <td>{{ $row->pel_kode_pesanan }}</td>
            <td>{{ $row->pel_nama }}</td>
            <td>{{ $row->pel_no_pesanan }}</td>
            <td><a href="{{ url('pelanggan/' . $row->pel_id . '/edit') }}">Edit</a></td>
            <td>
                <form action="{{ url('pelanggan/' . $row->pel_id) }}"
            method="POST">
                    @method('DELETE')
                    @csrf
                    <button>Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection