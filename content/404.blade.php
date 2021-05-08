@extends('_includes.base')

@section('body')

  <main class="main-content h-fullscreen d-flex align-items-center text-center text-light">

    <!-- content area -->
    <div class="container">
      <img src="@url('assets/img/content/carousel/slide_01.png')" class="d-none d-md-inline mb-6" alt="404">
      <h2 class="display-md-4">404 - Nothing to see here</h2>
      <p class="lead">You may have mistyped the address because this page doesn't exist.</p>
      <br>
      <button type="button" onclick="history.back()" class="btn btn-warning btn-round"><i class="fas fa-arrow-left"></i>
        Go Back</button>
    </div>
    <!-- content area -->

  </main>
@stop
