@extends('layout.app')

@section('title')
    DC Comics
@endsection

@section('main')

{{ $title }}
    <div class="jumbotron">
    </div>
    <div class="wrapper-gallery">
        <div class="card-gallery">
            @foreach ($comics as $comic)
                <div class="comic-card">
                    <img src="{{ $comic['thumb'] }}" alt="">
                    <h5> 
                        <a href="{{ route('comic', ['id' => $comic['id']]) }}">
                        {{ $comic['title'] }} </a>
                    </h5>
                </div>
            @endforeach
        </div>
            

    </div>
@endsection 
