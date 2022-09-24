<h1>Show</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Industry</th>
        <th scope="col">Leader</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
       
        <tr>
            <td><a href="">{{$project->name}}</a></td>
            <td>{{$project->industry}}</td>
            <td>{{$project->leader}}</td>
            <td><a href="/edit/{{$project->id}}">Edit</a></td>
            <form action="/delete/{{$project->id}}" method="post">
                @csrf
                <td><button type="submit">Delete</button></td>
            </form>
            
          </tr>
       
     
    </tbody>
  </table>