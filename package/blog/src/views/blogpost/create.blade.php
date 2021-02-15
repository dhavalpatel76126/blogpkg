<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <title>Create Post</title>
</head>
    <body>

      <div style="width: 500px; margin: 0 auto; margin-top: 90px;">
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

      <h3>Post</h3>

      <form action="{{route('category')}}" method="POST">
          @csrf
          <div class="form-group">
            <label for="exampleFormControlInput1">Title</label>
            <input type="text" class="form-control" name="title" id="exampleFormControlInput" placeholder="Title">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Sub title</label>
            <input type="text" class="form-control" name="subtitle" id="exampleFormControlInput" placeholder="Sub Title">
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Meta description</label>
            <textarea class="form-control"name="metadescription" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Post body</label>
            <textarea class="form-control"name="postbody" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
     </form>
    </div>
</body>
</html>
<script>
  CKEDITOR.replace( 'postbody', {
      filebrowserUploadUrl: "{{route('blogpost', ['_token' => csrf_token() ])}}",
      filebrowserUploadMethod: 'form'
  });
</script>