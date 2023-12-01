@extends('layouts.index')

@section('content')

  <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
          <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-home"></i>
        </h3>
        <nav aria-label="breadcrumb">
          
        </nav>
      </div>
        <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
          <a href="{{ route('items.create') }}" class="btn btn-primary btn-icon-text">
                          <i class="ti-file btn-icon-prepend"></i>Add Items</a>

          </div>
           <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
          <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-home"></i>

          </span> List of Items
        </h3>
      </div>
        <div class="row">
      </div><div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">IGP of SLSU Bontoc,Southern Leyte</h4>
                  <p class="card-description">
                    <code></code>
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Product</th>
                          <th>Size</th>
                          <th>Price</th>
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($items as $item)
                      <tr>
                          <td>{{ $item->id }}</td>
                          <td>{{ $item->product }}</td>
                          <td>{{ $item->size }}</td>
                          <td>{{ $item->price }}</td>
                          <td>
                            <a href="{{ route('items.view', ['id'=> $item->id]) }}">View</a>
                            <a href="{{ route('items.delete', ['id'=> $item->id]) }}">Delete</a>
                            <a href="{{ route('items.edit', ['id'=> $item->id]) }}">Edit</a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  <div class="d-flex justify-content-center">
                    {!! $items->links() !!}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection

