<!-- Footer -->
<footer id="footer" class="footer bg-black-222" data-bg-img="images/footer-bg.png">
    <div class="container pt-70 pb-40">
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">

            <img class="mt-10 mb-15" alt="" src="admin/dist/uploads/">
            <p class="font-16 mb-10"></p>

            <ul class="styled-icons icon-dark mt-20">

@foreach ($sites as $site)


@if ($site->site_key=='facebook')
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".1s" data-wow-offset="10"><a href="{{ $site->site_value }}" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
@endif
@endforeach

@foreach ($sites as $site)


@if ($site->site_key=='google')
     <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".4s" data-wow-offset="10"><a href="" data-bg-color="#A11312"><i class="fa fa-google-plus"></i></a></li>
@endif
@endforeach



@foreach ($sites as $site)


@if ($site->site_key=='youtube')
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s" data-wow-offset="10"><a href="" data-bg-color="#C22E2A"><i class="fa fa-youtube"></i></a></li>
              @endif
@endforeach


            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Quick Links</h5>
            <ul class="list angle-double-right list-border">
              <li><a href="{{  url('aboutus') }}">About Us</a></li>
              <li><a href="{{  url('notice') }}">Examination Notice</a></li>
              <li><a href="{{  url('course') }}">Courses</a></li>
              <li><a href="{{  url('news') }}">News</a></li>
              <li><a href="{{  url('contact') }}">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Useful Links</h5>
            <ul class="list angle-double-right list-border">
              <li><a href="{{  url('teacher') }}">Teachers</a></li>
              <li><a href="{{  url('gallery') }}">Gallery</a></li>
                  <li><a href="{{  url('event') }}">Event</a></li>
                  <li><a href="{{  url('blog') }}">Blogs</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Quick Contact</h5>

            <ul class="list-border">




@foreach ($sites as $site)


@if ($site->site_key=='location')
              <li><a href="{{ $site->site_value }}">{{ $site->site_value }}</a></li>
@endif
@endforeach



@foreach ($sites as $site)


@if ($site->site_key=='email')
              <li><a href="{{ $site->site_value }}">{{ $site->site_value }}</a></li>
@endif
@endforeach



@foreach ($sites as $site)


@if ($site->site_key=='contact')
              <li><a href="{{ $site->site_value }}" class="lineheight-20">{{ $site->site_value }}</a></li>
              @endif
@endforeach




            </ul>


          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom bg-black-333">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6">
            <p class="font-11 text-black-777 m-0"><a target="_blank" href="https://www.templateshub.net"> &copy; Copyright by Xdezo Technologies</a></p>
          </div>
          <div class="col-md-6 text-right">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5 font-12">
                <li>
                  <a href="#">FAQ</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Help Desk</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Support</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
</footer>
