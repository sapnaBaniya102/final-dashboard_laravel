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
                <h2 class="title text-white text-center">Our Courses</h2>
                <ol class="breadcrumb text-left text-black mt-10">
                  <li><a href="index.php">Home</a></li>

                  <li class="active text-gray-silver">Course</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section: Course gird -->
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
                  <div class="col-sm-6 col-md-4">
                    <a href="{{ url('course_details/'.$course->id) }}">
                      <div class="project mb-30 border-2px">
                        <div class="thumb">
                          <img class="img-fullwidth" alt="" src="{{asset('uploads/'.$course->imglink)  }}">

                        </div>
                        <div class="project-details p-15 pt-10 pb-10">
                          <h4 class="font-weight-700 text-uppercase mt-0"><a href="{{ url('course_details/'.$course->id) }}">{{ $course->name }}</a></h4>
                        </div>
                      </div>
                  </div></a>



              </div>
            </div>
            <div class="col-sm-12 col-md-3">
              <div class="sidebar sidebar-left mt-sm-30">
                <div class="widget">
                  <h5 class="widget-title line-bottom">Search <span class="text-theme-color-2">Courses</span></h5>
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
                <div class="widget">
                  <h5 class="widget-title line-bottom">Course <span class="text-theme-color-2">Categories</span></h5>
                  <div class="categories">
                    <ul class="list list-border angle-double-right">

                       @foreach ($categories as $category)
                        <li><a href="{{ url('course_details/'.$course->id) }} ">{{ $category->c_name }}</a></li>

                     @endforeach
                    </ul>
                  </div>
                </div>


              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <nav>
                <ul class="pagination xs-pull-center m-0">
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
      </section>
    </div>
    <!-- end main-content -->
@endsection
