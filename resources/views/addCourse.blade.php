<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Course</title>
</head>
<body>
    <h1>Add Course</h1>

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
            <input type="text" id="title" name="title">
        </div>

        <div>
            <label for="description">Description</label>
            <textarea id="description" name="description"></textarea>
        </div>

        <div>
            <label for="instructor_id">Instructor ID</label>
            <input type="number" id="instructor_id" name="instructor_id">
        </div>

        <div>
            <label for="category_id">Category ID</label>
            <input type="number" id="category_id" name="category_id">
        </div>

        <div>
            <label for="active">Active</label>
            <input type="checkbox" id="active" name="active" value="1">
        </div>

        <button type="submit">Save</button>
    </form>
</body>
</html>
