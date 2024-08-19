<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table | query builder</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            margin: 30px;
            --bs-body-color-rgb: 222, 226, 230;

        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>City</th>
                        <th>View</th>
                    </tr>
                    @foreach ($data as $value)
                    <tr>
                        <td>{{ $value -> id }}</td>
                        <td>{{ $value -> name }}</td>
                        <td>{{ $value -> email }}</td>
                        <td>{{ $value -> age }}</td>
                        <td>{{ $value -> city }}</td>
                        <td><a href="{{ route('view.user', $value-> id) }}" class="btn btn-primary">View</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
</html>


    
