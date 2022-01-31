@extends('layouts.main-layouts')
@section('content')
<h1>
    Create new Element:
</h1>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{route('store')}}" method="POST">

    @method("POST")
    @csrf

    <label for="title" >Title</label>
    <input type="text" name="title" placeholder="Title"><br>

    <label for="subTitle" >SubTitle</label>
    <input type="text" name="subTitle" placeholder="subTitle"><br>

    <label for="release_date">Release Date</label>
    <input type="date" name="release_date" placeholder="Release Date"><br>

    <input type="submit" value="Create">
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