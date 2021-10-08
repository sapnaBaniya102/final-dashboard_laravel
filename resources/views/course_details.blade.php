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
              <h2 class="title text-white text-center">Course Details</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="index.php">Home</a></li>
                <li><a href="course.php">Course</a></li>
                <li class="active text-gray-silver">course details</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Blog -->
    <section>
      <div class="container mt-30 mb-0 pt-30 pb-30">
        <div class="row">

          <div class="col-md-8 blog-pull-right">
            <div class="single-service">
              <img src="{{ asset('uploads/'.$course_detail->imglink) }}" alt="">
              <h3 class="text-theme-colored">{{ $course_detail->name }}</h3>

              <p>{{ $course_detail->text }}</p>

            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="sidebar sidebar-left mt-sm-30">
              <div class="widget">
                <h4 class="widget-title line-bottom">Courses List</h4>
                <div class="services-list">
                  <ul class="list list-border">

                    <li class=""><a href="{{ url('course_details/'.$course_detail->id) }}">{{ $course_detail->name }}</a></li>

                  </ul>
                </div>
              </div>
              <div class="widget">
                <h4 class="widget-title line-bottom">Opening Hours</h4>
                <div class="opening-hours">
                  <ul class="list-border">

                    <li class="clearfix"> <span> Duration </span>
                      <div class="value pull-right">{{ $course_detail->duration }}</div>
                    </li>


                  </ul>
                </div>
              </div>



            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
@endsection
