@extends('layout.layout')
@section('content')
<!-- Start main-content -->
<div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5"
        data-bg-img="{{ asset('frontendassets/images/bg/bg6.jpg') }}">
        <div class="container pt-70 pb-20">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title text-white">Admission Form</h2>
                        <ol class="breadcrumb text-center text-black mt-10">
                            <li><a href="index.php">Home</a></li>

                            <li class="active text-gray-silver">Admission</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Job Apply Form -->
    <section class="divider">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-push-2">
                    <div class="border-1px p-30 mb-0">
                        <h3 class="text-theme-colored mt-0 pt-5">Apply Now</h3>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur elit.</p>

                        <form id="job_apply_form" name="job_apply_form" action="{{ route('admission.store') }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Name <small>*</small></label>
                                        <input name="name" type="text" placeholder="Enter Name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Email <small>*</small></label>
                                        <input name="email" class="form-control required email" type="email"
                                            placeholder="Enter Email">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Phone/Tel <small>*</small></label>
                                        <input name="phone" class="form-control" type="number"
                                            placeholder="Enter Phone">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Address<small>*</small></label>
                                        <input name="address" class="form-control" type="text"
                                            placeholder="Enter Address">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <label>Skill</label><br>
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="skill" id=""
                                                value="C++" checked>
                                            C++
                                        </label><br>
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="skill" id=""
                                                value="Python">
                                            Python
                                        </label>
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="skill" id=""
                                                value="Html/css">
                                            Html/css
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <label>Gender</label><br>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" name="gender" id="" value="Male"
                                            class="custom-control-input">Male
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description"></span>
                                    </label><br>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" name="gender" id="" value="Female"
                                            class="custom-control-input">Female
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description"></span>
                                    </label>

                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Ward no.<small>*</small></label>
                                        <select name="ward_no" class="form-control required">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="form-group">
                                <label>Message <small>*</small></label>
                                <textarea name="message" class="form-control required" rows="5"
                                    placeholder="Your cover letter/message sent to the employer"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Status<small>*</small></label>
                                    <select name="status" class="form-control required">
                                        <option value="Active">Active</option>
                                        <option value="Deactive">Deactive</option>
                                    </select>
                                </div>
                            </div>
</div>



                    <!-- <div class="form-group">
                  <label>Mark Sheet Upload</label>
                  <input name="form_attachment" class="file" type="file" multiple data-show-upload="false" data-show-caption="true">
                  <small>Maximum upload file size: 12 MB</small>
                </div> -->
                    <div class="form-group">
                        <input name="form_botcheck" class="form-control" type="hidden" value="" />

                        <button class="py-4 btn btn-primary font-weight-bolder px-9" type="submit"
                            name="submit">Submit</button>
                    </div>
                    </form>
                     </div>
                    <!-- Job Form Validation-->
                    <script type="text/javascript">
                        $("#job_apply_form").validate({
                    submitHandler: function(form) {
                      var form_btn = $(form).find('button[type="submit"]');
                      var form_result_div = '#form-result';
                      $(form_result_div).remove();
                      form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                      var form_btn_old_msg = form_btn.html();
                      form_btn.html(form_btn.prop('disabled', false).data("loading-text"));
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
            </div>
        </div>
</div>
</section>
</div>
<!-- end main-content -->
@endsection
