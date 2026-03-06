<!DOCTYPE html>
<html lang="zxx">
    <head>
      <?php
         $page = "dept_gallery";
         include("stylesheet.php"); 
         include("../admin/dbconnect.php");
       ?>
    </head>
    <body>
       <?php
             include("header.php");
             include("search-modal.php");
               // $dept="";
               // if(isset($_GET['dept']))
               // {
               //    $dept=$_GET['dept'];
               // }
             ?>
             <div class="page-title-area bg-4">
               <div class="container">
                  <div class="page-title-content">
                     <h2>Gallery</h2>

                     <ul>
                        <li>
                           <a href="index.php">
                              Home 
                           </a>
                        </li>

                        <li class="active">Gallery</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="gallery-area gallery-popup ptb-100">
               <div class="container">
                 <div class="row justify-content-center">

                  <?php 
                     $dept_gallery_id="";
                     $department="";
                     $dept_gallery_image="";
                     $dept_gallery_title="";
                     $dept_gallery_desc="";
                     $dept_act_image_title="";
                     $dept_gallery_image_title="";
                     $activity_qry = "SELECT * from dept_gallery_tbl where dept_gallery_deleted='0' and department='Management Studies' order by dept_gallery_id desc";
                     $activity_res = $link->query($activity_qry);
                     $image_count=0;
                     while($activity_row = mysqli_fetch_array($activity_res))
                     {
                        $dept_gallery_id=$activity_row["dept_gallery_id"];
                        $department=$activity_row["department"];
                        $dept_gallery_image=$activity_row["dept_gallery_image"];
                        $dept_gallery_title=$activity_row["dept_gallery_title"];
                        $dept_gallery_desc=$activity_row["dept_gallery_desc"];
                        $dept_gallery_image_tags=$activity_row["dept_gallery_image_tags"];
                        $dept_gallery_image_title=$activity_row["dept_gallery_image_title"];
                        $image_count++;
                        ?>
                     <div class="col-lg-4 col-md-6">
                        <div style="display:none;" id="image_count_<?php echo $image_count; ?>">
                           <?php echo strip_tags($dept_gallery_title); ?>
                        </div>
                        <div class="single-gallery" >
                           <img src="https://mitkundapura.com/deptgalleryimage/<?php echo $dept_gallery_image; ?>" alt="<?php echo strip_tags($dept_gallery_image_tags); ?>" title="<?php echo strip_tags($dept_gallery_image_title); ?>">
         
                           <div class="gallery-item-content">
                              <div class="gallery-link">
                                 <a href="https://mitkundapura.com/deptgalleryimage/<?php echo $dept_gallery_image; ?>">

                                    <i class="ri-add-fill" onclick="display_content('<?php echo strip_tags($dept_act_title); ?>')"></i>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- <script type="text/javascript">
                        const collection = document.getElementsByClassName("mfp-title");
                        alert(collection);
                        collection[0].innerHTML = "Hello World!";
                     </script> -->
                        <?php
                     }
                  ?>
                     
                      

                  
                   <!--   <div class="cal-12">
                        <div class="gallery-btn">
                           <a href="#" class="default-btn load-more">
                              <span>
                                 Load more
                                 <i class="ri-arrow-right-line"></i>
                              </span>
                           </a>
                        </div>
                     </div> -->
                  </div>
               </div>
            </div>
            <script type="text/javascript">
               function display_content(val)
               {
                  setTimeout(function() {
                  myGreeting(val);
            }, 1000);    
               }
              function myGreeting(val)
               {
                  const collection = document.getElementById("mfp_title_id");
                  //alert(collection);
                  collection.innerHTML=val;
               }

               function displayTitle()
               {
                  //alert("hh");
                   const counter_collection = document.getElementById("mfp_counter_id");
                   var counter_data = counter_collection.innerHTML;
                   counter_data = counter_data.trim();
                  
                   var split_Arr = counter_data.split(" ");
                   var count = split_Arr[0];
                   var total_count = split_Arr[2];
                   if(total_count == count)
                   {
                     count = parseInt(count)-1;
                   }
                   else
                   {
                     count = parseInt(count)+1;
                   }
                   
                   var content = document.getElementById("image_count_"+count).innerHTML;
                    setTimeout(function() {
                  myGreeting(content.trim());
            }, 1000);
                  //  const collection = document.getElementById("mfp_title_id");
                  // //alert(collection);
                  // collection.innerHTML=content.trim();
                  
               }
            </script>
             <?php
             include("footer.php");
             include("jsfiles.php"); 
       ?>
    </body>
</html>