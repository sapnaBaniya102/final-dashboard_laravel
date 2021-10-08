<!-- Header -->
<header id="header" class="header">
    <div class="header-top bg-white-f1 sm-text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5">
@foreach ($sites as $site)


@if ($site->site_key=='contact')
                <li> <i class="fa fa-phone text-theme-colored"></i> Call Us at <a href="#">{{ $site->site_value }}</a> </li>
                @endif
@endforeach



@foreach ($sites as $site)


@if ($site->site_key=='email')
                <li> <i class="fa fa-envelope-o text-theme-colored"></i> <a href="#">{{ $site->site_value }}</a> </li>
                @endif
@endforeach
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
          <nav id="menuzord-right" class="menuzord default">
            <a class="menuzord-brand pull-left flip" href="javascript:void(0)">
              <img src="images/logo-wide.png" alt="">
            </a>
            <ul class="menuzord-menu">
              <li class="active"><a href="{{ url('index') }}">Home</a>

              </li>
              <li><a href="#">About</a>
                <ul class="dropdown">
                  <li><a href="{{ url('aboutus') }}">About Us</a></li>
                  <li><a href="{{ url('messages') }}">Message</a></li>
                  <li><a href="{{ url('planning') }}">Planning</a></li>

                </ul>
              </li>
              <li><a href="#">Examination</a>
                <ul class="dropdown">
                  <li><a href="{{ url('notices') }}">Notice</a></li>
                  <li><a href="{{ url('results') }}">Result</a></li>


                </ul>
              </li>
              <li><a href="#">Courses</a>

                <ul class="dropdown">
@foreach ($categories as $category)
  <li><a href="{{ url('courses/'.$category->c_id) }}">{{ $category->c_name }}</a></li>
@endforeach



                </ul>
              </li>

              <li><a href="{{ url('teachers') }}">Teachers</a></li>

              <li><a href="{{ url('newses') }}">News</a></li>
              <li><a href="#">Activities</a>
                <ul class="dropdown">
                  <li><a href="{{ url('galleries') }}">Gallery</a></li>
                  <li><a href="{{ url('events') }}">Event</a></li>
                  <li><a href="{{ url('blogs') }}">Blogs</a></li>


                </ul>
              </li>

              <li><a href="{{ url('contacts') }}">Contact</a></li>
            <li class="active">
                                    <a href="{{ url('admissions') }}" class="apply-now-btn">Addmission</a>
                                </li>

            </ul>


          </nav>






        </div>

      </div>
    </div>
  </header>
