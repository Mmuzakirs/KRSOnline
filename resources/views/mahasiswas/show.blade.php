@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h3>Detail Mahasiswa</h3>
                <a class="btn btn-xs btn-primary" href="{{ route('mahasiswas.index') }}">Kembali</a>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <strong>Nama :</strong>
                {{ $mahasiswas->nama }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <strong>NIM :</strong>
                {{ $mahasiswas->nim }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <strong>Jenis Kelamin :</strong>
                {{ $mahasiswas->jenis }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <strong>Fakultas :</strong>
                {{ $mahasiswas->fakultas }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <strong>Program Studi :</strong>
                {{ $mahasiswas->program }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <strong>Angkatan :</strong>
                {{ $mahasiswas->angkatan }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <strong>IP :</strong>
                {{ $mahasiswas->ip }}
            </div>
        </div>
    </div>
@endsection