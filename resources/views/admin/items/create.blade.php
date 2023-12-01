@extends('layouts.index')

@section('content')
	
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
        	 <div class="card">
              <div class="card-body">
                <h4 class="card-title">Add Items</h4>
                <form class="forms-sample" enctype="multipart/form-data" method="POST" action="{{ route('items.save') }}">

                  @csrf
                  <div class="form-group text-center">
                    <label for="order">Product</label>
                    <div class="col-md-4 mx-auto">
                    <select name ="product" class="form-control col-m-4" id="product">
                    <option value =""></option>
                    <option value ="Sling">Sling</option>
                    <option value ="Banana">Banana</option>
                    <option value ="Blue Book">Blue Book</option>
                    <option value ="PE Uniform F">PE Uniform F</option>
                    <option value ="PE Uniform M">PE Uniform M</option>
                    <option value ="Fabric of Uniform">Fabric of Uniform</option>
                    <option value ="Tray of Eggs">Tray of Eggs</option>
                    <option value ="Beans Seedling">Beans Seedling</option>
                    <option value ="Ladys Finger Seedling">Ladys Finger Seedling</option>

                    </select>
                    </div>
                  <div class="form-group text-center">
                    <label for="size">Size</label>
                    <div class="col-md-4 mx-auto">
                    <select name ="size" id="size" class="form-control col-m-4" id="size">
                    <option value =""></option>
                    <option value ="S">S</option>
                    <option value ="M">M</option>
                    <option value ="L">L</option>
                    <option value ="XL">XL</option>
                    <option value ="XXL">XXL</option>
                    </select>
                  </div>

                  <div class="form-group text-center">
                    <label for="price">Price</label>
                    <div class="col-md-4 mx-auto">
                    <select name ="price" id="price" class="form-control col-m-4" id="price">
                    <option value =""></option>
                    <option value ="500">500</option>
                    <option value ="600">600</option>
                    <option value ="350">250</option>
                    <option value ="50">50</option>
                  </div>

                  <div class="form-group text-center">
                    <label for="quantity">Quantity</label>
                    <div class="col-md-4 mx-auto">
                    <select name ="quantity" id="quantity" class="form-control col-m-4" id="quantity">
                    <option value =""></option>
                    <option value ="1">1</option>
                    <option value ="2">2</option>
                    <option value ="3">3</option>
                    <option value ="4">4</option>
                    <option value ="5">5</option>
                    </select>
                  </div>

                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button class="btn btn-light">Cancel</button>
                </form>
              </div>

            </div>
      	</div>
      </div>
  </div>
@endsection

