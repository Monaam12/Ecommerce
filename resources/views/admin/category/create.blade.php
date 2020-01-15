@extends('admin.dashboard.app')

@section('content')
<div class="row">
    <div class="col-lg-10">
        <div class="card">
            <a href="{{route('admin.category.index')}}">
                <button type="button" class="btn-sm btn-primary float-right"><i class="fa fa-reply"></i> Back</button>
            </a>
            <h4 class="card-header">Create New Category</h4>

 {!! Form::open(array('route' => 'admin.category.store','method'=>'POST')) !!}
 {!! Form::token() !!}
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Brands:</strong>
            <br/>
            @foreach($brand as $value)
            <br/>
            {{Form::radio('brand[]', $value->id, false,array('class' => 'name'))}}
              {{ $value->name }}
            @endforeach
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn-sm btn-primary float-left"><i class="fa fa-plus-circle"></i> Add Category</button>
    </div>
</div>
{!! Form::close() !!}
</div>
</div>
</div>


@endsection
