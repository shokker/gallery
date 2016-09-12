@extends('welcome')
@section('content')
    <div class="navbar navbar-inverse">
        <div class="navbar-header">
        <button class="navbar-toggle" data-toggle="collapse" data-target="#navbarBlack"></button>

        <a href="/" class="navbar-brand"><img src="{{URL::asset('/img/logo.png')}}"></a>
        </div>

        <div class="collapse navbar-collapse" id="navbarBlack">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Photos</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Cams</a></li>
            </ul>
        </div>
        {{--<a href='{{url('/create')}}' class="btn btn-primary">new image</a>--}}
    </div>



    @foreach($imageCollect->chunk(3) as $images)
    <div class="row">
        @foreach($images as $image)
            <div class="col col-md-4">
                @include('image')
            </div>
        @endforeach
    </div>
    @endforeach

@endsection