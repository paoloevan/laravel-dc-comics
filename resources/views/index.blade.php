@extends('layout.app')

@section('content')
<div class="jumbotron">
    <img src="{{ Vite::asset('resources/images/jumbotron.jpg')}}" alt="">

    <span class="current">current series</span>

</div>

<div class="container">
    <a class="btn btn-primary m-2" href="{{route('create')}}">Add comic</a>
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
                    <!-- Modal trigger button -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteComic_{{$comic->id}}">
                        Delete
                    </button>

                    <!-- Modal Body -->
                    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                    <div class="modal fade" id="deleteComic_{{$comic->id}}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId_{{$comic->id}}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTitleId_{{$comic->id}}">Delete Comic</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Delete comic #{{$comic->id}}. Are you sure?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <form action="{{route('destroy', $comic->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <input class="btn btn-danger" type="submit" value="Delete">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- delete item -->


                </div>
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