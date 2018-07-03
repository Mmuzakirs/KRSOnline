@extends('admin.layout')

@section('content')
    <div class="right_col" role="main">
        <div class="row">
            
            <div class="col-md-12 col-sm-12 col-xs-12">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="x_panel">
                    <div class="x_title">
                        <div class="title_left">
                            <h3>Data Mahasiswa</h3>
                        </div>                              
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table style="width:800px" id="datatable" class="table table-striped table-bordered">
                        <div class="buttons">
                            <a href="{{ route('mahasiswa.create') }}" type="button" class="btn btn-success btn-sm"> Tambah Mahasiswa</a>
                        </div>  
                        <thead>
                            <tr>
                                <th width="50px">NIM</th>
                                <th>Nama Lengkap</th>
                                <th width="150px">Jurusan</th>
                                <th width="190px">Fakultas</th>
                                <th width="90px">Angkatan</th>
                                <th width="130px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            @foreach ($mahasiswas as $mahasiswa)
                            <tr>
                                <td>{{ $mahasiswa->id }}</td>
                                <td>{{ $mahasiswa->namaMhs }}</td>
                                <td>{{ $mahasiswa->namaJur }}</td>
                                <td>{{ $mahasiswa->namaFak }}</td>
                                <td>{{ $mahasiswa->angkatan }}</td>
                                <td>
                                    
                                    <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST">
                                    <a class="btn btn-primary btn-sm" href="{{ route('mahasiswa.edit', $mahasiswa->id) }}">Edit</a>
                                    @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection