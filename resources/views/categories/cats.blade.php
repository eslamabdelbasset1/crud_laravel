@extends('layout')

@section('title', 'All Categories')

@section('content')
    <div class="container mt-5">
        <h1>All Categories</h1>
        @foreach($cats as $cat)
            <a href="{{url("categories/$cat->id")}}">
                <h3>{{$cat->name}}</h3>
            </a>
            {{--            <p>{{$cat->desc}}</p>--}}
        @endforeach
    </div>

@endsection

