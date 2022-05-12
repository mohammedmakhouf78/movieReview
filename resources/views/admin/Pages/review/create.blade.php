@extends('admin.index')

@section('content')
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create New Review</h3>
            </div>

            <form method="POST" action="{{route('admin.review.store')}}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Review</label>
                        <input type="text" name="review" class="form-control" id="exampleInputEmail1">
                        @error('name')
                        <p class="text-danger"> {{$message}}</p>
                        @enderror()

                        <label>Rate</label>
                        <select class="form-control" name="rate">
                            <option ></option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                        </select>

                        <div class="form-group">
                            <label>Product</label>
                            <select class="form-control" name="product_id">
                                @foreach($products as $product)
                                    <option value="{{$product->id}}">{{$product->name}}</option>
                                @endforeach()
                            </select>
                            @error('product_id')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror()
                        </div>

                        <div class="form-group">
                            <label>User</label>
                            <select class="form-control" name="user_id">
                                @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach()
                            </select>
                            @error('user_id')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror()
                        </div>

                    </div>


                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>
        <!-- /.card -->

    </div>
@endsection
