@extends('layout.layout')
@section('content')
 <!-- Start main-content -->
    <div class="main-content bg-lighter">
      <!-- Section: inner-header -->
      <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg6.jpg">
        <div class="container pb-20 pt-70">
          <!-- Section Content -->
          <div class="section-content">
            <div class="row">
              <div class="col-md-12">
                <h2 class="text-center text-white title">Teachers</h2>
                <ol class="mt-10 text-left text-black breadcrumb">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="active">Teacher</a></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section: Teachers -->
      <section>
        <div class="container pb-50">
          <div class="text-center section-title">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h2 class="mt-0 line-height-1 text-uppercase">Our <span class="text-theme-color-2">Teachers</span></h2>
              </div>
            </div>
          </div>
          <div class="row multi-row-clearfix">
            <div class="col-md-12">
              <div class="owl-carousel-4col" data-nav="true">

                  @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    @foreach ($teachers as $teacher)

                    <div class="item">
                        <a href="{{ url('teacher_details/'.$teacher->id) }}">
                      <div class="hover-effect mb-30">
                        <div class="thumb">
                          <img class="img-fullwidth" alt="" src="{{asset('uploads/'.$teacher->img_link)  }}">
                          <div class="hover-link">

                          </div>
                        </div>
                        <div class="pt-10 pb-10 details p-15">
                          <h4 class="mb-5 title">{{ $teacher->name }}</h4>
                          <h5 class="mt-0 sub-title mb-15">{{ $teacher->post }}</h5>
                          <a class="btn btn-theme-colored btn-sm" href="{{ url('teacher_details/'.$teacher->id) }}">view details</a>
                        </div>
                      </div>
                       </a>
                    </div>

               @endforeach

              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
@endsection
