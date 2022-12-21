@extends('layout.app')

@section('content')
<div class="jumbotron">
    <img src="{{ Vite::asset('resources/images/jumbotron.jpg')}}" alt="">

    <span class="current">current series</span>

</div>

<div class="container">
    <div class="row row-cols-6">
        @foreach ($comics as $key => $comic)
        <div class=" my_card">
            <div class="card_image">
                <a href="{{route('show', $comic->id)}}">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                </a>
            </div>
            <div class="card_title">
                {{$comic['title']}}
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection