@extends('products.layout')
@section('content')
<br>
<div class="container ">
<div class="row">
        <div class="col">
            <h4>Add new Product</h4>
        
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

    <form action="{{  route('products.store') }}" method="POST"> 
            @csrf

        <div class="row ">
            <div class=" col-xs-12 col-sm-12 col-md-12">
                <div class="form-control @error('name') is-invalid @enderror" required>
                <label for="text1"> Name</label> 
                <input id="name" name="name" type="text" class="form-control">
                </div>
            </div>
            @error('name')
            <span class="invalid-feedback"
            style="border-color: #fbe1e3;color: #e73d4a;float: left;padding-bottom: 10px; "
            role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror
    
            
            <div class=" col-xs-12 col-sm-12 col-md-12">

                <div class="form-control @error('detail') is-invalid @enderror" required>

                <label for="textarea">Detail</label> 
                <textarea id="detail" name="detail"  cols="40" rows="5" class="form-control"></textarea>
                </div> 
            </div>
            @error('detail')
            <span class="invalid-feedback"
            style="border-color: #fbe1e3;color: #e73d4a;float: left;padding-bottom: 10px; "
            role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror
        
                <div class="text-center">
                    <hr>
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-danger" href="{{ route ('products.index')  }}"> Back</a>

                </div>
       </div>
      </form>

@endsection