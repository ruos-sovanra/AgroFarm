@extends('admin.main-layout')

@section('content-header')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Product</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
          <li class="breadcrumb-item active">Product</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
@endsection
@section('body')
    <!-- Main row -->
    <div class="row">
      <h1 class="text-center">Product List</h1>
    	<div class="container-fluid border py-3">
    		<a href="{{route('product.create')}}" class="btn btn-primary mb-3">Create New</a>
          <table id="example" class="table table-striped border mt-5 " style="width:100%">
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Product Name</th>
                      <th>price</th>
                      <th>Stock</th>
                      <th>Image</th>
                      <th>Edit</th>
                      <th>Delete</th>
                      
                  </tr>
              </thead>
              <tbody>
                @foreach ($products as $product)
                <tr>
                 <td>{{$product->id}}</td>
                 <td>{{$product->name}}</td>
                 <td>{{$product->price}}</td>
                 <td>{{$product->stock}}</td>
                 <td><img src="{{$product->image}}" style="width: 5rem;"></td>
                 <td>
                 <a href="{{route('product.edit', ['id' => $product->id])}}" class="btn btn-primary">Edit</a>
                   
                 </td>
                 <td>
                 <form method="post" action="{{route('product.destroy', ['id' => $product->id])}}">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete" class="btn btn-danger" />
                  </form>
                 </td>
 
                </tr>
            @endforeach
              </tbody>
          </table>
    	</div>
    	
    </div>
    <!-- /.row (main row) -->
@endsection