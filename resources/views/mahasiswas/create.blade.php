@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h3>Add Mahasiswa Baru</h3>
            </div>
        </div>
    </div>

    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whooops!!</strong> Ada Kesalahan Input.<br>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(['route' => 'mahasiswas.store', 'method' => 'POST'])!!}
    {{ csrf_field() }}
        @include('mahasiswas.form')
    {!! Form::close() !!}

@endsection