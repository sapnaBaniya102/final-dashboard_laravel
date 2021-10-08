@extends('layout.layout')
@section('content')

<!-- Start main-content -->
<div class="main-content bg-lighter">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5"
        data-bg-img="{{ asset('frontendassets/images/bg/bg6.jpg') }}">
        <div class="container pt-70 pb-20">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title text-white text-center">About Us</h2>
                        <ol class="breadcrumb text-left text-black mt-10">
                            <li><a href="index.php">Home</a></li>

                            <li class="active text-gray-silver">About Us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: About -->
    <section id="about">
        <div class="container mt-50 pb-70 pt-0">
            <div class="section-content">
                <div class="row mt-10">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    @foreach ($sites as $site)
                    @if ($site->site_key=='welcome')
                    <div class="col-sm-12 col-md-6 mb-sm-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h3 class="text-uppercase mt-15">
                            {{$site->site_name}}
                        </h3>
                        <p class="mb-15">
                            {{$site->site_value}}
                        </p>

                    </div>


                    <div class="col-sm-12 col-md-6 mt-0 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="video-popup">
                            <a href=" {{ asset('uploads/'.$site->imglink)}}" data-lightbox-gallery="youtube-video"
                                title="Video">
                                <img alt="" src="{{ asset('frontendassets/images/about/5.jpg') }}"
                                    class="img-responsive img-fullwidth mt-10 ml-30 ml-xs-0 ml-sm-0">
                            </a>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!----section: objectives--->
      <section class="bg-lightest">
        <div class="container">
          <div class="section-content">
            <div class="row mt-10">

              <div class="col-sm-12 col-md-6  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="video-popup">
                         @foreach ($sites as $site)
                      @if ($site->site_key=='objective')
                  <a href="{{$site->imglink }} " data-lightbox-gallery="youtube-video" title="Video">

  <img class="img-fullwidth" alt="{{asset('uploads/'.$site->imglink)  }}"
                            src="{{ asset('frontendassets/images/about/5.jpg') }}" alt="project">


                  </a>
                </div>
              </div>
              <div class="col-sm-12 col-md-6 mb-sm-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="objectives">


<h3 class="text-uppercase mt-15">
{{ $site->site_name }}

                  </h3>




                    <p>
                      <li>{{ $site->site_value }}</li>
                         @endif
                  @endforeach
                    </p>

                </div>
              </div>
            </div>

          </div>
        </div>
      </section>

    <!-- Section: mission-->
    <section id="about">
        <div class="container pt-50 pb-80">
            <div class="section-content">
                <div class="row">
                    @foreach ($sites as $site)
                    @if ($site->site_key=='missionaboutus')


                    <div class="col-md-6 wow mt-20 fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h3 class="text-uppercase title line-bottom mt-0 mb-30">
                            {{$site->site_name}}
                        </h3>


                        <p class="mb-15">
                            <li>{{ $site->site_value }}</li>
                        </p>




                    </div>


                    <div class="col-md-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                        <img class="img-fullwidth" alt="{{asset('uploads/'.$site->imglink)  }} "
                            src="{{ asset('frontendassets/images/about/5.jpg') }}" alt="project">

                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!----section: vision--->
    <section class="bg-lightest">
        <div class="container">
            <div class="section-content">
                <div class="row mt-10">
                    @foreach ($sites as $site)
                    @if ($site->site_key=='visionaboutus')

                    <div class="col-sm-12 col-md-6  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img class="img-fullwidth" src="{{ asset('uploads/'.$site->imglink ) }}" alt="project">
                    </div>
                    <div class="col-sm-12 col-md-6 mb-sm-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h3 class="text-uppercase ml-15 title line-bottom">
                            {{ $site->site_name }}
                        </h3>


                        <p class="mb-15">
                            <li>{{ $site->site_value }}</li>
                        </p>

                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Divider: Clients -->


</div>
<!-- end main-content -->
@endsection
