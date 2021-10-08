@extends('layout.layout')
@section('content')
 <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    <section id="home">

      <!-- Slider Revolution Start -->
      <div class="rev_slider_wrapper">
        <div class="rev_slider" data-version="5.0">
          <ul>

            @foreach ($sliders as $slider)



            <!-- SLIDE 1 -->
            <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('uploads/'.$slider->img_link) }}" data-rotate="0" data-saveperformance="off" data-title="Slide 1" data-description="">
              <!-- MAIN IMAGE -->
              <img src="{{ asset('uploads/'.$slider->img_link) }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
              <!-- LAYERS -->

              <!-- LAYER NR. 1 -->
              <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                id="rs-1-layer-1"

                data-x="['left']"
                data-hoffset="['30']"
                data-y="['middle']"
                data-voffset="['-110']"
                data-fontsize="['100']"
                data-lineheight="['110']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000"
                data-splitin="none"
                data-splitout="none"
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:700;">{{ $slider->header }}
              </div>

              <!-- LAYER NR. 2 -->
              <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-left-theme-color-2-6px pl-20 pr-20"
                id="rs-1-layer-2"

                data-x="['left']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['-25']"
                data-fontsize="['35']"
                data-lineheight="['54']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000"
                data-splitin="none"
                data-splitout="none"
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:600;">{{ $slider->sub_heading }}
              </div>

              <!-- LAYER NR. 3 -->
              <div class="tp-caption tp-resizeme text-white"
                id="rs-1-layer-3"

                data-x="['left']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['35']"
                data-fontsize="['16']"
                data-lineheight="['28']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400"
                data-splitin="none"
                data-splitout="none"
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">{{ $slider->text }}

              <!-- LAYER NR. 4 -->
              <div class="tp-caption tp-resizeme"
                id="rs-1-layer-4"

                data-x="['left']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['100']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400"
                data-splitin="none"
                data-splitout="none"
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-flat btn-theme-colored border-left-theme-color-2-6px pl-20 pr-20" href="{{ $slider->btn_link }}">{{ $slider->btn }}</a>
              </div>
            </li>
  @endforeach


          </ul>
        </div>
        <!-- end .rev_slider -->
      </div>
      <!-- end .rev_slider_wrapper -->
      <script>
        $(document).ready(function(e) {
          $(".rev_slider").revolution({
            sliderType:"standard",
            sliderLayout: "auto",
            dottedOverlay: "none",
            delay: 5000,
            navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                onHoverStop: "off",
                touch: {
                    touchenabled: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                },
              arrows: {
                style:"zeus",
                enable:true,
                hide_onmobile:true,
                hide_under:600,
                hide_onleave:true,
                hide_delay:200,
                hide_delay_mobile:1200,
                tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                left: {
                  h_align:"left",
                  v_align:"center",
                  h_offset:30,
                  v_offset:0
                },
                right: {
                  h_align:"right",
                  v_align:"center",
                  h_offset:30,
                  v_offset:0
                }
              },
              bullets: {
                enable:true,
                hide_onmobile:true,
                hide_under:600,
                style:"metis",
                hide_onleave:true,
                hide_delay:200,
                hide_delay_mobile:1200,
                direction:"horizontal",
                h_align:"center",
                v_align:"bottom",
                h_offset:0,
                v_offset:30,
                space:5,
                tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title"></span>'
              }
            },
            responsiveLevels: [1240, 1024, 778],
            visibilityLevels: [1240, 1024, 778],
            gridwidth: [1170, 1024, 778, 480],
            gridheight: [650, 768, 960, 720],
            lazyType: "none",
            parallax: {
                origo: "slidercenter",
                speed: 1000,
                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                type: "scroll"
            },
            shadow: 0,
            spinner: "off",
            stopLoop: "on",
            stopAfterLoops: 0,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "off",
            fullScreenAutoWidth: "off",
            fullScreenAlignForce: "off",
            fullScreenOffsetContainer: "",
            fullScreenOffset: "0",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false,
            }
          });
        });
      </script>
      <!-- Slider Revolution Ends -->

    </section>


    <!-- Section: About -->
    <section id="about">
      <div class="container mt-5 pb-70 pt-0">
        <div class="section-content">
          <div class="row mt-10">
 @foreach ($sites as $site)
@if ($site->site_key=='learnpress')
 <div class="col-sm-12 col-md-6 mb-sm-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
              <h3 class="text-uppercase mt-10"><span class="text-theme-color-2"> {{ $site->site_name }} </span></h3>

              <p class="mb-10">{{ $site->site_value }}</p>

            </div>
            <div class="col-sm-12 col-md-6 mt-0 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="video-popup">
                <a href="https://www.youtube.com/watch?v=pW1uVUg5wXM" data-lightbox-gallery="youtube-video" title="Video">
                  <img alt="" src="{{ asset('frontendassets/images/about/5.jpg') }}" class="img-responsive img-fullwidth mt-10 ml-30 ml-xs-0 ml-sm-0">
                </a>
              </div>
            </div>
@endif

            @endforeach
          </div>
        </div>
      </div>
    </section>


        <!-- Divider: Funfact -->
       <section class="divider parallax layer-overlay" data-bg-img="{{ asset('frontendassets/images/bg/bg6.jpg') }}" data-parallax-ratio="0.7">
         <div class="container pt-70 pb-60">
           <div class="row">
                @foreach ($sites as $site)
                @if ($site->site_key=='progressbar')
    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
               <div class="funfact text-center">
                 <i class="fa fa-users mt-5 text-white"></i>
                 <h2 data-animation-duration="2000" data-value="{{ $site->site_value }}" class="animate-number text-white mt-0 font-38 font-weight-500">{{ $site->site_value }}</h2>
                 <h4 class="text-white text-uppercase">{{ $site->site_name }}</h4>
               </div>
             </div>
                @endif
@endforeach

           </div>
         </div>
       </section>



   <!-- Divider: why choose us 1 -->
    <section class="divider parallax" data-bg-img="{{ asset('frontendassets/images/bg/bg1.jpg') }}" data-parallax-ratio="0.7">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-md-8 col-md-offset-4">
            <div class="bg-white-transparent-9 pb-10 p-40">
              <h2 class="mb-20 mt-30 line-height-1 text-center text-uppercase">Why <span class="text-theme-color-2"> Choose Us?</span></h2>
              <div class="row">
                   @foreach ($whychooseus as $whychooseuses)
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="icon-box p-15 mb-0 mb-sm-0 mt-sm-0">
                      <a class="icon pull-left sm-pull-none flip" href="#">
                      <i class="fa fa-building text-theme-colored font-50"></i>
                      </a>
                      <div class="ml-70 ml-sm-0">
                        <h4 class="icon-box-title mt-15 mb-5">{{ $whychooseuses->heading }}</h4>
                        <p>{{ $whychooseuses->text }}</p>
                      </div>
                    </div>
                  </div>
                  @endforeach

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Diver: Video Background  -->
    <section class="divider parallax layer-overlay overlay-theme-colored-9" data-bg-img="{{ asset('frontendassets/images/bg/bg1.jpg') }}" data-parallax-ratio="0.7">
      <div class="container pt-60 pb-70">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
              @foreach ($sites as $site)
              @if ($site->site_key=='welcome')
  <div class="col-md-10 col-md-offset-1 text-center">
              <h3 class="text-white text-uppercase font-30 font-weight-600 mt-0 mb-20">Watch Our Latest Campus Tour video</h3>
              <p class="text-white lead">{{ $site->site_value }}</p>
              <a href="{{'uploads'.$site->imglink }}" data-lightbox-gallery="youtube-video"><i class="fa fa-play-circle text-white font-72"></i>
              </a>
            </div>
              @endif
@endforeach
          </div>
        </div>
      </div>
    </section>

    <!-- Section: events -->
    <section class="divider parallax layer-overlay overlay-dark-8" data-stellar-background-ratio="0.5" data-bg-img="{{ asset('frontendassets/images/bg/bg1.jpg') }}">
      <div class="container pt-40 pb-60">
        <div class="section-content">
          <div class="row">
             <div class="col-md-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
              <h3 class="text-uppercase ml-15 title line-bottom text-white">Next <span class="text-theme-color-2 font-weight-700">Events</span></h3>
              <div class="bxslider bx-nav-top p-0 m-0">
                  @foreach ($events as $event)


                <div class="col-xs-12 pr-0 col-sm-6 col-md-6 mb-20">
                  <div class="pricing table-horizontal maxwidth400">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="thumb">
                        <img class="img-fullwidth mb-sm-0" src="{{ asset('uploads/'.$event->img_link) }}" alt="">
                        </div>
                      </div>
                      <div class="col-md-6 p-10 pl-sm-50">
                        <h4 class="mt-0 mb-5 mt-10"><a href="#" class="text-white">{{ $event->tittle }}</a></h4>
                        <ul class="list-inline font-16 mb-5 text-white">
                          <li class="pr-0"><i class="fa fa-calendar mr-5"></i> {{ $event->date }} |{{ $event->time }}</li>
                          <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>{{ $event->address }}</li>
                        </ul>
                        <p class="mb-0 font-13 text-white mr-5 pr-10">{{ $event->details }}</p>
                        <a class="font-16  text-white mt-20" href="#">Read More →</a>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach

              </div>
            </div>


          </div>
        </div>
      </div>
    </section>

    <!-- Section: Blog -->
    <section id="blog">
      <div class="container pb-70">
        <div class="section-title mb-20 text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="mt-10 line-height-1 text-uppercase">Recent  <span class="text-theme-color-2"> News</span></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
              @foreach ($newses as $news)


            <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
              <article class="post clearfix mb-sm-30">
                <div class="entry-header">
                  <div class="post-thumb thumb">
                    <img src="{{ asset('uploads/'.$news->date) }}" alt="" class="img-responsive img-fullwidth">
                  </div>
                </div>
                <div class="entry-content p-20 pr-10">
                  <div class="entry-meta mt-0 no-bg no-border">
                    <div class="event-content">
                      <h4 class="entry-title text-white text-capitalize m-0"><a href="#">{{ $news->title }}</a></h4>
                      <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-calendar mr-5 text-theme-colored"></i>{{ $news->date }}</span>

                    </div>
                  </div>
                  <p class="mt-10">{{ $news->details }}</p>
                      <div class="mt-10"> <a href="blog-single-left-sidebar.html" class="btn btn-theme-colored btn-sm">Read More</a> </div>
                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
             @endforeach

          </div>
        </div>
      </div>
    </section>

  </div>
  <!-- end main-content -->
@endsection




