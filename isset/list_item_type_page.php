 

  
<style type="text/css">
	 
 
.hm-red-strong .mask {
    background-color: rgba(244,67,54,.7);
	  opacity: 0;
	  transition: .5s ease; 
}
 .hm-red-strong .mask:hover{ 
	  opacity: 0.9; 
} 
 .view .mask {
    width: 100%;
    height: 100%;
    position: absolute;
    overflow: hidden;
    top: 0;
    left: 0;
}
.view .mask {
    background-attachment: fixed;
}.waves-effect {
    position: relative;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    z-index: 1;
}
.flex-center {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    height: 100%;
}

 .flex-center p {
    margin: 0;
}
.white-text {
    color: #FFF!important;
    font-family: 'AvenirNextLTW01-UltraLight' !important;
}
.waves-effect, a {
    -webkit-tap-highlight-color: transparent;
}
.waves-effect {
    position: relative;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    z-index: 1;
}
 .overlay video {
    -webkit-transition: all .2s linear;
    transition: all .2s linear;
}
.img-fluid  {
    max-width: 100%;
    height: auto;
}
.view img{
    display: block;
    position: relative;
}
.view {
    cursor: default; 
    position: relative; 
    overflow: hidden;
} 
.view-text{
	background-color: black;
	margin: 0px;
	padding: 7px 0px;
    font-family: 'AvenirNextLTW01-UltraLight' !important;
}
.item-centered > .categories{
	float: none;
	text-align: center;
}
.view-container{ 
	display: inline-block;
	padding-left: 0px;
	float: none;
}
</style> 
 
	<di class="col-lg-10 col-md-9 col-sm-12 col-xs-12 item-centered text-centerclearfix border-col-item-type" style="padding-left: 0px; padding-right: 0px" > 
		
		<div  style = "display:none" class = "btn-wn1 categories clearfix ">  
			 <?php 
				$womenCaption1 = array("TOPS","BOTTOMS","DRESSES","JEANS","SUITING","OUTERWEAR");
				$womenDir = get_theme_root(). "/custom/img/clothing/";    
				$womenFiles = scandir($womenDir); 
				$newArg = array_slice($womenFiles ,2);
			 	$womensIndex=0;
				foreach ($newArg as $key => $value) {   

						
						?>
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 <?php if($womensIndex%3==2){ echo 'modulo-of-3-item-type'; } ?> " style="margin-bottom: 15px;padding-left: 0px; ">
					        <div class="view overlay hm-red-strong">
					            <img src="<?php echo get_bloginfo('template_url');?>/img/clothing/<?php echo $value; ?>" class="img-fluid " alt="">
					            <div class="mask flex-center waves-effect waves-light">
					            	<p class="white-text"><?php echo $womenCaption1[$womensIndex]; ?></p>
					            </div>
					        </div>
					        <div class="view-text white" >
				    	 		<?php echo $womenCaption1[$womensIndex]; ?>
				    		</div> 
					    </div> 
						<?php 
					  
					$womensIndex++;
				}   
			 ?> 
		</div>







		<div  style = "display:none" class = "btn-wn2 ">  
			 <?php 
				$sbaCaption1 = array("SHOES","BAGS","ACCESSORIES");
				$sbaDir = get_theme_root(). "/custom/img/shoes/";    
				$sbaFiles = scandir($sbaDir); 
				$sbaArg = array_slice($sbaFiles ,2);
			 	$sbaIndex=0;
				foreach ($sbaArg as $key => $value) {   
					?>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 text-center view-container " >
				        <div class="view overlay hm-red-strong">
				            <img src="<?php echo get_bloginfo('template_url');?>/img/shoes/<?php echo $value; ?>" class="img-fluid " alt="">
				            <div class="mask flex-center waves-effect waves-light">
				            	<p class="white-text"><?php echo $sbaCaption1[$sbaIndex]; ?></p>
				            </div>
				        </div>
				        <div class="view-text white" >
			    	 		<?php echo $sbaCaption1[$sbaIndex]; ?>
			    		</div> 
				    </div> 
					<?php 
					$sbaIndex++;
				}   
			 ?> 
		</div>











		<div  style = "display:none" class = "btn-wn3">  
			 <?php 
				$homeCaption1 = array("BEDDING","DECOR","DINING","FURNITURE");
				$homeDir = get_theme_root(). "/custom/img/homes/";    
				$homeFiles = scandir($homeDir); 
				$homeArg = array_slice($homeFiles ,2);
			 	$homeIndex=0;
				foreach ($homeArg as $key => $value) {   
					?>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 view-container"  >
				        <div class="view overlay hm-red-strong"  >
				            <img src="<?php echo get_bloginfo('template_url');?>/img/homes/<?php echo $value; ?>" class="img-fluid " alt="">
				            <div class="mask flex-center waves-effect waves-light">
				            	<p class="white-text"><?php echo $homeCaption1[$homeIndex]; ?></p>
				            </div>
				        </div>
				        <div class="view-text white" >
			    	 		<?php echo $homeCaption1[$homeIndex]; ?>
			    		</div> 
				    </div> 
					<?php 
					$homeIndex++;
				}   
			 ?> 
		</div>

 

	</di>

 