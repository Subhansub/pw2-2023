@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Reviews Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Reviews</li>
        </ol>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Edit Data
        </div>
        <div class="card-body">
            <form method="POST" action="/reviews/{{ $review->id }}">
                @csrf
                @method('PUT')
                <label for="movie">Movie:</label><br>
                <input type="text" id="movie" name="movie" value="{{ $review->movie }}"><br><br>

                <label for="user">User:</label><br>
                <input type="text" id="user" name="user" value="{{ $review->user }}"><br><br>

                <label for="rating">Rating:</label><br>
                <input type="text" id="rating" name="rating" value="{{ $review->rating }}"><br><br>

                <label for="comment">Comment:</label><br>
                <input type="text" id="comment" name="comment" value="{{ $review->comment }}"><br><br>

                <label for="tanggal">Comment:</label><br>
                <input type="text" id="tanggal" name="tanggal" value="{{ $review->tanggal }}"><br><br>

                <input type="submit" value="Update Reviews">
            </form>
        </div>
    </div>
@endsection