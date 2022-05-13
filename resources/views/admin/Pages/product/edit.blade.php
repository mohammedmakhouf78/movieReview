@extends('admin.index')

@section('content')
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Product</h3>
            </div>

            <form method="POST" action="{{route('admin.product.update',$product)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" value="{{$product->name}}" class="form-control" id="exampleInputEmail1">
                        @error('name')
                        <p class="text-danger"> {{$message}}</p>
                        @enderror()

                        <label for="exampleInputEmail1">Price</label>
                        <input type="text" name="price" value="{{$product->price}}" class="form-control" id="exampleInputEmail1">
                        @error('price')
                        <p class="text-danger"> {{$message}}</p>
                        @enderror()

                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control" id="image">
                        @error('image')
                        <p class="text-danger"> {{$message}}</p>
                        @enderror()

                        <div class="form-group" >
                            <textarea class="ckeditor form-control" name="description">{{$product->description}}</textarea>
                            @error('description')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror()
                        </div>

                        
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="is_approved" {{$product->is_approved == true ? "checked":" "}} value="1" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Is_Approved</label>
                        </div>

                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control" name="category_id" value="{{$product->category_id}}">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach()
                            </select>
                        </div>
                        @error('category_id')
                        <p class="text-danger"> {{$message}}</p>
                        @enderror()

                        <div class="form-group">
                            <label>User</label>
                            <select class="form-control" name="user_id" value="{{$product->user_id}}">
                                @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach()
                            </select>
                        </div>


                    </div>
                    @error('user_id')
                    <p class="text-danger"> {{$message}}</p>
                    @enderror()
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>
        <!-- /.card -->

    </div>

@endsection
