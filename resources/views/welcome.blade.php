<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Larapp</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h1>Upcoming Projects</h1>
    <form action="/" method="post">
        @csrf
        <label for="">Project Name</label>
        <input type="text" class="form-control" name="name">
        <label for="">Industry</label>
        <input type="text" class="form-control" name="industry">
        <label for="">Leader</label>
        <input type="text" class="form-control" name="leader">
        <button class="btn btn-primary mt-3" type="submit">Post</button>
    </form>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Industry</th>
            <th scope="col">Leader</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <td><a href="/show/{{$project->id}}">{{$project->name}}</a></td>
                <td>{{$project->industry}}</td>
                <td>{{$project->leader}}</td>
              </tr>
            @endforeach
          
         
        </tbody>
      </table>
</div>


    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>