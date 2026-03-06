<!DOCTYPE html>
<html lang="zxx">
    <head>
		<?php
			$page = "admission_enquiry";
		 	include("stylesheet.php"); 
		 ?>
       <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
       <script src="//geodata.solutions/includes/countrystatecity.js"></script>
        <script src=
        "https://www.google.com/recaptcha/api.js" async defer>
    </script>
    </head>
    <body>
       <?php
       		 include("header.php");
       		 include("search-modal.php");
             ?>
             <div class="page-title-area bg-1">
               <div class="container">
                  <div class="page-title-content">
                     <h2>Admission Enquiry</h2>

                     <ul>
                        <li>
                           <a href="index.php">
                              Home 
                           </a>
                        </li>

                        <li class="active">Admission Enquiry</li>
                     </ul>
                  </div>
               </div>
            </div>

            <section class="candidates-resume-area ptb-100">
               <div class="container">
                  <center><?php if(isset($_GET["message"])){ echo "<b style='color:green;'>Thank you... MITK will contact you shortly...</b><br><br>";} ?></center>
                  <div class="candidates-resume-content">
                     <form class="resume-info" method="post" action="admission-process.php" id="admissionForm">
                        <h3>Student information</h3>

                        <div class="row">
                           <div class="col-lg-6 col-md-6">
                              <div class="form-group">
                                 <label>Name</label>
                                 <input class="form-control" type="text" name="name" placeholder="Name" required>
                              </div>
                           </div>

                           <div class="col-lg-6 col-md-6">
                              <div class="form-group">
                                 <label>Contact</label>
                                 <input class="form-control" type="number" name="contact" placeholder="Contact" required>
                              </div>
                             
                           </div>

                           <div class="col-lg-6 col-md-6">
                              <div class="form-group">
                                 <label for="email">Email</label>
                                 <input type="email" class="form-control" id="email" name="email" name="Email" placeholder="Email" required>
                              </div>
                           </div>

                           <div class="col-lg-6 col-md-6">
                              <div class="form-group">
                                 <label for="program">Program</label>
                                  <select class="form-control" id="program" name="program" required onchange="get_course(this.value)">
                                    <option value="">Select Program</option>
                                    <option value="UG - Bachelor of Engineering">UG - Bachelor of Engineering</option>
                                    <option value="PG - Master of Business Administration">PG - Master of Business Administration</option>
                                 </select>
                              </div>
                           </div>

                           <div class="col-lg-6 col-md-6">
                              <div class="form-group">
                                 <label for="course">Course</label>
                                  <select class="form-control" id="course" name="course" required>
                                    <option value="">Select Course</option>
                                 </select>
                              </div>
                           </div>

                           <div class="col-lg-6 col-md-6">
                              <div class="form-group">
                                 <label for="country">Country</label>
                                 <select name="country" class="countries form-control " id="countryId" required disabled="true">
                                     <option value="">Select Country</option>
                                </select>
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6">
                              <div class="form-group">
                                 <label for="state">State</label>
                                 <select name="state" class="states form-control " id="stateId" required disabled="true">
                                       <option value="">Select State</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6">
                              <div class="form-group">
                                 <label for="city">City</label>
                                  <select name="city" class="cities form-control" id="cityId" required disabled="true">
                                      <option value="">Select City</option>
                                  </select>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-lg-12 col-md-12">
                              <div class="form-group">
                                 <label for="message">Message</label>
                                  <textarea id="message" name="message" class="form-control" rows="5" required placeholder="Message..."></textarea>
                              </div>
                           </div>
                        </div>
                         <!-- div to show reCAPTCHA -->
               <div class="g-recaptcha" 
                                data-sitekey="6LfwoWofAAAAAEwY8gcFol4rtutn_oUXR60USvZp">
               </div>
               <div id="captcha_resp_div"></div>
                         <br>
                        <div class="col-lg-12">
                        <button  type="submit" class="default-btn">
                           Submit
                           <i class="ri-arrow-right-line"></i>
                        </button>
                     </div>
                     </form>
                  </div>
               </div>
            </section>
            <script type="text/javascript">
                document.getElementById("admissionForm").addEventListener("submit",function(evt)
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
               // document.contform.action="contact-process.php";
               // document.contform.method="post";
               // document.contform.submit();
              }
              //captcha verified
              //do the rest of your validations here
              
            });
               function get_course(program)
               {
                  $.ajax({
                         type : "GET",
                         url:"ajax-get-course.php?program="+program,
                         success:function(response)
                         {
                             document.getElementById("course").innerHTML=response;
                         }
                     }); 
               }
            </script>
       		 <?php
       		 include("footer.php");
       		 include("jsfiles.php"); 
       ?>
    </body>
</html>