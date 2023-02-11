@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center" style="margin: 20px 0px; color: blue">Create a new Food</h1>
        <form method="post" action="/foods" enctype="multipart/form-data">
            {{-- not work cause it related to CSRF - cross site request form forgery--}}
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name">
              <div id="" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price">
            </div>
            <div class="mb-3">
                <label class="form-label" for="price">Count</label>
                <input type="number" class="form-control" id="count" name="count">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="file" class="form-label">Multiple files input example</label>
                <input class="form-control" type="file" id="file" name="image" multiple>
              </div>
            <select class="form-select" aria-label="Default select example" name="category_id">
                <option selected>Open this select category</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary" style="margin: 20px 0px">Submit</button>
          </form>
          @if ($errors->any())
          <div>
              @foreach ($errors->all() as $error)
                  <p class="text-danger">{{ $error }}</p>
              @endforeach
          </div>
      @endif
    </div>
@endsection
    
