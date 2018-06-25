@extends('user.layout')

@section('content')
<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>
                @component('components.user')
                @endcomponent
            </h3>
        </div>
    </div>
</div>
@endsection