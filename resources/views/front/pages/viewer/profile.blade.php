@extends('front.master')

@section('css')
      <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
      <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                  <div class="card">
                        <div class="card-body">
                              <div class="d-flex flex-column align-items-center text-center" style="text-align: center">
                                    <img src="{{ asset('images/' . Auth::user()->image) }}" alt="Admin" class="rounded-circle"
                                          width="150">
                                    <div class="mt-3">
                                          <h4>{{ Auth::user()->name }}</h4>
                                          <p class="text-secondary mb-1">Editor on Movies</p>
                                          <p class="text-muted font-size-sm">{{ Auth::user()->phone }}</p>
                                          <p class="text-muted font-size-sm">{{ Auth::user()->email }}</p>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
            <div class="col-md-8">
                  <div class="card mb-3">
                        <div class="card-body">
                              <div class="row">
                                    <div class="col-sm-3">
                                          <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                          {{ Auth::user()->name }}
                                    </div>
                              </div>
                              <hr>
                              <div class="row">
                                    <div class="col-sm-3">
                                          <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                          {{ Auth::user()->email }}
                                    </div>
                              </div>
                              <hr>
                              <div class="row">
                                    <div class="col-sm-3">
                                          <h6 class="mb-0">Phone</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                          {{ Auth::user()->phone }}
                                    </div>
                              </div>
                              <hr>
                              <div class="row">
                                    <div class="col">
                                          <a class="btn btn-primary " target="__blank"
                                                href="{{ route('home.viewer.edit', Auth::user()->id) }}">Edit</a>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>

      </div>
@endsection

