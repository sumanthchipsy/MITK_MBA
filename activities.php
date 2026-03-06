<!DOCTYPE html>
<html lang="zxx">
    <head>
		<?php
			$page = "recent_activity";
		 	include("stylesheet.php");
		 	include("../admin/dbconnect.php"); 
		 ?>
    </head>
    <body>
    	<?php
       		 include("header.php");
       		 include("search-modal.php");
       		 // $dept="";
             //   if(isset($_GET['dept']))
             //   {
             //      $dept=$_GET['dept'];
             //   }
       		?>
       		<div class="page-title-area bg-5">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Recent Activities</h2>
                        <ul>
                           <li>
                              <a href="index.php">
                                 Home 
                              </a>
                           </li>

                           <li class="active">Recent Activities</li>
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
									<?php 
								 $dept_act_id="";
			                     $department="";
			                     $dept_act_image="";
			                     $dept_act_title="";
			                     $dept_act_desc="";
			                     $dept_act_image_title="";
			                     $dept_act_image_tags="";
			                    $activity_qry = "SELECT * from dept_activities where dept_act_deleted='0' and department='Management Studies' order by dept_act_id desc";
			                     $activity_res = $link->query($activity_qry);
			                     $image_count=0;
			                     while($activity_row = mysqli_fetch_array($activity_res))
			                     {
			                        $dept_act_id=$activity_row["dept_act_id"];
			                        $department=$activity_row["department"];
			                        $dept_act_image=$activity_row["dept_act_image"];
			                        $dept_act_title=$activity_row["dept_act_title"];
			                        $dept_act_desc=$activity_row["dept_act_desc"];
			                        $dept_act_image_tags=$activity_row["dept_act_image_tags"];
			                        $dept_act_image_title=$activity_row["dept_act_image_title"];
			                        $image_count++;
			                        ?>
			                        <a href="#" class="blog-img">
										<img src="https://mitkundapura.com/deptactivityimage/<?php echo $dept_act_image; ?>" alt="<?php echo strip_tags($dept_act_image_tags); ?>" title="<?php echo strip_tags($dept_act_image_title); ?>">
												<span>MITK</span>
									</a>
									<div class="blog-content">	
										<h3>
											<a href="#">
												<?php echo strip_tags($dept_act_title); ?>
											</a>
										</h3>
										<p>
											<?php echo strip_tags($dept_act_desc); ?>
										</p>
									
									</div>
			                        <?php
			                     }
			                        ?>
									
		
									
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