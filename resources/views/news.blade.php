@extends('layout.layout')

@section('content')
    <!-- Start main-content -->
    <div class="main-content">
      <!-- Section: inner-header -->
      <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg6.jpg">
        <div class="container pb-20 pt-70">
          <!-- Section Content -->
          <div class="section-content">
            <div class="row">
              <div class="text-center col-md-12">
                <h2 class="text-white title">News</h3>
                  <ol class="mt-10 text-center text-black breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="news.php">News</a></li>
                  </ol>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section: Event List -->
      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-9 blog-pull-left">

                  <div class="mb-20 upcoming-events bg-white-f3">
                    <div class="row">

 @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    @foreach ($newses as $news)

                      <div class="pl-10 col-sm-8 pl-sm-15">
                        <div class="mt-20 event-details p-15">
                          <h4 class="media-heading text-uppercase font-weight-500">{{ $news->title }}</h4>
                          <p>{{ $news->text }}</p>
                          <a href="{{ url('news_details/'.$news->id) }}" class="btn btn-flat btn-dark btn-theme-colored btn-sm">Details <i class="fa fa-angle-double-right"></i></a>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="event-count p-15 mt-15">
                          <ul class="mt-10 mb-20 event-date list-inline font-16 text-uppercase">
                          <li><i class="mr-5 fa fa-calendar"></i>{{ $news->date }}</li>
                          </ul>
                          <ul>
                            <li class="mb-10 text-theme-colored"><i class="mr-5 fa fa-clock-o"></i>{{ $news->time }}</li>
                            <li class="text-theme-colored"><i class="mr-5 fa fa-map-marker"></i>{{ $news->location }}</li>
                          </ul>
                        </div>
                      </div>
                       @endforeach
                    </div>
                  </div>



              <div class="row">
                <div class="col-sm-12">
                  <nav>
                    <ul class="pagination pull-right xs-pull-center mb-xs-40">
                      <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">«</span> </a> </li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#">...</a></li>
                      <li> <a href="#" aria-label="Next"> <span aria-hidden="true">»</span> </a> </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="sidebar sidebar-right mt-sm-30">
                <div class="widget">
                  <h5 class="widget-title line-bottom">Latest News</h5>
                  <ul class="list list-divider list-border">
                      @foreach ($newses as $news)
                        <li><a href="{{ url('news_details/'.$news->id) }}"><i class="mr-10 fa fa-check-square-o text-black-light"></i> {{ $news->title }}</a></li>
                  @endforeach
                  </ul>
                </div>


              </div>
            </div>


          </div>
        </div>

      </section>
    </div>
    <!-- end main-content -->
@endsection
