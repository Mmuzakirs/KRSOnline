@extends('admin.layout')

@section('content')
    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <div class="title_left">
                            <h3>Data Mata Kuliah</h3>
                        </div>                              
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table style="width:300px" id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jurusan</th>
                                <th width="80px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Teknik Informatika</td>
                                <td>
                                    <a href="{{ route('informatika.index') }}" class="btn btn-primary btn-sm">Pilih</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection