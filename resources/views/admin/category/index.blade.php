@extends('admin.main-layout')

@section('content-header')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Category</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
          <li class="breadcrumb-item active">Category</li>
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
      <h1 class="text-center">Category List</h1>
    	<div class="container-fluid border py-3">
    		<a href="{{route('category.create')}}" class="btn btn-primary mb-3">Create New</a>
          <table id="example" class="table table-striped border mt-5 " style="width:100%">
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Category Name</th>
                      <th>Slug</th>
                      <th>Image</th>
                      <th>Edit</th>
                      <th>Delete</th>
                      
                  </tr>
              </thead>
              <tbody>
                @foreach ($categories as $category)
                <tr>
                 <td>{{$category->id}}</td>
                 <td>{{$category->name}}</td>
                 <td>{{$category->slug}}</td>
                 <td><img src="{{$category->image}}" style="width: 5rem;"></td>
                 <td>
                 <a href="{{route('category.edit', ['id' => $category->id])}}" class="btn btn-primary">Edit</a>
                   
                 </td>
                 <td>
                 <form method="post" action="{{route('category.destroy', ['id' => $category->id])}}">
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