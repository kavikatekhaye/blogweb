<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Stacked form</h2>
  <form action="{{route('admin.blog.update',$data->id)}}"method="POST" enctype="multipart/form-data" >
    @csrf
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter your Title" name="title">
    </div>
    <div class="form-group">
      <label for="description">Desription</label>
      <textarea name="description" id="description" placeholder="Enter your Description" name="description"></textarea>
    </div>
    <div class="form-group form-check">
        <label for="image">image:</label>
        <input type="file" class="form-control" id="image" placeholder="image" name="image"><br>

    </div>
    <button type="Update" class="btn btn-primary">Update</button>
  </form>
</div>

</body>
</html>
