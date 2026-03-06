<!DOCTYPE html>
<html lang="zxx">
    <head>
		<?php
			$page = "virtual_tour";
		 	include("stylesheet.php"); 
		 ?>
    </head>
    <body>
       <?php
       		 include("header.php");
       		 include("search-modal.php");
       		 ?>
       		 <!-- Start Page Title Area -->
			<div class="page-title-area bg-1">
				<div class="container">
					<div class="page-title-content">
						<h2>Virtual Tour – Video –YouTube</h2>

						<ul>
							<li>
								<a href="index.php">
									Home 
								</a>
							</li>

							<li class="active">Virtual Tour – Video –YouTube</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- End Page Title Area -->
					<!-- Start Banner Area -->
		<section class="banner-area banner-area-style-two jarallax" data-jarallax='{"speed": 0.3}'>
			<div class="container">
				<div class="video-banner">
					<img src="assets/images/banner/MIT_Kundapura-Campus-04.jpg" alt="MIT Kundapura Campus">

					<div class="video-button">
						<a href="assets/videos/MITK_INFRASTRUCTURE_VIDEO.mp4" class="popup-youtube video-btn">
							<i class="flaticon-play-button"></i>
						</a>
					</div>

					<!-- <div class="shape-1">
						<img src="assets/images/banner/banner-shape.png" alt="Image">
					</div> -->
				</div>
			</div>
		</section>
		<br>
		<!-- End Banner Area -->
			<?php
       		 include("footer.php");
       		 include("jsfiles.php"); 
       ?>
    </body>
</html>