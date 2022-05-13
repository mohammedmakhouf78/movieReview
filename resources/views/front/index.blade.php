@extends('front.master')

@section('content')
      <h1
            style="margin-top: 20px;margin-bottom: 50px;text-align: center; color: #DE0A0A; font-weight: bolder; letter-spacing: 0.2em;">
            Latest Movies
      </h1>
      <div class="row">
            <div class="col-md-9">
                  <div class="slider">
                        <ul class="slides">
                              @foreach ($first as $index => $product)
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('images/' . $product->image) }}" alt="Slide {{ ++$index }}" style="height: 520px;">
                                        </a>
                                    </li>
                              @endforeach
                        </ul>
                  </div>
            </div>
            <div class="col-md-3">
                  <div class="row">
                      @foreach ($second as $index => $product)
                        <div class="col-sm-6 col-md-12">
                            <div class="latest-movie">
                                <a href="#"><img src="{{ asset('images/' . $product->image) }}"
                                            style="width: 270px; height: 244px;" alt="Movie {{++$index}}"></a>
                            </div>
                        </div>
                      @endforeach
                  </div>
            </div>
      </div> <!-- .row -->
      <div class="row">
          @foreach ($third as $product)
            <div class="col-sm-6 col-md-3">
                    <div class="latest-movie">
                        <a href="#"><img src="{{ asset('images/' . $product->image) }}"
                                    style="width: 270px; height: 244px;" alt="Movie 3"></a>
                    </div>
            </div>
          @endforeach

      </div> <!-- .row -->

      <br />
      <br />
      <h1
            style="margin-top: 30px;margin-bottom: 30px;text-align: center; color: #DE0A0A; font-weight: bolder; letter-spacing: 0.2em;">
            Making Reviews
      </h1>
      <p class="txt">Writing a movie review is a great way to express your opinion of a movie.
            The
            purpose of most movie reviews is to help readers determine if they want to
            watch, rent, or buy the movie. The review should give enough details about the
            movie so that the reader can make an informed decision, without giving anyway
            any essentials such as the plot or any surprises.
            <br />
            <br />
            views analyze the effectiveness of the plot, theme, acting, direction, special
            effects, musical effects, cinematography, and all other elements that created the
            movie. There are qualities and guidelines that a critique of a movie should
            possess. Avoid the use of generalized opinions such as “it was a great movie” or
            “the acting was horrible,” but rather give specific reasons and the whys.
      </p>

      <br />
      </br>
      <h1 style="margin-top: 20px;text-align: center; color: #DE0A0A; font-weight: bolder; letter-spacing: 0.2em;">
            Latest Reviews
      </h1>
      <div class="reviews">

            <div class='container mx-auto mt-5 col-md-10  col-11 col-sm-12 text-center '
                  style="text-align: center; align-items: center; margin-left: 0%;  position:relative;transform:  translate(10%, 5%);">

                  <div class="row" style="justify-content: center">
                        <div class="card col-md-4 col-11">
                              <div class="card-content text-center">
                                    <div class="card-body p-0">
                                          <div class="profile mb-4 mt-3"> <img src="https://i.imgur.com/Ur43esv.jpg">
                                          </div>
                                          <br />
                                          <h4 style="color: #DE0A0A;" id="rvu1"> Movie Name : Godzilla</h4>
                                          <div class="card-subtitle">
                                                <p> <small class="text-muted"> <i class="fa fa-quote-left"></i>
                                                            the movie has spectacle and some genuinely
                                                            outstanding battle
                                                            moments, but they're dragged down by a weak
                                                            story, silly
                                                            dialogue, and dull plotting <i class="fa fa-quote-right"></i>
                                                      </small>
                                                </p>
                                          </div>

                                          <div class="ratings"> <i class="fa fa-star"></i> <i
                                                      class="fa fa-star"></i>


                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="card col-md-4 col-11 second">
                              <div class="card-content">
                                    <div class="card-body p-0">
                                          <div class="profile mb-4 mt-3"> <img src="https://i.imgur.com/8RKXAIV.jpg">
                                          </div>
                                          <Br />
                                          <h4 style="color: #DE0A0A;" id="rvu2"> Movie Name : Maleficent
                                          </h4>
                                          <div class="card-subtitle">
                                                <p> <small class="text-muted"> <i class="fa fa-quote-left  "></i>
                                                            Undoubtedly, Jolie's performance will be touted
                                                            as elegantly
                                                            evil, but it's Elle Fanning's effervescence as
                                                            Aurora that
                                                            really makes this film glow. <i class="fa fa-quote-right"></i>
                                                      </small> </p>
                                          </div>

                                          <div class="ratings"> <i class="fa fa-star"></i> <i
                                                      class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                      class="fa fa-star"></i>

                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="card col-md-4 col-11 third">
                              <div class="card-content">
                                    <div class="card-body p-0">
                                          <div class="profile mb-4 mt-3"> <img src="https://i.imgur.com/J6l19aF.jpg">
                                          </div>
                                          <br />
                                          <h4 style="color: #DE0A0A;" id="rvu3"> Movie Name : Luca</h4>
                                          <div class="card-subtitle">
                                                <p> <small class="text-muted"> <i class="fa fa-quote-left"></i>
                                                            Luca is a continual delight, a film that will
                                                            make you feel
                                                            warm, fuzzy and wanting for more.
                                                            <i class="fa fa-quote-right"></i>

                                                      </small>
                                                </p>
                                          </div>

                                          <br />

                                          <div class="ratings"> <i class="fa fa-star"></i> <i
                                                      class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                          </div>

                                    </div>

                              </div>
                        </div>
                  </div>
            </div>

      </div>
@endsection
