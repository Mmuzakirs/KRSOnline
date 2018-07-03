@extends('admin.layout')

@section('content')
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
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
            <div class="x_panel">
                <div class="x_title">
                    <h2>Create Mahasiswa</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                <br/>
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('mahasiswa.store') }}" method="POST">
                    @csrf    
                        @include('admin.mahasiswa.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection