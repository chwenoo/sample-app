<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Update Category</h1>
        <div style="max-width: 500px" class="mx-auto">
            <form action="{{route('categories.update', $category->id)}}" method="POST" class="form">
                @csrf
                <div class="mb-2">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{$category->name}}">
                </div>
                <div class="mb-2">
                    <label for="description">Description:</label>
                    <input type="text" name="description" id="description" class="form-control" value="{{$category->description}}">
                </div>
                <div class="mb-3">
                    <label for="status">Status:</label>
                    <select name="status" id="status" class="form-select">
                        <option value="1" @if($category->status === 1) selected @endif>true</option>
                        <option value="0" @if($category->status === 0) selected @endif>false</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary w-100">update</button>
            </form>
        </div>
    </div>
</body>
</html>
