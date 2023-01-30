@extends('products.layout')
@section('content')
<br>
<div class="container ">
    <div class="row">
            <div class="col">
                <h4>Show Product</h4>
            
            </div>
           
        
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $product->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Details:</strong>
            {{ $product->detail }}
        </div>
    </div>
</div>
<a class="btn btn-danger" href="{{ route ('products.index')  }}"> Back</a>

@endsection