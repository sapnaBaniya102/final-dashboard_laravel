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
                <h2 class="text-center text-white title">News Details</h2>
                <ol class="mt-10 text-left text-black breadcrumb">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="news.php">News</a></li>
                  <li class="active text-gray-silver">News Details</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section: Blog -->
      <section>
        <div class="container mb-0 mt-30 pt-30 pb-30">
          <div class="row">
            <div class="col-md-8 blog-pull-right">
              <div class="single-service">
                <img src="{{ asset('uploads/'.$news_details->imglink) }}" alt="" width="700">
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <h3 class="text-theme-colored">{{ $news_details->title }}</h3>
              <h5><em>{{ $news_details->text }} </em></h5>
              <p>{{ $news_details->details }}</p>
            </div>


          </div>
        </div>
      </section>
    </div>
    <!-- end main-content -->
@endsection
