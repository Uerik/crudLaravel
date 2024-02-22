<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="container text-center">
  <div class="row">
    <div class="col-4">
      
    </div>
    <div class="col-4">
    <h1>Create product</h1>
    <a href="/product">Back</a>
    @if($errors->any())
      <ul>
        @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    @endif
    <form action="{{route('product.store')}}" method="post">
        @csrf
        @method('post')
        <input class="form-control" type="text" name="name" placeholder="Name"><br>
        <input class="form-control" type="number" name="qty" placeholder="Qty"><br>
        <input class="form-control" type="text" name="price" placeholder="Price"><br>
        <input class="form-control" type="text" name="description" placeholder="Description"><br>
        <button class="btn btn-primary">Submit</button>
    </form>
    </div>
    <div class="col-4">
      
    </div>
  </div>
</div>

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>