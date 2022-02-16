<?php  
      include '../views/header.php'
?>
    <!-- Page Content -->
    <!-- About Page Starts Here -->
    <div class="contact-page">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Contact Us</h1>
            </div>
          </div>
     
          <div class="col-md-12">
            <div class="right-content">
              <div class="container">
                <form id="contact" action="?act=send" method="post">
                  <div class="row">
                    
                    <div class="col-md-12">
                      <fieldset>
                        <input name="email" type="text" class="form-control" id="email" placeholder="Your email..." >
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject..." >
                      </fieldset>
                    </div>
                  
                    <div class="col-md-12">
                      <fieldset>
                      
                        <button type="submit" id="form-submit" class="button">gửi mail</button>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <div class="share">
                        <h6>You can also keep in touch on: <span><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></span></h6>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a href="?act=send">gui</a>
    <!-- About Page Ends Here -->

    <?php  
      include '../views/footer.php'
?>