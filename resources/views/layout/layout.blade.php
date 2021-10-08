@include('include.top')
<body class="pt-sm-0">
  <div id="wrapper" class="clearfix">
    <!-- preloader -->
    <div id="preloader">
      <div id="spinner">
        <img alt="" src="images/preloaders/5.gif">
      </div>
      <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>

  <!-- Header -->
  @include('include.header')
  @yield('content')

  @include('include.footer')
  @include('include.bottom')
