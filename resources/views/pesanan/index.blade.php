@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Data Pesanan</h3>
        <a href="{{ url('pesanan/create') }}">Tambah Pesanan</a>
    
    <table class="table table-bordered">
        <tr>
            <td>ID</td>
            <td>KODE PESANAN</td>
            <td>NAMA PESANAN</td>
            <td>EDIT</td>
            <td>DELETE</td>
        </tr>
        @foreach($rows as $row)
        <tr>
            <td>{{ $row->pesanan_id }}</td>
            <td>{{ $row->pesanan_kode }}</td>
            <td>{{ $row->pesanan_nama }}</td>
            <td><a href="{{ url('pesanan/' . $row->pesanan_id . '/edit') }}">Edit</a></td>
            <td>
                <form action="{{ url('pesanan/' . $row->pesanan_id) }}"
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
