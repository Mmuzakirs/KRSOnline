@extends('user.layout')

@section('content')
<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_center">
            <center><h3 style="margin-top: 300px">
            	Selamat Datang DI WEB KRS {{ Auth::user()->name }}
            </h3></center>
        </div>
    </div>
</div>
@endsection