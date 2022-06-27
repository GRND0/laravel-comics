@extends('layout.app')

@section('title')
    DC Comics
@endsection

@section('main')

{{ $title }}

<h2>{{ $comics['title'] }}</h2>
<div>
    <img src="{{ $comics['thumb'] }}" alt="">
</div>

@endsection 