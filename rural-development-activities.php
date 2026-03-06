<!DOCTYPE html>
<html lang="zxx">
    <head>
		<?php
			$page = "rural_development_activity";
		 	include("stylesheet.php"); 
		 ?>
    </head>
    <body>
       <?php
       		 include("header.php");
       		 include("search-modal.php");
       		?>
              <div class="page-title-area bg-5">
                  <div class="container">
                     <div class="page-title-content">
                        <h2>Rural Development Activities</h2>
                        <ul>
                           <li>
                              <a href="index.php">
                                 Home 
                              </a>
                           </li>

                           <li class="active">Rural Development Activities</li>
                        </ul>
                     </div>
                  </div>
            </div>

         <section class="blog-post-area ptb-100">
         <div class="container">
            <div class="row">
               <div class="col-lg-8">
                  <div class="row justify-content-md-center">
                     <div class="col-lg-12 col-md-6">
                        <div class="single-blog">
                           <a href="#" class="blog-img">
                              <img src="assets/images/activities/MBA-MIT-Activity-Holapu.jpg" alt="MBA MIT Activity Holapu">
                              <span>Activities</span>
                           </a>
      
                           <div class="blog-content">
                              <!-- <ul>
                                 <li>
                                    <i class="ri-calendar-line"></i>
                                    <span>26 March, 2021</span>
                                 </li>
                              </ul> -->
         
                              <h3>
                                 <a href="#">
                                    HOLAPU
                                 </a>
                              </h3>
         
                              <p>Initiation of Grama Panchayath towards Rural Development. MITK MBA students actively volunteered in the program and were appreciated by the Grama Panchayath for their organising skills.</p>
                           </div>
                        </div>
                     </div>
      
                     <div class="col-lg-12 col-md-6">
                        <div class="single-blog">
                           <a href="#" class="blog-img">
                              <img src="assets/images/activities/MBA-MIT-Visit-Shivaram-Karanth-Theme-Park.jpg" alt="MBA MIT Visit Shivaram Karanth Theme Park">
                              <span>Activities</span>
                           </a>
      
                           <div class="blog-content">
                              <!-- <ul>
                                 <li>
                                    <i class="ri-calendar-line"></i>
                                    <span>28 March, 2021</span>
                                 </li>
                              </ul> -->
         
                             <!--  <h3>
                                 <a href="blog-details.html">
                                    What and where choosing to study
                                 </a>
                              </h3> -->
         
                              <p>Students visited Kota Shivaram Karanth Theme Park and attended a session on "Competitive Exams" conducted by Mr. Harish - PDO, Maravante. Resource person encouraged MBA students to enroll themselves in Rural Development Activities.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <?php include("right-bar.php"); ?>
            </div>
         </div>
      </section>
           
            <?php
       		 include("footer.php");
       		 include("jsfiles.php"); 
       ?>
    </body>
</html>