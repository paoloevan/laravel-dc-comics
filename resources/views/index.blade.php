@extends('layout.app')
@section('title')
Comics
@endsection

@section('content')
<div class="jumbotron">
    <img src="{{ Vite::asset('resources/images/jumbotron.jpg')}}" alt="">

    <span class="current">current series</span>

</div>

<div class="container">

    <!-- create new item -->
    <a class="btn btn-primary m-2" href="{{route('create')}}">Add comic</a>

    <!-- edit/delete message -->
    @if (session('message'))
    <strong class="text-white bg-success p-2 lh-lg">{{session('message')}}</strong>
    @endif

    <div class="row row-cols-6 mt-3">

        @foreach ($comics as $key => $comic)
        <div class=" my_card">
            <div class="card_image">

                <div class="d-flex gap-2 mb-2">
                    <!-- edit item -->
                    <a class=" btn btn-secondary px-2" href="{{route('edit', $comic->id)}}">Edit</a>
                    <!-- delete item -->
                    @include('partials.modal')
                </div>

                <!-- show single item -->
                <a href=" {{route('show', $comic->id)}}">
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