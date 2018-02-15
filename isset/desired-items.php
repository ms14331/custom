
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


 

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 item-centered text-center clearfix border-col-item-type not-active-desired-item active-sub-desired-items-now" id="wcasual" style="padding-left: 0px; padding-right: 0px" > 
        
        <div  style = "display:none" class = "btn-wn1 categories clearfix ">  
             <?php 
                $womenCaption1 = array("TOPS","BOTTOMS","DRESSES","JEANS","SUITING","OUTERWEAR");
                $womenDir = get_theme_root(). "/custom/img/desire-item/women/casual";    
                $womenFiles = scandir($womenDir); 
                $newArg = array_slice($womenFiles ,2);
                $womensIndex=0;
                foreach ($newArg as $key => $value) {   

                        
                        ?>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 <?php if($womensIndex%3==2){ echo 'modulo-of-3-item-type'; } ?> " style="margin-bottom: 15px;padding-left: 0px; ">
                            <div class="view overlay hm-red-strong">
                                <img src="<?php echo get_bloginfo('template_url');?>/img/desire-item/women/casual/<?php echo $value; ?>" class="img-fluid " alt="">
                                <div class="mask flex-center waves-effect waves-light">
                                </div>
                            </div> 
                        </div> 
                        <?php 
                      
                    $womensIndex++;
                }   
             ?> 
        </div> 
    </div>


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 item-centered text-center clearfix border-col-item-type not-active-desired-item" id="chic" style="padding-left: 0px; padding-right: 0px" > 
        
        <div  style = "display:none" class = "btn-wn1 categories clearfix ">  
             <?php 
                $womenCaption1 = array("TOPS","BOTTOMS","DRESSES","JEANS","SUITING","OUTERWEAR");
                $womenDir = get_theme_root(). "/custom/img/desire-item/women/chic";    
                $womenFiles = scandir($womenDir); 
                $newArg = array_slice($womenFiles ,2);
                $womensIndex=0;
                foreach ($newArg as $key => $value) {   

                        
                        ?>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 <?php if($womensIndex%3==2){ echo 'modulo-of-3-item-type'; } ?> " style="margin-bottom: 15px;padding-left: 0px; ">
                            <div class="view overlay hm-red-strong">
                                <img src="<?php echo get_bloginfo('template_url');?>/img/desire-item/women/chic/<?php echo $value; ?>" class="img-fluid " alt="">
                                <div class="mask flex-center waves-effect waves-light"> 
                                </div>
                            </div> 
                        </div> 
                        <?php 
                      
                    $womensIndex++;
                }   
             ?> 
        </div> 
    </div>




    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 item-centered text-center clearfix border-col-item-type not-active-desired-item" id="wpreppy" style="padding-left: 0px; padding-right: 0px" > 
        
        <div  style = "display:none" class = "btn-wn1 categories clearfix ">  
             <?php 
                $womenCaption1 = array("TOPS","BOTTOMS","DRESSES","JEANS","SUITING","OUTERWEAR");
                $womenDir = get_theme_root(). "/custom/img/desire-item/women/preppy";    
                $womenFiles = scandir($womenDir); 
                $newArg = array_slice($womenFiles ,2);
                $womensIndex=0;
                foreach ($newArg as $key => $value) {   

                        
                        ?>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 <?php if($womensIndex%3==2){ echo 'modulo-of-3-item-type'; } ?> " style="margin-bottom: 15px;padding-left: 0px; ">
                            <div class="view overlay hm-red-strong">
                                <img src="<?php echo get_bloginfo('template_url');?>/img/desire-item/women/preppy/<?php echo $value; ?>" class="img-fluid " alt="">
                                <div class="mask flex-center waves-effect waves-light"> 
                                </div>
                            </div> 
                        </div> 
                        <?php 
                      
                    $womensIndex++;
                }   
             ?> 
        </div> 
    </div>



    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 item-centered text-center clearfix border-col-item-type not-active-desired-item" id="wstreet-wear" style="padding-left: 0px; padding-right: 0px" > 
        
        <div  style = "display:none" class = "btn-wn1 categories clearfix ">  
             <?php 
                $womenCaption1 = array("TOPS","BOTTOMS","DRESSES","JEANS","SUITING","OUTERWEAR");
                $womenDir = get_theme_root(). "/custom/img/desire-item/women/street-wear";    
                $womenFiles = scandir($womenDir); 
                $newArg = array_slice($womenFiles ,2);
                $womensIndex=0;
                foreach ($newArg as $key => $value) {   

                        
                        ?>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 <?php if($womensIndex%3==2){ echo 'modulo-of-3-item-type'; } ?> " style="margin-bottom: 15px;padding-left: 0px; ">
                            <div class="view overlay hm-red-strong">
                                <img src="<?php echo get_bloginfo('template_url');?>/img/desire-item/women/street-wear/<?php echo $value; ?>" class="img-fluid " alt="">
                                <div class="mask flex-center waves-effect waves-light"> 
                                </div>
                            </div> 
                        </div> 
                        <?php 
                      
                    $womensIndex++;
                }   
             ?> 
        </div> 
    </div>

 

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 item-centered text-center clearfix border-col-item-type not-active-desired-item" id="mcasual" style="padding-left: 0px; padding-right: 0px" > 
        
        <div  style = "display:none" class = "btn-wn1 categories clearfix ">  
             <?php 
                $womenCaption1 = array("TOPS","BOTTOMS","DRESSES","JEANS","SUITING","OUTERWEAR");
                $womenDir = get_theme_root(). "/custom/img/desire-item/men/casual";    
                $womenFiles = scandir($womenDir); 
                $newArg = array_slice($womenFiles ,2);
                $womensIndex=0;
                foreach ($newArg as $key => $value) {   

                        
                        ?>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 <?php if($womensIndex%3==2){ echo 'modulo-of-3-item-type'; } ?> " style="margin-bottom: 15px;padding-left: 0px; ">
                            <div class="view overlay hm-red-strong">
                                <img src="<?php echo get_bloginfo('template_url');?>/img/desire-item/men/casual/<?php echo $value; ?>" class="img-fluid " alt="">
                                <div class="mask flex-center waves-effect waves-light"> 
                                </div>
                            </div> 
                        </div> 
                        <?php 
                      
                    $womensIndex++;
                }   
             ?> 
        </div> 
    </div>
 

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 item-centered text-center clearfix border-col-item-type not-active-desired-item" id="menswear" style="padding-left: 0px; padding-right: 0px" > 
        
        <div  style = "display:none" class = "btn-wn1 categories clearfix ">  
             <?php 
                $womenCaption1 = array("TOPS","BOTTOMS","DRESSES","JEANS","SUITING","OUTERWEAR");
                $womenDir = get_theme_root(). "/custom/img/desire-item/men/menswear";    
                $womenFiles = scandir($womenDir); 
                $newArg = array_slice($womenFiles ,2);
                $womensIndex=0;
                foreach ($newArg as $key => $value) {   

                        
                        ?>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 <?php if($womensIndex%3==2){ echo 'modulo-of-3-item-type'; } ?> " style="margin-bottom: 15px;padding-left: 0px; ">
                            <div class="view overlay hm-red-strong">
                                <img src="<?php echo get_bloginfo('template_url');?>/img/desire-item/men/menswear/<?php echo $value; ?>" class="img-fluid " alt="">
                                <div class="mask flex-center waves-effect waves-light"> 
                                </div>
                            </div> 
                        </div> 
                        <?php 
                      
                    $womensIndex++;
                }   
             ?> 
        </div> 
    </div>
 


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 item-centered text-center clearfix border-col-item-type not-active-desired-item" id="mpreppy" style="padding-left: 0px; padding-right: 0px" > 
        
        <div  style = "display:none" class = "btn-wn1 categories clearfix ">  
             <?php 
                $womenCaption1 = array("TOPS","BOTTOMS","DRESSES","JEANS","SUITING","OUTERWEAR");
                $womenDir = get_theme_root(). "/custom/img/desire-item/men/preppy";    
                $womenFiles = scandir($womenDir); 
                $newArg = array_slice($womenFiles ,2);
                $womensIndex=0;
                foreach ($newArg as $key => $value) {   

                        
                        ?>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 <?php if($womensIndex%3==2){ echo 'modulo-of-3-item-type'; } ?> " style="margin-bottom: 15px;padding-left: 0px; ">
                            <div class="view overlay hm-red-strong">
                                <img src="<?php echo get_bloginfo('template_url');?>/img/desire-item/men/preppy/<?php echo $value; ?>" class="img-fluid " alt="">
                                <div class="mask flex-center waves-effect waves-light"> 
                                </div>
                            </div> 
                        </div> 
                        <?php 
                      
                    $womensIndex++;
                }   
             ?> 
        </div> 
    </div>
 

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 item-centered text-center clearfix border-col-item-type not-active-desired-item" id="mstreet-wear" style="padding-left: 0px; padding-right: 0px" > 
        
        <div  style = "display:none" class = "btn-wn1 categories clearfix ">  
             <?php 
                $womenCaption1 = array("TOPS","BOTTOMS","DRESSES","JEANS","SUITING","OUTERWEAR");
                $womenDir = get_theme_root(). "/custom/img/desire-item/men/streetwear";    
                $womenFiles = scandir($womenDir); 
                $newArg = array_slice($womenFiles ,2);
                $womensIndex=0;
                foreach ($newArg as $key => $value) {   

                        
                        ?>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 <?php if($womensIndex%3==2){ echo 'modulo-of-3-item-type'; } ?> " style="margin-bottom: 15px;padding-left: 0px; ">
                            <div class="view overlay hm-red-strong">
                                <img src="<?php echo get_bloginfo('template_url');?>/img/desire-item/men/streetwear/<?php echo $value; ?>" class="img-fluid " alt="">
                                <div class="mask flex-center waves-effect waves-light"> 
                                </div>
                            </div> 
                        </div> 
                        <?php 
                      
                    $womensIndex++;
                }   
             ?> 
        </div> 
    </div>
 
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 item-centered text-center clearfix border-col-item-type not-active-desired-item" id="bedding" style="padding-left: 0px; padding-right: 0px" > 
        
        <div  style = "display:none" class = "btn-wn1 categories clearfix ">  
             <?php 
                $womenCaption1 = array("TOPS","BOTTOMS","DRESSES","JEANS","SUITING","OUTERWEAR");
                $womenDir = get_theme_root(). "/custom/img/desire-item/home/bedding";    
                $womenFiles = scandir($womenDir); 
                $newArg = array_slice($womenFiles ,2);
                $womensIndex=0;
                foreach ($newArg as $key => $value) {   

                        
                        ?>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 <?php if($womensIndex%3==2){ echo 'modulo-of-3-item-type'; } ?> " style="margin-bottom: 15px;padding-left: 0px; ">
                            <div class="view overlay hm-red-strong">
                                <img src="<?php echo get_bloginfo('template_url');?>/img/desire-item/home/bedding/<?php echo $value; ?>" class="img-fluid " alt="">
                                <div class="mask flex-center waves-effect waves-light"> 
                                </div>
                            </div> 
                        </div> 
                        <?php 
                      
                    $womensIndex++;
                }   
             ?> 
        </div> 
    </div> 
 
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 item-centered text-center clearfix border-col-item-type not-active-desired-item" id="decor" style="padding-left: 0px; padding-right: 0px" > 
        
        <div  style = "display:none" class = "btn-wn1 categories clearfix ">  
             <?php 
                $womenCaption1 = array("TOPS","BOTTOMS","DRESSES","JEANS","SUITING","OUTERWEAR");
                $womenDir = get_theme_root(). "/custom/img/desire-item/home/decor";    
                $womenFiles = scandir($womenDir); 
                $newArg = array_slice($womenFiles ,2);
                $womensIndex=0;
                foreach ($newArg as $key => $value) {   

                        
                        ?>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 <?php if($womensIndex%3==2){ echo 'modulo-of-3-item-type'; } ?> " style="margin-bottom: 15px;padding-left: 0px; ">
                            <div class="view overlay hm-red-strong">
                                <img src="<?php echo get_bloginfo('template_url');?>/img/desire-item/home/decor/<?php echo $value; ?>" class="img-fluid " alt="">
                                <div class="mask flex-center waves-effect waves-light"> 
                                </div>
                            </div> 
                        </div> 
                        <?php 
                      
                    $womensIndex++;
                }   
             ?> 
        </div> 
    </div>



    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 item-centered text-center clearfix border-col-item-type not-active-desired-item" id="dinning" style="padding-left: 0px; padding-right: 0px" > 
        
        <div  style = "display:none" class = "btn-wn1 categories clearfix ">  
             <?php 
                $womenCaption1 = array("TOPS","BOTTOMS","DRESSES","JEANS","SUITING","OUTERWEAR");
                $womenDir = get_theme_root(). "/custom/img/desire-item/home/dinning";    
                $womenFiles = scandir($womenDir); 
                $newArg = array_slice($womenFiles ,2);
                $womensIndex=0;
                foreach ($newArg as $key => $value) {   

                        
                        ?>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 <?php if($womensIndex%3==2){ echo 'modulo-of-3-item-type'; } ?> " style="margin-bottom: 15px;padding-left: 0px; ">
                            <div class="view overlay hm-red-strong">
                                <img src="<?php echo get_bloginfo('template_url');?>/img/desire-item/home/dinning/<?php echo $value; ?>" class="img-fluid " alt="">
                                <div class="mask flex-center waves-effect waves-light"> 
                                </div>
                            </div> 
                        </div> 
                        <?php 
                      
                    $womensIndex++;
                }   
             ?> 
        </div> 
    </div> 


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 item-centered text-center clearfix border-col-item-type not-active-desired-item" id="furniture" style="padding-left: 0px; padding-right: 0px" > 
        
        <div  style = "display:none" class = "btn-wn1 categories clearfix ">  
             <?php 
                $womenCaption1 = array("TOPS","BOTTOMS","DRESSES","JEANS","SUITING","OUTERWEAR");
                $womenDir = get_theme_root(). '/custom/img/desire-item/home/furniture';   


                $womenFiles = scandir($womenDir); 
                $newArg = array_slice($womenFiles ,2);
                $womensIndex=0;
                foreach ($newArg as $key => $value) {   

                        
                        ?>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 <?php if($womensIndex%3==2){ echo 'modulo-of-3-item-type'; } ?> " style="margin-bottom: 15px;padding-left: 0px; ">
                            <div class="view overlay hm-red-strong">
                                <img src="<?php echo get_bloginfo('template_url');?>/img/desire-item/home/furniture/<?php echo $value; ?>" class="img-fluid " alt="">
                                <div class="mask flex-center waves-effect waves-light"> 
                                </div>
                            </div> 
                        </div> 
                        <?php 
                      
                    $womensIndex++;
                }   
             ?> 
        </div> 

    </div>
</div>

 
    <div class="col-md-4 col-md-offset-4 clearfix cosing-now-desired-item-btn"  style="font-family: 'AvenirNextLTW01-UltraLight', 'Didot', 'Didot Regular & Avenir Next Medium' !important;margin-bottom:  50px;margin-top: 20px;">
        <a href="new-consign" class = "footer-cosign-des" >
            COSIGN NOW
        </a>
    </div>  
 

 <div class="clearfix"></div>