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
              <h3 class="font-28 text-white">Notice Details</h2>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="index.php">Home</a></li>
                <li><a href="examination-notice.php">Examination notice</a></li>
                <li class="active text-gray-silver">Notice details</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-4">


                <ul>
                  <li>
                    <h5>Topics:</h5>
                  {{ $notice_details->heading }}
                  </li>
                  <li>
                    <h5>Start Date:</h5>
                    {{ $notice_details->started }}
                  </li>
                  <li>
                    <h5>End Date:</h5>
                    {{ $notice_details->ended }}
                  </li>
                </ul>
              </div>
              <div class="col-md-8">
                <div class="img" data-nav="true">
                  <div class="item">
                    <img src="{{ asset('uploads/banner_41632153501.jpeg') }}" width="650" height="500" >

                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-60">
              <div class="col-md-12">
                <h4 class="mt-0">Notice Description</h4>
             {{ $notice_details->detail }}
              </div>
              </div>
            </div>

      </div>
    </section>


  </div>
  <!-- end main-content -->

@endsection
