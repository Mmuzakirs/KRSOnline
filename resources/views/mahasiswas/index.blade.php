@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h2>Data Mahasiswa</h2>
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="pull-left">
                <a class="btn btn-xs btn-success" href="{{ route('mahasiswas.create') }}">Add Mahasiswa</a>
            </div>
        </div>
    </div>
    <br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th width="50px">ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jenis Kelamin</th>
            <th>Program Studi</th>
            <th width="300px">Action</th>
        </tr>

        @foreach ($mahasiswas as $mahasiswa)
        {{ csrf_field() }}
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $mahasiswa->nama }}</td>
            <td>{{ $mahasiswa->nim }}</td>
            <td>{{ $mahasiswa->jenis }}</td>
            <td>{{ $mahasiswa->program }}</td>
            <td>
            <a class="btn btn-xs btn-info" href="{{ route('mahasiswas.show', $mahasiswa->id) }}">Detail</a>
            <a class="btn btn-xs btn-primary" href="{{ route('mahasiswas.edit', $mahasiswa->id) }}">Edit</a>
            
            {!! Form::open(['method' => 'DELETE', 'route' => ['mahasiswas.destroy', $mahasiswa->id], 'style' => 'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-xs btn-danger']) !!}
            {!! Form::close() !!}

            </td>
        </tr>
        @endforeach
    </table>

    {!! $mahasiswas->links() !!}
@endsection