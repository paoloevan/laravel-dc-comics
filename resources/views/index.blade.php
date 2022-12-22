@extends('layout.app')

@section('content')
<div class="jumbotron">
    <img src="{{ Vite::asset('resources/images/jumbotron.jpg')}}" alt="">

    <span class="current">current series</span>

</div>

<div class="container">
    <a class="btn btn-primary m-2" href="{{route('create')}}">Add comic</a>
    <strong class="text-white bg-success p-2 lh-lg">{{session('message')}}</strong>
    <div class="row row-cols-6 mt-3">
        @foreach ($comics as $key => $comic)
        <div class=" my_card">
            <div class="card_image">
                <a class="btn btn-secondary mb-2 p-1 px-2" href="{{route('edit', $comic->id)}}">Edit</a>
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