@extends('welcome')


@section('content')

    @if($errors->any())
        <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
           <li> {{$error}}</li>
        @endforeach
        </ul>
    @endif
    {!! Form::open(['url' => 'post', 'method' => 'post', 'files' => true]) !!}
    {!! Form::text('title', null, ['class' => 'form-control','placeholder'=>'Title']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control','placeholder'=>'Description']) !!}
    {!! Form::file('image', ['class' => 'form-control']) !!}
    {!! Form::submit('Submit', ['class' => 'form-control btn btn-success']) !!}
    {!! Form::close() !!}
@endsection