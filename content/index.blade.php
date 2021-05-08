@extends('_includes.base')

@section('body')
  @include('_includes.carousel')

  <main class="main-content">

    <!-- Tabs area -->
    <section class="content-section owl-carousel-spotlight carousel-spotlight ig-carousel text-light"
      style="background-image: url(assets/img/bg/bg_shape.png);">
      <div class="container">
        <header class="header">
          <h2>Nothing to see here</h2>
        </header>
        <div class="position-relative">
          <!-- nav tabs -->
          <ul class="spotlight-tabs spotlight-tabs-dark nav nav-tabs border-0 mb-5 position-relative flex-nowrap"
            id="most_popular_products-carousel" role="tablist">
            <li class="nav-item text-fnwp pg-none relative">
              <a class="nav-link active" id="mp-01-tab" data-toggle="tab" href="#mp-01-c" role="tab"
                aria-controls="mp-01-c" aria-selected="true">New</a>
            </li>
            <li class="nav-item text-fnwp relative">
              <a class="nav-link" id="mp-02-tab" data-toggle="tab" href="#mp-02-c" role="tab" aria-controls="mp-02-c"
                aria-selected="false">Highlights</a>
            </li>
            <li class="nav-item text-fnwp relative">
              <a class="nav-link" id="mp-03-tab" data-toggle="tab" href="#mp-03-c" role="tab" aria-controls="mp-03-c"
                aria-selected="false">Coming Soon</a>
            </li>
          </ul>
          <!-- /.nav tabs -->
          <!-- tab panes -->
          <div id="color_sel_Carousel-content" class="tab-content fl-scn relative w-100">

            <!-- tab item -->
            <div class="tab-pane fade show active" id="mp-01-c" role="tabpanel" aria-labelledby="mp-01-tab">
              <div class="owl-carousel gs-carousel" data-carousel-margin="30" data-carousel-nav="true"
                data-carousel-navText="<span class='icon-cl-next pe-7s-angle-left'></span>, <span class='icon-cl-next pe-7s-angle-right'></span>">
                <!-- item -->
                <div class="item">
                  <div class="item-cont">
                    <figure class="owl_item_review">
                      <div>
                        <div class="position-relative overflow-hidden">
                          <img class="m-0-auto" src="assets/img/content/cont/cg_01.png" alt="Games Store">
                        </div>
                        <div>
                          <h5 class="owl_item_title text-lt"><a href="">Donec dignissim ...</a></h5>
                          <div class="relative small-1">
                            <span class="owl_item_price">€44.99</span>
                            <span class="owl_item_genre">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                      </div>
                    </figure>
                  </div>
                </div>
                <!-- /.item -->
                <!-- item -->
                <div class="item">
                  <div class="item-cont">
                    <figure class="owl_item_review">
                      <div>
                        <div class="position-relative overflow-hidden">
                          <img class="m-0-auto" src="assets/img/content/cont/cg_02.png" alt="Games Store">
                        </div>
                        <div>
                          <h5 class="owl_item_title text-lt"><a href="">Donec dignissim ...</a></h5>
                          <div class="relative small-1">
                            <span class="owl_item_price">€44.99</span>
                            <span class="owl_item_genre">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                      </div>
                    </figure>
                  </div>
                </div>
                <!-- /.item -->
                <!-- item -->
                <div class="item">
                  <div class="item-cont">
                    <figure class="owl_item_review">
                      <div>
                        <div class="position-relative overflow-hidden">
                          <img class="m-0-auto" src="assets/img/content/cont/cg_03.png" alt="Games Store">
                        </div>
                        <div>
                          <h5 class="owl_item_title text-lt"><a href="">Donec dignissim ...</a></h5>
                          <div class="relative small-1">
                            <span class="owl_item_price">€44.99</span>
                            <span class="owl_item_genre">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                      </div>
                    </figure>
                  </div>
                </div>
                <!-- /.item -->
                <!-- item -->
                <div class="item">
                  <div class="item-cont">
                    <figure class="owl_item_review">
                      <div>
                        <div class="position-relative overflow-hidden">
                          <img class="m-0-auto" src="assets/img/content/cont/cg_04.png" alt="Games Store">
                        </div>
                        <div>
                          <h5 class="owl_item_title text-lt"><a href="">Donec dignissim ...</a></h5>
                          <div class="relative small-1">
                            <span class="owl_item_price">€44.99</span>
                            <span class="owl_item_genre">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                      </div>
                    </figure>
                  </div>
                </div>
                <!-- /.item -->
                <!-- item -->
                <div class="item">
                  <div class="item-cont">
                    <figure class="owl_item_review">
                      <div>
                        <div class="position-relative overflow-hidden">
                          <img class="m-0-auto" src="assets/img/content/cont/cg_03.png" alt="Games Store">
                        </div>
                        <div>
                          <h5 class="owl_item_title text-lt"><a href="">Donec dignissim ...</a></h5>
                          <div class="relative small-1">
                            <span class="owl_item_price">€44.99</span>
                            <span class="owl_item_genre">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                      </div>
                    </figure>
                  </div>
                </div>
                <!-- /.item -->
              </div>
            </div>
            <!-- /.tab item -->
          </div>
          <!-- /.tab panes -->
        </div>
      </div>
    </section>
    <!-- /.Tabs area -->

    @include('_includes.contact')
  </main>

@stop
