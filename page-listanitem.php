<?php

/**
 * Template Name: listanitem
 */
    require_once('sub-header.php');
    $user_id = $_SESSION['user_id'];
 
?>
<style>
	.nopadding {
		padding: 0 !important;
		margin: 0 !important;
	}
	.product-info{
	padding-left: 0px;
	}
	.product-info > p, .product-info > h4{
		font-size: medium !important;
	    color: #000;
		line-height: 20px; 
		text-align: left;
		font-family: 'AvenirNextLTW01-UltraLight', 'Didot', 'Didot Regular & Avenir Next Medium' !important;
		font-weight: bolder;

	}

	.first-list-wsh-option > ul>li{ 
        display: -moz-inline-stack;
        display: inline-block;
        vertical-align: top;
        margin: 5px;
        zoom: 1;
        display: inline; 
        margin:0px;
	}
	.first-list-wsh-option > ul>li > button{ 
         border-radius: 0px;
         font-size: 12px;
	}
</style>
<!--
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">-->
		<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
		
	 	<link rel="stylesheet" type="text/css" href="<?php  echo get_bloginfo ( 'template_url' ); ?>/css/custom-list.css" />
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
		<!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
	<!--     	<script src="<?php //echo JS; ?>/tops.js"></script> 
   <script src="--><?php //echo JS; ?><!--/dragDropUploadImg.js"></script>--> 




<div class = "container list-item-container"> 
        <input type="hidden" id = "user_id" value="<?php echo $user_id; ?>">
        <input type="hidden" id = "fileDragDropUploadImg" value="<?php echo get_site_url(); ?>/fileDragDropUploadImg"> 
	<div class="row"> 
        <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 " style="margin-bottom:2%; margin-top:50px;padding: 0px;" >
                
        		<!-- first-columns-row width-list-an-item" style="padding:0px; position: relative;height: auto;"-->
                <div class="col-lg-2 col-md-3 col-xs-12 col-sm-12 text-left" style="padding-left: 0px">
                	<!-- width: auto;text-align: left; position:static;top: 40px;-->
                    <p class = "font-column-size" style="font-family: 'AvenirNextLTW01-UltraLight', 'Avenir', 'Didot' !important;font-weight: bold;letter-spacing: 1px;" >
                        LIST AN ITEM
                    </p>
                </div>

                <!-- ftd  wsh-width  wsh-mglef wsh-width style="padding-left:0px;text-align: left;margin-left: 4.5%;" -->
                <div class="ftd col-lg-9 col-md-9 col-xs-12 col-sm-12 first-list-wsh-option" style="padding-left: 0px;padding-top: 0px" >
                    <ul>
                        <li>
                            <button type="button" class="btn btn-lg wm-cl-b wm-active " id = "btn-wn1" value = "womans clothing" rel = "btn-wn1" >WOMEN'S CLOTHING</button>
                        </li>
                        <li>
                           <button type="button" class="btn btn-lg " id = "btn-wn2" rel = "btn-wn2"  value = "shoes, bags and accessories" style = " padding: 10px 10px;" >SHOES, BAGS & ACCESSORIES</button>
                        </li>
                        <li>
                            <button type="button" class="btn btn-lg hm-b" id = "btn-wn3" value = "home" rel = "btn-wn3" >HOME</button>
                        </li>
                    </ul>
                </div>
 
		</div>
            <br>
			 


            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12" style = " margin-bottom:50px;padding-left: 0px;padding-right: 0px" > 
			<!--tds tds1 width-item-type-->
			<div class="col-lg-2 col-md-3 col-sm-12 col-xs-12 item-type-height item-type" >
                <h4 class = "font-column-size">
                    ITEM TYPE
                </h4> 
                <p>
                    What type of item are you listing?
                </p>
            </div> 
            <!--Sub categories-->  
				<?php					 
					require_once('isset/list_item_type_page.php');
				?>
            </div> 

 

 
    </div>
</div>
 
            <!--End of sub categories-->
        <!--end of the first column list an item-->


        <!--second column product info-->
						 <!--
<div class="col-md-12  clearfix" style="border-top:1px solid #afa5a5; "></div> sub-top
</div>
positioning-left
-->




    <div id = "" class="clearfix " style = "display:block;padding-top: 50px;border-top:1px solid #afa5a5;">
		 
		
        <div class="row clearfix " style=" margin: 0 auto; ">

        	<div>
<!--tds-col-->
	            <div class="col-lg-2 col-md-3 col-xs-12 col-sm-12 text-left  product-info clearfix">
	                <h4 class = "font-column-size  ">
	                    PRODUCT INFO
	                </h4>
	                <p style="font-size: 0.9em !important">
	                    Tell us about the details your item.
	                </p>
	            </div>   
	            <!-- wki-stl colmn-padds1 colmn-padds -->

	            <div class="col-lg-10 col-md-9 col-sm-12 col-xs-12" style="padding: 0px">


		            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item-collection"  style="padding-left: 0px;">
		                <div class="form-group">
		                    <label for="item" class = "condition-qs column-margnbotops margin-topbot">*Item/Collection Name</label>
		                    <input type="text" class="form-control" id="item"> 
		                </div>

		                <div class="col-lg-6  col-md-6 col-sm-6 col-xs-6 wki-rtv" style = "padding-right: 3px;">
		                    <div class="form-group">
		                        <label for="retail_value" class = "column-margnbotops margin-topbot" >Retail Value</label>
		                        <input type="text" class="form-control" onkeyup="computeDays()" id="retail_value" value = "249">
		                    </div>
		                </div>
		                <div class="col-lg-6  col-md-6 col-sm-6 col-xs-6 wki-rtv " style = " padding-left: 3px;">
		                    <div class="form-group">
		                        <label  for="selling_price" class = "column-margnbotops margin-topbot">*Selling Price</label>
		                        <input type="text" style = "cursor:auto" class="form-control" id="selling_price" value = "100">
		                    </div>
		                </div>
		            </div>
					 
					
					 <div class="col-lg-4  col-md-4 col-sm-6 col-xs-12 brand-designer"  style="padding-left: 0px;">
		                <div class="form-group">
		                    <label for="item" class = "condition-qs column-margnbotops margin-topbot">*Brand/Designer</label>
		                    <input type="text" class="form-control" id="brand"> 
		                </div>

		                <div class="col-lg-6  col-md-6 col-sm-6 col-xs-6 wki-rtv" style = "padding-right: 3px;">
		                    <div class="form-group">
		                        <label for="retail_value" class = "column-margnbotops margin-topbot" >offer Price</label>
		                        <input type="text" class="form-control"  value = "1" id=""  value = "249">
		                    </div>
		                </div>
		                <div class="col-lg-6  col-md-6 col-sm-6 col-xs-6 wki-rtv " style = " padding-left: 3px;">
		                    <div class="form-group">
		                        <label  for="selling_price" class = "column-margnbotops margin-topbot">Age of Item </label>
		                        <input type="text" style = "cursor:auto" class="form-control" value = "1" id="age_of_item" value = "100">
		                    </div>
		                </div>
		            </div>
		 
	 
					 <div class="col-lg-4  col-md-4 col-sm-12 col-xs-12" style="padding: 0px;">
		                <div class="form-group">
		                    <label for="item" class = "condition-qs column-margnbotops margin-topbot">*Size</label>
		                    <input type="text" class="form-control" id="size"> 
		                </div>

		                <div class="col-md-12 wki-rtv text-left" style = "padding-right: 3px;">
		                    <div class="form-group">
		                        <label class = "column-margnbotops" style="text-align: left">Can this item be purchased new online??</label>

			                    <button type="button" class="btn btn-primary btn-lg btn-color btnColor1 column-font" id = "brn-cl1" rel = "brn-cl1">YES</button>
			                    <button type="button" class="btn btn-primary btn-lg btn-color btnColor1 column-font btn-paddingLr" id = "brn-cl2" rel = "brn-cl2" >NO</button>
		                    </div>
		                </div> 
		            </div>
		 

	            </div> 



        	</div>








        	<div class="clearfix">
	            <div class="col-lg-2 col-md-3 col-xs-12 col-sm-12"  >
	            </div>  
	            <div class="col-lg-10  col-md-9 col-sm-12 col-xs-12 show-store-website colmn-padds1 colmn-padds " style = "display:none" >
	                <div class="col-lg-12  col-md-0 col-sm-0 col-xs-0" style="padding: 0px">
		                <div class="form-group">
		                    <label for="store_website" class = "column-margnbotops" style="margin-top: 0px;">Store Website</label>
		                    <input type="text" class="form-control column-font" id="store_website" placeholder = "Enter the website the item is currently being sold at.">
		                </div>
	                </div>
	            </div>

        	</div>


        	<div class="clearfix">
        		<div class="col-lg-2 col-md-3 col-xs-12 col-sm-12"  >
	            </div>  
	            <div class="col-lg-4  col-md-5 col-sm-4 col-xs-12 condition-qs colmn-padds1 colmn-padds colmn-margs" style = "margin-left:15px;text-align: left; padding-left: " >
	                <div class="form-group" >
	                    <p for="pwd" class ="column-font" class = "column-margnbotops">*Does this item still have the retail tags attached?</p>
	                    <button type="button" class="btn btn-primary btn-lg btn-color btn-color1 btnColor3 column-font" id = "btn-yn1" rel = "btn-yn1" value = "YES">YES</button>
	                    <button type="button" class="btn btn-primary btn-lg  btn-color btn-color1 btnColor3 column-font btn-paddingLr" id = "btn-yn2" rel = "btn-yn2" value = "NO">NO</button>
	                </div>
	            </div>

	            <div class="col-lg-5  col-md-4 col-sm-5 col-xs-12  condition-qs colmn-padds1 column-for-padding" >
	                <div class="form-group column-marginb" style = "text-align: left; ">

	                    <p for="pwd" class ="column-font  column-margnbotops" >*Does this item have any signs of wear and tear?</p>
	                    <div class="clearfix visible-lg"></div>
	                    <div class="clearfix visible-md"></div>
	                    <div class="clearfix visible-sm"></div>
	                    <div class="clearfix visible-xs "></div>
	                    <button type="button" class="btn btn-primary btn-lg btn-color btn-color1 btnColor4 column-font" id = "btn-yl1" rel = "btn-yl1">YES</button>
	                    <button type="button" class="btn btn-primary btn-lg  btn-color btn-color1 btnColor4 column-font btn-paddingLr" id = "btn-yl2" rel = "btn-yl2">NO</button>
	                </div>
	            </div>
        	</div>

        	<div class="clearfix">

        		<div class="col-lg-2 col-md-3 col-xs-12 col-sm-12"  >
	            </div>  
		            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 show-condition colmn-padds1 colmn-padds" style = "display:none;text-align: left; " >
		                <p>Condition</p>
		                <form role="form">
		                    <div class="checkbox checkbox-wear-tear">
		                        <label>
		                            <input type="checkbox" id = "check121" rel = "check121" value="">
		                            <p class = "column-font new-with-defects">
		                                <span>
		                                    <span class = "color-red">
		                                        New with defects:
		                                    </span>
		                                    Item is new with tags, but has slight defects from trying on or storage.
		                                </span>
		                            </p>
		                        </label>
		                    </div>
		                    <div class="checkbox checkbox-wear-tear">
		                        <label>
		                            <input type="checkbox" id = "check122" rel = "check122" value="" >
		                            <p class = "column-font excellent">
		                                <span>
		                                    <span class = "color-red">
		                                        Excellent:
		                                    </span>
		                                    Pre-owned, but shows no signs of wear.
		                                </span>
		                            </p>
		                        </label>
		                    </div>
		                    <div class="checkbox checkbox-wear-tear">
		                        <label>
		                            <input type="checkbox" id = "check123" rel = "check123"  value="" >
		                            <p class = "column-font good">
		                                <span>
		                                    <span class = "color-red">
		                                        Good:
		                                    </span>
		                                    Pre-owned, but shows slight signs of wear.
		                                </span>
		                            </p>
		                        </label>
		                    </div>
		                    <div class="checkbox checkbox-wear-tear">
		                        <label>
		                            <input type="checkbox" id = "check124" rel = "check124"  value=""  >
		                            <p class = "column-font fare">
		                                <span>
		                                    <span class = "color-red">
		                                        Fare:
		                                    </span>
		                                    Pre-owned or vintage, and while still an excellent piece, shows some obvious signs of wear throughout item.
		                                </span>
		                            </p>
		                        </label>
		                    </div>
		                </form>
		            </div>
        		</div>

 
        	<div class="clearfix" style="margin-bottom: 50px;">
	            <div class="col-lg-2 col-md-3 col-xs-12 col-sm-12"  > 
	            </div>   
	            <div class="col-lg-10 col-md-9 col-sm-9 col-xs-12 colmn-padds1 colmn-padds" style="position: relative;top: 5px;" >
	                <div class="col-lg-12  col-md-0 col-sm-0 col-xs-0" style="padding: 0px">
		                <div class="form-group">
							<label for="description" class = "column-margnbotops" style="margin-top: 0px;" >Item Additional Details</label>
							<textarea class="form-control" rows="5" id="description"></textarea>
						</div>
					</div>
	            </div> 
        	</div>
  
  
            <!--This is for the store web section
			-->
 
            <!--this is for condition section
			 -->
 

        </div>  
     </div> 
        <!--end of second column product info-->
		

 
		
<!--- THIS IS FOR DISCOUNTING retail_value-->
 <script>
    function computeDays()
    {
        var selling_price = document.getElementById("retail_value").value;
        var day1field = document.getElementById("day1field");
        var day2field = document.getElementById("day2field");
        var day3field = document.getElementById("day3field");
        var showPercentage = document.getElementById("showPercentage");
        var day1total = 0;
        var day2total = 0;
        var day3total = 0;
        var day2total_final = 0;
        var day3total_final = 0;
        var percentage = 0;
        var day2percentage = .15;
        var day3percentage = .30;
        var showAddedPrice = document.getElementById("showAddedPrice");
        showAddedPrice.innerHTML = "$"+parseInt(selling_price).toFixed(2); //COMMISSION FEE PART
        day1Output = selling_price*.80;
        day1field.innerHTML="$"+parseInt(day1Output).toFixed(2)+" / <span style='color:red;'>Discounted 0%</span>";
        //COMMISSION FEE PERCENTAGE
        if(selling_price >= 500)
        {
            showPercentage.innerHTML="20%";
        }else
         if(selling_price >= 350)
        {
            showPercentage.innerHTML="30%";
        }else
        if(selling_price >= 200)
        {
            showPercentage.innerHTML="40%";
        }else
        if(selling_price >= 20)
        {
            showPercentage.innerHTML="50%";
        }

        //day 2 calculation
        var day_2_initial = selling_price*day2percentage; //Percentage calculation 15%
        var day_2_category = selling_price-day_2_initial; //Generate answer to determine what category
        if(day_2_category >= 500)
        {
            percentage = .80;
            day_2_total = day_2_category*percentage;
            day2field.innerHTML = day_2_total.toFixed(2)+" / <span style='color:red;'>Discounted 15%</span>";
        }else
         if(day_2_category >= 350)
        {
            percentage = .70;
            day_2_total = day_2_category*percentage;
            day2field.innerHTML = "$"+day_2_total.toFixed(2)+" / <span style='color:red;'>Discounted 15%</span>";

        }else
        if(day_2_category >= 200)
        {
            percentage = .60;
            day_2_total = day_2_category*percentage;
            day2field.innerHTML = "$"+day_2_total.toFixed(2)+" / <span style='color:red;'>Discounted 15%</span>";
        }else
        if(day_2_category >= 20)
        {
            percentage = .50;
            day_2_total = day_2_category*percentage;
            day2field.innerHTML = "$"+day_2_total.toFixed(2)+" / <span style='color:red;'>Discounted 15%</span>";
        }
        //day 3 calculation
        var day_3_initial = selling_price*day3percentage; //Percentage calculation 30%
        var day_3_category = selling_price-day_3_initial; //Generate answer to determine what category
        if(day_3_category >= 500)
        {
            percentage = .80;
            day_3_total = day_3_category*percentage;
            day3field.innerHTML = day_3_total.toFixed(2)+" / <span style='color:red;'>Discounted 30%</span>";
        }else
         if(day_3_category >= 350)
        {
            percentage = .70;
            day_3_total = day_3_category*percentage;
            day3field.innerHTML = "$"+day_3_total.toFixed(2)+" / <span style='color:red;'>Discounted 30%</span>";
        }else
        if(day_3_category >= 200)
        {
            percentage = .60;
            day_3_total = day_3_category*percentage;
            day3field.innerHTML = "$"+day_3_total.toFixed(2)+" / <span style='color:red;'>Discounted 30%</span>";
        }else
        if(day_3_category >= 20)
        {
            percentage = .50;
            day_3_total = day_3_category*percentage;
            day3field.innerHTML = "$"+day_3_total.toFixed(2)+" / <span style='color:red;'>Discounted 30%</span>";
        }



    }
    </script>

        <!--third column photo  positioning-left-->



 



		
    <form id="uploadForm" class="clearfix" action="" method="post">
	
	
		<div class="row" style = "border-bottom: 1px solid #afa5a5;border-top: 1px solid #afa5a5;margin: 0 auto;  padding-top: 50px; padding-bottom: 50px;">
	 
			<div class="col-lg-2 col-md-3 col-xs-12 col-sm-12 tds photos-text-listItem colmn-padds1 colmn-padds  photos-width" style="padding-right: 18px !important" >
				<h4 class = " column-margin font-column-size" >
					PHOTOS
				</h4>
				<p class="text-left" style="font-size: 0.9em;line-height: 27px !important; ">
					Add photos that show what makes this item unique. If there is visible wear or damage, be sure to photograph it.
				</p>
			</div> 

			<div class="col-lg-2 col-md-0 col-sm-0 col-xs-0"></div>
			<div class="col-lg-6  col-md-9 col-sm-12 col-xs-12 colmn-padds1 "  style="padding: 0px;">

				<div class="line-box">
					<div id="uploads"></div>
					<div class="dropzone" id="dropzone" style=" cursor:pointer; padding-top: 22px;">Drag files here to upload</div>
					<div id="gallery1" style ="text-align: left;" ></div>
					<div class="loader1"></div>
			 	</div>
				<div id="img-output"></div>
				<br>
					<div class="col-md-4" id="uploadPhoto" style="width: 100%;text-align: left;padding: 0px;">
						<a href="#" onclick="document.getElementById('fileID').click(); return false;" style = "font-family: 'AvenirNextLTW01-UltraLight', 'Didot', 'Didot Regular & Avenir Next Medium' !important;font-weight: bolder;letter-spacing: 1px;padding: 13px;border-radius:0px;background-color: black;color:white" >
							UPLOAD PHOTOS
						</a>
						<input type="file" id="fileID" name="file[]" multiple  style="visibility: hidden;"  />
						<div id="gallery"></div>
						<div class="loader"></div> 
						<?php
						$target_dirs = get_theme_root() . "/custom/images/tmp_uploads/"; 
						$folder = $target_dirs;
						if(is_dir($folder)){
							if($handle = opendir($folder)){
								while(($file=readdir($handle)) != false){
									if($file==='.' || $file ==='..')continue;
									echo '<img src = "'. get_bloginfo ( 'template_url' ). "/images/tmp_uploads/". $file. '" style = "display:none" width = "150px" height = "150px" alt="..." >';
								if($file){
									unlink($target_dirs.$file);
								}
								}
								closedir($handle);
							}
						}
						?> 
					</div> 
		 		</div>

			<div class="col-lg-2 col-md-0 col-sm-0 col-xs-0"></div>
			 
			</div>
			 
		
        <!--end of  the third column --> 
        <article class="titleHead" style = "text-align: left;   padding: 20px 0;">
            <h4 id="profit">
				<span class="black font-column-size"  style="position: relative; font-family: 'AvenirNextLTW01-UltraLight', 'Avenir', 'Didot' !important;font-weight: bolder;letter-spacing: 1px;  width: auto;text-align: left" >
					EARNING BREAKDOWN
				</span>
			</h4>
        </article>
		<!-- end of article -->
		 
        <!-- YOULL MAKE START-->
        <div class="row col-lg-9  col-md-9 col-sm-9 col-xs-9 ernBreakDown-Column" style="border:1px solid #000;float: none;margin: auto;padding: 0px;border: 1px solid #ccc;    margin-bottom: 40px;">
            <div class="col-sm-6" style=" padding-top: 5%;padding-bottom: 5%;background-color:#f2f2f2;"><!-- SELLING PRICE -->
                <i class="fa fa-2x fa-money stephen-icons" style="color:#00a8e6;" aria-hidden="true"></i>
                <h4>
					<b>
						BUYER PAYS
					</b>
				</h4>
               <div id="selling_price" class="uk-block boxBuyerInput" style = "padding-top: 10px;padding-bottom: 10px;">
                    <h4 style="margin-top:30px;">
						<b>
							<span id="showAddedPrice">
								$0
							</span>
								- 
							<span id="showPercentage">
								0%
							</span> 
							COMMISSION FEE
						</b>
					</h4>
               </div> 
            </div>
			
			
			
			
            <div class="col-sm-6" style=" padding-top: 5%;padding-left: 0px;padding-right: 0px;"><!-- YOULL MAKE -->
                <i class="fa fa-2x fa-check stephen-icons" style="color:#00a8e6;" ></i>
                <h4><b>YOU'LL MAKE <i class="fa fa-2x fa-question-circle-o" style="color:#444;font-size:25px;margin-left:5px;cursor:pointer;" data-toggle="modal" data-target="#myModal"></i></b><!-- <img src="<?php echo IMG; ?>/questionmark.png" data-toggle="modal" data-target="#myModal" alt="" style="margin-top:-20px;margin-left:10px;cursor:pointer;" width="32" height="32"> --></h4>
                <!--MODAL START-->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Instructions here.</h4>
                            </div>
                            <div class="modal-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo harum quam doloremque quidem aliquid quibusdam ipsa ea qui ipsum eaque necessitatibus est quae accusamus modi, quisquam quasi! Ad, error enim.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>
                <!--MODAL END -->
                <div class="stephen-nav-center" >
                    <ul class="nav nav-tabs" style="padding-top: 5%;">
                        <li class="active"><a data-toggle="tab" href="#day1">Day 1</a></li>
                        <li><a data-toggle="tab" href="#day2">Day 2</a></li>
                        <li><a data-toggle="tab" href="#day3">Day 3</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div id="day1" class="tab-pane fade in active">
                        <h3 id="day1field" style="margin-top:12px;font-family: 'AvenirNextLTW01-UltraLight' !important; font-weight: 900;">$50 / <span style = "color:red">DISCOUNTED</span> 0% </h3>
                    </div>
                    <div id="day2" class="tab-pane fade">
                        <h3 id="day2field" style="margin-top:20px;margin-bottom: 0px;" >$0.00</h3>
                    </div>
                    <div id="day3" class="tab-pane fade">
                        <h3 id="day3field" style="margin-top:20px;margin-bottom: 0px;">$0.00</h3>
                    </div>
                </div>
            </div>
        </div>
		
        <!-- END YOULL MAKE START-->
		
		 
		
        <div class="">
            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 column-margin " style = "border-top:1px solid #ccc;padding: 0;" >
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 first-columns-row" style="display:inline-block;padding: 0px; height: auto;margin: 10px 0px; margin-top: 50px;">
                    
					<h4 class="text-left">
						<span class="black font-column-size" style="position: relative; font-family: 'AvenirNextLTW01-UltraLight', 'Avenir', 'Didot' !important;font-weight: bolder;letter-spacing: 1px;  width: auto;text-align: left">
						CONSIGNMENT TERMS
						</span>
					</h4>

                	<!-- Old Design
                    <p class = " condition-qs font-column-size" style="margin-bottom: -5px;position: font-family: 'AvenirNextLTW01-UltraLight', 'Avenir', 'Didot' !important;font-weight: bold;letter-spacing: 1px; width: auto;text-align: left" >
                        	
                    </p>
					-->
					<div>
                    	<p style = "line-height: 20px;font-size: 14px; text-align: left;font-family: 'AvenirNextLTW01-UltraLight', 'Didot', 'Didot Regular & Avenir Next Medium' !important;font-weight: bolder;">Select your consignment terms <br>and the donation option.</p>
                	</div>


                </div>

                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 column-margint" style="padding: 0px; margin-bottom: 15px;" >
                    <div class="col-lg-6  col-md-6 col-sm-12 col-xs-12 column-margint colmn-padds1 div-hmd column-cosign-terms-pad" style="text-align: right;">
                        <div class = "column-float column-margint" style = "   text-align: center;  display: inline-block;">
                            <h4 class = "column-font column-marginb column-margin column-marginb column-margnbotops" style = "margin-bottom: 8%;text-align: right ">How many day do you want to consign this item?</h4>
                            <label class="radio-inline" style=" margin: 0px; padding:0px">
                                <button type="button" class="btn btn-primary btn-lg btn-color  btnColor5 column-font" value = "90" id = "btn-ysl3" rel = "btn-ysl3" style="padding: 10px 15px !important;">90 days</button>
							</label>
                            <label class="radio-inline" style=" margin: 0px; padding:0px">
                                <button type="button" class="btn btn-primary btn-lg btn-color  btnColor5 column-font btn-paddingLr" name="days" value = "120" id = "btn-ysl4" rel = "btn-ysl4" style="padding: 10px 10px !important;">120 days</button>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 colmn-padds1 column-cosign-terms-pad column-margint" style = "text-align:left;"  >
                        <div class="form-group  column-marginb" style = "    display: inline-block;text-align: center">
                            <h4 class = "column-font column-margint column-margnbotops" style = "text-align: center;  margin-bottom: 5%;">After consignment period, do you want to donate this item to charity?</h4>
                            <button type="button" class="btn btn-primary btn-lg btn-color  btnColor-cosign-term column-font" id = "btn-ct1" rel = "btn-ct1" value = "YES" style="padding: 6px 25px;">YES</button>
                            <button type="button" class="btn btn-primary btn-lg btn-color  btnColor-cosign-term column-font btn-paddingLr" id = "btn-ct2" rel = "btn-ct2" value = "NO" style="padding: 6px 25px;">NO</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		
		
		<div style = "clear:both"></div>
        <div>
            <div class="col-lg-6  col-md-6 col-sm-6 col-xs-6 cs-btn1 cs-cancel-submit" rel = "cs-bttn1" >
                <button type="button" class="btn btn-lg btn-cancel btd-fullWidth column-font" id = "cs-bttn1">Cancel</button>
            </div>
            <div class="col-lg-6  col-md-6 col-sm-6 col-xs-6 cs-btn2 cs-cancel-submit" rel = "cs-bttn2" >
                <input type="submit" value="Submit" id = "cs-bttn2"  class="btn btn-lg btn-submit btd-fullWidth column-font"  >
            </div>
        </div>
		
		
		

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 colmn-padds1 column-textLeft clearfix" style="margin-bottom: 40px;text-align: center" >
            <p class = "column-textLeft column-font line-weight-column" style="text-align: center ;font-size: 14px;">
                <span>
                    By clicking "SUBMIT" I am agreeing that this submission and here's to the
                </span>
                <a style = "color: #000">
                    Consignment Agreement.
                </a>
                <span>
                    You must complete the following steps to send your request.
                </span>
            </p>
        </div> 



    </form>
	 
	 


    </div>
	 
</div> 




		<div style = "clear:both"></div>
	
	
	

<?php
require_once('sub-footer.php');
?>