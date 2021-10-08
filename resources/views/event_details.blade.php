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
                <h3 class="font-28 text-white">Event Details </h2>
                  <ol class="breadcrumb text-center text-black mt-10">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="events-details.php">Events</a></li>
                    <li class="active text-gray-silver">Event-details</li>
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
                      <p>{{ $event_details->tittle }}</p>
                    </li>
                    <li>
                      <h5>Location:</h5>
                      <p>{{ $event_details->address }}</p>
                    </li>
                    <li>
                      <h5>Date:</h5>
                      <p>{{ $event_details->date }}</p>
                    </li>
                    <li>
                      <h5>Time:</h5>
                      <p>{{ $event_details->time }}</p>
                    </li>
                    <li>
                      <h5>Share:</h5>
                      <div class="styled-icons icon-sm icon-gray icon-circled">
                        <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.goggle.com"><i class="fa fa-google-plus"></i></a>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="col-md-8">

                  <div class="item"><img src="{{ asset('uploads/'.$event_details->img_link ) }}" alt=""></div>

                </div>
          </div>
          <div class="row mt-60">
            <div class="col-md-12">
              <h4 class="mt-0">Event Description</h4>
              <p>{{ $event_details->details }}</p>
            </div>

          </div>
        </div>
      </section>
    </div>
@endsection
