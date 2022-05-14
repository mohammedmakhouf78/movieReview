@extends('front.master')

@section('css')
      <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
@endsection

@section('content')
      <div class="form-body">
            <div class="row" style="width: 60%; margin:0 auto">
                  <div class="form-holder">
                        <div class="form-content">
                              <div class="form-items">
                                    <h3>Edit a Movie</h3>
                                    <p>Fill in the data below.</p>
                                    <form class="requires-validation" novalidate method="POST" enctype="multipart/form-data" action="{{route('home.editor.movieUpdate' , $product)}}">
                                        @csrf
                                        @method('PUT')

                                        <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                          <div class="col-md-12">
                                                <input class="form-control" type="text" name="name"
                                                      placeholder="Name" value="{{$product->name}}">
                                                @error('name')
                                                      <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                          </div>


                                          <div class="col-md-12 mt-5">
                                                <textarea class="form-control" type="text" name="description"
                                                      placeholder="description"> {{$product->description}} </textarea>
                                                @error('description')
                                                      <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                          </div>


                                          <div class="col-md-12">
                                                <input class="form-control" type="file" name="image"
                                                      placeholder="image">
                                                @error('image')
                                                      <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                          </div>

                                          <div class="col-md-12 mb-5">
                                                <select name="category_id" class="form-select mt-3" required>
                                                      <option selected disabled value="0">Choose Category</option>
                                                      @foreach ($categories as $category)
                                                          <option value="{{$category->id}}" {{$category->id == $product->category_id ? "selected" : ""}}>{{$category->name}}</option>
                                                      @endforeach
                                                </select>
                                                @error('category_id')
                                                      <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                                <div class="invalid-feedback" style="visibility: hidden"> asdfsaf </div>
                                          </div>

                                          <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                          </div>
                                    </form>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
@endsection


@section('script')
      <script></script>
@endsection
