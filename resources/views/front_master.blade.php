
<!doctype html>
<html lang="en">
  <head>
    {{-- META --}}
    @include('partials.meta.index')

    <title>Daihatsu Astrido Serpong</title>

    {{-- CSS --}}
    @include('partials.css.index')
  </head>
  <body>
    <div class="container-fluid">
      {{-- Header Section --}}
      @include('partials.header')
      <section>
        <div class="col-12">
              <div class="row" style="overflow:hidden;">

              @yield('content')

              {{-- Footer Metro Style --}}
              @include('partials.footer_metro')

              </div>
          </div>
      </section>
      {{-- Footer --}}
      @include('partials.footer')
      {{-- JS Script --}}
      
    </div>
    @include('partials.js.index')
  </body>
</html>
