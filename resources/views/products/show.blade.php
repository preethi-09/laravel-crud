@extends('products.layout')
  
@section('content')
<center>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3> Show Product</h3><br>
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
            </div><br>
        </div>

         
    </div>
    <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
    </center>
@endsection