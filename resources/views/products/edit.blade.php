@extends('products.layout')
@section('content')
<br>
<div class="container ">
<div class="row">
        <div class="col">
            <h4>Edit Product</h4>
        
        </div>
       
    
</div>
</div>
 <!-- error message --> 
 @if ($errors->any())
 <div class="alert alert-danger">
     <strong>Whoops!</strong> There were some problems with your input.<br><br>
     <ul>
         @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>
         @endforeach
     </ul>
 </div>
@endif
 <!-- form --> 

    <form action="{{route('products.update' , $product->id) }}" method="POST"> 
            @csrf
            @method('PUT')

        <div class="row ">
            <div class=" col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <label for="text1"> Name</label> 
                <input id="name" name="name" type="text" class="form-control" value="{{ $product->name }}">
                </div>
            </div>

            <div class=" col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">
                <label for="textarea">Detail</label> 
                <textarea id="detail" name="detail"  cols="40" rows="5" class="form-control" >{{ $product->detail }}</textarea>
                </div> 
            </div>
        
                <div class="text-center">
                    <hr>
                <button name="submit" type="submit" class="btn btn-primary">UPDATE</button>
                <a class="btn btn-danger" href="{{ route ('products.index')  }}"> Back</a>

                </div>
       </div>
      </form>

@endsection