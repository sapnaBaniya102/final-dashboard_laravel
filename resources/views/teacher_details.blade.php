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
                <h2 class="text-center text-white title">Teachers Details</h2>
                <ol class="mt-10 text-left text-black breadcrumb">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="teacher-page.php">Teachers</a></li>
                  <li><a href="active">Teacher Details</a></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section: Experts Details -->
      <section>
        <div class="container">
          <div class="section-content">

              <div class="row">
                <div class="col-md-4">
                  <div class="thumb">
                    <img src="{{ asset('uploads/'.$teacher_detail->img_link) }}" alt="">
                  </div>
                </div>
                <div class="col-md-8">
                  <h4 class="mt-0 mb-0 name font-24">{{ $teacher_detail->name }}</h4>
                  <h5 class="mt-5">{{ $teacher_detail->post }}</h5>
                  <p>{{ $teacher_detail->details }}</p>
                </div>
              </div>
              <div class="row mt-30">
                <div class="col-md-6">
                  <h4 class="line-bottom">About Me:</h4>
                  <div class="volunteer-address">
                    <ul>
                      <li>
                        <div class="mb-20 bg-light media border-bottom p-15">
                          <div class="media-left">
                            <i class="mt-5 fa fa-wrench text-theme-colored font-24"></i>
                          </div>
                          <div class="media-body">
                            <h5 class="mt-0 mb-0">Experiences:</h5>
                            <p>{{ $teacher_detail->experience }}</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="mb-20 bg-light media border-bottom p-15">
                          <div class="media-left">
                            <i class="mt-5 fa fa-map-marker text-theme-colored font-24"></i>
                          </div>
                          <div class="media-body">
                            <h5 class="mt-0 mb-0">Address:</h5>
                            <p>{{ $teacher_detail->address }}</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="bg-light media border-bottom p-15">
                          <div class="media-left">
                            <i class="mt-5 fa fa-phone text-theme-colored font-24"></i>
                          </div>
                          <div class="media-body">
                            <h5 class="mt-0 mb-0">Contact:</h5>
                            <p><span>Phone:</span>{{ $teacher_detail->contact }}<br></p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="clearfix">
                    <h4 class="line-bottom">Quick Contact:</h4>
                  </div>
                  <?php
                  if (isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $subject = $_POST['subject'];
                    $phone = $_POST['phone'];
                    $message = $_POST['message'];


                    $status = $_POST['status'];

                    if ($name != "" || $email != "" || $subject != "" ||  $phone != "" ||  $message != "") {
                      $query = "INSERT INTO message(name,email,subject,phone,details,status) VALUES ('$name','$email','$subject','$phone','$message','$status')";
                      $result1 = mysqli_query($conn, $query);



                      if ($result1) {

                  ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          <strong>New News Inserted</strong>
                        </div>

                        <script>
                          $(".alert").alert();
                        </script>
                      <?php


                      } else {
                      ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          <strong>News cannot be inserted</strong>
                        </div>

                        <script>
                          $(".alert").alert();
                        </script>
                      <?php

                      }
                    } else {
                      ?>
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Please Enter Every Field </strong>
                      </div>

                      <script>
                        $(".alert").alert();
                      </script>
                  <?php

                    }
                  }


                  ?>
                  <form id="contact-form" class="contact-form-transparent" action="{{ route('message.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <input type="text" placeholder="Enter Name" id="contact_name" name="name"  class="form-control">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <input type="text" placeholder="Enter Email" id="contact_email" name="email" class="form-control" >
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <input type="text" placeholder="Enter Subject" id="contact_subject" name="subject" class="form-control" >
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <textarea rows="5" placeholder="Enter Message" id="contact_message" name="details" required class="form-control"></textarea>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <input type="text" placeholder="Enter Phone number" id="phone" name="contact"  class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                     <button class="py-4 btn btn-primary font-weight-bolder px-9" type="submit" name="submit">Send Your Message</button>
                    </div>
                  </form>
                </div>
              </div>

          </div>
        </div>

      </section>

    </div>
    <!-- end main-content -->

@endsection
