@extends('layouts.main-layouts')
@section('content')
    <div class="home">
        <h1>Go Back</h1>
        <h3>
            <a href="{{route('create')}}">Create</a>
        </h3>
        @foreach ($movies as $film)
            <li>
                <hr>
                <h3>
                    <a href="{{route('movie',$film -> id)}}">
                        Film: {{$film -> title}}
                    </a>
                </h3>          
                <a href="{{route('edit',$film -> id)}}">Edit</a><br>
                <a href="{{route('delete',$film -> id)}}">Delete</a>
            </li>
        @endforeach
    </div>
@endsection