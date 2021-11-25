<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <h2>CRUD</h2>
    <a class="btn btn-success" href="{{url('add')}}">Add</a>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Age</th>
          <th>Gender</th>
          <th>Willing to Work</th>
          <th>Languages</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $d)
        <tr>
        <td>{{@$d->id}}</td>
          <td>{{@$d->name}}</td>
          <td>{{@$d->age}}</td>
          <td>{{@$d->gender}}</td>
          <td>{{@$d->willing_to_work?"Yes":"No"}}</td>
          <td>{{@$d->language_1?"English,":""}}{{@$d->language_2?"Malayalam,":""}}{{@$d->language_3?"Arabic,":""}}{{@$d->language_4?"Hindi":""}}</td>
          <td><a href="{{url('add').'/'.@$d->id}}" class="btn btn-primary">Edit</a><a onclick="return confirm('Are you sure?')" href="{{url('delete').'/'.@$d->id}}" class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>

</html>