@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>This is Food Page</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                    <th scope="col">Count</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            @foreach ($foods as $food)
                <tbody>
                    <tr>
                        <th scope="row">{{ $food->id }}</th>
                        <th scope="row"><a href="/foods/{{ $food->id }}">{{ $food->name }}</a></th>
                        <th scope="row">{{ $food->price }}</th>
                        <th scope="row">{{ $food->description }}</th>
                        <th scope="row">{{ $food->count }}</th>
                        <th><a href="foods/{{ $food->id }}/edit" class="btn btn-primary btn-lg">Edit</a></th>
                        <th>
                            <form action="/foods/{{ $food->id }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </th>
                    </tr>
                </tbody>
            @endforeach
        </table>
        <a href="{{ route('foods.create')}}" class="btn btn-primary btn-lg">Add a new food</a>
    </div>
@endsection
    
