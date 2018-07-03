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
                            <h3>Data Dosen</h3>
                        </div>                              
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table style="width:700px" id="datatable" class="table table-striped table-bordered">
                        <div class="buttons">
                            <a href="{{ route('dosen.create') }}" type="button" class="btn btn-success btn-sm"> Tambah Dosen</a>
                        </div>  
                        <thead>
                            <tr>
                                <th width="50px">NID</th>
                                <th>Nama Lengkap</th>
                                <th>Jurusan</th>
                                <th>Fakultas</th>
                                <th width="130px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            @foreach ($dosen2s as $dosen2)
                            <tr>
                                <td>{{ $dosen2->id }}</td>
                                <td>{{ $dosen2->namaDsn }}</td>
                                <td>{{ $dosen2->namaJur }}</td>
                                <td>{{ $dosen2->namaFak }}</td>
                                <td>
                                    
                                    <form action="{{ route('dosen.destroy', $dosen2->id) }}" method="POST">
                                    <a class="btn btn-primary btn-sm" href="{{ route('dosen.edit', $dosen2->id) }}">Edit</a>
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