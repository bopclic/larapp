<h1>Edit</h1>
<form action="/update/{{$project->id}}" method="post">
    @csrf
    <label for="">Project Name</label>
    <input type="text" class="form-control" name="name" value="{{$project->name}}">
    <label for="">Industry</label>
    <input type="text" class="form-control" name="industry" value="{{$project->industry}}">
    <label for="">Leader</label>
    <input type="text" class="form-control" name="leader" value="{{$project->leader}}">
    <button class="btn btn-primary mt-3" type="submit">Update</button>
</form>
