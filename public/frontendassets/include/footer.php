<!-- Footer -->
<footer id="footer" class="footer bg-black-222" data-bg-img="images/footer-bg.png">
    <div class="container pt-70 pb-40">
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
          <?php 
                    $name_query="SELECT * FROM siteconfig WHERE site_key='logo'";
                    $name_result=mysqli_query($conn,$name_query);
                    $row=$name_result->fetch_assoc();
                    
?>
            <img class="mt-10 mb-15" alt="" src="admin/dist/uploads/<?php echo($row['img_link']); ?>">
            <p class="font-16 mb-10"><?php echo($row['site_value']); ?></p>
            
            <ul class="styled-icons icon-dark mt-20">
            <?php 
                    $name_query1="SELECT * FROM siteconfig WHERE site_key='facebook'";
                    $name_result1=mysqli_query($conn,$name_query1);
                    $row1=$name_result1->fetch_assoc();
                    ?>

              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".1s" data-wow-offset="10"><a href="<?php echo($row1['site_value']); ?>" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
              <?php 
                    $name_query2="SELECT * FROM siteconfig WHERE site_key='twitter'";
                    $name_result2=mysqli_query($conn,$name_query2);
                    $row3=$name_result2->fetch_assoc();
                    ?>
                    

 
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".3s" data-wow-offset="10"><a href="<?php echo($row3['site_value']); ?>" data-bg-color="#05A7E3"><i class="fa fa-skype"></i></a></li>
              <?php 
                    $name_query2="SELECT * FROM siteconfig WHERE site_key='google'";
                    $name_result2=mysqli_query($conn,$name_query2);
                    $row4=$name_result2->fetch_assoc();
                    ?>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".4s" data-wow-offset="10"><a href="<?php echo($row4['site_value']); ?>" data-bg-color="#A11312"><i class="fa fa-google-plus"></i></a></li>
              <?php 
                    $name_query2="SELECT * FROM siteconfig WHERE site_key='youtube'";
                    $name_result2=mysqli_query($conn,$name_query2);
                    $row5=$name_result2->fetch_assoc();
                    ?>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s" data-wow-offset="10"><a href="<?php echo($row5['site_value']); ?>" data-bg-color="#C22E2A"><i class="fa fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Quick Links</h5>
            <ul class="list angle-double-right list-border">
              <li><a href="about-aboutus.php">About Us</a></li>
              <li><a href="examination-notice.php">Examination Notice</a></li>
              <li><a href="course.php">Courses</a></li>
              <li><a href="news.php">News</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Useful Links</h5>
            <ul class="list angle-double-right list-border">
              <li><a href="teacher-page.php">Teachers</a></li>
              <li><a href="gallery.php">Gallery</a></li>
                  <li><a href="event.php">Event</a></li>
                  <li><a href="blog.php">Blogs</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Quick Contact</h5>
        <?php 
                    $name_query="SELECT * FROM siteconfig WHERE site_key='number'";
                    $name_result=mysqli_query($conn,$name_query);
                    $row=$name_result->fetch_assoc();
                    
                    ?>
            <ul class="list-border">
              <li><a href="#"><?php echo $row['site_value']; ?></a></li>

              <?php 
                    $name_query1="SELECT * FROM siteconfig WHERE site_key='email'";
                    $name_result1=mysqli_query($conn,$name_query1);
                    $row=$name_result1->fetch_assoc();
                    
                    ?>
              <li><a href="#"><?php echo $row['site_value'];?></a></li>
              <?php 
                    $name_query2="SELECT * FROM siteconfig WHERE site_key='location'";
                    $name_result2=mysqli_query($conn,$name_query2);
                    $row=$name_result2->fetch_assoc();
                    
                    ?>
              <li><a href="#" class="lineheight-20"><?php echo $row['site_value'];?></a></li>
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
