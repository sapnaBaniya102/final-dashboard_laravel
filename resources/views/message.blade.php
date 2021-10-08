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
              <h2 class="text-center text-white title">Message</h2>
              <ol class="mt-10 text-left text-black breadcrumb">
                <li><a href="index.php">Home</a></li>

                <li class="active text-gray-silver">Message</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: About -->
    <section id="about">
      <div class="container">
        <div class="section-content">
          <div class="row mt-50">
              @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    @foreach ($sites as $site)
                    @if ($site->site_key=='message from principal')


            <div class="mt-5 col-md-7">
              <div class="caption">
                <h3 class="mt-5 text-uppercase text-theme-colored font-weight-700 letter-space-2">{{ $site->site_name }}</h3>

                <p>{{ $site->site_value }}</p>


                <p class=""> <span class="text-theme-color-2">Principal</span></p>

              </div>
            </div>

             <div class="col-md-5">
              <div class="class-item1">

                  <div class="thumb"> <a href="#">

                    <img class="mb-20 img-responsive img-fullwidth" src="{{asset('uploads/'.$site->imglink) }}" alt="..."></a>
                  </div>
                  @endif
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
