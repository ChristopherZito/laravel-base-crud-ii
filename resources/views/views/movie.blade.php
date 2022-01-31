@extends('layouts.main-layouts')
@section('content')
    <div class="box">
        <a href="{{route('home')}}">
            <h1>Go Back</h1>
        </a>
        <h2>
            TITLE: {{$movie -> title}}
        </h2>
        <h2>
            SUBTITLE: {{$movie -> subTitle}}
        </h2>
        <h2>
            RELEASE DATE:{{$movie -> release_date}}
        </h2>
        <h1>
            {{$movie -> fullTitles()}}
        </h1>
    </div>
@endsection