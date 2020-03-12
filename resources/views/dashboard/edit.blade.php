@extends('layout.master')
@section('title','Form Edit Impian')
@section('judul','Edit Impian')

@section('content')
<div class="col-md-6 ">
    @foreach($dashboard as $dashboard)
    <form action="/impian/edit/{{$dashboard->id}}" method="POST">
    @csrf
    <div class="card">
        <div class="card-header text-center text-dark bg-primary">
            Form Edit Data
        </div>
        <div class="card-body">
            <label>Nama Impian : </label>
            <input type="text" class="form-control mb-3" value="{{ $dashboard->nama_impian }}" name="nama_impian">

            <label>Harapan Tercapai : </label>
            <input type="text" class="form-control mb-3" value="{{ $dashboard->harapan_tercapai }}" name="harapan_tercapai">

            <label>Status Impian : </label>
            <div class="form-check">
                <div class="col-md-1">
                </div>
                <div class="col-md-10">
                    <input class="form-check-input" type="radio" name="status_impian" value="belum" checked>
                    <label class="form-check-label">
                        Belum Tercapai
                    </label>
                    <br>
                    <input class="form-check-input" type="radio" name="status_impian" value="tercapai" >
                    <label class="form-check-label">
                        Sudah Tercapai
                    </label>
                </div>
                <div class="col-md-1">
                </div>
            </div>
        </div>
        <div class="card-footer text-muted text-center">
            <button type="submit" class="btn btn-warning">UPDATE</button>
        </div>
    </div>
    </form>
    @endforeach
</div>
@endsection