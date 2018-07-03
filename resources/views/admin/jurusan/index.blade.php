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
                            <h3>Data Jurusan</h3>
                        </div>                              
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table style="width:600px" id="datatable" class="table table-striped table-bordered">
                        <div class="buttons">
                            <a href="{{ route('jurusan.create') }}" type="button" class="btn btn-success btn-sm"> Tambah Jurusan</a>
                        </div>  
                        <thead>
                            <tr>
                                <th width="70px">Kode Jr</th>
                                <th>Jurusan</th>
                                <th>Fakultas</th>
                                <th width="80px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            @foreach ($jurusans as $jurusan)
                            <tr>
                                <td>{{ $jurusan->id }}</td>
                                <td>{{ $jurusan->namaJur }}</td>
                                <td>{{ $jurusan->namaFak }}</td>
                                <td>
                                    <form action="{{ route('jurusan.destroy', $jurusan->id) }}" method="POST">
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