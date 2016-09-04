@extends('welcome')
@section('content')
    <div class="navbar">
        <a href='{{url('/create')}}' class="btn btn-primary">new image</a>
    </div>
    @foreach($imageCollect->chunk(3) as $images)
    <div class="row">
        @foreach($images as $image)
            <div class="col col-md-4">
                {{$image->title}}
                <img src="{{URL::asset('/img/'.$image->path)}}" alt="">
            </div>
        @endforeach
    </div>
    @endforeach

@endsection