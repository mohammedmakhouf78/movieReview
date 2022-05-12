@extends('admin.index')

@section('content')
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Product</h3>
            </div>

            <form method="POST" action="{{route('admin.review.update',$review)}}">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Review</label>
                        <input type="text" name="review" value="{{$review->review}}" class="form-control" id="exampleInputEmail1">
                        @error('review')
                        <p class="text-danger"> {{$message}}</p>
                        @enderror()

                        <label>Rate</label>
                        <select class="form-control" name="rate">
                            <option ></option>
                            <option value="0" {{$review->rate == 0 ? "selected" : " "}}>0</option>
                            <option value="1" {{$review->rate == 1 ? "selected" : " "}}>1</option>
                        </select>


                        <div class="form-group">
                            <label>Product</label>
                            <select class="form-control" name="category_id" value="{{$review->product_id}}">
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
                            <select class="form-control" name="user_id" value="{{$review->user_id}}">
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
