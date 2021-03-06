@extends('_includes.base')

@section('body')
  <main class="main-content">
    @include('_includes.header')

    {{-- CHARACTERS SECTION --}}
    @include('_includes.characters')
    {{-- CHARACTERS SECTION --}}

    {{-- DISCORD SERVER SECTION --}}
    @include('_includes.discord')
    {{-- DISCORD SERVER SECTION --}}

    {{-- YOUTUBE CAROUSEL --}}
    <section id="server" class="content-section latest-articles text-light"
      style="background-image: url(assets/img/bg/bg_shape.png)">
      <div class="about-features content-section bp-c br-n bs-c">
        <div class="container-fluid text-center">
          <header class="section-header text-center">
            <h2>Latest Videos</h2>
            <hr class="w-10 border-warning border-top-2 o-90">
          </header>
          <div data-mc-src="cd9d51fe-cb16-46ac-b4c1-872767aed16c#youtube" class="mx-auto w-100"></div>
        </div>
      </div>
    </section>
    {{-- YOUTUBE CAROUSEL --}}

    {{-- FOLLOW OUR PROGRESS --}}
    @include('_includes.social')
    {{-- FOLLOW OUR PROGRESS --}}
  </main>

@stop
