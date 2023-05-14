@extends('front.master')

@section('css')
      <link rel="stylesheet" href="{{ asset('css/makeReview.css') }}">
@endsection
@section('content')
      <div class="page">

            <div class="content">
                  <div class="row">
                        <div class="col-md-6">
                              <figure class="movie-poster"><img style="width: 100%"
                                          src="{{ asset('images/' . $product->image) }}" alt="#"></figure>
                        </div>
                        <div class="col-md-6">
                              <h2 class="movie-title">{{ $product->name }}</h2>
                              <div class="movie-summary">
                                    {!! $product->description !!}
                              </div>
                              <ul class="movie-meta">
                                    <li><strong>Category:</strong> {{ $product->category->name ?? '' }}</li>
                                    <li><strong>User:</strong> {{ $product->user->name ?? '' }}</li>
                              </ul>
                            <h2 class="movie-title">
                                Rate :
                                @if($avg >= 2.5)
                                    <span class="text-success">{{$avg}}</span>
                                @else
                                    <span class="text-danger">{{$avg}}</span>
                                @endif
                                @if($avg >= 0 && $avg <= 1)
                                @elseif($avg > 1 && $avg <= 2)
                                @elseif($avg > 2 && $avg <= 3)
                                @elseif($avg > 3 && $avg <= 4)
                                @endif
                            </h2>
                        </div>
                  </div> <!-- .row -->
                  <div class="entry-content">
                        <div class="row d-flex justify-content-left">
                              <div class="col">
                                    <div class="card bg-dark text-light">
                                          <div class="p-2 text-center" style="font-size: 1.5em">
                                                <h4 class="mb-0">Recent Reviews</h4>
                                                <p class="fw-light mb-4 pb-2">Latest Reviews section by users</p>
                                          </div>
                                          @foreach ($product->reviews as $review)
                                                <div class="card-body p-4">
                                                      <div class="row d-flex flex-start align-items-center">
                                                          <div class="col-10">
                                                              <img class="rounded-circle shadow-1-strong me-3"
                                                                   src="{{asset('images/' . ($review->user->image ?? "") ) }}"
                                                                   alt="avatar" width="60" height="60" />
                                                              <div>
                                                                  <h6 class="fw-bold mb-1">{{$review->user->name ?? ""}}</h6>
                                                                  <div class="d-flex align-items-center mb-3">
                                                                      <p class="mb-0">
                                                                          {{$review->created_at}}
                                                                      </p>
                                                                  </div>
                                                                          <p class="mb-0">
                                                                              {{$review->review}}
                                                                          </p>

                                                              </div>
                                                          </div>
                                                          <div class="col-2">
                                                              @if($review->rate == 1)
                                                                  <p class="text-success">
                                                                      Positive
                                                                      <svg style="width: 30px" class="rating-4"
                                                                           xmlns="http://www.w3.org/2000/svg"
                                                                           viewBox="0 0 512 512">
                                                                          <circle cx="256" cy="256" r="256" fill="#ffd93b">
                                                                          </circle>
                                                                          <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z"
                                                                                fill="#f4c534"></path>
                                                                          <path d="M232.3 201.3c0 49.2-74.3 94.2-74.3 94.2s-74.4-45-74.4-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z"
                                                                                fill="#e24b4b"></path>
                                                                          <path d="M96.1 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2C80.2 229.8 95.6 175.2 96 173.3z"
                                                                                fill="#d03f3f"></path>
                                                                          <path d="M215.2 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z"
                                                                                fill="#fff"></path>
                                                                          <path d="M428.4 201.3c0 49.2-74.4 94.2-74.4 94.2s-74.3-45-74.3-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z"
                                                                                fill="#e24b4b"></path>
                                                                          <path d="M292.2 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2-77.8-65.7-62.4-120.3-61.9-122.2z"
                                                                                fill="#d03f3f"></path>
                                                                          <path d="M411.3 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z"
                                                                                fill="#fff"></path>
                                                                          <path d="M381.7 374.1c-30.2 35.9-75.3 64.4-125.7 64.4s-95.4-28.5-125.8-64.2a17.6 17.6 0 0 1 16.5-28.7 627.7 627.7 0 0 0 218.7-.1c16.2-2.7 27 16.1 16.3 28.6z"
                                                                                fill="#3e4347"></path>
                                                                          <path d="M256 438.5c25.7 0 50-7.5 71.7-19.5-9-33.7-40.7-43.3-62.6-31.7-29.7 15.8-62.8-4.7-75.6 34.3 20.3 10.4 42.8 17 66.5 17z"
                                                                                fill="#e24b4b"></path>
                                                                      </svg>
                                                                  </p>
                                                              @else
                                                                <p class="text-danger">
                                                                    Negative
                                                                    <svg style="width: 30px" class="rating-1"
                                                                                  xmlns="http://www.w3.org/2000/svg"
                                                                                  viewBox="0 0 512 512">
                                                                        <circle cx="256" cy="256" r="256" fill="#ffd93b">
                                                                        </circle>
                                                                        <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z"
                                                                              fill="#f4c534"></path>
                                                                        <path d="M328.4 428a92.8 92.8 0 0 0-145-.1 6.8 6.8 0 0 1-12-5.8 86.6 86.6 0 0 1 84.5-69 86.6 86.6 0 0 1 84.7 69.8c1.3 6.9-7.7 10.6-12.2 5.1z"
                                                                              fill="#3e4347"></path>
                                                                        <path d="M269.2 222.3c5.3 62.8 52 113.9 104.8 113.9 52.3 0 90.8-51.1 85.6-113.9-2-25-10.8-47.9-23.7-66.7-4.1-6.1-12.2-8-18.5-4.2a111.8 111.8 0 0 1-60.1 16.2c-22.8 0-42.1-5.6-57.8-14.8-6.8-4-15.4-1.5-18.9 5.4-9 18.2-13.2 40.3-11.4 64.1z"
                                                                              fill="#f4c534"></path>
                                                                        <path d="M357 189.5c25.8 0 47-7.1 63.7-18.7 10 14.6 17 32.1 18.7 51.6 4 49.6-26.1 89.7-67.5 89.7-41.6 0-78.4-40.1-82.5-89.7A95 95 0 0 1 298 174c16 9.7 35.6 15.5 59 15.5z"
                                                                              fill="#fff"></path>
                                                                        <path d="M396.2 246.1a38.5 38.5 0 0 1-38.7 38.6 38.5 38.5 0 0 1-38.6-38.6 38.6 38.6 0 1 1 77.3 0z"
                                                                              fill="#3e4347"></path>
                                                                        <path d="M380.4 241.1c-3.2 3.2-9.9 1.7-14.9-3.2-4.8-4.8-6.2-11.5-3-14.7 3.3-3.4 10-2 14.9 2.9 4.9 5 6.4 11.7 3 15z"
                                                                              fill="#fff"></path>
                                                                        <path d="M242.8 222.3c-5.3 62.8-52 113.9-104.8 113.9-52.3 0-90.8-51.1-85.6-113.9 2-25 10.8-47.9 23.7-66.7 4.1-6.1 12.2-8 18.5-4.2 16.2 10.1 36.2 16.2 60.1 16.2 22.8 0 42.1-5.6 57.8-14.8 6.8-4 15.4-1.5 18.9 5.4 9 18.2 13.2 40.3 11.4 64.1z"
                                                                              fill="#f4c534"></path>
                                                                        <path d="M155 189.5c-25.8 0-47-7.1-63.7-18.7-10 14.6-17 32.1-18.7 51.6-4 49.6 26.1 89.7 67.5 89.7 41.6 0 78.4-40.1 82.5-89.7A95 95 0 0 0 214 174c-16 9.7-35.6 15.5-59 15.5z"
                                                                              fill="#fff"></path>
                                                                        <path d="M115.8 246.1a38.5 38.5 0 0 0 38.7 38.6 38.5 38.5 0 0 0 38.6-38.6 38.6 38.6 0 1 0-77.3 0z"
                                                                              fill="#3e4347"></path>
                                                                        <path d="M131.6 241.1c3.2 3.2 9.9 1.7 14.9-3.2 4.8-4.8 6.2-11.5 3-14.7-3.3-3.4-10-2-14.9 2.9-4.9 5-6.4 11.7-3 15z"
                                                                              fill="#fff"></path>
                                                                    </svg>
                                                                </p>
                                                              @endif
                                                          </div>

                                                      </div>
                                                </div>

                                                <hr class="my-0" />
                                          @endforeach

                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="entry-content">
                        <div class="make-review text-center">
                              <h1
                                    style="text-align: left; color: rgba(246, 69, 69, 0.766) ; margin-top: 30px;  margin-bottom: 20px;">
                                    Make Review
                              </h1>
                              <form action="{{ route('home.review.create') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id ?? "" }}">
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <textarea class="txt-area" placeholder="What is Your Review ?" rows="7" cols="8" name="review"></textarea>
                                    <button type="submit" style="font-size: 20px; font-weight: bolder; margin-top: 30px;
                                        margin-bottom: 20px; ">Submit Review</button>
                              </form>


                        </div>
                  </div>
            </div>
      </div>
@endsection
