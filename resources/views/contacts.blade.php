@extends('layout.layout')
@section('content')
   <!-- Start main-content -->
    <div class="main-content">
      <!-- Section: inner-header -->
      <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg6.jpg">
        <div class="container pb-20 pt-70">
          <!-- Section Content -->
          <div class="section-content">
            <div class="row">
              <div class="col-md-12">
                <h2 class="text-center text-white title">Contact</h2>
                <ol class="mt-10 text-left text-black breadcrumb">
                  <li><a href="index.php">Home</a></li>
                  <li class="active text-gray-silver"><a href="contact.php">Contact</a></li>

                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Divider: Contact -->
      <section class="divider">
        <div class="container">
          <div class="row pt-30">
            <div class="col-md-6">
              <h3 class="mt-0 line-bottom mb-30">Interested in discussing?</h3>



              <!-- Contact Form -->
              <form id="contact_form" name="contact_form" class="" action="{{ route('message.store') }}" method="POST" enctype="multipart/form-data">
@csrf
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Name <small>*</small></label>
                      <input name="name" class="form-control" type="text" placeholder="Enter Name" >
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Email <small>*</small></label>
                      <input name="email" class="form-control required email" type="email" placeholder="Enter Email">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Subject <small>*</small></label>
                      <input name="subject" class="form-control required" type="text" placeholder="Enter Subject">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Phone</label>
                      <input name="contact" class="form-control" type="text" placeholder="Enter Phone">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label>Message</label>
                  <textarea name="details" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                </div>
                <div class="form-group">

          <button class="py-4 btn btn-primary font-weight-bolder px-9" type="submit" name="submit">Send Your Message</button>
                </div>
              </form>

              <!-- Contact Form Validation-->
              <script type="text/javascript">
                $("#contact_form").validate({
                  submitHandler: function(form) {
                    var form_btn = $(form).find('button[type="submit"]');
                    var form_result_div = '#form-result';
                    $(form_result_div).remove();
                    form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                    var form_btn_old_msg = form_btn.html();
                    form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                    $(form).ajaxSubmit({
                      dataType: 'json',
                      success: function(data) {
                        if (data.status == 'true') {
                          $(form).find('.form-control').val('');
                        }
                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                        $(form_result_div).html(data.message).fadeIn('slow');
                        setTimeout(function() {
                          $(form_result_div).fadeOut('slow')
                        }, 6000);
                      }
                    });
                  }
                });
              </script>
            </div>
            <div class="col-md-6">
              <h3 class="mt-0 line-bottom">Get in touch with us</h3>
              <p>Aliquam officia dolor rerum enim doloremque iusto eos atque tempora dignissimos similique, quae, maxime sit accusantium delectus.</p>
              <ul class="mb-20 styled-icons icon-dark icon-sm icon-circled">
           @foreach ($sites as $site)
           @if ($site->site_key=='facebook')
 <li><a href="{{ $site->site_value }}" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
           @endif

           @endforeach

                @foreach ($sites as $site)
           @if ($site->site_key=='twitter')
    <li><a href="{{ $site->site_value }}" data-bg-color="#02B0E8"><i class="fa fa-twitter"></i></a></li>
           @endif

           @endforeach

               @foreach ($sites as $site)
           @if ($site->site_key=='google')
     <li><a href="{{ $site->site_value }}" data-bg-color="#D71619"><i class="fa fa-google-plus"></i></a></li>
           @endif

           @endforeach



              </ul>

              <div class="pb-0 mb-0 icon-box media"> <a class="mr-20 media-left pull-left flip" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
                <div class="media-body">
                  <h5 class="mt-0">Our Office Location</h5>
                    @foreach ($sites as $site)
           @if ($site->site_key=='location')
  <p>{{ $site->site_value }}</p>
           @endif

           @endforeach

                </div>
              </div>
              <div class="pt-0 pb-0 mt-0 mb-0 icon-box media"> <a class="media-left pull-left flip mr-15" href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
                <div class="media-body">

                  <h5 class="mt-0">Contact Number</h5>
                    @foreach ($sites as $site)
           @if ($site->site_key=='contact')
    <p><a href="tel:{{ $site->site_value }}">{{ $site->site_value }}</a></p>
           @endif

           @endforeach

                </div>
              </div>
              <div class="pt-0 pb-0 mt-0 mb-0 icon-box media"> <a class="media-left pull-left flip mr-15" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>

              <div class="media-body">
                  <h5 class="mt-0">Email Address</h5>
                    @foreach ($sites as $site)
           @if ($site->site_key=='email')
 <p><a href="mailto:{{ $site->site_value }}"></a>{{ $site->site_value }}</p>
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
