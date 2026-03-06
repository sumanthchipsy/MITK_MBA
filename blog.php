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
						<h2 id="title">Loading...</h2>

						<!-- <ul>
							<li>
								<a href="index.php">
									Home 
								</a>
							</li>

							<li class="active">Virtual Tour – Video –YouTube</li>
						</ul> -->
					</div>
				</div>
			</div>
			<!-- End Page Title Area -->
					<!-- Start Banner Area -->

        <div class="blog-content-wrapper">
            <div class="container">
                <div id="gallery" class="image-gallery"></div>
				<div id="video" class="video-gallery"></div>
                <div id="content"></div>
            </div>
        </div>

        <script src="assets/js/blog.js"></script>

		<br>
		<!-- End Banner Area -->
			<?php
       		 include("footer.php");
       		 include("jsfiles.php"); 
       ?>
    </body>
</html>