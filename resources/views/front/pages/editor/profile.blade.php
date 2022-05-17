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
                                                href="{{ route('home.editor.edit', Auth::user()->id) }}">Edit</a>
                                    </div>
                                    <div class="col">
                                          <a class="btn btn-primary " target="__blank"
                                                href="{{ route('home.editor.movieCreate') }}">Create Movie</a>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>


            <div class="col">
                  <table class="table table-dark table-striped">
                        <thead>
                              <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Is Approved</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                              </tr>
                        </thead>
                        <tbody>
                              @foreach ($movies as $movie)
                              <tr>
                                    <th scope="row">{{$movie->id}}</th>
                                    <td>{{$movie->name}}</td>
                                    <td>{!! $movie->description !!}</td>
                                    <td>
                                          <img width="200px" src="{{asset('images/' . $movie->image)}}" alt="">
                                    </td>
                                    <td>{{$movie->category->name ?? ""}}</td>

                                    @if($movie->is_approved == false)
                                    <td>
                                          <button class="btn btn-danger">No</button>
                                    </td>
                                    @else
                                    <td>
                                          <button class="btn btn-success">Yes</button>
                                    </td>
                                    @endif

                                    <td>
                                          <form method="get" action="{{route('home.editor.movieEdit',$movie)}}">
                                              @csrf
                                              <button type="submit" class="btn btn-success">
                                                  <i class="fa fa-edit"></i>
                                              </button>
                                          </form>
                                      </td>
                                      <td>
                                          <form method="POST" action="{{route('home.editor.movieDelete',$movie)}}">
                                              @csrf
                                              @method('DELETE')
                                              <button type="submit" class="btn btn-danger">
                                                  <i class="fa fa-trash"></i>
                                              </button>
                                          </form>
                                      </td>
                              </tr>
                              @endforeach
                        </tbody>
                  </table>
            </div>



      </div>
@endsection


@section('script')
      <script></script>
@endsection
