<?php 
include('components/header.php');

$database = new Database();
$course = new Course($database);
$courses = $course->index();
?>

<!-- ***** Main Banner Area Start ***** -->
  <section class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="header-text">
            <h6>Welcome to our school</h6>
            <h2>Best Place To Learn Graphic <em>Design!</em></h2>
            <div class="main-button-gradient">
              <div class="scroll-to-section"><a href="#contact-section">Join Us Now!</a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-image">
            <img src="assets/images/banner-right-image.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="our-courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6>OUR COURSES</h6>
            <h4>What You Can <em>Learn</em></h4>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="tabs">
              <div class="row">
                <div class="col-lg-3">
                  <div class="menu">
                    <?php foreach ($courses as $index => $course): ?>
                      <div class="<?php echo $index == 0 ? 'active ' : ''; ?>gradient-border">
                        <span><?php echo $course['name']; ?></span>
                      </div>
                    <?php endforeach; ?>
                  </div>
                </div>
                <div class="col-lg-9">
                  <ul class="nacc">
                    <?php foreach ($courses as $index => $course): ?>
                      <li class="<?php echo $index == 0 ? 'active' : ''; ?>">
                        <div>
                          <div class="left-image">
                            <img src="assets/images/courses-<?php echo $course['id']; ?>.jpg" alt="">
                            <div class="price"><h6>$128</h6></div>
                          </div>
                          <div class="right-content">
                            <h4><?php echo $course['name']; ?></h4>
                            <p><?php echo $course['description']; ?></p>
                            <span><?php echo $course['hours']; ?> hours</span>
                            <span><?php echo $course['weeks']; ?> weeks</span>
                            <span class="last-span">3<?php echo $course['number_of_certificates']; ?> certificates</span>
                            <div class="text-button">
                              <a href="contact-us.php">Subscribe Course</a>
                            </div>
                          </div>
                        </div>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 offset-lg-1">
          <div class="left-image">
            <img src="assets/images/cta-left-image.png" alt="">
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <h6>Get the sale right now!</h6>
          <h4>Up to 50% OFF For 1+ courses</h4>
          <p>Kogi VHS freegan bicycle rights try-hard green juice probably haven't heard of them cliche la croix af chillwave.</p>
          <div class="white-button">
            <a href="contact-us.php">View Courses</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="testimonials" id="testimonials">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h6>Testimonials</h6>
            <h4>What They <em>Think</em></h4>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;">
            <div class="item">
              <p>“just think about TemplateMo if you need free CSS templates for your website”</p>
                <h4>Catherine Walk</h4>
                <span>CEO &amp; Founder</span>
                <img src="assets/images/quote.png" alt="">
            </div>
            <div class="item">
              <p>“think about our website first when you need free HTML templates for your website”</p>
                <h4>David Martin</h4>
                <span>CTO of Tech Company</span>
                <img src="assets/images/quote.png" alt="">
            </div>
            <div class="item">
              <p>“just think about our website wherever you need free templates for your website”</p>
                <h4>Sophia Whity</h4>
                <span>CEO and Co-Founder</span>
                <img src="assets/images/quote.png" alt="">
            </div>
            <div class="item">
              <p>“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”</p>
                <h4>Helen Shiny</h4>
                <span>Tech Officer</span>
                <img src="assets/images/quote.png" alt="">
            </div>
            <div class="item">
              <p>“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”</p>
                <h4>George Soft</h4>
                <span>Gadget Reviewer</span>
                <img src="assets/images/quote.png" alt="">
            </div>
            <div class="item">
              <p>“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”</p>
                <h4>Andrew Hall</h4>
                <span>Marketing Manager</span>
                <img src="assets/images/quote.png" alt="">
            </div>
            <div class="item">
              <p>“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”</p>
                <h4>Maxi Power</h4>
                <span>Fashion Designer</span>
                <img src="assets/images/quote.png" alt="">
            </div>
            <div class="item">
              <p>“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”</p>
                <h4>Olivia Too</h4>
                <span>Creative Designer</span>
                <img src="assets/images/quote.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const menuItems = document.querySelectorAll('.menu > div');
      const contentItems = document.querySelectorAll('.nacc > li');

      menuItems.forEach((item, index) => {
        item.addEventListener('click', () => {
          menuItems.forEach(i => i.classList.remove('active'));
          contentItems.forEach(c => c.classList.remove('active'));

          item.classList.add('active');
          if (contentItems[index]) {
            contentItems[index].classList.add('active');
          }
        });
      });
    });
  </script>

  <?php 
include('components/footer.php');
?>