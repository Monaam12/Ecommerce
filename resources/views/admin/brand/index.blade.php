@extends('admin.dashboard.app')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="card">
@can('create-role')
                    <a href="{{route('admin.brand.create')}}">
                        <button type="button" class="btn-sm btn-primary float-right"><i class="fa fa-plus-circle"></i> Create New Brand</button>
                    </a>
@endcan
                <h4 class="card-header"><i class="zmdi zmdi-account-calendar"></i> BRAND PRODUCT</h4>

                <div class="card-body">

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($brands as $brand)
                            <tr>
                                <th scope="row">{{$brand->id}}</th>
                                <td>{{$brand->name}}</td>

                                <td>
                                 <div class="table-data-feature">

                                 <a href="{{route('admin.brand.edit',$brand->id)}}">
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="zmdi zmdi-edit"></i></button>
                                 </a>


                                 <form action="{{route('admin.brand.destroy',$brand)}}" method="POST" class="float-left">
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
    {{ $brands->links() }}
@endsection
