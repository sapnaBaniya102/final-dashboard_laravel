@extends('layout.layout')
@section('content')
   <!-- Start main-content -->
    <div class="main-content">
      <!-- Section: inner-header -->
      <section class="inner-header divider parallax layer-overlay overlay-dark-8" data-bg-img="images/bg/bg6.jpg">
        <div class="container pt-60 pb-60">
          <!-- Section Content -->
          <div class="section-content">
            <div class="row">
              <div class="col-md-12 text-center">
                <h2 class="title text-white">Blog</h2>
                <ol class="breadcrumb text-center text-black mt-10">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="blog.php">Blog</a></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section: Blog -->
      <section>
        <div class="container mt-30 mb-30 pt-30 pb-30">
          <div class="row blog-posts">

            <!-- Blog Masonry -->
            <div class="col-md-9">
              <div class="row">
                  @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    @foreach ($blogs as $blog)
                    <div class="col-md-4">
                      <div class="post-thumb thumb">
                        <a href="blog-detail.php?id={{ $blog->id }}">
                          <img src="{{asset('uploads/'. $blog->img_link) }}" alt="" class="img-responsive img-fullwidth" height="150">
                        </a>
                      </div>
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-grey text-uppercase m-0 mt-5">
                          <a href="blog-detail.php?id={{ $blog->id }}">{{ $blog->tittle }}</a>
                        </h4>
                        <p class="entry-text  m-0 mt-5">
                         {{ $blog->text }}
                        </p>
                      </div>
                    </div>
               @endforeach
              </div>


            </div>


            <!-- Blog Masonry -->
            <!-- sidebar -->
            <div class="col-md-3">
              <div class="sidebar sidebar-right mt-sm-30">
                <div class="widget">
                  <h5 class="widget-title line-bottom">Search box</h5>
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
                  <h5 class="widget-title line-bottom">Categories</h5>
                  <div class="categories">
                      @foreach ($blogs as $blog)
                        <ul class="list list-border angle-double-right">
                          <li><a href="blog-detail.php?id={{ $blog->id }}">{{ $blog->tittle }}</a></li>
                        </ul>
                  @endforeach
                  </div>
                </div>


              </div>
            </div>

            <!-- end sidebar -->
          </div>
        </div>

    </div>
    </section>
  </div>

@endsection
