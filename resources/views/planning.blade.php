@extends('layout.layout')
@section('content')


<!-- Start main-content -->
<div class="main-content bg-lighter">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg6.jpg">
        <div class="container pt-70 pb-20">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title text-white text-center">Planning</h2>
                        <ol class="breadcrumb text-left text-black mt-10">
                            <li><a href="index.php">Home</a></li>

                            <li class="active text-gray-silver">Planning</li>
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
             @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    @foreach ($sites as $site)
                    @if ($site->site_key=='planning')
                      <div class="row mt-10">

                    <div class="col-sm-12 col-md-6 mb-sm-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h3 class="text-uppercase mt-15"><span class="text-theme-color-2"></span>{{ $site->site_name }}
                        </h3>

                        <p class="mb-15">{{ $site->site_value }}</p>


                    </div>
                    <div class="col-sm-12 col-md-6 mt-10 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="video-popup">

                            <a href="{{ asset('uploads/'.$site->imglink) }}" data-lightbox-gallery="youtube-video"
                                title="Video">
                                <img alt="" src="{{ asset('uploads/'.$site->imglink) }}"
                                    class="img-responsive img-fullwidth mt-10 ml-30 ml-xs-0 ml-sm-0">
                            </a>
                        </div>
                    </div>

                </div>
                @endif
                @endforeach
            </div>
        </div>
    </section>

    <!-- Section: Project -->
    <section>
        <div class="container pb-40">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="mt-0 line-height-1 text-center text-uppercase mb-10 text-black-333">New <span
                                class="text-theme-color-2">Programs</span></h2>

                    </div>
                </div>
            </div>
            <div class="row multi-row-clearfix">
                <div class="col-md-12">
                    <div class="owl-carousel-4col">
                     @foreach ($sites as $site)
                    @if ($site->site_key=='program')
                        <div class="item">
                            <div class="project mb-30 border-2px">
                                <div class="thumb">
                                    <img class="img-fullwidth" alt=""
                                        src="{{ asset('uploads/'.$site->imglink) }}"  height="200">

                                </div>
                                <div class="project-details p-15 pt-10 pb-10">

                                    <h4 class="font-weight-700 text-uppercase mt-0">{{ $site->site_name }}
                                    </h4>
                                </div>
                            </div>
                        </div>
           @endif
           @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<!---end of main content---->
@endsection
