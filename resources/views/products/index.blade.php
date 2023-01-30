@extends('products.layout')
@section('content')
<br>
<div class="container ">
    <div class="row">
            <div class="col">
                <h4>Laravel CRUD example</h4>
            
            </div>
           
        
    </div>
</div>
<!-- friendly mssg -->
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered">
    <thead  class="thead-dark">

        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Detail</th>
            <th scope="col" width="280px">Actions</th>
        </tr>

    </thead>
    <tbody>
        @foreach ($products as $product)

        <tr>
          <td>{{ $product->id }}</td>
          <td>{{ $product->name }}</td>
          <td>{{ $product->detail }}</td>
          <td>  
        <form action="{{ route('products.destroy',$product->id) }}" method="POST">
            <a class="btn btn-info" href="{{ route('products.show' , $product->id) }}"> SHOW</a>
            <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}"> EDIT</a>
            @csrf
            @method('DELETE')
            <a class="btn btn-danger" href="{{ route('products.destroy',$product->id) }}"> DELETE</a>
        </form>
            </td>
        </tr>
       @endforeach
      </tbody>

</table>
<!-- show the pagination in the view page-->
{{ $products->links() }}

<div class="text-center">
    <hr>
<a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
</div>
@endsection