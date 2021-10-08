<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Edit Category</title>
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center h3">Edit Category</h1>

    <form action="{{url("/categories/$cats->id")}}" method="POST" >
        @csrf
        @method('PUT')
        <div class="form-group w-50 m-auto border">
            <div class="mb-3 p-2">
                <label for="exampleFormControlInput1" class="form-label">Name Category</label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                      value="{{$cats->name}}" placeholder="Name Category">
            </div>
            <div class="mb-3 p-2">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3">
                    {{$cats->desc}}
                </textarea>
            </div>
            <button type="submit" class="btn btn-primary p-2 w-100" value="Add">Add Category</button>
        </div>
    </form>
</div>


</body>
</html>
