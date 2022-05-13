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
                                    <h3>Register Today</h3>
                                    <p>Fill in the data below.</p>
                                    <form class="requires-validation" novalidate method="POST" action="{{route('home.register')}}">
                                        @csrf
                                          <div class="col-md-12">
                                                <input class="form-control" type="text" name="name" placeholder="Full Name"
                                                      required>
                                                @error('name')
                                                      <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                          </div>

                                          <div class="col-md-12">
                                                <input class="form-control" type="email" name="email"
                                                      placeholder="E-mail Address" required>
                                                @error('email')
                                                      <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                          </div>

                                          <div class="col-md-12">
                                                <input class="form-control" type="password" name="password"
                                                      placeholder="Password" required>
                                                @error('password')
                                                      <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                          </div>

                                          <div class="col-md-12">
                                                <input class="form-control" type="password" name="password_confirmation"
                                                      placeholder="Password" required>
                                                @error('confirm_password')
                                                      <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                          </div>

                                          <div class="col-md-12 mb-5">
                                                <select name="type" class="form-select mt-3" required>
                                                      <option selected disabled value="0">Type</option>
                                                      <option value="viewer">Viewer</option>
                                                      <option value="editor">Editor</option>
                                                </select>
                                                @error('type')
                                                      <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                                <div class="invalid-feedback" style="visibility: hidden"> asdfsaf </div>
                                          </div>


                                          <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary">Register</button>
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
