@extends('layout.layout')
@section('content')

<!-- Start main-content -->
    <div class="main-content">


      <!-- Section: inner-header -->
      <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg3.jpg">
        <div class="container pb-20 pt-70">
          <!-- Section Content -->
          <div class="section-content">
            <div class="row">
              <div class="col-md-12">
                <h2 class="text-center text-white title">Gallery</h2>
                <ol class="mt-10 text-left text-black breadcrumb">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="gallery.php">Gallery</a></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Gallery Grid 3 -->
      <section>
        <div class="container">
          <div class="section-content">
            <div class="row">
              <div class="col-md-12">
                <!-- Portfolio Filter -->
                <div class="portfolio-filter">
                  <a href="#" class="active" data-filter="*">All</a>
                  @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    @foreach ($gallerycategories as $gallerycategory)

                      <a href="{{ $gallerycategory->g_name }}" class="" data-filter=".{{ $gallerycategory->g_name }}">{{ $gallerycategory->g_name }}</a>
               @endforeach
                </div>
                <!-- End Portfolio Filter -->

                <!-- Portfolio Gallery Grid -->
                <div id="grid" class="clearfix gallery-isotope masonry grid-4 gutter">
                  <!-- Portfolio Item Start -->
                  @foreach ($galleries as $gallery)
                  @foreach ($gallerycategories as $gallerycategory)
                  @if ($gallerycategory->g_id==$gallery->g_id)
 <div class="gallery-item {{ $gallerycategory->g_name }}">
                  @endif

                  @endforeach
<div class="thumb">
                          <img class="img-fullwidth" src="admin/dist/uploads/{{ $gallery->img_link }}" alt="project">
                        </div>
                     </div>
                  @endforeach


                  <!-- Portfolio Item End -->




                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    </div>
    <!-- end main-content -->
@endsection
