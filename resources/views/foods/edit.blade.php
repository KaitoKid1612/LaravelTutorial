@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>This is a update food page</h1>
        <form method="post" action="/foods/{{ $food->id }}">
            {{-- not work cause it related to CSRF - cross site request form forgery--}}
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $food->name }}">
                <div id="" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $food->price }}">
            </div>
            <div class="mb-3">
                <label class="form-label" for="price">Count</label>
                <input type="number" class="form-control" id="count" name="count" value="{{ $food->count }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ $food->description }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
    
