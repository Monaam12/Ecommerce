@extends('admin.dashboard.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
@can('create-role')
                    <a href="{{route('admin.product.create')}}">
                        <button type="button" class="btn-sm btn-primary float-right"><i class="fa fa-plus-circle"></i> Create New Product</button>
                    </a>
@endcan
                <h4 class="card-header"><i class="zmdi zmdi-account-calendar"></i> PRODUCT</h4>

                <div class="card-body">

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Tax</th>
                            <th scope="col">Description</th>
                            <th scope="col">Code</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Category</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <th scope="row">{{$product->id}}</th>
                                <td>{{$product->image}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->tax}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->product_code}}</td>
                                <td>{{$product->qty}}</td>
                                <td>{{implode(', ',$product->category()->get()->pluck('name')->toArray())}}</td>
                                <td>
                                 <div class="table-data-feature">

                                 <a href="{{route('admin.product.edit',$product->id)}}">
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="zmdi zmdi-edit"></i></button>
                                 </a>


                                 <form action="{{route('admin.product.destroy',$product)}}" method="POST" class="float-left">
                                    @method('DELETE')
                                    @csrf
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="zmdi zmdi-delete"></i></button>
                                 </form>

                                 </div>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
    {{ $products->links() }}
@endsection
