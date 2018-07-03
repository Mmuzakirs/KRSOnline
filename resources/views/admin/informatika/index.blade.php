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
                            <h3>Data Mata Kuliah Teknik Informatika</h3>
                        </div>                              
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table style="width:600px" id="datatable" class="table table-striped table-bordered">
                        <div class="buttons">
                        <a href="{{ route('matakuliah.index') }}" type="button" class="btn btn-primary btn-sm">Kembali</a>
                            <a href="{{ route('informatika.create') }}" type="button" class="btn btn-success btn-sm">Tambah Mata Kuliah</a>
                        </div>  
                        <thead>
                            <tr>
                                <th width="80px">Kode MK</th>
                                <th>Mata Kuliah</th>
                                <th width="50px">SKS</th>
                                <th width="70px">Semester</th>
                                <th width="80px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            @foreach ($informatikas as $informatika)
                            <tr>
                                <td>{{ $informatika->id }}</td>
                                <td>{{ $informatika->matakuliah }}</td>
                                <td>{{ $informatika->sks }}</td>
                                <td>{{ $informatika->semester }}</td>
                                <td>
                                    <form action="{{ route('informatika.destroy', $informatika->id) }}" method="POST">
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