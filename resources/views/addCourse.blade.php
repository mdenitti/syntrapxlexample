@extends('layout')

@section ('title','Add a course to our system')

@section('content')
    @if (session('succes'))
        <p>{{ session('succes') }}</p>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/courses" method="post">
        @csrf

        <div>
            <label for="title">Title</label>
            <input class="form-control" type="text" id="title" name="title">
        </div>

        <div>
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>

        <div>
            <label for="instructor_id">Instructor ID</label>
            <input class="form-control" type="number" id="instructor_id" name="instructor_id">
        </div>

        <div>
            <label for="category_id">Category ID</label>
            <input class="form-control" type="number" id="category_id" name="category_id">
        </div>

        <div>
            <label for="active">Active</label>
            <input class="form-check-input" type="checkbox" id="active" name="active" value="1">
        </div>

        <button class="btn btn-primary" type="submit">Save</button>
    </form>
@endsection