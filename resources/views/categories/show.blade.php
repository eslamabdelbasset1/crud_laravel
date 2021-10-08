@extends('layout')

@section('title', "Show Category - $cats->name")

@section('content')
    <div class="container mt-5">
        <h1>Show Category </h1>
        <h3>{{$cats->name}}</h3>
        <p>{{$cats->desc}}</p>

        <a href="{{url("categories/cats->id/edit")}}">Edit</a>
        <form action="{{url("categories/cats->id")}}" method="post"><br>
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete">

        </form>
    </div>

@endsection

