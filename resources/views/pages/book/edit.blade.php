@extends('books.layout')
@section('content')

<div class="card mt-4">
    <div class="card-header">Edit Books Data</div>
    <div class="card-body">
        <form action="{{ url('books/' .$book->isbn) }}" method="POST" autocomplete="on">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="isbn">ISBN:</label>
                <input type="text" class="form-control @error('isbn') is-invalid @enderror" id="isbn" maxlength="13" name="isbn" value="{{ $book->isbn }}">
                @error('isbn')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ $book->title }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="category">Category:</label>
                <select name="category" id="category" class="form-control @error('category') is-invalid @enderror" required>
                    <option value="">--Select a category--</option>
                    <option value="Fiksi" @if($book->category == "Fiksi") selected @endif>Fiksi</option>
                    <option value="Romance" @if($book->category == "Romance") selected @endif>Romance</option>
                    <option value="Education" @if($book->category == "Education") selected @endif>Education</option>
                </select>
                @error('category')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="author">Author:</label>
                <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" name="author" value="{{ $book->author }}">
                @error('author')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ $book->price }}">
                @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
            <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
