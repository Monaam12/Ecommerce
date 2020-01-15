@extends('admin.dashboard.app')


@section('content')
<div class="row">
    <div class="col-lg-9">
        <div class="card">
                <a href="{{route('admin.category.index')}}">
                  <button type="button" class="btn-sm btn-primary btn-sm float-right">
                  <i class="fa fa-reply"></i> Back</button>
                </a>

            <h4 class="card-header">Edit Brand To {{$category->name}}</h4>

{!! Form::model($category, ['method' => 'PATCH','route' => ['admin.category.update', $category->id]]) !!}
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
            @foreach($brands as $value)
            {{Form::radio('brand[]', $value , in_array($value->id, $brandCategory) ? true : false , array('class' => 'name'))}}
              {{ $value->name }}
              <br/>
            @endforeach
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn-sm btn-primary float-left">Update Category</button>
    </div>
</div>
{!! Form::close() !!}
</div>
</div>
</div>


@endsection
