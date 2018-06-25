@extends('admin.layout')

@section('content')
<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>
                @component('components.admin')
                @endcomponent
            </h3>
        </div>
    </div>
</div>
@endsection