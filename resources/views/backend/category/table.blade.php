<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Striped Rows</h2>
    @if (session()->has('msg'))
    <div class="alert alert-success">
       {{session()->get('msg')}}
    </div>

    @endif
    <a href="{{route('admin.category.create')}}"><button class="btn btn-success">Add</button></a>

  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $d)


      <tr>
        <td>{{$d->id}}</td>
        <td>{{$d->title}}</td>
        {{-- <td><a href="route{{'edit',$d->id}}"><button>edit</button></a></td> --}}
        <td><a href="{{route('admin.category.edit',$d->id)}}"><button type="Edit" class="btn btn-success">edit</button> </td>
        <td> <a href="{{route('admin.category.delete',$d->id)}}"><button type="delete" class="btn btn-danger">delete</button> </td>

        </tr>
        @endforeach
  </table>

</div>

</body>
</html>
