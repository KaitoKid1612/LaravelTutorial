@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 style="padding: 20px">This is Detail Food Page</h1>
        <h3 class="text-center">{{ $food->name }}</h3>
        <p>{{ $food->description }}</p>
        <p>{{ $food->count }}</p>
        <p>{{ $food->price }}</p>
        <p>{{ $category->name }}</p>
        <p>{{ $category->description }}</p>
        <p>{{  }}</p>
    </div>
@endsection
    
