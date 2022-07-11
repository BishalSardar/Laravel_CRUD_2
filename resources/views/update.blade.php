<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <style>
        h1 {
            text-align: center;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            margin-top: 1em;
        }

        .container {
            width: 50%;
        }

        .table-2 {
            padding-top: 5em;
        }
    </style>
</head>

<body>
    <h1>Update </h1>

    <div class="container mt-3 pt-5">
        <form action="{{route('update',$item->id)}}" method="POST">
            {{csrf_field()}}

            <div class="mb-3">
                <label for="Name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="{{$item['name']}}" id="Name" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="Class" class="form-label">Class</label>
                <input type="text" name="class" class="form-control" value="{{$item['class']}}" id="class" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth</label>
                <input type="date" name="dob" class="form-control" value="{{$item['dob']}}" id="dob" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>