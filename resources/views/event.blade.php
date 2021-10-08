@extends('layout.layout')
@section('content')

  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg6.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title text-white">Events</h3>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="index.php">Home</a></li>
                <li class="active text-gray-silver">Events</li>
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

          <div class="col-md-9 blog-pull-right">
            <div class="upcoming-events bg-white mb-20">
               @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    @foreach ($Events as $event)
              <div class="row">
                <div class="col-sm-4 pr-0 pr-sm-15">
                  <div class="thumb p-15">
                    <img class="img-fullwidth" src="{{asset('uploads/'.$event->img_link)  }}" alt="" width="100" height="120">
                  </div>
                </div>
                <div class="col-sm-4 pl-0 pl-sm-15">
                  <div class="event-details p-15 mt-20">
                    <h4 class="media-heading text-uppercase font-weight-500">{{ $event->tittle }}</h4>
                    <a href="{{ url('event_details/'.$event->id) }}" class="btn btn-flat btn-dark btn-theme-colored btn-sm">Details <i class="fa fa-angle-double-right"></i></a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="event-count p-15 mt-15">
                    <ul class="event-date list-inline font-16 text-uppercase mt-10 mb-20">
                     <li><i class="fa fa-calendar mr-5">{{ $event->date }}</i></li>
                    </ul>
                    <ul>
                      <li class="mb-10 text-theme-colored"><i class="fa fa-clock-o mr-5"></i>{{ $event->time }}</li>
                      <li class="text-theme-colored"><i class="fa fa-map-marker mr-5"></i>{{ $event->address }}</li>
                    </ul>
                  </div>
                </div>
              </div>
           @endforeach
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
            <div class="sidebar sidebar-left mt-sm-30">
              <div class="widget">
                <h5 class="widget-title line-bottom">Current Events</h5>
                 @foreach ($Events as $event)
                <ul class="list list-divider list-border">
                  <li><a href="{{ url('event_details/'.$event->id) }}"><i class="fa fa-check-square-o mr-10 text-black-light"></i></a>{{ $event->tittle }}</li>

                  </ul>
         @endforeach
              </div>
            </div>
          </div>        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

@endsection
