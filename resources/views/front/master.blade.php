@include('front.layouts.head')
@include('front.layouts.header')



<main class="main-content">
      <div class="container">
            <div class="page">
                @yield('content')
            </div>
      </div>
</main>


@include('front.layouts.footer')
