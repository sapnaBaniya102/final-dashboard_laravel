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
              <h2 class="title text-white">Examination Notice</h3>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="#">Home</a></li>
                <li><a href="#">Examination</a></li>
                <li class="active text-gray-silver">Examination Notice</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: event calendar -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-9 blog-pull-right">
            <div class="row">
          @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    @foreach ($notices as $notice)
                <!-- helkodjdnkjndsckjac -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="schedule-box maxwidth500 bg-light mb-30">
                    <div class="schedule-details clearfix p-15 pt-10">
                      <h5 class="font-16 title"><a href="{{ url('notice_details/'.$notice->id) }}">{{ $notice->heading }}</a></h5>
                      <ul class="list-inline font-11 mb-20">
                        <li><i class="fa fa-calendar mr-5"></i>{{ $notice->date }}</li>
                        <!-- <li><i class="fa fa-map-marker mr-5"></i> 89 Newyork City.</li> -->
                      </ul>
                      <div class="mt-10">

                       <a href="{{ url('notice_details/'.$notice->id) }}" class="btn btn-dark btn-sm mt-10">Details</a>
                      </div>
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
            <div class="sidebar sidebar-right mt-sm-30">
              <div class="widget">
                <h5 class="widget-title line-bottom">Search box</h5>
                <div class="search-form">
                  <form>
                    <div class="input-group">
                      <input type="text" placeholder="Click to Search" class="form-control search-input">
                      <span class="input-group-btn">
                      <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                      </span>
                    </div>
                  </form>
                </div>
              </div>


            </div>
          </div>
          <div class="col-md-3">
            <div class="sidebar sidebar-left mt-sm-30">
              <div class="widget">
                <h5 class="widget-title line-bottom">Latest Notices</h5>
                @foreach ($notices as $notice)

                <ul class="list list-divider list-border">
                  <li><a href="{{ url('notice_details'.$notice->id) }}"><i class="fa fa-check-square-o mr-10 text-black-light"></i> {{ $notice->heading }}</a></li>

                </ul>
@endforeach
              </div>



            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
@endsection
