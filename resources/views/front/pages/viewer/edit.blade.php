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
                                    <h3>Edit Viewer Personal Data</h3>
                                    <p>Fill in the data below.</p>
                                    <form class="requires-validation" novalidate method="POST" enctype="multipart/form-data" action="{{route('home.viewer.update',$user->id)}}">
                                        @csrf
                                          <div class="col-md-12">
                                                <input class="form-control" type="email" name="email"
                                                      placeholder="E-mail Address" value="{{$user->email}}">
                                                @error('email')
                                                      <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                          </div>

                                          <div class="col-md-12">
                                                <input class="form-control" type="text" name="name"
                                                      placeholder="Name" value="{{$user->name}}">
                                                @error('name')
                                                      <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                          </div>

                                          <div class="col-md-12">
                                                <input class="form-control" type="text" name="phone"
                                                      placeholder="phone" value="{{$user->phone}}">
                                                @error('phone')
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
