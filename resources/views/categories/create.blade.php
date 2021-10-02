<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
              rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
              crossorigin="anonymous">
        <title></title>
    </head>
    <body>
        <div class="container mt-5">
        <h1 class="text-center h3">Add Category</h1>

        <form action="{{url('/categories')}}" method="POST" >
            @csrf
            <div class="form-group w-50 m-auto border">
                <div class="mb-3 p-2">
                    <label for="exampleFormControlInput1" class="form-label">Name Category</label>
                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Name Category">
                </div>
                <div class="mb-3 p-2">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary p-2 w-100" value="Add">Add Category</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
            crossorigin="anonymous"></script>
    </body>
</html>
