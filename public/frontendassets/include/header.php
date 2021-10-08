<!-- Header -->
<header id="header" class="header">
    <div class="header-top bg-white-f1 sm-text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5">
                <li> <i class="fa fa-phone text-theme-colored"></i> Call Us at <a href="#">+(012) 345 6789</a> </li>
                <li> <i class="fa fa-envelope-o text-theme-colored"></i> <a href="#">contact@yourdomain.com</a> </li>
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
              <li class="active"><a href="index.php">Home</a>

              </li>
              <li><a href="#">About</a>
                <ul class="dropdown">
                  <li><a href="about-aboutus.php">About Us</a></li>
                  <li><a href="about-message.php">Message</a></li>
                  <li><a href="about-planning.php">Planning</a></li>

                </ul>
              </li>
              <li><a href="#">Examination</a>
                <ul class="dropdown">
                  <li><a href="examination-notice.php">Notice</a></li>
                  <li><a href="examination-result.php">Result</a></li>
                 

                </ul>
              </li>
              <li><a href="#">Courses</a>
             
                <ul class="dropdown">
                   <?php
                $select_event= "SELECT * FROM course_category";
                $result_event = mysqli_query($conn,$select_event);
                while($data=mysqli_fetch_array($result_event))
                {
                    ?>
                  <li><a href="course.php?id=<?php echo($data['c_id']); ?>"><?php echo($data['c_name']); ?></a></li>
                
         <?php
                }
            ?>
                </ul>
              </li>
           
              <li><a href="teacher-page.php">Teachers</a></li>

              <li><a href="news.php">News</a></li>
              <li><a href="#">Activities</a>
                <ul class="dropdown">
                  <li><a href="gallery.php">Gallery</a></li>
                  <li><a href="event.php">Event</a></li>
                  <li><a href="blog.php">Blogs</a></li>


                </ul>
              </li>

              <li><a href="contact.php">Contact</a></li>
            <li class="active">
                                    <a href="admission.php" class="apply-now-btn">Addmission</a>
                                </li>
  
            </ul>
        
          
          </nav>
                     
    
                                
                            
          
             
        </div>
     
      </div>
    </div>
  </header>