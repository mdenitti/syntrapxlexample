@include('xlayout.header')
    <div class="container">
      @yield('hero')
        <h1>@yield('title')</h1>
        @yield('content')
    </div>
@include('xlayout.footer')