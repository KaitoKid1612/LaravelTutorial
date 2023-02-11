@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>This is Post Page</h1>
        @foreach ($posts as $postMail)
            <h3>{{ $postMail }}</h3>
        @endforeach
    </div>
@endsection
    
