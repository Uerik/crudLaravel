<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Project</title>
</head>
<body>
    <h1>Products</h1>
    <div>
        @if(session()->has('success'))
        <p>{{session('success')}}</p>
        @endif
    </div>
    <a href="/product/create"> blah</a>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
           @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->qty}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td>
                    <a href="{{route('product.edit',[$product])}}">Edit</a>
                </td>
                <td>
                    <form action="{{route('product.destroy', [$product])}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" name="" value="Delete">
                    </form>
                </td>
            </tr>
           @endforeach
        </tbody>
    </table>
</body>
</html>