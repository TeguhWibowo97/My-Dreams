@extends('layout.master')
@section('title','Impian Belum Tercapai')
@section('judul','Impian Belum Tercapai')

@section('content')
<table class="table">
    <thead class="thead-dark">
        <th>#</th>
        <th>Nama Impian</th>
        <th>Harapan Tercapai</th>
        <th>Status Impian</th>
        <th>Diunggah Pada</th>
    </thead>
    <tbody>
    @foreach($dashboard as $dashboard)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $dashboard->nama_impian }}</td>
            <td>{{ $dashboard->harapan_tercapai }}</td>
            <td>
                <img src="/assetAdmin/img/cancel.png">
            </td>
            <td>{{ $dashboard->created_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection