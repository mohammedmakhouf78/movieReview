@extends('front.master')

@section('css')
      <link rel="stylesheet" href="{{ asset('css/movies.css') }}">
@endsection
@section('content')
      <div class="row">
            <div class="col-md-4">
                  <figure><img src="{{asset('frontTemplate/dummy/1852.jpg')}}" alt="figure image" height=350px width=850px></figure>
            </div>
            <div class="col-md-8">
                  <p class="leading">There is one simple way through which movie buffs can actually save their
                        money.From our movie review site,
                        movie buffs come to know people's opinions about a particular movie. On the basis of the
                        review a movie buff
                        can take his decision (whether to watch it in the theater or categorize it as a flop
                        movie).</p>
                  <p style="line-height: 1.5">Television commercials on new releases are enough to entice
                        millions of movie lovers who run off to the movie theatres to watch those movies. These
                        movie commercials are created to hoodwink the audience. A commercial tends to show that
                        a movie is simply amazing, whereas when a movie buff actually sees it, he finds it to be
                        a complete flop picture.
                        Just by watching these commercials, movie buffs run to theaters and waste their money to
                        watch flop films
                        that do not even stay in the theaters for a week. .</p>
            </div>
      </div>

      <div class="row">
            <div class="col-md-9">
                  <h2 class="section-title" style="color: #DE0A0A">Vision &amp; Misssion</h2>
                  <p style="line-height: 1.5">we offer the best reviews of the newly released films. The
                        registration process is
                        simple and once you are a registered member, you can read free film reviews and write
                        and submit your own reviews as well. A bad movie can spoil your mood and interest.
                        Moreover,
                        it also burns a hole in your pocket as you spend dollars to watch a flop movie. So it is
                        always
                        better to visit our movie review site, read the review of a newly released movie and
                        then,
                        decide whether it is worth watching in the theater.</p>

                  <p style="line-height: 1.5">our movie review website are free site where people can visit
                        and read reviews any time they wish. The user can also
                        register to some of the movie sites. This allows him to write reviews about the films he
                        has watched. After all,
                        others might also be interested to know about the films that you have
                        watched.Registration is very simple procedure.
                        All you need to do is to follow the steps and get your name registered in the particular
                        site.</p>
            </div>
            <div class="col-md-3">
                  <h2 class="section-title" style="color: #DE0A0A; font-size:larger; ">Best Websites for
                        watching movies</h2>
                  <ul class="arrow" style="color: #DE0A0A">
                        <li><a href="#">Crackle</a></li>
                        <li><a href="#">Popcornflix</a></li>
                        <li><a href="#">Yidio</a></li>
                        <li><a href="#">YouTube</a></li>
                        <li><a href="#">NetFlix</a></li>
                        <li><a href="#">EgyBest</a></li>
                        <li><a href="#">Vudu</a></li>
                  </ul>
            </div>
      </div> <!-- .row -->

      <h2 class="section-title" style="color: #DE0A0A">Our Team</h2>
      <div class="row">

            <div class="col-md-4">
                  <div class="team">
                        <figure class="team-image"><img src="{{asset('frontTemplate/dummy/boy1.jpg')}}" alt=""></figure>
                        <h2 class="team-name">Ahmed Oweid</h2>
                        <small class="team-title">Team Leader</small>
                  </div>
            </div>
            <div class="col-md-4">
                  <div class="team">
                        <figure class="team-image"><img src="{{asset('frontTemplate/dummy/boy2.jpg')}}" alt=""></figure>
                        <h2 class="team-name">Mahmoud </h2>
                        <small class="team-title">Front-End</small>
                  </div>
            </div>
            <div class="col-md-4">
                  <div class="team">
                        <figure class="team-image"><img src="{{asset('frontTemplate/dummy/girl1.jpg')}}" alt=""></figure>
                        <h2 class="team-name">Koloud Abd-ElFattah</h2>
                        <small class="team-title">Front-End</small>
                  </div>
            </div>
            <div class="col-md-4">
                  <div class="team">
                        <figure class="team-image"><img src="{{asset('frontTemplate/dummy/girl2.jpg')}}" alt=""></figure>
                        <h2 class="team-name">Rania Moahmmed</h2>
                        <small class="team-title">Front-End</small>
                  </div>
            </div>
            <div class="col-md-4">
                  <div class="team">
                        <figure class="team-image"><img src="{{asset('frontTemplate/dummy/boy3.jpg')}}" alt=""></figure>
                        <h2 class="team-name">Omar Mohammed</h2>
                        <small class="team-title">Back-End</small>
                  </div>
            </div>
            <div class="col-md-4">
                  <div class="team">
                        <figure class="team-image"><img src="{{asset('frontTemplate/dummy/girl33.jpg')}}" alt=""></figure>
                        <h2 class="team-name">Kholoud Bahgat</h2>
                        <small class="team-title">BAck-End</small>
                  </div>
            </div>


      </div>
@endsection
