@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-8">
            @each('layouts.post.item',$posts,'post')
        </div>
        <div class="col-md-4">
            @include('widget.user')
        </div>
    </div>
@endsection