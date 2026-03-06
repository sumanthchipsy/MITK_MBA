<!DOCTYPE html>
<html lang="zxx">
    <head>
		<?php
			$page = "contact";
		 	include("stylesheet.php"); 
		 ?>
       <script src=
        "https://www.google.com/recaptcha/api.js" async defer>
    </script
    </head>
    <body>
       <?php
       		 include("header.php");
       		 include("search-modal.php");
       		 ?>
            <div class="page-title-area bg-2">
               <div class="container">
                  <div class="page-title-content">
                     <h2>Contact</h2>

                     <ul>
                        <li>
                           <a href="index.php">
                              Home
                           </a>
                        </li>

                        <li class="active">Contact</li>
                     </ul>
                  </div>
               </div>
            </div>

            <!-- Start Contact Info Area -->
      <section class="contact-info-area ptb-100">
         <div class="container">
            <div class="row">
               <div class="col-lg-7">
                  <div class="map-area">
                    <!--  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3077.5968400730185!2d-119.76188708437041!3d39.523588017394154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80993f3dfa5eeaf5%3A0x70954ca5a06c2014!2s1312%20Greg%20St%2C%20Sparks%2C%20NV%2089431%2C%20USA!5e0!3m2!1sen!2sbd!4v1615354573837!5m2!1sen!2sbd"></iframe> -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3877.712570622212!2d74.7299799143302!3d13.614358804132806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbc91d36b10c421%3A0xf81d6f372d45fe50!2sMoodlakatte%20Institute%20of%20Technology%20%26%20Management!5e0!3m2!1sen!2sin!4v1642264774612!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  </div>
               </div>

               <div class="col-lg-5">
                  <div class="contact-info">
                     <h2>Get in touch</h2>

                     <ul class="address">
                        <li class="location">
                           <i class="ri-map-pin-2-fill"></i>
                           <span>Address</span>
                           Moodlakatte, Near Railway Station<br>
                           Kundapura - 576217, Karnataka, INDIA.
                        </li>
                        <li>
                           <i class="ri-mail-line"></i>
                           <span>Email</span>
                           <a href="#">office@mitkundapura.com</a>
                        </li>
                        <li>
                           <i class="ri-phone-fill"></i>
                           <span>Phone</span>
                           For Admission Call <br>
                           +919036021033
                        </li>
                     </ul>

                     <h3>Follow Us</h3>

                     <ul class="social-link">
                        <li>
                           <a href="https://www.facebook.com/mitkpage/" target="_blank">
                              <i class="ri-facebook-fill"></i>
                           </a>
                        </li>
                        <li>
                           <a href="https://www.instagram.com/mitkundapura/" target="_blank">
                              <i class="ri-instagram-fill"></i>
                           </a>
                        </li>
                        <li>
                           <a href="https://www.linkedin.com/company/moodlakatte-institute-of-technology-kundapura-mitk" target="_blank">
                              <i class="ri-linkedin-box-fill"></i>
                           </a>
                        </li>
                        <li>
                           <a href="https://twitter.com/KundapurMit/" target="_blank">
                              <i class="ri-twitter-fill"></i>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="contact-area pb-100">
         <div class="container">
            <div class="section-title">
               <h2>Send us a quick message</h2>
               <!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis ut nostrum, quibusdam, voluptatum eaque illo cum, aperiam accusantium reprehenderit</p> -->
               <br>
               <?php 
                  if(isset($_GET['message']))
                  {
                     echo "<b style='color:green;'>Thank you... MITK will contact you shortly...</b>";
                  }
                ?>
            </div>
            
            <form method="post" name="contform" action="contact-process.php" id="contactForm">
               <div class="row">

                  <div class="col-lg-6 col-sm-6">
                     <br>
                     <div class="form-group">
                        <label><b>Name</b></label>
                        <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                     </div>
                  </div>
                  
                  <div class="col-lg-6 col-sm-6">
                     <br>
                     <div class="form-group">
                        <label><b>Mail</b></label>
                        <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email">
                        <div class="help-block with-errors"></div>
                     </div>
                  </div>
               </div>
               
               <div class="row">
                  <div class="col-lg-6 col-sm-6">
                  <br>
                     <div class="form-group">
                        <label><b>Phone</b></label>
                        <input type="number" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control">
                        <div class="help-block with-errors"></div>
                     </div>
                  </div>
               
                  <div class="col-lg-6 col-sm-6">
                  <br>
                     <div class="form-group">
                        <label><b>Subject</b></label>
                        <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
                        <div class="help-block with-errors"></div>
                     </div>
                  </div>
               </div>
               
               <div class="row">
                  <div class="col-lg-12">
                  <br>
                     <div class="form-group">
                        <label><b>Message</b></label>
                        <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message"></textarea>
                        <div class="help-block with-errors"></div>
                     </div>
                  </div>
               </div>
               <br>
                <br>
                <!-- div to show reCAPTCHA -->
               <div class="g-recaptcha" 
                                data-sitekey="6LfwoWofAAAAAEwY8gcFol4rtutn_oUXR60USvZp">
               </div>
               <div id="captcha_resp_div"></div>
               
                  
                  <div class="row">
                  <div class="col-lg-12 col-md-12">
                     <br>
                     <button type="submit" class="default-btn">
                        <span>Send message</span>
                     </button>
                     
                     <div class="clearfix"></div>
                  </div>
               </div>
            </form>
         </div>
      </section>
       <script type="text/javascript">
          document.getElementById("contactForm").addEventListener("submit",function(evt)
              {
              
              var response = grecaptcha.getResponse();
              if(response.length == 0) 
              { 
                //reCaptcha not verified
                //alert("please verify you are humann!"); 
                captcha_resp_div
                document.getElementById("captcha_resp_div").innerHTML="<font color='red'>please verify you are human!</font>";
                evt.preventDefault();
                return false;
              }
              else
              {
               //alert("kkk");
               document.getElementById("captcha_resp_div").innerHTML="";
               document.contform.action="contact-process.php";
               document.contform.method="post";
               document.contform.submit();
              }
              //captcha verified
              //do the rest of your validations here
              
            });

      </script>
      <?php
       		 include("footer.php");
       		 include("jsfiles.php"); 
       ?>
    </body>
</html>