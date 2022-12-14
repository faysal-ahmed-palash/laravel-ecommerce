@extends('layouts.admin')

@section('admin_content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            	<button class="btn btn-primary" data-toggle="modal" data-target="#categoryModal"> Add New</button>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Category</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>SL</th>
                    <th>Category Name</th>
                    <th>Category Slug</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($data as $key=>$row)
                  <tr>
                    <td>{{ ++$key}}</td>
                    <td>{{ $row->category_name}}</td>
                    <td>{{ $row->category_slug}}</td>
                    <td>
                    	<a href="" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                    	<a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>

                    </td>
                  </tr>
                  @endforeach
              	</tbody>
                </table>
              </div>
          </div>
      </div>
  </div>
</div>
</section>



</div>




// modal category
<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
<form method="POST" action="{{ route('category.store')}}">
@csrf     
 <div class="modal-body">
        

  <div class="form-group">
    <label for="exampleInputEmail1">Category Name</label>
    <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Enter category name" required>
  </div>
  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>






@endsection