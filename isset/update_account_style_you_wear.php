 
<style type="text/css">
     
 
.hm-red-strong .mask {
    background-color: rgba(0,0,0,0.75);
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
.mask > p{ 
    border: 3px solid #dedede;
    padding: 12px 32px;
    cursor: pointer;
    background-color: #dedede;
    box-sizing: border-box;
    align-items: flex-start;
    text-align: center;
    text-rendering: auto;
    letter-spacing: normal;
    word-spacing: normal;
    -webkit-writing-mode: horizontal-tb; 
}
</style> 
 

    <div  id="panel1"  class="col-md-12 item-centered text-center not_actived activited clearfix"  style="padding-left: 0px; padding-right: 0px" > 
        
        <div class = "btn-wn1 categories clearfix ">  
             <?php 
                $womenDir = get_theme_root(). "/custom/img/update_account/women/casual/";    
                $womenFiles = scandir($womenDir); 
                $newArg = array_slice($womenFiles ,2);
                foreach ($newArg as $key => $value) {  

                        
                        ?>
                        <div class="col-md-12" style="margin-bottom: 15px;padding-left: 0px; ">
                            <div class="view overlay hm-red-strong">
                                
                                <img src="<?php echo get_bloginfo('template_url')?>/img/update_account/women/casual/<?php echo $value ?>" class="img-fluid " alt="">

                                <div class="mask flex-center waves-effect waves-light">
                                    <p>SELECT</p>
                                </div>

                            </div> 
                        </div> 
                    <?php
                }
            ?>
        </div> 
    </div>




    <div class="col-md-12 item-centered text-center clearfix not_actived"  id="panel2"  style="padding-left: 0px; padding-right: 0px" > 
        
        <div class = "btn-wn1 categories clearfix ">  
            <?php 
                $womenDir = get_theme_root(). "/custom/img/update_account/women/chic/";    
                $womenFiles = scandir($womenDir); 
                $newArg = array_slice($womenFiles ,2);
                foreach ($newArg as $key => $value) {              
            ?>
                    <div class="col-md-12" style="margin-bottom: 15px;padding-left: 0px; ">
                        <div class="view overlay hm-red-strong">
                            
                            <img src="<?php echo get_bloginfo('template_url')?>/img/update_account/women/chic/<?php echo $value ?>" class="img-fluid " alt="">

                            <div class="mask flex-center waves-effect waves-light">
                                <p>SELECT</p>
                            </div>

                        </div> 
                    </div> 
            <?php
                }
            ?>
        </div> 
    </div>








    <div id="panel3" class="col-md-12 item-centered text-center clearfix panel not_actived" style="padding-left: 0px; padding-right: 0px" > 
        
        <div class = "btn-wn1 categories clearfix ">  
            <?php 
                $womenDir = get_theme_root(). "/custom/img/update_account/women/preppy/";    
                $womenFiles = scandir($womenDir); 
                $newArg = array_slice($womenFiles ,2);
                foreach ($newArg as $key => $value) {              
            ?>
                    <div class="col-md-12" style="margin-bottom: 15px;padding-left: 0px; ">
                        <div class="view overlay hm-red-strong">
                            
                            <img src="<?php echo get_bloginfo('template_url')?>/img/update_account/women/preppy/<?php echo $value ?>" class="img-fluid " alt="">

                            <div class="mask flex-center waves-effect waves-light">
                                <p>SELECT</p>
                            </div>

                        </div> 
                    </div> 
            <?php
                }
            ?>
        </div> 
    </div>

 




    <div id="panel4" class="col-md-12 item-centered text-center clearfix panel not_actived" style="padding-left: 0px; padding-right: 0px" > 
        
        <div class = "btn-wn1 categories clearfix ">  
            <?php 
                $womenDir = get_theme_root(). "/custom/img/update_account/women/streetwear/";    
                $womenFiles = scandir($womenDir); 
                $newArg = array_slice($womenFiles ,2);
                foreach ($newArg as $key => $value) {              
            ?>
                    <div class="col-md-12" style="margin-bottom: 15px;padding-left: 0px; ">
                        <div class="view overlay hm-red-strong">
                            
                            <img src="<?php echo get_bloginfo('template_url')?>/img/update_account/women/streetwear/<?php echo $value ?>" class="img-fluid " alt="">

                            <div class="mask flex-center waves-effect waves-light">
                                <p>SELECT</p>
                            </div>

                        </div> 
                    </div> 
            <?php
                }
            ?>
        </div> 
    </div>





    <div id="panel5" class="col-md-12 item-centered text-center clearfix panel not_actived" style="padding-left: 0px; padding-right: 0px" > 
        
        <div class = "btn-wn1 categories clearfix ">  
            <?php 
                $womenDir = get_theme_root(). "/custom/img/update_account/men/casual/";    
                $womenFiles = scandir($womenDir); 
                $newArg = array_slice($womenFiles ,2);
                foreach ($newArg as $key => $value) {              
            ?>
                    <div class="col-md-12" style="margin-bottom: 15px;padding-left: 0px; ">
                        <div class="view overlay hm-red-strong">
                            
                            <img src="<?php echo get_bloginfo('template_url')?>/img/update_account/men/casual/<?php echo $value ?>" class="img-fluid " alt="">

                            <div class="mask flex-center waves-effect waves-light">
                                <p>SELECT</p>
                            </div>

                        </div> 
                    </div> 
            <?php
                }
            ?>
        </div> 
    </div> 



    <div id="panel6" class="col-md-12 item-centered text-center clearfix panel not_actived" style="padding-left: 0px; padding-right: 0px" > 
        
        <div class = "btn-wn1 categories clearfix ">  
            <?php 
                $womenDir = get_theme_root(). "/custom/img/update_account/men/mens/";    
                $womenFiles = scandir($womenDir); 
                $newArg = array_slice($womenFiles ,2);
                foreach ($newArg as $key => $value) {              
            ?>
                    <div class="col-md-12" style="margin-bottom: 15px;padding-left: 0px; ">
                        <div class="view overlay hm-red-strong">
                            
                            <img src="<?php echo get_bloginfo('template_url')?>/img/update_account/men/mens/<?php echo $value ?>" class="img-fluid " alt="">

                            <div class="mask flex-center waves-effect waves-light">
                                <p>SELECT</p>
                            </div>

                        </div> 
                    </div> 
            <?php
                }
            ?>
        </div> 
    </div>



   <div id="panel7" class="col-md-12 item-centered text-center clearfix panel not_actived" style="padding-left: 0px; padding-right: 0px" > 
        
        <div class = "btn-wn1 categories clearfix ">  
            <?php 
                $womenDir = get_theme_root(). "/custom/img/update_account/men/preppy/";    
                $womenFiles = scandir($womenDir); 
                $newArg = array_slice($womenFiles ,2);
                foreach ($newArg as $key => $value) {              
            ?>
                    <div class="col-md-12" style="margin-bottom: 15px;padding-left: 0px; ">
                        <div class="view overlay hm-red-strong">
                            
                            <img src="<?php echo get_bloginfo('template_url')?>/img/update_account/men/preppy/<?php echo $value ?>" class="img-fluid " alt="">

                            <div class="mask flex-center waves-effect waves-light">
                                <p>SELECT</p>
                            </div>

                        </div> 
                    </div> 
            <?php
                }
            ?>
        </div> 
    </div>



   <div id="panel8" class="col-md-12 item-centered text-center clearfix panel not_actived" style="padding-left: 0px; padding-right: 0px" > 
        
        <div class = "btn-wn1 categories clearfix ">  
            <?php 
                $womenDir = get_theme_root(). "/custom/img/update_account/men/streetwear/";    
                $womenFiles = scandir($womenDir); 
                $newArg = array_slice($womenFiles ,2);
                foreach ($newArg as $key => $value) {              
            ?>
                    <div class="col-md-12" style="margin-bottom: 15px;padding-left: 0px; ">
                        <div class="view overlay hm-red-strong">
                            
                            <img src="<?php echo get_bloginfo('template_url')?>/img/update_account/men/streetwear/<?php echo $value ?>" class="img-fluid " alt=""> 
                            <div class="mask flex-center waves-effect waves-light">
                                <p>SELECT</p>
                            </div>

                        </div> 
                    </div> 
            <?php
                }
            ?>
        </div> 
    </div>






<!-- 
        <div id="panel1" class="panell not_actived activited text-center panel">
            <?php 
                $womenDir = get_theme_root(). "/custom/img/update_account/women/casual/";    
                $womenFiles = scandir($womenDir); 
                $newArg = array_slice($womenFiles ,2);
                foreach ($newArg as $key => $value) {  
            ?> 
                    <div class="row">
                        <div class="hover_append"  style="cursor:pointer;z-index:9999;" id="imageContainer">
                            


                            <label for="casualCheck" onclick="changeSelected(this)" id = "1">
                                <h4  class="stephen_selectButton" id="casualSelect">
                                    SELECTs
                                </h4>
                            </label>
 
                            <input type="checkbox" id="casualCheck" class="hidden" name="itemtypeconsign[]" value="CASUAL">



                        </div>
                        <div class="col-md-12">
                            <img class="img-responsive" src="<?php echo get_bloginfo('template_url')?>/img/update_account/women/casual/<?php echo $value ?>">
                        </div> 
                    </div>
            <?php
                }
            ?>
        </div> 




        <div id="panel2" class="panell text-center panel not_actived">
            <?php 
                $womenDir = get_theme_root(). "/custom/img/update_account/women/chic/";    
                $womenFiles = scandir($womenDir); 
                $newArg = array_slice($womenFiles ,2);
                foreach ($newArg as $key => $value) {  
            ?> 
                    <div class="row">
                        <div class="hover_append"  style="cursor:pointer;z-index:9999;" id="imageContainer">
                            <label for="chicCheck" onclick="changeSelected(this)" id = "2"><h4  class="stephen_selectButton" id="chicSelect">SELECT</h4></label>
                            <input type="checkbox" id="chicCheck" class="hidden" name="itemtypeconsign[]" value="chic">
                        </div>
                        <div class="col-md-12">
                            <img class="img-responsive" src="<?php echo get_bloginfo('template_url')?>/img/update_account/women/chic/<?php echo $value ?>">
                        </div> 
                    </div>
            <?php
                }
            ?>
        </div> 





        <div id="panel3" class="panell text-center panel not_actived">
            <?php 
                $womenDir = get_theme_root(). "/custom/img/update_account/women/preppy/";    
                $womenFiles = scandir($womenDir); 
                $newArg = array_slice($womenFiles ,2);
                foreach ($newArg as $key => $value) {  
            ?> 
                    <div class="row">
                        <div class="hover_append"  style="cursor:pointer;z-index:9999;" id="imageContainer">
                            <label for="preppyCheck" onclick="changeSelected(this)" id = "2"><h4  class="stephen_selectButton" id="preppySelect">SELECT</h4></label>
                            <input type="checkbox" id="preppyCheck" class="hidden" name="itemtypeconsign[]" value="preppy">
                        </div>
                        <div class="col-md-12">
                            <img class="img-responsive" src="<?php echo get_bloginfo('template_url')?>/img/update_account/women/preppy/<?php echo $value ?>">
                        </div> 
                    </div>
            <?php
                }
            ?>
        </div> 





        <div id="panel4" class="panell text-center panel not_actived">
            <?php 
                $womenDir = get_theme_root(). "/custom/img/update_account/women/streetwear/";    
                $womenFiles = scandir($womenDir); 
                $newArg = array_slice($womenFiles ,2);
                foreach ($newArg as $key => $value) {  
            ?> 
                    <div class="row">
                        <div class="hover_append"  style="cursor:pointer;z-index:9999;" id="imageContainer">
                            <label for="streetwearCheck" onclick="changeSelected(this)" id = "2"><h4  class="stephen_selectButton" id="streetwearSelect">SELECT</h4></label>
                            <input type="checkbox" id="streetwearCheck" class="hidden" name="itemtypeconsign[]" value="streetwear">
                        </div>
                        <div class="col-md-12">
                            <img class="img-responsive" src="<?php echo get_bloginfo('template_url')?>/img/update_account/women/streetwear/<?php echo $value ?>">
                        </div> 
                    </div>
            <?php
                }
            ?>
        </div> 







        <div id="panel5" class="panell text-center panel not_actived clearfix">
            <?php 
                $womenDir = get_theme_root(). "/custom/img/update_account/men/casual/";    
                $womenFiles = scandir($womenDir); 
                $newArg = array_slice($womenFiles ,2);
                foreach ($newArg as $key => $value) {  
            ?> 
                    <div class="row">
                        <div class="hover_append"  style="cursor:pointer;z-index:9999;" id="imageContainer">
                            <label for="casualCheck" onclick="changeSelected(this)" id = "2"><h4  class="stephen_selectButton" id="casualSelect">SELECT</h4></label>
                            <input type="checkbox" id="casualCheck" class="hidden" name="itemtypeconsign[]" value="casual">
                        </div>
                        <div class="col-md-12">
                            <img class="img-responsive" src="<?php echo get_bloginfo('template_url')?>/img/update_account/men/casual/<?php echo $value ?>">
                        </div> 
                    </div>
            <?php
                }
            ?>
        </div> 

        <div id="panel6" class="panell text-center panel not_actived clearfix">
            <?php 
                $womenDir = get_theme_root(). "/custom/img/update_account/men/mens/";    
                $womenFiles = scandir($womenDir); 
                $newArg = array_slice($womenFiles ,2);
                foreach ($newArg as $key => $value) {  
            ?> 
                    <div class="row">
                        <div class="hover_append"  style="cursor:pointer;z-index:9999;" id="imageContainer">
                            <label for="mensCheck" onclick="changeSelected(this)" id = "2"><h4  class="stephen_selectButton" id="mensSelect">SELECT</h4></label>
                            <input type="checkbox" id="mensCheck" class="hidden" name="itemtypeconsign[]" value="mens">
                        </div>
                        <div class="col-md-12">
                            <img class="img-responsive" src="<?php echo get_bloginfo('template_url')?>/img/update_account/men/mens/<?php echo $value ?>">
                        </div> 
                    </div>
            <?php
                }
            ?>
        </div> 



        <div id="panel7" class="panell text-center panel not_actived clearfix">
            <?php 
                $womenDir = get_theme_root(). "/custom/img/update_account/men/preppy/";    
                $womenFiles = scandir($womenDir); 
                $newArg = array_slice($womenFiles ,2);
                foreach ($newArg as $key => $value) {  
            ?> 
                    <div class="row">
                        <div class="hover_append"  style="cursor:pointer;z-index:9999;" id="imageContainer">
                            <label for="mensCheck" onclick="changeSelected(this)" id = "2"><h4  class="stephen_selectButton" id="preppySelect">SELECT</h4></label>
                            <input type="checkbox" id="preppyCheck" class="hidden" name="itemtypeconsign[]" value="preppy">
                        </div>
                        <div class="col-md-12">
                            <img class="img-responsive" src="<?php echo get_bloginfo('template_url')?>/img/update_account/men/preppy/<?php echo $value ?>">
                        </div> 
                    </div>
            <?php
                }
            ?>
        </div> 
 


        <div id="panel8" class="panell text-center panel not_actived clearfix">
            <?php 
                $womenDir = get_theme_root(). "/custom/img/update_account/men/preppy/";    
                $womenFiles = scandir($womenDir); 
                $newArg = array_slice($womenFiles ,2);
                foreach ($newArg as $key => $value) {  
            ?> 
                    <div class="row">
                        <div class="hover_append"  style="cursor:pointer;z-index:9999;" id="imageContainer">
                            <label for="mensCheck" onclick="changeSelected(this)" id = "2"><h4  class="stephen_selectButton" id="streewearSelect">SELECT</h4></label>
                            <input type="checkbox" id="streewearCheck" class="hidden" name="itemtypeconsign[]" value="streewear">
                        </div>
                        <div class="col-md-12">
                            <img class="img-responsive" src="<?php echo get_bloginfo('template_url')?>/img/update_account/men/streewear/<?php echo $value ?>">
                        </div> 
                    </div>
            <?php
                }
            ?>
        </div> 
 

-->