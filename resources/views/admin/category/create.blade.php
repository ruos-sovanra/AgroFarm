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
      <h1 class="text-center">Category</h1>
    	<div class="container-fluid border py-3">
    		<form method="post" action="{{route('category.store')}}" enctype="multipart/form-data">
          @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Category Name:</strong>
                        <input type="text" name="name" class="form-control" placeholder="Category Name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Slug:</strong>
                        <input type="text" name="slug" class="form-control" placeholder="Slug">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Image:</strong>
                        <input type="file" name="image" class="form-control" placeholder="image">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Description:</strong>
                      <textarea class="form-control" style="height:150px" name="description" placeholder="Description"></textarea>
                  </div>
              </div>
                
              
                <div class="col-xs-12 col-sm-12 col-md-12 mt-3 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            
        </form>
    	</div>
    	
    </div>
    <!-- /.row (main row) -->
@endsection