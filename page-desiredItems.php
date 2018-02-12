<?php  
/**
* Template Name: Desired Items
*/  
	$id=$_GET['id']; 
	require_once('sub-header.php');
?>  
 
<style type="text/css">
	.active-desired-item{
		display: block !important;
	}
	.not-active-desired-item{
		display: none;
	}
	.active-sub-desired-item{
		display: block !important;
	} 
	.active-sub-desired-items-now{
		display: block !important;
	}

</style>
<br>
	<div class = " "> 
		<p style="text-align: center;">
			<strong>
				<span style="color: #ff9900; letter-spacing: 3px;">
					Summer 2016
				</span>
			</strong>
		</p>
		<p style="text-align: center; font-family: 'Lucida Sans Typewriter'; font-size: 14px;">
			<strong>
				WHAT WE' RE LOOKING FOOR
			</strong>
		</p>
		<p style="text-align: center;">
			<b> 	
				________
			</b>
		</p>
		<p style="text-align: center; line-height: 27px;">
			<span style="font-size: 14px;">
				Wondering what we' re buying right now? Look no further. Our Selling Guide is the most up-to-date place to find
				<br>
			</span>
			<span style="font-size: 14px;">
				out which styles and trends we' re currently excited about. 
				<span style="color: #000000;">
					<i>
						Now buying for spring.
					</i>
				</span>
			</span>
		</p>  
</div>
  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script> 

	$(document).ready(function(){
		$('.sub-header-menu').click(function(){

			var data = $(this).attr('rel'); 
			$('.active-desired-item').removeClass('active-desired-item');
			$('#'+data).addClass('active-desired-item');

			
 			if(data == "women-desired"){

 				$('.active-sub-desired-items-now').removeClass('active-sub-desired-items-now');
				$('#wcasual').addClass('active-sub-desired-items-now'); 
 			}else if(data=="men-desired"){ 
 

 				$('.active-sub-desired-items-now').removeClass('active-sub-desired-items-now');
				$('#mcasual').addClass('active-sub-desired-items-now'); 
 			}else if(data="home-desired"){
				

 				$('.active-sub-desired-items-now').removeClass('active-sub-desired-items-now');
				$('#bedding').addClass('active-sub-desired-items-now'); 
 			} 


 		});  

		$('.sub-menu-clickable').click(function(){
			var data = $(this).attr('rel'); 
			$('.active-sub-desired-items-now').removeClass('active-sub-desired-items-now');  
			$('#'+data).addClass('active-sub-desired-items-now');


		}); 
	});
</script>
		
		<div class="container-fluid div-button-Women-Men-desired clearfix">   
			 <div class="row row123"> 
					<div class="col-sm-13">
						<ul class = "w-lu-dsired1">
							<li>
								<a  rel="women-desired"  class = "w-women wom1 sub-header-menu">
									WOMEN
								</a> 
							</li>
							<li>
								<a  rel="men-desired" class = "w-women men1 sub-header-menu">
									MEN
								</a> 
							</li>
							<li>
								<a rel="home-desired" class = "w-women home1 sub-header-menu">
									HOME
								</a> 
							</li> 
						</ul>
					</div>  
					<!--this is for women-->
					<div class="col-sm-13 women-chic active-desired-item not-active-desired-item "  id = "women-desired" >
						<ul class = "w-lu-dsired2"  >
							<li>
								<a class = "casual-desired w-women sub-menu-clickable" rel="wcasual">
									CASUAL
								</a>
							</li>
							<li>
								<a class = "chic-desired w-women sub-menu-clickable" rel="chic">
									CHIC
								</a>
							</li>
							<li>
								<a class = "preppy-desired w-women sub-menu-clickable" rel="wpreppy">
									PREPPY
								</a>
							</li>
							<li>
								<a class = "streetwear-desired w-women sub-menu-clickable" rel="wstreet-wear">
									STREETWEAR
								</a>
							</li> 
						</ul>
					</div>  
					<!--this is for men-->
					<div class="col-sm-13 mens-wear not-active-desired-item" id = "men-desired">
						<ul class = "w-lu-dsired2"  >
							<li>
								<a class = "casual-desired2 w-women sub-menu-clickable"  rel="mcasual">
									CASUAL
								</a>
							</li>
							<li>
								<a class = "menswear-desired w-women sub-menu-clickable" rel="menswear">
									MENSWEAR
								</a>
							</li>
							<li>
								<a class = "preppy-desired2 w-women sub-menu-clickable" rel="mpreppy">
									PREPPY
								</a>
							</li>
							<li>
								<a class = "streetwear-desired2 w-women sub-menu-clickable" rel="mstreet-wear">
									STREETWEAR
								</a>
							</li> 
						</ul>
					</div>
					<!--this is for home-->
					<div class="col-sm-13 home-decor not-active-desired-item" id = "home-desired" >
						<ul class = "w-lu-dsired2"  >
							<li>
								<a class = "bedding-desired w-women sub-menu-clickable"  rel="bedding">
									BEDDING
								</a>
							</li>
							<li>
								<a class = "decor-desired w-women sub-menu-clickable"  rel="decor">
									DECOR
								</a>
							</li>
							<li>
								<a class = "denning-desired w-women sub-menu-clickable"  rel="dinning">
									DINNING
								</a>
							</li>
							<li>
								<a class = "furniture-desired w-women sub-menu-clickable"  rel="furniture">
									FURNITURE
								</a>
							</li> 
						</ul>
					</div>      
				</div>
		</div>   

<?php
	require_once('isset/desired-items.php');

?>


<?php
 	require_once('sub-footer.php');
?>
