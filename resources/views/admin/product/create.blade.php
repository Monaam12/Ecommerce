@extends('admin.dashboard.app')

@section('content')
<div class="row">
    <div class="col-lg-10">
        <div class="card">
            <a href="{{route('admin.product.index')}}">
                <button type="button" class="btn-sm btn-primary float-right"><i class="fa fa-reply"></i> Back</button>
            </a>
            <h4 class="card-header">Create New Product</h4>

 {!! Form::open(array('route' => 'admin.product.store','method'=>'POST')) !!}
 {!! Form::token() !!}
    <div class="col-xs-5 col-sm-5 col-md-8">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Image:</strong>
            {!! Form::file('image') !!}
        </div>


        <div class="form-group">
                <strong>Price:</strong>
                {!! Form::number('price', null, array('placeholder' => 'Price','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
                <strong>Tax:</strong>
                {!! Form::number('tax', null, array('placeholder' => 'Tax','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
                <strong>Description:</strong>
                {!! Form::text('description', null, array('placeholder' => 'Description','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
                <strong>Code:</strong>
                {!! Form::number('product_code', null, array('placeholder' => 'Product Code','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
                <strong>Quantity:</strong>
                {!! Form::number('qty', null, array('placeholder' => 'Quantity','class' => 'form-control')) !!}
        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Category:</strong>
            <select class="form-control" name="category[]">
                @foreach ($categories as $item)
                <option>{{$item->name}}</option>
                @endforeach
              </select>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn-sm btn-primary float-left"><i class="fa fa-plus-circle"></i> Add Product</button>
    </div>
</div>
{!! Form::close() !!}
</div>
</div>
</div>


@endsection
