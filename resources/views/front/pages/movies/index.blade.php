@extends('front.master')

@section('css')
      <link rel="stylesheet" href="{{ asset('css/movies.css') }}">
@endsection
@section('content')
      <div class="latest-posts text-center">

            <div class="row">
                  <h1
                        style="margin-top: 30px;margin-bottom: 50px;text-align: center; color: #DE0A0A; font-weight: bolder; letter-spacing: 0.2em;">
                        Recent Movies
                  </h1>

                  @foreach ($movies as $movie)
                        <div class="col-md-3 col-sm-6 mb-5">
                              <div class="card">
                                    <img src="{{asset('images/' . $movie->image)}}" class="card-img-top " alt="...">
                                    <h4 class="card-title">{{$movie->name}}</h4>
                                    <h4 class="card-title">By :{{$movie->user->name ?? ""}}</h4>
                                    <a href="{{route('home.movies.show',$movie)}}" class="card-link">
                                          <button class="but">Show Movie</button></a>
                              </div>
                        </div>
                  @endforeach
            </div>
      </div>
@endsection
