@extends('layouts.main-layouts')
@section('content')
    
    <h1>Edit movie</h1>

    	
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('update', $movie -> id) }}" method="POST">

        @method("POST")
        @csrf

        <label for="title">Title:</label>
        <input type="text" name="title" placeholder="title" value="{{ $movie -> title }}"><br>
        <label for="subTitle">subTitle:</label>
        <input type="text" name="subTitle" placeholder="subTitle" value="{{ $movie -> subTitle }}"><br>
        <label for="release_date">Release date:</label>
        <input type="date" name="release_date" value="{{ $movie -> release_date }}"><br>
        <input type="submit" value="UPDATE">
    </form>
@endsection
<style>
    *{
        color: white
        
    }
    input{
            color: black
        }
</style>