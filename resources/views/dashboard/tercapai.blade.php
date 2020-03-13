@extends('layout.master')
@section('title','Impian Tercapai')
@section('judul','Impian Tercapai')

@section('content')
<table class="table">
    <thead class="thead-dark">
        <th>#</th>
        <th>Nama Impian</th>
        <th>Harapan Tercapai</th>
        <th>Status Impian</th>
        <th>Tercapai Pada</th>
    </thead>
    <tbody>
    @foreach($dashboard as $dashboard)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $dashboard->nama_impian }}</td>
            <td>{{ $dashboard->harapan_tercapai }}</td>
            <td>
                <img src="/assetAdmin/img/oke.png">
            </td>
            <td>{{ $dashboard->updated_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection